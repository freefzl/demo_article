<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE Article


        \DB::table('Article')->insert([
            0 => [
                'id'             => 1,
                'title'           => '这是标题',
                'content'          => '这个是内容',
                'created_at'     => '2018-04-18 15:13:02',
                'updated_at'     => '2018-05-18 14:33:50',
            ],
        ]);


    }
}
