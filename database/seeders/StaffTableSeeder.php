<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'first_name' => "Александра",
            'second_name' => "Зиновьева",
            'bio' => "Александра специализиуруется на техниках окрашивания Airtouch, балаяж и шатуш.",
            'staff_picture' => "public/staff/zinovieva.jpg",
            'gallery_id' => 7
            ]);
        DB::table('staff')->insert([
            'first_name' => "Елена",
            'second_name' => "Новикова",
            'bio' => "Елена поможет подобрать Вам идеальный оттенок для окрашивания волос.",
            'staff_picture' => "public/staff/novikova.jpg",
            'gallery_id' => 4
            ]);
        DB::table('staff')->insert([
            'first_name' => "Анастасия",
            'second_name' => "Сюткина",
            'bio' => "Опыт работы Анстасии в ногтевом сервисе 3 года.  Выполняет дизайн ногтей любой сложности. В парикмахерской сфере опыт работы 1,5 года.",
            'staff_picture' => "public/staff/syutkina.jpg",
            'gallery_id' => 5
            ]);
        DB::table('staff')->insert([
            'first_name' => "Дарья",
            'second_name' => "Якимова",
            'bio' => "Топ-стилист салона, лауреат международных конкурсов парикмахерского искусства. Специализируется на сложных техниках окрашивания и стрижках любой сложности.",
            'staff_picture' => "public/staff/yakimova.jpg",
            'gallery_id' => 6
            ]);
        DB::table('staff')->insert([
            'first_name' => "Валерия",
            'second_name' => "Борисенко",
            'bio' => "Валерия — мастер стрижек геометричных форм. Также делает укладку волос для любого случая.",
            'staff_picture' => "public/staff/borisenko.jpg",
            'gallery_id' => 1
            ]);
        DB::table('staff')->insert([
            'first_name' => "Елизавета",
            'second_name' => "Фиалковская",
            'bio' => "Специализируется на аппаратном маникюре и педикюре, качественно выполняет перманентный макияж в технике NUDE.",
            'staff_picture' => "public/staff/fialkovskaya.jpg",
            'gallery_id' => 2
            ]);
        DB::table('staff')->insert([
            'first_name' => "Юлия",
            'second_name' => "Харченко",
            'bio' => "Топ-стилист салона, неоднократно занимала призовые места на международных конкурсах парикмахерского искусства. Выполняет стрижки, окрашивания, уходовые процедуры, укладки любой сложности.",
            'staff_picture' => "public/staff/kharchenko.jpg",
            'gallery_id' => 3
            ]);
    }
}
