
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&family=Syne:wght@600;800&display=swap" rel="stylesheet">

<div id="ksmif-countdown-popup"
     class="ksmif-overlay"
     role="dialog"
     aria-modal="true"
     aria-label="Open Registration KSM-IF Batch I"
     style="display: none;">

    <div class="ksmif-card">
        <img class="ksmif-logo"
             src="{{ asset('images/icon/ksmHytam.svg') }}"
             alt="Logo KSM-IF Universitas Surabaya">

        <p class="ksmif-subtitle">Kelompok Studi Mahasiswa Informatika</p>
        <h2 class="ksmif-title">"Open Registration"</h2>
        <p class="ksmif-batch">Batch I</p>

        <div class="ksmif-timer" aria-label="Waktu menuju pembukaan registrasi">
            <span class="ksmif-unit"><b id="ksmif-days">00</b><i>d</i></span>
            <span class="ksmif-sep">:</span>
            <span class="ksmif-unit"><b id="ksmif-hours">00</b><i>h</i></span>
            <span class="ksmif-sep">:</span>
            <span class="ksmif-unit"><b id="ksmif-minutes">00</b><i>m</i></span>
            <span class="ksmif-sep">:</span>
            <span class="ksmif-unit"><b id="ksmif-seconds">00</b><i>s</i></span>
        </div>

        <div class="ksmif-actions">
            <a class="ksmif-btn ksmif-btn-solid" href="#join">Join Us</a>
            <a class="ksmif-btn ksmif-btn-outline" href="#about">About Us</a>
        </div>

        <button type="button" class="ksmif-back" id="ksmif-close">
            back to homepage
        </button>
    </div>
</div>

<style>
    .ksmif-overlay {
        position: fixed;
        inset: 0;
        z-index: 100000;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        animation: ksmif-fade 0.3s ease;
        cursor: pointer;
    }

    .ksmif-card {
        box-sizing: border-box;
        width: 100%;
        max-width: 640px;
        max-height: 100%;
        overflow-y: auto;
        padding: 44px 28px 36px;
        text-align: center;
        color: #000;
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 24px 80px rgba(0, 0, 0, 0.45);
        cursor: default;
        font-family: 'Jersey10', sans-serif;
    }

    .ksmif-logo {
        display: block;
        width: min(150px, 40%);
        height: auto;
        margin: 0 auto 18px;
    }

    #ksmif-countdown-popup .ksmif-subtitle {
    margin: 0 !important;
    padding: 0 !important;
    font-family: 'Silkscreen', monospace;
    font-size: 16px;
    line-height: 1 !important;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    }

    #ksmif-countdown-popup .ksmif-title {
    margin: 0 !important;
    padding: 0 !important;
    color: #000;
    font-family: 'Silkscreen', monospace;
    font-size: clamp(30px, 8vw, 45px);
    font-weight: 700;
    line-height: 1.1 !important;
    text-transform: uppercase;
    }

    #ksmif-countdown-popup .ksmif-batch {
    margin: 0 !important;
    padding: 0 !important;
    font-family: 'Silkscreen', monospace;
    font-size: clamp(16px, 9vw, 26px);
    line-height: 1 !important;
    text-transform: uppercase;
 }
    .ksmif-timer {
        display: flex;
        align-items: baseline;
        justify-content: center;
        gap: clamp(4px, 1.5vw, 10px);
        margin: 26px 0 28px;
        font-family: 'Silkscreen', monospace;
        font-variant-numeric: tabular-nums;
    }

    .ksmif-unit b {
        font-size: clamp(30px, 9vw, 50px);
        font-weight: 700;
        line-height: 1;
    }

    .ksmif-unit i {
        margin-left: 2px;
        font-size: clamp(12px, 3vw, 16px);
        font-style: normal;
    }

    .ksmif-sep {
        font-size: clamp(28px, 8vw, 44px);
        font-weight: 700;
        line-height: 1;
    }

    .ksmif-actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
    }

    .ksmif-btn {
        display: inline-block;
        padding: 10px 22px;
        border: 1px solid #1c1c1c;
        border-radius: 7px;
        font-family: 'Syne', system-ui, sans-serif;
        font-size: 12px;
        font-weight: 800;
        text-decoration: none;
        transition: background 0.2s ease, color 0.2s ease;
    }

    .ksmif-btn-solid {
        color: #fff;
        background: #1c1c1c;
    }

    .ksmif-btn-solid:hover {
        color: #fff;
        background: #000;
    }

    .ksmif-btn-outline {
        color: #1c1c1c;
        background: #fff;
    }

    .ksmif-btn-outline:hover {
        color: #fff;
        background: #1c1c1c;
    }

    .ksmif-back {
        margin-top: 20px;
        padding: 0;
        color: #000;
        font-family: 'Syne', system-ui, sans-serif;
        font-size: 12px;
        font-weight: 800;
        text-decoration: underline;
        background: none;
        border: 0;
        cursor: pointer;
    }

    .ksmif-btn:focus-visible,
    .ksmif-back:focus-visible {
        outline: 2px solid #4f46e5;
        outline-offset: 3px;
    }

    @keyframes ksmif-fade {
        from { opacity: 0; }
        to { opacity: 1; }
    }


    @media (max-width: 600px) {
    .ksmif-overlay {
        box-sizing: border-box;
        padding: 16px;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
    }

    .ksmif-card {
        box-sizing: border-box;
        width: 100%;
        max-width: 420px;
        max-height: calc(100dvh - 32px);
        height: auto;
        overflow-y: auto;
        padding: 28px 16px;
        border-radius: 14px;
        box-shadow: 0 24px 80px rgba(0, 0, 0, 0.35);
    }

    .ksmif-logo {
        width: min(120px, 40%);
        margin-bottom: 14px;
    }

    .ksmif-subtitle {
        font-size: 10px;
    }

    .ksmif-title {
        font-size: clamp(20px, 6vw, 30px);
    }

    .ksmif-batch {
        font-size: 14px;
    }

    .ksmif-timer {
        width: 100%;
        gap: 4px;
        margin: 24px 0;
        padding: 0 6px; 
    }

    .ksmif-unit b {
        font-size: clamp(24px, 8vw, 36px);
    }

    .ksmif-unit i {
        font-size: 10px;
    }

    .ksmif-sep {
        font-size: clamp(22px, 7vw, 32px);
    }

    .ksmif-actions {
        gap: 10px;
    }

    .ksmif-btn {
        padding: 10px 16px;
        font-size: 11px;
    }

    .ksmif-back {
        margin-top: 22px;
    }
    }


    @media (prefers-reduced-motion: reduce) {
        .ksmif-overlay {
            animation: none;
        }
    }

    @font-face {
    font-family: 'Jersey10';
    src: url('../public/fonts/Jersey10-Regular.ttf');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
}

