<?php

use Illuminate\Database\Seeder;
use App\Model\dn_model;
class dn_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker\Factory::create();
            for($i = 0; $i < 200; $i++)
                { $dangnhap = new dn_model;
                  $dangnhap->username = $faker ->name;
                  $dangnhap->password = $faker ->password;
                  $dangnhap->save();
              }
    }
}
