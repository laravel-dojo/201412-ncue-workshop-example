<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('zh_TW');
        
        DB::table('posts')->truncate();
        
		foreach(range(1, 50) as $index)
		{
            Post::create([
                'title'       => $faker->sentence(10),
                'content'     => $faker->paragraph(5),
                'category_id' => rand(1, 4),
                'created_at'  => \Carbon\Carbon::now()->addDays($index),
                'updated_at'  => \Carbon\Carbon::now()->addDays($index),
            ]);
		}
	}

}