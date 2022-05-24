<?php

use Illuminate\Database\Seeder;
use App\Model\role;

class role_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::create([

            'name'=>'admin',
            'permisstion'=>''
        ]);
        role::create([

            'name'=>'user',
            'permisstion'=>''
        ]);
        
        
    }
}
