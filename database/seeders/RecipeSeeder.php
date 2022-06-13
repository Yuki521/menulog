<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::factory()->create(['title' => 'ご飯', 'calorie' => '60']);
        Recipe::factory()->create(['title' => 'ハンバーグ', 'calorie' => '200.5']);
        Recipe::factory()->create(['title' => '目玉焼き', 'calorie' => '120']);
        Recipe::factory()->create(['title' => 'サーモン', 'calorie' => '120']);
        Recipe::factory()->create(['title' => '海苔', 'calorie' => '20']);
    }
}
