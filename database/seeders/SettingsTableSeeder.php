<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'sitio.title',
                'display_name' => 'Título del sitio',
                'value' => 'Template',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Sitio',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'sitio.description',
                'display_name' => 'Descripción del sitio',
                'value' => 'Template Laravel y Voyager',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Sitio',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'sitio.logo',
                'display_name' => 'Logo del sitio',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Sitio',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'sitio.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 19,
                'group' => 'Sitio',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Banner Admin',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Título Admin',
                'value' => 'PortafolioWeb',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Descripción Admin',
                'value' => 'Sistema de administración de portafolio digital',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Loader Admin',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 2,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Ícono Admin',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 5,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'sitio.template',
                'display_name' => 'Plantilla',
                'value' => 'portfolio_1',
                'details' => '{
"options": {
"portfolio_1": "iportfolio",
"portfolio_2": "plantilla 2",
"portfolio_3": "plantilla 3",
"portfolio_4": "plantilla 4"
}
}',
                'type' => 'select_dropdown',
                'order' => 6,
                'group' => 'Sitio',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'datos-personales.full_name',
                'display_name' => 'Nombre completo',
                'value' => 'Agustin Mejia',
                'details' => NULL,
                'type' => 'text',
                'order' => 7,
                'group' => 'Datos personales',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'datos-personales.profession',
                'display_name' => 'Profesión',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Datos personales',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'datos-personales.skills',
                'display_name' => 'Habilidades',
                'value' => 'Programador, diseñador web, desarrollador de apps, administrador de servidores',
                'details' => NULL,
                'type' => 'text',
                'order' => 11,
                'group' => 'Datos personales',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'datos-personales.about',
                'display_name' => 'Acerca de ti',
                'value' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 12,
                'group' => 'Datos personales',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'datos-personales.birthday',
                'display_name' => 'Fecha de nacimiento',
                'value' => '1991-04-29 00:00:00',
                'details' => NULL,
                'type' => 'date',
                'order' => 13,
                'group' => 'Datos personales',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'datos-personales.phone',
                'display_name' => 'Celular',
                'value' => '75199157',
                'details' => NULL,
                'type' => 'text',
                'order' => 14,
                'group' => 'Datos personales',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'datos-personales.city',
                'display_name' => 'Ciudad',
                'value' => 'Santísima Trinidad, Beni - Bolivia',
                'details' => NULL,
                'type' => 'text',
                'order' => 16,
                'group' => 'Datos personales',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'datos-personales.email',
                'display_name' => 'Email',
                'value' => 'agustinmejiamuiba@gmail.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 18,
                'group' => 'Datos personales',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'datos-personales.website',
                'display_name' => 'Sitio web',
                'value' => 'ideacreativa.dev',
                'details' => NULL,
                'type' => 'text',
                'order' => 20,
                'group' => 'Datos personales',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'datos-personales.degree',
                'display_name' => 'Grado de estudio',
                'value' => 'Licenciatura',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Datos personales',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'datos-personales.address',
                'display_name' => 'Dirección',
                'value' => 'Calle Ipurupuro Nro 75, Zona Moxos',
                'details' => NULL,
                'type' => 'text',
                'order' => 15,
                'group' => 'Datos personales',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'datos-personales.photo',
                'display_name' => 'Fotofrafía',
                'value' => NULL,
                'details' => NULL,
                'type' => 'image',
                'order' => 8,
                'group' => 'Datos personales',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'sitio.bg_image',
                'display_name' => 'Banner del sitio',
                'value' => NULL,
                'details' => NULL,
                'type' => 'image',
                'order' => 4,
                'group' => 'Sitio',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'datos-personales.status',
                'display_name' => 'Estado',
                'value' => 'Disponible',
                'details' => '{
"options": {
"Disponible": "Disponible",
"Ocupado": "Ocupado",
"Trabajando": "Trabajando",
"De vacaciones": "De vacaciones"
}
}',
                'type' => 'select_dropdown',
                'order' => 28,
                'group' => 'Datos personales',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'redes-sociales.facebook',
                'display_name' => 'Facebook',
                'value' => 'https://facebook.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 22,
                'group' => 'Redes sociales',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'redes-sociales.instagram',
                'display_name' => 'Instagram',
                'value' => 'https://instagram.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 23,
                'group' => 'Redes sociales',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'redes-sociales.twitter',
                'display_name' => 'Twitter',
                'value' => 'https://twitter.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 24,
                'group' => 'Redes sociales',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'redes-sociales.youtube',
                'display_name' => 'Youtube',
                'value' => 'https://youtube.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 25,
                'group' => 'Redes sociales',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'redes-sociales.whatsapp',
                'display_name' => 'Whatsapp',
                'value' => 'https://wa.me/',
                'details' => NULL,
                'type' => 'text',
                'order' => 21,
                'group' => 'Redes sociales',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'redes-sociales.linkedin',
                'display_name' => 'Linkedin',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 27,
                'group' => 'Redes sociales',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'redes-sociales.github',
                'display_name' => 'Github',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 26,
                'group' => 'Redes sociales',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'datos-personales.location',
                'display_name' => 'Ubicación',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15427.173194592719!2d-64.90966837871137!3d-14.836854546156195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93dd6fd6a686c60b%3A0x796a40110f0b37e8!2zMTTCsDUwJzEzLjQiUyA2NMKwNTQnMDMuNSJX!5e0!3m2!1ses!2sbo!4v1659498576321!5m2!1ses!2sbo',
                'details' => NULL,
                'type' => 'text',
                'order' => 17,
                'group' => 'Datos personales',
            ),
        ));
        
        
    }
}