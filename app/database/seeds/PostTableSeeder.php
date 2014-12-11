<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            Post::create([
                'title'       => '我的假文章第 ' . $index . ' 篇',
                'content'     => '假文章內容假文章內容假文章內容假文章內容假文章內容假文章內容假文章內容假文章內容',
                'category_id' => 1,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ]);
		}
	}

}