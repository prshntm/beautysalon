<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'category_Id'=>2,
            'service_name'=>"Стрижка",
            'description'=>"в комплексе (мытьё головы, укладка)",
            'price_min'=>2000,
            'price_max'=>3000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>2,
            'service_name'=>"Стрижка чёлки",
            'price_min'=>300,
            'price_max'=>500,
            'duration'=>15,
        ]);
        DB::table('services')->insert([
            'category_Id'=>2,
            'service_name'=>"Стрижка чёлки в комплексе",
            'description'=>"включая мытьё головы и укладку феном",
            'price_min'=>1200,
            'price_max'=>1850,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>2,
            'service_name'=>"Детская стрижка до 7 лет",
            'price_min'=>1000,
            'price_max'=>1600,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>2,
            'service_name'=>"Стрижка",
            'description'=>"включая мытьё головы и стайлинг",
            'price_min'=>1200,
            'price_max'=>1650,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>2,
            'service_name'=>"Окантовка стрижка",
            'price_min'=>500,
            'price_max'=>950,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>2,
            'service_name'=>"Детская стрижка до 7 лет",
            'price_min'=>750,
            'price_max'=>900,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Укладка короткие волосы",
            'description'=>"включая мытьё головы и стайлинговые средства",
            'price_min'=>1200,
            'price_max'=>1800,
            'duration'=>45,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Укладка средние волосы",
            'description'=>"включая мытьё головы и стайлинговые средства",
            'price_min'=>1350,
            'price_max'=>2200,
            'duration'=>50,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Укладка длинные волосы",
            'description'=>"включая мытьё головы и стайлинговые средства",
            'price_min'=>1500,
            'price_max'=>2500,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Вечерняя укладка короткие волосы",
            'description'=>"включая мытьё головы и 1 стайлинг",
            'price_min'=>1700,
            'price_max'=>2500,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Вечерняя укладка средние волосы",
            'description'=>"включая мытьё головы и 1 стайлинг",
            'price_min'=>1900,
            'price_max'=>2750,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Вечерняя укладка длинные волосы",
            'description'=>"включая мытьё головы и 1 стайлинг",
            'price_min'=>2400,
            'price_max'=>3000,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Причёска нв короткие волосы",
            'description'=>"вечерняя, свадебная, для особого случая",
            'price_min'=>2500,
            'price_max'=>4000,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Причёска нв средние волосы",
            'description'=>"вечерняя, свадебная, для особого случая",
            'price_min'=>3000,
            'price_max'=>4500,
            'duration'=>120,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Причёска нв длинные волосы",
            'description'=>"вечерняя, свадебная, для особого случая",
            'price_min'=>4000,
            'price_max'=>5500,
            'duration'=>120,
        ]);
        DB::table('services')->insert([
            'category_Id'=>3,
            'service_name'=>"Укладка",
            'description'=>"включая мытьё головы и стайлинг",
            'price_min'=>550,
            'price_max'=>1000,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Окрашивание в один тон короткие волосы",
            'price_min'=>4500,
            'price_max'=>6500,
            'duration'=>150,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Окрашивание в один тон средние волосы",
            'price_min'=>5000,
            'price_max'=>7000,
            'duration'=>150,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Окрашивание в один тон длинные волосы",
            'price_min'=>5500,
            'price_max'=>7500,
            'duration'=>180,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Сложное крашивание короткие волосы",
            'price_min'=>6000,
            'price_max'=>9000,
            'duration'=>180,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Сложное крашивание средние волосы",
            'price_min'=>7500,
            'price_max'=>10500,
            'duration'=>180-240,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Сложное крашивание длинные волосы",
            'price_min'=>8000,
            'price_max'=>12000,
            'duration'=>240,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Тонирование короткие волосы",
            'price_min'=>3000,
            'price_max'=>5000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Тонирование средние волосы",
            'price_min'=>3700,
            'price_max'=>6500,
            'duration'=>120,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Тонирование длинные волосы",
            'price_min'=>5500,
            'price_max'=>7500,
            'duration'=>180,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"CRYSTAL GLOSS коррекция цвета и блеска на короткие волосы",
            'price_min'=>2000,
            'price_max'=>3200,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"CRYSTAL GLOSS коррекция цвета и блеска на средние волосы",
            'price_min'=>2400,
            'price_max'=>3600,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"CRYSTAL GLOSS коррекция цвета и блеска на длинные волосы",
            'price_min'=>2800,
            'price_max'=>4000,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>4,
            'service_name'=>"Камуфляж седины",
            'price_min'=>1800,
            'price_max'=>3000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>5,
            'service_name'=>"Cellophanes на короткие волосы",
            'price_min'=>3500,
            'price_max'=>5000,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>5,
            'service_name'=>"Cellophanes на средние волосы",
            'price_min'=>4500,
            'price_max'=>6500,
            'duration'=>120,
        ]);
        DB::table('services')->insert([
            'category_Id'=>5,
            'service_name'=>"Cellophanes на длинные волосы",
            'price_min'=>5500,
            'price_max'=>8000,
            'duration'=>150,
        ]);
        DB::table('services')->insert([
            'category_Id'=>6,
            'service_name'=>"Химическая завивка на короткие волосы",
            'price_min'=>4500,
            'price_max'=>6000,
            'duration'=>120,
        ]);
        DB::table('services')->insert([
            'category_Id'=>6,
            'service_name'=>"Химическая завивка на средние волосы",
            'price_min'=>5500,
            'price_max'=>8500,
            'duration'=>150,
        ]);
        DB::table('services')->insert([
            'category_Id'=>6,
            'service_name'=>"Химическая завивка на длинные волосы",
            'price_min'=>7500,
            'price_max'=>8500,
            'duration'=>150,
        ]);
        DB::table('services')->insert([
            'category_Id'=>6,
            'service_name'=>"Химическая завивка прикорневая",
            'price_min'=>3500,
            'price_max'=>5500,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>7,
            'service_name'=>"Процедуры Wella Professionals",
            'price_min'=>1200,
            'price_max'=>1950,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>7,
            'service_name'=>"Регенерирующий пилинг NIOXIN",
            'price_min'=>2500,
            'price_max'=>4500,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>7,
            'service_name'=>"Ритуалы красоты SYSTEM Professional",
            'price_min'=>2800,
            'price_max'=>3700,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>7,
            'service_name'=>"Реконструкция волос Bond Angel",
            'price_min'=>2000,
            'price_max'=>4000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>7,
            'service_name'=>"Премиальные сервисы Sebastian Professional",
            'price_min'=>2800,
            'price_max'=>4500,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Классический маникюр",
            'price_min'=>1000,
            'duration'=>45,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Европейский маникюр",
            'price_min'=>1100,
            'duration'=>45,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Аппаратный маникюр",
            'price_min'=>1200,
            'duration'=>50,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Маникюр с покрытием LUXIO",
            'description'=>"снятие предыдущего, бонусом дизайн (френч)",
            'price_min'=>2000,
            'duration'=>120,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Японский маникюр",
            'description'=>"рекомендуется после обработки",
            'price_min'=>1200,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Парафинотерапия",
            'price_min'=>500,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Классический маникюр",
            'price_min'=>1200,
            'duration'=>50,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Детский маникюр",
            'price_min'=>500,
            'duration'=>35,
        ]);
        DB::table('services')->insert([
            'category_Id'=>9,
            'service_name'=>"Аппаратный маникюр",
            'price_min'=>1350,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>10,
            'service_name'=>"Покрытие лаком",
            'price_min'=>100,
            'duration'=>5,
        ]);
        DB::table('services')->insert([
            'category_Id'=>10,
            'service_name'=>"Покрытие основой",
            'price_min'=>100,
            'duration'=>5,
        ]);
        DB::table('services')->insert([
            'category_Id'=>10,
            'service_name'=>"Комплексное покрытие",
            'price_min'=>300,
            'duration'=>15,
        ]);
        DB::table('services')->insert([
            'category_Id'=>10,
            'service_name'=>"Покрытие LUXIO",
            'price_min'=>950,
            'duration'=>45,
        ]);
        DB::table('services')->insert([
            'category_Id'=>10,
            'service_name'=>"Покрытие LUXIO FRENCH",
            'price_min'=>1200,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>10,
            'service_name'=>"Снятие гель-лак",
            'price_min'=>400,
            'duration'=>15,
        ]);
        DB::table('services')->insert([
            'category_Id'=>10,
            'service_name'=>"Дизайн",
            'description' => "Цена за один ноготь",
            'price_min'=>50,
            'duration'=>10,
        ]);
        DB::table('services')->insert([
            'category_Id'=>11,
            'service_name'=>"Классический педикюр",
            'price_min'=>1550,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>11,
            'service_name'=>"Аппаратный педикюр",
            'price_min'=>2200,
            'duration'=>80,
        ]);
        DB::table('services')->insert([
            'category_Id'=>11,
            'service_name'=>"Педикюр фруктовыми кислотами",
            'price_min'=>2800,
            'duration'=>80,
        ]);
        DB::table('services')->insert([
            'category_Id'=>11,
            'service_name'=>"Японский педикюр",
            'description'=>"рекомендуется после основного",
            'price_min'=>1200,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>11,
            'service_name'=>"Классический педикюр",
            'price_min'=>1700,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>11,
            'service_name'=>"Аппаратный педикюр",
            'price_min'=>2400,
            'duration'=>80,
        ]);
        DB::table('services')->insert([
            'category_Id'=>11,
            'service_name'=>"Педикюр фруктовыми кислотами",
            'price_min'=>2950,
            'duration'=>80,
        ]);
        DB::table('services')->insert([
            'category_Id'=>12,
            'service_name'=>"Покрытие лаком",
            'price_min'=>100,
            'duration'=>5,
        ]);
        DB::table('services')->insert([
            'category_Id'=>12,
            'service_name'=>"Покрытие основой",
            'price_min'=>100,
            'duration'=>5,
        ]);
        DB::table('services')->insert([
            'category_Id'=>12,
            'service_name'=>"Комплексное покрытие",
            'price_min'=>300,
            'duration'=>15,
        ]);
        DB::table('services')->insert([
            'category_Id'=>12,
            'service_name'=>"Покрытие LUXIO",
            'price_min'=>900,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>12,
            'service_name'=>"Покрытие LUXIO FRENCH",
            'price_min'=>1200,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>12,
            'service_name'=>"Снятие гель-лак",
            'price_min'=>300,
            'duration'=>10,
        ]);
        DB::table('services')->insert([
            'category_Id'=>13,
            'service_name'=>"Парафинотерапия",
            'price_min'=>500,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>13,
            'service_name'=>"Массаж для рук",
            'price_min'=>250,
            'duration'=>10,
        ]);
        DB::table('services')->insert([
            'category_Id'=>13,
            'service_name'=>"Масло для ногтей",
            'price_min'=>100,
            'duration'=>5,
        ]);
        DB::table('services')->insert([
            'category_Id'=>13,
            'service_name'=>"Крем для рук Gehwol",
            'price_min'=>200,
            'duration'=>5,
        ]);
        DB::table('services')->insert([
            'category_Id'=>15,
            'service_name'=>"Макияж дневной",
            'price_min'=>2200,
            'price_max'=>2500,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>15,
            'service_name'=>"Экспресс-макияж",
            'price_min'=>1500,
            'price_max'=>1900,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>15,
            'service_name'=>"Макияж вечерний",
            'price_min'=>2700,
            'price_max'=>3000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>15,
            'service_name'=>"Макияж свадебный",
            'price_min'=>3000,
            'price_max'=>3500,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>15,
            'service_name'=>"Макияж для фотосессии",
            'price_min'=>3000,
            'price_max'=>3500,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Голени",
            'price_min'=>500,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Ноги полностью",
            'price_min'=>2000,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Руки до локтя",
            'price_min'=>1000,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Руки полностью",
            'price_min'=>1300,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Подмышки",
            'price_min'=>500,
            'duration'=>10,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Лицо",
            'price_min'=>700,
            'duration'=>25,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Верхняя губа",
            'price_min'=>400,
            'duration'=>15,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Подбородок",
            'price_min'=>400,
            'duration'=>15,
        ]);
        DB::table('services')->insert([
            'category_Id'=>17,
            'service_name'=>"Всё тело",
            'price_min'=>5000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>19,
            'service_name'=>"Перманентный макияж бровей",
            'price_min'=>7000,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>19,
            'service_name'=>"Коррекция макияжа бровей",
            'price_min'=>4000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>20,
            'service_name'=>"Перманентный макияж межресничного ряда",
            'price_min'=>7000,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>20,
            'service_name'=>"Коррекция макияжа межресничного ряда",
            'price_min'=>4000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>21,
            'service_name'=>"Перманентный макияж губ",
            'price_min'=>7000,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>21,
            'service_name'=>"Коррекция макияжа губ",
            'price_min'=>4000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>23,
            'service_name'=>"Окрашивание бровей краской",
            'price_min'=>500,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>23,
            'service_name'=>"Окрашивание бровей хной",
            'price_min'=>1000,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>23,
            'service_name'=>"Окрашивание ресниц",
            'price_min'=>500,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>24,
            'service_name'=>"Коррекция формы бровей",
            'price_min'=>500,
            'duration'=>25,
        ]);
        DB::table('services')->insert([
            'category_Id'=>25,
            'service_name'=>"Ламинирование бровей",
            'price_min'=>1500,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>27,
            'service_name'=>"Терапевтический массаж",
            'price_min'=>2000,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>27,
            'service_name'=>"Терапевтический массаж",
            'price_min'=>2600,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>28,
            'service_name'=>"Расслабляющий массаж",
            'price_min'=>1000,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>28,
            'service_name'=>"Расслабляющий массаж",
            'price_min'=>1200,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>28,
            'service_name'=>"Расслабляющий массаж",
            'price_min'=>1400,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>29,
            'service_name'=>"Оздоровительный массаж",
            'price_min'=>1600,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>29,
            'service_name'=>"Оздоровительный массаж",
            'price_min'=>2000,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>30,
            'service_name'=>"Массаж спины",
            'price_min'=>1000,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>30,
            'service_name'=>"Массаж спины",
            'price_min'=>1300,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>31,
            'service_name'=>"Лимфодренажный массаж",
            'price_min'=>1000,
            'duration'=>30,
        ]);
        DB::table('services')->insert([
            'category_Id'=>31,
            'service_name'=>"Лимфодренажный массаж",
            'price_min'=>1200,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>31,
            'service_name'=>"Лимфодренажный массаж",
            'price_min'=>1400,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>32,
            'service_name'=>"Антицеллюлитный массаж",
            'description'=>"Бёдра и ягодицы",
            'price_min'=>2000,
            'duration'=>40,
        ]);
        DB::table('services')->insert([
            'category_Id'=>32,
            'service_name'=>"Антицеллюлитный массаж",
            'description'=>"Бёдра, ягодицы, живот и бока",
            'price_min'=>2500,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>34,
            'service_name'=>"Пилинг лица",
            'price_min'=>1550,
            'duration'=>60,
        ]);
        DB::table('services')->insert([
            'category_Id'=>34,
            'service_name'=>"Чистка лица механическая",
            'price_min'=>2500,
            'duration'=>120,
        ]);
        DB::table('services')->insert([
            'category_Id'=>34,
            'service_name'=>"Чистка лица комбинированная",
            'price_min'=>2500,
            'duration'=>120,
        ]);
        DB::table('services')->insert([
            'category_Id'=>34,
            'service_name'=>"Чистка лица ультразвуковая",
            'price_min'=>2200,
            'duration'=>90,
        ]);
        DB::table('services')->insert([
            'category_Id'=>35,
            'service_name'=>"Массаж лица",
            'price_min'=>900,
            'duration'=>20,
        ]);
        DB::table('services')->insert([
            'category_Id'=>36,
            'service_name'=>"Уход за лицом",
            'price_min'=>2100,
            'duration'=>90,
        ]);
    }
}
