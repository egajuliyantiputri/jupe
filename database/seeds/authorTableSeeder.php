<?php

use Illuminate\Database\Seeder;
class authorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
        $post=[
      ['title'=>'duain','content'=>'pacarin'],];

      DB::table('authors')->insert($author);

    }
}
