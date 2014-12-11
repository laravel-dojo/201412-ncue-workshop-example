<?php

class CategoryTableSeeder extends Seeder {

	public function run()
	{
        Category::create([
            'name'       => '生活記事',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ]);
 
        Category::create([
            'name'       => '心情寫真',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ]);
 
        Category::create([
            'name'       => '學習成果',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ]);
 
        Category::create([
            'name'       => '雜項',
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ]);
	}

}