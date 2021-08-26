<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicecategories = [
                [
                    'category_name' => 'Парикмахерские услуги',
                        'children' => [
                            ['category_name' => 'Стрижки'],
                            ['category_name' => 'Укладки и причёски'],
                            ['category_name' => 'Окрашивание волос Wella Professionals'],
                            ['category_name' => 'Ламинирование волос Cellophanes Sebastian Professional'],
                            ['category_name' => 'Химическая завивка HYDRA'],
                            ['category_name' => 'Уходы'],
                        ],
                    ],
                [
                    'category_name' => 'Ногтевой сервис',
                        'children' => [
                            ['category_name' => 'Маникюр'],
                            ['category_name' => 'Покрытие на руках'],
                            ['category_name' => 'Педикюр'],
                            ['category_name' => 'Покрытие на ногах'],
                            ['category_name' => 'Уходы'],
                        ],
                    ],
                [
                    'category_name' => 'Макияж',
                        'children' => [
                            ['category_name' => 'Макияж'],
                        ],
                    ],
                [
                    'category_name' => 'Шугаринг',
                        'children' => [
                            ['category_name' => 'Шугаринг'],
                        ],
                    ],
                [
                    'category_name' => 'Перманентный макияж NUDE',
                        'children' => [
                            ['category_name' => 'Брови'],
                            ['category_name' => 'Межресничный ряд'],
                            ['category_name' => 'Губы'],
                        ],
                    ],
                [
                    'category_name' => 'Брови и ресницы',
                        'children' => [
                            ['category_name' => 'Окрашивание'],
                            ['category_name' => 'Коррекция'],
                            ['category_name' => 'Ламинирование'],
                        ],
                    ],
                [
                    'category_name' => 'Массаж',
                        'children' => [
                            ['category_name' => 'Общеукрепляющий'],
                            ['category_name' => 'Расслабляющий'],
                            ['category_name' => 'Профилактический'],
                            ['category_name' => 'Массаж спины'],
                            ['category_name' => 'Лимфодренажный'],
                            ['category_name' => 'Антицеллюлитный'],
                        ],
                    ],
                [
                    'category_name' => 'Эстетика лица',
                        'children' => [
                            ['category_name' => 'Чистка лица'],
                            ['category_name' => 'Массаж лица'],
                            ['category_name' => 'Уход за лицом'],
                        ],
                    ],
            ];
            foreach($servicecategories as $servicecategory)
            {
              \App\Models\ServiceCategory::create($servicecategory);
            }
        
    }
}
