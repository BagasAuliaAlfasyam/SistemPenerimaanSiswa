<?php

use App\Models\Panitia;
use Illuminate\Database\Seeder;

class PanitiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = ['nip' => '7547774',
            'name' => 'panitia',
            'jk' => 'Laki-laki',
            'no_tlp' => '085236135592',
            'email' => 'panitia_smk_@gmail.com',
            'password' => bcrypt('rahasia'),
            'role' => 'panitia'];
        Panitia::insert($data);
    }
}
