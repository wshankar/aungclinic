<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each(function ($u)
        {
            $u->patients()
              ->saveMany(
                    factory(App\Patient::class, rand(1,5))->make()
                );

        });
    }
}
