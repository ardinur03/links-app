<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\LinkUser::factory(2)->create();
    }
}
