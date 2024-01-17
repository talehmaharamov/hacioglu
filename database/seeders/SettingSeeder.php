<?php

namespace Database\Seeders;

use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            ['name' => 'phone', 'link' => '+994512951211'],
            ['name' => 'facebook', 'link' => 'https://facebook.com/'],
            ['name' => 'instagram', 'link' => 'https://www.instagram.com/zuhur_inshaat.mmc/'],
            ['name' => 'youtube', 'link' => 'https://www.youtube.com'],
            ['name' => 'email', 'link' => 'info@hacioglugroup.az'],
            ['name' => 'address_az', 'link' => 'Mirəli Qaşqay 33, Bakı'],
            ['name' => 'address_en', 'link' => 'Mirali Gashga 33, Baku'],
            ['name' => 'address_ru', 'link' => 'Мирали Гашгай 33, Баку'],
            ['name' => 'mail_receiver', 'link' => 'elmir_567@mail.ru'],
        ];
        foreach ($settings as $key => $setting) {
            $set = new Setting();
            $set->name = $setting['name'];
            $set->link = $setting['link'];
            $set->status = 1;
            $set->save();
        }
    }
}
