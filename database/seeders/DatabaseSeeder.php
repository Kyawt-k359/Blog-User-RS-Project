<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(10)->create();
       Blog::factory(10)->create();

       /* $user=User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => ''
            
         ]);

       $category= Category::create([
            'name'=> 'Frontend',
            'slug'=> 'fontend'       
         ]);
         
         


        Blog::create([
            'title' => 'my first blog',
            'slug' =>'my-first-blog' ,
             'body' =>'loream',
            'category_id'=> $category->id,
            'user_id'=> $user->id


         ]);*/
    }
}
