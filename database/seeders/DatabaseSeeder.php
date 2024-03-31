<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(50)->create();
        \App\Models\Role::factory(5)->create();
        \App\Models\UserInfo::factory(50)->create();
        \App\Models\UserRole::factory(50)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Produce::factory(50)->create();
        \App\Models\Product::factory(50)->create();
        \App\Models\CategoryProduct::factory(50)->create();
        \App\Models\Permission::factory(50)->create();
        \App\Models\PermissionRole::factory(50)->create();
        \App\Models\Gallery::factory(10)->create();
        \App\Models\News::factory(10)->create();


    }
}
