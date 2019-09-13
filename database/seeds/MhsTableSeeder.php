<?php

use Illuminate\Database\Seeder;

class MhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
            foreach(range(0,10) as $i){
                DB::table('mhs')->insert([
                'nim' => $faker->randomNumber(8),
                'nama' => $faker->name,
                'email' => $faker->email,
                'hp' => $faker->phoneNumber
            ]);
        }
    }
}
