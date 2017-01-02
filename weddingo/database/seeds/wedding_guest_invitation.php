<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class wedding_guest_invitation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $guest_num = 15;
        foreach (range(1,$guest_num) as $index) {
            DB::table('wedding_invitations')->insert([
                'name' => $faker->name,
                'phone_number' => $faker->phoneNumber,
                'wedding_id' => mt_rand(1, 6),
                'guests_num' => mt_rand(1,4),
                'is_coming' => mt_rand(0, 2),
                'category_id' => mt_rand(1, 6),
            ]);
        }
    }
}
