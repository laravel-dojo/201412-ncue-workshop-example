<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        
        DB::table('comments')->truncate();

		foreach(range(1, 20) as $index)
		{
            Comment::create([
                'name'       => '留言者 ' . $index,
                'email'      => 'tester' . $index . '@test.com',
                'content'    => '假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容假回覆內容',
                'post_id'    => rand(1, 50),
                'created_at' => \Carbon\Carbon::now()->addDays($index),
                'updated_at' => \Carbon\Carbon::now()->addDays($index),
            ]);
		}
	}

}