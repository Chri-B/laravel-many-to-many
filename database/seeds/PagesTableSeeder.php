<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\User;
use App\Category;
use App\Page;
use App\Photo;
use App\Tag;


class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
            // controllo dell'esistenza di user e category
            $user = User::inRandomOrder()->first();
            $category = Category::inRandomOrder()->first();

            // popolamento
            $page = new Page;
            $page->user_id = $user->id;
            $page->category_id = $category->id;
            $page->title = $faker->sentence(3, true);
            $page->body = $faker->paragraph(3, true);
            $page->summary = $faker->sentence(3, true);
            $page->slug = Str::slug($page->title , '-') . rand(1, 100);
            $page->save(); // sempre save a fine seeder

            // genero anche i dati per le tabelle pivot
            $photos = Photo::inRandomOrder()->limit(3)->get();
            $page->photos()->attach($photos);
            $tags = Tag::inRandomOrder()->limit(3)->get();
            $page->tags()->attach($tags);
        }


    }
}
