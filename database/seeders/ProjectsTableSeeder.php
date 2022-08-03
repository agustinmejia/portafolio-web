<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Gerente de Restaurantes',
                'slug' => 'gerente-de-restaurantes',
                'category' => 'Web',
                'date' => '2022-06-10',
                'url' => 'https://gerente.rest',
                'description' => '<p><span style="color: #272829; font-family: \'Open Sans\', sans-serif; font-size: 16px;">Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.</span></p>',
                'images' => NULL,
                'created_at' => '2022-08-02 21:46:47',
                'updated_at' => '2022-08-02 21:55:41',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'PhoneStore',
                'slug' => 'phonestore',
                'category' => 'Web',
                'date' => '2022-04-02',
                'url' => 'https://phonestore.ideacreativa.dev',
                'description' => '<p><span style="color: #272829; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #f5f8fd;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</span></p>',
                'images' => NULL,
                'created_at' => '2022-08-02 21:55:12',
                'updated_at' => '2022-08-02 21:55:12',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Eshop',
                'slug' => 'eshop',
                'category' => 'Web',
                'date' => '2021-09-23',
                'url' => 'https://eshop.ideacreativa.dev',
                'description' => '<p><span style="color: #272829; font-family: \'Open Sans\', sans-serif; font-size: 16px; background-color: #f5f8fd;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</span></p>',
                'images' => NULL,
                'created_at' => '2022-08-02 21:56:53',
                'updated_at' => '2022-08-02 21:56:53',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'MiMap',
                'slug' => 'mimap',
                'category' => 'App',
                'date' => '2022-07-01',
                'url' => 'https://ideacreativa.dev',
                'description' => '<p><span style="background-color: #f5f8fd; color: #272829; font-family: \'Open Sans\', sans-serif; font-size: 16px;">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</span></p>',
                'images' => NULL,
                'created_at' => '2022-08-02 22:01:17',
                'updated_at' => '2022-08-02 23:32:55',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}