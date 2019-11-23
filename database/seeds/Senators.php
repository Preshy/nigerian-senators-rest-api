<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Senators extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('senators')->insert([
            'name' => 'Sen. E. Abaribe',
            'state' => 'Abia',
            'phoneNo' => '08033129452',
            'email' => 'enyiabaribe@yahoo.com'
        ]);

        DB::table('senators')->insert([
            'name' => 'Sen. E. Abaribe',
            'state' => 'Abia',
            'phoneNo' => '08033129452',
            'email' => 'enyiabaribe@yahoo.com'
        ]);
    }
}
