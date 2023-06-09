<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('_site_settings')->delete();
        
        \DB::table('_site_settings')->insert(array (
            0 => 
            array (
                'address' => NULL,
                'created_at' => NULL,
                'email' => 'info@decomagna.com',
                'email_one' => 'info@decomagna.com',
                'facebook' => 'https://web.facebook.com/decomagnaDev/',
                'favicon' => NULL,
                'google' => NULL,
                'id' => 1,
                'instagram' => 'https://www.instagram.com/decomagna_kenya/',
                'linkedin' => 'https://www.linkedin.com/company/decomagnakenya/',
                'location' => NULL,
                'logo' => 'logo.png',
                'logo_footer' => 'wakzi w-02.png',
                'logo_two' => NULL,
                'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
                'mobile_one' => '+2547796 110511',
                'mobile_two' => '+2547796 110511',
                'mpesa' => NULL,
                'paypal' => NULL,
                'risks' => '<p>"Quick-Step® original flooring solutions made in Belgium | lifetime warranty | affordable prices | extreme durability. Official distributors in KENYA and East-Africa. Up to lifetime warranty, water-proof and scratch proof floors. Discover redefined elegance, discover a lifetime of pleasure, from the biggest flooring manufacturer in the world. Quick-Step®. We provide installation services for all our products. Laminate Flooring | Engineered Wood | Vinyl flooring | Mkeka vinyl sheets"</p>',
                'sitename' => 'Decomagna ltd',
                'tagline' => NULL,
                'tawkTo' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
                'tawkToStatus' => 1,
                'telegram' => '0796 110511
',
                'twitter' => 'https://twitter.com/DecomagnaKenya',
                'updated_at' => NULL,
                'url' => 'https://www.decomagna.com',
                'welcome' => '<p>"Quick-Step® original flooring solutions made in Belgium | lifetime warranty | affordable prices | extreme durability. Official distributors in KENYA and East-Africa. Up to lifetime warranty, water-proof and scratch proof floors. Discover redefined elegance, discover a lifetime of pleasure, from the biggest flooring manufacturer in the world. Quick-Step®. We provide installation services for all our products. Laminate Flooring | Engineered Wood | Vinyl flooring | Mkeka vinyl sheets"</p>
',
                'whatsapp' => '0796 110511
',
                'whatsAppStatus' => 1,
                'youtube' => NULL,
            ),
        ));
        
        
    }
}