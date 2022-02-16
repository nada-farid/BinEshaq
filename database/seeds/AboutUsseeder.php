<?php

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = [
            [
                'id'             => 1,
                'breif'           => 'مثال نص يمكن استبداله',
                'description'          => 'مثال نص يمكن استبداله',
                'email_1'       => 'ee@gmail.com',
                'email_2' => 'ee@gmail.com',
                'vision' => 'مثال نص يمكن استبداله',
                'goals' => 'مثال نص يمكن استبداله',
                'phone_1' => '05217875',	
                'phone_2' => '05217875',
                'address' => 'مثال نص يمكن استبداله',
                'time' => 'مثال نص يمكن استبداله',
                'facebook'=>  'مثال نص يمكن استبداله',
                'twitter'=> 'مثال نص يمكن استبداله',
                'youtube'=>  'مثال نص يمكن استبداله',
                'instegram' => 'مثال نص يمكن استبداله',
                'linkedin' => 'مثال نص يمكن استبداله',
                'services_text' => 'مثال نص يمكن استبداله',
                'projects_text' => 'مثال نص يمكن استبداله',
                'products_text' => 'مثال نص يمكن استبداله',
                'news_text' => 'مثال نص يمكن استبداله',
                'contact_text' => 'مثال نص يمكن استبداله',

            ],
        ];

        AboutUs::insert($about);
    }
}