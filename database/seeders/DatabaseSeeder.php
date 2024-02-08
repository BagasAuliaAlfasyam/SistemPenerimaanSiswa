<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(UserSeeder::class);
        //$this->call(PanitiaSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //
        $data = ['name' => 'admin',
            'jk' => 'Laki-laki',
            'no_tlp' => '085236135592',
            'email' => 'admin_smk_@gmail.com',
            'password' => bcrypt('rahasia'),
            'role' => 'admin'];
        User::insert($data);

        {
            //
            $data = ['name' => 'panitia',
                'jk' => 'Laki-laki',
                'no_tlp' => '085236135592',
                'email' => 'panitia_smk_@gmail.com',
                'password' => bcrypt('rahasia'),
                'role' => 'panitia'];
            User::insert($data);
        }
        {
            //
            $data = ['name' => 'siswa',
                'jk' => 'Laki-laki',
                'no_tlp' => '085236135592',
                'email' => 'siswa_smk_@gmail.com',
                'password' => bcrypt('rahasia'),
                'role' => 'siswa'];
            User::insert($data);
        }
    }
}
