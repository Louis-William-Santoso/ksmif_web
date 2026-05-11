<?php

namespace Database\Seeders;

use App\Models\Matkul as ModelsMatkul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            ['id'          => '1604C011',
             'nama_matkul' => 'Algoritm & Programming'
            ],
            ['id'          => '1604Z013',
             'nama_matkul' => 'Literasi Digital'
            ],
            ['id'          => '1604Z012',
             'nama_matkul' => 'Manusia & Pengembangan Diri',
            ],
            ['id'          => '1604C012',
             'nama_matkul' => 'Introduction To Computer Science',
            ],
            ['id'          => '1604Z002',
             'nama_matkul' => 'Pancasila & Kewarganegaraan',
            ],
        ];
        foreach($matkul as $i){
            ModelsMatkul::create($i);
        }
    }
}
