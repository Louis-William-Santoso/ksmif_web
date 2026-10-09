<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Google\Cloud\RecaptchaEnterprise\V1\Client\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\CreateAssessmentRequest;

class Capcha
{
    private string $siteKey = '6LeJ6MstAAAAAATa140lGtWzMrna8zrPatO65r5H';
    private string $projectId = 'bursasoal';
    private float $threshold = 0.5;
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $expectedAction = 'submit'): Response
    {
        // 1. Ambil token yang dikirim dari form
        $token = $request->input('g-recaptcha-response');

        if (!$token) {
            return back()->withErrors(['recaptcha' => 'Token reCAPTCHA tidak ditemukan.']);
        }

        // 2. Cek skor ke Google Enterprise API
        $score = $this->getScoreFromGoogle($token, $expectedAction);

        // 3. Jika token tidak valid atau skor di bawah threshold, BLOKIR request
        if ($score === null || $score < $this->threshold) {
            return back()->withErrors(['recaptcha' => 'Akses ditolak. Aktivitas mencurigakan terdeteksi.']);
        }

        // 4. Jika lolos, teruskan request ke Controller
        return $next($request);
    }

    private function getScoreFromGoogle(string $token, string $expectedAction): ?float
    {
        try {
            $client = new RecaptchaEnterpriseServiceClient();
            $projectName = $client->projectName($this->projectId);

            $event = (new Event())
                ->setSiteKey($this->siteKey)
                ->setToken($token);

            $assessment = (new Assessment())->setEvent($event);

            $request = (new CreateAssessmentRequest())
                ->setParent($projectName)
                ->setAssessment($assessment);

            $response = $client->createAssessment($request);

            // Validasi kelayakan token & kesesuaian action
            if (!$response->getTokenProperties()->getValid()) {
                return null;
            }

            if ($response->getTokenProperties()->getAction() !== $expectedAction) {
                return null;
            }

            return $response->getRiskAnalysis()->getScore();
        } catch (\Exception $e) {
            return null;
        }
    }
}
