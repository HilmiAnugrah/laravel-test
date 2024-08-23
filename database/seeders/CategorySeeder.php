<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);
        Category::create([
            'title' => 'UI UX Design',
            'slug' => 'ui-ux-design',
            'color' => 'blue'
        ]);
        Category::create([
            'title' => 'Forntend Developer',
            'slug' => 'frontend-developer',
            'color' => 'green'
        ]);
        Category::create([
            'title' => 'Backend Developer',
            'slug' => 'backend-developer',
            'color' => 'yellow'
        ]);
        Category::create([
            'title' => 'Fullstack Developer',
            'slug' => 'fullstack-developer',
            'color' => 'purple'
        ]);
    }
}
