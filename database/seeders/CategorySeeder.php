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
                'translation' => ['az' => 'Hacıoğlu İnşaat', 'en' => 'Hacioglu Construction', 'ru' => 'Хаджиоглу Строительство'],
                'subcategories' => [
                    [
                        'slug' => 'repair',
                        'translation' => ['az' => 'Təmir', 'en' => 'Repair', 'ru' => 'Ремонт'],
                    ],
                    [
                        'slug' => 'construction',
                        'translation' => ['az' => 'Tikinti', 'en' => 'Construction', 'ru' => 'Строительство'],
                    ],
                    [
                        'slug' => 'design',
                        'translation' => ['az' => 'Dizayn', 'en' => 'Design', 'ru' => 'Дизайн'],
                    ],
                ]
            ],
            [
                'slug' => 'first1',
                'translation' => ['az' => 'Hacıoğlu mebel', 'en' => 'Hacioglu furniture', 'ru' => 'Мебель Хаджиоглу'],
                'subcategories' => [
                    [
                        'slug' => 'furniture',
                        'translation' => ['az' => 'Mebel', 'en' => 'Hacioglu furniture', 'ru' => 'Мебель'],
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
