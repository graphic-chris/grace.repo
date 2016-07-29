<?php

use Illuminate\Database\Seeder;

class ActivationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activations')->delete();
        
        \DB::table('activations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'code' => '1',
                'completed' => 1,
                'completed_at' => '2016-05-12 13:56:23',
                'created_at' => '2016-05-12 13:56:32',
                'updated_at' => '2016-05-12 13:56:37',
            ),
        ));
        
        
    }
}
