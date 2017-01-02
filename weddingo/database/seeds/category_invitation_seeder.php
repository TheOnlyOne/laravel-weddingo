<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class category_invitation_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $cat_num = 5;
        foreach (range(1,5) as $index) {
            DB::table('category_invitation')->insert([
                'name' => $faker->name,
            ]);
        }
    }
}
