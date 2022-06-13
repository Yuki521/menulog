<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::factory()->create(['title' => 'ハンバーグ弁当', 'type' => '洋食']);
        Menu::factory()->create(['title' => '鮭弁当', 'type' => '和食']);
        Menu::factory()->create(['title' => '海苔弁当', 'type' => '和食']);
    }
}
