<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $me = User::factory()->create([
            'name' => config('app.seed_user_name'),
            'email' => config('app.seed_user_email'),
        ]);

        Company::factory(10)->for($me)->create();

        for ($i = 0; $i < 10; $i++) {
            User::factory()->has(Company::factory(rand(0, 5)))->create();
        }

    }
}
