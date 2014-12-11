<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        
        DB::table('posts')->truncate();
        
		foreach(range(1, 50) as $index)
		{
            Post::create([
                'title'       => '我的假文章第 ' . $index . ' 篇',
                'content'     => '假文章內容假文章內容假文章內容假文章內容假文章內容假文章內容假文章內容假文章內容',
                'category_id' => rand(1, 4),
                'created_at'  => \Carbon\Carbon::now()->addDays($index),
                'updated_at'  => \Carbon\Carbon::now()->addDays($index),
            ]);
		}
	}

}