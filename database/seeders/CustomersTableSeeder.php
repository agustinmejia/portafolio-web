<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'full_name' => 'Sara Wilsson',
                'job' => 'CEO',
                'photo' => NULL,
                'message' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.',
                'created_at' => '2022-08-02 23:13:55',
                'updated_at' => '2022-08-02 23:13:55',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'full_name' => 'Matt Brandon',
                'job' => 'CTO',
                'photo' => NULL,
                'message' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi',
                'created_at' => '2022-08-02 23:14:42',
                'updated_at' => '2022-08-02 23:25:42',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'full_name' => 'Jena Karlis',
                'job' => 'Store Owner',
                'photo' => NULL,
                'message' => 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata.',
                'created_at' => '2022-08-02 23:15:37',
                'updated_at' => '2022-08-02 23:15:37',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'full_name' => 'Saul Goodman',
                'job' => 'Ceo & Founder',
                'photo' => NULL,
                'message' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi',
                'created_at' => '2022-08-02 23:16:15',
                'updated_at' => '2022-08-02 23:30:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}