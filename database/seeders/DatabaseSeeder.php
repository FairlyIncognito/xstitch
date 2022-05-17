<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(20)->create();

        User::find(1)->update([
            'name' => 'Mickey',
            'email' => 'mickeybrasmussen@gmail.com',
        ]);
    }
}