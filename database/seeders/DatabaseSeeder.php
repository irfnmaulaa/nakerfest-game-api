<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $games = [
            [
                'title' => 'Tebak Bendera',
                'players_count' => 1,
            ],
            [
                'title' => 'Panjat Pinang',
                'players_count' => 1,
            ],
            [
                'title' => 'Invisible Maze',
                'players_count' => 2,
            ],
            [
                'title' => 'Rubik Timer',
                'players_count' => 1,
            ],
        ];
        foreach ($games as $game) {
            $game['slug'] = Str::slug($game['title']);
            Game::create($game);
        }
    }
}
