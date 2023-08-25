<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'slug' => 'zuhur-construction',
                'translation' => ['az' => 'Zühur İnşaat', 'en' => 'Zuhur Construction', 'ru' => 'Зухур Строительство'],
                'subcategories' => [
                    [
                        'slug' => 'repair-and-construction',
                        'translation' => ['az' => 'Təmir və tikinti', 'en' => 'Repair and construction', 'ru' => 'Ремонт и строительство'],
                    ],
                    [
                        'slug' => 'repair-and-design',
                        'translation' => ['az' => 'Təmir və dizayn', 'en' => 'Repair and design', 'ru' => 'Ремонт и дизайн'],
                    ],
                    [
                        'slug' => 'construction-in-a-bowl',
                        'translation' => ['az' => 'Qaba tikinti', 'en' => 'Construction in a bowl', 'ru' => 'Строительство в чаше'],
                    ],
                ]
            ],
            [
                'slug' => 'first1',
                'translation' => ['az' => 'Zühur Təmizlik', 'en' => 'Zuhur Cleaning', 'ru' => 'Зухур Чистота'],
                'subcategories' => [
                    [
                        'slug' => 'cleaning-service',
                        'translation' => ['az' => 'Təmizlik xidməti', 'en' => 'Cleaning service', 'ru' => 'Услуги по уборке'],
                    ],
                ]
            ],
        ];
        foreach ($categories as $cat) {
            $newCategory = new Category();
            $newCategory->slug = $cat['slug'];
            $newCategory->save();
            foreach (active_langs() as $lang) {
                $translation = new CategoryTranslation();
                $translation->locale = $lang->code;
                $translation->category_id = $newCategory->id;
                $translation->name = $cat['translation'][$lang->code];
                $translation->save();
            }
            if (array_key_exists('subcategories', $cat)) {
                foreach ($cat['subcategories'] as $altCat) {
                    $subCategory = new Category();
                    $subCategory->slug = $altCat['slug'];
                    $newCategory->subcategories()->save($subCategory);
                    foreach (active_langs() as $lang) {
                        $subTranslation = new CategoryTranslation();
                        $subTranslation->locale = $lang->code;
                        $subTranslation->category_id = $subCategory->id;
                        $subTranslation->name = $altCat['translation'][$lang->code];
                        $subTranslation->save();
                    }
                }
            }
        }
    }
}
