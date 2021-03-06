<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('organizations')->insert([
            'name' => 'Магазин Альтагамма',
            'slug' => 'altagamma',
            'img'=>'/img/Salon-magazin-Berlin-v-Grodno-foto.jpg',
            'adress' => 'Республика Беларусь, г. Гродно, ул. Свердлова, 17',
            'phone' => '+375 (44) 500-40-14',
            'description' => '«Альтагамма» − это торговая сеть, салоны которой расположены во всех областных центрах Республики Беларусь (в том числе и в Гродно).

В магазине Вы сможете подобрать и купить плитку для декоративной финишной отделки пола и стен в санузле, ванной комнате, устройства фартука на кухне, бассейнов, облицовки фасадов. В ассортиментом ряду салонов представлена продукция производства Беларуси, Испании, Италии, Польши, Китая.

Подробную информацию о реализуемой магазинами «Альтагамма» плитке с фото, размерами и ценами Вы найдёте в каталоге официального сайта торговой компании (см. раздел «Контакты»).'
        ]);

        DB::table('organizations')->insert([
            'name' => 'ТЦ Гемма в Гродно',
            'slug' => 'gemma',
            'img'=>'/img/Logotip-magazina-Gemma-v-Grodno.jpg',
            'adress' => 'Гродно, проспект Космонавтов, 2Г.',
            'phone' => '+375 (29) 509-58-35 − МТС',
            'description' => 'ТЦ «Гемма» − это универсальный строительный магазин в Гродно с удобным графиком работы, ассортиментом товаров в 20 000 наименований, акциями и распродажами продукции из каталогов прошлых сезонов.

В составе торгового комплекса «Гемма» 3 павильона, в которых размещены 6 отделов: напольных и настенных покрытий, сухих строительных смесей и лакокрасочных материалов, плитки и сантехники, мебельной фурнитуры и крепежа, электротехнических товаров, строительного электроинструмента.

В магазине действуют дисконтные программы, здесь также размещён филиал «Приорбанка», в котором можно оформить кредит на покупку товаров.'
        ]);

        DB::table('organizations')->insert([
            'name' => 'Торговый дом «Керамин-Запад»',
            'slug' => 'keramin',
            'img'=>'/img/Logotip-magazina-Keramin.jpg',
            'adress' => 'Республика Беларусь 230025 г. Гродно, ул. Мостовая д. 39',
            'phone' => '+375 33 609 53 88',
            'description' => 'Открытие нового фирменного магазина керамической плитки и сантехники «Керамин» 4 февраля 2016 года в Гродно стало по-настоящему грандиозным и долгожданным событием.

Просторный салон-магазин расположен в центре города. На его торговой площади представлены не просто стенды с образцами новой коллекции из каталога 2015 года, а целые мини-комнаты, чтобы покупатель смог увидеть, как выглядит плитка «Керамин» в интерьере ванной.

В центре зала оборудована зона отдыха с фонтаном и мягкими диванами. Есть даже детский уголок, где родители могут оставить ребёнка рисовать и рассматривать красочное панно с мультгероями, пока сами заняты подбором плитки и сантехники.

В торговом доме «Керамин» с покупателями работают опытные дизайнеры-консультанты.'
        ]);


        DB::table('terms')->insert([
            'id'=>1,
            'name' => 'Магазины',
            'slug' => 'magaz',
            'term_group' => 0,
        ]);
        DB::table('terms')->insert([
            'id'=>2,
            'name' => 'Компании',
            'slug' => 'company',
            'term_group' => 0,
        ]);
        DB::table('terms')->insert([
            'id'=>3,
            'name' => 'Организации',
            'slug' => 'org',
            'term_group' => 0,
        ]);

        DB::table('terms')->insert([
            'id'=>4,
            'name' => 'Обои',
            'slug' => 'oboi',
            'term_group' => 0,
        ]);

        DB::table('terms')->insert([
            'id'=>5,
            'name' => 'Плитки',
            'slug' => 'plitka',
            'term_group' => 0,
        ]);

        DB::table('taxonomies')->insert([
            'term' => 'Магазины',
            'slug' => 'magaz',
            'taxonomy'=>'category',
            'description'=>'Рубрика магазинов',
            'parent' => 0,
            'count' => 0,
        ]);

        DB::table('taxonomies')->insert([
            'term' => 'Компании',
            'slug' => 'company',
            'taxonomy'=>'category',
            'description'=>'Рубрика компаний',
            'parent' => 0,
            'count' => 0,
        ]);

        DB::table('taxonomies')->insert([
            'term' => 'Организации',
            'slug' => 'org',
            'taxonomy'=>'category',
            'description'=>'Рубрика организаций',
            'parent' => 0,
            'count' => 0,
        ]);

        DB::table('taxonomies')->insert([
            'term' => 'Обои',
            'slug' => 'oboi',
            'taxonomy'=>'category',
            'description'=>'Рубрика магазинов обоев',
            'parent' => 1,
            'count' => 0,
        ]);

        DB::table('taxonomies')->insert([
            'term' => 'Плитки',
            'slug' => 'plitka',
            'taxonomy'=>'category',
            'description'=>'Рубрика магазинов плитки',
            'parent' => 1,
            'count' => 0,
        ]);

        DB::table('taxonomy_organization')->insert([
            'organization_id'=>1,
            'taxonomy_id'=>1,
            'term_order'=>0
        ]);

        DB::table('taxonomy_organization')->insert([
            'organization_id'=>2,
            'taxonomy_id'=>1,
            'term_order'=>0
        ]);

        DB::table('taxonomy_organization')->insert([
            'organization_id'=>3,
            'taxonomy_id'=>2,
            'term_order'=>0
        ]);
        DB::table('taxonomy_organization')->insert([
            'organization_id'=>2,
            'taxonomy_id'=>2,
            'term_order'=>0
        ]);

        DB::table('pictures')->insert([
            'url'=>'/img/Salon-magazin-Berlin-v-Grodno-foto.jpg',
            'description'=>'',
        ]);

        DB::table('pictures')->insert([
            'url'=>'/img/Logotip-magazina-Keramin.jpg',
            'description'=>'',
        ]);

        DB::table('pictures')->insert([
            'url'=>'/img/Logotip-magazina-Gemma-v-Grodno.jpg',
            'description'=>'',
        ]);
    }
}
