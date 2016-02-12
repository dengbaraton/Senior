<?php

use Illuminate\Database\Seeder;

class AllTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\users::class, 5)->create();
        factory(App\roles::class, 3)->create();
        factory(App\automobiles::class, 546)->create();
        factory(App\requests::class, 546)->create();
        factory(App\server_providers::class, 999)->create();

    }
}
