<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ResumesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('resumes')->delete();
        
        \DB::table('resumes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category' => 'educacion',
                'title' => 'MASTER OF FINE ARTS & GRAPHIC DESIGN',
                'subtitle' => 'Rochester Institute of Technology, Rochester, NY',
                'start' => 2015,
                'finish' => 2016,
                'description' => '<p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend.</p>',
                'created_at' => '2022-08-02 20:32:16',
                'updated_at' => '2022-08-02 20:58:45',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category' => 'educacion',
                'title' => 'BACHELOR OF FINE ARTS & GRAPHIC DESIGN',
                'subtitle' => 'Rochester Institute of Technology, Rochester, NY',
                'start' => 2010,
                'finish' => 2014,
                'description' => '<p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila.</p>',
                'created_at' => '2022-08-02 20:33:20',
                'updated_at' => '2022-08-02 20:58:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category' => 'profesion',
                'title' => 'SENIOR GRAPHIC DESIGN SPECIALIST',
                'subtitle' => 'Experion, New York, NY',
                'start' => 2019,
                'finish' => NULL,
                'description' => '<ul style="box-sizing: border-box; padding-left: 20px; margin-top: 0px; margin-bottom: 1rem; color: #272829; font-family: \'Open Sans\', sans-serif; font-size: 16px;">
<li style="box-sizing: border-box; padding-bottom: 10px;">Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
<li style="box-sizing: border-box; padding-bottom: 10px;">Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.</li>
<li style="box-sizing: border-box; padding-bottom: 10px;">Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
<li style="box-sizing: border-box; padding-bottom: 10px;">Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
</ul>',
                'created_at' => '2022-08-02 20:34:04',
                'updated_at' => '2022-08-02 20:58:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category' => 'profesion',
                'title' => 'GRAPHIC DESIGN SPECIALIST',
                'subtitle' => 'Stepping Stone Advertising, New York, NY',
                'start' => 2017,
                'finish' => 2018,
                'description' => '<ul style="box-sizing: border-box; padding-left: 20px; margin-top: 0px; margin-bottom: 1rem; color: #272829; font-family: \'Open Sans\', sans-serif; font-size: 16px;">
<li style="box-sizing: border-box; padding-bottom: 10px;">Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
<li style="box-sizing: border-box; padding-bottom: 10px;">Managed up to 5 projects or tasks at a given time while under pressure</li>
<li style="box-sizing: border-box; padding-bottom: 10px;">Recommended and consulted with clients on the most appropriate graphic design</li>
<li style="box-sizing: border-box; padding-bottom: 10px;">Created 4+ design presentations and proposals a month for clients and account managers</li>
</ul>',
                'created_at' => '2022-08-02 20:37:02',
                'updated_at' => '2022-08-02 20:58:29',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}