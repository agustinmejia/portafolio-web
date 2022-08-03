<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('facts')->delete();
        
        \DB::table('facts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'value' => '232',
                'title' => 'Happy Clients',
                'subtitle' => 'consequuntur quae',
                'icon' => 'bi bi-emoji-smile',
                'created_at' => '2022-08-02 18:50:54',
                'updated_at' => '2022-08-02 18:50:54',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'value' => '521',
                'title' => 'Projects',
                'subtitle' => 'adipisci atque cum quia aut',
                'icon' => 'bi bi-journal-richtext',
                'created_at' => '2022-08-02 18:51:21',
                'updated_at' => '2022-08-02 18:51:21',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'value' => '1453',
                'title' => 'Hours Of Support',
                'subtitle' => 'aut commodi quaerat',
                'icon' => 'bi bi-headset',
                'created_at' => '2022-08-02 18:51:49',
                'updated_at' => '2022-08-02 18:51:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'value' => '32',
                'title' => 'Hard Workers',
                'subtitle' => 'rerum asperiores dolor',
                'icon' => 'bi bi-people',
                'created_at' => '2022-08-02 18:52:13',
                'updated_at' => '2022-08-02 18:52:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}