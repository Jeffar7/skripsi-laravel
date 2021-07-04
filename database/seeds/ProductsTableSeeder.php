<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 1,
                'productname' => 'AGLXY GRAPHIC SPREAD 011',
                'productdescription' => 'AGLXY GRAPHIC SPREAD 011',
                'sku' => 'AG.BLO-UA007',
                'productprice' => '320000',
                'productsize' => 'XL',
                'productquantity' => 20,
                'productcolor' => 'Artichoke Green (Pantone)',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Men/Tops/AGLXY GRAPHIC SPREAD 011/AGLXY_GRAPHIC_SPREAD_011.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 2,
                'productname' => 'AGLXY RUGBY SHIRT 012',
                'productdescription' => 'AGLXY RUGBY SHIRT 012',
                'sku' => 'AG.BLO-UA008',
                'productprice' => '650000',
                'productsize' => 'L',
                'productquantity' => 25,
                'productcolor' => 'Navy',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Men/Tops/AGLXY RUGBY SHIRT 012/Rugby-Shirt-012-Navy-Front-Product-Image-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 3,
                'productname' => 'AGLXY STRIPES',
                'productdescription' => 'AGLXY STRIPES',
                'sku' => 'AG.BLO-UA009',
                'productprice' => 320000,
                'productsize' => 'L',
                'productquantity' => 25,
                'productcolor' => 'Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Men/Tops/AGLXY STRIPES/AGLXY_STRIPES.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 4,
                'productname' => 'AGLXY X STAPLE BUBBLE GRAFITY',
                'productdescription' => 'AGLXY X STAPLE BUBBLE GRAFITY',
                'sku' => 'AG.BLO-UA010',
                'productprice' => 385000,
                'productsize' => 'XL',
                'productquantity' => 20, 
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Men/Tops/AGLXY X STAPLE BUBBLE GRAFITY/Staple-Graff-Front-Product-Image-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 5,
                'productname' => 'JEFF THE PIGEON – HEATHER GREY',
                'productdescription' => 'JEFF THE PIGEON – HEATHER GREY',
                'sku' => 'AG.BLO-UA011',
                'productprice' => 385000,
                'productsize' => 'M',
                'productquantity' => 25,
                'productcolor' => 'Grey',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Men/Tops/JEFF THE PIGEON/JEFF_THE_PIGEON-HEATHER_GREY.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 6,
                'productname' => 'WHATEVER IT TAKES 011',
                'productdescription' => 'WHATEVER IT TAKES 011',
                'sku' => 'AG.BLO-UA012',
                'productprice' => 320000,
                'productsize' => 'L',
                'productquantity' => 22,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Men/Tops/WHATEVER IT TAKES 011/Whatever-it-Takes-012-Black-Front-Product-Image-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'brandid' => 1,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 7,
                'productname' => 'AGLXY POPPLIN SHORTS 012',
                'productdescription' => 'Black Popplin shorts
                AGLXY label patch on lower front LHS
                Slash pocket on Left & Right side
                Back RHS bessom pocket with 3M reflective.',
                'sku' => 'AG.BLO-UA006',
                'productprice' => 450000,
                'productsize' => 'M',
                'productquantity' => 20,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012/AGLXY-Shorts-012-Black-Front-Product-Image-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 8,
                'productname' => 'ALL GONE BOOK 2020',
                'productdescription' => 'ALL GONE BOOK 2020',
                'sku' => 'AG.BLO-UA001',
                'productprice' => 980000,
                'productsize' => '-',
                'productquantity' => 15,
                'productcolor' => 'Grey',
                'productweight' => '0.2 gram',
                'productcare' => 'Not Machine Washable',
                'productmaterial' => 'Paper',
                'productimage' => 'Ageless Galaxy/Men/Accessories/ALL GONE BOOK 2020/ALL_GONE_BOOK_2020.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 9,
                'productname' => 'PATTA RIPSTOP SHOULDER BAG',
                'productdescription' => 'PATTA RIPSTOP SHOULDER BAG',
                'sku' => 'AG.BLO-UA002',
                'productprice' => 720000,
                'productsize' => '-',
                'productquantity' => 45,
                'productcolor' => 'Black',
                'productweight' => '0.2 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Men/Accessories/PATTA RIPSTOP SHOULDER BAG/PATTA RIPSTOP SHOULDER BAG.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 10,
                'productname' => 'TERRY THE SPACE SHUTTLE PIN',
                'productdescription' => 'TERRY THE SPACE SHUTTLE PIN',
                'sku' => 'AG.BLO-UA003',
                'productprice' => 150000,
                'productsize' => '-',
                'productquantity' => 8,
                'productcolor' => 'White',
                'productweight' => '0.1 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Ageless Galaxy/Men/Accessories/TERRY THE SPACE SHUTTLE PIN/Terry-Pin-555x555.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 11,
                'productname' => 'WHATEVER IT TAKES 010 KEYCHAIN',
                'productdescription' => 'WHATEVER IT TAKES 010 KEYCHAIN',
                'sku' => 'AG.BLO-UA004',
                'productprice' => 150000,
                'productsize' => '-',
                'productquantity' => 18,
                'productcolor' => 'White',
                'productweight' => '0.1 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Rubber',
                'productimage' => 'Ageless Galaxy/Men/Accessories/WHATEVER IT TAKES 010 KEYCHAIN/Whatever-it-Takes-Black-White-Front-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 12,
                'productname' => 'WHATEVER IT TAKES E-MONEY',
                'productdescription' => '-e-Money Card
                -Credits are not yet included.',
                'sku' => 'AG.BLO-UA005',
                'productprice' => 120000,
                'productsize' => '-',
                'productquantity' => 5,
                'productcolor' => 'Yellow',
                'productweight' => '0.1 gram',
                'productcare' => 'Not Washable',
                'productmaterial' => 'Card',
                'productimage' => 'Ageless Galaxy/Men/Accessories/WHATEVER IT TAKES E-MONEY/WHATEVER_IT_TAKES_E-MONEY.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 13,
                'productname' => 'AGLXY HZ TRACKTOP 011',
                'productdescription' => 'AGLXY HZ TRACKTOP 011 – BLACKPURPLE',
                'sku' => 'AG.BLO-UA026',
                'productprice' => '550000',
                'productsize' => 'M',
                'productquantity' => 12,
                'productcolor' => 'Black, Purple',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Taslan',
                'productimage' => 'Ageless Galaxy/Women/Tops/AGLXY HZ TRACKTOP 011/AGLXY_HZ_TRACKTOP_011–BLACKPURPLE.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 14,
                'productname' => 'BYB POCKET STRIPES',
                'productdescription' => 'BYB POCKET STRIPES',
                'sku' => 'AG.BLO-UA027',
                'productprice' => 350000,
                'productsize' => 'XL',
                'productquantity' => 22,
                'productcolor' => 'Blue, Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Women/Tops/BYB POCKET STRIPES/BYB_POCKET_STRIPES.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 15,
                'productname' => 'COMMITTED TO TIME 012 LS',
                'productdescription' => 'COMMITTED TO TIME 012 LS – PURPLE',
                'sku' => 'AG.BLO-UA028',
                'productprice' => 385000,
                'productsize' => 'L',
                'productquantity' => 35,
                'productcolor' => 'Purple',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Women/Tops/COMMITTED TO TIME 012 LS/CTT-012-LS-Purple-Front-Product-Image-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 16,                
                'productname' => 'PATTA CURVE LOGO LONGSLEEVE',
                'productdescription' => 'PATTA CURVE LOGO LONGSLEEVE',
                'sku' => 'AG.BLO-UA029',
                'productprice' => 400000,
                'productsize' => 'S',
                'productquantity' => 99,
                'productcolor' => 'Light Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Women/Tops/PATTA CURVE LOGO LONGSLEEVE/PATTA_CURVE_LOGO_LONGSLEEVE.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 17, 
                'productname' => 'PATTA WEIRD BABY HOODED SWEATER',
                'productdescription' => 'PATTA WEIRD BABY HOODED SWEATER',
                'sku' => 'AG.BLO-UA030',
                'productprice' => 600000,
                'productsize' => 'M',
                'productquantity' => 89,
                'productcolor' => 'Yellow',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Fleece',
                'productimage' => 'Ageless Galaxy/Women/Tops/PATTA WEIRD BABY HOODED SWEATER/PATTA_WEIRD_BABY_HOODED_SWEATER.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 18, 
                'productname' => 'SPACE MONKEY ELEMENTS',
                'productdescription' => 'SPACE MONKEY ELEMENTS – WHITE',
                'sku' => 'AG.BLO-UA031',
                'productprice' => 350000,
                'productsize' => 'M',
                'productquantity' => 80,
                'productcolor' => 'White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Women/Tops/SPACE MONKEY ELEMENTS/AGLXY_BR_2018_AGLXYXDALEK_PR_TSG001_1-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'brandid' => 1,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 19, 
                'productname' => 'AGLXY POPPLIN SHORTS 012',
                'productdescription' => 'Black Popplin shorts
                AGLXY label patch on lower front LHS
                Slash pocket on Left & Right side
                Back RHS bessom pocket with 3M reflective',
                'sku' => 'AG.BLO-UA025',
                'productprice' => 250000,
                'productsize' => 'M',
                'productquantity' => 60,
                'productcolor' => 'Grey',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Ageless Galaxy/Women/Bottom/AGLXY POPPLIN SHORTS 012/AGLXY_POPPLIN_SHORTS_012.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 20, 
                'productname' => 'AGLXY X BAKMI GM NOODLE BOWL',
                'productdescription' => 'AGLXY X BAKMI GM NOODLE BOWL',
                'sku' => 'AG.BLO-UA020',
                'productprice' => 250000,
                'productsize' => '-',
                'productquantity' => 50,
                'productcolor' => 'Yellow',
                'productweight' => '0.5 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Plastic',
                'productimage' => 'Ageless Galaxy/Women/Accessories/AGLXY X BAKMI GM NOODLE BOWL/GM-Bowl-Front-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 21, 
                'productname' => 'CONTEMPORARY PIGEON PIN',
                'productdescription' => 'CONTEMPORARY PIGEON PIN',
                'sku' => 'AG.BLO-UA021',
                'productprice' => 120000,
                'productsize' => '-',
                'productquantity' => 33,
                'productcolor' => 'White',
                'productweight' => '0.5 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Ageless Galaxy/Women/Accessories/CONTEMPORARY PIGEON PIN/CONTEMPORARY_PIGEON_PIN.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 22, 
                'productname' => 'PATTA SCRIPT P WATCH HAT',
                'productdescription' => 'This iteration of the Patta Script P watch hat comes in a stylish Medieval Blue colour-way with 100% Acrylic keeping you warm and snug wherever you may be.',
                'sku' => 'AG.BLO-UA022',
                'productprice' => 490000,
                'productsize' => '-',
                'productquantity' => 20,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Ageless Galaxy/Women/Accessories/OUTER SPACE REFINED BASICS MONKEY TOTE BAG/AGLXY-x-Dalek-Totebag-Front-Product-Images-1-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 23, 
                'productname' => 'TERRY THE SPACE SHUTTLE E-MONEY',
                'productdescription' => '-E-money Card
                -Credits are not yet included.',
                'sku' => 'AG.BLO-UA023',
                'productprice' => 150000,
                'productsize' => '-',
                'productquantity' => 23,
                'productcolor' => 'Pink',
                'productweight' => '0.1 gram',
                'productcare' => 'Not Washable',
                'productmaterial' => 'Card',
                'productimage' => 'Ageless Galaxy/Women/Accessories/TERRY THE SPACE SHUTTLE E-MONEY/TERRY_THE_SPACE_SHUTTLE_E-MONEY.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 24, 
                'productname' => 'THE DISCOVERY 006 – CARPET',
                'productdescription' => 'THE DISCOVERY 006 – CARPET',
                'sku' => 'AG.BLO-UA024',
                'productprice' => 1800000,
                'productsize' => '-',
                'productquantity' => 25,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Ageless Galaxy/Women/Accessories/THE DISCOVERY 006 - CARPET/ACAG045-DISCOVERYcarpet-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 25, 
                'productname' => 'AHHA DENIM RA KARTINI',
                'productdescription' => 'AHHA DENIM RA KARTINI',
                'sku' => 'AH.BLO-UA010',
                'productprice' => 700000,
                'productsize' => 'M',
                'productquantity' => 25,
                'productcolor' => 'Pink',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'High Twist',
                'productimage' => 'AHHA/Men/Tops/AHHA - DENIM RA KARTINI/AHHA_DENIM_RA_KARTINI.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 26, 
                'productname' => 'Hoodie Si Pitung',
                'productdescription' => 'AHHA - Hoodie Si Pitung',
                'sku' => 'AH.BLO-UA011',
                'productprice' => 770000,
                'productsize' => 'L',
                'productquantity' => 35,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Fleece',
                'productimage' => 'AHHA/Men/Tops/AHHA - Hoodie Si Pitung/AHHA-Hoodie_Si_Pitung.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 27, 
                'productname' => 'Oversized T-Shirt - Cakil',
                'productdescription' => 'AHHA Oversized T-Shirt - Cakil',
                'sku' => 'AH.BLO-UA012',
                'productprice' => 275000,
                'productsize' => 'L',
                'productquantity' => 30,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Men/Tops/AHHA - Oversized T-Shirt - Cakil/AHHA_Oversized_T-Shirt-Cakil.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 28, 
                'productname' => 'Oversized T-Shirt - Prambanan',
                'productdescription' => 'AHHA Oversized T-Shirt - Prambanan',
                'sku' => 'AH.BLO-UA013',
                'productprice' => 275000,
                'productsize' => 'XL',
                'productquantity' => 35,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Men/Tops/AHHA - Oversized T-Shirt - Prambanan/AHHA_Oversized_T-Shirt-Prambanan.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 29, 
                'productname' => 'Oversized T-Shirt - Si Pitung',
                'productdescription' => 'AHHA - Oversized T-Shirt - Si Pitung',
                'sku' => 'AH.BLO-UA015',
                'productprice' => 330000,
                'productsize' => 'XL',
                'productquantity' => 45,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Men/Tops/AHHA - Oversized T-Shirt - Si Pitung/AHHA-Oversized_T-Shirt-Si_Pitung.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 30, 
                'productname' => 'AHHA MASK Indo Pride Edition "PARANG HITAM"',
                'productdescription' => 'Cotton material
                Can be washed and reused',
                'sku' => 'AH.BLO-UA001',
                'productprice' => 72000,
                'productsize' => '-',
                'productquantity' => 19,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'AHHA/Men/Accessories/AHHA MASK Indo Pride Edition PARANG HITAM/AHHA_MASK_Indo_Pride_Edition.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 31, 
                'productname' => 'AHHA Navy Gym Bag',
                'productdescription' => "-Using waterproof material
                -Soft material and comfortable to use
                -The rope doesn't break easily
                -The logo AHHA pimbul uses a special plate and is very limited
                Come on, hurry up on the order, don't run out!",
                'sku' => 'AH.BLO-UA002',
                'productprice' => 329000,
                'productsize' => '-',
                'productquantity' => 29,
                'productcolor' => 'Green Army',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Men/Accessories/AHHA Navy Gym Bag/AHHA_Navy_Gym_Bag.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 32, 
                'productname' => 'SlingBag AHHA Lenity Camo (Limited Edition)',
                'productdescription' => "-Using waterproof material
                -Soft material and comfortable to use
                -The rope doesn't break easily
                -The logo AHHA pimbul uses a special plate and is very limited
                Come on, hurry up on the order, don't run out!",
                'sku' => 'AH.BLO-UA003',
                'productprice' => 279000,
                'productsize' => '-',
                'productquantity' => 15,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Men/Accessories/SlingBag AHHA Lenity Camo (Limited Edition)/SlingBag_AHHA_Lenity_Camo.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 33, 
                'productname' => 'T-Shirt Diponegoro',
                'productdescription' => 'AHHA - T-Shirt Diponegoro',
                'sku' => 'AH.BLO-UA021',
                'productprice' => 327000,
                'productsize' => 'XXL',
                'productquantity' => 67,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Women/Tops/AHHA - T-Shirt Diponegoro/asdsdsds.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 34, 
                'productname' => 'AHHA - T-Shirt Fahombo (Limited Edition)',
                'productdescription' => 'AHHA - T-Shirt Fahombo (Limited Edition)',
                'sku' => 'AH.BLO-UA022',
                'productprice' => 295000,
                'productsize' => 'L',
                'productquantity' => 60,
                'productcolor' => 'Pink',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Women/Tops/AHHA - T-Shirt Fahombo (Limited Edition)/FAFSFSe.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 35, 
                'productname' => 'AHHA - T-Shirt Let it Burn',
                'productdescription' => 'AHHA - T-Shirt Let it Burn',
                'sku' => 'AH.BLO-UA023',
                'productprice' => 288000,
                'productsize' => 'M',
                'productquantity' => 50,
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Women/Tops/AHHA - T-Shirt Let it Burn/AHHA-T-Shirt_Let_it_Burn.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 36, 
                'productname' => 'AHHA - T-Shirt Unity Batik',
                'productdescription' => 'AHHA - T-Shirt Unity Batik',
                'sku' => 'AH.BLO-UA024',
                'productprice' => 237000,
                'productsize' => 'L',
                'productquantity' => 77,
                'productcolor' => 'White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'AHHA/Women/Tops/AHHA - T-Shirt Unity Batik/AHHA-T-Shirt_Unity_Batik.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 37, 
                'productname' => 'AHHA - T-Shirt Kerapan Sapi (Limited Edition)',
                'productdescription' => '100% cotton with a special material that is not hot when used
                Plastisol screen printing is strong and durable',
                'sku' => 'AH.BLO-UA025',
                'productprice' => 295000,
                'productsize' => 'S',
                'productquantity' => 96,
                'productcolor' => 'White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'AHHA/Women/Tops/T-Shirt Kerapan Sapi (Limited Edition)/AHHA-T-Shirt_Kerapan_Sapi.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 38, 
                'productname' => 'AHHA MASK Indo Pride Edition "Jumputan"',
                'productdescription' => 'Cotton material
                Can be washed and reused',
                'sku' => 'AH.BLO-UA018',
                'productprice' => 72000,
                'productsize' => '-',
                'productquantity' => 12,
                'productcolor' => 'Green',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'AHHA/Women/Accessories/AHHA MASK Indo Pride Edition Jumputan/AHHA_MASK_Indo_Pride_Edition.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 39, 
                'productname' => 'AHHA MASK Indo Pride Edition "TENUN TIMUR"',
                'productdescription' => 'Cotton material
                Can be washed and reused',
                'sku' => 'AH.BLO-UA019',
                'productprice' => 72000,
                'productsize' => '-',
                'productquantity' => 25,
                'productcolor' => 'Black, Brown',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'AHHA/Women/Accessories/AHHA MASK Indo Pride Edition TENUN TIMUR/AHHA_MASK_Indo_Pride_Edition_TENUN_TIMUR.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 40, 
                'productname' => 'Scrunchie Voal',
                'productdescription' => "Voal material
                There is a rail in the middle that locks the material so it doesn't run
                Size 8cm
                Good quality neat stitches",
                'sku' => 'AH.BLO-UA020',
                'productprice' => 35000,
                'productsize' => '-',
                'productquantity' => 25,
                'productcolor' => 'Brown',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'AHHA/Women/Accessories/Scrunchie Voal/Scrunchie_Voal.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 2,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 41, 
                'productname' => 'Signature Pin Gold',
                'productdescription' => 'The exclusive PIN with the AHHA Hijab logo is available in two colors, namely Gold and Silver. In the form of AHHA Hijab logo horizontally, PIN is equipped with pearl as the hook.
                Size : 3x8 cm
                Material : Stainless metal with strong and sharp safety pins',
                'sku' => 'AH.BLO-UA021',
                'productprice' => 70000,
                'productsize' => '-',
                'productquantity' => 41,
                'productcolor' => 'Gold, Silver',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Stainless Metal',
                'productimage' => 'AHHA/Women/Accessories/Signature Pin Gold/Signature_Pin_Gold.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 42, 
                'productname' => 'AYE X SMILEY ARCA DYE SMI WHITE TEES',
                'productdescription' => 'AYE X SMILEY Collaboration graphic tees made from 100% cotton.
                Model is wearing size Small (170cm/55kg)',
                'sku' => 'AY.BLO-UA006',
                'productprice' => '148000',
                'productsize' => 'L',
                'productquantity' => '14',
                'productcolor' => 'White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Men/Tops/AYE X SMILEY ARCA DYE SMI WHITE TEES/asa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 43,
                'productname' => 'AYE X SMILEY BELLATRO SMI - GREEN JACKET',
                'productdescription' => 'Bellatro Smi is made from light-weight vintage green canvas cotton. Insipired by mitary style outer-wear with modern twist, designed in regular fit .
                Bellatro Smi features button closure, chest pocket, embroidered patches, adjustable buttoned cuffs, decorated with plastisol prints on back-side.
                10oz vintage green canvas cotton
                100% cotton
                Button closure
                Chest pocket
                Embroidered patches
                Plastisol prints
                Felled seam construction
                Regular fit',
                'sku' => 'AY.BLO-UA007',
                'productprice' => '520000',
                'productsize' => 'L',
                'productquantity' => '48',
                'productcolor' => 'Green',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Men/Tops/AYE X SMILEY BELLATRO SMI - GREEN JACKET/faas.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 44,
                'productname' => 'Aye X Smiley Olens smi Dye Blue Hoodie',
                'productdescription' => 'Olens Smi is made from heavy-weight american fleece cotton with hand-made tie dye. Available in regular fit with plastisol prints at front side and back side.',
                'sku' => 'AY.BLO-UA008',
                'productprice' => '598000',
                'productsize' => 'XL',
                'productquantity' => '88',
                'productcolor' => 'Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Men/Tops/Aye X Smiley Olens smi Dye Blue Hoodie/dia.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 45,
                'productname' => 'AYE X SMILEY PATRON SMI BLUE TYPE 2 JACKET',
                'productdescription' => 'Patron Smi is made from light-weight navy canvas cotton with special pattern prints. Designed in a modified type II jacket style, complete with hand-warmer pockets in regular fit.




                Patron Smi features button closure, flap pockets at chest, hand-warmer pockets, and adjustable waist band.
                
                
                Special pattern prints all over fabrics
                
                Button closure
                
                Chest pocket
                
                Felled seam construction
                
                Regular fit',
                'sku' => 'AY.BLO-UA009',
                'productprice' => '598000',
                'productsize' => 'M',
                'productquantity' => '95',
                'productcolor' => 'Navy Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas Cotton',
                'productimage' => 'Aye & Co/Men/Tops/AYE X SMILEY PATRON SMI BLUE TYPE 2 JACKET/bb.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 46,
                'productname' => 'AYE X SMILEY VITA SMI PEACH TEES',
                'productdescription' => 'AYE X SMILEY Collaboration graphic tees made from 100% cotton.




                Model is wearing size Small (170cm/55kg)',
                'sku' => 'AY.BLO-UA010',
                'productprice' => '148000',
                'productsize' => 'M',
                'productquantity' => '97',
                'productcolor' => 'Peach',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Men/Tops/AYE X SMILEY VITA SMI PEACH TEES/taga.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 47,
                'productname' => 'ORDO LIME TEES',
                'productdescription' => 'Made from 100% cotton in regular fit.',
                'sku' => 'AY.BLO-UA011',
                'productprice' => '120000',
                'productsize' => 'M',
                'productquantity' => '97',
                'productcolor' => 'Lime',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Men/Tops/ORDO LIME TEES/84AB71B0-8D9C-4208-BF11-FA7D4018CDE3_1603095032968_resized1024.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 48,
                'productname' => 'AYE X SMILEY QUARE SMI - BLACK DISTRESSED JEANS',
                'productdescription' => 'Quare Smi jeans are made from 12oz black stretch denim that has been washed down to a very authentic, hand-made repairs with peek-a-boo Smiley logo on right knee, worn in look with a light grey shade.




                Quare Smi comes in our signature super slim cut with mid-low rise and tight from the hips down to the narrow leg opening.
                
                
                
                
                12oz black stretch denim
                
                Prewashed
                
                Hand made repairs
                
                Peek-a-boo Smiley logo on right knee
                
                Worn in, authentic looks
                
                Hidden rivets
                
                Zip fly
                
                Signature pyramid arcuates (double stitch version)
                
                AYE X SMILEY black tab on back pocket
                
                AYE X SMILEY Special design patch
                
                Smiley logo prints on yoke lining
                
                Super slim',
                'sku' => 'AY.BLO-UA001',
                'productprice' => '542000',
                'productsize' => 'L',
                'productquantity' => '33',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Aye & Co/Men/Bottom/AYE X SMILEY QUARE SMI - BLACK DISTRESSED JEANS/0A923613-02C7-46B6-8B07-45D483330D53-7802-000003575D712166_1604577726568_resized1024.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 49,
                'productname' => 'BIGOLLO SLIM STRAIGHT SELVEDGE JEANS',
                'productdescription' => 'BIGOLLO SLIM STRAIGHT SELVEDGE JEANS
                BIGOLLO
                -
                Bigollo has it’s own uniqueness because of the look from the slub fabric that is full of character.
                -
                Bigollo is made from 20oz indigo selvedge denim, intense slub, blue selvedge line, slim straight fit.
                -
                Details :
                - 20oz raw selvedge denim
                - 100% cotton
                - Rope dyed
                - Indigo
                - Slubby
                - Blue selvedge line
                - Sanforized
                - Slim Straight Fit',
                'sku' => 'AY.BLO-UA002',
                'productprice' => '714000',
                'productsize' => 'M',
                'productquantity' => '39',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Aye & Co/Men/Bottom/BIGOLLO SLIM STRAIGHT SELVEDGE JEANS/DSCF6864_1587886312583_resized1024.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 50,
                'productname' => 'Sentinell Green Cargo Pants',
                'productdescription' => 'SENTINELL GREEN CARGO PANTS




                Sentinell cargo pants are made from light weight green ripstop cotton. 
                
                
                
                
                Sentinell cargo pants comes in regular slim cut with medium rise, roomy in the top-block and thigh to be comfortable, slightly tapered from knee to the leg opening.
                
                
                
                
                10oz green ripstop cotton
                
                Zip fly
                
                Multi pockets
                
                Adjustable waistband
                
                Reinforced layers on crotch
                
                Bartack stitching at vital stress points
                
                Adjustable leg opening
                
                Felled seam construction
                
                Regular slim fit',
                'sku' => 'AY.BLO-UA003',
                'productprice' => '488000',
                'productsize' => 'L',
                'productquantity' => '93',
                'productcolor' => 'Green',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Ripstop Cotton',
                'productimage' => 'Aye & Co/Men/Bottom/Sentinell Green Cargo Pants/asvzcbfn.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 51,
                'productname' => 'WARDEN BLACK PANTS',
                'productdescription' => 'Warden - Black

                Inspired by military pant, Warden fatigue pant is made from light-weight twill cotton, and come with all identical details like the iconic trapezoidal front pockets and flapped, buttoned back pockets.
                
                Generally, they fit more on the baggy side, but for this Warden we are trying to prensent some modern fit with slim top-block and slightly tapered leg.
                
                Available in Slim Fit.',
                'sku' => 'AY.BLO-UA004',
                'productprice' => '405000',
                'productsize' => 'XL',
                'productquantity' => '85',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Men/Bottom/WARDEN BLACK PANTS/49031571_0a01e96e-32b1-4996-95fb-2e493dfd3c7c_938_938_1582367555397._resized1024.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 52,
                'productname' => 'WARDEN KHAKI PANTS',
                'productdescription' => 'Bellatro Smi is made from light-weight vintage green canvas cotton. Insipired by mitary style outer-wear with modern twist, designed in regular fit .




                Bellatro Smi features button closure, chest pocket, embroidered patches, adjustable buttoned cuffs, decorated with plastisol prints on back-side.
                
                
                
                
                10oz vintage green canvas cotton
                
                100% cotton
                
                Button closure
                
                Chest pocket
                
                Embroidered patches
                
                Plastisol prints
                
                Felled seam construction
                
                Regular fit',
                'sku' => 'AY.BLO-UA005',
                'productprice' => '413000',
                'productsize' => 'M',
                'productquantity' => '62',
                'productcolor' => 'Vintage Green (Khaki)',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas Cotton',
                'productimage' => 'Aye & Co/Men/Bottom/WARDEN KHAKI PANTS/49031571_43daae2f-2d82-4c79-85e2-d29e43770e0b_936_936_1582357369824._resized1024.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 53,
                'productname' => 'AYE & CO FULGO TEE WHITE',
                'productdescription' => '100% 20s cotton with printed design in regular fit.

                AYE & co Design
                Weight: 500g',
                'sku' => 'AY.BLO-UA017',
                'productprice' => '220000',
                'productsize' => 'XS',
                'productquantity' => '26',
                'productcolor' => 'White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Women/Tops/AYE & CO FULGO TEE WHITE - 220K/1_253994a6-53ec-468e-be46-3582f68f7710_1350x1800.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 54,
                'productname' => 'AYE & CO IGNIS BLACK TEE',
                'productdescription' => '100% 20s cotton with printed design in regular fit.

                AYE & co Design
            
                Weight: 500g',
                'sku' => 'AY.BLO-UA018',
                'productprice' => '220000',
                'productsize' => 'S',
                'productquantity' => '35',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Women/Tops/AYE & CO IGNIS BLACK TEE - 220K/1_8447ef74-ba92-4b22-b46c-44552a0f955c_1350x1800.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 55,
                'productname' => 'AYE & CO PURUS VIOLET LONG SLEEVE T-SHIRT',
                'productdescription' => '100% 20s cotton with printed design in regular fit with long sleeve

                AYE & co Design
                Weight: 500g',
                'sku' => 'AY.BLO-UA019',
                'productprice' => '240000',
                'productsize' => 'M',
                'productquantity' => '53',
                'productcolor' => 'Violet',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Women/Tops/AYE & CO PURUS VIOLET LONG SLEEVE T-SHIRT - 240K/2_58755950-d6a8-4d29-80b3-be4b7c058f7b_1350x1800.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 56,
                'productname' => 'FULGO - White Tshirt',
                'productdescription' => '100% 20S Cotton. Printed design in regular fit.
                Weight: 500g',
                'sku' => 'AY.BLO-UA020',
                'productprice' => '220000',
                'productsize' => 'L',
                'productquantity' => '37',
                'productcolor' => 'White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Aye & Co/Women/Tops/FULGO - White Tshirt - 220K/49031571_9ae56baf-48af-4ddd-9348-f81bad2ce27d_1200_1200.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 57,
                'productname' => 'AYE & CO CULTUS BLACK DAD CAP',
                'productdescription' => 'Black/Grey daddy cap. One size fits all.

                Design by AYE & Co
            
                Weight: 500g',
                'sku' => 'AY.BLO-UA015',
                'productprice' => '210000',
                'productsize' => '-',
                'productquantity' => '82',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Aye & Co/Women/Accessories/AYE & CO CULTUS BLACK DAD CAP - 210K/sasds.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 3,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 58,
                'productname' => 'VISUM Grey Navy Dad Cap',
                'productdescription' => 'Grey dad cap with navy brim, made with 100% twill cotton. One size fits all.
                Weight: 500 gram',
                'sku' => 'AY.BLO-UA016',
                'productprice' => '190000',
                'productsize' => '-',
                'productquantity' => '96',
                'productcolor' => 'Grey, Navy',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Aye & Co/Women/Accessories/VISUM Grey Navy Dad Cap - 190K/49031571_cb270d05-d15f-4bf3-857d-50ff3fb183e6_1505_1505.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 4,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 59,
                'productname' => 'Black False',
                'productdescription' => 'Black False',
                'sku' => 'BW.BLO-UA005',
                'productprice' => '189000',
                'productsize' => 'M',
                'productquantity' => '2',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bear Wang Apparel/Men/Tops/Black False - 189K/IMG_0284-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 4,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 60,
                'productname' => 'BWA Axy',
                'productdescription' => 'BWA Axy',
                'sku' => 'BW.BLO-UA006',
                'productprice' => '179000',
                'productsize' => 'L',
                'productquantity' => '4',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bear Wang Apparel/Men/Tops/BWA Axy - 179K/Bear-Axy-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 4,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 61,
                'productname' => 'BWA Rawr Bear',
                'productdescription' => 'BWA Rawr Bear',
                'sku' => 'BW.BLO-UA007',
                'productprice' => '179000',
                'productsize' => 'XL',
                'productquantity' => '5',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bear Wang Apparel/Men/Tops/BWA Rawr Bear - 179K/Rawr-Bear-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 4,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 62,
                'productname' => 'BWA Bomb Trackpants Men Trousers',
                'productdescription' => 'BWA Bomb Trackpants Men Trousers',
                'sku' => 'BW.BLO-UA002',
                'productprice' => '350000',
                'productsize' => 'L',
                'productquantity' => '7',
                'productcolor' => 'Black, Grey',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bear Wang Apparel/Men/Bottom/BWA Bomb Trackpants Men Trousers - 350K/TB2.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 4,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 63,
                'productname' => 'BWA Black Caps',
                'productdescription' => 'BWA Black Caps',
                'sku' => 'BW.BLO-UA001',
                'productprice' => '140000',
                'productsize' => '-',
                'productquantity' => '9',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bear Wang Apparel/Men/Accessories/BWA Black Caps - 140K/Black-Caps-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 4,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 64,
                'productname' => 'Beanie Hat BWA Beanie Hat',
                'productdescription' => 'Beanie Hat BWA Beanie Hat',
                'sku' => 'BW.BLO-UA010',
                'productprice' => '165000',
                'productsize' => '-',
                'productquantity' => '11',
                'productcolor' => 'Black, White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bear Wang Apparel/Women/Accessories/Beanie Hat BWA Beanie Hat - 165K/beanie-hat-BWA.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 4,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 65,
                'productname' => 'BWA Mask Newest Mouth Mask 03',
                'productdescription' => 'BWA Mask Newest Mouth Mask 03',
                'sku' => 'BW.BLO-UA011',
                'productprice' => '35000',
                'productsize' => '-',
                'productquantity' => '14',
                'productcolor' => 'Black, White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bear Wang Apparel/Women/Accessories/BWA Mask Newest Mouth Mask 03 - 35K/WhatsApp-Image-2017-12-21-at-9.23.40-AM-1.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 66,
                'productname' => 'JK DIGNITY 03',
                'productdescription' => 'HIGHLY DURABLE WATER RESISTANT TASLAN FABRIC OUTDOOR BOMBER JACKET WITH  BLOODS LOGO AT FRONT',
                'sku' => 'BL.BLO-SI053',
                'productprice' => '250000',
                'productsize' => 'M',
                'productquantity' => '44',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Taslan',
                'productimage' => 'Bloods Industries/Men/Tops/JK DIGNITY 03 - 250K/JK-DIGNITY-03.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 67,
                'productname' => 'JK REVIVAL 01',
                'productdescription' => 'HIGHLY DURABLE WATER RESISTANT TASLAN FABRIC OUTDOOR BOMBER JACKET WITH  BLOODS LOGO AT FRONT',
                'sku' => 'BL.BLO-SH075',
                'productprice' => '250000',
                'productsize' => 'L',
                'productquantity' => '54',
                'productcolor' => 'Maroon',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Taslan',
                'productimage' => 'Bloods Industries/Men/Tops/JK REVIVAL 01 - 250K/JK-REVIVAL-01.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 68,
                'productname' => 'JK STANIS LEATHER JACKET',
                'productdescription' => 'Leather jacket type motorcycle jacket made of high quality sheepskin, wearing tartan and inside pockets, with Bloods signature button detail and YKK zipper.',
                'sku' => 'BL.BLO-TG081',
                'productprice' => '1650000',
                'productsize' => 'XL',
                'productquantity' => '44',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Leather',
                'productimage' => 'Bloods Industries/Men/Tops/JK STANIS LEATHER JACKET - 1.650K/stanis1.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 69,
                'productname' => 'LT SLICY 04',
                'productdescription' => 'PREMIUM LOTTO FABRIC ZIPPERED JACKET WITH BLOODS LOGO WOVEN PATCH AND ZIPPERED POCKET ON THE SIDE.',
                'sku' => 'BL.BLA-TF007',
                'productprice' => '160000',
                'productsize' => 'XXL',
                'productquantity' => '84',
                'productcolor' => 'Black, Maroon, Light Pink',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Taslan',
                'productimage' => 'Bloods Industries/Men/Tops/LT SLICY 04 - 160K/LT-SLICY-04.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 70,
                'productname' => 'SW DREAD',
                'productdescription' => 'PREMIUM YELLOW COTTON FLEECE PULLOVER HOODIE, WITH PRINTED PLASTISOL INK BLOODS ARTWORK',
                'sku' => 'BL.BLO-UB041',
                'productprice' => '315000',
                'productsize' => 'M',
                'productquantity' => '84',
                'productcolor' => 'Yellow',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton, Fleece',
                'productimage' => 'Bloods Industries/Men/Tops/SW DREAD - 315K/SW-DREAD.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 71,
                'productname' => 'SW KENNYS 01',
                'productdescription' => 'GREEN ARMY PREMIUM COTTON FLEECE HOODIE WITH BLOODS FONT PLASTISOL INK SCREEN PRINTING.',
                'sku' => 'BL.BLO-TL140',
                'productprice' => '299000',
                'productsize' => 'L',
                'productquantity' => '74',
                'productcolor' => 'Green Army',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Fleece',
                'productimage' => 'Bloods Industries/Men/Tops/SW KENNYS 01 - 299K/SW-KENNYS-01.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 72,
                'productname' => 'T FLAGY 04',
                'productdescription' => 'ULTRASOFT COTTON COMBED 30’S T-SHIRT WITH PLASTISOL INK SCREEN PRINTING',
                'sku' => 'BL.BLO-TF144',
                'productprice' => '100000',
                'productsize' => 'XL',
                'productquantity' => '34',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bloods Industries/Men/Tops/T FLAGY 04 - 100K/T-FLAGY-04.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 73,
                'productname' => 'T HEARTES 03',
                'productdescription' => 'BLACK 30S COTTON SHORT SLEEVE T-SHIRT WITH BUTTON AND WOVEN BLOODS LOGO',
                'sku' => 'BL.BLO-TL140',
                'productprice' => '135000',
                'productsize' => 'XXL',
                'productquantity' => '71',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bloods Industries/Men/Tops/T HEARTES 03 - 135K/T-HEARTES-03.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 74,
                'productname' => 'BX ANIMISM',
                'productdescription' => 'ANTI HEAT COTTON BLEND BOXER WITH BLOODS PLASTISOL INK SCREEN PRINTED.',
                'sku' => 'BL.BLO-UA106',
                'productprice' => '95000',
                'productsize' => 'M',
                'productquantity' => '1',
                'productcolor' => 'Red',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bloods Industries/Men/Bottom/BX ANIMISM - 95K/BX-ANIMISM.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 75,
                'productname' => 'BX GRIFRICH',
                'productdescription' => 'MATERIAL : COTTON
                WITH BLOODS PLASTISOL INK SCREEN PRINTED',
                'sku' => 'BL.BLO-TC129',
                'productprice' => '67000',
                'productsize' => 'L',
                'productquantity' => '10',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bloods Industries/Men/Bottom/BX GRIFRICH - 67K/BX-GRIFRICH.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 76,
                'productname' => 'BX TRICOLOR',
                'productdescription' => 'BX TRICOLOR',
                'sku' => 'BL.BLO-UB204',
                'productprice' => '95000',
                'productsize' => 'XL',
                'productquantity' => '99',
                'productcolor' => 'Red, White, Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bloods Industries/Men/Bottom/BX TRICOLOR - 95K/BX-TRICOLOR.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 77,
                'productname' => 'JN COATER 04',
                'productdescription' => 'MATERIAL : DENIM JEANS LONGPANTS WITH BLOODS WOVEN PATCH.
                COLOUR : DARK GREY',
                'sku' => 'BL.BLO-UB233',
                'productprice' => '329000',
                'productsize' => 'XXL',
                'productquantity' => '89',
                'productcolor' => 'Dark Grey',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Bloods Industries/Men/Bottom/JN COATER 04 - 329K/JN-COATER-04.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 78,
                'productname' => 'JN ODRE 03',
                'productdescription' => 'Dark Blue Denim Jeans Longpants With Bloods Woven Patch.',
                'sku' => 'BL.BLO-UB126',
                'productprice' => '329000',
                'productsize' => 'M',
                'productquantity' => '79',
                'productcolor' => 'Dark Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Bloods Industries/Men/Bottom/JN ODRE 03 - 329K/JN-ODRE-03.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 79,
                'productname' => 'ST GROSSY 02',
                'productdescription' => 'Material: Cotton Fleece',
                'sku' => 'BL.BLO-UB072',
                'productprice' => '139000',
                'productsize' => 'L',
                'productquantity' => '49',
                'productimage' => 'Bloods Industries/Men/Bottom/ST GROSSY 02- 139K/ST-GROSSY-02-2-525x525.jpg',
                'productcolor' => 'Red',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton Fleece',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 80,
                'productname' => 'T FLAGY 04',
                'productdescription' => 'BLUE COTTON WITH FLAMINGGO PLASTISOL INK SCREEN PRINTED.',
                'sku' => 'BL.BLO-TL139',
                'productprice' => '165000',
                'productsize' => 'XL',
                'productquantity' => '47',
                'productcolor' => 'Dark Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Bloods Industries/Men/Bottom/ST SUNSET - 165K/ST-SUNSET.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 81,
                'productname' => 'BLAZE RUNNER 01',
                'productdescription' => 'MULTI-TONED CHUNKY SNEAKERS WITH FLASH SIGNATURE AND STRIPE, SUEDE AND MESH MATERIAL, USING RUBBER OUTSOLE AND LACE UP FASTENING, ALSO DESIGNED WITH ROUND TOE',
                'sku' => 'BL.BLO-UA001',
                'productprice' => '390000',
                'productsize' => '40',
                'productquantity' => '75',
                'productcolor' => 'Black, White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Suede, Mesh, Rubber',
                'productimage' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 01 - 390K/BLAZE-RUNNER-01-4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 82,
                'productname' => 'BLAZE RUNNER 03',
                'productdescription' => 'MULTI-TONED CHUNKY SNEAKERS WITH FLASH SIGNATURE AND STRIPE, SUEDE AND MESH MATERIAL, USING RUBBER OUTSOLE AND LACE UP FASTENING, ALSO DESIGNED WITH ROUND TOE',
                'sku' => 'BL.BS-TE002',
                'productprice' => '390000',
                'productsize' => '41',
                'productquantity' => '49',
                'productcolor' => 'Black, Grey',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Suede, Mesh, Rubber',
                'productimage' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 03 - 390K/BLAZE-RUNNER-03-7-250x300.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 83,
                'productname' => 'LUGED HI 03',
                'productdescription' => 'CLASSIC HI-TOP SNEAKERS FOR A TIMELESS BASIC STYLE, TOP CANVAS MATERIAL WITH TEXTILE MATERIAL FOR THE INSOLE, MATCH WITH RUBBER SOLE AND LACE UP FASTENING, ALSO DESIGNED WITH ROUND TOE.',
                'sku' => 'BL.BS-TE007',
                'productprice' => '250000',
                'productsize' => '42',
                'productquantity' => '94',
                'productcolor' => 'Brown',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas, Textile, Rubber',
                'productimage' => 'Bloods Industries/Men/Shoes/LUGED HI 03 - 349K/LUGED-HI-03-4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 84,
                'productname' => 'LUGED LOW 03',
                'productdescription' => 'LOW TOP SNEAKERS WITH AN ICONIC CLASSIC DESIGN, TOP CANVAS MATERIAL WITH TEXTILE MATERIAL FOR THE INSOLE, A ROUND TOE MATCH WITH RUBBER SOLE AND LACE UP FASTENING',
                'sku' => 'BL.BS-TE011',
                'productprice' => '325000',
                'productsize' => '40',
                'productquantity' => '69',
                'productcolor' => 'Red',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas, Textile, Rubber',
                'productimage' => 'Bloods Industries/Men/Shoes/LUGED LOW 03 - 325K/LUGED-LOW-03.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 85,
                'productname' => 'SD CAPITAL 01',
                'productdescription' => 'BLACK RUBBER WEBBING STRAP SANDALS WITH BLOODS WOVEN PATCH',
                'sku' => 'BL.BLO-UA113',
                'productprice' => '199000',
                'productsize' => '41',
                'productquantity' => '79',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Rubber',
                'productimage' => 'Bloods Industries/Men/Shoes/SD CAPITAL 01 - 199K/SD-CAPITAL-01.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 86,
                'productname' => 'SD ZAGATO 02',
                'productdescription' => 'RUBBER WEBBING STRAP SANDALS WITH BLOODS WOVEN PATCH',
                'sku' => 'BL.BLO-TI059',
                'productprice' => '199000',
                'productsize' => '42',
                'productquantity' => '39',
                'productcolor' => 'Green Grey Army',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Rubber',
                'productimage' => 'Bloods Industries/Men/Shoes/SD ZAGATO 02 -199K/SD-ZAGATO-02-2.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 87,
                'productname' => 'Bevel Helment',
                'productdescription' => 'WHITE RETRO OPEN FACE SNI HELMET WITH SHIELD ON IT',
                'sku' => 'BL.BLO-UA091',
                'productprice' => '335000',
                'productsize' => '-',
                'productquantity' => '3',
                'productcolor' => 'White',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Stainless Metal',
                'productimage' => 'Bloods Industries/Men/Accessories/BEVEL HELMET - 335K/BEVEL-HELMET.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 88,
                'productname' => 'LY COMBO 01',
                'productdescription' => 'MATERIAL: PREMIUM POLYESTER
                COLOUR: BLACK ORANGE GREY',
                'sku' => 'BL.BLO-UB155',
                'productprice' => '49000',
                'productsize' => '-',
                'productquantity' => '33',
                'productcolor' => 'Black Orange Grey',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Premium Polyester',
                'productimage' => 'Bloods Industries/Men/Accessories/LY COMBO 01 - 49K/LY-COMBO-01.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 89,
                'productname' => 'SACK RAIN PROTECTOR 06',
                'productdescription' => 'SACK RAIN PROTECTOR 06',
                'sku' => 'BL.BLO-UB190',
                'productprice' => '150000',
                'productsize' => '-',
                'productquantity' => '36',
                'productcolor' => 'Red',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Waterproof Cotton',
                'productimage' => 'Bloods Industries/Men/Accessories/SACK RAIN PROTECTOR 06 - 150K/SACK-RAIN-PROTECTOR-06.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 90,
                'productname' => 'SC WIRE',
                'productdescription' => 'Black Wool Cotton Socks With Bloods Embroidery Logo',
                'sku' => 'BL.BLO-UB117',
                'productprice' => '69000',
                'productsize' => '-',
                'productquantity' => '13',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Wool Cotton',
                'productimage' => 'Bloods Industries/Men/Accessories/SC WIRE - 69K/SC-WIRE-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 91,
                'productname' => 'SL OUNWEL 02',
                'productdescription' => 'MATERIAL : COTTON FABRIC
                COLOUR : BLUE',
                'sku' => 'BL.BLO-UB203',
                'productprice' => '59000',
                'productsize' => '-',
                'productquantity' => '73',
                'productcolor' => 'Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton Fabric',
                'productimage' => 'Bloods Industries/Men/Accessories/SL OUNWEL 02 - 59K/SL-OUNWEL-02.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 92,
                'productname' => 'WATCHES BW0215 03',
                'productdescription' => 'ARMY PATTERN RUBBER STRAP STYLISH DIGITAL WATCH, WITH BLOODS LOGO AT FRONT',
                'sku' => 'BL.BLO-UA088',
                'productprice' => '345000',
                'productsize' => '-',
                'productquantity' => '19',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Rubber',
                'productimage' => 'Bloods Industries/Men/Accessories/WATCHES BW0215 03 - 345K/WATCHES-BW0215-03.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 93,
                'productname' => 'WL ARGED',
                'productdescription' => 'MATERIAL: PREMIUM SYNTHETIC LEATHER LONG WALLET WITH BLOODS METAL PATCH LOGO AND EMBOSSED PATTERN.
                COLOUR: BROWN',
                'sku' => 'BL.BLO-UB098',
                'productprice' => '109000',
                'productsize' => '-',
                'productquantity' => '59',
                'productcolor' => 'Brown',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Premium Synthetic Leather',
                'productimage' => 'Bloods Industries/Men/Accessories/WL ARGED - 109K/WL-ARGED.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 5,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 94,
                'productname' => 'WL SHIELD',
                'productdescription' => 'MATERIAL: PREMIUM SYNTHETIC LEATHER LONG WALLET WITH BLOODS METAL PATCH LOGO AND EMBOSSED PATTERN.
                COLOUR: BLACK',
                'sku' => 'BL.BLO-UB177',
                'productprice' => '99000',
                'productsize' => '-',
                'productquantity' => '53',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Premium Synthetic Leather',
                'productimage' => 'Bloods Industries/Men/Accessories/WL SHIELD - 99K/WL-SHIELD.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 95,
                'productname' => 'Gazelle Hi Black/Black',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA001',
                'productprice' => '338000',
                'productsize' => '40',
                'productquantity' => '61',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Men/Shoes/Gazelle Hi BlackBlack/Copy-of-GAZELLE-HI-BLACK-BLACK-1-1000x1000.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 96,
                'productname' => 'Gazelle Hi Blue Sky',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA002',
                'productprice' => '338000',
                'productsize' => '41',
                'productquantity' => '10',
                'productcolor' => 'Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Men/Shoes/Gazelle Hi Blue Sky/Copy-of-GAZELLE-HI-SKY-BLUE-1-1000x1000.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 97,
                'productname' => 'Gazelle Hi Cappuccino',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA003',
                'productprice' => '338000',
                'productsize' => '42',
                'productquantity' => '1',
                'productcolor' => 'Brown',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Men/Shoes/Gazelle Hi Cappuccino/Copy-of-GAZELLE-HI-CAPPUCCINO-1-1000x1000.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 98,
                'productname' => 'Gazelle Low Cappuccino',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA004',
                'productprice' => '298000',
                'productsize' => '42',
                'productquantity' => '6',
                'productcolor' => 'Brown',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Men/Shoes/Gazelle Low Cappuccino/GAZELLE-LOW-CAPPUCCINO-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 99,
                'productname' => 'Gazelle Low Red',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA005',
                'productprice' => '298000',
                'productsize' => '40',
                'productquantity' => '11',
                'productcolor' => 'Red',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Men/Shoes/Gazelle Low Red/GAZELLE-LOW-RED-1-1000x1000.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 100,
                'productname' => 'Gazelle Hi Black',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA010',
                'productprice' => '338000',
                'productsize' => '38',
                'productquantity' => '17',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Women/Shoes/Gazelle Hi Black/Copy-of-GAZELLE-HI-BLACK-WHITE-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 101,
                'productname' => 'Gazelle Hi Pink',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA011',
                'productprice' => '388000',
                'productsize' => '39',
                'productquantity' => '18',
                'productcolor' => 'Pink',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Women/Shoes/Gazelle Hi Pink/GAZELLE-HI-PINK-1-1000x1000.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 102,
                'productname' => 'Gazelle Low Blue Sky',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA011',
                'productprice' => '298000',
                'productsize' => '40',
                'productquantity' => '28',
                'productcolor' => 'Blue',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Women/Shoes/Gazelle Low Blue Sky/GAZELLE-LOW-SKY-BLUE-1-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 6,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 103,
                'productname' => 'Gazelle Low Navy',
                'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
                Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
                'sku' => 'CO.BLO-UA013',
                'productprice' => '298000',
                'productsize' => '41',
                'productquantity' => '54',
                'productcolor' => 'Navy',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Compass/Women/Shoes/Gazelle Low Navy/GAZELLE-LOW-NAVY-1-1000x1000.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 104,
                'productname' => 'CROOZ DYNAMIC TSHIRT BLACK',
                'productdescription' => 'Weight: 250 Gram
                Category: Tops
                Etalase: T-Shirt',
                'sku' => 'CR.BLO-UA005',
                'productprice' => '249000',
                'productsize' => 'M',
                'productquantity' => '62',
                'productcolor' => 'Black',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Men/Tops/CROOZ DYNAMIC TSHIRT BLACK - 249K/459aefeb-fb54-491e-94eb-a9aa914bd479.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 105,
                'productname' => 'CROOZ GONZ TSHIRT NAVY',
                'productdescription' => 'Weight: 250 Gram
                Categori: Tops
                Etalase: Semua Etalase',
                'sku' => 'CR.BLO-UA006',
                'productprice' => '249000',
                'productsize' => 'L',
                'productquantity' => '74',
                'productcolor' => 'Navy',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Men/Tops/CROOZ GONZ TSHIRT NAVY (HEAVY WEIGHT COTTON) - 249K/65580410_4d4f3423-cfbb-493e-93fc-9dac81880708.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 106,
                'productname' => 'CROOZ X NINDITO VEST JACKET',
                'productdescription' => 'Weight: 300 Gram
                Category: Top
                Etalase: Outerwear',
                'sku' => 'CR.BLO-UA007',
                'productprice' => '700000',
                'productsize' => 'XL',
                'productquantity' => '64',
                'productcolor' => 'Grey, Green',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Windbreaker',
                'productimage' => 'Crooz/Men/Tops/CROOZ X NINDITO VEST JACKET - 700K/65580410_bd55570e-67e3-49a8-aebf-ce8ec8a956f5.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 107,
                'productname' => 'Crooz Camo Jogger',
                'productdescription' => 'Weight: 1.000 Gram
                Category: Bottom
                Etalase: Pants
                Crooz Camo Jogger Pants',
                'sku' => 'CR.BLO-UA003',
                'productprice' => '390000',
                'productsize' => 'L',
                'productquantity' => '94',
                'productcolor' => 'Brown Army',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Men/Bottom/Crooz Camo Jogger - 390K/155852368505468_be6e3474-b7cf-4a19-819b-d9f4dbc0802e.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 108,
                'productname' => 'Crooz Moss 3 Way Reversible Bag',
                'productdescription' => 'Weight: 500 Gram
                Category: Accesories
                Etalase: Bag
                Moss 2 Way Reversible Bag
                Dimension : W 39 x H 45 x D 15
                Function : Backpack & Totte Bag',
                'sku' => 'CR.BLO-UA001',
                'productprice' => '480000',
                'productsize' => '-',
                'productquantity' => '34',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Men/Accessories/Crooz Moss 3 Way Reversible Bag - 480K/155845741084514_aedc6d50-73c4-4c0a-a1d4-db5a18123b99.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 109,
                'productname' => 'CROOZ OB NAVY RED SB',
                'productdescription' => 'Weight: 250 Gram
                Category: Accessories
                Etalase: HATS',
                'sku' => 'CR.BLO-UA001',
                'productprice' => '345000',
                'productsize' => '-',
                'productquantity' => '86',
                'productcolor' => 'Navy Red',
                'productweight' => '0.5 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Men/Accessories/CROOZ OB NAVY RED SB - 345K/65580410_2bbab1c3-f40f-49ee-a5e3-45e61078b01b.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 110,
                'productname' => 'CROOZ GEAR UP M51 RAIN COAT',
                'productdescription' => 'Weight: 300 Gram
                Category: Tops
                Etalase: Outerwear',
                'sku' => 'CR.BLO-UA018',
                'productprice' => '749000',
                'productsize' => 'XS',
                'productquantity' => '88',
                'productcolor' => 'Dark Green',
                'productweight' => '300 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Taslan',
                'productimage' => 'Crooz/Women/Tops/CROOZ GEAR UP M51 RAIN COAT - 749K/65580410_b40f86c9-d8dc-4f0e-b8e3-6c791eec36cf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 111,
                'productname' => 'CROOZ X CHOCOMOO TSHIRT YELLOW',
                'productdescription' => 'Weight: 250 Gram
                Category: Tops
                Etalase: T-Shirt',
                'sku' => 'CR.BLO-UA018',
                'productprice' => '249000',
                'productsize' => 'M',
                'productquantity' => '28',
                'productcolor' => 'Yellow',
                'productweight' => '300 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Women/Tops/CROOZ X CHOCOMOO TSHIRT YELLOW - 249K/65580410_e500b797-83b4-428d-bc28-707ec9df3fae.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 112,
                'productname' => 'CROOZ X NINDITO ALL DAY CROOZ PURPLE TSHIRT KAOS',
                'productdescription' => 'Weight: 250 Gram
                Category: Top
                Etalase: T-Shirt',
                'sku' => 'CR.BLO-UA018',
                'productprice' => '470000',
                'productsize' => 'M',
                'productquantity' => '80',
                'productcolor' => 'Purple',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Women/Tops/CROOZ X NINDITO ALL DAY CROOZ PURPLE TSHIRT KAOS- 470K/65580410_c06cd3f2-6334-47aa-a883-381f50a6b3e7.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 113,
                'productname' => 'Crooz Heat Sweatpants',
                'productdescription' => 'Weight: 500 Gram
                Category: Bottom
                Etalase: Pants
                Crooz Heat Sweatpants
        
                2 right and left side pockets, 1 back pocket
        
                80% Cotton / 20% polyester fleece',
                'sku' => 'CR.BLO-UA014',
                'productprice' => '495000',
                'productsize' => 'L',
                'productquantity' => '60',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton, Polyester, Fleece',
                'productimage' => 'Crooz/Women/Bottom/Crooz Heat Sweatpants - 495K/65580410_d442dea0-7ab4-471c-a41c-e56555d3eb40.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 114,
                'productname' => 'Crooz FU Socks',
                'productdescription' => 'Weight: 150 Gram
                Category: Accessories
                Etalase: Accessories',
                'sku' => 'CR.BLO-UA014',
                'productprice' => '130000',
                'productsize' => '-',
                'productquantity' => '40',
                'productcolor' => 'Black, Pink, Orange',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Women/Accessories/Crooz FU Socks - 130K/156291636318555_86cee64d-c8c8-4e40-a9b7-225f744d70f6.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 115,
                'productname' => 'CROOZ HAGEN SIDE BAG',
                'productdescription' => 'Weight: 200 Gram
                Category: Waist Bag Pria
                Etalase: Bag
                NEW RELEASE
        
                CROOZ HAGEN SIDE BAG
        
                RUBBER ZIPPER WATER PROOF',
                'sku' => 'CR.BLO-UA011',
                'productprice' => '210000',
                'productsize' => '-',
                'productquantity' => '72',
                'productcolor' => 'Black',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Women/Accessories/CROOZ HAGEN SIDE BAG - 210K/65580410_58dca57b-9af6-428f-b806-c4b826520f29.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 116,
                'productname' => 'Crooz Pin Pack',
                'productdescription' => 'Weight: 100 Gram
                Category: Accessories
                Etalase: Accessories',
                'sku' => 'CR.BLO-UA014',
                'productprice' => '165000',
                'productsize' => '-',
                'productquantity' => '44',
                'productcolor' => 'White, Purple, Red',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Crooz/Women/Accessories/crooz pin pack - 165K/Capture.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 7,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 117,
                'productname' => 'CROOZ STEPS CREAM TOTE BAG',
                'productdescription' => 'Weight: 250 Gram
                Category: Accessories
                Etalase: Bag',
                'sku' => 'CR.BLO-UA013',
                'productprice' => '180000',
                'productsize' => '-',
                'productquantity' => '64',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Crooz/Women/Accessories/CROOZ STEPS CREAM TOTE BAG - 180K/65580410_974d1926-3909-404d-b532-9fce26aae16c.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 8,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 118,
                'productname' => 'DREAMBIRDS MASTER OF THE EARTH II SS TSHIRT (LIMITED EDITION)',
                'productdescription' => 'Gold series is the true identity of Dreambirds! Where painting & clothing come together into a work that deserves a collection. Each work is painted by the owner and in-house artist Dreambirds, Prisa Rianzi and Abinara. The Dreambirds Gold Series is manufactured using the best materials, built-up cotton combed 24s (no side sewing) and screen printing using best-in-class plastisol machines and paints. This product has its own advantages because it is made in a limited manner and the serial number of each product is attached, so that one is very different from one another, giving the taste we all want, exclusivity!',
                'sku' => 'DB.BLO-UA007',
                'productprice' => '199000',
                'productsize' => 'M',
                'productquantity' => '62',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Dreambirds Artwear/Men/Tops/DREAMBIRDS MASTER OF THE EARTH II SS TSHIRT/d4d52471-0bc3-4a40-abc0-ec21ad5b5913.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 8,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 119,
                'productname' => 'DREAMBIRDS THE LURKER SS TSHIRT (LIMITED EDITION)',
                'productdescription' => 'Gold series is the true identity of Dreambirds! Where painting & clothing come together into a work that deserves a collection. Each work is painted by the owner and in-house artist Dreambirds, Prisa Rianzi and Abinara. The Dreambirds Gold Series is manufactured using the best materials, built-up cotton combed 24s (no side sewing) and screen printing using best-in-class plastisol machines and paints. This product has its own advantages because it is made in a limited manner and the serial number of each product is attached, so that one is very different from one another, giving the taste we all want, exclusivity!',
                'sku' => 'DB.BLO-UA008',
                'productprice' => '199000',
                'productsize' => 'L',
                'productquantity' => '62',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Dreambirds Artwear/Men/Tops/DREAMBIRDS THE LURKER SS TSHIRT (LIMITED EDITION)/0d149d33-e9d4-4509-a51c-12bb94429d4a.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 8,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 120,
                'productname' => 'DREAMBIRDS DREAMCAPS V USHANKA HAT CORDUROY',
                'productdescription' => 'Gold series is the true identity of Dreambirds! Where painting & clothing come together into a work that deserves a collection. Each work is painted by the owner and in-house artist Dreambirds, Prisa Rianzi and Abinara. The Dreambirds Gold Series is manufactured using the best materials, built-up cotton combed 24s (no side sewing) and screen printing using best-in-class plastisol machines and paints. This product has its own advantages because it is made in a limited manner and the serial number of each product is attached, so that one is very different from one another, giving the taste we all want, exclusivity!',
                'sku' => 'DB.BLO-UA001',
                'productprice' => '100000',
                'productsize' => '-',
                'productquantity' => '26',
                'productcolor' => 'Brown',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Corduroy',
                'productimage' => 'Dreambirds Artwear/Men/Accessories/DREAMBIRDS DREAMCAPS V USHANKA HAT CORDUROY/19999799_d4f65a2a-b386-4f7a-b573-63dfa043a6f6_1080_1080.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 8,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 121,
                'productname' => 'DREAMBIRDS TIGRANTULA FACIAL MASK',
                'productdescription' => 'Gold series is the true identity of Dreambirds! Where painting & clothing come together into a work that deserves a collection. Each work is painted by the owner and in-house artist Dreambirds, Prisa Rianzi and Abinara. The Dreambirds Gold Series is manufactured using the best materials, built-up cotton combed 24s (no side sewing) and screen printing using best-in-class plastisol machines and paints. This product has its own advantages because it is made in a limited manner and the serial number of each product is attached, so that one is very different from one another, giving the taste we all want, exclusivity!',
                'sku' => 'DB.BLO-UA002',
                'productprice' => '53000',
                'productsize' => '-',
                'productquantity' => '5',
                'productcolor' => 'Black',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Dreambirds Artwear/Men/Accessories/DREAMBIRDS TIGRANTULA FACIAL MASK/19999799_27a6145f-dc7b-46fd-b0a2-a823e7158f39_2048_2048.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 8,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 122,
                'productname' => 'DREAMBIRDS SPECTRUM II TSHIRT (SPECIAL FX)',
                'productdescription' => 'A new Dreambirds upgrade product from the COLLECTION ONE VOL.2 collection that has its own uniqueness! ~ SPECTRUM II uses a durable polyflex heat transfer material with a lightning effect giving a luxurious color changing impression. This product is not made in large quantities and is produced using the best ingredients to provide maximum results and is durable!',
                'sku' => 'DB.BLO-UA017',
                'productprice' => '199000',
                'productsize' => 'S',
                'productquantity' => '55',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Dreambirds Artwear/Women/Tops/DREAMBIRDS SPECTRUM II TSHIRT (SPECIAL FX)/d43e5a12-029f-49a0-9ba4-e306ea154938.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 8,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 123,
                'productname' => 'DREAMBIRDS FUNDAMENTAL POLO CAPS',
                'productdescription' => 'DREAMBIRDS FUNDAMENTAL POLO CAPS',
                'sku' => 'DB.BLO-UA015',
                'productprice' => '199000',
                'productsize' => '-',
                'productquantity' => '58',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polo',
                'productimage' => 'Dreambirds Artwear/Women/Accessories/DREAMBIRDS FUNDAMENTAL POLO CAPS/19999799_f97f32f1-de9b-41b0-8fbb-dd8cfad30675_1080_1080.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 124,
                'productname' => 'Classic Garage – Raglan Navy Cream',
                'productdescription' => 'Made from 24S cotton with an Enzyme pre-washed treatment Developed with riders, perfect for every day use and comfortable riding experience. Asian regular fit. Please check our sizing chart for your perfect fit',
                'sku' => 'EC.BLO-UA005',
                'productprice' => '275000',
                'productsize' => 'L',
                'productquantity' => '85',
                'productcolor' => 'Navy Cream',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Elders Company/Men/Tops/Classic Garage – Raglan Navy Cream - 275K/hdnfdn.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 125,
                'productname' => 'Hoodie “Support The Culture”',
                'productdescription' => 'Light weight hoodie
                Unsanforized fleece, will shrink upon the first wash (consider an upsize)
                Plastisol Ink (do not iron on surface)',
                'sku' => 'EC.BLO-UA006',
                'productprice' => '495000',
                'productsize' => 'XL',
                'productquantity' => '89',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Fleece',
                'productimage' => 'Elders Company/Men/Tops/Hoodie “Support The Culture” - 495K/gdghf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 126,
                'productname' => 'Local Garage Cat – Navy',
                'productdescription' => 'Made from 24S cotton with an Enzyme pre-washed treatment Developed with riders, perfect for every day use and comfortable riding experience. Asian regular fit. Please check our sizing chart for your perfect fit.',
                'sku' => 'EC.BLO-UA007',
                'productprice' => '250000',
                'productsize' => 'XL',
                'productquantity' => '77',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Elders Company/Men/Tops/Local Garage Cat – Navy - 250K/IMG_1474-600x600.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 127,
                'productname' => 'Elders Co X Supercub 125 Glove – Hornet',
                'productdescription' => 'This is a collaboration between Elders Company with Honda Street Cub C125. Elders Company teamed up with Astra Honda Motors (AHM) to celebrate the renaissance of Honda’s most awaited Vintage small bike, Super Cub C125. Size chart (palm circumference) Small: 18-19 cm Medium: 20-21 cm Large: 22-23 cm',
                'sku' => 'EC.BLO-UA001',
                'productprice' => '775000',
                'productsize' => '-',
                'productquantity' => '57',
                'productcolor' => 'Blue, White',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Glove',
                'productimage' => 'Elders Company/Men/Accessories/Elders Co X Supercub 125 Glove – Hornet - 775K/jgkkhgk.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 128,
                'productname' => 'Hornet Gloves – Black - 690K',
                'productdescription' => 'Tight cut, Made from quality Goat skin, Fine construction with anatomical palm panels for abrasion resistance and traction. Price Include express shipping / delivery Via DHL (5 days). To find out your glove size, measure (in inches) around the widest part of your hand with a tape measure. Use your dominant hand. Size chart (palm circumference) Small: 18-19 cm Medium: 20-21 cm Large: 22-23 cm Extra Large: 24-25 cm
                SKU: EC.BLO-UA002',
                'sku' => 'EC.BLO-UA002',
                'productprice' => '690000',
                'productsize' => '-',
                'productquantity' => '74',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Glove',
                'productimage' => 'Elders Company/Men/Accessories/Hornet Gloves – Black - 690K/ghgkghff.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 129,
                'productname' => 'Space',
                'productdescription' => 'Because we just can’t get enough. Here is Space Helmet. Like nothing you have ever experience before. Small shelled, Chrome Visor, You will not ask for more. Designed in Japan by Itsuki Tsutsui, a true artisan of modern age. Comes with retractable chrome and clear visors. Space Helmet are made with great care regarding safety. However, they might not conform to the safety requirements of your country (DOT/ECE). For this reason, our helmets are classified as ‘novelty helmets’.',
                'sku' => 'EC.BLO-UA003',
                'productprice' => '4375000',
                'productsize' => '-',
                'productquantity' => '7',
                'productcolor' => 'Black',
                'productweight' => '1000 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Stainless Metal',
                'productimage' => 'Elders Company/Men/Accessories/Space - 4375K/gfhds.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 130,
                'productname' => 'Utility Waist Bag – Navy',
                'productdescription' => 'Durable nylon piece that’s built upon the local crafter utilitarian ethos. Kitted out with a total of five functional pockets, the trusty canvas accessory is topped simply with a woven brand patch.',
                'sku' => 'EC.BLO-UA004',
                'productprice' => '245000',
                'productsize' => '-',
                'productquantity' => '8',
                'productcolor' => 'Navy',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Elders Company/Men/Accessories/Utility Waist Bag – Navy - 245K/P1810659.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 131,
                'productname' => 'Hot Rod – Forest Green',
                'productdescription' => 'Made from 24S cotton with an Enzyme pre-washed treatment Developed with riders, perfect for every day use and comfortable riding experience. Asian regular fit. Please check our sizing chart for your perfect fit.',
                'sku' => 'EC.BLO-UA015',
                'productprice' => '250000',
                'productsize' => 'M',
                'productquantity' => '81',
                'productcolor' => 'Forest Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Elders Company/Women/Tops/Hot Rod – Forest Green - 250K/fasaag.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 132,
                'productname' => 'Womens Souvenir Jacket',
                'productdescription' => 'Durable nylon piece that’s built upon the local crafter utilitarian ethos. Kitted out with a total of five functional pockets, the trusty canvas accessory is topped simply with a woven brand patch.',
                'sku' => 'EC.BLO-UA004',
                'productprice' => '1475000',
                'productsize' => 'L',
                'productquantity' => '33',
                'productcolor' => 'Maroon',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Elders Company/Women/Tops/Womens Souvenir Jacket - 1.475K/hshfsg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 133,
                'productname' => 'Work Shirt “Snake” – Olive',
                'productdescription' => 'This shirt is made with cotton poplin, with a classic premium embro.',
                'sku' => 'EC.BLO-UA017',
                'productprice' => '500000',
                'productsize' => 'XL',
                'productquantity' => '39',
                'productcolor' => 'Olive',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Elders Company/Women/Tops/Work Shirt “Snake” – Olive - 500K/ndffbs.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 134,
                'productname' => '5 Panel Hat – Square',
                'productdescription' => 'Full soft cotton caps with woven label.
                One size fits all.',
                'sku' => 'EC.BLO-UA010',
                'productprice' => '125000',
                'productsize' => '-',
                'productquantity' => '49',
                'productcolor' => 'White, Blue, Green, Red',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Elders Company/Women/Accessories/5 Panel Hat – Square - 125K/gagas.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 9,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 135,
                'productname' => 'Elders Ring Ftw – Gold',
                'productdescription' => 'This is a cool collection of “Ring” made by Elders Garage.',
                'sku' => 'EC.BLO-UA011',
                'productprice' => '350000',
                'productsize' => '-',
                'productquantity' => '47',
                'productcolor' => 'Gold',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Stainless Metal',
                'productimage' => 'Elders Company/Women/Accessories/Elders Ring Ftw – Gold - 350K/kfgfh.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 10,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 136,
                'productname' => 'Eggboy Comic',
                'productdescription' => 'Eggboy Comic',
                'sku' => 'GS.BLO-UA002',
                'productprice' => '165000',
                'productsize' => 'M',
                'productquantity' => '50',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Get Dirrty/Men/Tops/Eggboy Comic - 165k/155296907088299_803795b2-52ec-4b42-accc-b6dd969b6364.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 10,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 137,
                'productname' => 'Jesus Is King',
                'productdescription' => 'Jesus Is King',
                'sku' => 'GS.BLO-UA003',
                'productprice' => '165000',
                'productsize' => 'L',
                'productquantity' => '5',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Get Dirrty/Men/Tops/Jesus Is King - 165k/JESUS_IS_KING.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 10,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 138,
                'productname' => 'Stranger Things Gang',
                'productdescription' => 'Stranger Things Gang',
                'sku' => 'GS.BLO-UA004',
                'productprice' => '165000',
                'productsize' => 'XL',
                'productquantity' => '43',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Get Dirrty/Men/Tops/Stranger Things Gang - 165k/156954638997669_3a3fc04e-de1c-4ca1-b9a0-15bb3ccf3c91.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 10,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 139,
                'productname' => 'Goat Socks',
                'productdescription' => 'Color: multicolor.
                100% cotton. Sizes: one size',
                'sku' => 'GS.BLO-UA001',
                'productprice' => '49000',
                'productsize' => '-',
                'productquantity' => '34',
                'productcolor' => 'Grey',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Get Dirrty/Men/Accessories/Goat Socks - 49K/31004694_f540bf8f-b6b9-4b80-bec0-ab0b9e730034_1500_1500.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 10,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 140,
                'productname' => '80s Putin Tee',
                'productdescription' => 'color. black / white / pale yellow
                100% cotton
                sizes. extra small to extra extra large',
                'sku' => 'GS.BLO-UA011',
                'productprice' => '165000',
                'productsize' => 'S',
                'productquantity' => '24',
                'productcolor' => 'Pale Yellow',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Get Dirrty/Women/Tops/80s Putin Tee - 165K/155307498531989_90dcb6e6-3108-421d-8b8d-920867194480.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 10,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 141,
                'productname' => 'Money Heist Tee Putin Tee Socks',
                'productdescription' => 'color. black / white / pale yellow
                100% cotton
                sizes. extra small to extra extra large',
                'sku' => 'GS.BLO-UA012',
                'productprice' => '240000',
                'productsize' => 'M',
                'productquantity' => '66',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Get Dirrty/Women/Tops/Money Heist Tee - 240K/3672bd2b-d386-4024-a3b7-a59b09c79820.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 10,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 142,
                'productname' => 'Stop Fallin in Love Tshirt',
                'productdescription' => 'color. black / pale purple / neon green
                100% cotton
                sizes. extra small to extra extra large',
                'sku' => 'GS.BLO-UA015',
                'productprice' => '165000',
                'productsize' => 'M',
                'productquantity' => '15',
                'productcolor' => 'Neon Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Get Dirrty/Women/Tops/Stop Fallin in Love Tshirt - 165K/157680770964981_3277234d-d066-49bb-8286-13cd3d700642.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 10,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 143,
                'productname' => 'Wish We Were Real Socks',
                'productdescription' => 'color. multicolor
                100% cotton
                sizes. one size',
                'sku' => 'GS.BLO-UA010',
                'productprice' => '49000',
                'productsize' => '-',
                'productquantity' => '65',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Get Dirrty/Women/Accessories/Wish We Were Real Socks - 49K/31004694_7ccaa763-07ce-43f5-9dd5-0ad5f0cbf92c_1500_1500.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 144,
                'productname' => 'Bullitt Raw Dark Blue Trucker Denim Jacket',
                'productdescription' => "Denim jacket has been a wardrobe staple for every gentlemen. Whether its black, blue washed, or indigo blue. You will find everyone wearing it for its toughness and versatility. We also added a functional yet stylish feature: A flannel hidden pocket to secure your essentials, to complete your daily hustle. Now it's good to go!

                Specification:
                Durable 120z denim fabric
                Regular fit
                Hidden pocket",
                'sku' => 'GI.BLO-UA022',
                'productprice' => '169000',
                'productsize' => 'L',
                'productquantity' => '85',
                'productcolor' => 'Dark Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Guten Inc/Men/Tops/Bullitt Raw Dark Blue Trucker Denim Jacket - 169K/gaga.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 145,
                'productname' => 'Dover Black Shirt LS',
                'productdescription' => "Long sleeve shirt is an item that a guy must have. Guaranteed you won't go wrong with this long sleeve shirt! Going to non-formal events, will look mature and neat. To a semi-formal event, it's perfect! To formal events, the more suitable! The fittings are also really good, really fit for general postures in Indonesia. You will look classy and more mature!

                Features:
                -100% High quality cotton
                -Multifunctional chest pockets
                -Button spare
                -Washing instruction",
                'sku' => 'GI.BLO-UA024',
                'productprice' => '110000',
                'productsize' => 'XL',
                'productquantity' => '81',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Guten Inc/Men/Tops/Dover Black Shirt LS - 110K/gasfas.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 146,
                'productname' => 'GutenInc - Fantasy White T-Shirt',
                'productdescription' => "Guys! who doesn't have a graphic T-shirt? This is a unisex item that you must have! Graphic T-shirts are perfect for casual wear, or as underwear for shirts and jackets that are buttoned / reslering open. Graphic T-shirts from Guten inc are available in 2 favorite colors, black and white. The artwork is printed using screen printing techniques with plastisol ink and curing and press finishing techniques, thereby enhancing the character of the design.",
                'sku' => 'GI.BLO-UA027',
                'productprice' => '79000',
                'productsize' => 'L',
                'productquantity' => '61',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Guten Inc/Men/Tops/GutenInc - Fantasy White T-Shirt - 79K/gasga.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 147,
                'productname' => 'Guten Inc - Smith Camp Collar Khaki',
                'productdescription' => 'Camp collar shirt has been a fashion statement lately. A minimalist, laid back
                vibes is set to level up your chill time. It is very nice to be worn in a
                hangout, in a party, or any casual occasion. This is nice to be worn either
                buttoned or unbuttoned. You can pair this with any type of non-formal outfit.
            
            
                Specification:
            
            
                100% cotton fabric
                Regular fit
                Spare button on washing instruction label',
                'sku' => 'GI.BLO-UA025',
                'productprice' => '110000',
                'productsize' => 'XL',
                'productquantity' => '96',
                'productcolor' => 'Khaki',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Guten Inc/Men/Tops/Guten Inc - Smith Camp Collar Khaki - 110K/fasfa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 148,
                'productname' => "Malibu Blue Windbreaker - Men's Jacket Guteninc Coach Jacket",
                'productdescription' => 'Garment
                Windbreaker jacket
            
                Category:
                Jacket
            
                Inspiration/roots:
                Techwear, outdoor inspired fashion, casual rainwear
            
                Fabric/material:
                High durability water repellent nylon parachute, lightweight nylon taffeta for
                lining
            
                Fitting:
                Regular fit
            
                Features:
                High quality waterproof zipper
                hand pockets
                hidden pocket
                adjustable neck drawstring',
                'sku' => 'GI.BLO-UA028',
                'productprice' => '179000',
                'productsize' => 'XL',
                'productquantity' => '77',
                'productcolor' => 'Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Windbreaker',
                'productimage' => "Guten Inc/Men/Tops/Malibu blue Windbreaker - Men's Jacket Guteninc Coach Jacket - 179K/fasfasf.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 149,
                'productname' => 'Guteninc - Andrew Boardshort Cream',
                'productdescription' => 'Garment:
                Andrew boardshort
             
                Category:
                Pants
             
                Inspiration:
                casual sportswear, summer outfit
             
                Fabric:
                Soft premium corduroy
             
                Fitting:
                Regular fit
            
                Quick review:
                Boardshort is a trendy item for a casual occasion or light sports activities such as cycling.
             
                Features:
                Pocket for storing stuff safely',
                'sku' => 'GI.BLO-UA003',
                'productprice' => '100000',
                'productsize' => 'L',
                'productquantity' => '37',
                'productcolor' => 'Cream',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Corduroy',
                'productimage' => 'Guten Inc/Men/Bottom/Guteninc - Andrew Boardshort Cream - 100K/adas.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 150,
                'productname' => 'GutenInc - Leone Cargo Pants Olive',
                'productdescription' => 'Cargo pants have hit again recently, guys! Apart from being casual and durable, cargo pants have many functions, making them perfect for mobility and daily work needs, especially for field workers. Cargo pants from Guten inc have a special feature, namely the waist band fastening system with a strap, making it very useful to replace the belt! In addition, we apply a pocket cover to the waist pocket to make the items inside are safer from the risk of falling!

                Features:
                -Regular fit
                -Soft premium twill material
                -Rubber and strap fastening system
                -6 versatile pockets',
                'sku' => 'GI.BLO-UA004',
                'productprice' => '140000',
                'productsize' => 'L',
                'productquantity' => '97',
                'productcolor' => 'Olive',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Twill',
                'productimage' => 'Guten Inc/Men/Bottom/GutenInc - Leone Cargo Pants Olive - 140K/fagegag.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 151,
                'productname' => 'Guteninc Fabio Black Chino Pants',
                'productdescription' => "Boys! Try asking your friends who doesn't have chinos? Not even one, right? Yes! This item is indeed a must-have item for guys because it is so versatile! Want to go to the Mall, want to go to a formal event, want to ride a motorbike, or just hang out at a favorite venue, you name it! These pants are suitable for almost any situation! The fittings are really good, the slim fit is just right! There are various colors to complete your chosen outfit! Buy now before they run out!

                Features:
                -100% High quality twill cotton
                -Small multipurpose pouch
                -Button spare
                -Washing instruction
                -Stretch / flexible material",
                'sku' => 'GI.BLO-UA005',
                'productprice' => '135000',
                'productsize' => 'L',
                'productquantity' => '76',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Twill Cotton',
                'productimage' => 'Guten Inc/Men/Bottom/Guteninc Fabio Black Chino Pants  - 135K/dadsae.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 152,
                'productname' => 'Rambler Dark Blue Washed Denim',
                'productdescription' => 'Slim stretch denim pants is made for urban hustler. It is made for the one who moves a lot. It is lightweight, breathable, and it will perfectly fit your leg perfectly. Norton stretch denim comes in timeless color choice, blue wash and light blue wash.

                Specification:
                13,5 oz stretch denim fabric
                Slim fit
                Chain stitched inseam and waistband
                5 pockets include 1 small pocket',
                'sku' => 'GI.BLO-UA030',
                'productprice' => '160000',
                'productsize' => 'XL',
                'productquantity' => '56',
                'productcolor' => 'Dark Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Guten Inc/Men/Bottom/Rambler Dark Blue Washed Denim - 160K/GAGSAF.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 153,
                'productname' => 'Triumph Blue Washed Stretch Denim Pants',
                'productdescription' => 'Slim stretch denim pants is made for urban hustler. It is made for the one who moves a lot. It is lightweight, breathable, and it will perfectly fit your leg perfectly. Norton stretch denim comes in timeless color choice, blue wash and light blue wash.

                Specification:
                13,5 oz stretch denim fabric
                Slim fit
                Chain stitched inseam adnd waistband
                5 pockets include 1 small pocket',
                'sku' => 'GI.BLO-UA032',
                'productprice' => '165000',
                'productsize' => 'L',
                'productquantity' => '36',
                'productcolor' => 'Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Guten Inc/Men/Bottom/Triumph Blue Washed Stretch Denim Pants - 160K/asfaf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 154,
                'productname' => 'Campbell Classic Sneakers',
                'productdescription' => "Classic black and white sneakers is a staple for almost everyone in almost every occasion nowadays. Some of them are Mr. President in a meeting, guests at weddings, or the youngsters at local eatery, just name it. This type of footwear is essential and versatile so you can't go wrong with it. Name your outfit, and we got your sneakers choice here!

                Specification:
                Sturdy canvas fabric upper
                Cementing construction
                Leather piping
                Contrast stitching
                Soft insole",
                'sku' => 'GI.BLO-UA009',
                'productprice' => '250000',
                'productsize' => '40',
                'productquantity' => '56',
                'productcolor' => 'Black, White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Guten Inc/Men/Shoes/Campbell Classic Sneakers - 250K/asfa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 155,
                'productname' => 'Caroe Wingtip CH Brown',
                'productdescription' => "We've transformed a traditional leather wingtip into a thoroughly modern update. Caroe Wingtip Shoes are made from brown crazy horse leather and have exceptionally lightweight rubber soles.

                This shoes is perfectly match with Chester T-Shirt and Street Wanderers Denim.
            
                Specification
             
            
                Caroe Wingtip CH Light Brown
                Color: Brown
                Black Stitch
                Material: 100% Crazy Horse
                4,1 inch tall
                Outsole Nicaneo
                High sturdy cementing construction
                High quality leather
                Made in INDONESIA",
                'sku' => 'GI.BLO-UA010',
                'productprice' => '350000',
                'productsize' => '42',
                'productquantity' => '79',
                'productcolor' => 'Light Brown',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Crazy Horse',
                'productimage' => 'Guten Inc/Men/Shoes/Caroe Wingtip CH Brown - 350K/dsadsre.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 156,
                'productname' => 'Guten Inc - Quincy Low Military Green',
                'productdescription' => '- Low Top Sneaker
                - Color Black/Green (Upper), White (Outsole)
                - Branding logo at leather Tongue Pull Tab and Lateral Quarter side
                - Stitching Deco at Quarter
                - Lace-up fastening system
                - Premium Suede on the Upper
                - Premium Leather on the Heel
                - Canvas material on the Tongue
                - Mesh material at Lining and Insole
                - Rubber Outsole
                - Made in Indonesia',
                'sku' => 'GI.BLO-UA008',
                'productprice' => '250000',
                'productsize' => '42',
                'productquantity' => '46',
                'productcolor' => 'Black, Green, White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Suede, Leather, Canvas, Mesh, Rubber',
                'productimage' => 'Guten Inc/Men/Shoes/Guten Inc - Quincy Low Military Green - 250K/ASFAFa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 157,
                'productname' => 'Lucas Cool Grey',
                'productdescription' => '- Low Top Sneaker
                - Color Grey (Upper), White/Grey (Outsole)
                - Branding embossed logo at Tongue and Heel Patch
                - Stitching and Perforated Deco at Quarter
                - Lace-up fastening system
                - Premium Leather on the Quarter, Eyestay, Tongue Bottom and Heel Patch
                - Premium Suede on Toe Cap, Heel and Tongue Top
                - Synthetic Goat Leather combined with Mesh at Lining and Insole
                - Rubber Outsole
                - Made in Indonesia',
                'sku' => 'GI.BLO-UA021',
                'productprice' => '250000',
                'productsize' => '42',
                'productquantity' => '42',
                'productcolor' => 'Grey, White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Leather, Suede, Rubber',
                'productimage' => 'Guten Inc/Men/Shoes/Lucas Cool Grey - 250K/dsdssad.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 158,
                'productname' => 'Ring Liberty Gold Matte',
                'productdescription' => 'Made from stainless steel material. Available in 2 color variants. Designed for you who wants to look exceptional because this ring can really expose your true character and inner personality. 

                So pick your size, from 7mm, 8mm to 10mm
            
                Specification:
                Stainless steel material.',
                'sku' => 'GI.BLO-UA002',
                'productprice' => '120000',
                'productsize' => '-',
                'productquantity' => '8',
                'productcolor' => 'Gold',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Stainless Steel',
                'productimage' => 'Guten Inc/Men/Accessories/Ring Liberty Gold Matte - 120K/AFSAS.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 159,
                'productname' => 'GutenInc - Dead Chills Blue Hoodie',
                'productdescription' => 'Pullover Hoodie jacket with High Cotton Fleece material with manual screen printing and features a pocket plus a hoodie strap to adjust the hoodie stretch.',
                'sku' => 'GI.BLO-UA065',
                'productprice' => '160000',
                'productsize' => 'L',
                'productquantity' => '17',
                'productcolor' => 'Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton, Fleece',
                'productimage' => 'Guten Inc/Women/Tops/GutenInc - Dead Chills Blue Hoodie - 160K/sfasfs.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 160,
                'productname' => 'GutenInc - OG College Grey T-Shirt',
                'productdescription' => "Guys! who doesn't have a graphic T-shirt? This is a unisex item that you must have! Graphic T-shirts are perfect for casual wear, or as underwear for shirts and jackets that are buttoned / reslering open. Graphic T-shirts from Guten inc are available in 2 favorite colors, black and white. The artwork is printed using screen printing techniques with plastisol ink and curing and press finishing techniques, thereby enhancing the character of the design.",
                'sku' => 'GI.BLO-UA066',
                'productprice' => '80000',
                'productsize' => 'L',
                'productquantity' => '15',
                'productcolor' => 'Grey',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Guten Inc/Women/Tops/GutenInc - OG College Grey T-Shirt - 80K/fssfse.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 161,
                'productname' => 'OG College Brown Hoodie',
                'productdescription' => 'Pullover Hoodie jacket with High Cotton Fleece material with manual screen printing and features a pocket plus a hoodie strap to adjust the hoodie stretch.',
                'sku' => 'GI.BLO-UA067',
                'productprice' => '160000',
                'productsize' => 'XL',
                'productquantity' => '21',
                'productcolor' => 'Brown',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Fleece',
                'productimage' => 'Guten Inc/Women/Tops/OG College Brown Hoodie - 160K/sfasf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 162,
                'productname' => 'Guten Inc- Lucas White Gum',
                'productdescription' => '- Low Top Sneaker
                - Color White (Upper), Gum (Outsole)
                - Branding embossed logo at Tongue and Heel Patch
                - Stitching and Perforated Deco at Quarter
                - Lace-up fastening system
                - Premium Leather on the Quarter, Eyestay, Tongue Bottom and Heel Patch
                - Premium Suede on Toe Cap, Heel and Tongue Top
                - Synthetic Goat Leather combined with Mesh at Lining and Insole
                - Rubber Outsole
                - Made in Indonesia
                Categories: Shoes, Women',
                'sku' => 'GI.BLO-UA070',
                'productprice' => '250000',
                'productsize' => '39',
                'productquantity' => '23',
                'productcolor' => 'White, Gum',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Leather, Suede, Rubber',
                'productimage' => 'Guten Inc/Women/Shoes/Guten Inc- Lucas White Gum - 250K/fsfasssf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 163,
                'productname' => 'Guteninc - Marty Sneakers White',
                'productdescription' => 'This casual and timeless designed white sneakers with gum sole is the great shoes 

                that everyone must have because of its versatility.  So grab it fast before its gone buddy!
                
                Specification
                 
                
                Style: Marty Sneakers White
                Color: White + Gum (sole)
                Material: Canvas & floater Leather
                Rubber outsole
                Made in INDONESIA',
                'sku' => 'GI.BLO-UA071',
                'productprice' => '250000',
                'productsize' => '40',
                'productquantity' => '25',
                'productcolor' => 'White, Gum',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas, Floater, Rubber',
                'productimage' => 'Guten Inc/Women/Shoes/Guteninc - Marty Sneakers White - 250K/AFSFa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 164,
                'productname' => 'Ralph Sandal Cream',
                'productdescription' => 'Slipper sandals are the most casual and cozy footwear! You can use this everyday without being complicated and still stylish! This is perfect for wearing with t-shirts and shorts during holidays or relaxing moments.

                Features:
                -Premium phylon soles
                -Premium foam for maximum comfort',
                'sku' => 'GI.BLO-UA072',
                'productprice' => '79000',
                'productsize' => '41',
                'productquantity' => '29',
                'productcolor' => 'Cream',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Pyhlon',
                'productimage' => 'Guten Inc/Women/Shoes/Ralph Sandal Cream - 80K/dsadsde.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],            
            [
                'brandid' => 11,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 165,
                'productname' => 'Frins White Slingbag - Guteninc',
                'productdescription' => "Sometimes, urban mobility requires a versatile bag that can store a lot more
                than just your essentials. At that moment where waistbag, totebag, and backpack
                are not an option, here comes the sling bag, the 'something in between'. It
                allows you to be practical, fashionable, and surprisingly have sufficent space
                to store your belongings.
                
                 
                Item:
                Slingbag
                 
                Category: 
                Bag
                 
                Inspiration/roots:
                Japanese streetwear/ minimalist aesthetic
                 
                Fabric/material:
                High grade soft canvas
                 
                Dimension:
                Height: 19 cm
                Width: 15 cm
                 
                Quick review:
                Sling bag or sacoche bag is the new essential storage for commuter and stroller. The 'minimalist' aesthetic allows you to pair them with any type of your outfit.
                 
                Features:
                Multiple compartments
                Magnet Button
                Guten inc signature patch
                adjustable strap length",
                'sku' => 'GI.BLO-UA075',
                'productprice' => '80000',
                'productsize' => '-',
                'productquantity' => '42',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Guten Inc/Women/Accessories/Frins White Slingbag - Guteninc - 80K/sdss.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 11,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 166,
                'productname' => 'Masker Tali Strap Extender - Guteninc',
                'productdescription' => "Strap / hanger / necklace / cloth mask strap.
                Unisex
                
                Package Contents: 1pcs mask strap / 65Cm rope length
                + FREE MASK
                
                Please select a color via the variant that has been provided.
                
                Love losing masks?
                Confused about storing masks while eating / ablution / others
                Now you don't have to bother
                
                Fashionable design matches your everyday outfit. Many color choices, choose according to your taste.
                Specification:
                Stainless steel material.",
                'sku' => 'GI.BLO-UA081',
                'productprice' => '120000',
                'productsize' => '-',
                'productquantity' => '46',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Guten Inc/Women/Accessories/Masker Tali Strap Extender - Guteninc - 120K/gdgsdg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 12,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 167,
                'productname' => 'Chirps Rain Poncho',
                'productdescription' => 'Chirps Rain Poncho',
                'sku' => 'HS.BLO-UA003',
                'productprice' => '349000',
                'productsize' => 'L',
                'productquantity' => '56',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Taslan',
                'productimage' => 'Hijack Sandals/Men/Tops/Chirps Rain Poncho/chirps-rain-poncho-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 12,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 168,
                'productname' => 'Umbra Storm',
                'productdescription' => 'Umbra Storm',
                'sku' => 'HS.BLO-UA002',
                'productprice' => '879000',
                'productsize' => '42',
                'productquantity' => '78',
                'productcolor' => ' Grey',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Hijack Sandals/Men/Shoes/Umbra Storm/hijacksandals-Umbra-Storm-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 12,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 169,
                'productname' => 'Argo Blach',
                'productdescription' => 'Argo Blach',
                'sku' => 'HS.BLO-UA001',
                'productprice' => '759000',
                'productsize' => '40',
                'productquantity' => '94',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Hijack Sandals/Women/Shoes/Argo Blach/hi-jack-sandals-duality-phase-iii-argo-blach-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 12,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 170,
                'productname' => 'Piece Simo Sling Bag Blach',
                'productdescription' => 'Piece Simo Sling Bag Blach',
                'sku' => 'HS.BLO-UA014',
                'productprice' => '279000',
                'productsize' => '-',
                'productquantity' => '60',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Hijack Sandals/Women/Accessories/Piece Simo Sling Bag Blach/piece-simo-sling-bag-blach-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 171,
                'productname' => 'Jack Roastery Tee Orange',
                'productdescription' => 'Santiago Rodas has always destined to be the successor of his father’s coffee farm.

                When he was a kid, the whole farm field is his playground. He gets really accustomed to coffee planting.
            
                And by the time he grew up, he knew which is good coffee bean just by glancing at it.
            
                Now he is the topmost successful coffee producer. Well… until he joins Jack Brothers Coffee Industry as the sole best-handpicked coffee producer.',
                'sku' => 'JC.BLO-UA006',
                'productprice' => '229000',
                'productsize' => 'M',
                'productquantity' => '33',
                'productcolor' => 'Orange',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Men/Tops/Jack Roastery Tee Orange/Jack-Roastery-Orange-2.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 172,
                'productname' => 'Jackhammer Coffee Industry Tee Red',
                'productdescription' => 'It’s struck into The Master Head that all he needs is a pinch of forbidden spices that he found when he was in training.

                So later that night, he started to brew the Ultimate Coffee again, and now with the added spices. The process was tough and tedious, but nevertheless, he did it.
            
                The first sip was tasteless with a hint of nutty aftertaste. Suddenly a burst of taste came into his mouth, and then throat, and then- Stomache.
            
                All of a sudden, he realized that he is half skeleton now. But, he felt his sense of taste quadrupled. Without bothering his looks now, he rushed to his younglings and told them to drink the Ultimate Coffee.
            
                Trough the same process all the younglings turns into a half skeleton. And then there The Master said ” For if we all want the Ultimate Coffee in our hand, we must make the Ultimate Sacrifice. And for now and on we shall be known as The Jack Brothers Coffee Industry',
                'sku' => 'JC.BLO-UA007',
                'productprice' => '229000',
                'productsize' => 'L',
                'productquantity' => '43',
                'productcolor' => 'Red',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Men/Tops/Jackhammer Coffee Industry Tee Red/Jackhammer-Coffee-Industry-Red-3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 173,
                'productname' => 'Axis Cargo Pants Brown',
                'productdescription' => 'Axis Cargo Pants Brown',
                'sku' => 'JC.BLO-UA002',
                'productprice' => '499000',
                'productsize' => 'L',
                'productquantity' => '34',
                'productcolor' => 'Brown',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Men/Bottom/Axis Cargo Pants Brown/Axis-Cargo-Brown-9-510x510.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 174,
                'productname' => 'Combat Short Pants',
                'productdescription' => 'Combat Short Pants Olive',
                'sku' => 'JC.BLO-UA003',
                'productprice' => '349000',
                'productsize' => 'L',
                'productquantity' => '75',
                'productcolor' => 'Olive',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Men/Bottom/Combat Short Pants Olive/Self-Determination-Outfit_0013s_0006_1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 175,
                'productname' => 'High 3-Way Duffle Bag',
                'productdescription' => 'High 3-Way Duffle Bag Brown',
                'sku' => 'JC.BLO-UA001',
                'productprice' => '249000',
                'productsize' => '-',
                'productquantity' => '64',
                'productcolor' => 'Brown',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Men/Accessories/High 3-Way Duffle Bag Brown/Acc_0006s_0000_BagArtboard-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 176,
                'productname' => 'Ultimate Master Tee Grey',
                'productdescription' => 'The Coffee Master was once just a mere coffee enthusiast who worked on his uncle’s small cafe.

                After gaining some knowledge, he tried to be a full-fledged barista and gaining recognition.
            
                His passion for coffee keeps growing as he stated in his heart that coffee is the reason he woke up in the morning.
            
                Years go by, and his reputation grows rapidly. People started to honour him.
            
                Ultimately he got acknowledged by the CQI to become their associate Q Grader and viewed as the Coffee Master.',
                'sku' => 'JC.BLO-UA015',
                'productprice' => '229000',
                'productsize' => 'M',
                'productquantity' => '94',
                'productcolor' => 'Grey',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Women/Tops/Ultimate Master Tee Grey/Ultimate-Master-Grey-2.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 177,
                'productname' => 'Jakchammer x W.Essentiels Type-073 Cargo Pants',
                'productdescription' => 'Jakchammer x W.Essentiels Type-073 Cargo Pants Green',
                'sku' => 'JC.BLO-UA015',
                'productprice' => '349000',
                'productsize' => 'L',
                'productquantity' => '70',
                'productcolor' => 'Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Women/Bottom/Jakchammer x W.Essentiels Type-073 Cargo Pants Green/1200x1200_0076_1-510x510.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 178,
                'productname' => 'Basic Face Mask Wabash',
                'productdescription' => 'Basic Face Mask Wabash',
                'sku' => 'JC.BLO-UA010',
                'productprice' => '59000',
                'productsize' => '-',
                'productquantity' => '72',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Women/Accessories/Basic Face Mask Wabash/Acc_0011s_0000_MasterArtboard-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 13,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 179,
                'productname' => 'Pole Bucket Hat',
                'productdescription' => 'Pole Bucket Hat Olive',
                'sku' => 'JC.BLO-UA011',
                'productprice' => '129000',
                'productsize' => '-',
                'productquantity' => '50',
                'productcolor' => 'Olive',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Jackhammer Co/Women/Accessories/Pole Bucket Hat Olive/Acc_0000s_0003_1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 180,
                'productname' => 'Adior Crewneck',
                'productdescription' => 'Kamengski - Adior Crewneck',
                'sku' => 'KA.BLO-UA014',
                'productprice' => '330000',
                'productsize' => 'M',
                'productquantity' => '45',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Fleece',
                'productimage' => 'Kamengski/Men/Tops/Kamengski - Adior Crewneck - 330K/7dece409-adc6-428c-a12b-b72f6d4db3be.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 181,
                'productname' => 'Bulog Long Sleeve Tee',
                'productdescription' => 'Collaboration with @pscyclekit.
                Fabric : Japan heavy cotton with plastisol screen print on graphic.',
                'sku' => 'KA.BLO-UA015',
                'productprice' => '185000',
                'productsize' => 'L',
                'productquantity' => '70',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Men/Tops/Kamengski - Bulog Long Sleeve Tee - 185K/b581f0e2-a29c-47fe-b98b-d8eb5c55b832.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 182,
                'productname' => 'Jelly Black Short Tee',
                'productdescription' => 'Fabric : Japan heavy cotton with plastisol screen print on graphic.',
                'sku' => 'KA.BLO-UA016',
                'productprice' => '150000',
                'productsize' => 'L',
                'productquantity' => '62',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Men/Tops/Kamengski - Jelly Black Short Tee - 150K/05426cf6-368f-410c-942e-597c599ec3ac.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 183,
                'productname' => 'Lockdown Long Sleeve Tee',
                'productdescription' => 'Fabric : Japan heavy cotton with plastisol screen print on graphic. Tyvek and woven label on details.',
                'sku' => 'KA.BLO-UA017',
                'productprice' => '180000',
                'productsize' => 'XL',
                'productquantity' => '31',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Men/Tops/Kamengski - Lockdown Long Sleeve Tee - 180K/f0c6fa9d-9afd-4ded-b26e-eea9e23a4e7e.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 184,
                'productname' => 'Moon Doa Restu Long Sleeve Tee',
                'productdescription' => 'Fabric : Japan heavy cotton with plastisol screen print on graphic.',
                'sku' => 'KA.BLO-UA018',
                'productprice' => '180000',
                'productsize' => 'XXL',
                'productquantity' => '51',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Men/Tops/Kamengski - Moon Doa Restu Long Sleeve Tee - 180K/7bb74554-ad60-40eb-be06-b369a7d6fc29.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 185,
                'productname' => 'Camo Red Boxer',
                'productdescription' => 'Fabrics : Cotton Japan with label woven embroidery finishing.',
                'sku' => 'KA.BLO-UA006',
                'productprice' => '75000',
                'productsize' => 'L',
                'productquantity' => '15',
                'productcolor' => 'Red',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Men/Bottom/Kamengski - Camo Red Boxer - 75K/29abd634-8877-425c-8176-43f42f93e94b.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 186,
                'productname' => 'DNB Short Pants',
                'productdescription' => 'Fabrics and details : polyester easy dry with print on patches and label woven embroidery finishing, screen print on back.
                Type : board short / short pants',
                'sku' => 'KA.BLO-UA006',
                'productprice' => '200000',
                'productsize' => 'L',
                'productquantity' => '89',
                'productcolor' => 'Light Brown',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'Kamengski/Men/Bottom/Kamengski - DNB Short Pants - 200K/bdaacfaf-de30-4072-b866-3e3740c355e5.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 187,
                'productname' => 'Pulp Purple Short Pants',
                'productdescription' => 'Fabrics and details : Corduroy Purple with label woven embroidery finishing.
                Type : board short / short pants',
                'sku' => 'KA.BLO-UA010',
                'productprice' => '75000',
                'productsize' => 'XL',
                'productquantity' => '26',
                'productcolor' => 'Purple',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Corduroy',
                'productimage' => 'Kamengski/Men/Bottom/Kamengski - Pulp Purple Short Pants - 75K/d85a28df-bd9f-4d17-9a08-9cc2795cff39.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 188,
                'productname' => 'Queen Short Pants',
                'productdescription' => 'Fabrics and details : Corduroy Purple with label woven embroidery finishing.
                Type : board short / short pants',
                'sku' => 'KA.BLO-UA011',
                'productprice' => '225000',
                'productsize' => 'XL',
                'productquantity' => '28',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Men/Bottom/Kamengski - Queen Short Pants - 225K/4f5b5755-096f-44ad-9bbe-598aa1f709f3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 189,
                'productname' => 'Scab Orange Boxer',
                'productdescription' => 'Fabrics : Cotton Japan with label woven embroidery finishing.',
                'sku' => 'KA.BLO-UA012',
                'productprice' => '75000',
                'productsize' => 'XL',
                'productquantity' => '82',
                'productcolor' => 'Orange',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Men/Bottom/Kamengski - Scab Orange Boxer - 75K/019df7db-de67-4439-8f92-3ca19c6c04a4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 190,
                'productname' => 'Bench Beanie',
                'productdescription' => 'Type : Beanie with woven patch embroidery finishing
                Fabric : Knitted
                Size : One size fits all',
                'sku' => 'KA.BLO-UA001',
                'productprice' => '140000',
                'productsize' => '-',
                'productquantity' => '47',
                'productcolor' => 'Maroon',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Knitted',
                'productimage' => 'Kamengski/Men/Accessories/Kamengski - Bench Beanie - Maroon - 140K/19acc40a-74b1-4cf9-a4ab-5f6e1cec9fd5.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 191,
                'productname' => 'Buck Bucket Hat',
                'productdescription' => 'Fabric : Twill',
                'sku' => 'KA.BLO-UA002',
                'productprice' => '160000',
                'productsize' => '-',
                'productquantity' => '49',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Twill',
                'productimage' => 'Kamengski/Men/Accessories/Kamengski - Buck Bucket Hat - 160K/4cc2fc81-a6f9-4560-b388-eadcf867bb26.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 192,
                'productname' => 'Leran Face Mask',
                'productdescription' => 'Type : 2 layer face masker plus corona finger/keychain
                Fabric : polyester and cotton with woven label graphics emboidery finishing with plastic fluorescent keychain for bonus.',
                'sku' => 'KA.BLO-UA003',
                'productprice' => '45000',
                'productsize' => '-',
                'productquantity' => '59',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester, Cotton',
                'productimage' => 'Kamengski/Men/Accessories/Kamengski - Leran Face mask - 45K/ca1f4014-d450-4fbb-97be-b0e272dcafc0.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 193,
                'productname' => 'Police Socks',
                'productdescription' => 'Material : One size fits all',
                'sku' => 'KA.BLO-UA004',
                'productprice' => '70000',
                'productsize' => '-',
                'productquantity' => '62',
                'productcolor' => 'Black, Yellow',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Men/Accessories/Kamengski - Police Socks - 70K/050ddf88-d2cc-4111-a896-862bd300bc3e.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 194,
                'productname' => 'Potra (2 Mode Bag)',
                'productdescription' => 'Material : Cordura fabrics and woven label graphics
                Dimensions : 20 x 3 x 14 cm',
                'sku' => 'KA.BLO-UA005',
                'productprice' => '180000',
                'productsize' => '-',
                'productquantity' => '32',
                'productcolor' => 'Dark Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cordura, Woven',
                'productimage' => 'Kamengski/Men/Accessories/Kamengski - Potra (2 Mode Bag) - 180K/acdca557-602d-4988-a800-198c23840ef3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 195,
                'productname' => 'Ayam Kawin Short Tee',
                'productdescription' => 'Fabric : Combed 20s',
                'sku' => 'KA.BLO-UA025',
                'productprice' => '170000',
                'productsize' => 'M',
                'productquantity' => '91',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Women/Tops/Kamengski - Ayam Kawin Short Tee - 170K/ea6defb8-6f58-4b07-9dff-a8b2a603a983.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 196,
                'productname' => 'Bad Short Tee',
                'productdescription' => 'Fabric : Combed 20s',
                'sku' => 'KA.BLO-UA026',
                'productprice' => '150000',
                'productsize' => 'L',
                'productquantity' => '79',
                'productcolor' => 'Neon Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Women/Tops/Kamengski - Bad Short Tee - 150K/0e4c6939-0ea5-4068-bc6c-8f32df4fb24d.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 197,
                'productname' => 'Kill Yellow Ring Tee',
                'productdescription' => 'Fabric : Combed 20s',
                'sku' => 'KA.BLO-UA027',
                'productprice' => '170000',
                'productsize' => 'M',
                'productquantity' => '71',
                'productcolor' => 'Yellow',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Women/Tops/Kamengski - Kill Yellow Ring Tee - 170K/263913d6-e08b-48a0-a9fd-47ccfb2c90f4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 198,
                'productname' => 'Saks Mustard Short Tee',
                'productdescription' => 'Japan heavy cotton with plastisol screen print on graphic. Tyvek and woven label on details.',
                'sku' => 'KA.BLO-UA028',
                'productprice' => '150000',
                'productsize' => 'L',
                'productquantity' => '68',
                'productcolor' => 'Mustard',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Women/Tops/Kamengski - Saks Mustard Short Tee - 150K/e403e504-cbfe-4685-af6b-cfacab08078f.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 199,
                'productname' => 'Kills Art Short Tee',
                'productdescription' => 'Collaboration with @demusashi.
                Fabric : Combed 20s',
                'sku' => 'KA.BLO-UA029',
                'productprice' => '170000',
                'productsize' => 'M',
                'productquantity' => '51',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Women/Tops/Kamengski x Demus - Kills Art Short Tee - 170K/55404731-6533-4b69-b34c-2c20f0000195.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 200,
                'productname' => 'Cap Lang Bidon Bottle Purist',
                'productdescription' => "22 oz Purist Fixy Bottle / 650ml water bottle

                The Purist Fixy Bottle features an amorphous silicon dioxide coating that's infused into the inner-wall of the bottle. Essentially, this forms a glass-like finish that provides a totally natural, and completely inert, solution to the problem of your drinks staining the bottle or leaving behind any residual aftertaste. This infusion also shields your fresh water from tasting like plastic on very hot days, making it akin to drinking straight from a sparkling clean glass.
            
                Features of the bottle
                - Purist infusion shields the bottle from odor, stains, and mold to keep your water pure and your bottle clean.
                - Self-sealing Heart Valve delivers a high rate of flow with a 100% leak-proof design, even when the valve is open.
                - No push or pull is required to open and close the Heart Valve.
                - Easy-to-clean mouthpiece
                - Ergonomic design of cap body provides easy grip.
                - Made from easy-to-squeeze LDPE material.
                - Clear viewing strip makes it easy to see the bottle's contents.
                - BPA-Free plastic is made from 100% FDA food-grade materials, and it's printed with non-solvent base (UV Cured), CPSC-approved ink and materials.",
                'sku' => 'KA.BLO-UA019',
                'productprice' => '340000',
                'productsize' => '-',
                'productquantity' => '56',
                'productcolor' => 'Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'FDA Food-Grade',
                'productimage' => 'Kamengski/Women/Accessories/Kamengski - Cap Lang Bidon Bottle Purist - 340K/2188b5f8-56b4-4ed9-8073-5c4d0759f342.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 201,
                'productname' => 'Loop Shoelaces',
                'productdescription' => 'Kamengski - Loop Shoelaces',
                'sku' => 'KA.BLO-UA020',
                'productprice' => '30000',
                'productsize' => '-',
                'productquantity' => '65',
                'productcolor' => 'White',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Women/Accessories/Kamengski - Loop Shoelaces - 30K/1358b105-7219-4e7b-a3ce-49190501f6bc.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 202,
                'productname' => 'Kamengski - Pancoran Mix 5 Panel Caps',
                'productdescription' => 'Fabric : Mix cotton twill with polyflex graphic.
                One size fits all.',
                'sku' => 'KA.BLO-UA021',
                'productprice' => '150000',
                'productsize' => '-',
                'productquantity' => '46',
                'productcolor' => 'Yellow, Black, Red',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton Twill',
                'productimage' => 'Kamengski/Women/Accessories/Kamengski - Pancoran Mix 5 Panel Caps - 150K/bf766185-f4c9-4ec8-babf-13c2551753f3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 203,
                'productname' => 'Kamengski - Runa Caps',
                'productdescription' => 'Fabric : Cotton twill with woven graphics.',
                'sku' => 'KA.BLO-UA022',
                'productprice' => '150000',
                'productsize' => '-',
                'productquantity' => '67',
                'productcolor' => 'Red',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton Twill',
                'productimage' => 'Kamengski/Women/Accessories/Kamengski - Runa Caps - 150K/ca906fbf-3e49-46e1-bcaf-efad86cf712a.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 14,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 204,
                'productname' => 'Tochi Green Tote Bag',
                'productdescription' => 'Kamengski - Tochi Green Tote Bag',
                'sku' => 'KA.BLO-UA022',
                'productprice' => '160000',
                'productsize' => '-',
                'productquantity' => '52',
                'productcolor' => 'Green, Yellow',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Kamengski/Women/Accessories/Kamengski - Tochi Green Tote Bag - 160K/4be14675-cba3-4c68-9db3-abc61c23ed2c.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 15,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 205,
                'productname' => 'Beyza Tan',
                'productdescription' => 'Beyza Tan',
                'sku' => 'LT.BLO-UA001',
                'productprice' => '690000',
                'productsize' => '-',
                'productquantity' => '55',
                'productcolor' => 'Tan',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'LTHRKRFT/Men/Accessories/Beyza Tan/2021-01-30 14_11_17-Beyza Tan.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 15,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 206,
                'productname' => 'Bifold Olive',
                'productdescription' => 'Bifold Olive',
                'sku' => 'LT.BLO-UA002',
                'productprice' => '500000',
                'productsize' => '-',
                'productquantity' => '43',
                'productcolor' => 'Olive',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'LTHRKRFT/Men/Accessories/Bifold Olive/2021-01-30 14_10_14-Bifold Olive.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 15,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 207,
                'productname' => 'Gorilla Tan',
                'productdescription' => 'Gorilla Tan',
                'sku' => 'LT.BLO-UA004',
                'productprice' => '195000',
                'productsize' => '-',
                'productquantity' => '74',
                'productcolor' => 'Tan',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'LTHRKRFT/Men/Accessories/Gorilla Tan/2021-01-30 14_13_22-Gorilla Tan.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 15,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 208,
                'productname' => 'Single Prong Black - Natural',
                'productdescription' => 'Comes with handmade Stainless buckle, this belt will serve you nicely. Perfect for formal events or a leisure time.',
                'sku' => 'LT.BLO-UA005',
                'productprice' => '850000',
                'productsize' => '-',
                'productquantity' => '47',
                'productcolor' => 'Brown',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Leather, Stainless Buckle',
                'productimage' => 'LTHRKRFT/Men/Accessories/Lwc - 01 White  Tan Strap/2021-01-30 14_12_19-LWC - 01 WHITE _ Tan Strap.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 209,
                'productname' => 'ATH. DEPT MISTY',
                'productdescription' => 'ATH. DEPT MISTY',
                'sku' => 'MS.BLO-UA010',
                'productprice' => '290000',
                'productsize' => 'L',
                'productquantity' => '42',
                'productcolor' => 'Grey',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Mischief/Men/Tops/ATH. DEPT MISTY/1-13-1.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 210,
                'productname' => 'DOUBLE DRAGON SHIRT',
                'productdescription' => 'DOUBLE DRAGON SHIRT',
                'sku' => 'MS.BLO-UA011',
                'productprice' => '490000',
                'productsize' => 'L',
                'productquantity' => '43',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Mischief/Men/Tops/DOUBLE DRAGON SHIRT/a.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 211,
                'productname' => 'IL EAGLE MISTY',
                'productdescription' => 'IL EAGLE MISTY',
                'sku' => 'MS.BLO-UA012',
                'productprice' => '229000',
                'productsize' => 'XL',
                'productquantity' => '9',
                'productcolor' => 'Grey',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Mischief/Men/Tops/IL EAGLE MISTY/1-copy.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 212,
                'productname' => 'IL ST KARYU 13TH 22OZ',
                'productdescription' => 'IL ST KARYU 13TH 22OZ',
                'sku' => 'MS.BLO-UA003',
                'productprice' => '1349000',
                'productsize' => 'L',
                'productquantity' => '19',
                'productcolor' => 'Dark Grey',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Mischief/Men/Bottom/IL ST KARYU 13TH 220Z/01-11.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 213,
                'productname' => 'SL - 001 LITE',
                'productdescription' => 'SL - 001 LITE',
                'sku' => 'MS.BLO-UA004',
                'productprice' => '629000',
                'productsize' => 'L',
                'productquantity' => '14',
                'productcolor' => 'Dark Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Mischief/Men/Bottom/SL - 001 LITE/1-600x780.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 214,
                'productname' => 'SR – 002 BLACK X BLACK',
                'productdescription' => 'SR – 002 BLACK X BLACK',
                'sku' => 'MS.BLO-UA005',
                'productprice' => '629000',
                'productsize' => 'XL',
                'productquantity' => '29',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Mischief/Men/Bottom/SR - 02 BLACK X BLACK/1-15.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 215,
                'productname' => 'ENAMEL PIN LOGO',
                'productdescription' => 'ENAMEL PIN LOGO',
                'sku' => 'MO.BLO-UA001',
                'productprice' => '79000',
                'productsize' => '-',
                'productquantity' => '79',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Stainless Metal',
                'productimage' => 'Mischief/Men/Accessories/ENAMEL PIN LOGO/1-23.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 216,
                'productname' => 'MISCHIEF X MUCCA MASK',
                'productdescription' => 'MISCHIEF X MUCCA MASK',
                'sku' => 'MO.BLO-UA002',
                'productprice' => '79000',
                'productsize' => '-',
                'productquantity' => '96',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Mischief/Men/Accessories/MISCHIEF X MUCCA MASK/04-3-1.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 16,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 217,
                'productname' => 'BEANIE PATCH LOGO BLACK',
                'productdescription' => 'BEANIE PATCH LOGO BLACK',
                'sku' => 'MO.BLO-UA040',
                'productprice' => '129000',
                'productsize' => '-',
                'productquantity' => '32',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Mischief/Women/Accessories/BEANIE PATCH LOGO BLACK/1-copy.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 218,
                'productname' => 'Brighter Day Tee',
                'productdescription' => 'Tee designed by Monstore from Comfort Sunground collection. Oversized cutting t-shirt made for unisex with high quality screen printing and cotton combed 20s',
                'sku' => 'MO.BLO-UA010',
                'productprice' => '249000',
                'productsize' => 'M',
                'productquantity' => '41',
                'productcolor' => 'Maroon',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Tops/Brighter Day Tee - 249K/adsde.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 219,
                'productname' => 'Constant Pleasure Green Jersey',
                'productdescription' => 'Constant Pleasure Green Jersey designed by Monstore from Comfort Sunground collection. Cycling jersey that made for unisex with best quality printed waffle fabric.',
                'sku' => 'MO.BLO-UA011',
                'productprice' => '899000',
                'productsize' => 'L',
                'productquantity' => '38',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Tops/Constant Pleasure Green Jersey - 899K/FASFGs.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 220,
                'productname' => 'Constant Pleasure Tee',
                'productdescription' => 'Tee designed by Monstore from Comfort Sunground collection. Oversized cutting t-shirt made for unisex with high quality screen printing and cotton combed 20s',
                'sku' => 'MO.BLO-UA012',
                'productprice' => '249000',
                'productsize' => 'XL',
                'productquantity' => '44',
                'productcolor' => 'Light Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Tops/Constant Pleasure Tee - 249K/safsf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 221,
                'productname' => 'Emotion Shirt',
                'productdescription' => 'Cuban shirt designed by Monstore from Comfort Sunground collection. Made for unisex with high quality printed cotton poly fabric.',
                'sku' => 'MO.BLO-UA013',
                'productprice' => '599000',
                'productsize' => 'XL',
                'productquantity' => '31',
                'productcolor' => 'Navy',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Tops/Emotion Shirt - 599K/fafffsf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 222,
                'productname' => 'Monstore Cross Logo Tee Maroon',
                'productdescription' => 'Monstore Cross Logo Tee in Maroon color designed by Monstore from #WeeklyNewShyt collection. Made for unisex with high quality printing and material. Crew neck, regular fit, 100% cotton.',
                'sku' => 'MO.BLO-UA014',
                'productprice' => '149000',
                'productsize' => 'XXL',
                'productquantity' => '62',
                'productcolor' => 'Maroon',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Tops/Monstore Cross Logo Tee Maroon - 149K/AFSFe.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 223,
                'productname' => 'Positive Capability Chore Jacket Blue',
                'productdescription' => 'Jacket designed by Monstore from Comfort Sunground collection. Made for unisex with high quality screen printing and cotton fabric.',
                'sku' => 'MO.BLO-UA015',
                'productprice' => '549000',
                'productsize' => 'L',
                'productquantity' => '63',
                'productcolor' => 'Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Tops/Positive Capability Chore Jacket Blue - 549K/afsf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 224,
                'productname' => 'Fantaisie Pants',
                'productdescription' => 'Using denim/twill fabric. Photo swatches Technique , front side and back side of the clothes. Unisex',
                'sku' => 'MO.BLO-UA007',
                'productprice' => '720000',
                'productsize' => 'L',
                'productquantity' => '36',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim, Twill',
                'productimage' => 'Monstore/Men/Bottom/Fantaisie Pants - 720K/FFAF.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 225,
                'productname' => 'Jeune Cargo Pants',
                'productdescription' => 'Using twill cotton fabric. Photo swatches Technique , front side and back side of the clothes. Pocket as the details. Unisex',
                'sku' => 'MO.BLO-UA008',
                'productprice' => '680000',
                'productsize' => 'L',
                'productquantity' => '44',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Twill Cotton',
                'productimage' => 'Monstore/Men/Bottom/Jeune Cargo Pants - 680K/afsfssssf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 226,
                'productname' => 'Cross Bucket Hat Washed Green',
                'productdescription' => 'Bucket hat designed by Monstore from Comfort Sunground collection. Made for unisex with high quality screen printing and cotton fabric.',
                'sku' => 'MO.BLO-UA001',
                'productprice' => '180000',
                'productsize' => '-',
                'productquantity' => '72',
                'productcolor' => 'Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Accessories/Cross Bucket Hat Washed Green -180K/fafsfs.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 227,
                'productname' => 'DWPV Crystal Sling Bag',
                'productdescription' => 'DWPV Black Sling Bag designed by Monstore for #DWPV collection. Bag with adjustable sling with high quality screen print.',
                'sku' => 'MO.BLO-UA002',
                'productprice' => '150000',
                'productsize' => '-',
                'productquantity' => '27',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Accessories/DWPV Crystal Sling Bag - 150K/sdsafe.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 228,
                'productname' => 'DWPV Orion V2 Mask',
                'productdescription' => 'DWP20 X Monstore Official Merchandise Is Available Now Pre Order Batch 2

                Estimated Delivery : Week 4 January 2021.
            
                DWPV Black Mask designed by Monstore for #DWPV collection. Washable face mask with high quality screen print and 100% cotton',
                'sku' => 'MO.BLO-UA003',
                'productprice' => '57000',
                'productsize' => '-',
                'productquantity' => '59',
                'productcolor' => 'Black',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Accessories/DWPV Orion V2 Mask - 57K/afsfsfJPG.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 229,
                'productname' => 'Positive Capability Sling Bag',
                'productdescription' => 'Sling bag designed by Monstore from Comfort Sunground collection. Made for unisex with high quality screen printing and cotton fabric.',
                'sku' => 'MO.BLO-UA004',
                'productprice' => '180000',
                'productsize' => '-',
                'productquantity' => '78',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Accessories/Positive Capability Sling Bag - 180K/asfsfsf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 230,
                'productname' => 'Recycle Tyrant Mask',
                'productdescription' => "Having a cool mask to hustle through the new normal days, why not? We're re-using our last collection polyester cotton fabric to make a mask, because we are taking our waste problem seriously. Participate in our reuse, reduce, and recycle.",
                'sku' => 'MO.BLO-UA005',
                'productprice' => '49000',
                'productsize' => '-',
                'productquantity' => '81',
                'productcolor' => 'Multicolor',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Accessories/Recycle Tyrant Mask - 49K/fsaffre.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 231,
                'productname' => 'WTF Replayrepliy Scarf',
                'productdescription' => 'Bring the beat back" was inspired by the pandemic, where I saw a lot of anxiety, sadness, boredom and other negative things. I want to show that we can create happiness even at home through music. With music, I hope that we can return to being happy and excited amidst situations like this.',
                'sku' => 'MO.BLO-UA006',
                'productprice' => '91000',
                'productsize' => '-',
                'productquantity' => '30',
                'productcolor' => 'Yellow',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Men/Accessories/WTF Replayrepliy Scarf - 91K/afsfafg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 232,
                'productname' => 'Feast Windbreaker',
                'productdescription' => 'Through this collaboration we’re aiming to share the energy, the creative spirit, the feeling of being in a community whose passionate in art.

                This excitement, this celebration of living with no boundaries can be implemented in everyone’s daily life.
            
                Together we are spreading and celebrating the current moment of living as a reminder to keep moving, to keep being creative and to share joy even in the hardest time.',
                'sku' => 'MO.BLO-UA042',
                'productprice' => '480000',
                'productsize' => 'M',
                'productquantity' => '20',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Windbreaker',
                'productimage' => 'Monstore/Women/Tops/Feast Windbreaker - 480K/sdadsde.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 233,
                'productname' => 'Home Chore Jacket Army Green',
                'productdescription' => 'Jacket designed by Monstore from Comfort Sunground collection. Made for unisex with high quality screen printing and cotton fabric.',
                'sku' => 'MO.BLO-UA042',
                'productprice' => '549000',
                'productsize' => 'L',
                'productquantity' => '60',
                'productcolor' => 'Army Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Women/Tops/Home Chore Jacket Army Green - 549K/adsda.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 234,
                'productname' => 'Long Weekend Pattern Kimono',
                'productdescription' => 'Long weekend Pattern Kimono Outer in blue color dominant designed by Monstore #CubanFever Collection. Made for unisex with high quality printing and material. Shirt collar, regular fit, chiffon ceruti.',
                'sku' => 'MO.BLO-UA046',
                'productprice' => '450000',
                'productsize' => 'XL',
                'productquantity' => '72',
                'productcolor' => 'Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Women/Tops/Long weekend Pattern Kimono - 450K/DSAFS.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 235,
                'productname' => 'Mammon x Monstore Bomber Jacket',
                'productdescription' => 'Mammon x Monstore Bomber Jacket in Black color designed by Monstore from #MammonXMonstore collection. Made for unisex with high quality printing and material.',
                'sku' => 'MO.BLO-UA047',
                'productprice' => '479000',
                'productsize' => 'M',
                'productquantity' => '76',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Bomber',
                'productimage' => 'Monstore/Women/Tops/Mammon x Monstore Bomber Jacket - 479K/dadssde.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 236,
                'productname' => 'Memoire Long Jacket Black',
                'productdescription' => 'Using twill fabric. Photo swatches Technique, front side and back side of the clothes. Unfinished fabric as the details.',
                'sku' => 'MO.BLO-UA048',
                'productprice' => '800000',
                'productsize' => 'L',
                'productquantity' => '37',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Twill',
                'productimage' => 'Monstore/Women/Tops/Memoire Long Jacket Black - 800K/adssssda.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 237,
                'productname' => 'Moonlight Short',
                'productdescription' => 'Moonlight Short in brown color dominant designed by Monstore #NotionOfTheTribe Collection. Made for unisex with high quality printing and material. Short collar, regular fit, 50% polyester 50% cotton.',
                'sku' => 'MO.BLO-UA038',
                'productprice' => '360000',
                'productsize' => 'M',
                'productquantity' => '85',
                'productcolor' => 'Brown',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester, Cotton',
                'productimage' => 'Monstore/Women/Bottom/Moonlight Short - 360K/ASFFSa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 238,
                'productname' => 'Trespasser Short',
                'productdescription' => 'Trespasser Short in off white color dominant designed by Monstore #NotionOfTheTribe Collection. Made for unisex with high quality printing and material. Short collar, regular fit, 50% polyester 50% cotton.',
                'sku' => 'MO.BLO-UA039',
                'productprice' => '360000',
                'productsize' => 'M',
                'productquantity' => '65',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Polyester, Cotton',
                'productimage' => 'Monstore/Women/Bottom/Trespasser Short - 360K/asfsfaf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 239,
                'productname' => 'Agatha Pricilla Enamel Pin',
                'productdescription' => 'Through this collaboration we’re aiming to share the energy, the creative spirit, the feeling of being in a community whose passionate in art.

                This excitement, this celebration of living with no boundaries can be implemented in everyone’s daily life.
            
                Together we are spreading and celebrating the current moment of living as a reminder to keep moving, to keep being creative and to share joy even in the hardest time.',
                'sku' => 'MO.BLO-UA030',
                'productprice' => '72000',
                'productsize' => '-',
                'productquantity' => '31',
                'productcolor' => 'Blue, Pink',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Stainless Metal',
                'productimage' => 'Monstore/Women/Accessories/Agatha Pricilla Enamel Pin - 72K/AFSFFe.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 240,
                'productname' => 'DWPV x LFBD Alpha Mask Tosca',
                'productdescription' => 'DWP20 X Monstore Official Merchandise Is Available Now Pre Order Batch 2

                Estimated Delivery : Week 4 January 2021.
            
                DWPV Alpha Mask designed by Monstore for #DWPV collection. Washable face mask with high quality screen print and 100% cotton',
                'sku' => 'MO.BLO-UA031',
                'productprice' => '57000',
                'productsize' => '-',
                'productquantity' => '32',
                'productcolor' => 'Tosca',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Women/Accessories/DWPV x LFBD Alpha Mask Tosca - 57K/adsfagsg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 241,
                'productname' => 'Hindia Tote Bag Beige',
                'productdescription' => 'Through this collaboration we’re aiming to share the energy, the creative spirit, the feeling of being in a community whose passionate in art.

                This excitement, this celebration of living with no boundaries can be implemented in everyone’s daily life.
            
                Together we are spreading and celebrating the current moment of living as a reminder to keep moving, to keep being creative and to share joy even in the hardest time.',
                'sku' => 'MO.BLO-UA034',
                'productprice' => '176000',
                'productsize' => '-',
                'productquantity' => '33',
                'productcolor' => 'Beige',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Monstore/Women/Accessories/Hindia Tote Bag Beige - 176K/ASAFSF.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 242,
                'productname' => 'Monstore Saving Graces Bag',
                'productdescription' => 'Shopping bag in Cream is made of spoundbound and features screen printed texts from new normal Collection. Talking about our last collection to make our world be better without plastic bag, because we are taking our waste problem seriously to reduce the use of single-use plastics by buying one of those shopping bag.',
                'sku' => 'MO.BLO-UA035',
                'productprice' => '50000',
                'productsize' => '-',
                'productquantity' => '34',
                'productcolor' => 'Beige',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Canvas',
                'productimage' => 'Monstore/Women/Accessories/Monstore Saving Graces Bag - 50K/SADSAFS.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 243,
                'productname' => 'SunEater Lanyard',
                'productdescription' => 'Shopping bag in Cream is made of spoundbound and features screen printed texts from new normal Collection. Talking about our last collection to make our world be better without plastic bag, because we are taking our waste problem seriously to reduce the use of single-use plastics by buying one of those shopping bag.',
                'sku' => 'MO.BLO-UA036',
                'productprice' => '80000',
                'productsize' => '-',
                'productquantity' => '35',
                'productcolor' => 'White',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Monstore/Women/Accessories/SunEater Lanyard - 80K/dasdsde.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 17,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 244,
                'productname' => 'WTF Summer Gloves Beige',
                'productdescription' => 'WTF Summer Vibe Gloves Beige designed by Monstore from #WTF20 collection.Made for unisex with high quality printing and material scuba.',
                'sku' => 'MO.BLO-UA037',
                'productprice' => '120000',
                'productsize' => '-',
                'productquantity' => '36',
                'productcolor' => 'Beige',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Scuba',
                'productimage' => 'Monstore/Women/Accessories/WTF Summer Gloves Beige - 120K/SaaAFSF.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 245,
                'productname' => 'LITE - NO. 160',
                'productdescription' => "DESIGNER'S NOTE
                Waist Pack + Reverse Arc Top + Flat Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water-resistant full lining
            
                YKK® Racquet Coil Zipper
            
                YKK® Heavy Duty Side Release Buckle
            
                Continuous Filament Thread
            
                DIMENSION
                in millimetres 200 x 260 x 100
            
                in inches 8 x 10.2 x 4",
                'sku' => 'NA.BLO-UA001',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '46',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Men/Accessories/LITE - NO. 160 - 250K/afsafa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 246,
                'productname' => 'LITE - NO. 321',
                'productdescription' => "DESIGNER'S NOTE
                Backpack + Arc Top + Napoleon Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water-resistant full lining
            
                YKK® Racquet Coil Zipper
            
                Continuous Filament Thread
            
                DIMENSION
                in millimeters 300 x 450 x 150
            
                in inches 11.8 x 17.8 x 6",
                'sku' => 'NA.BLO-UA002',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '52',
                'productcolor' => 'Dark Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Men/Accessories/LITE - NO. 321 - 250K/hfhfssd.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 247,
                'productname' => 'LITE - NO. 325',
                'productdescription' => "DESIGNER'S NOTE
                Backpack + Roll Top + Dual Flap Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water-resistant full lining
            
                YKK® Racquet Coil Zipper
            
                Continuous Filament Thread
            
                DIMENSION
                in millimeters 300 x 450 x 150
            
                in inches 11.8 x 17.8 x 6",
                'sku' => 'NA.BLO-UA003',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '54',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Men/Accessories/LITE - NO. 325 - 250K/jtfdsg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 248,
                'productname' => 'LITE - NO. 350',
                'productdescription' => "DESIGNER'S NOTE
                Backpack + Flat Top + Flat Pocket
                
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
                
                Water-resistant full lining
                
                YKK® Racquet Coil Zipper
                
                Continuous Filament Thread
                
                DIMENSION
                in millimeters 300 x 450 x 150
                
                in inches 11.8 x 17.8 x 6",
                'sku' => 'NA.BLO-UA004',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '58',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Men/Accessories/LITE - NO. 350 - 250K/hrfhg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 249,
                'productname' => 'LITE - NO. 372',
                'productdescription' => "DESIGNER'S NOTE
                Backpack + Zip Top + Classic Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water resistant full lining
            
                YKK® Racquet Coil Zipper
            
                Continuous Filament Thread
            
                DIMENSION
                in millimeters 300 x 450 x 150
            
                in inches 11.8 x 17.8 x 6",
                'sku' => 'NA.BLO-UA005',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '60',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Men/Accessories/LITE - NO. 372 - 250K/hagag.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 250,
                'productname' => 'LITE - NO. 385',
                'productdescription' => "DESIGNER'S NOTE
                Backpack + Bend Down Top + Dual Flap Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water-resistant full lining
            
                YKK® Racquet Coil Zipper
            
                YKK® Heavy Duty Side Release Buckle
            
                Continuous Filament Thread
            
                DIMENSION
                in millimeters 300 x 450 x 150
            
                in inches 11.8 x 17.8 x 6",
                'sku' => 'NA.BLO-UA006',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '66',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Men/Accessories/LITE - NO. 385 - 250K/lukgy.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 251,
                'productname' => 'LITE - NO. 151',
                'productdescription' => "DESIGNER'S NOTE
                Waist Pack + Flat Top + Napoleon Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water-resistant full lining
            
                YKK® Racquet Coil Zipper
            
                YKK® Heavy Duty Side Release Buckle
            
                Continuous Filament Thread
            
                DIMENSION
                in millimetres 200 x 260 x 100
            
                in inches 8 x 10.2 x 4",
                'sku' => 'NA.BLO-UA010',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '3',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Women/Accessories/LITE - NO. 151 - 250K/ktktje.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 252,
                'productname' => 'LITE - NO. 301',
                'productdescription' => "DESIGNER'S NOTE
                Backpack + Arc Top + Napoleon Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water-resistant full lining
            
                YKK® Racquet Coil Zipper
            
                Continuous Filament Thread
            
                DIMENSION
                in millimeters 300 x 450 x 150
            
                in inches 11.8 x 17.8 x 6",
                'sku' => 'NA.BLO-UA012',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '6',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Women/Accessories/LITE - NO. 301 - 250K/ggahhrr.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 253,
                'productname' => 'LITE - NO. 361',
                'productdescription' => "DESIGNER'S NOTE
                Backpack + Reverse-Arc Top + Napoleon Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water resistant full lining
            
                YKK® Racquet Coil Zipper
            
                Continuous Filament Thread
            
                DIMENSION
                in millimeters 300 x 450 x 150
            
                in inches 11.8 x 17.8 x 6",
                'sku' => 'NA.BLO-UA015',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '8',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Women/Accessories/LITE - NO. 361 - 250K/hrkyky.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 18,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 254,
                'productname' => 'LITE - NO. 381',
                'productdescription' => "DESIGNER'S NOTE
                Backpack + Bend Down Top + Napoleon Pocket
            
                TECH SPECS
                Nylon 600 Denier PU Coated Water Repellent Fabric
            
                Water-resistant full lining
            
                YKK® Racquet Coil Zipper
            
                YKK® Heavy Duty Side Release Buckle
            
                Continuous Filament Thread
            
                DIMENSION
                in millimeters 300 x 450 x 150
            
                in inches 11.8 x 17.8 x 6",
                'sku' => 'NA.BLO-UA017',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '10',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Nylon',
                'productimage' => 'Nama Studios/Women/Accessories/LITE - NO. 381 - 250K/fhfjtj.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 19,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 255,
                'productname' => 'BANDANA PATCHED RELAXED CHAMBRAY NEPPY',
                'productdescription' => 'BANDANA PATCHED RELAXED CHAMBRAY NEPPY GREY SS',
                'sku' => 'NB.BLO-UA005',
                'productprice' => '650000',
                'productsize' => 'L',
                'productquantity' => '12',
                'productcolor' => 'Grey',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'NBDN/Men/Tops/BANDANA PATCHED RELAXED CHAMBRAY NEPPY GREY SS/utama_chambray-black-3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 19,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 256,
                'productname' => 'Belly Flap Slubby Colarless Shirt Half Sleeve',
                'productdescription' => 'KANALOA Belly Flap Slubby Colarless Shirt Half Sleeve Navy',
                'sku' => 'NB.BLO-UA006',
                'productprice' => '650000',
                'productsize' => 'L',
                'productquantity' => '21',
                'productcolor' => 'Navy',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Half Sleeve Navy/Utama_kanaola-3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 19,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 257,
                'productname' => 'Belly Flap Slubby Colarless Shirt Long Sleeve',
                'productdescription' => 'KANALOA Belly Flap Slubby Colarless Shirt Long Sleeve Olive',
                'sku' => 'NB.BLO-UA007',
                'productprice' => '650000',
                'productsize' => 'XL',
                'productquantity' => '15',
                'productcolor' => 'Olive',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Long Sleeve Olive/Utama_kanaola-5.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 19,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 258,
                'productname' => 'RONIN II THE LOYAL SERPENT Slim Fit 14oz',
                'productdescription' => '+ Deep Indigo Medium Lightweight 14oz
                + Sanforized Shrunk
                + Red Selvedge Line
                + Slim Fit Silhouette
                + Hand-sewn SASHIKO Patch
                + 100% Cotton, 100% Selvedge, 100% Shuttle Loomed
                + 100% Hand Process, 100% Artisanal Jeans
                + Poly Cotton Heavy Thread (super strong thread)
                + Shell Stitch Tusk Sword Fly
                + Double Selvedge Peek a Boo Coin Pocket
                + YKK Japanese 100% Copper Silver & Black Double Prong Button Fly
                + NBDN Iron Plated Burned Copper Rivets
                + NBDN Silver Brushed new Brass Button
                + Hidden Rivets on Backpocket
                + Continuous N Stitching on Waist Band
                + Raised Belt Loop
                + Raised Open Backpocket
                + Fully Reinforced Backpocket
                + Triangle Stitch Overlap Details on Left Side Backpocket
                + Chainstitch Run-Off on Backpocket
                + Single Felled Inseam
                + Hemming by Union Special 43200G',
                'sku' => 'NB.BLO-UA001',
                'productprice' => '1118000',
                'productsize' => 'M',
                'productquantity' => '25',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'NBDN/Men/Bottom/RONIN II THE LOYAL SERPENT Slim Fit 14oz/utama-min-9.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 19,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 259,
                'productname' => 'WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid',
                'productdescription' => '+ Deep Rich Indigo Super Heavyweight 21,9oz
                + Stiff & Rigid Textured
                + ?Unsanforized
                + Red Selvedge Line
                + Slim Straight Silhouette
                + Hand-sewn SASHIKO Patch
                + 100% Cotton, 100% Selvedge, 100% Shuttle Loomed
                + 100% Hand Process, 100% Artisanal Jeans
                + Poly Cotton Heavy Thread (super strong thread)
                + Shell Stitch Tusk Sword Fly
                + Double Selvedge Peek a Boo Coin Pocket
                + YKK Japanese 100% Copper Silver & Black Double Prong Button Fly
                + NBDN Iron Plated Burned Copper Rivets
                + NBDN Silver Brushed new Brass Button
                + Hidden Rivets on Backpocket
                + Continuous N Stitching on Waist Band
                + Raised Belt Loop
                + Raised Open Backpocket
                + Fully Reinforced Backpocket
                + Triangle Stitch Overlap Details on Left Side Backpocket
                + Chainstitch Run-Off on Backpocket
                + Single Felled Inseam
                + Hemming by Union Special 43200G',
                'sku' => 'NB.BLO-UA002',
                'productprice' => '1250000',
                'productsize' => 'L',
                'productquantity' => '27',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'NBDN/Men/Bottom/WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid/utama-min-3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 19,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 260,
                'productname' => 'WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid',
                'productdescription' => '+ Olive Green Warp & Mild Green Weft 13,75oz
                + Rough Textured
                + ?Sanforized Shrunk
                + Red Selvedge Line
                + Slim Straight Silhouette
                + Hand-sewn SASHIKO Patch
                + 100% Cotton, 100% Selvedge, 100% Shuttle Loomed
                + 100% Hand Process, 100% Artisanal Jeans
                + Poly Cotton Heavy Thread (super strong thread)
                + Shell Stitch Tusk Sword Fly
                + Double Selvedge Peek a Boo Coin Pocket
                + YKK Japanese 100% Copper Silver & Black Double Prong Button Fly
                + NBDN Iron Plated Burned Copper Rivets
                + NBDN Silver Brushed new Brass Button
                + Hidden Rivets on Backpocket
                + Continuous N Stitching on Waist Band
                + Raised Belt Loop
                + Raised Open Backpocket
                + Fully Reinforced Backpocket
                + Triangle Stitch Overlap Details on Left Side Backpocket
                + Chainstitch Run-Off on Backpocket
                + Single Felled Inseam
                + Hemming by Union Special 43200G',
                'sku' => 'NB.BLO-UA025',
                'productprice' => '1250000',
                'productsize' => 'M',
                'productquantity' => '29',
                'productcolor' => 'Green',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton, Selvedge, Shuttle Loomed',
                'productimage' => 'NBDN/Women/Bottom/NBDN x ROOT Greenhaus 13,75oz Olive Green Warp x Mild Green Weft Sanforized/utama.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 19,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 261,
                'productname' => '21oz Heavyweight Olive Canvas Tote Bag',
                'productdescription' => '21oz Heavyweight Olive Canvas Tote Bag',
                'sku' => 'NB.BLO-UA020',
                'productprice' => '1110000',
                'productsize' => '-',
                'productquantity' => '31',
                'productcolor' => 'Olive',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'NBDN/Women/Accessories/21oz Heavyweight Olive Canvas Tote Bag/tas-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 19,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 262,
                'productname' => 'BUDDY BOLD BEANIE BLACK',
                'productdescription' => '+ Navy, Black, Khaki colors
                + Buddy Bold Beanie is perfect for insulating against drizzle and dropping temperatures
                + 100% Cotton
                + 100% Heavy Thick Knitted
                + Universal size
                + Coverage is adjustable as desired by varying cuff
                + NBDN Kanji Woven Tab
                + Naturally breathable',
                'sku' => 'NB.BLO-UA021',
                'productprice' => '350000',
                'productsize' => '-',
                'productquantity' => '33',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'NBDN/Women/Accessories/BUDDY BOLD BEANIE BLACK/1610597747316.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 263,
                'productname' => 'Tee - The Bleu Mugger',
                'productdescription' => 'Come one, come all. Be prepared to be awed by the wilderness! Join us on the spectacular show of the year. The space cowboy has broken the ties of earth and is about to conquer the space. He’ll take you to the place that we never dare to go before. He’ll take you to the place when space and time are relative. He’ll take you somewhere beyond our moral code, beyond right or wrong. He’ll take you beyond the nature of life.

                ~ Le Bleu Mugg’er aka The Space Cowboy aka The Cobalt Blue.',
                'sku' => 'OB.BLO-UA011',
                'productprice' => '270000',
                'productsize' => 'M',
                'productquantity' => '35',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Oldblue/Men/Tops/Tee - The Bleu Mugger/Oldblue-The-Bleu-Mugger-Tee-Main-Front-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 264,
                'productname' => 'Tee - The Shrunk Overalls',
                'productdescription' => 'Our Regular Tees rendition of 2020. These collections are inspired by some of the old-dogs on the vintage work-wear world. These labels might be less often heard comparing with the Top-3. Moreover, they’re already extinct from the world of work-wear surface. But nevertheless, their existence inspires us as a brand one way or another. So this is our kind of tribute to those who also played an important role towards the development of the workin’-wear universe.',
                'sku' => 'OB.BLO-UA012',
                'productprice' => '225000',
                'productsize' => 'L',
                'productquantity' => '37',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Oldblue/Men/Tops/Tee - The Shrunk Overalls/Oldblue-Tee-The-Shrunk-Overalls-Main-Front-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 265,
                'productname' => '8.25 Cut - 3133 Oz Over-Weight Selvedge Cobalt Blue',
                'productdescription' => 'The first above 30 oz. denim we’ve ever used.
                The first (and might be the last) milled in China denim we’ve ever used.
                The first royal blue and red wine weft denim we’ve ever used.
                The first above 30 oz. denim in particular dyed weft that you’ve might ever seen.
                The #9THRUNNINWILD special denim collection.
            
                31/33 ounces beyond heavy indigo denim. Unsanforized loom-state denim. Exclusively-milled in China. Colored (Red Wine and Royal Blue) reactive dyed weft. Loomed using insanely thick yarns. 3 plied of 5S yarns for both of its warp & weft (5S/3 * 5S/3). The yarns originated from the Extra-Long-Staple cotton, from Urumqi, Xinjiang, where there is a long time of sunshine, so the cotton quality is, of course, better.
            
                Each denim is available on both of our 8.25? and 7.75? Cut. Filled with many special details, such as, (the first ever) hidden looped arcuate, (the first ever) back pocket embroidery, (the first ever) special full-printed pocket bag fabric, (the first ever) black horizontal tab on coin pocket, and extra thick 4.0-4.5 cow hide with debossed-print technique.',
                'sku' => 'OB.BLO-UA003',
                'productprice' => '2499000',
                'productsize' => 'L',
                'productquantity' => '39',
                'productcolor' => 'Blue',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Oldblue/Men/Bottom/8.25 Cut - 3133 Oz Over-Weight Selvedge Cobalt Blue/Oldblue-8.25-Cut-31-33-Oz-Over-Weight-Cobalt-Blue-Front-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 266,
                'productname' => 'The Black Stallion - 2123 Oz Ultra Black Okayama',
                'productdescription' => 'The first ever denim with studded detail leather patch? Nah, why bother with such exaggerating balderdash. Black warp X black weft heavy ounces denim. Ultra-black loom-state unsanforized denim. With an approximate weight 23.7 oz. after shrunk. Constructed with just-the-right amount of irregular slub yarns and pink selvedge ID. Built with our timeless 8.25”’ slim straight cut. Trimmed with Scovill USA buttons in burnt copper finish. Reinforced with 100% copper rivets also from the same company. The studded patch was done manually by hand, one by one. So if you’re expecting a flawless and spot-on kind of attachment, this one is not for ya. The leather material was sourced from the infamous Horween, Illinois Chicago. Yes, it’s their Black Chromexcel leather.',
                'sku' => 'OB.BLO-UA004',
                'productprice' => '2750000',
                'productsize' => 'XL',
                'productquantity' => '41',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Oldblue/Men/Bottom/The Black Stallion - 2123 Oz Ultra Black Okayama/Oldblue-The-Black-Stallion-21-23-Oz-Heavy-Weight-Okayama-Front-Main-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 267,
                'productname' => 'Oldblue X Wesco - The Pacemaker Boots',
                'productdescription' => 'Thousand miles apart, but we believe in the same cause.
                We’re driven by the same traditional spirit.
                We’re moved by the heritage value of golden craftmanship.
            
                We both believe the precision of process and the scrupulosity of etiquette will only lead to uncompromised long-lasting goods.To have this opportunity to work with a brand that we’ve admired for so long is more than a privilege. With such prestigious maker as Wesco, we believe that’s the right way to take the standard to an even higher level. with 100 years of hand-on experience in the industry, they’re one of the few that we’re always looked up to in term of keeping the advanced standard.',
                'sku' => 'OB.BLO-UA010',
                'productprice' => '3250000',
                'productsize' => '41',
                'productquantity' => '2',
                'productcolor' => 'Chocolate',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Leather',
                'productimage' => 'Oldblue/Men/Shoes/Oldblue X Wesco - The Pacemaker Boots/Oldblue-X-Wesco-The-Pacemaker-Boots-Main-Image-1-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 268,
                'productname' => "Bandana - The Loopin' Good",
                'productdescription' => 'Our second particular bandana collections. Something that surely will complete all your rugged inspired, workin’-wear insisted look. Precisely hand screen-printed one by one.',
                'sku' => 'OB.BLO-UA001',
                'productprice' => '162000',
                'productsize' => '-',
                'productquantity' => '5',
                'productcolor' => 'White',
                'productweight' => '100 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Oldblue/Men/Accessories/Bandana - The Loopin Good/Oldblue-Bandana-The-Loopin-Good.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 269,
                'productname' => 'Denim Wallet Type I',
                'productdescription' => 'Denim Wallet Type I',
                'sku' => 'OB.BLO-UA002',
                'productprice' => '750000',
                'productsize' => '-',
                'productquantity' => '7',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim, Leather',
                'productimage' => 'Oldblue/Men/Accessories/Denim Wallet Type I/Denim-Wallet-Type-I-Main-Image-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 270,
                'productname' => 'Tee - The Rouge Zoltar',
                'productdescription' => 'He’s one of the master-mind behind this madness. The culprit behind this disorderly chaos. He breathes fire. He breaths with your thrilling sensation. He lives by your worrying tremble. Big shows combined for a complete adventure of a lifetime. Bring the entire family. Here comes the fear & joy. Grand applause and awe for the wondrous creature!

                ~ Le Rouge Zolt’ar aka The Fire Eater aka The Crimson Red.',
                'sku' => 'OB.BLO-UA024',
                'productprice' => '270000',
                'productsize' => 'L',
                'productquantity' => '9',
                'productcolor' => 'Maroon',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Oldblue/Women/Tops/Tee - The Rouge Zoltar/Oldblue-The-Rouge-Zoltar-Tee-Main-Front-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 271,
                'productname' => '7.75 Cut - 15 Oz Deep Indigo Okayama ID X ID',
                'productdescription' => 'Oldblue exclusive run denim fabric. Japanese milled denim with 15 oz. medium weight. Sanforized pre-shrunk denim. The weft was constructed using rope dyed indigo yarns. Built using 7.75? Cut, a slim cut with medium rise. Trimmed with Sovill USA buttons in burnt copper finish. Reinforced with 100% copper rivets also from Scovill USA. Horween veg-tanned horse strips leather patch.',
                'sku' => 'OB.BLO-UA022',
                'productprice' => '2050000',
                'productsize' => 'M',
                'productquantity' => '11',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Oldblue/Women/Bottom/7.75 Cut - 15 Oz Deep Indigo Okayama ID X ID/7.75-Cut-15-Oz-Deep-Indigo-Okayama-IDxID-MAIN-FRONT-2-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 20,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 272,
                'productname' => 'Denim Mask Type I',
                'productdescription' => 'This is a pretty simple and straight forward gesture and action from us. ALL EARNINGS from the sale of this mask will be donated to those who are in need during this time of difficulty. The donation will be handed over to ACT and their ‘Bersama Lawan Corona’ program.

                Our lil’ take on doing selvedge denim mask. Made using 12 oz./ sq. yard locally sourced rope dyed selvedge denim. Lined with breathable herringbone twill fabric. Has gone thru initial cleaning & soaking process using antiseptic liquid. Another self-soak / wash process prior to wear is of course recommended.
            
                This version came with longer elastic earloop, simply tie it to your preferred sizing.
            
                Kindly choose the product variant;
                S: with selvedge line detail
                NS: without selvedge line detail',
                'sku' => 'OB.BLO-UA021',
                'productprice' => '120000',
                'productsize' => '-',
                'productquantity' => '13',
                'productcolor' => 'Black',
                'productweight' => '500 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Selvedge Denim',
                'productimage' => 'Oldblue/Women/Accessories/Denim Mask Type I/Denim-Mask-Type-I-7-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 273,
                'productname' => 'ALPHA',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA010',
                'productprice' => '185000',
                'productsize' => 'L',
                'productquantity' => '15',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Tops/ALPHA - 185K/8502a061-73bc-4a21-ae4b-c837f49b7d93.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 274,
                'productname' => 'BEKOS BLACK',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA011',
                'productprice' => '150000',
                'productsize' => 'XL',
                'productquantity' => '20',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Tops/BEKOS BLACK - 150K/faed4fc5-80c8-4d4b-be9b-72b5a2c5a75f.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 275,
                'productname' => 'NYO WHITE COLAR',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA012',
                'productprice' => '185000',
                'productsize' => 'XL',
                'productquantity' => '31',
                'productcolor' => 'Red, Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Tops/NYO WHITE COLAR - 185K/f048dd3d-1472-407e-a2eb-618fe95fe46c.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 276,
                'productname' => 'TERU LS',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA013',
                'productprice' => '175000',
                'productsize' => 'XXL',
                'productquantity' => '41',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Tops/TERU LS - 175K/b44b7088-8d27-49f9-82c7-df5d8467707a.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 277,
                'productname' => 'VARIOUS OLIVE',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA014',
                'productprice' => '150000',
                'productsize' => 'L',
                'productquantity' => '36',
                'productcolor' => 'Olive',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Tops/VARIOUS OLIVE - 150K/8c9e49df-5b60-4c1d-93e9-eccf1d821174.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 278,
                'productname' => 'FIELD BLACK BOXER',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA005',
                'productprice' => '75000',
                'productsize' => 'M',
                'productquantity' => '38',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Bottom/FIELD BLACK BOXER - 75K/a96a3d2a-6e67-45f3-8f19-e2bd462126b0.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 279,
                'productname' => 'GRID OLIVE BOXER',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA006',
                'productprice' => '75000',
                'productsize' => 'L',
                'productquantity' => '40',
                'productcolor' => 'Olive',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Bottom/GRID OLIVE BOXER - 75K/40162ad7-93e4-4d50-889b-6dfc5d9565dc.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 280,
                'productname' => 'LEEDS MAROON',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA007',
                'productprice' => '175000',
                'productsize' => 'XL',
                'productquantity' => '28',
                'productcolor' => 'Maroon',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Bottom/LEEDS MAROON - 175K/717dfa93-9e00-4fb2-a546-a70b211a4737.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 281,
                'productname' => 'LINE BOXER WHITE',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA008',
                'productprice' => '75000',
                'productsize' => 'L',
                'productquantity' => '88',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Bottom/LINE BOXER WHITE - 75K/a5858c03-e74f-4ed1-b19f-e4efff2ae478.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 282,
                'productname' => 'NIZU BLACK',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA001',
                'productprice' => '100000',
                'productsize' => '-',
                'productquantity' => '24',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Accessories/NIZU BLACK - 100K/9feec9d7-39fa-443d-8428-2b6decb2df25.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 283,
                'productname' => 'ROWDI HAT',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA002',
                'productprice' => '140000',
                'productsize' => '-',
                'productquantity' => '53',
                'productcolor' => 'White, Grey',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Accessories/ROWDI HAT - 140K/edb5fe7d-9739-4872-87d6-441baec2d50d.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 284,
                'productname' => 'TORRU NAVY',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA003',
                'productprice' => '100000',
                'productsize' => '-',
                'productquantity' => '41',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Knitted',
                'productimage' => 'Original Quzzy/Men/Accessories/TORRU NAVY - 100K/ec789c99-f7c7-49fd-87e1-7ca95acb519d.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 285,
                'productname' => 'VERT BLACK',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA004',
                'productprice' => '35000',
                'productsize' => '-',
                'productquantity' => '56',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Men/Accessories/VERT BLACK - 35K/167be562-8f13-44d6-a37c-9e3c29646966.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 286,
                'productname' => 'ALL THAT JAZZ WHITE',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA036',
                'productprice' => '150000',
                'productsize' => 'L',
                'productquantity' => '14',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Tops/ALL THAT JAZZ WHITE - 150K/a49aebef-1cfd-4953-bfd5-890dddb24501.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 287,
                'productname' => 'LEACH MATTE',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA037',
                'productprice' => '150000',
                'productsize' => 'M',
                'productquantity' => '31',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Tops/LEACH MATTE - 150K/47d1a963-980a-43b8-87c3-41308e727edb.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 288,
                'productname' => 'NIZU LS',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA038',
                'productprice' => '150000',
                'productsize' => 'S',
                'productquantity' => '19',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Tops/NIZU LS - 175K/02839e0b-a1c1-47d3-84ba-8249c4fc36ab.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 289,
                'productname' => 'OG LGO WHITE',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA039',
                'productprice' => '150000',
                'productsize' => 'M',
                'productquantity' => '35',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Tops/OG LGO WHITE - 150K/bde42052-e20a-45c9-95e3-a033b825c9a4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 290,
                'productname' => 'ZERU TEE',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA040',
                'productprice' => '175000',
                'productsize' => 'L',
                'productquantity' => '52',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Tops/ZERU TEE - 150K/b54776af-f800-4888-a073-dc33d79b409d.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 291,
                'productname' => 'NAGO CAP',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA030',
                'productprice' => '140000',
                'productsize' => '-',
                'productquantity' => '60',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Accessories/NAGO CAP - 140K/3db3cb3f-77e3-45be-9430-88f010c583ef.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 292,
                'productname' => 'NIZU OLIVE',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA031',
                'productprice' => '150000',
                'productsize' => '-',
                'productquantity' => '80',
                'productcolor' => 'Olive',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Accessories/NIZU OLIVE - 150K/0b619cb5-46ac-44d9-b0de-952aa379c903.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 293,
                'productname' => 'NOISE HAT',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA032',
                'productprice' => '140000',
                'productsize' => '-',
                'productquantity' => '43',
                'productcolor' => 'Multicolor: Dark Green, Maroon, Red, Yellow',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Accessories/NOISE HAT - 140K/41a526bb-67ea-42c0-a9f0-67d105070a2d.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 294,
                'productname' => 'STOOTH BLACK MASK',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA033',
                'productprice' => '30000',
                'productsize' => '-',
                'productquantity' => '34',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Accessories/STOOTH BLACK MASK - 30K/4234dfe1-245f-4da4-9893-e40f7ae3ede7.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 295,
                'productname' => 'TIER MASK',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA034',
                'productprice' => '30000',
                'productsize' => '-',
                'productquantity' => '59',
                'productcolor' => 'Black, Yellow',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Original Quzzy/Women/Accessories/TIER MASK - 30K/eb83e61e-5522-4c41-bf2f-dcea8662f5d2.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 21,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 296,
                'productname' => 'TORRU MUSTARD',
                'productdescription' => 'Weight: 250 Gram',
                'sku' => 'OQ.BLO-UA035',
                'productprice' => '100000',
                'productsize' => '-',
                'productquantity' => '99',
                'productcolor' => 'Mustard',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Knitted',
                'productimage' => 'Original Quzzy/Women/Accessories/TORRU MUSTARD - 100K/18b82d92-58b9-49ed-8071-d5003ed95526.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 297,
                'productname' => 'Boden Green',
                'productdescription' => "It's Boden Green from Unknown Series!",
                'sku' => 'PG.BLO-UA001',
                'productprice' => '36000',
                'productsize' => '-',
                'productquantity' => '23',
                'productcolor' => 'Green',
                'productweight' => '250 gram',
                'productcare' => 'Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pattent Goods/Men/Accessories/Boden Green - 36K/ykykf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 298,
                'productname' => 'Jax Navy',
                'productdescription' => "It's Jax Navy from Em Casa Series!",
                'sku' => 'PG.BLO-UA002',
                'productprice' => '36000',
                'productsize' => '-',
                'productquantity' => '40',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pattent Goods/Men/Accessories/Jax Navy - 36K/hjdgjdd.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 299,
                'productname' => 'Polo Cap',
                'productdescription' => 'Polo Cap Black',
                'sku' => 'PG.BLO-UA003',
                'productprice' => '150000',
                'productsize' => '-',
                'productquantity' => '57',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pattent Goods/Men/Accessories/Polo Cap Black - 150K/lgkhg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 300,
                'productname' => 'Shelby Maroon',
                'productdescription' => "It's Shelby Maroon from Unknown Series!",
                'sku' => 'PG.BLO-UA004',
                'productprice' => '36000',
                'productsize' => '-',
                'productquantity' => '56',
                'productcolor' => 'Maroon',
                'productweight' => '250 gram',
                'productmaterial' => 'Cotton',
                'productcare' => 'Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
                'productimage' => 'Pattent Goods/Men/Accessories/Shelby Maroon - 36K/jtdjdf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 301,
                'productname' => 'Vermi Navy Cap',
                'productdescription' => 'Fresh Article from Pattent Goods',
                'sku' => 'PG.BLO-UA005',
                'productprice' => '150000',
                'productsize' => '-',
                'productquantity' => '77',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Machine Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pattent Goods/Men/Accessories/Vermi Navy Cap - 150K/kgkkyg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 302,
                'productname' => 'Basic Circle Shibori',
                'productdescription' => "It's Basic Circle Shibori from Indigo Project Series!


                WHAT MAKE THIS PRODUCT SPECIAL?
                This product is a collaborative product between Pattent Goods and Banana Paper, an indigo natural coloring business.
                The coloring of this product uses natural indigo dyes using the Shibori technique.
            
            
                DISCLAIMER
                This product is handmade. Every motif on every sock will not be 100% the same.",
                'sku' => 'PG.BLO-UA010',
                'productprice' => '75000',
                'productsize' => '-',
                'productquantity' => '47',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pattent Goods/Women/Accessories/Basic Circle Shibori - 75K/jdjfd.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 303,
                'productname' => 'Hidden 2 White',
                'productdescription' => 'Hidden 2 White is a sock made from a blend of cotton, elasthane, natural rubber, and nylon that is designed to be comfy & soft, offering a great absorption impact when you wear it, and a flexible fit for comfort on your feet.',
                'sku' => 'PG.BLO-UA011',
                'productprice' => '35000',
                'productsize' => '-',
                'productquantity' => '51',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pattent Goods/Women/Accessories/Hidden 2 White - 35K/gdsgsds.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 304,
                'productname' => 'Holo Red',
                'productdescription' => "It's Holo Red from Signature Series!",
                'sku' => 'PG.BLO-UA012',
                'productprice' => '36000',
                'productsize' => '-',
                'productquantity' => '12',
                'productcolor' => 'Red',
                'productweight' => '250 gram',
                'productcare' => 'Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pattent Goods/Women/Accessories/Holo Red - 36K/agafasa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 22,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 305,
                'productname' => 'Solid Ruby',
                'productdescription' => "It's Solid Ruby from Solid Series!",
                'sku' => 'PG.BLO-UA014',
                'productprice' => '38000',
                'productsize' => '-',
                'productquantity' => '63',
                'productcolor' => 'Red',
                'productweight' => '250 gram',
                'productcare' => 'Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pattent Goods/Women/Accessories/Solid Ruby - 38K/jdvdgs.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 306,
                'productname' => 'Loafers Belgian Penny L.I.F.E Tan',
                'productdescription' => "Though Belgian loafers are iconic with small bow tie at the toe. At Portee we decide to bring penny tie to our belgian loafers silhouette. Belgian loafers are also identical with inside out sewing technique,and yes we keep that technique alive. Our Belgian loafers made with tan nubuck leather upper sitting on our signature L.I.F.E heels outsole it's both classy and comfortable at the same time.  We recommend true size for your perfect fit.

                Made on modified Italy last with normal width.
            
                Specification :
            
                Genuine tan nubuck leather
                Neoprene lining
                Inside out sewing technique
                Very lightweight L.I.F.E outsole with heels
                Cork insole with memory foam
                Cementing construction",
                'sku' => 'PO.BLO-UA003',
                'productprice' => '600000',
                'productsize' => '40',
                'productquantity' => '61',
                'productcolor' => 'Tan',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'PorteeGoods/Men/Shoes/Loafers Belgian Penny L.I.F.E Tan - 600K/136_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 307,
                'productname' => 'Loafers Slippers L.I.F.E Heels Black',
                'productdescription' => 'Our signature Loafers Slippers silhouette with our new Lightweight Injected Foam Exthane heels outsole or as we like to call it L.I.F.E outsole. Its super lightweight at only 278gr. Proudly claimed to be first local brand to adapt a tie-less lace for easier putting on and off your shoes. We recommend true size for your perfect fit.

                Made on modified Italy last with normal width
            
                Specification :
            
                Genuine black nappa leather
                Neoprene lining
                Handsewn moc toe
                very lightweight L.I.F.E outsole with heels
                Cork insole with memory foam
                Cementing construction',
                'sku' => 'PO.BLO-UA004',
                'productprice' => '700000',
                'productsize' => '41',
                'productquantity' => '16',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'PorteeGoods/Men/Shoes/Loafers Slippers L.I.F.E Heels Black - 490K/loafers-slippers-life-heels-black_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 308,
                'productname' => 'Loom L.I.F.E Grain (Sand White)',
                'productdescription' => 'Survive,evolve,inherited.The new loom collection silhouette inspired from a bowling shoes which are popular in the late 18th century,also familiar as an industrial revolution time. A time when machine started to replace all the beauty of handmade. As much as we embrace the tech revolution,we must also appreciate the past where we inherited, so we combined those two things as we used century old hand-woven looming technique in a bowling shoes silhoutte upper with our signature L.I.F.E tech on the outsole.',
                'sku' => 'PO.BLO-UA005',
                'productprice' => '520000',
                'productsize' => '42',
                'productquantity' => '37',
                'productcolor' => 'Sand White',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'PorteeGoods/Men/Shoes/Loom L.I.F.E Grain (Sand White) - 520K/k10_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 309,
                'productname' => 'Loom L.I.F.E Steel (Grey White)',
                'productdescription' => 'Survive,evolve,inherited.The new loom collection silhouette inspired from a bowling shoes which are popular in the late 18th century,also familiar as an industrial revolution time. A time when machine started to replace all the beauty of handmade. As much as we embrace the tech revolution,we must also appreciate the past where we inherited, so we combined those two things as we used century old hand-woven looming technique in a bowling shoes silhoutte upper with our signature L.I.F.E tech on the outsole.',
                'sku' => 'PO.BLO-UA006',
                'productprice' => '520000',
                'productsize' => '40',
                'productquantity' => '48',
                'productcolor' => 'Grey White',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'PorteeGoods/Men/Shoes/Loom L.I.F.E Steel (Grey White) - 520K/kn19_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 310,
                'productname' => 'Oxford Knit Oreo Triple Black',
                'productdescription' => 'The elegance of innovation start on the 5 Oz precision engineered stretch-knit upper. Knitted from selection of stretch polyester yarn to make seamless upper and perfected with our new phylon insole that’ll be form fitting on your feet. Combined with a leather to keep that classic look and our signature L.I.F.E series outsole for the ultimate featherweight daily shoes',
                'sku' => 'PO.BLO-UA007',
                'productprice' => '490000',
                'productsize' => '41',
                'productquantity' => '28',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Polyester, Leather',
                'productimage' => 'PorteeGoods/Men/Shoes/Oxford Knit Oreo Triple Black - 490K/oxford-knit-oreo-triple-black_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 311,
                'productname' => 'Oxford Wingtip L.I.F.E All Black',
                'productdescription' => 'Our signature Oxford wingtip silhouette with our new Lightweight Injected Foam Exthane outsole or as we like to call it L.I.F.E outsole. Its super lightweight at only 270gr. Featuring the first local brand to adapt a tie-less lace for easier putting on and off your shoes. See through brogues with breathable lining for super comfort. We recommend true size for your perfect fit.

                Made on modified Italy last with normal width
            
                Specification :
            
                Genuine black crazy horse leather
                Lazy lace for easier lacing and sleeker look
                Neoprene lining
                Handpunch perforated brogues
                Very light L.I.F.E outsole
                Cork insole with memory foam
                Cementing construction',
                'sku' => 'PO.BLO-UA006',
                'productprice' => '520000',
                'productsize' => '41',
                'productquantity' => '92',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E All Black - 520K/oxford-wingtip-black_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 312,
                'productname' => 'Oxford Wingtip L.I.F.E Brown Brushed Off',
                'productdescription' => 'Unique characteristic of brush off leather in our L.I.F.E series outsole. Every pair is hand finished to bring out its patina. Every pair is different.

                Made on modified Italy last with normal width
            
                Specification :
            
                Genuine Brown Brushed Off leather
                Lazy lace for easier lacing and sleeker look
                Neoprene lining
                Handpunch perforated brogues
                Very light L.I.F.E outsole
                Cork insole with memory foam
                Cementing construction',
                'sku' => 'PO.BLO-UA009',
                'productprice' => '700000',
                'productsize' => '42',
                'productquantity' => '78',
                'productcolor' => 'Brown',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E Brown Brushed Off - 700K/oxford-wingtip-life-brown-brushed-off-1_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 313,
                'productname' => 'Oxford Wingtip Oxblood Brushed Off',
                'productdescription' => 'Our signature Oxford wingtip silhouette with our new Lightweight Injected Foam Exthane outsole or as we like to call it L.I.F.E outsole. Its super lightweight at only 270gr. Featuring the first local brand to adapt a tie-less lace for easier putting on and off your shoes. See through brogues with breathable lining for super comfort. We recommend true size for your perfect fit.

                Made on modified Italy last with normal width
            
                Specification :
            
                Genuine Oxblood Brushed Off leather
                Lazy lace for easier lacing and sleeker look
                Neoprene lining
                Handpunch perforated brogues
                Very light L.I.F.E outsole
                Cork insole with memory foam
                Cementing construction',
                'sku' => 'PO.BLO-UA010',
                'productprice' => '700000',
                'productsize' => '42',
                'productquantity' => '85',
                'productcolor' => 'Oxblood',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'PorteeGoods/Men/Shoes/Oxford Wingtip Oxblood Brushed Off - 700K/oxford-wingtip-oxblood_1_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 314,
                'productname' => 'Marque Cosmos Black',
                'productdescription' => 'Specs:
                Material : 316L Polished Stainless steel
                Case Color : Silver
                Dimension : 38mm
                Glass : Mineral-strengthened Crystal Domed Glass with anti-fingerprint coating
                Strap Size : 20 mm
                Water Resistance : 5atm (swim/wash and all daily waterproof activity)
                Dial Color: Cosmos Black with swiss C3 super luminous green powder numeric (illuminate in the dark)
                Strap : Classic brown pull up leather
                Hands : Black polished with Swiss C3 super luminous green powder (illuminate in the dark)
                Movement : Quartz Japan VJ32
                Notable Function : Date',
                'sku' => 'PO.BLO-UA001',
                'productprice' => '780000',
                'productsize' => '-',
                'productquantity' => '4',
                'productcolor' => 'Silver',
                'productweight' => '250 gram',
                'productcare' => 'Water resistance',
                'productmaterial' => 'Stainless Steel',
                'productimage' => 'PorteeGoods/Men/Accessories/Marque Cosmos Black - 780K/680-large_default_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 23,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 315,
                'productname' => 'Marque Vintage Creme',
                'productdescription' => 'Specs:
                Material : 316L Polished Stainless steel
                Case Color : Silver
                Dimension : 38mm
                Glass : Mineral-strengthened Crystal Domed Glass with anti-fingerprint coating
                Strap Size : 20 mm
                Water Resistance : 5atm (swim/wash and all daily waterproof activity)
                Dial Color: Vintage creme with swiss C3 super luminous green powder numeric (illuminate in the dark)
                Strap : Classic brown pull up leather
                Hands : Silver polished with Swiss C3 super luminous green powder (illuminate in the dark)
                Movement : Quartz Japan VJ32
                Notable Function : Date',
                'sku' => 'PO.BLO-UA002',
                'productprice' => '780000',
                'productsize' => '-',
                'productquantity' => '8',
                'productcolor' => 'Silver',
                'productweight' => '250 gram',
                'productcare' => 'Water resistance',
                'productmaterial' => 'Stainless Steel',
                'productimage' => 'PorteeGoods/Men/Accessories/Marque Vintage Creme - 780K/684-large_default_vintage_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 316,
                'productname' => 'POT MEETS POP - BLAZING TEE NAVY',
                'productdescription' => '180 GSM
                COMBED, 100% COTTON',
                'sku' => 'PM.BLO-UA007',
                'productprice' => '250000',
                'productsize' => 'L',
                'productquantity' => '12',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pot Meets Pop/Men/Tops/POT MEETS POP - BLAZING TEE NAVY - 250K/7af14111-7665-450a-a65a-ede6bf43d9a4.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 317,
                'productname' => 'POT MEETS POP - GROOVY DUB HOODIE NAVY',
                'productdescription' => '320 GSM
                FLEECE, 100% COTTON',
                'sku' => 'PM.BLO-UA008',
                'productprice' => '480000',
                'productsize' => 'L',
                'productquantity' => '17',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' =>'Pot Meets Pop/Men/Tops/POT MEETS POP - GROOVY DUB HOODIE NAVY - 480K/a3c5c215-b5ba-462c-8353-f7ae6db92a9d.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 318,
                'productname' => 'POT MEETS POP LOVERS ROCK TEE NAVY',
                'productdescription' => 'SHORT SLEEVE T-SHIRT
                180GSM, 100% COMBED COTTON
                SILK SCREENED
                WATER BASED INK DECORATION',
                'sku' => 'PM.BLO-UA010',
                'productprice' => '250000',
                'productsize' => 'XL',
                'productquantity' => '29',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pot Meets Pop/Men/Tops/POT MEETS POP LOVERS ROCK TEE NAVY - 250K/42910060_0171eacd-bad4-4b95-91b1-686528931c00_1919_1919.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 319,
                'productname' => 'POT MEETS POP OZ ARMY SLANTED POCKET RED JACKET',
                'productdescription' => 'SLANTED POCKET BDU SHIRT
                COTTON MIDWEIGHT TWILL
                STONE WASHED
                MILITARY STYLE SLANTED POCKET
                DURABLE CONSTRUCTION
                OIL BASED INK SCREEN PRINTED',
                'sku' => 'PM.BLO-UA011',
                'productprice' => '650000',
                'productsize' => 'L',
                'productquantity' => '39',
                'productcolor' => 'Red',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton, Twill',
                'productimage' => 'Pot Meets Pop/Men/Tops/POT MEETS POP OZ ARMY SLANTED POCKET RED JACKET - 650K/42910060_d39b2605-37a7-44ca-88a1-84f63de5d281_898_898.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 320,
                'productname' => 'PMP DENIM HAZE BLUE PANT',
                'productdescription' => 'REGULAR CUT DENIM PANT
                12,5 OZ DENIM PANT
                5 POCKET
                BARTACKED AT STRESS POINTS
                CHAINSTICH HEM',
                'sku' => 'PM.BLO-UA001',
                'productprice' => '625000',
                'productsize' => 'L',
                'productquantity' => '30',
                'productcolor' => 'Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim',
                'productimage' => 'Pot Meets Pop/Men/Bottom/PMP DENIM HAZE BLUE PANT - 625K/42910060_e3ba750a-1f6a-4d27-b54b-fd1735511fc4_1919_1919.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 321,
                'productname' => 'PMP DENIM SUPER THAISTICK DARK BLUE PANT',
                'productdescription' => 'SLIM FIT DENIM PANT
                11,5 OZ DENIM 100% COTTON
                5 POCKET
                HIDDEN RIVET
                CHAISTITCH HEM',
                'sku' => 'PM.BLO-UA002',
                'productprice' => '625000',
                'productsize' => 'XL',
                'productquantity' => '32',
                'productcolor' => 'Dark Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim',
                'productimage' => 'Pot Meets Pop/Men/Bottom/PMP DENIM SUPER THAISTICK DARK BLUE PANT - 625K/42910060_9480dc74-1e0d-4abc-94f2-c399a32eb1b3_1919_1919.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 322,
                'productname' => 'POT MEETS POP CHRONIC CARGO BLUE SHORT',
                'productdescription' => '- CARGO SHORT
                - ALL COTTON MEDWEIGHT TWILL
                - STONE WASHED
                - MILITARY STYLE 6 POCKET
                - REAR REINFORCEMENT
                - STONE WASHED
                - DURABLE CONSTRUCTION',
                'sku' => 'PM.BLO-UA003',
                'productprice' => '450000',
                'productsize' => 'M',
                'productquantity' => '65',
                'productcolor' => 'Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton, Twill',
                'productimage' => 'Pot Meets Pop/Men/Bottom/POT MEETS POP CHRONIC CARGO BLUE SHORT - 450K/42910060_7cce9e99-2d8e-403b-b109-e8f98353bf6d_900_900.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 323,
                'productname' => 'POT MEETS POP FATTY FATIGUE PANT MAROON',
                'productdescription' => 'REGULAR CUT DENIM PANT
                12,5 OZ DENIM PANT
                5 POCKET
                BARTACKED AT STRESS POINTS
                CHAINSTICH HEM',
                'sku' => 'PM.BLO-UA004',
                'productprice' => '550000',
                'productsize' => 'M',
                'productquantity' => '40',
                'productcolor' => 'Maroon',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim',
                'productimage' => 'Pot Meets Pop/Men/Bottom/POT MEETS POP FATTY FATIGUE PANT MAROON - 550K/42910060_648f6ffc-894d-4cac-861f-70c883817649_900_900.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 324,
                'productname' => 'POT MEETS POP - SHAKE A LEG TEE PURPLE',
                'productdescription' => '230 GSM
                100% COTTON
                OIL BASED SCREEN PRINT DECORATION',
                'sku' => 'PM.BLO-UA024',
                'productprice' => '250000',
                'productsize' => 'M',
                'productquantity' => '44',
                'productcolor' => 'Purple',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pot Meets Pop/Women/Tops/POT MEETS POP - SHAKE A LEG TEE PURPLE - 250K/42910060_9195526b-c398-45c9-b16f-9b148dc5f03e_898_898.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 325,
                'productname' => 'POT MEETS POP - LOGO TEE TIE-DYE ORANGE',
                'productdescription' => 'SHORT SLEEVE T-SHIRT
                180 GSM, 100% COMBED COTTON
                SKILL SCREENED
                OIL BASED INK DECORATION',
                'sku' => 'PM.BLO-UA024',
                'productprice' => '280000',
                'productsize' => 'L',
                'productquantity' => '54',
                'productcolor' => 'Orange',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pot Meets Pop/Women/Tops/POT MEETS POP - LOGO TEE TIE-DYE ORANGE - 280K/4a63c0d6-dad2-498c-a0da-37159285da8c.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 326,
                'productname' => 'POT MEETS POP PEACE DEPARTEMENT TEE GREEN',
                'productdescription' => '24S COMBED COTTON
                GARMENT WASHED
                SHORT SLEEVE T-SHIRT',
                'sku' => 'PM.BLO-UA030',
                'productprice' => '210000',
                'productsize' => 'L',
                'productquantity' => '62',
                'productcolor' => 'Green',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pot Meets Pop/Women/Tops/POT MEETS POP PEACE DEPARTEMENT TEE GREEN - 210K/4711454_32dd8ff1-5ae8-4eb9-939d-c2e4f700a572_721_721.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 327,
                'productname' => 'POT MEETS POP PIPES JACQUARD PANT',
                'productdescription' => '5 POCKET DENIM PANTS
                10 OZ JACQUARD DENIM, 100% COTTON
                SLIM STRAIGHT
                5 POCKET
                BAR-TACKED
                RIVETED AT STRESS POINTS',
                'sku' => 'PM.BLO-UA020',
                'productprice' => '500000',
                'productsize' => 'L',
                'productquantity' => '85',
                'productcolor' => 'Dark Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim',
                'productimage' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP PIPES JACQUARD PANT - 500K/42910060_8e3f8b8b-b490-42cd-9a60-cf8b11a68a09_1919_1919.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 328,
                'productname' => 'POT MEETS POP STARBUD BELT SHORT POLKADOT',
                'productdescription' => 'BELTED SHORTS
                7 OZ DENIM JACQUARD, 100% COTTON
                9,5 INSEAM SHORTS
                3 POCKET
                BUILT-IN WEBBING BELT',
                'sku' => 'PM.BLO-UA021',
                'productprice' => '380000',
                'productsize' => 'L',
                'productquantity' => '82',
                'productcolor' => 'Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP STARBUD BELT SHORT POLKADOT - 380K/42910060_3d8c5584-aff2-478e-8ef8-f8ddb1f1f619_1919_1919.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 24,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 329,
                'productname' => 'POT MEETS POP STARBUD BELT SHORT POLKADOT',
                'productdescription' => 'BELTED SHORTS
                MIDWEIGHT CORDUROY, 100% COTTON
                9,5 INSEAM SHORTS
                3 POCKET
                BUILT-IN WEBBING BELT',
                'sku' => 'PM.BLO-UA022',
                'productprice' => '400000',
                'productsize' => 'L',
                'productquantity' => '72',
                'productcolor' => 'Pink',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP STARBUD BELTED SHORT CORDUROY - 400K/42910060_660ffefb-74aa-46d4-81b4-21abb4046af0_1919_1919.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 330,
                'productname' => 'CLASS OF ’99 TRACK TOP',
                'productdescription' => 'Track jacket made of 100% nylon. Printed graphic on the front and back. Zip closure at front. Pockets at sides. Elasticized cuffs and hem.',
                'sku' => 'PC.BLO-UA006',
                'productprice' => '650000',
                'productsize' => 'M',
                'productquantity' => '74',
                'productcolor' => 'White, Navy, Red',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Nylon',
                'productimage' => 'Public Culture/Men/Tops/CLASS OF ’99 TRACK TOP – WHITENAVYRED - 650K/SS21-PC-SPORTSWEAR-07-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 331,
                'productname' => 'COURT TEE',
                'productdescription' => 'Heavyweight cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front, back, and along the sleeves',
                'sku' => 'PC.BLO-UA007',
                'productprice' => '300000',
                'productsize' => 'M',
                'productquantity' => '77',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Men/Tops/COURT TEE – BLACK - 300K/COURT-TEE-BLACK--scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 332,
                'productname' => 'IMAGINATION LS TEE',
                'productdescription' => 'Heavyweight cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front, back, and along the sleeves',
                'sku' => 'PC.BLO-UA008',
                'productprice' => '350000',
                'productsize' => 'L',
                'productquantity' => '18',
                'productcolor' => 'Peach',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Men/Tops/IMAGINATION LS TEE - PEACH - 350K/PRODUCT-THUMBNAIL-WEB-23.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 333,
                'productname' => 'PC SPORT RUGBY',
                'productdescription' => 'Heavyweight Cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Collection logo patch on the front. Color-block details using sewn panels.',
                'sku' => 'PC.BLO-UA009',
                'productprice' => '500000',
                'productsize' => 'L',
                'productquantity' => '38',
                'productcolor' => 'Yellow, Navy',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Men/Tops/PC SPORT RUGBY – YELLOWNAVY - 500K/SS21-PC-SPORTSWEAR-01-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 334,
                'productname' => 'PC SPORT SHORT PANTS',
                'productdescription' => 'Summer shorts with full printed graphics on Balotelli fabric. Completed with side pockets, one back pocket and elastic waistband.',
                'sku' => 'PC.BLO-UA003',
                'productprice' => '400000',
                'productsize' => 'L',
                'productquantity' => '17',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Men/Bottom/PC SPORT SHORT PANTS – NAVY - 400K/SS21-PC-SPORTSWEAR-14-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 335,
                'productname' => 'SHROOM SHORT PANTS',
                'productdescription' => 'Summer shorts with full printed graphics on Balotelli fabric. Completed with side pockets, one back pocket and elastic waistband.',
                'sku' => 'PC.BLO-UA004',
                'productprice' => '280000',
                'productsize' => 'M',
                'productquantity' => '19',
                'productcolor' => 'Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Men/Bottom/SHROOM SHORT PANTS - BLUE - 280K/WEB-PRODUCT-PHOTO-FW20-55.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 336,
                'productname' => 'Mushroom Bucket Hat',
                'productdescription' => 'Made from polar fabric. Embroidered graphic on the front.',
                'sku' => 'PC.BLO-UA001',
                'productprice' => '175000',
                'productsize' => '-',
                'productquantity' => '24',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Polar',
                'productimage' => 'Public Culture/Men/Accessories/CREATURE WORK PANTS - BLACK - 175K/WEB-FW20-50-1-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 337,
                'productname' => 'LAWS OF THE UNIVERSE STICKER PACK',
                'productdescription' => 'Sticker pack containing six pieces of vinyl stickers with variation in cutting size. Suitable for laptops, guitars, and other objects you love.',
                'sku' => 'PC.BLO-UA002',
                'productprice' => '50000',
                'productsize' => '-',
                'productquantity' => '20',
                'productcolor' => 'Multicolor',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Vinyl Stickers',
                'productimage' => 'Public Culture/Men/Accessories/LAWS OF THE UNIVERSE STICKER PACK - 50K/STICKER-PACK-FW-20.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 338,
                'productname' => 'COLLEGE TEE',
                'productdescription' => 'Heavyweight Cotton t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front.',
                'sku' => 'PC.BLO-UA024',
                'productprice' => '300000',
                'productsize' => 'M',
                'productquantity' => '30',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Women/Tops/COLLEGE TEE – BLACK - 300K/COLLEGE-TEE-BLACK-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 339,
                'productname' => 'FLOWER HEAD TEE',
                'productdescription' => 'Heavyweight cotton t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front and back.',
                'sku' => 'PC.BLO-UA025',
                'productprice' => '300000',
                'productsize' => 'L',
                'productquantity' => '35',
                'productcolor' => 'Soft Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Women/Tops/FLOWER HEAD TEE - SOFT BLUE - 300K/PRODUCT-THUMBNAIL-WEB-11.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 340,
                'productname' => 'MARATHON SNATCH TEE',
                'productdescription' => 'Heavyweight cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front, back, and along the sleeves',
                'sku' => 'PC.BLO-UA026',
                'productprice' => '300000',
                'productsize' => 'S',
                'productquantity' => '34',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Women/Tops/MARATHON SNATCH TEE – BLACK - 300K/MARATHON-SNATCH-TEE-BLACK-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 341,
                'productname' => 'CREATURE WORK PANTS',
                'productdescription' => 'CREATURE WORK PANTS',
                'sku' => 'PC.BLO-UA022',
                'productprice' => '350000',
                'productsize' => 'M',
                'productquantity' => '14',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Women/Bottom/CREATURE WORK PANTS - BLACK - 350K/WEB-PRODUCT-PHOTO-FW20-59.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 342,
                'productname' => 'PC SPORT PANTS',
                'productdescription' => 'Heavy fleece pants with regular fit. Made of 100% cotton. Completed with elastic waistband, adjustable drawstring, and side pockets. Printed graphic on the front.',
                'sku' => 'PC.BLO-UA023',
                'productprice' => '500000',
                'productsize' => 'L',
                'productquantity' => '45',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Public Culture/Women/Bottom/PC SPORT PANTS – BLACK - 500K/SS21-PC-SPORTSWEAR-11-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 343,
                'productname' => 'SHROOMS FOLDABLE SHOPPING BAG',
                'productdescription' => 'Foldable shopping bag made out of ripstop nylon. Direct printed to garment all over. Especially made to carry all your belongings.',
                'sku' => 'PC.BLO-UA020',
                'productprice' => '200000',
                'productsize' => '-',
                'productquantity' => '57',
                'productcolor' => 'Yellow',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Ripstop Nylon',
                'productimage' => 'Public Culture/Women/Accessories/SHROOMS FOLDABLE SHOPPING BAG – YELLOW - 200K/PC-Shopping-Bag-02.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 25,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 344,
                'productname' => 'SUN TOTEBAG',
                'productdescription' => 'Totebag made from canvas drill with full printed graphics.',
                'sku' => 'PC.BLO-UA021',
                'productprice' => '250000',
                'productsize' => '-',
                'productquantity' => '58',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Canvas Drill',
                'productimage' => 'Public Culture/Women/Accessories/SUN TOTEBAG - BLACK - 250K/PRODUCT-THUMBNAIL-WEB-52.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 345,
                'productname' => 'Alaskan Front Tees',
                'productdescription' => '20s American Cotton
                Hand-drawn designs
                High Grade Plastisol Ink',
                'sku' => 'SA.BLO-UA009',
                'productprice' => '200000',
                'productsize' => 'M',
                'productquantity' => '38',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Sage Denim/Men/Tops/Alaskan Front Tees Black - 200K/rhrrr.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 346,
                'productname' => 'Pierce Hoodie',
                'productdescription' => '100% American Cotton Fleece
                Hand-drawn Design
                Premium Plastisol Screen Printed',
                'sku' => 'SA.BLO-UA010',
                'productprice' => '370000',
                'productsize' => 'L',
                'productquantity' => '20',
                'productcolor' => 'Forest Green',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton, Fleece',
                'productimage' => 'Sage Denim/Men/Tops/Pierce Hoodie - 370K/gafa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 347,
                'productname' => 'Sage x Havana Sunset Mountain',
                'productdescription' => 'Printed premium rayon fabric
                Hand-drawn designs
                Boxed Fit
                Open collar construction',
                'sku' => 'SA.BLO-UA011',
                'productprice' => '299000',
                'productsize' => 'L',
                'productquantity' => '25',
                'productcolor' => 'Black, Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Rayon',
                'productimage' => 'Sage Denim/Men/Tops/Sage x Havana Sunset  Mountain - 299K/jyfjg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 348,
                'productname' => 'Senjo Tees Khaki',
                'productdescription' => '20s American Cotton
                Hand-drawn designs
                High Grade Plastisol Ink',
                'sku' => 'SA.BLO-UA012',
                'productprice' => '200000',
                'productsize' => 'XL',
                'productquantity' => '40',
                'productcolor' => 'Khaki',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Sage Denim/Men/Tops/Senjo Tees Khaki - 200K/agafas.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 349,
                'productname' => 'Solid Crafts JP Tees',
                'productdescription' => '20s American Cotton
                Hand-drawn designs
                High Grade Plastisol Ink',
                'sku' => 'SA.BLO-UA014',
                'productprice' => '200000',
                'productsize' => 'XXL',
                'productquantity' => '52',
                'productcolor' => 'Beige',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Sage Denim/Men/Tops/Solid Crafts JP Tees - 200K/assfsf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 350,
                'productname' => '7th Anniversary Special  River 18oz Unsanforized Deep Indigo x Blue Weft',
                'productdescription' => '18oz loomstate Deep Indigo x Brown Weft selvedge denim
                Milled exclusively in Sage Denim Foundry - Japanese material, milled in Indonesia
                100% cotton - spinned in Japan
                Brown selvedge line
                Deep Indigo x Brown Weft
                Right hand twill
                Ring slub
                Rigid and hairy
                Slim & slim straight cut
                Single felled inseam with gold thread
                Mountain inspired gold arcuate
                Raised belt loop
                Polaris symbol tab - White for Slim & Blue for Slim Straight cut
                One way waistband stitching with signature "V" shape
                Belt loop hook
                Off white twill pocket lining
                Sage embossed copper rivets
                Hidden rivets
                Sage signature pattern black button
                5mm veg-tan cowhide patch inked with River special edition',
                'sku' => 'SA.BLO-UA004',
                'productprice' => '1150000',
                'productsize' => 'M',
                'productquantity' => '62',
                'productcolor' => 'Dark Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim, Cotton, Selvedge',
                'productimage' => 'Sage Denim/Men/Bottom/7th Anniversary Special  River 18oz Unsanforized Deep Indigo x Blue Weft - 1150K/zadag.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 351,
                'productname' => '7th Anniversary Special  Sierra 18oz Unsanforized Deep Indigo x Brown Weft',
                'productdescription' => '18oz loomstate Deep Indigo x Brown Weft selvedge denim
                Milled exclusively in Sage Denim Foundry - Japanese material, milled in Indonesia
                100% cotton - spinned in Japan
                Brown selvedge line
                Deep Indigo x Brown Weft
                Right hand twill
                Ring slub
                Rigid and hairy
                Slim & slim straight cut
                Single felled inseam with gold thread
                Mountain inspired gold arcuate
                Raised belt loop
                Polaris symbol tab - White for Slim & Blue for Slim Straight cut
                One way waistband stitching with signature "V" shape
                Belt loop hook
                Off white twill pocket lining
                Sage embossed copper rivets
                Hidden rivets
                Sage signature pattern black button
                5mm veg-tan cowhide patch inked with Sierra special edition',
                'sku' => 'SA.BLO-UA005',
                'productprice' => '1150000',
                'productsize' => 'L',
                'productquantity' => '22',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim, Cotton, Selvedge',
                'productimage' => 'Sage Denim/Men/Bottom/7th Anniversary Special  Sierra 18oz Unsanforized Deep Indigo x Brown Weft - 1150K/fasfasf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 352,
                'productname' => 'Rover Denim – 14oz Indigo Denim',
                'productdescription' => '14oz sanforized indigo denim
                Ring spun
                Projectile-Loomed
                100% cotton
                Rope dyed deep indigo
                Right hand twill
                Slim tapered cut
                Single felled inseam with gold thread
                Plain backpocket
                Polaris Symbol tab
                Heavy cotton ecru twill pocket lining
                Sage embossed copper rivets
                Hidden rivets
                Sage signature pattern black button
                Inked and embossed pull up cowhide patch
                Chainstitched by Union Special 43200G',
                'sku' => 'SA.BLO-UA006',
                'productprice' => '520000',
                'productsize' => 'L',
                'productquantity' => '28',
                'productcolor' => 'Dark Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim, Cotton, Selvedge',
                'productimage' => 'Sage Denim/Men/Bottom/Rover Denim – 14oz Indigo Denim - 520K/gheh.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 353,
                'productname' => 'Rover Denim – 14oz Indigo x Black Denim',
                'productdescription' => '14oz sanforized deep indigo warp x black weft
                Ring spun
                Projectile-Loomed
                100% cotton
                Rope dyed deep indigo
                Right hand twill
                Slim tapered cut
                Navy blue stealth stitching
                Plain backpocket
                White Polaris Symbol tab
                Heavy cotton ecru twill pocket lining
                Sage embossed copper rivets
                Hidden rivets
                Sage signature pattern black button
                Inked and embossed pull up cowhide patch
                Chainstitched with Union Special 43200G',
                'sku' => 'SA.BLO-UA007',
                'productprice' => '600000',
                'productsize' => 'L',
                'productquantity' => '34',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim, Cotton, Selvedge',
                'productimage' => 'Sage Denim/Men/Bottom/Rover Denim – 14oz Indigo x Black Denim- 600K/afseg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 354,
                'productname' => 'Rover Denim – 14oz Indigo x Black Denim',
                'productdescription' => '21oz sanforized deep indigo selvedge denim
                Specifically and exclusively milled for Sage
                100% extra long staple cotton
                Deep blue selvedge line
                Rope dyed deep indigo
                Right hand twill
                Ring slub
                Slim & slim straight cut
                Single felled inseam with gold thread
                Mountain inspired gold arcuate
                Raised belt loop
                Polaris symbol tab – White for Slim & Blue for Slim Straight cut
                One way waistband stitching with signature “V” shape
                Belt loop hook
                Off white twill pocket lining
                Sage embossed copper rivets
                Hidden rivets
                Sage signature pattern black button
                High pressure stamped 2mm buffalo hide patch',
                'sku' => 'SA.BLO-UA008',
                'productprice' => '1250000',
                'productsize' => 'XL',
                'productquantity' => '6',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Denim, Cotton, Selvedge',
                'productimage' => 'Sage Denim/Men/Bottom/Wolfberg 21oz Sanforized Deep Indigo - 1250K/fafss.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 355,
                'productname' => 'Sage Craftworks Bearer Belt Tan',
                'productdescription' => 'Finest grade vegetable tanned leather
                Tan color
                Brass buckle
                Handstitch detailing
                Embossed with Sage signature details
                Burnished edge using natural beeswax
                Handsewn with linen thread',
                'sku' => 'SA.BLO-UA001',
                'productprice' => '320000',
                'productsize' => '-',
                'productquantity' => '9',
                'productcolor' => 'Tan',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'Sage Denim/Men/Accessories/Sage Craftworks  Bearer Belt Tan - 320K/fasff.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 356,
                'productname' => 'Sage Craftworks  Mountwise Bifold Wallet Natural',
                'productdescription' => 'Finest grade vegetable tanned leather
                Natural color
                Mountain ornament with brogue detailing
                Burnished edge using natural beeswax
                Handsewn with ramie thread
                Side cut for easy acess
                Quick slot on the back',
                'sku' => 'SA.BLO-UA002',
                'productprice' => '600000',
                'productsize' => '-',
                'productquantity' => '12',
                'productcolor' => 'Beige',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'Sage Denim/Men/Accessories/Sage Craftworks  Mountwise Bifold Wallet Natural - 600K/fasffs.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 26,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 357,
                'productname' => 'Talon Lanyard II',
                'productdescription' => 'Sage original design pattern
                1.5-2mm vegetable tanned water buffalo leather
                Natural color
                High pressure stamped with signature pattern
                9.5cm length x 2.5cm width
                Silver nickel hook',
                'sku' => 'SA.BLO-UA003',
                'productprice' => '80000',
                'productsize' => '-',
                'productquantity' => '17',
                'productcolor' => 'Tan',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'Sage Denim/Men/Accessories/Talon Lanyard II Tan - 80K/agsf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 358,
                'productname' => 'LORDE TSHIRT',
                'productdescription' => 'LORDE TSHIRT',
                'sku' => 'SB.BLO-UA008',
                'productprice' => '200000',
                'productsize' => 'L',
                'productquantity' => '26',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Men/Tops/LORDE TSHIRT - 200K/ff.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 359,
                'productname' => 'Shining Bright and Scooby-Doo Boo Shirt',
                'productdescription' => 'Shirt Collection Shining Bright co and Schoobydoo. This is the best combination of quality materials for screen printing materials. Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
                'sku' => 'SB.BLO-UA009',
                'productprice' => '200000',
                'productsize' => 'L',
                'productquantity' => '42',
                'productcolor' => 'Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Men/Tops/Shining Bright and Scooby-Doo Boo Shirt - 400K/BOO_1617357077956_resized1024.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 360,
                'productname' => 'Shining Bright Driblingz Crewneck',
                'productdescription' => 'Crewneck Shining Bright co. This is the best combination of quality materials & types of screen printing. Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
                'sku' => 'SB.BLO-UA010',
                'productprice' => '350000',
                'productsize' => 'L',
                'productquantity' => '46',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Men/Tops/Shining Bright Driblingz Crewneck - 350K/53ee26da0e8459de495a5e1d67851aca_1617268350515_resized1024.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 361,
                'productname' => 'Shining Bright G4sh Tshirt',
                'productdescription' => 'Shining Bright co. This is the best combination of quality materials & types of screen printing. Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
                'sku' => 'SB.BLO-UA011',
                'productprice' => '200000',
                'productsize' => 'XL',
                'productquantity' => '86',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Men/Tops/Shining Bright G4sh Tshirt - 200K/49847b42f67bfc052e53e615b5ea8d1a_1617097160498_resized1024.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 362,
                'productname' => 'LUXE SHORT PANTS',
                'productdescription' => 'LUXE SHORT PANTS',
                'sku' => 'SB.BLO-UA007',
                'productprice' => '300000',
                'productsize' => 'M',
                'productquantity' => '20',
                'productcolor' => 'Grey',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Men/Bottom/LUXE SHORT PANTS - GREY/JX7A0423.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 363,
                'productname' => 'Shining Bright Flacid Socks',
                'productdescription' => 'Shining Bright Socks co. This is the best blend of quality materials & materials.
                Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
                'sku' => 'SB.BLO-UA001',
                'productprice' => '300000',
                'productsize' => '-',
                'productquantity' => '15',
                'productcolor' => 'Grey',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Men/Accessories/Shining Bright Flacid Socks - 35K/7d6963e1036d1662bc2656423c13d3ce_1616579512447_resized1024.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 364,
                'productname' => 'Shining Bright Victoria Sunglasses',
                'productdescription' => 'Shining Bright Socks co. This is the best blend of quality materials & materials.
                Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
                'sku' => 'SB.BLO-UA002',
                'productprice' => '200000',
                'productsize' => '-',
                'productquantity' => '41',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Plastic',
                'productimage' => 'Shining Bright/Men/Accessories/Shining Bright Victoria Sunglasses - 200K/87af601bf0745360aeaf618e74b08280_1612238583891._resized1024.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 365,
                'productname' => 'Shining Bright X Noxa Pin',
                'productdescription' => 'Get 3 (three) in one package.',
                'sku' => 'SB.BLO-UA003',
                'productprice' => '50000',
                'productsize' => '-',
                'productquantity' => '3',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Acrylic',
                'productimage' => 'Shining Bright/Men/Accessories/Shining Bright X Noxa Pin - 50K/d7293c09ad2567950e7f7592e59a89c3_1612238238877._resized1024.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 366,
                'productname' => 'BILLIARD BALLS LOGO TSHIRT',
                'productdescription' => 'BILLIARD BALLS LOGO TSHIRT',
                'sku' => 'SB.BLO-UA022',
                'productprice' => '200000',
                'productsize' => 'M',
                'productquantity' => '7',
                'productcolor' => 'Purple',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Women/Tops/BILLIARD BALLS LOGO TSHIRT - PURPLE/fa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 367,
                'productname' => 'Shining Bright and Scooby-Doo Whoa Pocket Tees',
                'productdescription' => 'Pocket T-Shirt Colection Shining Bright co and Schoobydoo. This is the best combination of quality materials for screen printing materials. Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
                'sku' => 'SB.BLO-UA023',
                'productprice' => '200000',
                'productsize' => 'L',
                'productquantity' => '15',
                'productcolor' => 'Purple',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Women/Tops/Shining Bright and Scooby-Doo Whoa Pocket Tees - 200K/whoa_1617353586499_resized1024.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 368,
                'productname' => 'VIBRANT LOGO TSHIRT',
                'productdescription' => 'VIBRANT LOGO TSHIRT',
                'sku' => 'SB.BLO-UA024',
                'productprice' => '200000',
                'productsize' => 'XL',
                'productquantity' => '35',
                'productcolor' => 'Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Women/Tops/VIBRANT LOGO TSHIRT - 200K/afsfaf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 369,
                'productname' => 'C&S WORK PANTS',
                'productdescription' => 'C&S WORK PANTS – BLACK-OLIVE',
                'sku' => 'SB.BLO-UA020',
                'productprice' => '375000',
                'productsize' => 'M',
                'productquantity' => '45',
                'productcolor' => 'Black, Olive',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Women/Bottom/C&S WORK PANTS - BLACK-OLIVE/a.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 370,
                'productname' => 'MARCO SHORT PANTS',
                'productdescription' => 'MARCO SHORT PANTS',
                'sku' => 'SB.BLO-UA021',
                'productprice' => '275000',
                'productsize' => 'M',
                'productquantity' => '65',
                'productcolor' => 'Black, Olive',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Women/Bottom/MARCO SHORT PANTS - WHITE/f.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 371,
                'productname' => 'AMARI SUNGLASSES',
                'productdescription' => '-',
                'sku' => 'SB.BLO-UA015',
                'productprice' => '200000',
                'productsize' => '-',
                'productquantity' => '75',
                'productcolor' => 'Tortoise',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Plastic',
                'productimage' => 'Shining Bright/Women/Accessories/AMARI SUNGLASSES - TORTOISE/JX7A5873-scaled.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 372,
                'productname' => 'REN-78 DIGITAL WATCH',
                'productdescription' => 'REN-78 DIGITAL WATCH',
                'sku' => 'SB.BLO-UA017',
                'productprice' => '350000',
                'productsize' => '-',
                'productquantity' => '77',
                'productcolor' => 'Clear',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Stainless Steel',
                'productimage' => 'Shining Bright/Women/Accessories/REN-78 DIGITAL WATCH - CLEAR/df.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 373,
                'productname' => 'Shining Bright Alienation Wallet',
                'productdescription' => 'Shining Bright co. This is the best blend of quality materials & materials.
                Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
                'sku' => 'SB.BLO-UA018',
                'productprice' => '150000',
                'productsize' => '-',
                'productquantity' => '45',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Shining Bright/Women/Accessories/Shining Bright Alienation Wallet - 150K/89f51cfcc18fcaed15597eae42e1d8be_1612250799317._resized1024.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 27,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 374,
                'productname' => 'SHINING LIFE NAIL CLIPPER',
                'productdescription' => 'SHINING LIFE NAIL CLIPPER',
                'sku' => 'SB.BLO-UA019',
                'productprice' => '175000',
                'productsize' => '-',
                'productquantity' => '37',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Stainless',
                'productimage' => 'Shining Bright/Women/Accessories/SHINING LIFE NAIL CLIPPER - BLACK/af.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 28,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 375,
                'productname' => 'Mantra Orange Shirt',
                'productdescription' => 'Mantra Orange Shirt',
                'sku' => 'TD.BLO-UA002',
                'productprice' => '330000',
                'productsize' => 'M',
                'productquantity' => '39',
                'productcolor' => 'Orange',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Tenue de Attire/Men/Tops/Mantra Orange Shirt/fasaf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 28,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 376,
                'productname' => 'TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Shirt',
                'productdescription' => 'The piece that surely will brighten up your closet mix. An abstraction of a scene of reaping future and sowing hope in collaboration with Abenk Alter. Incorporate a touch of classy festivity to your days. Check out our 3 other articles collaborated especially with Abenk Alter, Available in short pants as well.',
                'sku' => 'TD.BLO-UA003',
                'productprice' => '479000',
                'productsize' => 'L',
                'productquantity' => '49',
                'productcolor' => 'Multicolor',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Tenue de Attire/Men/Tops/TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Shirt/feagea.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 28,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 377,
                'productname' => 'All Day Pajamas Tosca Short Pants',
                'productdescription' => 'Presenting you, your all day, 24 hours essential is our All Day Pajamas Collection. A collection of clothing perfect to be mix and matched to get suited up to snuggle and dressed down to mingle. Get in your pajamas and start your day now!',
                'sku' => 'TD.BLO-UA001',
                'productprice' => '129000',
                'productsize' => 'L',
                'productquantity' => '61',
                'productcolor' => 'Tosca',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Tenue de Attire/Men/Bottom/All Day Pajamas Tosca Short Pants/gag.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 28,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 378,
                'productname' => 'Contour Miro Shirt',
                'productdescription' => "A short dance for the long run, one more stroke of damn good feeling for a long lasting fling with you. With each stroke and splash of colors that bring happiness to your life today, tomorrow, and beyond.

                We hope you notice not only the best of what Contour Capsule can offer, but to find beauty in the perfectly imperfect sketches of each unique artwork. For you are the ones who help rediscover Contour Shirt, and we are here to help you reimagine what's possible",
                'sku' => 'TD.BLO-UA015',
                'productprice' => '380000',
                'productsize' => 'M',
                'productquantity' => '16',
                'productcolor' => 'Multicolor',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Tenue de Attire/Women/Tops/Contour Miro Shirt/miro-2_800x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 28,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 379,
                'productname' => 'All Day Pajamas Blue Long Pants',
                'productdescription' => 'Presenting you, your all day, 24 hours essential is our All Day Pajamas Collection. A collection of clothing perfect to be mix and matched to get suited up to snuggle and dressed down to mingle. Get in your pajamas and start your day now!',
                'sku' => 'TD.BLO-UA011',
                'productprice' => '129000',
                'productsize' => 'L',
                'productquantity' => '56',
                'productcolor' => 'Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Tenue de Attire/Women/Bottom/All Day Pajamas Blue Long Pants/gasga.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 28,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 380,
                'productname' => 'TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Small Bag',
                'productdescription' => 'TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Small Bag',
                'sku' => 'TD.BLO-UA010',
                'productprice' => '118000',
                'productsize' => '-',
                'productquantity' => '41',
                'productcolor' => 'Black, Multicolor',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'Tenue de Attire/Women/Accessories/TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Small Bag/d.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 381,
                'productname' => 'Good Heart T-Shirt',
                'productdescription' => '- Printed T-Shirt
                - Round neck
                - Long sleeves
                - Regular fit',
                'sku' => 'TG.BLO-UA013',
                'productprice' => '135000',
                'productsize' => 'L',
                'productquantity' => '19',
                'productcolor' => 'Brown',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Heart T-Shirt Brown - 135K/zvxzvxz.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 382,
                'productname' => 'Good Heart T-Shirt',
                'productdescription' => '- Printed T-Shirt
                - Round neck
                - Long sleeves
                - Regular fit',
                'sku' => 'TG.BLO-UA014',
                'productprice' => '135000',
                'productsize' => 'M',
                'productquantity' => '21',
                'productcolor' => 'Red',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Heart T-Shirt Red - 135K/xzzcz.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 383,
                'productname' => 'Good Smile Tee',
                'productdescription' => '- Printed T-Shirt
                - Round neck
                - Short sleeves
                - Regular fit',
                'sku' => 'TG.BLO-UA015',
                'productprice' => '143000',
                'productsize' => 'L',
                'productquantity' => '24',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Smile Tee White - 143K/acxz.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 384,
                'productname' => 'Jarvis Short Sleeve Shirt',
                'productdescription' => '- Collared neckline
                - Unlined
                - Regular fit
                - Short sleeves',
                'sku' => 'TG.BLO-UA016',
                'productprice' => '250000',
                'productsize' => 'L',
                'productquantity' => '27',
                'productcolor' => 'Dark Olive',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Jarvis Short Sleeve Shirt Dark Olive - 250K/vxzx.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 385,
                'productname' => 'Sam Pocket T-Shirt',
                'productdescription' => '- Solid color T-Shirt
                - Round neck
                - Long sleeves
                - Front pocket
                - Regular fit',
                'sku' => 'TG.BLO-UA018',
                'productprice' => '225000',
                'productsize' => 'XL',
                'productquantity' => '32',
                'productcolor' => 'Dark Green',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Sam Pocket T-Shirt Dark Green - 225K/abva.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 386,
                'productname' => 'Tom Pocket T-Shirt',
                'productdescription' => '- Solid color T-Shirt
                - Round neck
                - Short sleeves
                - Front pocket
                - Regular fit',
                'sku' => 'TG.BLO-UA019',
                'productprice' => '175000',
                'productsize' => 'XL',
                'productquantity' => '38',
                'productcolor' => 'Dark Blue',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Tom Pocket T-Shirt Dark Blue - 175K/vavsacx.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'brandid' => 29,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 387,
                'productname' => 'DREAM SLIDE',
                'productdescription' => '- Wide strap sandals
                - Rubber upper
                - Rubber insole
                - PU outsole
                - Open toe',
                'sku' => 'TG.BLO-UA010',
                'productprice' => '279000',
                'productsize' => '42',
                'productquantity' => '4',
                'productcolor' => 'Navy',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Rubber',
                'productimage' => 'The Goods Dept/Men/Shoes/DREAM SLIDE - NAVY - 279K/vava.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 388,
                'productname' => 'NEON SLIDE',
                'productdescription' => '- Wide strap sandals
                - Rubber upper
                - Rubber insole
                - PU outsole
                - Open toe',
                'sku' => 'TG.BLO-UA011',
                'productprice' => '279000',
                'productsize' => '42',
                'productquantity' => '6',
                'productcolor' => 'Light Green',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Rubber',
                'productimage' => 'The Goods Dept/Men/Shoes/NEON SLIDE - LIGHT GREEN - 279K/vavsa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 389,
                'productname' => 'Rama Sneakers',
                'productdescription' => 'RZ1295 An oxford shoe with a casual twist but still a classic. Made of leather with a brushed finish, fabric lining, and rubber outsole',
                'sku' => 'TG.BLO-UA012',
                'productprice' => '269000',
                'productsize' => '41',
                'productquantity' => '11',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Leather',
                'productimage' => 'The Goods Dept/Men/Shoes/Rama Sneakers - Black - 269K/vavssa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 390,
                'productname' => '88RISING SACOCHE',
                'productdescription' => 'Official Merchandise Heads in The Clouds by The Goods Dept',
                'sku' => 'TG.BLO-UA001',
                'productprice' => '199000',
                'productsize' => '-',
                'productquantity' => '15',
                'productcolor' => 'Orange',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Accessories/88RISING SACOCHE ORANGE - 199K/agaa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 391,
                'productname' => '88RISING STICKER PACK',
                'productdescription' => 'Official Merchandise Heads in The Clouds by The Goods Dept',
                'sku' => 'TG.BLO-UA002',
                'productprice' => '29000',
                'productsize' => '-',
                'productquantity' => '18',
                'productcolor' => 'Multicolor',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Vinyl Sticker',
                'productimage' => 'The Goods Dept/Men/Accessories/88RISING STICKER PACK - 29K/nsfnsf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 392,
                'productname' => 'OVER-P EASY LARGE SLING BAG',
                'productdescription' => 'Unisex Totebag with detail black color and white font.
            
                Volume Maximize : 3kg.
                Size Details :
                Height: 35cm
                Width: 39 cm
                Depth: 15 cm',
                'sku' => 'TG.BLO-UA003',
                'productprice' => '300000',
                'productsize' => '-',
                'productquantity' => '29',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Accessories/OVER-P EASY LARGE SLING BAG BLACK - 300K/agaf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 393,
                'productname' => 'OVER-P EASY SHOULDER BAG',
                'productdescription' => 'Dimension: 24cm x 4cm x 15cm; Strap : 126cm',
                'sku' => 'TG.BLO-UA004',
                'productprice' => '180000',
                'productsize' => '-',
                'productquantity' => '39',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Accessories/OVER-P EASY SHOULDER BAG BLACK - 180K/hljhl.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 394,
                'productname' => 'STICKER PACK RIPPLE.MIX',
                'productdescription' => 'The Goods Dept x Ripple Totebag
            
                Heavily inspired by components that made a magazine enjoyable to read. A tribute to the golden days of printed media that paved the local creative culture',
                'sku' => 'TG.BLO-UA005',
                'productprice' => '29000',
                'productsize' => '-',
                'productquantity' => '49',
                'productcolor' => 'Multicolor',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Sticker Vinyl',
                'productimage' => 'The Goods Dept/Men/Accessories/STICKER PACK RIPPLE.MIX - 29K/jtjfg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 395,
                'productname' => 'THE GOODS DEPT CRUMPLED MINI SLING',
                'productdescription' => 'Dimension: 19 cm x 16 cm ; Strap: 139 cm',
                'sku' => 'TG.BLO-UA006',
                'productprice' => '300000',
                'productsize' => '-',
                'productquantity' => '59',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Accessories/THE GOODS DEPT CRUMPLED MINI SLING BLACK - 300K/gfnfg.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 396,
                'productname' => 'THE GOODS DEPT SINGLE LOGO DRAWSTRING BAG',
                'productdescription' => 'The Goods Dept Drawstring Bag with Single Logo',
                'sku' => 'TG.BLO-UA008',
                'productprice' => '49000',
                'productsize' => '-',
                'productquantity' => '56',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Men/Accessories/THE GOODS DEPT SINGLE LOGO DRAWSTRING BAG - 49K/dnd.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 397,
                'productname' => 'The Goods Dept Tote Bag Jakarta Coklat',
                'productdescription' => 'Oversized canvas totebag to fit all of your daily essentials.

                Size Chart:
                Height : 38 cm
                Widht: 35 cm
                Depth : 10 cm
                Handle drop : 54 cm',
                'sku' => 'TG.BLO-UA009',
                'productprice' => '149000',
                'productsize' => '-',
                'productquantity' => '65',
                'productcolor' => 'Brown',
                'productweight' => '250 gram',
                'productcare' => 'Washable, No bleach, No tumble dry',
                'productmaterial' => 'Canvas',
                'productimage' => 'The Goods Dept/Men/Accessories/The Goods Dept Tote Bag Jakarta Coklat - 149K/fasfa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 398,
                'productname' => 'LOGO LONGSLEEVE',
                'productdescription' => 'The Goods Dept x Ripple Long Sleeve T-shirt

                A tribute to the golden days of printed media that paved the local creative culture.',
                'sku' => 'TG.BLO-UA041',
                'productprice' => '279000',
                'productsize' => 'M',
                'productquantity' => '68',
                'productcolor' => 'Dark Brown',
                'productweight' => '250 gram',
                'productcare' => 'Wash color seperately, Wash Inside Out, Do not iron on graphic, Do not beach.',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Women/Tops/LOGO LONGSLEEVE .DARK BROWN.S - 279K/fafsad.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 399,
                'productname' => 'MULTICOLOR TEE',
                'productdescription' => 'The Goods Dept x Ripple 1999 Logo T – Shirt

                1999 was the year Ripple cemented their ideology of an independent, mind-free and full of dedication magazine in Indonesia.',
                'sku' => 'TG.BLO-UA042',
                'productprice' => '249000',
                'productsize' => 'L',
                'productquantity' => '86',
                'productcolor' => 'Blue',
                'productweight' => '250 gram',
                'productcare' => 'Wash color seperately, Wash Inside Out, Do not iron on graphic, Do not beach.',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Women/Tops/MULTICOLOR TEE SS.BLUE - 249K/afsaf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 400,
                'productname' => 'PUFF TEE',
                'productdescription' => "The Goods Dept x Ripple Logo T – Shirt

                A tribute to the golden days of printed media that paved the local creative culture,",
                'sku' => 'TG.BLO-UA043',
                'productprice' => '249000',
                'productsize' => 'L',
                'productquantity' => '44',
                'productcolor' => 'Mustard',
                'productweight' => '250 gram',
                'productcare' => 'Wash color seperately, Wash Inside Out, Do not iron on graphic, Do not beach.',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Women/Tops/PUFF TEE SS.MUSTARD - 249K/agsge.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 401,
                'productname' => 'PUFF TEE',
                'productdescription' => "The Goods Dept x Ripple Logo T – Shirt

                A tribute to the golden days of printed media that paved the local creative culture.",
                'sku' => 'TG.BLO-UA044',
                'productprice' => '249000',
                'productsize' => 'L',
                'productquantity' => '52',
                'productcolor' => 'Off White',
                'productweight' => '250 gram',
                'productcare' => 'Wash color seperately, Wash Inside Out, Do not iron on graphic, Do not beach.',
                'productmaterial' => 'Cotton',
                'productimage' => 'The Goods Dept/Women/Tops/PUFF TEE SS.OFF WHITE - 249K/gafa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 402,
                'productname' => '88RISING SANDAL SLIP ON',
                'productdescription' => 'Official Merchandise Heads in The Clouds by The Goods Dept',
                'sku' => 'TG.BLO-UA037',
                'productprice' => '199000',
                'productsize' => '39',
                'productquantity' => '25',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Rubber',
                'productimage' => 'The Goods Dept/Women/Shoes/88RISING SANDAL SLIP ON WHITE - 199K/asvacz.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 403,
                'productname' => 'GOODS MULES',
                'productdescription' => 'The Goods Dept Round Heel Mules',
                'sku' => 'TG.BLO-UA038',
                'productprice' => '169000',
                'productsize' => '40',
                'productquantity' => '30',
                'productcolor' => 'Red',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Leather',
                'productimage' => 'The Goods Dept/Women/Shoes/DONNA FLAT SHOES BLUE - 175K/asva.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 404,
                'productname' => 'GOODS LIZZY SANDAL MIX',
                'productdescription' => 'The Goods Dept Lizzy Sandal Mix',
                'sku' => 'TG.BLO-UA039',
                'productprice' => '100000',
                'productsize' => '38',
                'productquantity' => '47',
                'productcolor' => 'Black, Beige',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Knitted, Rubber',
                'productimage' => 'The Goods Dept/Women/Shoes/GOODS LIZZY SANDAL MIX - 100K/vaasa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 405,
                'productname' => 'GOODS ROUND HEELS GREEN',
                'productdescription' => 'The Goods Dept Round Heel Pump

                Round heels mules with a pattern design on the heels for a different classy and elegant impression.',
                'sku' => 'TG.BLO-UA040',
                'productprice' => '149000',
                'productsize' => '39',
                'productquantity' => '57',
                'productcolor' => 'Green',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Polyester',
                'productimage' => 'The Goods Dept/Women/Shoes/GOODS ROUND HEELS GREEN - 149K/avszsax.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 406,
                'productname' => 'NEON SLIDE',
                'productdescription' => '- Wide strap sandals
                - Rubber upper
                - Rubber insole
                - PU outsole
                - Open toe',
                'sku' => 'TG.BLO-UA041',
                'productprice' => '279000',
                'productsize' => '39',
                'productquantity' => '77',
                'productcolor' => 'Pink',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Rubber',
                'productimage' => 'The Goods Dept/Women/Shoes/NEON SLIDE - PINK - 279K/aaa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 407,
                'productname' => 'LOGO HAT',
                'productdescription' => 'The Goods Dept x Ripple Bonnie Hat

                A tribute to the golden days of printed media that paved the local creative culture.',
                'sku' => 'TG.BLO-UA030',
                'productprice' => '159000',
                'productsize' => '-',
                'productquantity' => '87',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Wash color separately, Wash inside out, Do not iron on graphic, Do not beach',
                'productmaterial' => 'Cotton, Canvas',
                'productimage' => 'The Goods Dept/Women/Accessories/LOGO HAT.OLIVE.F - 159K/ndn.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 408,
                'productname' => 'MULTICOLOR TOTE',
                'productdescription' => 'The Goods Dept x Ripple Totebag

                Heavily inspired by components that made a magazine enjoyable to read. A tribute to the golden days of printed media that paved the local creative culture.',
                'sku' => 'TG.BLO-UA031',
                'productprice' => '179000',
                'productsize' => '-',
                'productquantity' => '89',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Wash color separately, Wash inside out, Do not iron on graphic, Do not beach',
                'productmaterial' => 'Cotton, Canvas',
                'productimage' => 'The Goods Dept/Women/Accessories/MULTICOLOR TOTE.OFF WHITE - 179K/aczx.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 409,
                'productname' => 'The Goods Dept TRANSPARANT POUCH SET',
                'productdescription' => 'The Goods Dept. TRANSPARANT POUCH SET

                The Goods Dept Pouch Transparent Versatile with ziplock (1 Set, 2 pcs)
            
                Multipurpose pouch equipped with bubble wrap that makes it easier for you to store and organize various needs. Suitable for storing cosmetics or toiletries, because it is equipped with bubble wrap.',
                'sku' => 'TG.BLO-UA034',
                'productprice' => '55000',
                'productsize' => '-',
                'productquantity' => '57',
                'productcolor' => 'Transparent',
                'productweight' => '250 gram',
                'productcare' => 'Wash color separately, Wash inside out, Do not iron on graphic, Do not beach',
                'productmaterial' => 'LDPE plastic with Bubble Wrap and Ziplock lid',
                'productimage' => 'The Goods Dept/Women/Accessories/The Goods Dept TRANSPARANT POUCH SET - 55K/asczc.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 29,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 410,
                'productname' => 'THUNDER R TOTE',
                'productdescription' => 'The Goods Dept x Ripple Totebag

                Heavily inspired by components that made a magazine enjoyable to read. A tribute to the golden days of printed media that paved the local creative culture.',
                'sku' => 'TG.BLO-UA035',
                'productprice' => '179000',
                'productsize' => '-',
                'productquantity' => '97',
                'productcolor' => 'Olive',
                'productweight' => '250 gram',
                'productcare' => 'Wash color separately, Wash inside out, Do not iron on graphic, Do not beach',
                'productmaterial' => 'Cotton, Canvas',
                'productimage' => 'The Goods Dept/Women/Accessories/THUNDER R TOTE.OLIVE - 179K/avxzc.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 30,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 411,
                'productname' => 'HO VAGUE',
                'productdescription' => 'HO VAGUE',
                'sku' => 'UH.BLO-UA002',
                'productprice' => '428000',
                'productsize' => 'L',
                'productquantity' => '20',
                'productcolor' => 'Dark Blue',
                'productweight' => '250 gram',
                'productcare' => 'Wash color separately, Wash inside out, Do not iron on graphic, Do not beach',
                'productmaterial' => 'Fleece',
                'productimage' => 'United Hart/Men/Tops/HO VAGUE - 428K/18.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 30,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 412,
                'productname' => 'Checkered Hart Scarf',
                'productdescription' => 'Checkered Hart Scarf',
                'sku' => 'UH.BLO-UA001',
                'productprice' => '120000',
                'productsize' => '-',
                'productquantity' => '40',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Wash color separately, Wash inside out, Do not iron on graphic, Do not beach',
                'productmaterial' => 'Cotton',
                'productimage' => 'United Hart/Men/Accessories/Checkered Hart Scarf - 120K/UH-SCARF-CHECKERED-HART-120.000.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 30,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 413,
                'productname' => 'ABNORMAL CREWNECK',
                'productdescription' => 'ABNORMAL CREWNECK',
                'sku' => 'UH.BLO-UA019',
                'productprice' => '420000',
                'productsize' => 'L',
                'productquantity' => '48',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Wash color separately, Wash inside out, Do not iron on graphic, Do not beach',
                'productmaterial' => 'Cotton',
                'productimage' => 'United Hart/Women/Tops/ABNORMAL CREWNECK - 420K/22.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 30,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 414,
                'productname' => 'TS THINKING',
                'productdescription' => 'TS THINKING',
                'sku' => 'UH.BLO-UA025',
                'productprice' => '248000',
                'productsize' => 'L',
                'productquantity' => '60',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Wash color separately, Wash inside out, Do not iron on graphic, Do not beach',
                'productmaterial' => 'Cotton',
                'productimage' => 'United Hart/Women/Tops/TS THINKING - 248K/BAJU1.0.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 31,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 415,
                'productname' => 'Gum (BTS) Series',
                'productdescription' => 'Gum (BTS) Series',
                'sku' => 'VE.BLO-UA001',
                'productprice' => '385000',
                'productsize' => '40',
                'productquantity' => '30',
                'productcolor' => 'Green',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Canvas, Rubber',
                'productimage' => 'Ventela/Men/Shoes/Gum (bts) Series -385K/2021-01-30 09_35_58-GUM HIGH GREEN _ ventela.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 31,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 416,
                'productname' => 'Hard13 Noir',
                'productdescription' => 'Hard13 Noir',
                'sku' => 'VE.BLO-UA002',
                'productprice' => '299000',
                'productsize' => '42',
                'productquantity' => '32',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Canvas, Rubber',
                'productimage' => 'Ventela/Men/Shoes/Hard13 Noir - 299K/2021-01-30 09_32_20-hard13-noir low _ ventela.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 31,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 417,
                'productname' => 'Sang Sekerta',
                'productdescription' => 'Sang Sekerta',
                'sku' => 'VE.BLO-UA003',
                'productprice' => '385000',
                'productsize' => '40',
                'productquantity' => '38',
                'productcolor' => 'Black, White, Red',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Canvas, Rubber',
                'productimage' => 'Ventela/Men/Shoes/Sang Sekerta - 385K/2021-01-30 09_30_31-sang sekerta high lohita _ ventela.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 31,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 418,
                'productname' => 'Urban',
                'productdescription' => 'Urban',
                'sku' => 'VE.BLO-UA006',
                'productprice' => '299000',
                'productsize' => '41',
                'productquantity' => '48',
                'productcolor' => 'Brown, White',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Canvas, Rubber',
                'productimage' => 'Ventela/Men/Shoes/Urban - 299K/2021-01-30 09_34_34-urban brown _ ventela.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 31,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 419,
                'productname' => 'Armor',
                'productdescription' => 'Armor',
                'sku' => 'VE.BLO-UA011',
                'productprice' => '299000',
                'productsize' => '39',
                'productquantity' => '58',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Canvas, Rubber',
                'productimage' => 'Ventela/Women/Armor - 299K/2021-01-30 09_27_46-Armor Black Natural _ ventela.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 31,
                'categoryid' => 3,
                'gender_id' => 2,
                'image_detail_id' => 420,
                'productname' => 'Ethnic Series',
                'productdescription' => 'Ethnic Series',
                'sku' => 'VE.BLO-UA012',
                'productprice' => '299000',
                'productsize' => '40',
                'productquantity' => '38',
                'productcolor' => 'Black, White',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Canvas, Rubber',
                'productimage' => 'Ventela/Women/Ethnic Series - 299K/2021-01-30 09_37_59-ethnic black natural low _ ventela.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 421,
                'productname' => 'Slowday Exploration Shirt - Voyej x Tropic Thunder x Melfri Gazza',
                'productdescription' => 'SLOW DAY EXPLORATION

                "When you start to get overwhelmed by the pace of exploration, it is best to slow the mind for a day."
            
                .
            
                The illustration by Melfri Gazza try to capture the exploration of our ancestor whose heart and soul belong to the sea, and land.',
                'sku' => 'VE.BLO-UA006',
                'productprice' => '499000',
                'productsize' => 'M',
                'productquantity' => '78',
                'productcolor' => 'Multicolor',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Voyej/Men/Tops/Slowday Exploration Shirt - Voyej x Tropic Thunder x Melfri Gazza - 499K/view_SLOWDAY_EXPLORATION_SHIRT_NAVY_01.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 422,
                'productname' => 'WEST INLAND Tee',
                'productdescription' => 'The West Inland tee are made to commemorate our store opening at the west district of Jakarta. Thus featured an illustration of Jakarta map and a word "phys.str" that stand for physical store.',
                'sku' => 'VE.BLO-UA007',
                'productprice' => '220000',
                'productsize' => 'L',
                'productquantity' => '8',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Voyej/Men/Tops/WEST INLAND Tee - 220K/view_west_inland_tees_01.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 3,
                'gender_id' => 1,
                'image_detail_id' => 423,
                'productname' => 'Leather Sneaker',
                'productdescription' => 'Meet our new shoes collection, ADLER - taking the main silhouette of German army trainer, the upper is made from vegetable tanned leather with semi-tumbled finishing method combined with rubber sole underneath it.

                Adler will be the very first article from our shoe-line, there will be many others over time...',
                'sku' => 'VE.BLO-UA007',
                'productprice' => '1549000',
                'productsize' => '40',
                'productquantity' => '9',
                'productcolor' => 'Brown',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Leather, Rubber',
                'productimage' => 'Voyej/Men/Shoes/Adler - Leather Sneaker -1549K/view_ADLER_NA_01.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 424,
                'productname' => 'Golden Hind Belt',
                'productdescription' => "Golden Hind, the famous British ship that was captained by Sir Francis Drake and successfully sailed around the globe with this ship during his time. This is our new take on belt article, customize sized belt that will cover all of your waist size need (maximum for waist size 38). We'll cut the leather to match your waist size. Made from Brazilian Vegetable Tanned Leather combined with solid brass buckle.",
                'sku' => 'VE.BLO-UA001',
                'productprice' => '649000',
                'productsize' => '-',
                'productquantity' => '13',
                'productcolor' => 'Tan',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Leather',
                'productimage' => 'Voyej/Men/Accessories/Golden Hind Belt -649K/view_UNIBELT_NA_01a_copy.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 425,
                'productname' => 'Karimata V',
                'productdescription' => 'The fifth version of Karimata got this slope accent on the exterior’s edge, a little detail that set it apart from the previous series.
                Instead of card slots set on both sides, Karimata V features an internal coin pocket on the left side.
                Made from locally sourced natural vegetable tanned leather with supple characteristics.',
                'sku' => 'VE.BLO-UA002',
                'productprice' => '825000',
                'productsize' => '-',
                'productquantity' => '19',
                'productcolor' => 'Tan',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Leather',
                'productimage' => 'Voyej/Men/Accessories/Karimata V - 825K/view_KARIMATAV_NA_01.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 426,
                'productname' => 'Vasa III American',
                'productdescription' => 'As we are thriving to tackle the recent pandemic of COVID-19 that has lots of impacts both in national health & economic landscape, this PRE-ORDER method is one of our strategies to sustain.
                Please expect waiting time for production based on your order date, for instance; your order should be arrived within XX days (PO time) after your order date. Worry not, most probably it will be arrived faster than you thought.
            
                --
            
                VASA III AMERICANA is a compact and spacious BI-fold card wallet. Each compartment can hold multiple cards. The front one is an easy access to your business cards. The inside compartments are very suitable to keep your cards and folded paperbills needs. Made from American natural vegetable tanned cowhide, VASA III AMERICANA is machine-stitched using Durkopp Adler sewing machine.',
                'sku' => 'VE.BLO-UA003',
                'productprice' => '259000',
                'productsize' => '-',
                'productquantity' => '26',
                'productcolor' => 'Tan',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Leather',
                'productimage' => 'Voyej/Men/Accessories/Vasa III American -259K/view_VASAIII_NA_031.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 427,
                'productname' => 'Cruise Pouch - Horween Red Berry',
                'productdescription' => 'Cruise Pouch will accompany the fun you had while wandering around, be it through the unnamed road or concrete jungle. This compact pouch could hold your essentials such as a smartphone, daily wallet, and a personal hand sanitizer bottle (60ml). The journey awaits you.',
                'sku' => 'VE.BLO-UA020',
                'productprice' => '999000',
                'productsize' => '-',
                'productquantity' => '41',
                'productcolor' => 'Red Berry',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Leather',
                'productimage' => 'Voyej/Women/Accessories/Cruise Pouch - Horween Red Berry - 999K/view_CRUISE_REDBERRY_01.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 428,
                'productname' => 'Grote Bag',
                'productdescription' => 'With its subtle appearance, Grote Bag will go along fine with all of your daily journey. We want to empower you to reduce plastic usage by using this spacious bag as it will get better with time.',
                'sku' => 'VE.BLO-UA021',
                'productprice' => '549000',
                'productsize' => '-',
                'productquantity' => '47',
                'productcolor' => 'Brown',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Voyej/Women/Accessories/Grote Bag - 549K/view_GROTE_BAG_BROWN_01.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 32,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 429,
                'productname' => 'Passport Cover Americana',
                'productdescription' => 'The product that all of you have been asking for such a long time.
                We present Passport Cover or Holder to give your standard passport a better look. Made from American vegetable tanned leather, able to hold your folded boarding pass and one business card slot inside the holder.
            
                Let your journey starts with this item.',
                'sku' => 'VE.BLO-UA027',
                'productprice' => '429000',
                'productsize' => '-',
                'productquantity' => '55',
                'productcolor' => 'Peach',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Leather',
                'productimage' => 'Voyej/Women/Accessories/Passport Cover Americana - 429K/view_PASSPORTCOVER_NA_01.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 430,
                'productname' => 'Wire FP Shirt Black',
                'productdescription' => 'Wellborn Wire FP Shirt Black',
                'sku' => 'WB.BLO-UA020',
                'productprice' => '153000',
                'productsize' => 'L',
                'productquantity' => '67',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Men/Tops/Wellborn Freedom Black T-Shirt - 153K/95b1676b-31d8-4612-97ea-00e603dfa7af.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 431,
                'productname' => 'Hellday White T-Shirt',
                'productdescription' => 'Hellday White T-Shirt',
                'sku' => 'WB.BLO-UA021',
                'productprice' => '88000',
                'productsize' => 'XL',
                'productquantity' => '27',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Men/Tops/Wellborn Hellday White T-Shirt - 88K/aa241b04-069a-4d67-8d3b-3f457941566e.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 1,
                'gender_id' => 1,
                'image_detail_id' => 432,
                'productname' => 'Piece FP Black Shirt',
                'productdescription' => 'Piece FP Black Shirt',
                'sku' => 'WB.BLO-UA022',
                'productprice' => '153000',
                'productsize' => 'L',
                'productquantity' => '83',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Men/Tops/Wellborn Piece FP Black Shirt - 153K/1b87bd73-ecf5-4a9b-99d7-175df10dd019.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 433,
                'productname' => 'Cargo Short',
                'productdescription' => 'Wellborn Cargo Short Black',
                'sku' => 'WB.BLO-UA010',
                'productprice' => '280000',
                'productsize' => 'M',
                'productquantity' => '38',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Men/Bottom/Wellborn Cargo Short Black - 280K/ed8ab751-a7e6-40c9-8d5a-2a996696ce7c.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 434,
                'productname' => 'Denim Distressed Alpha',
                'productdescription' => 'Wellborn Denim Distressed Alpha',
                'sku' => 'WB.BLO-UA005',
                'productprice' => '170000',
                'productsize' => 'L',
                'productquantity' => '42',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Denim',
                'productimage' => 'Wellborn Company/Men/Bottom/Wellborn Denim Distressed Alpha - 170K/4587cc57-549e-46f5-b9f2-7b2c70e57409.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 2,
                'gender_id' => 1,
                'image_detail_id' => 435,
                'productname' => 'Slim Fit Chino Beige Pants',
                'productdescription' => 'Classic, but make it more stylish and modern at the same time. Slim Fit Chino Pants are made from a comfortable cotton twill, featuring two front pockets and two semi-flap back pockets. Cut in a slim-fit silhouette, these pair of chino pants are finished with a zip fly and a button closure.',
                'sku' => 'WB.BLO-UA011',
                'productprice' => '150000',
                'productsize' => 'L',
                'productquantity' => '58',
                'productcolor' => 'Beige',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton Twill',
                'productimage' => 'Wellborn Company/Men/Bottom/Wellborn Slim Fit Chino Beige Pants - 280K/a61ca89c-73ef-4906-b5f4-ccba49c44862.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 4,
                'gender_id' => 1,
                'image_detail_id' => 436,
                'productname' => 'Jungle Bucket Hat',
                'productdescription' => 'Wellborn Jungle Bucket Hat Black',
                'sku' => 'WB.BLO-UA001',
                'productprice' => '123000',
                'productsize' => '-',
                'productquantity' => '68',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Men/Accessories/Wellborn Hollow Black Hat - 123K/004ddb33-9b49-4102-89ca-1c359c4e80ed.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 437,
                'productname' => 'Group White T-Shirt',
                'productdescription' => 'The group of surrealism.
                Group White T-Shirt featuring a lettering wellborn at the left chest. For the back there’s a list for surrealism painters. The T-Shirt made in a midweight cotton jersey, combed 30s for a soft hand feel, custom graphics manual screen printing and cut in regular fit.',
                'sku' => 'WB.BLO-UA037',
                'productprice' => '78000',
                'productsize' => 'M',
                'productquantity' => '86',
                'productcolor' => 'White',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Women/Tops/Wellborn Group White T-Shirt - 78K/274607b7-4635-46f2-b733-0911e41424b8.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 438,
                'productname' => 'Logo Maroon T-Shirt',
                'productdescription' => 'Wellborn Logo Maroon T-Shirt with a just ordinary Wellborn’s logo at the chest. This T-Shirt made from soft cotton combed, cut in a regular fit and a rib-knit crew neck. Maroon colour give you a confident style.',
                'sku' => 'WB.BLO-UA045',
                'productprice' => '78000',
                'productsize' => 'L',
                'productquantity' => '21',
                'productcolor' => 'Maroon',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Women/Tops/Wellborn Logo Maroon T-Shirt - 78K/837a7f8e-83b7-4462-a24e-085bcd51a509.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 439,
                'productname' => 'Untruth SS Orange T-Shirt',
                'productdescription' => 'SS Untruth Orange T-Shirt featuring a quotes by Mahatma Gandhi “Shall conquer untruth by truth. And in resisting untruth, I shall put up with all suffering” at the chest. For the back side there’s a lettering “Wellborn, Born Divine”. This T-Shirt made from soft cotton combed, cut in a regular fit and a rib-knit crew neck. Neon orange vibes give you a confident style.',
                'sku' => 'WB.BLO-UA034',
                'productprice' => '78000',
                'productsize' => 'L',
                'productquantity' => '15',
                'productcolor' => 'Orange',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Women/Tops/Wellborn Untruth SS Orange T-Shirt  - 78K/084cc0e7-d698-43c9-95f4-f617c9f0c56e.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 440,
                'productname' => 'Rascal Black Pants',
                'productdescription' => 'Rascal Black Pants',
                'sku' => 'WB.BLO-UA030',
                'productprice' => '385000',
                'productsize' => 'M',
                'productquantity' => '19',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Women/Bottom/Wellborn Rascal Black Pants - 385K/9eaf7374-68b0-40cb-a5f2-debf00547770.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 2,
                'gender_id' => 2,
                'image_detail_id' => 441,
                'productname' => 'Work Pant Long Khaki',
                'productdescription' => 'A pair of work pants, but with a street style vibe.

                Crafted from baby canvas which makes these pants thinner, softer, more breathable, and more flexible, Work Pants Long is cut in flat front silhouette and finished with a button and zip closure to the front, side pockets, and back pockets with velcro closures.',
                'sku' => 'WB.BLO-UA031',
                'productprice' => '260000',
                'productsize' => 'M',
                'productquantity' => '23',
                'productcolor' => 'Khaki',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Women/Bottom/Wellborn Work Pant Long Khaki - 260K/53184024_310c1f2f-eb91-43a5-b72e-b5d5f3bb5ed7_1200_1200.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 442,
                'productname' => 'Jungle Bucket Hat',
                'productdescription' => 'Wellborn Jungle Bucket Hat Black',
                'sku' => 'WB.BLO-UA002',
                'productprice' => '78000',
                'productsize' => '-',
                'productquantity' => '27',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Women/Accessories/Wellborn Jungle Bucket Hat Black - 78K/65580410_632fe385-c314-4a7a-a865-814987a5c0b8.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 33,
                'categoryid' => 4,
                'gender_id' => 2,
                'image_detail_id' => 443,
                'productname' => 'Pocket Bucket Hat',
                'productdescription' => 'Wellborn Pocket Bucket Hat Olive',
                'sku' => 'WB.BLO-UA001',
                'productprice' => '78000',
                'productsize' => '-',
                'productquantity' => '2',
                'productcolor' => 'Black',
                'productweight' => '250 gram',
                'productcare' => 'Washable',
                'productmaterial' => 'Cotton',
                'productimage' => 'Wellborn Company/Women/Accessories/Wellborn Pocket Bucket Hat Olive - 78K/25413a15-792c-42f7-9117-7c86e0aa1aad.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
