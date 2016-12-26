<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(category_invitation_seeder::class);
        $this->call(wedding_guest_invitation::class);
    }
}
