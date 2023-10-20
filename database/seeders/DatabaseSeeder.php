<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Loren ipsum dolar sit amet',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Loren ipsum dolar sit amet',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Loren ipsum dolar sit amet',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ]);
    }
}