#ksmif-countdown-popup,
#ksmif-countdown-popup * {
    font-family: 'Jersey10', sans-serif !important;
}
</style>

<script>
(() => {
    const popup = document.getElementById('ksmif-countdown-popup');

    if (!popup || popup.dataset.initialized === 'true') return;
    popup.dataset.initialized = 'true';

    const sessionKey = 'ksmif_countdown_closed';
    const closeButton = document.getElementById('ksmif-close');

    const els = {
        d: document.getElementById('ksmif-days'),
        h: document.getElementById('ksmif-hours'),
        m: document.getElementById('ksmif-minutes'),
        s: document.getElementById('ksmif-seconds')
    };

    // GANTI dengan tanggal dan waktu registrasi yang sebenarnya.
    // Format: YYYY-MM-DDTHH:mm:ss+07:00 (Waktu Indonesia Barat).
    const targetDate = new Date('2026-12-31T00:00:00+07:00').getTime();

    let timerInterval = null;
    let closed = false;

    function wasClosed() {
        try {
            return sessionStorage.getItem(sessionKey) === '1';
        } catch (error) {
            return false;
        }
    }

    function updateCountdown() {
        const remaining = Math.max(0, targetDate - Date.now());

        els.d.textContent = String(Math.floor(remaining / 86400000)).padStart(2, '0');
        els.h.textContent = String(Math.floor((remaining % 86400000) / 3600000)).padStart(2, '0');
        els.m.textContent = String(Math.floor((remaining % 3600000) / 60000)).padStart(2, '0');
        els.s.textContent = String(Math.floor((remaining % 60000) / 1000)).padStart(2, '0');

        if (remaining <= 0 && timerInterval !== null) {
            clearInterval(timerInterval);
            timerInterval = null;
        }
    }

    function closePopup() {
        if (closed) return;
        closed = true;

        try {
            sessionStorage.setItem(sessionKey, '1');
        } catch (error) {
            // Popup tetap bisa ditutup jika penyimpanan sesi tidak tersedia.
        }

        if (timerInterval !== null) {
            clearInterval(timerInterval);
            timerInterval = null;
        }

        popup.remove();
        document.removeEventListener('keydown', handleKeydown);
    }

    function handleKeydown(event) {
        if (event.key === 'Escape') {
            closePopup();
        }
    }

    // Hanya klik area gelap di luar kartu yang langsung menutup popup.
    // Link Join Us dan About Us tetap dapat diklik.
    popup.addEventListener('click', (event) => {
        if (event.target === popup) {
            closePopup();
        }
    });

    closeButton.addEventListener('click', closePopup);
    document.addEventListener('keydown', handleKeydown);

    updateCountdown();
    timerInterval = setInterval(updateCountdown, 1000);

    function loadingIsFinished() {
        // Selector umum untuk beberapa pola loading.
        const loading = document.querySelector(
            '#loading, #loader, .loading-screen, .loading-overlay, .loader'
        );

        // Jika tidak ada elemen loading yang cocok, anggap loading selesai.
        if (!loading) return true;

        const style = getComputedStyle(loading);
        const rect = loading.getBoundingClientRect();

        return loading.hidden ||
            style.display === 'none' ||
            style.visibility === 'hidden' ||
            Number(style.opacity) === 0 ||
            rect.width === 0 ||
            rect.height === 0;
    }

    function showPopup() {
        if (closed || !popup.isConnected) return;

        if (wasClosed()) {
            popup.remove();
            return;
        }

        popup.style.display = 'flex';
    }

    function waitForLoading() {
        if (closed || !popup.isConnected) return;

        if (wasClosed()) {
            popup.remove();
            return;
        }

        if (loadingIsFinished()) {
            showPopup();
            return;
        }

        requestAnimationFrame(waitForLoading);
    }

    // Tunggu seluruh aset halaman selesai dimuat terlebih dahulu.
    if (document.readyState === 'complete') {
        waitForLoading();
    } else {
        window.addEventListener('load', waitForLoading, { once: true });
    }
})();
</script>