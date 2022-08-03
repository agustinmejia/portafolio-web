<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skills')->delete();
        
        \DB::table('skills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'HTML',
                'description' => NULL,
                'value' => 100,
                'created_at' => '2022-08-02 19:06:42',
                'updated_at' => '2022-08-02 19:06:42',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'PHP',
                'description' => NULL,
                'value' => 85,
                'created_at' => '2022-08-02 19:06:49',
                'updated_at' => '2022-08-02 19:06:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'CSS',
                'description' => NULL,
                'value' => 50,
                'created_at' => '2022-08-02 19:07:06',
                'updated_at' => '2022-08-02 19:07:06',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'JavaScript',
                'description' => NULL,
                'value' => 80,
                'created_at' => '2022-08-02 19:07:28',
                'updated_at' => '2022-08-02 19:18:21',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Manejo de servidores',
                'description' => NULL,
                'value' => 50,
                'created_at' => '2022-08-02 19:07:58',
                'updated_at' => '2022-08-02 19:07:58',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Desarrollo de apps',
                'description' => NULL,
                'value' => 80,
                'created_at' => '2022-08-02 19:08:20',
                'updated_at' => '2022-08-02 19:08:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}