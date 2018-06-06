<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/1/11
 * @Time: 下午2:15
 * @File: PageTableSeeder.php
 */
use Illuminate\Database\Seeder;
class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->delete();
        for ($i=0; $i < 10; $i++) {
            \App\Article::create([
                'title'   => 'Title '.$i,
                'body'    => 'Body '.$i,
                'user_id' => 1,
            ]);
        }
    }
}