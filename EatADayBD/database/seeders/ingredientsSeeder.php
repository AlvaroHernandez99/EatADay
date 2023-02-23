<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ingredient;
use Illuminate\Support\Facades\DB;

class ingredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //comentario
        // $table->id();
        // $table->string('name', 32)->unique();
        // $table->string('photo', 200)->unique();//photo
        // $table->float('price', 10, 2)->nullable();
        // $table->float('price_k', 10, 2)->nullable();
        // $table->timestamps();

        Ingredient::create([
            'name'=> 'Atun',
            'photo' => "https://dam.cocinafacil.com.mx/wp-content/uploads/2018/07/beneficios-del-atun-1.jpg",
            'price' => 2.5,
            'price_k' => 3.5,
            'user_id'=>2
        ]);

        Ingredient::create([
            'name'=> 'Lechuga',
            'photo' => "https://statics-cuidateplus.marca.com/cms/styles/natural/azblob/lechuga.jpg.webp?itok=kvw7kO2D",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Pan rallado',
            'photo' => "https://www.gastronomiavasca.net/uploads/image/file/4330/w700_pan_rallado.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Leche entera',
            'photo' => "https://as01.epimg.net/deporteyvida/imagenes/2017/09/18/portada/1505735498_305102_1505735669_noticia_normal.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Cebolla',
            'photo' => "https://eromay.com/wp-content/uploads/2019/08/tipos-cebollas.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Ajo',
            'photo' => "https://b2283449.smushcdn.com/2283449/wp-content/uploads/2020/05/ajo.jpg?lossy=1&strip=1&webp=1",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Perejil',
            'photo' => "https://img2.rtve.es/i/?w=1600&i=1652294223331.jpg",
            'price' => 0.5,
            'price_k' => 1.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Aceite de oliva',
            'photo' => "https://img2.rtve.es/v/6768846?w=1600&preview=1672761370364.jpg",
            'price' => 1.5,
            'price_k' => 5.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Carne picada',
            'photo' => "https://fitnessburger.es/503-medium_default/carne-picada-de-ternera-bandeja-de-12-kilo.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Huevo',
            'photo' => "https://estaticos-cdn.prensaiberica.es/clip/ca7932ec-b58e-470f-ac13-b992119c0e50_16-9-discover-aspect-ratio_default_0.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Pimienta negra',
            'photo' => "https://actualfruveg.com/wp-content/uploads/2022/08/Pimienta-negra-2.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Sal',
            'photo' => "https://ichef.bbci.co.uk/news/640/cpsprodpb/C894/production/_115784315_gettyimages-827818618.jpg",
            'price' => 0.5,
            'price_k' => 1.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Tomate',
            'photo' => "https://www.lovemysalad.com/sites/default/files/styles/image_530x397/public/tomates_-_vladimir_morozov.jpg?itok=XeDbLwfM",
            'price' => 2.5,
            'price_k' => 4.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Harina',
            'photo' => "https://i.blogs.es/95d4c3/harina-trigo-tipos/1366_2000.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Patata',
            'photo' => "http://www.frutas-hortalizas.com/img/fruites_verdures/presentacio/59.jpg",
            'price' => 1.5,
            'price_k' => 3.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Jamon serrano',
            'photo' => "https://www.corteganaiberico.com/wp-content/uploads/2020/01/jamon-serrano-o-iberico.jpg",
            'price' => 3.5,
            'price_k' => 5.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Tortillas de trigo',
            'photo' => "https://vod-hogarmania.atresmedia.com/hogarmania/images/images01/2014/05/08/5c00146d16334d000191910f/1239x697.jpg",
            'price' => 2.5,
            'price_k' => 3.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Pechugas de pollo',
            'photo' => "https://mejorconsalud.as.com/wp-content/uploads/2018/07/pechugas-pollo.jpg",
            'price' => 2.5,
            'price_k' => 3.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Pimiento verde',
            'photo' => "https://www.gastronomiavasca.net/uploads/image/file/3413/pimiento_verde.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Pimiento rojo',
            'photo' => "https://www.tutrebol.es/77948/fruteria-pimiento-rojo-unidad.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Pimiento amarillo',
            'photo' => "https://somosfruta.es/425-large_default/pimiento-amarillo.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Oregano',
            'photo' => "https://imagenes.muyinteresante.es/files/composte_image/uploads/2022/12/22/63a46beab4e8f.jpeg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'comino',
            'photo' => "https://actualfruveg.com/wp-content/uploads/2022/07/Bea-comino-1-2.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'Pimineton molido',
            'photo' => "https://www.gastronomiavasca.net/uploads/image/file/4379/pimenton.jpg",
            'price' => 1.5,
            'price_k' => 2.5,
            'user_id' => 3
        ]);

        Ingredient::create([
            'name'=> 'masa para empanadas',
            'photo' => "https://imag.bonviveur.com/masa-de-empandas-para-horno.jpg",
            'price' => 2.5,
            'price_k' => 4.5,
            'user_id' => 3
        ]);

        
    }
}
// 'ingredients' => "['carne picada', 'cebolla', 'ajo', 'huevo', 'tomate', 'aceite de oliva', 'oregano', 'comino', 'pimentón molido', 'masa para empanadas']",
