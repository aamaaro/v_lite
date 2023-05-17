<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([  'name' => 	'MAVESA MARGARINA 1Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006200144,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA MARGARINA 500g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006200137,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA LIGERA MARGARINA 500g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	719503004056,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA REPOSTERA PANELITA C/SAL 250GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75905101,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA MARGARINA 250g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75930868,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA MARGARINA CHIFFON 454g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	719503008023,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CHEF MARGARINA C/S 5 KGx1UN CFH',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006200250,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CHEF MARGARINA S/S 5 KGx1UN CFH',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006200267,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'NELLY MARGARINA REDUCIDA CAL 250GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75971816,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'NELLY MARGARINA REDUCIDA CAL 400GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006200496,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'NELLY MARGARINA REDUCIDA CAL 500GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006200496,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	1,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA MAYONESA 910G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	719503030185,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	2,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA MAYONESA 445G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	719503030123,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	2,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA ADEREZO MAYONESA 3,6Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006003783,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	2,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA MAYONESA 175G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75971403,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	2,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA MAYONESA LIMÓN 445G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006100437,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	2,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA VINAGRE DE ALCOHOL 1L',	 'cost' => 10, 'price' => 14,	 'barcode' => 	719503061035,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	3,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAVESA VINAGRE DE ALCOHOL 4L',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006150012,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	3,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PAMPERO KETCHUP 397g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75919191,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	4,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PAMPERO KETCHUP 198g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75919184,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	4,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PAMPERO SALSA BASE TOMATE 4,2Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006100024,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	5,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LA VIENESA FRESA 240g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75904210,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	6,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LA VIENESA GUAYABA 240g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75904227,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	6,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LA VIENESA FRESAMORA 240g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75971663,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	6,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'RIKESA QUESO BLANCO 200g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75970444,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	7,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'RIKESA QUESO PARMESANO 200G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75970420,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	7,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'RIKESA QUESO ORIGINAL 200g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75930288,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	7,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'RIKESA QUESO ORIGINAL 300g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006200151,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	7,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'RIKESA TOCINETA 300g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006200168,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	7,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'P.A.N. HARINA MAIZ 1Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000011,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	8,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'P.A.N. HARINA MAIZ AMARILLA 1Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002001803,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	8,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PAN MEZCLA MAIZ BLANCO Y ARROZ 1KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002200046,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	8,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'P.A.N. MEZCLA PARA ACHAPAS 500gr',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002002893,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	9,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR LINGUINI 1KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	759100022237,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'linguini_.svg'	]);
        Product::create([  'name' => 	'PRIMOR PASTA LARGA VERMICELLI 500G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000264,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR PASTA L VERMICELLI 1KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000271,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CHEF MARGARINA C/S 5 KGx1UN CFH',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002400644,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR PASTA LARGA ESPAGUETTI 1KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000257,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR PASTA CORTA DEDALES 500',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000868,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR PASTA CORTA DEDALES 1KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000851,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'dedales_.svg'	]);
        Product::create([  'name' => 	'PRIMOR PASTA CORTA TORNILLO 1KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000318,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'tornillo_.svg'	]);
        Product::create([  'name' => 	'PRIMOR PASTA CORTA PLUMITAS 1KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000295,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	10,	  'image' => 'plumitas_.svg'	]);
        Product::create([  'name' => 	'PRIMOR ARROZ CLÁSICO 1Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000127,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	11,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CORINA ARROZ 1KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000158,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	11,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR CREMA ARROZ BOLSA ENRIQ 225G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002100100,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	12,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR CREMA ARROZ BOLSA 450GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002100117,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	12,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR CREMA ARROZ 450GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000189,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	12,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR CREMA ARROZ 900GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000165,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	12,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR CREMA DE ARROZ BOLSA 900GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002100124,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	12,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAZEITE ACEITE PET 1L',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002000745,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	13,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CHEF OLEINA COMESTIBLE PALMA 18L',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006003608,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	14,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PRIMOR OLEINA DE PALMA 1L',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002600099,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	14,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'TODDY POLVO POTE 200g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006700019,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	15,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'TODDY POLVO POTE 400g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006700026,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	15,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CHEF MARGARINA C/S 5 KGx1UN CFH',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006700118,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	15,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'TODDY POLVO BOLSA 400g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006700057,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	15,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'TODDY POLVO BOLSA 1Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006700064,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	15,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'TODDY POLVO BOLSA 2Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006700071,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	15,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'QUAKER HARINA DE AVENA (BOLS) 400g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591184002056,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	16,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'QUAKER AVENA FORTIFICADA 100g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591184600047,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	16,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'QUAKER AVENA FORTIFICADA 400g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591184000977,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	16,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'QUAKER AVENA FORTIFICADA 200g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591184001004,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	16,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'QUAKER AVENA FORTIFICADA 800g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591184000984,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	16,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'QUAKER AVENA VAINILLA CASERA 400 G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591184000977,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	16,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'QUAKER AVENA SIROP MAPLE 400 G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591184002513,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	16,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'KONGA SABOR NARANJA 30g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006850127,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	17,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'KONGA SABOR MORA 30g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006850134,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	17,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'KONGA SABOR LIMÓN 30g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006850110,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	17,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'KONGA SABOR PARCHITA 30G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006850141,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	17,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'GOLDEN GELATINA FRAMBUESA 96GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006950063,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	18,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'GOLDEN GELATINA FRESA 96GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006950070,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	18,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'GOLDEN GELATINA KOLITA 96g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006950018,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	18,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MARGARITA ATUN EN ACEITE 140G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002700010,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	19,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MARGARITA PEPITONA PICANTE 140g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002700058,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	20,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MARGARITA BONITO EN ACEITE 140g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002700331,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	21,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MAGARITA SARDINAS TOMATE 170GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002700201,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	22,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MARGARITA SARDINA ACEITE 170GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002700164,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	22,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MARGARITA SARDINA PIC. 170GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002700188,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	22,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MIGURT FRUTA FRESA MIGURT 125g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7593922000133,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	23,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MIGURT FRUTA DURAZNO MIGURT 125g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7593922000140,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	23,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MIGURT FRUTA FRESA MIGURT 250g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7593922000164,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	23,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MIGURT FRUTA DURAZNO MIGURT 250g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7593922000041,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	23,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MIGURT FRUTA FRESA MIGURT 750g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7593922000355,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	23,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MIGURT FRUTA DURAZNO MIGURT 750g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7593922000362,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	23,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MIGURT SABOR DULCE MIGURT 750g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7593922000348,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	23,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'TODDY CHIPS GALLETAS 24g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006740015,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	24,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES DETERGENTE LÍQUIDO BEBE 1L',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006300479,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES DETERGENTE LÍQUIDO ROPA DELICADA 510cc',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301209,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES DETERGENTE BEBÉ 900G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006300332,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES DETERGENTE BEBÉ 400g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006300325,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES DETERGENTE FLORAL 900G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006002595,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES DETERGENTE FLORAL 400g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006002588,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES DETERGENTE LIMÓN 400G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006002564,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CHEF MARGARINA C/S 5 KGx1UN CFH',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006300554,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'MULTICLEAN DETERGENTE EN POLVO 900GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301407,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	25,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES JABÓN BEBE 160g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75923815,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	26,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES JABON TRAD. FLORAL 250G',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75900441,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	26,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES JABON TRAD. FLORAL 200GR',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75971670,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	26,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES LIMPIADOR MAREA CRISTALINA 1L',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301247,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	27,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES LIMP. MAREA CRISTA 500CC',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301353,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	27,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES LIMP. BRISA TROPICAL 1L',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301322,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	27,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES LIMP. BRISA TROPICAL 500cc',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301360,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	27,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES LAVAPLATOS LIQUIDO 500 CC',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006300189,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	28,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES MULTIUSO CREMA 250g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301100,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	29,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES MULTIUSO CREMA 500g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301117,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	29,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES MULTIUSO PASTILLA 130g',	 'cost' => 10, 'price' => 14,	 'barcode' => 	75971472,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	29,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES SUAVIZANTE BEBE 530CC',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301346,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	30,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'LAS LLAVES SUAVIZANTE BEBE 950cc',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7590006301223,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	30,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET CARNE A LA PARRILLA 10Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300678,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET CARNE A LA PARRILLA 18Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300500,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET CARNE A LA PARRILLA 1Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300531,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET CARNE A LA PARRILLA 2Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300517,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET CARNE A LA PARRILLA 4Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300494,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET ASADO NEGRO 4KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300562,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET ASADO NEGRO 18KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300555,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CHEF MARGARINA C/S 5 KGx1UN CFH',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300692,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET CACHORROS 18Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300432,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'DOGOURMET CACHORROS 2Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300425,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'SUPER CAN CARNE Y HUESO 2KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300074,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'SUPER CAN CARNE HUESO 4KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300487,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'SUPER CAN CARNE HUESO 18 KILOS',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300104,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'SUPER CAN POLLO 18 KILOS',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300746,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'SUPER CAN CARNE HUESO 10KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300647,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'CHAMPS PERRO CARNE TACO 20KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002300180,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	31,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PROCRIA MULTIPOLLOS KG S/SC 35KG',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002350147,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	32,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PROCRIA MULTIPONEDORAS G/SC 35Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002350154,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	32,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PROCRIA VACA LECHERA 18% G/SC 35Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002350222,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	33,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PROCRIA MEZ BASE RUMIANTES G/SC 40Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002350246,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	33,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PROCRIA MULTICERDO 35 KG G/SC 35Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002350185,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	34,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PROCRIA MEZCLA BASE CERDOS G/ SC 40Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002350192,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	34,	  'image' => 'noimg.png'	]);
        Product::create([  'name' => 	'PROCRIA GALOPE G/SC 40Kg',	 'cost' => 10, 'price' => 14,	 'barcode' => 	7591002350208,	 'stock' => 100,	 'alerts' => 10,	 'category_id' => 	35,	  'image' => 'noimg.png'	]);
        // Product::factory(500)->create();

    }
}
