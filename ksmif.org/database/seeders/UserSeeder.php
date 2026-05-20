<?php

namespace Database\Seeders;

use App\Models\Members;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 's160423037',
                'full_name' => 'Aria Hansa Junior',
                'password' => '#_BePeH!',
                'email' => 's160423037@student.ubaya.ac.id',
                'NRP' => '160423037',
                'status' => true
            ],
            [
                'username' => 's160424024',
                'full_name' => 'Leonardo Edbert Yongnata',
                'password' => '#_BePeH!',
                'email' => 's160424024@student.ubaya.ac.id',
                'NRP' => '160424024',
                'status' => true
            ],
            [
                'username' => 's160424077',
                'full_name' => 'Giffert Matthew Richardsen Liwang',
                'password' => '#_BePeH!',
                'email' => 's160424077@student.ubaya.ac.id',
                'NRP' => '160424077',
                'status' => true
            ],
            [
                'username' => 's160423230',
                'full_name' => 'Akmal Achmad Aryawan',
                'password' => '#_BePeH!',
                'email' => 's160423230@student.ubaya.ac.id',
                'NRP' => '160423230',
                'status' => true
            ],
            [
                'username' => 's160423183',
                'full_name' => 'Hans Aristo Cavell',
                'password' => 'pI-R-D25',
                'email' => 's160423183@student.ubaya.ac.id',
                'NRP' => '160423183',
                'status' => true
            ],
            [
                'username' => 's160423091',
                'full_name' => 'Enrich Daniel Ong',
                'password' => 'pI-R-D25',
                'email' => 's160423091@student.ubaya.ac.id',
                'NRP' => '160423091',
                'status' => true
            ],
            [
                'username' => 's160425021',
                'full_name' => 'Jonathan Ariel',
                'password' => 'pI-R-D25',
                'email' => 's160425021@student.ubaya.ac.id',
                'NRP' => '160425021',
                'status' => true
            ],
            [
                'username' => 's160425029',
                'full_name' => 'Kevin Nathanael Wibisono',
                'password' => 'pI-R-D25',
                'email' => 's160425029@student.ubaya.ac.id',
                'NRP' => '160425029',
                'status' => true
            ],
            [
                'username' => 's160425121',
                'full_name' => 'Richard Akwila Kristanto',
                'password' => 'pI-R-D25',
                'email' => 's160425121@student.ubaya.ac.id',
                'NRP' => '160425121',
                'status' => true
            ],
            [
                'username' => 's160425133',
                'full_name' => 'Kezia Aurelia Verly',
                'password' => 'pI-R-D25',
                'email' => 's160425133@student.ubaya.ac.id',
                'NRP' => '160425133',
                'status' => true
            ],
            [
                'username' => 's160425177',
                'full_name' => 'Helena Romamay',
                'password' => 'pI-R-D25',
                'email' => 's160425177@student.ubaya.ac.id',
                'NRP' => '160425177',
                'status' => true
            ],
            [
                'username' => 's160425900',
                'full_name' => 'Thea Gizella Budiman',
                'password' => 'pI-R-D25',
                'email' => 's160425900@student.ubaya.ac.id',
                'NRP' => '160425900',
                'status' => true
            ],
            [
                'username' => 's160424027',
                'full_name' => 'Frederick Kevin',
                'password' => '!PrD_(IF25)',
                'email' => 's160424027@student.ubaya.ac.id',
                'NRP' => '160424027',
                'status' => true
            ],
            [
                'username' => 's160424053',
                'full_name' => 'Jason Terry Karyadinata',
                'password' => '!PrD_(IF25)',
                'email' => 's160424053@student.ubaya.ac.id',
                'NRP' => '160424053',
                'status' => true
            ],
            [
                'username' => 's160425008',
                'full_name' => 'Nathan Steve Christian',
                'password' => '!PrD_(IF25)',
                'email' => 's160425008@student.ubaya.ac.id',
                'NRP' => '160425008',
                'status' => true
            ],
            [
                'username' => 's160425025',
                'full_name' => 'Jesslyn Alena Indargo',
                'password' => '!PrD_(IF25)',
                'email' => 's160425025@student.ubaya.ac.id',
                'NRP' => '160425025',
                'status' => true
            ],
            [
                'username' => 's160425075',
                'full_name' => 'Marcellus Yonathan Tjhua',
                'password' => '!PrD_(IF25)',
                'email' => 's160425075@student.ubaya.ac.id',
                'NRP' => '160425075',
                'status' => true
            ],
            [
                'username' => 's160425154',
                'full_name' => 'Alvian Alif Firmansyah ',
                'password' => '!PrD_(IF25)',
                'email' => 's160425154@student.ubaya.ac.id',
                'NRP' => '160425154',
                'status' => true
            ],
            [
                'username' => 's161125012',
                'full_name' => 'Henry Stanley Wijaya',
                'password' => '!PrD_(IF25)',
                'email' => 's161125012@student.ubaya.ac.id',
                'NRP' => '161125012',
                'status' => true
            ],
            [
                'username' => 's160424089',
                'full_name' => 'Kelvin Adrian Revananda Gunawan',
                'password' => 'GG_G4nt3nG:3',
                'email' => 's160424089@student.ubaya.ac.id',
                'NRP' => '160424089',
                'status' => true
            ],
            [
                'username' => 's160723046',
                'full_name' => 'Fachri Elfreda Pradoto',
                'password' => 'GG_G4nt3nG:3',
                'email' => 's160723046@student.ubaya.ac.id',
                'NRP' => '160723046',
                'status' => true
            ],
            [
                'username' => 's160424176',
                'full_name' => 'Made Putra Girinatha',
                'password' => 'GG_G4nt3nG:3',
                'email' => 's160424176@student.ubaya.ac.id',
                'NRP' => '160424176',
                'status' => true
            ],
            [
                'username' => 's160425001',
                'full_name' => 'Cenneth Wilson Malvin Margono',
                'password' => 'GG_G4nt3nG:3',
                'email' => 's160425001@student.ubaya.ac.id',
                'NRP' => '160425001',
                'status' => true
            ],
            [
                'username' => 's160425006',
                'full_name' => 'Valencia Theodora ',
                'password' => 'GG_G4nt3nG:3',
                'email' => 's160425006@student.ubaya.ac.id',
                'NRP' => '160425006',
                'status' => true
            ],
            [
                'username' => 's160425014',
                'full_name' => 'Ryan Melvin Yuandy',
                'password' => 'GG_G4nt3nG:3',
                'email' => 's160425014@student.ubaya.ac.id',
                'NRP' => '160425014',
                'status' => true
            ],
            [
                'username' => 's160425152',
                'full_name' => 'Arya Eki Nur Seputro ',
                'password' => 'GG_G4nt3nG:3',
                'email' => 's160425152@student.ubaya.ac.id',
                'NRP' => '160425152',
                'status' => true
            ],
            [
                'username' => 's160425159',
                'full_name' => 'Dave Evan Elysia Rudianto',
                'password' => 'GG_G4nt3nG:3',
                'email' => 's160425159@student.ubaya.ac.id',
                'NRP' => '160425159',
                'status' => true
            ],
            [
                'username' => 's160424006',
                'full_name' => 'Louis William Santoso ',
                'password' => 'SuK1_Ng4w1',
                'email' => 's160424006@student.ubaya.ac.id',
                'NRP' => '160424006',
                'status' => true
            ],
            [
                'username' => 's160424070',
                'full_name' => 'Nicholas Davian Gozali',
                'password' => 'SuK1_Ng4w1',
                'email' => 's160424070@student.ubaya.ac.id',
                'NRP' => '160424070',
                'status' => true
            ],
            [
                'username' => 's160424074',
                'full_name' => 'Marcello Elvin Tedjakusuma',
                'password' => 'SuK1_Ng4w1',
                'email' => 's160424074@student.ubaya.ac.id',
                'NRP' => '160424074',
                'status' => true
            ],
            [
                'username' => 's160425004',
                'full_name' => 'Cecilia Quincy Tanaya',
                'password' => 'SuK1_Ng4w1',
                'email' => 's160425004@student.ubaya.ac.id',
                'NRP' => '160425004',
                'status' => true
            ],
            [
                'username' => 's160425094',
                'full_name' => 'Millard Daniel Bidang',
                'password' => 'SuK1_Ng4w1',
                'email' => 's160425094@student.ubaya.ac.id',
                'NRP' => '160425094',
                'status' => true
            ],
            [
                'username' => 's160425104',
                'full_name' => 'Imanelient Arkan',
                'password' => 'SuK1_Ng4w1',
                'email' => 's160425104@student.ubaya.ac.id',
                'NRP' => '160425104',
                'status' => true
            ],
            [
                'username' => 's160425128',
                'full_name' => 'Christopher Elpras Angis',
                'password' => 'SuK1_Ng4w1',
                'email' => 's160425128@student.ubaya.ac.id',
                'NRP' => '160425128',
                'status' => true
            ],
            [
                'username' => 's160425132',
                'full_name' => 'Felicia Glennys Lieanthy',
                'password' => 'SuK1_Ng4w1',
                'email' => 's160425132@student.ubaya.ac.id',
                'NRP' => '160425132',
                'status' => true
            ],
        ];

        $members = [
            [
                'users_id' => 1,
                'period' => 2025,
                'division' => 'BPH',
                'role' => 'Ketua',
            ],
            [
                'users_id' => 2,
                'period' => 2025,
                'division' => 'BPH',
                'role' => 'Wakil Ketua',
            ],
            [
                'users_id' => 3,
                'period' => 2025,
                'division' => 'BPH',
                'role' => 'Sekretaris',
            ],
            [
                'users_id' => 4,
                'period' => 2025,
                'division' => 'BPH',
                'role' => 'Bendahara',
            ],
            [
                'users_id' => 5,
                'period' => 2025,
                'division' => 'IRD',
                'role' => 'Koor',
            ],
            [
                'users_id' => 6,
                'period' => 2025,
                'division' => 'IRD',
                'role' => 'WaKoor',
            ],
            [
                'users_id' => 7,
                'period' => 2025,
                'division' => 'IRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 8,
                'period' => 2025,
                'division' => 'IRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 9,
                'period' => 2025,
                'division' => 'IRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 10,
                'period' => 2025,
                'division' => 'IRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 11,
                'period' => 2025,
                'division' => 'IRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 12,
                'period' => 2025,
                'division' => 'IRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 13,
                'period' => 2025,
                'division' => 'PRD',
                'role' => 'Koor',
            ],
            [
                'users_id' => 14,
                'period' => 2025,
                'division' => 'PRD',
                'role' => 'WaKoor',
            ],
            [
                'users_id' => 15,
                'period' => 2025,
                'division' => 'PRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 16,
                'period' => 2025,
                'division' => 'PRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 17,
                'period' => 2025,
                'division' => 'PRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 18,
                'period' => 2025,
                'division' => 'PRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 19,
                'period' => 2025,
                'division' => 'PRD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 20,
                'period' => 2025,
                'division' => 'HRDD',
                'role' => 'Koor',
            ],
            [
                'users_id' => 21,
                'period' => 2025,
                'division' => 'HRDD',
                'role' => 'WaKoor',
            ],
            [
                'users_id' => 22,
                'period' => 2025,
                'division' => 'HRDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 23,
                'period' => 2025,
                'division' => 'HRDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 24,
                'period' => 2025,
                'division' => 'HRDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 25,
                'period' => 2025,
                'division' => 'HRDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 26,
                'period' => 2025,
                'division' => 'HRDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 27,
                'period' => 2025,
                'division' => 'HRDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 28,
                'period' => 2025,
                'division' => 'CDD',
                'role' => 'Koor',
            ],
            [
                'users_id' => 29,
                'period' => 2025,
                'division' => 'CDD',
                'role' => 'WaKoor',
            ],
            [
                'users_id' => 30,
                'period' => 2025,
                'division' => 'CDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 31,
                'period' => 2025,
                'division' => 'CDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 32,
                'period' => 2025,
                'division' => 'CDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 33,
                'period' => 2025,
                'division' => 'CDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 34,
                'period' => 2025,
                'division' => 'CDD',
                'role' => 'Anggota',
            ],
            [
                'users_id' => 35,
                'period' => 2025,
                'division' => 'CDD',
                'role' => 'Anggota',
            ],
        ];

        foreach($users as $i){
            User::create($i);
        }
        foreach($members as $i){
            Members::create($i);
        }
    }
}
