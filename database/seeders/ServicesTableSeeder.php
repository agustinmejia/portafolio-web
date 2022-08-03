<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Lorem Ipsum',
                'icon' => 'bi bi-briefcase',
                'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
                'created_at' => '2022-08-02 22:59:02',
                'updated_at' => '2022-08-02 22:59:02',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Dolor Sitema',
                'icon' => 'bi bi-bar-chart',
                'description' => 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata',
                'created_at' => '2022-08-02 22:59:20',
                'updated_at' => '2022-08-02 23:07:11',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Sed ut perspiciatis',
                'icon' => 'bi bi-card-checklist',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'created_at' => '2022-08-02 22:59:39',
                'updated_at' => '2022-08-02 23:05:33',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Magni Dolores',
                'icon' => 'bi bi-binoculars',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'created_at' => '2022-08-02 23:00:01',
                'updated_at' => '2022-08-02 23:00:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Nemo Enim',
                'icon' => 'bi bi-brightness-high',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',
                'created_at' => '2022-08-02 23:00:18',
                'updated_at' => '2022-08-02 23:00:18',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Eiusmod Tempor',
                'icon' => 'bi bi-calendar4-week',
                'description' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi',
                'created_at' => '2022-08-02 23:00:36',
                'updated_at' => '2022-08-02 23:00:36',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}