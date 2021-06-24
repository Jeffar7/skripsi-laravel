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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA007',
                'productprice' => '320000',
                'productsize' => 'XL',
                'productquantity' => 20,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA008',
                'productprice' => '650000',
                'productsize' => 'L',
                'productquantity' => 25,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA009',
                'productprice' => 320000,
                'productsize' => 'L',
                'productquantity' => 25,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA010',
                'productprice' => 385000,
                'productsize' => 'XL',
                'productquantity' => 20, 
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA011',
                'productprice' => 385000,
                'productsize' => 'M',
                'productquantity' => 25,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA012',
                'productprice' => 320000,
                'productsize' => 'L',
                'productquantity' => 22,
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
                Back RHS bessom pocket with 3M reflective',
                'sku' => 'AG.BLO-UA006',
                'productprice' => 450000,
                'productsize' => 'M',
                'productquantity' => 20,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA001',
                'productprice' => 980000,
                'productsize' => '-',
                'productquantity' => 15,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA002',
                'productprice' => 720000,
                'productsize' => '-',
                'productquantity' => 45,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA003',
                'productprice' => 150000,
                'productsize' => '-',
                'productquantity' => 8,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA004',
                'productprice' => 150000,
                'productsize' => '-',
                'productquantity' => 18,
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
                'productimage' => 'Ageless Galaxy/Men/Accessories/WHATEVER IT TAKES E-MONEY/WHATEVER_IT_TAKES_E-MONEY.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 13,
                'productname' => 'AGLXY HZ TRACKTOP 011 – BLACKPURPLE',
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA026',
                'productprice' => '550000',
                'productsize' => 'M',
                'productquantity' => 12,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA027',
                'productprice' => 350000,
                'productsize' => 'XL',
                'productquantity' => 22,
                'productimage' => 'Ageless Galaxy/Women/Tops/BYB POCKET STRIPES/BYB_POCKET_STRIPES.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 15,
                'productname' => 'COMMITTED TO TIME 012 LS – PURPLE',
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA028',
                'productprice' => 385000,
                'productsize' => 'L',
                'productquantity' => 35,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA029',
                'productprice' => 400000,
                'productsize' => 'S',
                'productquantity' => 99,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA030',
                'productprice' => 600000,
                'productsize' => 'M',
                'productquantity' => 89,
                'productimage' => 'Ageless Galaxy/Women/Tops/PATTA WEIRD BABY HOODED SWEATER/PATTA_WEIRD_BABY_HOODED_SWEATER.JPG',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'brandid' => 1,
                'categoryid' => 1,
                'gender_id' => 2,
                'image_detail_id' => 18, 
                'productname' => 'SPACE MONKEY ELEMENTS – WHITE',
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA031',
                'productprice' => 350000,
                'productsize' => 'M',
                'productquantity' => 80,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA020',
                'productprice' => 250000,
                'productsize' => '-',
                'productquantity' => 50,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA021',
                'productprice' => 120000,
                'productsize' => '-',
                'productquantity' => 33,
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
                'productdescription' => '-',
                'sku' => 'AG.BLO-UA024',
                'productprice' => 1800000,
                'productsize' => '-',
                'productquantity' => 25,
                'productimage' => 'Ageless Galaxy/Women/Accessories/THE DISCOVERY 006 - CARPET/ACAG045-DISCOVERYcarpet-555x555.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AHHA DENIM RA KARTINI',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA010',
            //     'productprice' => 700000,
            //     'productsize' => 'M',
            //     'productquantity' => 25,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA_DENIM_RA_KARTINI.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AHHA - Hoodie Si Pitung',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA011',
            //     'productprice' => 770000,
            //     'productsize' => 'L',
            //     'productquantity' => 35,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA-Hoodie_Si_Pitung.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AHHA Oversized T-Shirt - Cakil',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA012',
            //     'productprice' => 275000,
            //     'productsize' => 'L',
            //     'productquantity' => 30,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA_Oversized_T-Shirt-Cakil.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AHHA Oversized T-Shirt - Prambanan',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA013',
            //     'productprice' => 275000,
            //     'productsize' => 'XL',
            //     'productquantity' => 35,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA_Oversized_T-Shirt-Prambanan.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AHHA - Oversized T-Shirt - Si Pitung',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA015',
            //     'productprice' => 330000,
            //     'productsize' => 'XL',
            //     'productquantity' => 45,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA-Oversized_T-Shirt-Si_Pitung.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 2,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'AHHA MASK Indo Pride Edition "PARANG HITAM"',
            //     'productdescription' => 'Cotton material

            //     Can be washed and reused',
            //     'sku' => 'AH.BLO-UA001',
            //     'productprice' => 72000,
            //     'productsize' => '-',
            //     'productquantity' => 19,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA_MASK_Indo_Pride_Edition.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'AHHA Navy Gym Bag',
            //     'productdescription' => '-Using waterproof material

            //     -Soft material and comfortable to use
                
            //     -The rope doesn\'t break easily
                
            //     -The logo ahha pimbul uses a special plate and is very limited
                
                
                
            //     Come on, hurry up on the order, don\'t run out!',
            //     'sku' => 'AH.BLO-UA002',
            //     'productprice' => 329000,
            //     'productsize' => '-',
            //     'productquantity' => 29,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA_Navy_Gym_Bag.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'SlingBag AHHA Lenity Camo (Limited Edition)',
            //     'productdescription' => '-Using waterproof material

            //     -Soft material and comfortable to use
                
            //     -The rope doesn\'t break easily
                
            //     -The logo ahha pimbul uses a special plate and is very limited
                
                
                
            //     Come on, hurry up on the order, don\'t run out!',
            //     'sku' => 'AH.BLO-UA003',
            //     'productprice' => 279000,
            //     'productsize' => '-',
            //     'productquantity' => 15,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/SlingBag_AHHA_Lenity_Camo.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AHHA - T-Shirt Diponegoro',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA021',
            //     'productprice' => 327000,
            //     'productsize' => 'XXL',
            //     'productquantity' => 67,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA-T-Shirt_Diponegoro.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AHHA - T-Shirt Fahombo (Limited Edition)',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA022',
            //     'productprice' => 295000,
            //     'productsize' => 'L',
            //     'productquantity' => 60,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA-T-Shirt_Fahombo.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AHHA - T-Shirt Let it Burn',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA023',
            //     'productprice' => 288000,
            //     'productsize' => '-',
            //     'productquantity' => 50,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA-T-Shirt_Let_it_Burn.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AHHA - T-Shirt Unity Batik',
            //     'productdescription' => '-',
            //     'sku' => 'AH.BLO-UA024',
            //     'productprice' => 237000,
            //     'productsize' => '-',
            //     'productquantity' => 77,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA-T-Shirt_Unity_Batik.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AHHA - T-Shirt Kerapan Sapi (Limited Edition)',
            //     'productdescription' => '100% cotton with a special material that is not hot when used

            //     Plastisol screen printing is strong and durable',
            //     'sku' => 'AH.BLO-UA025',
            //     'productprice' => 295000,
            //     'productsize' => '-',
            //     'productquantity' => 96,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA-T-Shirt_Kerapan_Sapi.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 2,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'AHHA MASK Indo Pride Edition "Jumputan"',
            //     'productdescription' => 'Cotton material

            //     Can be washed and reused',
            //     'sku' => 'AH.BLO-UA018',
            //     'productprice' => 72000,
            //     'productsize' => '-',
            //     'productquantity' => 12,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA_MASK_Indo_Pride_Edition.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'AHHA MASK Indo Pride Edition TENUN TIMUR',
            //     'productdescription' => 'Cotton material

            //     Can be washed and reused',
            //     'sku' => 'AH.BLO-UA019',
            //     'productprice' => 72000,
            //     'productsize' => '-',
            //     'productquantity' => 25,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/AHHA_MASK_Indo_Pride_Edition_TENUN_TIMUR.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Scrunchie Voal',
            //     'productdescription' => 'Voal material

            //     There is a rail in the middle that locks the material so it doesn\'t run
                
            //     Size 8cm
                
            //     Good quality neat stitches',
            //     'sku' => 'AH.BLO-UA020',
            //     'productprice' => 35000,
            //     'productsize' => '-',
            //     'productquantity' => 25,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/Scrunchie_Voal.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 2,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Signature Pin Gold',
            //     'productdescription' => 'The exclusive PIN with the AHHA Hijab logo is available in two colors, namely Gold and Silver. In the form of AHHA Hijab logo horizontally, PIN is equipped with pearl as the hook.

            //     Size : 3x8 cm
            
            //     Material : Stainless metal with strong and sharp safety pins',
            //     'sku' => 'AH.BLO-UA021',
            //     'productprice' => 70000,
            //     'productsize' => '-',
            //     'productquantity' => 41,
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/Signature_Pin_Gold.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AYE X SMILEY ARCA DYE SMI WHITE TEES',
            //     'productdescription' => 'AYE X SMILEY Collaboration graphic tees made from 100% cotton.




            //     Model is wearing size Small (170cm/55kg)',
            //     'sku' => 'AY.BLO-UA006',
            //     'productprice' => '148000',
            //     'productsize' => '-',
            //     'productquantity' => '14',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AYE X SMILEY BELLATRO SMI - GREEN JACKET',
            //     'productdescription' => 'Bellatro Smi is made from light-weight vintage green canvas cotton. Insipired by mitary style outer-wear with modern twist, designed in regular fit .




            //     Bellatro Smi features button closure, chest pocket, embroidered patches, adjustable buttoned cuffs, decorated with plastisol prints on back-side.
                
                
                
                
            //     10oz vintage green canvas cotton
                
            //     100% cotton
                
            //     Button closure
                
            //     Chest pocket
                
            //     Embroidered patches
                
            //     Plastisol prints
                
            //     Felled seam construction
                
            //     Regular fit',
            //     'sku' => 'AY.BLO-UA007',
            //     'productprice' => '520000',
            //     'productsize' => '-',
            //     'productquantity' => '48',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Aye X Smiley Olens smi Dye Blue Hoodie',
            //     'productdescription' => 'Olens Smi is made from heavy-weight american fleece cotton with hand-made tie dye. Available in regular fit with plastisol prints at front side and back side.',
            //     'sku' => 'AY.BLO-UA008',
            //     'productprice' => '598000',
            //     'productsize' => '-',
            //     'productquantity' => '88',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AYE X SMILEY PATRON SMI BLUE TYPE 2 JACKET',
            //     'productdescription' => 'Patron Smi is made from light-weight navy canvas cotton with special pattern prints. Designed in a modified type II jacket style, complete with hand-warmer pockets in regular fit.




            //     Patron Smi features button closure, flap pockets at chest, hand-warmer pockets, and adjustable waist band.
                
                
                
                
            //     12oz navy blue canvas cotton
                
            //     Special pattern prints all over fabrics
                
            //     100% cotton
                
            //     Button closure
                
            //     Chest pocket
                
            //     Felled seam construction
                
            //     Regular fit',
            //     'sku' => 'AY.BLO-UA009',
            //     'productprice' => '598000',
            //     'productsize' => '-',
            //     'productquantity' => '95',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'AYE X SMILEY VITA SMI PEACH TEES',
            //     'productdescription' => 'AYE X SMILEY Collaboration graphic tees made from 100% cotton.




            //     Model is wearing size Small (170cm/55kg)',
            //     'sku' => 'AY.BLO-UA010',
            //     'productprice' => '148000',
            //     'productsize' => '-',
            //     'productquantity' => '97',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 3,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'AYE X SMILEY QUARE SMI - BLACK DISTRESSED JEANS',
            //     'productdescription' => 'Quare Smi jeans are made from 12oz black stretch denim that has been washed down to a very authentic, hand-made repairs with peek-a-boo Smiley logo on right knee, worn in look with a light grey shade.




            //     Quare Smi comes in our signature super slim cut with mid-low rise and tight from the hips down to the narrow leg opening.
                
                
                
                
            //     12oz black stretch denim
                
            //     Prewashed
                
            //     Hand made repairs
                
            //     Peek-a-boo Smiley logo on right knee
                
            //     Worn in, authentic looks
                
            //     Hidden rivets
                
            //     Zip fly
                
            //     Signature pyramid arcuates (double stitch version)
                
            //     AYE X SMILEY black tab on back pocket
                
            //     AYE X SMILEY Special design patch
                
            //     Smiley logo prints on yoke lining
                
            //     Super slim',
            //     'sku' => 'AY.BLO-UA001',
            //     'productprice' => '542000',
            //     'productsize' => '-',
            //     'productquantity' => '33',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'BIGOLLO SLIM STRAIGHT SELVEDGE JEANS',
            //     'productdescription' => 'BIGOLLO SLIM STRAIGHT SELVEDGE JEANS
            //     BIGOLLO
            //     -
            //     Bigollo has it’s own uniqueness because of the look from the slub fabric that is full of character.
            //     -
            //     Bigollo is made from 20oz indigo selvedge denim, intense slub, blue selvedge line, slim straight fit.
            //     -
            //     Details :
            //     - 20oz raw selvedge denim
            //     - 100% cotton
            //     - Rope dyed
            //     - Indigo
            //     - Slubby
            //     - Blue selvedge line
            //     - Sanforized
            //     - Slim Straight Fit',
            //     'sku' => 'AY.BLO-UA002',
            //     'productprice' => '714000',
            //     'productsize' => '-',
            //     'productquantity' => '39',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Sentinell Green Cargo Pants',
            //     'productdescription' => 'SENTINELL GREEN CARGO PANTS




            //     Sentinell cargo pants are made from light weight green ripstop cotton. 
                
                
                
                
            //     Sentinell cargo pants comes in regular slim cut with medium rise, roomy in the top-block and thigh to be comfortable, slightly tapered from knee to the leg opening.
                
                
                
                
            //     10oz green ripstop cotton
                
            //     Zip fly
                
            //     Multi pockets
                
            //     Adjustable waistband
                
            //     Reinforced layers on crotch
                
            //     Bartack stitching at vital stress points
                
            //     Adjustable leg opening
                
            //     Felled seam construction
                
            //     Regular slim fit',
            //     'sku' => 'AY.BLO-UA003',
            //     'productprice' => '488000',
            //     'productsize' => '-',
            //     'productquantity' => '93',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'WARDEN BLACK PANTS',
            //     'productdescription' => 'Warden - Black

            //     Inspired by military pant, Warden fatigue pant is made from light-weight twill cotton, and come with all identical details like the iconic trapezoidal front pockets and flapped, buttoned back pockets.
                
            //     Generally, they fit more on the baggy side, but for this Warden we are trying to prensent some modern fit with slim top-block and slightly tapered leg.
                
            //     Available in Slim Fit.',
            //     'sku' => 'AY.BLO-UA004',
            //     'productprice' => '405000',
            //     'productsize' => '-',
            //     'productquantity' => '85',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'WARDEN KHAKI PANTS',
            //     'productdescription' => 'Bellatro Smi is made from light-weight vintage green canvas cotton. Insipired by mitary style outer-wear with modern twist, designed in regular fit .




            //     Bellatro Smi features button closure, chest pocket, embroidered patches, adjustable buttoned cuffs, decorated with plastisol prints on back-side.
                
                
                
                
            //     10oz vintage green canvas cotton
                
            //     100% cotton
                
            //     Button closure
                
            //     Chest pocket
                
            //     Embroidered patches
                
            //     Plastisol prints
                
            //     Felled seam construction
                
            //     Regular fit',
            //     'sku' => 'AY.BLO-UA005',
            //     'productprice' => '413000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AYE & CO FULGO TEE WHITE',
            //     'productdescription' => '100% 20s cotton with printed design in regular fit.

            //     AYE & co Design
            //     Weight: 500g',
            //     'sku' => 'AY.BLO-UA017',
            //     'productprice' => '220000',
            //     'productsize' => '-',
            //     'productquantity' => '26',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AYE & CO IGNIS BLACK TEE',
            //     'productdescription' => '100% 20s cotton with printed design in regular fit.

            //     AYE & co Design
            
            //     Weight: 500g',
            //     'sku' => 'AY.BLO-UA018',
            //     'productprice' => '220000',
            //     'productsize' => '-',
            //     'productquantity' => '35',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AYE & CO PURUS VIOLET LONG SLEEVE T-SHIRT',
            //     'productdescription' => '100% 20s cotton with printed design in regular fit with long sleeve

            //     AYE & co Design
            //     Weight: 500g',
            //     'sku' => 'AY.BLO-UA019',
            //     'productprice' => '240000',
            //     'productsize' => '-',
            //     'productquantity' => '53',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'FULGO - White Tshirt',
            //     'productdescription' => '100% 20S Cotton. Printed design in regular fit.
            //     Weight: 500g',
            //     'sku' => 'AY.BLO-UA020',
            //     'productprice' => '220000',
            //     'productsize' => '-',
            //     'productquantity' => '37',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'AYE & CO PURUS VIOLET LONG SLEEVE T-SHIRT',
            //     'productdescription' => '100% 20s cotton with printed design in regular fit with long sleeve

            //     AYE & co Design
            //     Weight: 500g',
            //     'sku' => 'AY.BLO-UA019',
            //     'productprice' => '240000',
            //     'productsize' => '-',
            //     'productquantity' => '53',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'ORDO LIME TEES',
            //     'productdescription' => 'Made from 100% cotton in regular fit.




            //     model is wearing size Small (170cm/55kg)
            
            //     Weight: 500g',
            //     'sku' => 'AY.BLO-UA011',
            //     'productprice' => '120000',
            //     'productsize' => '-',
            //     'productquantity' => '66',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 3,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'AYE & CO CULTUS BLACK DAD CAP',
            //     'productdescription' => 'Black/Grey daddy cap. One size fits all.

            //     Design by AYE & Co
            
            //     Weight: 500g',
            //     'sku' => 'AY.BLO-UA015',
            //     'productprice' => '210000',
            //     'productsize' => '-',
            //     'productquantity' => '82',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 3,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'VISUM Grey Navy Dad Cap',
            //     'productdescription' => 'Grey dad cap with navy brim, made with 100% twill cotton. One size fits all.
            //     Weight: 500 gram',
            //     'sku' => 'AY.BLO-UA016',
            //     'productprice' => '190000',
            //     'productsize' => '-',
            //     'productquantity' => '96',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],



            // [
            //     'brandid' => 4,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Black False',
            //     'productdescription' => '-',
            //     'sku' => 'BW.BLO-UA005',
            //     'productprice' => '189000',
            //     'productsize' => '-',
            //     'productquantity' => '2',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 4,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'BWA Axy',
            //     'productdescription' => '-',
            //     'sku' => 'BW.BLO-UA006',
            //     'productprice' => '179000',
            //     'productsize' => '-',
            //     'productquantity' => '4',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 4,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'BWA Rawr Bear',
            //     'productdescription' => '-',
            //     'sku' => 'BW.BLO-UA007',
            //     'productprice' => '179000',
            //     'productsize' => '-',
            //     'productquantity' => '5',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 4,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'BWA Bomb Trackpants Men Trousers',
            //     'productdescription' => '-',
            //     'sku' => 'BW.BLO-UA002',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '7',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 4,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'BWA Black Caps',
            //     'productdescription' => '-',
            //     'sku' => 'BW.BLO-UA001',
            //     'productprice' => '140000',
            //     'productsize' => '-',
            //     'productquantity' => '9',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 4,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Beanie Hat BWA Beanie Hat',
            //     'productdescription' => '-',
            //     'sku' => 'BW.BLO-UA010',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '11',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 4,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'BWA Mask Newest Mouth Mask 03',
            //     'productdescription' => '-',
            //     'sku' => 'BW.BLO-UA011',
            //     'productprice' => '35000',
            //     'productsize' => '-',
            //     'productquantity' => '14',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 5,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'JK DIGNITY 03',
            //     'productdescription' => 'HIGHLY DURABLE WATER RESISTANT TASLAN FABRIC OUTDOOR BOMBER JACKET WITH  BLOODS LOGO AT FRONT',
            //     'sku' => 'BL.BLO-SI053',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '44',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'JK REVIVAL 01',
            //     'productdescription' => 'HIGHLY DURABLE WATER RESISTANT TASLAN FABRIC OUTDOOR BOMBER JACKET WITH  BLOODS LOGO AT FRONT',
            //     'sku' => 'BL.BLO-SH075',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '54',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'JK STANIS LEATHER JACKET',
            //     'productdescription' => 'Leather jacket type motorcycle jacket made of high quality sheepskin, wearing tartan and inside pockets, with Bloods signature button detail and YKK zipper.',
            //     'sku' => 'BL.BLO-TG081',
            //     'productprice' => '1650000',
            //     'productsize' => '-',
            //     'productquantity' => '44',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'LT SLICY 04',
            //     'productdescription' => 'PREMIUM LOTTO FABRIC ZIPPERED JACKET WITH BLOODS LOGO WOVEN PATCH AND ZIPPERED POCKET ON THE SIDE.',
            //     'sku' => 'BL.BLA-TF007',
            //     'productprice' => '160000',
            //     'productsize' => '-',
            //     'productquantity' => '84',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'SW DREAD',
            //     'productdescription' => 'PREMIUM YELLOW COTTON FLEECE PULLOVER HOODIE, WITH PRINTED PLASTISOL INK BLOODS ARTWORK',
            //     'sku' => 'BL.BLO-UB041',
            //     'productprice' => '315000',
            //     'productsize' => '-',
            //     'productquantity' => '84',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'SW KENNYS 01',
            //     'productdescription' => 'GREEN ARMY PREMIUM COTTON FLEECE HOODIE WITH BLOODS FONT PLASTISOL INK SCREEN PRINTING.',
            //     'sku' => 'BL.BLO-TL140',
            //     'productprice' => '299000',
            //     'productsize' => '-',
            //     'productquantity' => '74',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'T FLAGY 04',
            //     'productdescription' => 'ULTRASOFT COTTON COMBED 30’S T-SHIRT WITH PLASTISOL INK SCREEN PRINTING',
            //     'sku' => 'BL.BLO-TF144',
            //     'productprice' => '100000',
            //     'productsize' => '-',
            //     'productquantity' => '34',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'T HEARTES 03',
            //     'productdescription' => 'BLACK 30S COTTON SHORT SLEEVE T-SHIRT WITH BUTTON AND WOVEN BLOODS LOGO',
            //     'sku' => 'BL.BLO-TL140',
            //     'productprice' => '135000',
            //     'productsize' => '-',
            //     'productquantity' => '71',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 5,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'BX ANIMISM',
            //     'productdescription' => 'ANTI HEAT COTTON BLEND BOXER WITH BLOODS PLASTISOL INK SCREEN PRINTED.',
            //     'sku' => 'BL.BLO-UA106',
            //     'productprice' => '95000',
            //     'productsize' => '-',
            //     'productquantity' => '1',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'BX GRIFRICH',
            //     'productdescription' => 'MATERIAL : COTTON
            //     WITH BLOODS PLASTISOL INK SCREEN PRINTED',
            //     'sku' => 'BL.BLO-TC129',
            //     'productprice' => '67000',
            //     'productsize' => '-',
            //     'productquantity' => '10',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'BX TRICOLOR',
            //     'productdescription' => '-',
            //     'sku' => 'BL.BLO-UB204',
            //     'productprice' => '95000',
            //     'productsize' => '-',
            //     'productquantity' => '99',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'JN COATER 04',
            //     'productdescription' => 'MATERIAL : DENIM JEANS LONGPANTS WITH BLOODS WOVEN PATCH.
            //     COLOUR : DARK GREY',
            //     'sku' => 'BL.BLO-UB233',
            //     'productprice' => '329000',
            //     'productsize' => '-',
            //     'productquantity' => '89',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'JN ODRE 03',
            //     'productdescription' => 'Dark Blue Denim Jeans Longpants With Bloods Woven Patch.',
            //     'sku' => 'BL.BLO-UB126',
            //     'productprice' => '329000',
            //     'productsize' => '-',
            //     'productquantity' => '79',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'ST GROSSY 02',
            //     'productdescription' => 'Material: Cotton Fleece',
            //     'sku' => 'BL.BLO-UB072',
            //     'productprice' => '139000',
            //     'productsize' => '-',
            //     'productquantity' => '49',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'T FLAGY 04',
            //     'productdescription' => 'BLUE COTTON WITH FLAMINGGO PLASTISOL INK SCREEN PRINTED.',
            //     'sku' => 'BL.BLO-TL139',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '47',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 5,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => ' BLAZE RUNNER 01',
            //     'productdescription' => 'MULTI-TONED CHUNKY SNEAKERS WITH FLASH SIGNATURE AND STRIPE, SUEDE AND MESH MATERIAL, USING RUBBER OUTSOLE AND LACE UP FASTENING, ALSO DESIGNED WITH ROUND TOE',
            //     'sku' => 'BL.BLO-UA001',
            //     'productprice' => '390000',
            //     'productsize' => '-',
            //     'productquantity' => '75',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'BLAZE RUNNER 03',
            //     'productdescription' => 'MULTI-TONED CHUNKY SNEAKERS WITH FLASH SIGNATURE AND STRIPE, SUEDE AND MESH MATERIAL, USING RUBBER OUTSOLE AND LACE UP FASTENING, ALSO DESIGNED WITH ROUND TOE',
            //     'sku' => 'BL.BS-TE002',
            //     'productprice' => '390000',
            //     'productsize' => '-',
            //     'productquantity' => '49',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'LUGED HI 03',
            //     'productdescription' => 'CLASSIC HI-TOP SNEAKERS FOR A TIMELESS BASIC STYLE, TOP CANVAS MATERIAL WITH TEXTILE MATERIAL FOR THE INSOLE, MATCH WITH RUBBER SOLE AND LACE UP FASTENING, ALSO DESIGNED WITH ROUND TOE.',
            //     'sku' => 'BL.BS-TE007',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '94',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'LUGED LOW 03',
            //     'productdescription' => 'LOW TOP SNEAKERS WITH AN ICONIC CLASSIC DESIGN, TOP CANVAS MATERIAL WITH TEXTILE MATERIAL FOR THE INSOLE, A ROUND TOE MATCH WITH RUBBER SOLE AND LACE UP FASTENING',
            //     'sku' => 'BL.BS-TE011',
            //     'productprice' => '325000',
            //     'productsize' => '-',
            //     'productquantity' => '69',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'SD CAPITAL 01',
            //     'productdescription' => 'BLACK RUBBER WEBBING STRAP SANDALS WITH BLOODS WOVEN PATCH',
            //     'sku' => 'BL.BLO-UA113',
            //     'productprice' => '199000',
            //     'productsize' => '-',
            //     'productquantity' => '79',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'SD ZAGATO 02',
            //     'productdescription' => 'RUBBER WEBBING STRAP SANDALS WITH BLOODS WOVEN PATCH',
            //     'sku' => 'BL.BLO-TI059',
            //     'productprice' => '199000',
            //     'productsize' => '-',
            //     'productquantity' => '39',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Bevel Helment',
            //     'productdescription' => 'WHITE RETRO OPEN FACE SNI HELMET WITH SHIELD ON IT',
            //     'sku' => 'BL.BLO-UA091',
            //     'productprice' => '335000',
            //     'productsize' => '-',
            //     'productquantity' => '3',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'LY COMBO 01',
            //     'productdescription' => 'MATERIAL: PREMIUM POLYESTER
            //     COLOUR: BLACK ORANG GREY',
            //     'sku' => 'BL.BLO-UB155',
            //     'productprice' => '49000',
            //     'productsize' => '-',
            //     'productquantity' => '33',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'SACK RAIN PROTECTOR 06',
            //     'productdescription' => '-',
            //     'sku' => 'BL.BLO-UB190',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '36',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'SC WIRE',
            //     'productdescription' => 'Black Wool Cotton Socks With Bloods Embroidery Logo',
            //     'sku' => 'BL.BLO-UB117',
            //     'productprice' => '69000',
            //     'productsize' => '-',
            //     'productquantity' => '13',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'SL OUNWEL 02',
            //     'productdescription' => 'MATERIAL : COTTON FABRIC
            //     COLOUR : BLUE',
            //     'sku' => 'BL.BLO-UB203',
            //     'productprice' => '59000',
            //     'productsize' => '-',
            //     'productquantity' => '73',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'WATCHES BW0215 03',
            //     'productdescription' => 'ARMY PATTERN RUBBER STRAP STYLISH DIGITAL WATCH, WITH BLOODS LOGO AT FRONT',
            //     'sku' => 'BL.BLO-UA088',
            //     'productprice' => '345000',
            //     'productsize' => '-',
            //     'productquantity' => '19',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'WATCHES BW0215 03',
            //     'productdescription' => 'ARMY PATTERN RUBBER STRAP STYLISH DIGITAL WATCH, WITH BLOODS LOGO AT FRONT',
            //     'sku' => 'BL.BLO-UA088',
            //     'productprice' => '345000',
            //     'productsize' => '-',
            //     'productquantity' => '19',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'WL ARGED',
            //     'productdescription' => 'MATERIAL: PREMIUM SYNTHETIC LEATHER LONG WALLET WITH BLOODS METAL PATCH LOGO AND EMBOSSED PATTERN.
            //     COLOUR: BROWN',
            //     'sku' => 'BL.BLO-UB098',
            //     'productprice' => '109000',
            //     'productsize' => '-',
            //     'productquantity' => '59',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 5,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'WL SHIELD',
            //     'productdescription' => 'MATERIAL: PREMIUM SYNTHETIC LEATHER LONG WALLET WITH BLOODS METAL PATCH LOGO AND EMBOSSED PATTERN.
            //     COLOUR: BLACK',
            //     'sku' => 'BL.BLO-UB177',
            //     'productprice' => '99000',
            //     'productsize' => '-',
            //     'productquantity' => '53',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Gazelle Hi Black/Black',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA001',
            //     'productprice' => '338000',
            //     'productsize' => '-',
            //     'productquantity' => '61',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Gazelle Hi Blue Sky',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA002',
            //     'productprice' => '338000',
            //     'productsize' => '-',
            //     'productquantity' => '10',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Gazelle Hi Cappuccino',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA003',
            //     'productprice' => '338000',
            //     'productsize' => '-',
            //     'productquantity' => '1',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Gazelle Low Cappuccino',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA004',
            //     'productprice' => '298000',
            //     'productsize' => '-',
            //     'productquantity' => '6',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Gazelle Low Red',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA005',
            //     'productprice' => '298000',
            //     'productsize' => '-',
            //     'productquantity' => '11',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Gazelle Hi Black',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA010',
            //     'productprice' => '338000',
            //     'productsize' => '-',
            //     'productquantity' => '17',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Gazelle Hi Pink',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA011',
            //     'productprice' => '388000',
            //     'productsize' => '-',
            //     'productquantity' => '18',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Gazelle Low Blue Sky',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA011',
            //     'productprice' => '298000',
            //     'productsize' => '-',
            //     'productquantity' => '28',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 6,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Gazelle Low Navy',
            //     'productdescription' => 'The original silhouette of Compass was reborn in 2018. Re-designed to combine classic vintage with relevant modern details, the Gazelle Low is your ideal everyday footwear.
            //     Its low-cut design expresses an easy-going effortless style – versatile for all-ocassion and look.',
            //     'sku' => 'CO.BLO-UA013',
            //     'productprice' => '298000',
            //     'productsize' => '-',
            //     'productquantity' => '54',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 7,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'CROOZ DYNAMIC TSHIRT BLACK',
            //     'productdescription' => 'Weight: 250 Gram
            //     Category: Tops
            //     Etalase: T-Shirt',
            //     'sku' => 'CR.BLO-UA005',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 7,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'CROOZ X NINDITO VEST JACKET',
            //     'productdescription' => 'Weight: 250 Gram
            //     Categori: Tops
            //     Etalase: Semua Etalase',
            //     'sku' => 'CR.BLO-UA006',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '74',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 7,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'CROOZ X NINDITO VEST JACKET',
            //     'productdescription' => 'Weight: 300 Gram
            //     Category: Top
            //     Etalase: Outerwear',
            //     'sku' => 'CR.BLO-UA007',
            //     'productprice' => '700000',
            //     'productsize' => '-',
            //     'productquantity' => '64',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 7,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Crooz Camo Jogger',
            //     'productdescription' => 'Weight: 1.000 Gram
            //     Category: Bottom
            //     Etalase: Pants
            //     Crooz Camo Jogger Pants',
            //     'sku' => 'CR.BLO-UA003',
            //     'productprice' => '390000',
            //     'productsize' => '-',
            //     'productquantity' => '94',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 7,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Crooz Moss 3 Way Reversible Bag',
            //     'productdescription' => 'Weight: 500 Gram
            //     Category: Accesories
            //     Etalase: Bag
            //     Moss 2 Way Reversible Bag
            //     Dimension : W 39 x H 45 x D 15
            //     Function : Backpack & Totte Bag',
            //     'sku' => 'CR.BLO-UA001',
            //     'productprice' => '480000',
            //     'productsize' => '-',
            //     'productquantity' => '34',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 7,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'CROOZ OB NAVY RED SB',
            //     'productdescription' => 'Weight: 250 Gram
            //     Category: Accessories
            //     Etalase: HATS',
            //     'sku' => 'CR.BLO-UA001',
            //     'productprice' => '345000',
            //     'productsize' => '-',
            //     'productquantity' => '86',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 7,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'CROOZ GEAR UP M51 RAIN COAT',
            //     'productdescription' => 'Weight: 300 Gram
            //     Category: Tops
            //     Etalase: Outerwear',
            //     'sku' => 'CR.BLO-UA018',
            //     'productprice' => '749000',
            //     'productsize' => '-',
            //     'productquantity' => '88',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 7,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'CROOZ X CHOCOMOO TSHIRT YELLOW',
            //     'productdescription' => 'Weight: 250 Gram
            //     Category: Tops
            //     Etalase: T-Shirt',
            //     'sku' => 'CR.BLO-UA018',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '28',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 7,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'CROOZ X NINDITO ALL DAY CROOZ PURPLE TSHIRT KAOS',
            //     'productdescription' => 'Weight: 250 Gram
            //     Category: Top
            //     Etalase: T-Shirt',
            //     'sku' => 'CR.BLO-UA018',
            //     'productprice' => '470000',
            //     'productsize' => '-',
            //     'productquantity' => '80',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 7,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Crooz Heat Sweatpants',
            //     'productdescription' => 'Weight: 500 Gram
            //     Category: Bottom
            //     Etalase: Pants
            //     Crooz Heat Sweatpants
        
            //     2 right and left side pockets, 1 back pocket
        
            //     80% Cotton / 20% polyester fleece',
            //     'sku' => 'CR.BLO-UA014',
            //     'productprice' => '495000',
            //     'productsize' => '-',
            //     'productquantity' => '60',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 7,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Crooz FU Socks',
            //     'productdescription' => 'Weight: 150 Gram
            //     Category: Accessories
            //     Etalase: Accessories',
            //     'sku' => 'CR.BLO-UA014',
            //     'productprice' => '130000',
            //     'productsize' => '-',
            //     'productquantity' => '40',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 7,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'CROOZ HAGEN SIDE BAG',
            //     'productdescription' => 'Weight: 200 Gram
            //     Category: Waist Bag Pria
            //     Etalase: Bag
            //     NEW RELEASE
        
            //     CROOZ HAGEN SIDE BAG
        
            //     RUBBER ZIPPER WATER PROOF',
            //     'sku' => 'CR.BLO-UA011',
            //     'productprice' => '210000',
            //     'productsize' => '-',
            //     'productquantity' => '72',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 7,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Crooz Pin Pack',
            //     'productdescription' => 'Weight: 100 Gram
            //     Category: Accessories
            //     Etalase: Accessories',
            //     'sku' => 'CR.BLO-UA014',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '44',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 7,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'CROOZ STEPS CREAM TOTE BAG',
            //     'productdescription' => 'Weight: 250 Gram
            //     Category: Accessories
            //     Etalase: Bag',
            //     'sku' => 'CR.BLO-UA013',
            //     'productprice' => '180000',
            //     'productsize' => '-',
            //     'productquantity' => '64',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 8,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'DREAMBIRDS MASTER OF THE EARTH II SS TSHIRT (LIMITED EDITION)',
            //     'productdescription' => 'Gold series is the true identity of Dreambirds! Where painting & clothing come together into a work that deserves a collection. Each work is painted by the owner and in-house artist Dreambirds, Prisa Rianzi and Abinara. The Dreambirds Gold Series is manufactured using the best materials, built-up cotton combed 24s (no side sewing) and screen printing using best-in-class plastisol machines and paints. This product has its own advantages because it is made in a limited manner and the serial number of each product is attached, so that one is very different from one another, giving the taste we all want, exclusivity!',
            //     'sku' => 'DB.BLO-UA007',
            //     'productprice' => '199000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 8,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'DREAMBIRDS THE LURKER SS TSHIRT (LIMITED EDITION)',
            //     'productdescription' => 'Gold series is the true identity of Dreambirds! Where painting & clothing come together into a work that deserves a collection. Each work is painted by the owner and in-house artist Dreambirds, Prisa Rianzi and Abinara. The Dreambirds Gold Series is manufactured using the best materials, built-up cotton combed 24s (no side sewing) and screen printing using best-in-class plastisol machines and paints. This product has its own advantages because it is made in a limited manner and the serial number of each product is attached, so that one is very different from one another, giving the taste we all want, exclusivity!',
            //     'sku' => 'DB.BLO-UA008',
            //     'productprice' => '199000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 8,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'DREAMBIRDS DREAMCAPS V USHANKA HAT CORDUROY',
            //     'productdescription' => 'Gold series is the true identity of Dreambirds! Where painting & clothing come together into a work that deserves a collection. Each work is painted by the owner and in-house artist Dreambirds, Prisa Rianzi and Abinara. The Dreambirds Gold Series is manufactured using the best materials, built-up cotton combed 24s (no side sewing) and screen printing using best-in-class plastisol machines and paints. This product has its own advantages because it is made in a limited manner and the serial number of each product is attached, so that one is very different from one another, giving the taste we all want, exclusivity!',
            //     'sku' => 'DB.BLO-UA001',
            //     'productprice' => '100000',
            //     'productsize' => '-',
            //     'productquantity' => '26',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 8,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'DREAMBIRDS TIGRANTULA FACIAL MASK',
            //     'productdescription' => 'Gold series is the true identity of Dreambirds! Where painting & clothing come together into a work that deserves a collection. Each work is painted by the owner and in-house artist Dreambirds, Prisa Rianzi and Abinara. The Dreambirds Gold Series is manufactured using the best materials, built-up cotton combed 24s (no side sewing) and screen printing using best-in-class plastisol machines and paints. This product has its own advantages because it is made in a limited manner and the serial number of each product is attached, so that one is very different from one another, giving the taste we all want, exclusivity!',
            //     'sku' => 'DB.BLO-UA002',
            //     'productprice' => '53000',
            //     'productsize' => '-',
            //     'productquantity' => '5',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 8,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'DREAMBIRDS SPECTRUM II TSHIRT (SPECIAL FX)',
            //     'productdescription' => 'A new Dreambirds upgrade product from the COLLECTION ONE VOL.2 collection that has its own uniqueness! ~ SPECTRUM II uses a durable polyflex heat transfer material with a lightning effect giving a luxurious color changing impression. This product is not made in large quantities and is produced using the best ingredients to provide maximum results and is durable!',
            //     'sku' => 'DB.BLO-UA017',
            //     'productprice' => '199000',
            //     'productsize' => '-',
            //     'productquantity' => '55',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 8,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'DREAMBIRDS FUNDAMENTAL POLO CAPS',
            //     'productdescription' => '-',
            //     'sku' => 'DB.BLO-UA015',
            //     'productprice' => '199000',
            //     'productsize' => '-',
            //     'productquantity' => '58',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 9,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Classic Garage – Raglan Navy Cream',
            //     'productdescription' => 'Made from 24S cotton with an Enzyme pre-washed treatment Developed with riders, perfect for every day use and comfortable riding experience. Asian regular fit. Please check our sizing chart for your perfect fit',
            //     'sku' => 'EC.BLO-UA005',
            //     'productprice' => '275000',
            //     'productsize' => '-',
            //     'productquantity' => '85',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 9,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Hoodie “Support The Culture”',
            //     'productdescription' => 'Light weight hoodie
            //     Unsanforized fleece, will shrink upon the first wash (consider an upsize)
            //     Plastisol Ink (do not iron on surface)',
            //     'sku' => 'EC.BLO-UA006',
            //     'productprice' => '495000',
            //     'productsize' => '-',
            //     'productquantity' => '89',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 9,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Local Garage Cat – Navy',
            //     'productdescription' => 'Made from 24S cotton with an Enzyme pre-washed treatment Developed with riders, perfect for every day use and comfortable riding experience. Asian regular fit. Please check our sizing chart for your perfect fit.',
            //     'sku' => 'EC.BLO-UA007',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '77',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 9,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Elders Co X Supercub 125 Glove – Hornet',
            //     'productdescription' => 'This is a collaboration between Elders Company with Honda Street Cub C125. Elders Company teamed up with Astra Honda Motors (AHM) to celebrate the renaissance of Honda’s most awaited Vintage small bike, Super Cub C125. Size chart (palm circumference) Small: 18-19 cm Medium: 20-21 cm Large: 22-23 cm',
            //     'sku' => 'EC.BLO-UA001',
            //     'productprice' => '775000',
            //     'productsize' => '-',
            //     'productquantity' => '57',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 9,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Hornet Gloves – Black - 690K',
            //     'productdescription' => 'Tight cut, Made from quality Goat skin, Fine construction with anatomical palm panels for abrasion resistance and traction. Price Include express shipping / delivery Via DHL (5 days). To find out your glove size, measure (in inches) around the widest part of your hand with a tape measure. Use your dominant hand. Size chart (palm circumference) Small: 18-19 cm Medium: 20-21 cm Large: 22-23 cm Extra Large: 24-25 cm
            //     SKU: EC.BLO-UA002',
            //     'sku' => 'EC.BLO-UA002',
            //     'productprice' => '690000',
            //     'productsize' => '-',
            //     'productquantity' => '74',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 9,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Space',
            //     'productdescription' => 'Because we just can’t get enough. Here is Space Helmet. Like nothing you have ever experience before. Small shelled, Chrome Visor, You will not ask for more. Designed in Japan by Itsuki Tsutsui, a true artisan of modern age. Comes with retractable chrome and clear visors. Space Helmet are made with great care regarding safety. However, they might not conform to the safety requirements of your country (DOT/ECE). For this reason, our helmets are classified as ‘novelty helmets’.',
            //     'sku' => 'EC.BLO-UA003',
            //     'productprice' => '4375000',
            //     'productsize' => '-',
            //     'productquantity' => '7',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 9,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Utility Waist Bag – Navy',
            //     'productdescription' => 'Durable nylon piece that’s built upon the local crafter utilitarian ethos. Kitted out with a total of five functional pockets, the trusty canvas accessory is topped simply with a woven brand patch.',
            //     'sku' => 'EC.BLO-UA004',
            //     'productprice' => '245000',
            //     'productsize' => '-',
            //     'productquantity' => '8',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 9,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Hot Rod – Forest Green',
            //     'productdescription' => 'Made from 24S cotton with an Enzyme pre-washed treatment Developed with riders, perfect for every day use and comfortable riding experience. Asian regular fit. Please check our sizing chart for your perfect fit.',
            //     'sku' => 'EC.BLO-UA015',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '81',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 9,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Womens Souvenir Jacket',
            //     'productdescription' => 'Durable nylon piece that’s built upon the local crafter utilitarian ethos. Kitted out with a total of five functional pockets, the trusty canvas accessory is topped simply with a woven brand patch.',
            //     'sku' => 'EC.BLO-UA004',
            //     'productprice' => '1475000',
            //     'productsize' => '-',
            //     'productquantity' => '33',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 9,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Work Shirt “Snake” – Olive',
            //     'productdescription' => 'This shirt is made with cotton poplin, with a classic premium embro.',
            //     'sku' => 'EC.BLO-UA017',
            //     'productprice' => '500000',
            //     'productsize' => '-',
            //     'productquantity' => '39',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 9,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => '5 Panel Hat – Square',
            //     'productdescription' => 'Full soft cotton caps with woven label.
            //     One size fits all.',
            //     'sku' => 'EC.BLO-UA010',
            //     'productprice' => '125000',
            //     'productsize' => '-',
            //     'productquantity' => '49',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 9,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Elders Ring Ftw – Gold',
            //     'productdescription' => 'This is a cool collection of “Ring” made by Elders Garage.',
            //     'sku' => 'EC.BLO-UA011',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '47',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 10,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Eggboy Comic',
            //     'productdescription' => '-',
            //     'sku' => 'GS.BLO-UA002',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '50',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 10,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Jesus Is King',
            //     'productdescription' => '-',
            //     'sku' => 'GS.BLO-UA003',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '5',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 10,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Stranger Things Gang',
            //     'productdescription' => '-',
            //     'sku' => 'GS.BLO-UA004',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '43',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 10,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Goat Socks',
            //     'productdescription' => 'color. multicolor
            //     100% cotton
            //     sizes. one size',
            //     'sku' => 'GS.BLO-UA001',
            //     'productprice' => '49000',
            //     'productsize' => '-',
            //     'productquantity' => '34',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 10,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => '80s Putin Tee Socks',
            //     'productdescription' => 'color. black / white / pale yellow
            //     100% cotton
            //     sizes. extra small to extra extra large',
            //     'sku' => 'GS.BLO-UA011',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '24',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 10,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Money Heist Tee Putin Tee Socks',
            //     'productdescription' => 'color. black / white / pale yellow
            //     100% cotton
            //     sizes. extra small to extra extra large',
            //     'sku' => 'GS.BLO-UA012',
            //     'productprice' => '240000',
            //     'productsize' => '-',
            //     'productquantity' => '66',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 10,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Stop Fallin in Love Tshirt',
            //     'productdescription' => 'color. black / pale purple / neon green
            //     100% cotton
            //     sizes. extra small to extra extra large',
            //     'sku' => 'GS.BLO-UA015',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 10,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Wish We Were Real Socks',
            //     'productdescription' => 'color. multicolor
            //     100% cotton
            //     sizes. one size',
            //     'sku' => 'GS.BLO-UA010',
            //     'productprice' => '49000',
            //     'productsize' => '-',
            //     'productquantity' => '65',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Bullitt Raw Dark Blue Trucker Denim Jacket',
            //     'productdescription' => 'Denim jacket has been a wardrobe staple for every gentlemen. Whether its black, blue washed, or indigo blue. You will find everyone wearing it for its toughness and versatility. We also added a functional yet stylish feature: A flannel hidden pocket to secure your essentials, to complete your daily hustle. Now it\'s good to go!

            //     Specification:
            //     Durable 120z denim fabric
            //     Regular fit
            //     Hidden pocket',
            //     'sku' => 'GI.BLO-UA022',
            //     'productprice' => '169000',
            //     'productsize' => '-',
            //     'productquantity' => '85',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Dover Black Shirt LS',
            //     'productdescription' => 'Long sleeve shirt is an item that a guy must have. Guaranteed you won\'t go wrong with this long sleeve shirt! Going to non-formal events, will look mature and neat. To a semi-formal event, it\'s perfect! To formal events, the more suitable! The fittings are also really good, really fit for general postures in Indonesia. You will look classy and more mature!

            //     Features:
            //     -100% High quality cotton
            //     -Multifunctional chest pockets
            //     -Button spare
            //     -Washing instruction',
            //     'sku' => 'GI.BLO-UA024',
            //     'productprice' => '110000',
            //     'productsize' => '-',
            //     'productquantity' => '81',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'GutenInc - Fantasy White T-Shirt',
            //     'productdescription' => 'Guys! who doesn\'t have a graphic T-shirt? This is a unisex item that you must have! Graphic T-shirts are perfect for casual wear, or as underwear for shirts and jackets that are buttoned / reslering open. Graphic T-shirts from Guten inc are available in 2 favorite colors, black and white. The artwork is printed using screen printing techniques with plastisol ink and curing and press finishing techniques, thereby enhancing the character of the design.',
            //     'sku' => 'GI.BLO-UA027',
            //     'productprice' => '79000',
            //     'productsize' => '-',
            //     'productquantity' => '61',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Guten Inc - Smith Camp Collar Khaki',
            //     'productdescription' => 'Camp collar shirt has been a fashion statement lately. A minimalist, laid back
            //     vibes is set to level up your chill time. It is very nice to be worn in a
            //     hangout, in a party, or any casual occasion. This is nice to be worn either
            //     buttoned or unbuttoned. You can pair this with any type of non-formal outfit.
            
            
            //     Specification:
            
            
            //     100% cotton fabric
            //     Regular fit
            //     Spare button on washing instruction label',
            //     'sku' => 'GI.BLO-UA025',
            //     'productprice' => '110000',
            //     'productsize' => '-',
            //     'productquantity' => '96',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'GutenInc - Fantasy White T-Shirt',
            //     'productdescription' => 'Guys! who doesn\'t have a graphic T-shirt? This is a unisex item that you must have! Graphic T-shirts are perfect for casual wear, or as underwear for shirts and jackets that are buttoned / reslering open. Graphic T-shirts from Guten inc are available in 2 favorite colors, black and white. The artwork is printed using screen printing techniques with plastisol ink and curing and press finishing techniques, thereby enhancing the character of the design.',
            //     'sku' => 'GI.BLO-UA025',
            //     'productprice' => '79000',
            //     'productsize' => '-',
            //     'productquantity' => '75',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Malibu blue Windbreaker - Men\'s Jacket Guteninc Coach Jacket',
            //     'productdescription' => 'Garment
            //     Windbreaker jacket
            
            //     Category:
            //     Jacket
            
            //     Inspiration/roots:
            //     Techwear, outdoor inspired fashion, casual rainwear
            
            //     Fabric/material:
            //     High durability water repellent nylon parachute, lightweight nylon taffeta for
            //     lining
            
            //     Fitting:
            //     Regular fit
            
            //     Features:
            //     High quality waterproof zipper
            //     hand pockets
            //     hidden pocket
            //     adjustable neck drawstring',
            //     'sku' => 'GI.BLO-UA028',
            //     'productprice' => '179000',
            //     'productsize' => '-',
            //     'productquantity' => '77',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 11,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Guteninc - Andrew Boardshort Cream',
            //     'productdescription' => 'Garment:
            //     Andrew boardshort
             
            //     Category:
            //     Pants
             
            //     Inspiration:
            //     casual sportswear, summer outfit
             
            //     Fabric:
            //     Soft premium corduroy
             
            //     Fitting:
            //     Regular fit
            
            //     Quick review:
            //     Boardshort is a trendy item for a casual occasion or light sports activities such as cycling.
             
            //     Features:
            //     Pocket for storing stuff safely',
            //     'sku' => 'GI.BLO-UA003',
            //     'productprice' => '100000',
            //     'productsize' => '-',
            //     'productquantity' => '37',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'GutenInc - Leone Cargo Pants Olive',
            //     'productdescription' => 'Cargo pants have hit again recently, guys! Apart from being casual and durable, cargo pants have many functions, making them perfect for mobility and daily work needs, especially for field workers. Cargo pants from Guten inc have a special feature, namely the waist band fastening system with a strap, making it very useful to replace the belt! In addition, we apply a pocket cover to the waist pocket to make the items inside are safer from the risk of falling!

            //     Features:
            //     -Regular fit
            //     - soft premium twill material
            //     -Rubber and strap fastening system
            //     -6 versatile pockets',
            //     'sku' => 'GI.BLO-UA004',
            //     'productprice' => '140000',
            //     'productsize' => '-',
            //     'productquantity' => '97',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Guteninc Fabio Black Chino Pants',
            //     'productdescription' => 'Boys! Try asking your friends who doesn\'t have chinos? Not even one, right? Yes! This item is indeed a must-have item for guys because it is so versatile! Want to go to the Mall, want to go to a formal event, want to ride a motorbike, or just hang out at a favorite venue, you name it! These pants are suitable for almost any situation! The fittings are really good, the slim fit is just right! There are various colors to complete your chosen outfit! Buy now before they run out!

            //     Features:
            //     -100% High quality twill cotton
            //     -Small multipurpose pouch
            //     -Button spare
            //     -Washing instruction
            //     - Stretch / flexible material',
            //     'sku' => 'GI.BLO-UA005',
            //     'productprice' => '135000',
            //     'productsize' => '-',
            //     'productquantity' => '76',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Rambler Dark Blue Washed Denim',
            //     'productdescription' => 'Slim stretch denim pants is made for urban hustler. It is made for the one who moves a lot. It is lightweight, breathable, and it will perfectly fit your leg perfectly. Norton stretch denim comes in timeless color choice, blue wash and light blue wash.

            //     Specification:
            //     13,5 oz stretch denim fabric
            //     Slim fit
            //     Chain stitched inseam and waistband
            //     5 pockets include 1 small pocket',
            //     'sku' => 'GI.BLO-UA030',
            //     'productprice' => '160000',
            //     'productsize' => '-',
            //     'productquantity' => '56',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Triumph Blue Washed Stretch Denim Pants',
            //     'productdescription' => 'Slim stretch denim pants is made for urban hustler. It is made for the one who moves a lot. It is lightweight, breathable, and it will perfectly fit your leg perfectly. Norton stretch denim comes in timeless color choice, blue wash and light blue wash.

            //     Specification:
            //     13,5 oz stretch denim fabric
            //     Slim fit
            //     Chain stitched inseam adnd waistband
            //     5 pockets include 1 small pocket',
            //     'sku' => 'GI.BLO-UA032',
            //     'productprice' => '165000',
            //     'productsize' => '-',
            //     'productquantity' => '36',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 11,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Campbell Classic Sneakers',
            //     'productdescription' => 'Classic black and white sneakers is a staple for almost everyone in almost every occasion nowadays. Some of them are mr. President in a meeting, guests at weddings, or the youngsters at local eatery, just name it. This type of footwear is essential and versatile so you can\'t go wrong with it. Name your outfit, and we got your sneakers choice here!

            //     Specification:
            //     Sturdy canvas fabric upper
            //     Cementing construction
            //     Leather piping
            //     Contrast stitching
            //     Soft insole',
            //     'sku' => 'GI.BLO-UA009',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '56',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Caroe Wingtip CH Brown',
            //     'productdescription' => 'We\'ve transformed a traditional leather wingtip into a thoroughly modern update. Caroe Wingtip Shoes are made from brown crazy horse leather and have exceptionally lightweight rubber soles.

            //     This shoes is perfectly match with Chester T-Shirt and Street Wanderers Denim.
            
            //     Specification
             
            
            //     Caroe Wingtip CH Light Brown
            //     Color: Brown
            //     Black Stitch
            //     Material: 100% Crazy Horse
            //     4,1 inch tall
            //     Outsole Nicaneo
            //     High sturdy cementing construction
            //     High quality leather
            //     Made in INDONESIA',
            //     'sku' => 'GI.BLO-UA010',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '79',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Guten Inc - Quincy Low Military Green',
            //     'productdescription' => '- Low Top Sneaker
            //     - Color Black/Green (Upper), White (Outsole)
            //     - Branding logo at leather Tongue Pull Tab and Lateral Quarter side
            //     - Stitching Deco at Quarter
            //     - Lace-up fastening system
            //     - Premium Suede on the Upper
            //     - Premium Leather on the Heel
            //     - Canvas material on the Tongue
            //     - Mesh material at Lining and Insole
            //     - Rubber Outsole
            //     - Made in Indonesia',
            //     'sku' => 'GI.BLO-UA008',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '46',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Campbell Classic Sneakers',
            //     'productdescription' => '- Low Top Sneaker
            //     - Color Black/Grey (Upper), White/Grey (Outsole)
            //     - Branding embossed logo at the Tongue
            //     - Stitching Deco at heel cap and Perforated Deco at Vamp area
            //     - Lace-up fastening system
            //     - Premium Leather on the Quarter, Eyestay, Tongue Bottom and Heel Patch
            //     - Premium Suede on Quarter/Heel Accent
            //     - Mesh material at Lining and Insole
            //     - Achilles Cover inside the collar opening
            //     - Webbing Heel Pull Tab
            //     - Rubber Outsole
            //     - Made in Indonesia',
            //     'sku' => 'GI.BLO-UA020',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '83',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Lucas Cool Grey',
            //     'productdescription' => '- Low Top Sneaker
            //     - Color Grey (Upper), White/Grey (Outsole)
            //     - Branding embossed logo at Tongue and Heel Patch
            //     - Stitching and Perforated Deco at Quarter
            //     - Lace-up fastening system
            //     - Premium Leather on the Quarter, Eyestay, Tongue Bottom and Heel Patch
            //     - Premium Suede on Toe Cap, Heel and Tongue Top
            //     - Synthetic Goat Leather combined with Mesh at Lining and Insole
            //     - Rubber Outsole
            //     - Made in Indonesia',
            //     'sku' => 'GI.BLO-UA021',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '42',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 11,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Ring Liberty Black Matte',
            //     'productdescription' => 'Made from stainless steel material. Available in 2 color variants. Designed for you who wants to look exceptional because this ring can really expose your true character and inner personality. 

            //     So pick your size, from 7mm, 8mm to 10mm
            
            //     Specification:
            //     Stainless steel material.',
            //     'sku' => 'GI.BLO-UA001',
            //     'productprice' => '120000',
            //     'productsize' => '-',
            //     'productquantity' => '29',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Ring Liberty Gold Matte',
            //     'productdescription' => 'Made from stainless steel material. Available in 2 color variants. Designed for you who wants to look exceptional because this ring can really expose your true character and inner personality. 

            //     So pick your size, from 7mm, 8mm to 10mm
            
            //     Specification:
            //     Stainless steel material.',
            //     'sku' => 'GI.BLO-UA002',
            //     'productprice' => '120000',
            //     'productsize' => '-',
            //     'productquantity' => '8',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'GutenInc - Dead Chills Blue Hoodie',
            //     'productdescription' => 'Pullover Hoodie jacket with High Cotton Fleece material with manual screen printing and features a pocket plus a hoodie strap to adjust the hoodie stretch.',
            //     'sku' => 'GI.BLO-UA065',
            //     'productprice' => '160000',
            //     'productsize' => '-',
            //     'productquantity' => '17',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'GutenInc - OG College Grey T-Shirt',
            //     'productdescription' => 'Guys! who doesn\'t have a graphic T-shirt? This is a unisex item that you must have! Graphic T-shirts are perfect for casual wear, or as underwear for shirts and jackets that are buttoned / reslering open. Graphic T-shirts from Guten inc are available in 2 favorite colors, black and white. The artwork is printed using screen printing techniques with plastisol ink and curing and press finishing techniques, thereby enhancing the character of the design.',
            //     'sku' => 'GI.BLO-UA066',
            //     'productprice' => '80000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'OG College Brown Hoodie',
            //     'productdescription' => 'Pullover Hoodie jacket with High Cotton Fleece material with manual screen printing and features a pocket plus a hoodie strap to adjust the hoodie stretch.',
            //     'sku' => 'GI.BLO-UA067',
            //     'productprice' => '160000',
            //     'productsize' => '-',
            //     'productquantity' => '21',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 11,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Guten Inc- Lucas White Gum',
            //     'productdescription' => '- Low Top Sneaker
            //     - Color White (Upper), Gum (Outsole)
            //     - Branding embossed logo at Tongue and Heel Patch
            //     - Stitching and Perforated Deco at Quarter
            //     - Lace-up fastening system
            //     - Premium Leather on the Quarter, Eyestay, Tongue Bottom and Heel Patch
            //     - Premium Suede on Toe Cap, Heel and Tongue Top
            //     - Synthetic Goat Leather combined with Mesh at Lining and Insole
            //     - Rubber Outsole
            //     - Made in Indonesia
            //     Categories: Shoes, Women',
            //     'sku' => 'GI.BLO-UA070',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '23',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Guteninc - Marty Sneakers White',
            //     'productdescription' => 'This casual and timeless designed white sneakers with gum sole is the great shoes 

            //     that everyone must have because of its versatility.  So grab it fast before its gone buddy!
                
            //     Specification
                 
                
            //     Style: Marty Sneakers White
            //     Color: White + Gum (sole)
            //     Material: Canvas & floater Leather
            //     Rubber outsole
            //     Made in INDONESIA',
            //     'sku' => 'GI.BLO-UA071',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '25',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Ralph Sandal Cream',
            //     'productdescription' => 'Slipper sandals are the most casual and cozy footwear! You can use this everyday without being complicated and still stylish! This is perfect for wearing with t-shirts and shorts during holidays or relaxing moments.

            //     Features:
            //     - Premium phylon soles
            //     -Premium foam for maximum comfort',
            //     'sku' => 'GI.BLO-UA072',
            //     'productprice' => '79000',
            //     'productsize' => '-',
            //     'productquantity' => '29',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            
            // [
            //     'brandid' => 11,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Frins White Slingbag - Guteninc',
            //     'productdescription' => 'Sometimes, urban mobility requires a versatile bag that can store a lot more
            //     than just your essentials. At that moment where waistbag, totebag, and backpack
            //     are not an option, here comes the sling bag, the \'something in between\'. It
            //     allows you to be practical, fashionable, and surprisingly have sufficent space
            //     to store your belongings.
                
                 
            //     Item:
            //     Slingbag
                 
            //     Category: 
            //     Bag
                 
            //     Inspiration/roots:
            //     Japanese streetwear/ minimalist aesthetic
                 
            //     Fabric/material:
            //     High grade soft canvas
                 
            //     Dimension:
            //     Height: 19 cm
            //     Width: 15 cm
                 
            //     Quick review:
            //     Sling bag or sacoche bag is the new essential storage for commuter and stroller. The \'minimalist\' aesthetic allows you to pair them with any type of your outfit.
                 
            //     Features:
            //     Multiple compartments
            //     Magnet Button
            //     Guten inc signature patch
            //     adjustable strap length',
            //     'sku' => 'GI.BLO-UA075',
            //     'productprice' => '80000',
            //     'productsize' => '-',
            //     'productquantity' => '42',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 11,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Masker Tali Strap Extender - Guteninc',
            //     'productdescription' => 'Strap / hanger / necklace / cloth mask strap.
            //     Unisex
                
            //     Package Contents: 1pcs mask strap / 65Cm rope length
            //     + FREE MASK
                
            //     Please select a color via the variant that has been provided.
                
            //     Love losing masks?
            //     Confused about storing masks while eating / ablution / others
            //     Now you don\'t have to bother
                
            //     Fashionable design matches your everyday outfit. Many color choices, choose according to your taste.
            //     Specification:
            //     Stainless steel material.',
            //     'sku' => 'GI.BLO-UA081',
            //     'productprice' => '120000',
            //     'productsize' => '-',
            //     'productquantity' => '46',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 12,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Chirps Rain Poncho',
            //     'productdescription' => '-',
            //     'sku' => 'HS.BLO-UA003',
            //     'productprice' => '349000',
            //     'productsize' => '-',
            //     'productquantity' => '56',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 12,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Umbra Storm',
            //     'productdescription' => '-',
            //     'sku' => 'HS.BLO-UA002',
            //     'productprice' => '879000',
            //     'productsize' => '-',
            //     'productquantity' => '78',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 12,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Argo Blach',
            //     'productdescription' => '-',
            //     'sku' => 'HS.BLO-UA001',
            //     'productprice' => '759000',
            //     'productsize' => '-',
            //     'productquantity' => '94',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 12,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Piece Simo Sling Bag Blach',
            //     'productdescription' => '-',
            //     'sku' => 'HS.BLO-UA014',
            //     'productprice' => '279000',
            //     'productsize' => '-',
            //     'productquantity' => '60',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 13,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Jack Roastery Tee Orange',
            //     'productdescription' => 'Santiago Rodas has always destined to be the successor of his father’s coffee farm.

            //     When he was a kid, the whole farm field is his playground. He gets really accustomed to coffee planting.
            
            //     And by the time he grew up, he knew which is good coffee bean just by glancing at it.
            
            //     Now he is the topmost successful coffee producer. Well… until he joins Jack Brothers Coffee Industry as the sole best-handpicked coffee producer.',
            //     'sku' => 'JC.BLO-UA006',
            //     'productprice' => '229000',
            //     'productsize' => '-',
            //     'productquantity' => '33',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 13,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Jackhammer Coffee Industry Tee Red',
            //     'productdescription' => 'It’s struck into The Master Head that all he needs is a pinch of forbidden spices that he found when he was in training.

            //     So later that night, he started to brew the Ultimate Coffee again, and now with the added spices. The process was tough and tedious, but nevertheless, he did it.
            
            //     The first sip was tasteless with a hint of nutty aftertaste. Suddenly a burst of taste came into his mouth, and then throat, and then- Stomache.
            
            //     All of a sudden, he realized that he is half skeleton now. But, he felt his sense of taste quadrupled. Without bothering his looks now, he rushed to his younglings and told them to drink the Ultimate Coffee.
            
            //     Trough the same process all the younglings turns into a half skeleton. And then there The Master said ” For if we all want the Ultimate Coffee in our hand, we must make the Ultimate Sacrifice. And for now and on we shall be known as The Jack Brothers Coffee Industry',
            //     'sku' => 'JC.BLO-UA007',
            //     'productprice' => '229000',
            //     'productsize' => '-',
            //     'productquantity' => '43',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 13,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Axis Cargo Pants Brown',
            //     'productdescription' => '-',
            //     'sku' => 'JC.BLO-UA002',
            //     'productprice' => '499000',
            //     'productsize' => '-',
            //     'productquantity' => '34',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 13,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Combat Short Pants Olive',
            //     'productdescription' => '-',
            //     'sku' => 'JC.BLO-UA003',
            //     'productprice' => '349000',
            //     'productsize' => '-',
            //     'productquantity' => '75',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 13,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'High 3-Way Duffle Bag Brown',
            //     'productdescription' => '-',
            //     'sku' => 'JC.BLO-UA001',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '64',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 13,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Ultimate Master Tee Grey',
            //     'productdescription' => 'The Coffee Master was once just a mere coffee enthusiast who worked on his uncle’s small cafe.

            //     After gaining some knowledge, he tried to be a full-fledged barista and gaining recognition.
            
            //     His passion for coffee keeps growing as he stated in his heart that coffee is the reason he woke up in the morning.
            
            //     Years go by, and his reputation grows rapidly. People started to honour him.
            
            //     Ultimately he got acknowledged by the CQI to become their associate Q Grader and viewed as the Coffee Master.',
            //     'sku' => 'JC.BLO-UA015',
            //     'productprice' => '229000',
            //     'productsize' => '-',
            //     'productquantity' => '94',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 13,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Jakchammer x W.Essentiels Type-073 Cargo Pants Green',
            //     'productdescription' => '-',
            //     'sku' => 'JC.BLO-UA015',
            //     'productprice' => '349000',
            //     'productsize' => '-',
            //     'productquantity' => '70',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 13,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Basic Face Mask Wabash',
            //     'productdescription' => '-',
            //     'sku' => 'JC.BLO-UA010',
            //     'productprice' => '59000',
            //     'productsize' => '-',
            //     'productquantity' => '72',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 13,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Pole Bucket Hat Olive',
            //     'productdescription' => '-',
            //     'sku' => 'JC.BLO-UA011',
            //     'productprice' => '129000',
            //     'productsize' => '-',
            //     'productquantity' => '50',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Adior Crewneck',
            //     'productdescription' => 'Fabric : Fleece',
            //     'sku' => 'KA.BLO-UA014',
            //     'productprice' => '330000',
            //     'productsize' => '-',
            //     'productquantity' => '45',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Bulog Long Sleeve Tee',
            //     'productdescription' => 'Collaboration with @pscyclekit.
            //     Fabric : Japan heavy cotton with plastisol screen print on graphic.',
            //     'sku' => 'KA.BLO-UA015',
            //     'productprice' => '185000',
            //     'productsize' => '-',
            //     'productquantity' => '70',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Jelly Black Short Tee',
            //     'productdescription' => 'Fabric : Japan heavy cotton with plastisol screen print on graphic.',
            //     'sku' => 'KA.BLO-UA016',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Lockdown Long Sleeve Tee',
            //     'productdescription' => 'Fabric : Japan heavy cotton with plastisol screen print on graphic. Tyvek and woven label on details.',
            //     'sku' => 'KA.BLO-UA017',
            //     'productprice' => '180000',
            //     'productsize' => '-',
            //     'productquantity' => '31',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Moon Doa Restu Long Sleeve Tee',
            //     'productdescription' => 'Fabric : Japan heavy cotton with plastisol screen print on graphic.',
            //     'sku' => 'KA.BLO-UA018',
            //     'productprice' => '180000',
            //     'productsize' => '-',
            //     'productquantity' => '51',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 14,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Camo Red Boxer',
            //     'productdescription' => 'Fabrics : Cotton Japan with label woven embroidery finishing.',
            //     'sku' => 'KA.BLO-UA006',
            //     'productprice' => '75000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - DNB Short Pants',
            //     'productdescription' => 'Fabrics and details : polyester easy dry with print on patches and label woven embroidery finishing, screen print on back.
            //     Type : board short / short pants',
            //     'sku' => 'KA.BLO-UA006',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '89',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Pulp Purple Short Pants',
            //     'productdescription' => 'Fabrics and details : Corduroy Purple with label woven embroidery finishing.
            //     Type : board short / short pants',
            //     'sku' => 'KA.BLO-UA010',
            //     'productprice' => '75000',
            //     'productsize' => '-',
            //     'productquantity' => '26',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Queen Short Pants',
            //     'productdescription' => 'Fabrics and details : Corduroy Purple with label woven embroidery finishing.
            //     Type : board short / short pants',
            //     'sku' => 'KA.BLO-UA011',
            //     'productprice' => '225000',
            //     'productsize' => '-',
            //     'productquantity' => '28',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Scab Orange Boxer',
            //     'productdescription' => 'Fabrics : Cotton Japan with label woven embroidery finishing.',
            //     'sku' => 'KA.BLO-UA012',
            //     'productprice' => '75000',
            //     'productsize' => '-',
            //     'productquantity' => '82',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Bench Beanie - Maroon',
            //     'productdescription' => 'Type : Beanie with woven patch embroidery finishing
            //     Fabric : Knitted
            //     Size : One size fits all',
            //     'sku' => 'KA.BLO-UA001',
            //     'productprice' => '140000',
            //     'productsize' => '-',
            //     'productquantity' => '47',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Buck Bucket Hat',
            //     'productdescription' => 'Fabric : Twill',
            //     'sku' => 'KA.BLO-UA002',
            //     'productprice' => '160000',
            //     'productsize' => '-',
            //     'productquantity' => '49',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Leran Face mask',
            //     'productdescription' => 'Type : 2 layer face masker plus corona finger/keychain
            //     Fabric : polyester and cotton with woven label graphics emboidery finishing with plastic fluorescent keychain for bonus.',
            //     'sku' => 'KA.BLO-UA003',
            //     'productprice' => '45000',
            //     'productsize' => '-',
            //     'productquantity' => '59',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Police Socks',
            //     'productdescription' => 'Material : One size fits all',
            //     'sku' => 'KA.BLO-UA004',
            //     'productprice' => '70000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Kamengski - Potra (2 Mode Bag)',
            //     'productdescription' => 'Material : Cordura fabrics and woven label graphics
            //     Dimensions : 20 x 3 x 14 cm',
            //     'sku' => 'KA.BLO-UA005',
            //     'productprice' => '180000',
            //     'productsize' => '-',
            //     'productquantity' => '32',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Ayam Kawin Short Tee',
            //     'productdescription' => 'Fabric : Combed 20s',
            //     'sku' => 'KA.BLO-UA025',
            //     'productprice' => '170000',
            //     'productsize' => '-',
            //     'productquantity' => '91',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Bad Short Tee',
            //     'productdescription' => 'Fabric : Combed 20s',
            //     'sku' => 'KA.BLO-UA026',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '79',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Kill Yellow Ring Tee',
            //     'productdescription' => 'Fabric : Combed 20s',
            //     'sku' => 'KA.BLO-UA027',
            //     'productprice' => '170000',
            //     'productsize' => '-',
            //     'productquantity' => '71',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Kill Yellow Ring Tee',
            //     'productdescription' => 'Fabric : Combed 20s',
            //     'sku' => 'KA.BLO-UA027',
            //     'productprice' => '170000',
            //     'productsize' => '-',
            //     'productquantity' => '71',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Saks Mustard Short Tee',
            //     'productdescription' => 'Japan heavy cotton with plastisol screen print on graphic. Tyvek and woven label on details.',
            //     'sku' => 'KA.BLO-UA028',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '68',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski x Demus - Kills Art Short Tee',
            //     'productdescription' => 'Collaboration with @demusashi.
            //     Fabric : Combed 20s',
            //     'sku' => 'KA.BLO-UA029',
            //     'productprice' => '170000',
            //     'productsize' => '-',
            //     'productquantity' => '51',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Cap Lang Bidon Bottle Purist',
            //     'productdescription' => '22 oz Purist Fixy Bottle / 650ml water bottle

            //     The Purist Fixy Bottle features an amorphous silicon dioxide coating that\'s infused into the inner-wall of the bottle. Essentially, this forms a glass-like finish that provides a totally natural, and completely inert, solution to the problem of your drinks staining the bottle or leaving behind any residual aftertaste. This infusion also shields your fresh water from tasting like plastic on very hot days, making it akin to drinking straight from a sparkling clean glass.
            
            //     Features of the bottle
            //     - Purist infusion shields the bottle from odor, stains, and mold to keep your water pure and your bottle clean.
            //     - Self-sealing Heart Valve delivers a high rate of flow with a 100% leak-proof design, even when the valve is open.
            //     - No push or pull is required to open and close the Heart Valve.
            //     - Easy-to-clean mouthpiece
            //     - Ergonomic design of cap body provides easy grip.
            //     - Made from easy-to-squeeze LDPE material.
            //     - Clear viewing strip makes it easy to see the bottle\'s contents.
            //     - BPA-Free plastic is made from 100% FDA food-grade materials, and it\'s printed with non-solvent base (UV Cured), CPSC-approved ink and materials.',
            //     'sku' => 'KA.BLO-UA019',
            //     'productprice' => '340000',
            //     'productsize' => '-',
            //     'productquantity' => '56',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Loop Shoelaces',
            //     'productdescription' => '-',
            //     'sku' => 'KA.BLO-UA020',
            //     'productprice' => '30000',
            //     'productsize' => '-',
            //     'productquantity' => '65',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Pancoran Mix 5 Panel Caps',
            //     'productdescription' => 'Fabric : Mix cotton twill with polyflex graphic.
            //     One size fits all.',
            //     'sku' => 'KA.BLO-UA021',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '46',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Runa Caps',
            //     'productdescription' => 'Fabric : Cotton twill with woven graphics.',
            //     'sku' => 'KA.BLO-UA022',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '67',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 14,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Kamengski - Tochi Green Tote Bag',
            //     'productdescription' => '-',
            //     'sku' => 'KA.BLO-UA022',
            //     'productprice' => '160000',
            //     'productsize' => '-',
            //     'productquantity' => '52',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 15,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Beyza Tan',
            //     'productdescription' => '-',
            //     'sku' => 'LT.BLO-UA001',
            //     'productprice' => '690000',
            //     'productsize' => '-',
            //     'productquantity' => '55',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 15,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Bifold Olive',
            //     'productdescription' => '-',
            //     'sku' => 'LT.BLO-UA002',
            //     'productprice' => '500000',
            //     'productsize' => '-',
            //     'productquantity' => '43',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 15,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Gorilla Tan',
            //     'productdescription' => '-',
            //     'sku' => 'LT.BLO-UA004',
            //     'productprice' => '195000',
            //     'productsize' => '-',
            //     'productquantity' => '74',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 15,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Single Prong Black - Natural',
            //     'productdescription' => 'Comes with handmade Stainless buckle, this belt will serve you nicely. Perfect for formal events or a leisure time.',
            //     'sku' => 'LT.BLO-UA005',
            //     'productprice' => '850000',
            //     'productsize' => '-',
            //     'productquantity' => '47',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 16,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'ATH. DEPT MISTY',
            //     'productdescription' => '-',
            //     'sku' => 'MS.BLO-UA010',
            //     'productprice' => '290000',
            //     'productsize' => '-',
            //     'productquantity' => '42',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 16,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'DOUBLE DRAGON SHIRT',
            //     'productdescription' => '-',
            //     'sku' => 'MS.BLO-UA011',
            //     'productprice' => '490000',
            //     'productsize' => '-',
            //     'productquantity' => '43',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 16,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'IL EAGLE MISTY',
            //     'productdescription' => '-',
            //     'sku' => 'MS.BLO-UA012',
            //     'productprice' => '229000',
            //     'productsize' => '-',
            //     'productquantity' => '9',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 16,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'IL ST KARYU 13TH 22OZ',
            //     'productdescription' => '-',
            //     'sku' => 'MS.BLO-UA003',
            //     'productprice' => '1349000',
            //     'productsize' => '-',
            //     'productquantity' => '19',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 16,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'SL - 001 LITE',
            //     'productdescription' => '-',
            //     'sku' => 'MS.BLO-UA004',
            //     'productprice' => '629000',
            //     'productsize' => '-',
            //     'productquantity' => '14',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 16,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'SR – 002 BLACK X BLACK',
            //     'productdescription' => '-',
            //     'sku' => 'MS.BLO-UA005',
            //     'productprice' => '629000',
            //     'productsize' => '-',
            //     'productquantity' => '29',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 16,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'ENAMEL PIN LOGO',
            //     'productdescription' => '-',
            //     'sku' => 'MO.BLO-UA001',
            //     'productprice' => '79000',
            //     'productsize' => '-',
            //     'productquantity' => '79',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 16,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'MISCHIEF X MUCCA MASK',
            //     'productdescription' => '-',
            //     'sku' => 'MO.BLO-UA002',
            //     'productprice' => '79000',
            //     'productsize' => '-',
            //     'productquantity' => '96',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 16,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'BEANIE PATCH LOGO BLACK',
            //     'productdescription' => '-',
            //     'sku' => 'MO.BLO-UA040',
            //     'productprice' => '129000',
            //     'productsize' => '-',
            //     'productquantity' => '32',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 17,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Brighter Day Tee',
            //     'productdescription' => 'Tee designed by Monstore from Comfort Sunground collection. Oversized cutting t-shirt made for unisex with high quality screen printing and cotton combed 20s',
            //     'sku' => 'MO.BLO-UA010',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '41',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Constant Pleasure Green Jersey',
            //     'productdescription' => 'Constant Pleasure Green Jersey designed by Monstore from Comfort Sunground collection. Cycling jersey that made for unisex with best quality printed waffle fabric.',
            //     'sku' => 'MO.BLO-UA011',
            //     'productprice' => '899000',
            //     'productsize' => '-',
            //     'productquantity' => '38',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Constant Pleasure Tee',
            //     'productdescription' => 'Tee designed by Monstore from Comfort Sunground collection. Oversized cutting t-shirt made for unisex with high quality screen printing and cotton combed 20s',
            //     'sku' => 'MO.BLO-UA012',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '44',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Emotion Shirt',
            //     'productdescription' => 'Cuban shirt designed by Monstore from Comfort Sunground collection. Made for unisex with high quality printed cotton poly fabric.',
            //     'sku' => 'MO.BLO-UA013',
            //     'productprice' => '599000',
            //     'productsize' => '-',
            //     'productquantity' => '31',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Monstore Cross Logo Tee Maroon',
            //     'productdescription' => 'Monstore Cross Logo Tee in Maroon color designed by Monstore from #WeeklyNewShyt collection. Made for unisex with high quality printing and material. Crew neck, regular fit, 100% cotton.',
            //     'sku' => 'MO.BLO-UA014',
            //     'productprice' => '149000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Positive Capability Chore Jacket Blue',
            //     'productdescription' => 'Jacket designed by Monstore from Comfort Sunground collection. Made for unisex with high quality screen printing and cotton fabric.',
            //     'sku' => 'MO.BLO-UA015',
            //     'productprice' => '549000',
            //     'productsize' => '-',
            //     'productquantity' => '63',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 17,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Fantaisie Pants',
            //     'productdescription' => 'Using denim/twill fabric. photo swatches Technique , front side and back side of the clothes. Unisex',
            //     'sku' => 'MO.BLO-UA007',
            //     'productprice' => '720000',
            //     'productsize' => '-',
            //     'productquantity' => '36',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Jeune Cargo Pants',
            //     'productdescription' => 'Using twill cotton fabric. photo swatches Technique , front side and back side of the clothes. Pocket as the details. Unisex',
            //     'sku' => 'MO.BLO-UA008',
            //     'productprice' => '680000',
            //     'productsize' => '-',
            //     'productquantity' => '44',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Cross Bucket Hat Washed Green',
            //     'productdescription' => 'Bucket hat designed by Monstore from Comfort Sunground collection. Made for unisex with high quality screen printing and cotton fabric.',
            //     'sku' => 'MO.BLO-UA001',
            //     'productprice' => '180000',
            //     'productsize' => '-',
            //     'productquantity' => '72',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'DWPV Crystal Sling Bag',
            //     'productdescription' => 'DWPV Black Sling Bag designed by Monstore for #DWPV collection. Bag with adjustable sling with high quality screen print.',
            //     'sku' => 'MO.BLO-UA002',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '27',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'DWPV Orion V2 Mask',
            //     'productdescription' => 'DWP20 X Monstore Official Merchandise Is Available Now Pre Order Batch 2

            //     Estimated Delivery : Week 4 January 2021.
            
            //     DWPV Black Mask designed by Monstore for #DWPV collection. Washable face mask with high quality screen print and 100% cotton',
            //     'sku' => 'MO.BLO-UA003',
            //     'productprice' => '57000',
            //     'productsize' => '-',
            //     'productquantity' => '59',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Positive Capability Sling Bag',
            //     'productdescription' => 'Sling bag designed by Monstore from Comfort Sunground collection. Made for unisex with high quality screen printing and cotton fabric.',
            //     'sku' => 'MO.BLO-UA004',
            //     'productprice' => '180000',
            //     'productsize' => '-',
            //     'productquantity' => '78',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Recycle Tyrant Mask',
            //     'productdescription' => 'Having a cool mask to hustle through the new normal days, why not? We\'re re-using our last collection polyester cotton fabric to make a mask, because we are taking our waste problem seriously. Participate in our reuse, reduce, and recycle.',
            //     'sku' => 'MO.BLO-UA005',
            //     'productprice' => '49000',
            //     'productsize' => '-',
            //     'productquantity' => '81',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'WTF Replayrepliy Scarf',
            //     'productdescription' => 'Bring the beat back" was inspired by the pandemic, where I saw a lot of anxiety, sadness, boredom and other negative things. I want to show that we can create happiness even at home through music. With music, I hope that we can return to being happy and excited amidst situations like this.',
            //     'sku' => 'MO.BLO-UA006',
            //     'productprice' => '91000',
            //     'productsize' => '-',
            //     'productquantity' => '30',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 17,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Feast Windbreaker',
            //     'productdescription' => 'Through this collaboration we’re aiming to share the energy, the creative spirit, the feeling of being in a community whose passionate in art.

            //     This excitement, this celebration of living with no boundaries can be implemented in everyone’s daily life.
            
            //     Together we are spreading and celebrating the current moment of living as a reminder to keep moving, to keep being creative and to share joy even in the hardest time.',
            //     'sku' => 'MO.BLO-UA042',
            //     'productprice' => '480000',
            //     'productsize' => '-',
            //     'productquantity' => '20',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Home Chore Jacket Army Green',
            //     'productdescription' => 'Jacket designed by Monstore from Comfort Sunground collection. Made for unisex with high quality screen printing and cotton fabric.',
            //     'sku' => 'MO.BLO-UA042',
            //     'productprice' => '549000',
            //     'productsize' => '-',
            //     'productquantity' => '60',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Long weekend Pattern Kimono',
            //     'productdescription' => 'Long weekend Pattern Kimono Outer in blue color dominant designed by Monstore #CubanFever Collection. Made for unisex with high quality printing and material. Shirt collar, regular fit, chiffon ceruti.',
            //     'sku' => 'MO.BLO-UA046',
            //     'productprice' => '450000',
            //     'productsize' => '-',
            //     'productquantity' => '72',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Mammon x Monstore Bomber Jacket',
            //     'productdescription' => 'Mammon x Monstore Bomber Jacket in Black color designed by Monstore from #MammonXMonstore collection. Made for unisex with high quality printing and material.',
            //     'sku' => 'MO.BLO-UA047',
            //     'productprice' => '479000',
            //     'productsize' => '-',
            //     'productquantity' => '76',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Memoire Long Jacket Black',
            //     'productdescription' => 'Using twill fabric. photo swatches Technique , front side and back side of the clothes. Unfinished fabric as the details.',
            //     'sku' => 'MO.BLO-UA048',
            //     'productprice' => '800000',
            //     'productsize' => '-',
            //     'productquantity' => '37',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Moonlight Short',
            //     'productdescription' => 'Moonlight Short in brown color dominant designed by Monstore #NotionOfTheTribe Collection. Made for unisex with high quality printing and material. Short collar, regular fit, 50% polyester 50% cotton.',
            //     'sku' => 'MO.BLO-UA038',
            //     'productprice' => '360000',
            //     'productsize' => '-',
            //     'productquantity' => '85',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Trespasser Short',
            //     'productdescription' => 'Trespasser Short in off white color dominant designed by Monstore #NotionOfTheTribe Collection. Made for unisex with high quality printing and material. Short collar, regular fit, 50% polyester 50% cotton.',
            //     'sku' => 'MO.BLO-UA039',
            //     'productprice' => '360000',
            //     'productsize' => '-',
            //     'productquantity' => '65',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Agatha Pricilla Enamel Pin',
            //     'productdescription' => 'Through this collaboration we’re aiming to share the energy, the creative spirit, the feeling of being in a community whose passionate in art.

            //     This excitement, this celebration of living with no boundaries can be implemented in everyone’s daily life.
            
            //     Together we are spreading and celebrating the current moment of living as a reminder to keep moving, to keep being creative and to share joy even in the hardest time.',
            //     'sku' => 'MO.BLO-UA030',
            //     'productprice' => '72000',
            //     'productsize' => '-',
            //     'productquantity' => '31',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'DWPV x LFBD Alpha Mask Tosca',
            //     'productdescription' => 'DWP20 X Monstore Official Merchandise Is Available Now Pre Order Batch 2

            //     Estimated Delivery : Week 4 January 2021.
            
            //     DWPV Alpha Mask designed by Monstore for #DWPV collection. Washable face mask with high quality screen print and 100% cotton',
            //     'sku' => 'MO.BLO-UA031',
            //     'productprice' => '57000',
            //     'productsize' => '-',
            //     'productquantity' => '32',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Hindia Tote Bag Beige',
            //     'productdescription' => 'Through this collaboration we’re aiming to share the energy, the creative spirit, the feeling of being in a community whose passionate in art.

            //     This excitement, this celebration of living with no boundaries can be implemented in everyone’s daily life.
            
            //     Together we are spreading and celebrating the current moment of living as a reminder to keep moving, to keep being creative and to share joy even in the hardest time.',
            //     'sku' => 'MO.BLO-UA034',
            //     'productprice' => '176000',
            //     'productsize' => '-',
            //     'productquantity' => '33',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Monstore Saving Graces Bag',
            //     'productdescription' => 'Shopping bag in Cream is made of spoundbound and features screen printed texts from new normal Collection. Talking about our last collection to make our world be better without plastic bag, because we are taking our waste problem seriously to reduce the use of single-use plastics by buying one of those shopping bag.',
            //     'sku' => 'MO.BLO-UA035',
            //     'productprice' => '50000',
            //     'productsize' => '-',
            //     'productquantity' => '34',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'SunEater Lanyard',
            //     'productdescription' => 'Shopping bag in Cream is made of spoundbound and features screen printed texts from new normal Collection. Talking about our last collection to make our world be better without plastic bag, because we are taking our waste problem seriously to reduce the use of single-use plastics by buying one of those shopping bag.',
            //     'sku' => 'MO.BLO-UA036',
            //     'productprice' => '80000',
            //     'productsize' => '-',
            //     'productquantity' => '35',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 17,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'WTF Summer Gloves Beige',
            //     'productdescription' => 'WTF Summer Vibe Gloves Beige designed by Monstore from #WTF20 collection.Made for unisex with high quality printing and material scuba.',
            //     'sku' => 'MO.BLO-UA037',
            //     'productprice' => '120000',
            //     'productsize' => '-',
            //     'productquantity' => '36',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'LITE - NO. 160',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Waist Pack + Reverse Arc Top + Flat Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water-resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     YKK® Heavy Duty Side Release Buckle
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimetres 200 x 260 x 100
            
            //     in inches 8" x 10.2" x 4"',
            //     'sku' => 'NA.BLO-UA001',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '46',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'LITE - NO. 321',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Backpack + Arc Top + Napoleon Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water-resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimeters 300 x 450 x 150
            
            //     in inches 11.8" x 17.8" x 6"',
            //     'sku' => 'NA.BLO-UA002',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '52',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'LITE - NO. 325',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Backpack + Roll Top + Dual Flap Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water-resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimeters 300 x 450 x 150
            
            //     in inches 11.8" x 17.8" x 6"',
            //     'sku' => 'NA.BLO-UA003',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '54',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'LITE - NO. 350',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Backpack + Flat Top + Flat Pocket
                
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
                
            //     Water-resistant full lining
                
            //     YKK® Racquet Coil Zipper
                
            //     Continuous Filament Thread
                
            //     DIMENSION
            //     in millimeters 300 x 450 x 150
                
            //     in inches 11.8" x 17.8" x 6"',
            //     'sku' => 'NA.BLO-UA004',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '58',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'LITE - NO. 372',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Backpack + Zip Top + Classic Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimeters 300 x 450 x 150
            
            //     in inches 11.8" x 17.8" x 6"',
            //     'sku' => 'NA.BLO-UA005',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '60',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'LITE - NO. 385',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Backpack + Bend Down Top + Dual Flap Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water-resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     YKK® Heavy Duty Side Release Buckle
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimeters 300 x 450 x 150
            
            //     in inches 11.8" x 17.8" x 6"',
            //     'sku' => 'NA.BLO-UA006',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '66',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'LITE - NO. 151',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Waist Pack + Flat Top + Napoleon Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water-resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     YKK® Heavy Duty Side Release Buckle
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimetres 200 x 260 x 100
            
            //     in inches 8" x 10.2" x 4"',
            //     'sku' => 'NA.BLO-UA010',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '3',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'LITE - NO. 301',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Backpack + Arc Top + Napoleon Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water-resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimeters 300 x 450 x 150
            
            //     in inches 11.8" x 17.8" x 6"',
            //     'sku' => 'NA.BLO-UA012',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '6',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'LITE - NO. 361',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Backpack + Reverse-Arc Top + Napoleon Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimeters 300 x 450 x 150
            
            //     in inches 11.8" x 17.8" x 6"',
            //     'sku' => 'NA.BLO-UA015',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '8',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 18,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'LITE - NO. 381',
            //     'productdescription' => 'DESIGNER\'S NOTE
            //     Backpack + Bend Down Top + Napoleon Pocket
            
            //     TECH SPECS
            //     Nylon 600 Denier PU Coated Water Repellent Fabric
            
            //     Water-resistant full lining
            
            //     YKK® Racquet Coil Zipper
            
            //     YKK® Heavy Duty Side Release Buckle
            
            //     Continuous Filament Thread
            
            //     DIMENSION
            //     in millimeters 300 x 450 x 150
            
            //     in inches 11.8" x 17.8" x 6"',
            //     'sku' => 'NA.BLO-UA017',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '10',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            
            // [
            //     'brandid' => 19,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'BANDANA PATCHED RELAXED CHAMBRAY NEPPY GREY SS',
            //     'productdescription' => '-',
            //     'sku' => 'NB.BLO-UA005',
            //     'productprice' => '650000',
            //     'productsize' => '-',
            //     'productquantity' => '12',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 19,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'KANALOA Belly Flap Slubby Colarless Shirt Half Sleeve Navy',
            //     'productdescription' => '-',
            //     'sku' => 'NB.BLO-UA006',
            //     'productprice' => '650000',
            //     'productsize' => '-',
            //     'productquantity' => '21',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 19,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'KANALOA Belly Flap Slubby Colarless Shirt Long Sleeve Olive',
            //     'productdescription' => '-',
            //     'sku' => 'NB.BLO-UA007',
            //     'productprice' => '650000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 19,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'RONIN II THE LOYAL SERPENT Slim Fit 14oz',
            //     'productdescription' => '+ Deep Indigo Medium Lightweight 14oz
            //     + Sanforized Shrunk
            //     + Red Selvedge Line
            //     + Slim Fit Silhouette
            //     + Hand-sewn SASHIKO Patch
            //     + 100% Cotton, 100% Selvedge, 100% Shuttle Loomed
            //     + 100% Hand Process, 100% Artisanal Jeans
            //     + Poly Cotton Heavy Thread (super strong thread)
            //     + Shell Stitch Tusk Sword Fly
            //     + Double Selvedge Peek a Boo Coin Pocket
            //     + YKK Japanese 100% Copper Silver & Black Double Prong Button Fly
            //     + NBDN Iron Plated Burned Copper Rivets
            //     + NBDN Silver Brushed new Brass Button
            //     + Hidden Rivets on Backpocket
            //     + Continuous N Stitching on Waist Band
            //     + Raised Belt Loop
            //     + Raised Open Backpocket
            //     + Fully Reinforced Backpocket
            //     + Triangle Stitch Overlap Details on Left Side Backpocket
            //     + Chainstitch Run-Off on Backpocket
            //     + Single Felled Inseam
            //     + Hemming by Union Special 43200G',
            //     'sku' => 'NB.BLO-UA001',
            //     'productprice' => '1118000',
            //     'productsize' => '-',
            //     'productquantity' => '25',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 19,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid',
            //     'productdescription' => '+ Deep Rich Indigo Super Heavyweight 21,9oz
            //     + Stiff & Rigid Textured
            //     + ?Unsanforized
            //     + Red Selvedge Line
            //     + Slim Straight Silhouette
            //     + Hand-sewn SASHIKO Patch
            //     + 100% Cotton, 100% Selvedge, 100% Shuttle Loomed
            //     + 100% Hand Process, 100% Artisanal Jeans
            //     + Poly Cotton Heavy Thread (super strong thread)
            //     + Shell Stitch Tusk Sword Fly
            //     + Double Selvedge Peek a Boo Coin Pocket
            //     + YKK Japanese 100% Copper Silver & Black Double Prong Button Fly
            //     + NBDN Iron Plated Burned Copper Rivets
            //     + NBDN Silver Brushed new Brass Button
            //     + Hidden Rivets on Backpocket
            //     + Continuous N Stitching on Waist Band
            //     + Raised Belt Loop
            //     + Raised Open Backpocket
            //     + Fully Reinforced Backpocket
            //     + Triangle Stitch Overlap Details on Left Side Backpocket
            //     + Chainstitch Run-Off on Backpocket
            //     + Single Felled Inseam
            //     + Hemming by Union Special 43200G',
            //     'sku' => 'NB.BLO-UA002',
            //     'productprice' => '1250000',
            //     'productsize' => '-',
            //     'productquantity' => '27',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            
            // [
            //     'brandid' => 19,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid',
            //     'productdescription' => '+ Olive Green Warp & Mild Green Weft 13,75oz
            //     + Rough Textured
            //     + ?Sanforized Shrunk
            //     + Red Selvedge Line
            //     + Slim Straight Silhouette
            //     + Hand-sewn SASHIKO Patch
            //     + 100% Cotton, 100% Selvedge, 100% Shuttle Loomed
            //     + 100% Hand Process, 100% Artisanal Jeans
            //     + Poly Cotton Heavy Thread (super strong thread)
            //     + Shell Stitch Tusk Sword Fly
            //     + Double Selvedge Peek a Boo Coin Pocket
            //     + YKK Japanese 100% Copper Silver & Black Double Prong Button Fly
            //     + NBDN Iron Plated Burned Copper Rivets
            //     + NBDN Silver Brushed new Brass Button
            //     + Hidden Rivets on Backpocket
            //     + Continuous N Stitching on Waist Band
            //     + Raised Belt Loop
            //     + Raised Open Backpocket
            //     + Fully Reinforced Backpocket
            //     + Triangle Stitch Overlap Details on Left Side Backpocket
            //     + Chainstitch Run-Off on Backpocket
            //     + Single Felled Inseam
            //     + Hemming by Union Special 43200G',
            //     'sku' => 'NB.BLO-UA025',
            //     'productprice' => '1250000',
            //     'productsize' => '-',
            //     'productquantity' => '29',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 19,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => '21oz Heavyweight Olive Canvas Tote Bag',
            //     'productdescription' => '-',
            //     'sku' => 'NB.BLO-UA020',
            //     'productprice' => '1110000',
            //     'productsize' => '-',
            //     'productquantity' => '31',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 19,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'BUDDY BOLD BEANIE BLACK',
            //     'productdescription' => '+ Navy, Black, Khaki colors
            //     + Buddy Bold Beanie is perfect for insulating against drizzle and dropping temperatures
            //     + 100% Cotton
            //     + 100% Heavy Thick Knitted
            //     + Universal size
            //     + Coverage is adjustable as desired by varying cuff
            //     + NBDN Kanji Woven Tab
            //     + Naturally breathable',
            //     'sku' => 'NB.BLO-UA021',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '33',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 19,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'BUDDY BOLD BEANIE BLACK',
            //     'productdescription' => '+ Navy, Black, Khaki colors
            //     + Buddy Bold Beanie is perfect for insulating against drizzle and dropping temperatures
            //     + 100% Cotton
            //     + 100% Heavy Thick Knitted
            //     + Universal size
            //     + Coverage is adjustable as desired by varying cuff
            //     + NBDN Kanji Woven Tab
            //     + Naturally breathable',
            //     'sku' => 'NB.BLO-UA021',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '33',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 20,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Tee - The Bleu Mugger',
            //     'productdescription' => 'Come one, come all. Be prepared to be awed by the wilderness! Join us on the spectacular show of the year. The space cowboy has broken the ties of earth and is about to conquer the space. He’ll take you to the place that we never dare to go before. He’ll take you to the place when space and time are relative. He’ll take you somewhere beyond our moral code, beyond right or wrong. He’ll take you beyond the nature of life.

            //     ~ Le Bleu Mugg’er aka The Space Cowboy aka The Cobalt Blue.',
            //     'sku' => 'OB.BLO-UA011',
            //     'productprice' => '270000',
            //     'productsize' => '-',
            //     'productquantity' => '35',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 20,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Tee - The Shrunk Overalls',
            //     'productdescription' => 'Our Regular Tees rendition of 2020. These collections are inspired by some of the old-dogs on the vintage work-wear world. These labels might be less often heard comparing with the Top-3. Moreover, they’re already extinct from the world of work-wear surface. But nevertheless, their existence inspires us as a brand one way or another. So this is our kind of tribute to those who also played an important role towards the development of the workin’-wear universe.',
            //     'sku' => 'OB.BLO-UA012',
            //     'productprice' => '225000',
            //     'productsize' => '-',
            //     'productquantity' => '37',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 20,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => '8.25 Cut - 3133 Oz Over-Weight Selvedge Cobalt Blue',
            //     'productdescription' => 'The first above 30 oz. denim we’ve ever used.
            //     The first (and might be the last) milled in China denim we’ve ever used.
            //     The first royal blue and red wine weft denim we’ve ever used.
            //     The first above 30 oz. denim in particular dyed weft that you’ve might ever seen.
            //     The #9THRUNNINWILD special denim collection.
            
            //     31/33 ounces beyond heavy indigo denim. Unsanforized loom-state denim. Exclusively-milled in China. Colored (Red Wine and Royal Blue) reactive dyed weft. Loomed using insanely thick yarns. 3 plied of 5S yarns for both of its warp & weft (5S/3 * 5S/3). The yarns originated from the Extra-Long-Staple cotton, from Urumqi, Xinjiang, where there is a long time of sunshine, so the cotton quality is, of course, better.
            
            //     Each denim is available on both of our 8.25? and 7.75? Cut. Filled with many special details, such as, (the first ever) hidden looped arcuate, (the first ever) back pocket embroidery, (the first ever) special full-printed pocket bag fabric, (the first ever) black horizontal tab on coin pocket, and extra thick 4.0-4.5 cow hide with debossed-print technique.',
            //     'sku' => 'OB.BLO-UA003',
            //     'productprice' => '2499000',
            //     'productsize' => '-',
            //     'productquantity' => '39',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 20,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'The Black Stallion - 2123 Oz Ultra Black Okayama',
            //     'productdescription' => 'The first ever denim with studded detail leather patch? Nah, why bother with such exaggerating balderdash. Black warp X black weft heavy ounces denim. Ultra-black loom-state unsanforized denim. With an approximate weight 23.7 oz. after shrunk. Constructed with just-the-right amount of irregular slub yarns and pink selvedge ID. Built with our timeless 8.25”’ slim straight cut. Trimmed with Scovill USA buttons in burnt copper finish. Reinforced with 100% copper rivets also from the same company. The studded patch was done manually by hand, one by one. So if you’re expecting a flawless and spot-on kind of attachment, this one is not for ya. The leather material was sourced from the infamous Horween, Illinois Chicago. Yes, it’s their Black Chromexcel leather.',
            //     'sku' => 'OB.BLO-UA004',
            //     'productprice' => '2750000',
            //     'productsize' => '-',
            //     'productquantity' => '41',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            
            // [
            //     'brandid' => 20,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Oldblue X Wesco - The Pacemaker Boots',
            //     'productdescription' => 'Thousand miles apart, but we believe in the same cause.
            //     We’re driven by the same traditional spirit.
            //     We’re moved by the heritage value of golden craftmanship.
            
            //     We both believe the precision of process and the scrupulosity of etiquette will only lead to uncompromised long-lasting goods.To have this opportunity to work with a brand that we’ve admired for so long is more than a privilege. With such prestigious maker as Wesco, we believe that’s the right way to take the standard to an even higher level. with 100 years of hand-on experience in the industry, they’re one of the few that we’re always looked up to in term of keeping the advanced standard.',
            //     'sku' => 'OB.BLO-UA010',
            //     'productprice' => '3250000',
            //     'productsize' => '-',
            //     'productquantity' => '2',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 20,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Bandana - The Loopin\' Good',
            //     'productdescription' => 'Our second particular bandana collections. Something that surely will complete all your rugged inspired, workin’-wear insisted look. Precisely hand screen-printed one by one.',
            //     'sku' => 'OB.BLO-UA001',
            //     'productprice' => '162000',
            //     'productsize' => '-',
            //     'productquantity' => '5',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 20,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Denim Wallet Type I',
            //     'productdescription' => '-',
            //     'sku' => 'OB.BLO-UA002',
            //     'productprice' => '750000',
            //     'productsize' => '-',
            //     'productquantity' => '7',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 20,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Tee - The Rouge Zoltar',
            //     'productdescription' => 'He’s one of the master-mind behind this madness. The culprit behind this disorderly chaos. He breathes fire. He breaths with your thrilling sensation. He lives by your worrying tremble. Big shows combined for a complete adventure of a lifetime. Bring the entire family. Here comes the fear & joy. Grand applause and awe for the wondrous creature!

            //     ~ Le Rouge Zolt’ar aka The Fire Eater aka The Crimson Red.',
            //     'sku' => 'OB.BLO-UA024',
            //     'productprice' => '270000',
            //     'productsize' => '-',
            //     'productquantity' => '9',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 20,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => '7.75 Cut - 15 Oz Deep Indigo Okayama ID X ID',
            //     'productdescription' => 'Oldblue exclusive run denim fabric. Japanese milled denim with 15 oz. medium weight. Sanforized pre-shrunk denim. The weft was constructed using rope dyed indigo yarns. Built using 7.75? Cut, a slim cut with medium rise. Trimmed with Sovill USA buttons in burnt copper finish. Reinforced with 100% copper rivets also from Scovill USA. Horween veg-tanned horse strips leather patch.',
            //     'sku' => 'OB.BLO-UA022',
            //     'productprice' => '2050000',
            //     'productsize' => '-',
            //     'productquantity' => '11',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 20,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Denim Mask Type I',
            //     'productdescription' => 'Description: thing. This is a pretty simple and straight forward gesture and action from us. ALL EARNINGS from the sale of this mask will be donated to those who are in need during this time of difficulty. The donation will be handed over to ACT and their ‘Bersama Lawan Corona’ program.

            //     Our lil’ take on doing selvedge denim mask. Made using 12 oz./ sq. yard locally sourced rope dyed selvedge denim. Lined with breathable herringbone twill fabric. Has gone thru initial cleaning & soaking process using antiseptic liquid. Another self-soak / wash process prior to wear is of course recommended.
            
            //     This version came with longer elastic earloop, simply tie it to your preferred sizing.
            
            //     Kindly choose the product variant;
            //     S: with selvedge line detail
            //     NS: without selvedge line detail',
            //     'sku' => 'OB.BLO-UA021',
            //     'productprice' => '120000',
            //     'productsize' => '-',
            //     'productquantity' => '13',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'ALPHA',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA010',
            //     'productprice' => '185000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'BEKOS BLACK',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA011',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '20',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'NYO WHITE COLAR',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA012',
            //     'productprice' => '185000',
            //     'productsize' => '-',
            //     'productquantity' => '31',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'TERU LS',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA013',
            //     'productprice' => '175000',
            //     'productsize' => '-',
            //     'productquantity' => '41',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'VARIOUS OLIVE',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA014',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '36',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 21,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'FIELD BLACK BOXER',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA005',
            //     'productprice' => '75000',
            //     'productsize' => '-',
            //     'productquantity' => '38',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'GRID OLIVE BOXER',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA006',
            //     'productprice' => '75000',
            //     'productsize' => '-',
            //     'productquantity' => '40',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'LEEDS MAROON',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA007',
            //     'productprice' => '175000',
            //     'productsize' => '-',
            //     'productquantity' => '28',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'LINE BOXER WHITE',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA008',
            //     'productprice' => '75000',
            //     'productsize' => '-',
            //     'productquantity' => '88',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'MOJI BOXER',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA009',
            //     'productprice' => '75000',
            //     'productsize' => '-',
            //     'productquantity' => '46',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'NIZU BLACK',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA001',
            //     'productprice' => '100000',
            //     'productsize' => '-',
            //     'productquantity' => '24',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'ROWDI HAT',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA002',
            //     'productprice' => '140000',
            //     'productsize' => '-',
            //     'productquantity' => '53',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'TORRU NAVY',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA003',
            //     'productprice' => '100000',
            //     'productsize' => '-',
            //     'productquantity' => '41',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'VERT BLACK',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA004',
            //     'productprice' => '35000',
            //     'productsize' => '-',
            //     'productquantity' => '56',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'ALL THAT JAZZ WHITE',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA036',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '14',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'LEACH MATTE',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA037',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '31',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'NIZU LS',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA038',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '19',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'OG LGO WHITE',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA039',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '35',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'ZERU TEE',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA040',
            //     'productprice' => '175000',
            //     'productsize' => '-',
            //     'productquantity' => '52',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'NAGO CAP',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA030',
            //     'productprice' => '140000',
            //     'productsize' => '-',
            //     'productquantity' => '60',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'NIZU OLIVE',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA031',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '80',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'NOISE HAT',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA032',
            //     'productprice' => '140000',
            //     'productsize' => '-',
            //     'productquantity' => '43',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'STOOTH BLACK MASK',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA033',
            //     'productprice' => '30000',
            //     'productsize' => '-',
            //     'productquantity' => '34',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'TIER MASK',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA034',
            //     'productprice' => '30000',
            //     'productsize' => '-',
            //     'productquantity' => '59',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 21,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'TORRU MUSTARD',
            //     'productdescription' => 'Weight: 250 Gram',
            //     'sku' => 'OQ.BLO-UA035',
            //     'productprice' => '100000',
            //     'productsize' => '-',
            //     'productquantity' => '99',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Boden Green',
            //     'productdescription' => 'It\'s Boden Green from Unknown Series!

            //     Care Instruction:
            //     Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
            //     'sku' => 'PG.BLO-UA001',
            //     'productprice' => '36000',
            //     'productsize' => '-',
            //     'productquantity' => '23',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Jax Navy',
            //     'productdescription' => 'It\'s Jax Navy from Em Casa Series!

            //     Care Instruction:
            //     Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
            //     'sku' => 'PG.BLO-UA002',
            //     'productprice' => '36000',
            //     'productsize' => '-',
            //     'productquantity' => '40',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Polo Cap Black',
            //     'productdescription' => '-',
            //     'sku' => 'PG.BLO-UA003',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '57',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Shelby Maroon',
            //     'productdescription' => 'It\'s Shelby Maroon from Unknown Series!

            //     Care Instruction:
            //     Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
            //     'sku' => 'PG.BLO-UA004',
            //     'productprice' => '36000',
            //     'productsize' => '-',
            //     'productquantity' => '56',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Vermi Navy Cap',
            //     'productdescription' => 'Fresh Article from Pattent Goods',
            //     'sku' => 'PG.BLO-UA005',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '77',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Basic Circle Shibori',
            //     'productdescription' => 'It\'s Basic Circle Shibori from Indigo Project Series!


            //     WHAT MAKE THIS PRODUCT SPECIAL?
            //     This product is a collaborative product between Pattent Goods and Banana Paper, an indigo natural coloring business.
            //     The coloring of this product uses natural indigo dyes using the Shibori technique.
            
            
            //     DISCLAIMER
            //     This product is handmade. Every motif on every sock will not be 100% the same.',
            //     'sku' => 'PG.BLO-UA010',
            //     'productprice' => '75000',
            //     'productsize' => '-',
            //     'productquantity' => '47',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Hidden 2 White',
            //     'productdescription' => 'Hidden 2 White is a sock made from a blend of cotton, elasthane, natural rubber, and nylon that is designed to be comfy & soft, offering a great absorption impact when you wear it, and a flexible fit for comfort on your feet.

            //     Size Measurement (All Size):
            //     Sock sizes 23 - 28: Suitable for shoe sizes 38 - 44
            
            //     Care Label:
            //     Normal hand wash, Line dry, No bleach, No tumble dry, Iron medium heat',
            //     'sku' => 'PG.BLO-UA011',
            //     'productprice' => '35000',
            //     'productsize' => '-',
            //     'productquantity' => '51',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Holo Red',
            //     'productdescription' => 'It\'s Holo Red from Signature Series!

            //     Care Instruction:
            //     Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
            //     'sku' => 'PG.BLO-UA012',
            //     'productprice' => '36000',
            //     'productsize' => '-',
            //     'productquantity' => '12',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 22,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Solid Ruby',
            //     'productdescription' => 'It\'s Solid Ruby from Solid Series !

            //     Care Instruction:
            //     Hand wash normal, Line dry, No bleach, No tumble dry, Iron medium heat',
            //     'sku' => 'PG.BLO-UA014',
            //     'productprice' => '38000',
            //     'productsize' => '-',
            //     'productquantity' => '63',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 23,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Loafers Belgian Penny L.I.F.E Tan',
            //     'productdescription' => 'Though Belgian loafers are iconic with small bow tie at the toe. At Portee we decide to bring penny tie to our belgian loafers silhouette. Belgian loafers are also identical with inside out sewing technique,and yes we keep that technique alive. Our Belgian loafers made with tan nubuck leather upper sitting on our signature L.I.F.E heels outsole it\'s both classy and comfortable at the same time.  We recommend true size for your perfect fit.

            //     Made on modified Italy last with normal width
            
            //     Specification :
            
            //     Genuine tan nubuck leather
            //     Neoprene lining
            //     Inside out sewing technique
            //     very lightweight L.I.F.E outsole with heels
            //     Cork insole with memory foam
            //     Cementing construction',
            //     'sku' => 'PO.BLO-UA003',
            //     'productprice' => '600000',
            //     'productsize' => '-',
            //     'productquantity' => '61',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 23,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Loafers Slippers L.I.F.E Heels Black',
            //     'productdescription' => 'Our signature Loafers Slippers silhouette with our new Lightweight Injected Foam Exthane heels outsole or as we like to call it L.I.F.E outsole. Its super lightweight at only 278gr. Proudly claimed to be first local brand to adapt a tie-less lace for easier putting on and off your shoes. We recommend true size for your perfect fit.

            //     Made on modified Italy last with normal width
            
            //     Specification :
            
            //     Genuine black nappa leather
            //     Neoprene lining
            //     Handsewn moc toe
            //     very lightweight L.I.F.E outsole with heels
            //     Cork insole with memory foam
            //     Cementing construction',
            //     'sku' => 'PO.BLO-UA004',
            //     'productprice' => '700000',
            //     'productsize' => '-',
            //     'productquantity' => '16',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 23,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Loom L.I.F.E Grain (Sand White)',
            //     'productdescription' => 'Survive,evolve,inherited.The new loom collection silhouette inspired from a bowling shoes which are popular in the late 18th century,also familiar as an industrial revolution time. A time when machine started to replace all the beauty of handmade. As much as we embrace the tech revolution,we must also appreciate the past where we inherited, so we combined those two things as we used century old hand-woven looming technique in a bowling shoes silhoutte upper with our signature L.I.F.E tech on the outsole.',
            //     'sku' => 'PO.BLO-UA005',
            //     'productprice' => '520000',
            //     'productsize' => '-',
            //     'productquantity' => '37',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 23,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Loom L.I.F.E Steel (Grey White)',
            //     'productdescription' => 'Survive,evolve,inherited.The new loom collection silhouette inspired from a bowling shoes which are popular in the late 18th century,also familiar as an industrial revolution time. A time when machine started to replace all the beauty of handmade. As much as we embrace the tech revolution,we must also appreciate the past where we inherited, so we combined those two things as we used century old hand-woven looming technique in a bowling shoes silhoutte upper with our signature L.I.F.E tech on the outsole.',
            //     'sku' => 'PO.BLO-UA006',
            //     'productprice' => '520000',
            //     'productsize' => '-',
            //     'productquantity' => '48',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 23,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Oxford Knit Oreo Triple Black',
            //     'productdescription' => 'The elegance of innovation start on the 5 Oz precision engineered stretch-knit upper. Knitted from selection of stretch polyester yarn to make seamless upper and perfected with our new phylon insole that’ll be form fitting on your feet. Combined with a leather to keep that classic look and our signature L.I.F.E series outsole for the ultimate featherweight daily shoes',
            //     'sku' => 'PO.BLO-UA007',
            //     'productprice' => '490000',
            //     'productsize' => '-',
            //     'productquantity' => '28',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 23,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Oxford Wingtip L.I.F.E All Black',
            //     'productdescription' => 'Our signature Oxford wingtip silhouette with our new Lightweight Injected Foam Exthane outsole or as we like to call it L.I.F.E outsole. Its super lightweight at only 270gr. Featuring the first local brand to adapt a tie-less lace for easier putting on and off your shoes. See through brogues with breathable lining for super comfort. We recommend true size for your perfect fit.

            //     Made on modified Italy last with normal width
            
            //     Specification :
            
            //     Genuine black crazy horse leather
            //     Lazy lace for easier lacing and sleeker look
            //     Neoprene lining
            //     Handpunch perforated brogues
            //     Very light L.I.F.E outsole
            //     Cork insole with memory foam
            //     Cementing construction',
            //     'sku' => 'PO.BLO-UA006',
            //     'productprice' => '520000',
            //     'productsize' => '-',
            //     'productquantity' => '92',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 23,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Oxford Wingtip L.I.F.E Brown Brushed Off',
            //     'productdescription' => 'Unique characteristic of brush off leather in our L.I.F.E series outsole. Every pair is hand finished to bring out its patina. Every pair is different.

            //     Made on modified Italy last with normal width
            
            //     Specification :
            
            //     Genuine Brown Brushed Off leather
            //     Lazy lace for easier lacing and sleeker look
            //     Neoprene lining
            //     Handpunch perforated brogues
            //     Very light L.I.F.E outsole
            //     Cork insole with memory foam
            //     Cementing construction',
            //     'sku' => 'PO.BLO-UA009',
            //     'productprice' => '700000',
            //     'productsize' => '-',
            //     'productquantity' => '78',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 23,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Oxford Wingtip Oxblood Brushed Off',
            //     'productdescription' => 'Our signature Oxford wingtip silhouette with our new Lightweight Injected Foam Exthane outsole or as we like to call it L.I.F.E outsole. Its super lightweight at only 270gr. Featuring the first local brand to adapt a tie-less lace for easier putting on and off your shoes. See through brogues with breathable lining for super comfort. We recommend true size for your perfect fit.

            //     Made on modified Italy last with normal width
            
            //     Specification :
            
            //     Genuine Oxblood Brushed Off leather
            //     Lazy lace for easier lacing and sleeker look
            //     Neoprene lining
            //     Handpunch perforated brogues
            //     Very light L.I.F.E outsole
            //     Cork insole with memory foam
            //     Cementing construction',
            //     'sku' => 'PO.BLO-UA010',
            //     'productprice' => '700000',
            //     'productsize' => '-',
            //     'productquantity' => '85',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 23,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Marque Cosmos Black',
            //     'productdescription' => 'Specs:
            //     Material : 316L Polished Stainless steel
            //     Case Color : Silver
            //     Dimension : 38mm
            //     Glass : Mineral-strengthened Crystal Domed Glass with anti-fingerprint coating
            //     Strap Size : 20 mm
            //     Water Resistance : 5atm (swim/wash and all daily waterproof activity)
            //     Dial Color: Cosmos Black with swiss C3 super luminous green powder numeric (illuminate in the dark)
            //     Strap : Classic brown pull up leather
            //     Hands : Black polished with Swiss C3 super luminous green powder (illuminate in the dark)
            //     Movement : Quartz Japan VJ32
            //     Notable Function : Date',
            //     'sku' => 'PO.BLO-UA001',
            //     'productprice' => '780000',
            //     'productsize' => '-',
            //     'productquantity' => '4',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 23,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Marque Vintage Creme',
            //     'productdescription' => 'Specs:
            //     Material : 316L Polished Stainless steel
            //     Case Color : Silver
            //     Dimension : 38mm
            //     Glass : Mineral-strengthened Crystal Domed Glass with anti-fingerprint coating
            //     Strap Size : 20 mm
            //     Water Resistance : 5atm (swim/wash and all daily waterproof activity)
            //     Dial Color: Vintage creme with swiss C3 super luminous green powder numeric (illuminate in the dark)
            //     Strap : Classic brown pull up leather
            //     Hands : Silver polished with Swiss C3 super luminous green powder (illuminate in the dark)
            //     Movement : Quartz Japan VJ32
            //     Notable Function : Date',
            //     'sku' => 'PO.BLO-UA002',
            //     'productprice' => '780000',
            //     'productsize' => '-',
            //     'productquantity' => '8',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 24,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'POT MEETS POP - BLAZING TEE NAVY',
            //     'productdescription' => '180 GSM
            //     COMBED, 100% COTTON',
            //     'sku' => 'PM.BLO-UA007',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '12',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'POT MEETS POP - GROOVY DUB HOODIE NAVY',
            //     'productdescription' => '320 GSM
            //     FLEECE, 100% COTTON',
            //     'sku' => 'PM.BLO-UA008',
            //     'productprice' => '480000',
            //     'productsize' => '-',
            //     'productquantity' => '17',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'POT MEETS POP LOVERS ROCK TEE NAVY',
            //     'productdescription' => 'SHORT SLEEVE T-SHIRT
            //     180GSM, 100% COMBED COTTON
            //     SILK SCREENED
            //     WATER BASED INK DECORATION',
            //     'sku' => 'PM.BLO-UA010',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '29',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'POT MEETS POP OZ ARMY SLANTED POCKET RED JACKET',
            //     'productdescription' => 'SLANTED POCKET BDU SHIRT
            //     COTTON MIDWEIGHT TWILL
            //     STONE WASHED
            //     MILITARY STYLE SLANTED POCKET
            //     DURABLE CONSTRUCTION
            //     OIL BASED INK SCREEN PRINTED',
            //     'sku' => 'PM.BLO-UA011',
            //     'productprice' => '650000',
            //     'productsize' => '-',
            //     'productquantity' => '39',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 24,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'PMP DENIM HAZE BLUE PANT',
            //     'productdescription' => 'REGULAR CUT DENIM PANT
            //     12,5 OZ DENIM PANT
            //     5 POCKET
            //     BARTACKED AT STRESS POINTS
            //     CHAINSTICH HEM',
            //     'sku' => 'PM.BLO-UA001',
            //     'productprice' => '625000',
            //     'productsize' => '-',
            //     'productquantity' => '30',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'PMP DENIM SUPER THAISTICK DARK BLUE PANT',
            //     'productdescription' => 'SLIM FIT DENIM PANT
            //     11,5 OZ DENIM 100% COTTON
            //     5 POCKET
            //     HIDDEN RIVET
            //     CHAISTITCH HEM',
            //     'sku' => 'PM.BLO-UA002',
            //     'productprice' => '625000',
            //     'productsize' => '-',
            //     'productquantity' => '32',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'POT MEETS POP CHRONIC CARGO BLUE SHORT',
            //     'productdescription' => '- CARGO SHORT
            //     - ALL COTTON MEDWEIGHT TWILL
            //     - STONE WASHED
            //     - MILITARY STYLE 6 POCKET
            //     - REAR REINFORCEMENT
            //     - STONE WASHED
            //     - DURABLE CONSTRUCTION',
            //     'sku' => 'PM.BLO-UA003',
            //     'productprice' => '450000',
            //     'productsize' => '-',
            //     'productquantity' => '65',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'POT MEETS POP FATTY FATIGUE PANT MAROON',
            //     'productdescription' => 'REGULAR CUT DENIM PANT
            //     12,5 OZ DENIM PANT
            //     5 POCKET
            //     BARTACKED AT STRESS POINTS
            //     CHAINSTICH HEM',
            //     'sku' => 'PM.BLO-UA004',
            //     'productprice' => '550000',
            //     'productsize' => '-',
            //     'productquantity' => '40',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 24,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'POT MEETS POP - SHAKE A LEG TEE PURPLE',
            //     'productdescription' => '230 GSM
            //     100% COTTON
            //     OIL BASED SCREEN PRINT DECORATION',
            //     'sku' => 'PM.BLO-UA024',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '44',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'POT MEETS POP - LOGO TEE TIE-DYE ORANGE',
            //     'productdescription' => 'SHORT SLEEVE T-SHIRT
            //     180 GSM, 100% COMBED COTTON
            //     SKILL SCREENED
            //     OIL BASED INK DECORATION',
            //     'sku' => 'PM.BLO-UA024',
            //     'productprice' => '280000',
            //     'productsize' => '-',
            //     'productquantity' => '54',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'POT MEETS POP OZ ARMY PURPLE JACKET',
            //     'productdescription' => 'BDU/JUNGLE SHIRT
            //     MIDWEIGHT STREAKY TWILL, 100% COTTON
            //     GARMEN DYE
            //     4 FLAPPED POCKET
            //     BUTTON CLOUSURE ON POCKET FLAP
            //     HAND SCREEN PRINT OIL BASED INK DECORATION',
            //     'sku' => 'PM.BLO-UA024',
            //     'productprice' => '675000',
            //     'productsize' => '-',
            //     'productquantity' => '57',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'POT MEETS POP PEACE DEPARTEMENT TEE GREEN',
            //     'productdescription' => '24S COMBED COTTON
            //     GARMENT WASHED
            //     SHORT SLEEVE T-SHIRT',
            //     'sku' => 'PM.BLO-UA030',
            //     'productprice' => '210000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 24,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'POT MEETS POP PIPES JACQUARD PANT',
            //     'productdescription' => '5 POCKET DENIM PANTS
            //     10 OZ JACQUARD DENIM, 100% COTTON
            //     SLIM STRAIGHT
            //     5 POCKET
            //     BAR-TACKED
            //     RIVETED AT STRESS POINTS',
            //     'sku' => 'PM.BLO-UA020',
            //     'productprice' => '500000',
            //     'productsize' => '-',
            //     'productquantity' => '85',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'POT MEETS POP STARBUD BELT SHORT POLKADOT',
            //     'productdescription' => 'BELTED SHORTS
            //     7 OZ DENIM JACQUARD, 100% COTTON
            //     9,5 INSEAM SHORTS
            //     3 POCKET
            //     BUILT-IN WEBBING BELT',
            //     'sku' => 'PM.BLO-UA021',
            //     'productprice' => '380000',
            //     'productsize' => '-',
            //     'productquantity' => '82',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 24,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'POT MEETS POP STARBUD BELT SHORT POLKADOT',
            //     'productdescription' => 'BELTED SHORTS
            //     MIDWEIGHT CORDUROY, 100% COTTON
            //     9,5 INSEAM SHORTS
            //     3 POCKET
            //     BUILT-IN WEBBING BELT',
            //     'sku' => 'PM.BLO-UA022',
            //     'productprice' => '400000',
            //     'productsize' => '-',
            //     'productquantity' => '72',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 25,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'CLASS OF ’99 TRACK TOP – WHITENAVYRED',
            //     'productdescription' => 'Track jacket made of 100% nylon. Printed graphic on the front and back. Zip closure at front. Pockets at sides. Elasticized cuffs and hem.',
            //     'sku' => 'PC.BLO-UA006',
            //     'productprice' => '650000',
            //     'productsize' => '-',
            //     'productquantity' => '74',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'COURT TEE – BLACK',
            //     'productdescription' => 'Heavyweight cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front, back, and along the sleeves',
            //     'sku' => 'PC.BLO-UA007',
            //     'productprice' => '300000',
            //     'productsize' => 'Heavyweight cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front, back, and along the sleeves',
            //     'productquantity' => '77',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'IMAGINATION LS TEE – PEACH',
            //     'productdescription' => 'Heavyweight cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front, back, and along the sleeves',
            //     'sku' => 'PC.BLO-UA008',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '18',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'PC SPORT RUGBY – YELLOWNAVY',
            //     'productdescription' => 'Heavyweight Cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Collection logo patch on the front. Color-block details using sewn panels.',
            //     'sku' => 'PC.BLO-UA009',
            //     'productprice' => '500000',
            //     'productsize' => '-',
            //     'productquantity' => '38',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 25,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'PC SPORT SHORT PANTS – NAVY',
            //     'productdescription' => 'Summer shorts with full printed graphics on Balotelli fabric. Completed with side pockets, one back pocket and elastic waistband.',
            //     'sku' => 'PC.BLO-UA003',
            //     'productprice' => '400000',
            //     'productsize' => '-',
            //     'productquantity' => '17',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'SHROOM SHORT PANTS – BLUE',
            //     'productdescription' => 'Summer shorts with full printed graphics on Balotelli fabric. Completed with side pockets, one back pocket and elastic waistband.',
            //     'sku' => 'PC.BLO-UA004',
            //     'productprice' => '280000',
            //     'productsize' => '-',
            //     'productquantity' => '19',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 25,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Mushroom Bucket Hat – Black',
            //     'productdescription' => 'Made from polar fabric. Embroidered graphic on the front.',
            //     'sku' => 'PC.BLO-UA001',
            //     'productprice' => '175000',
            //     'productsize' => '-',
            //     'productquantity' => '24',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'LAWS OF THE UNIVERSE STICKER PACK',
            //     'productdescription' => 'Sticker pack containing six pieces of vinyl stickers with variation in cutting size. Suitable for laptops, guitars, and other objects you love.',
            //     'sku' => 'PC.BLO-UA002',
            //     'productprice' => '50000',
            //     'productsize' => '-',
            //     'productquantity' => '20',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 25,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'COLLEGE TEE – BLACK',
            //     'productdescription' => 'Heavyweight Cotton t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front.',
            //     'sku' => 'PC.BLO-UA024',
            //     'productprice' => '300000',
            //     'productsize' => '-',
            //     'productquantity' => '30',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'FLOWER HEAD TEE – SOFT BLUE',
            //     'productdescription' => 'Heavyweight cotton t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front and back.',
            //     'sku' => 'PC.BLO-UA025',
            //     'productprice' => '300000',
            //     'productsize' => '-',
            //     'productquantity' => '35',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'MARATHON SNATCH TEE – BLACK',
            //     'productdescription' => 'Heavyweight cotton long sleeve t-shirt (16S/250GSM). 100% cotton. Pre-washed to minimize shrinkage. Printed in plastisol on the front, back, and along the sleeves',
            //     'sku' => 'PC.BLO-UA026',
            //     'productprice' => '300000',
            //     'productsize' => '-',
            //     'productquantity' => '34',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 25,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'CREATURE WORK PANTS – BLACK',
            //     'productdescription' => '-',
            //     'sku' => 'PC.BLO-UA022',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '14',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'PC SPORT PANTS – BLACK',
            //     'productdescription' => 'Heavy fleece pants with regular fit. Made of 100% cotton. Completed with elastic waistband, adjustable drawstring, and side pockets. Printed graphic on the front.',
            //     'sku' => 'PC.BLO-UA023',
            //     'productprice' => '500000',
            //     'productsize' => '-',
            //     'productquantity' => '45',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 25,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'SHROOMS FOLDABLE SHOPPING BAG – YELLOW',
            //     'productdescription' => 'Foldable shopping bag made out of ripstop nylon. Direct printed to garment all over. Especially made to carry all your belongings.',
            //     'sku' => 'PC.BLO-UA020',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '57',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 25,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'SUN TOTEBAG – BLACK',
            //     'productdescription' => 'Totebag made from canvas drill with full printed graphics.',
            //     'sku' => 'PC.BLO-UA021',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '58',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 26,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Alaskan Front Tees Black',
            //     'productdescription' => '20s American Cotton
            //     Hand-drawn designs
            //     High Grade Plastisol Ink',
            //     'sku' => 'SA.BLO-UA009',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '38',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Pierce Hoodie',
            //     'productdescription' => '100% American Cotton Fleece
            //     Hand-drawn Design
            //     Premium Plastisol Screen Printed',
            //     'sku' => 'SA.BLO-UA010',
            //     'productprice' => '370000',
            //     'productsize' => '-',
            //     'productquantity' => '20',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Sage x Havana Sunset Mountain',
            //     'productdescription' => 'Printed premium rayon fabric
            //     Hand-drawn designs
            //     Boxed Fit
            //     Open collar construction',
            //     'sku' => 'SA.BLO-UA011',
            //     'productprice' => '299000',
            //     'productsize' => '-',
            //     'productquantity' => '25',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Senjo Tees Khaki',
            //     'productdescription' => '20s American Cotton
            //     Hand-drawn designs
            //     High Grade Plastisol Ink',
            //     'sku' => 'SA.BLO-UA012',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '40',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Solid Crafts JP Tees',
            //     'productdescription' => '20s American Cotton
            //     Hand-drawn designs
            //     High Grade Plastisol Ink',
            //     'sku' => 'SA.BLO-UA014',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '52',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 26,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => '7th Anniversary Special  River 18oz Unsanforized Deep Indigo x Blue Weft',
            //     'productdescription' => '18oz loomstate Deep Indigo x Brown Weft selvedge denim
            //     Milled exclusively in Sage Denim Foundry - Japanese material, milled in Indonesia
            //     100% cotton - spinned in Japan
            //     Brown selvedge line
            //     Deep Indigo x Brown Weft
            //     Right hand twill
            //     Ring slub
            //     Rigid and hairy
            //     Slim & slim straight cut
            //     Single felled inseam with gold thread
            //     Mountain inspired gold arcuate
            //     Raised belt loop
            //     Polaris symbol tab - White for Slim & Blue for Slim Straight cut
            //     One way waistband stitching with signature "V" shape
            //     Belt loop hook
            //     Off white twill pocket lining
            //     Sage embossed copper rivets
            //     Hidden rivets
            //     Sage signature pattern black button
            //     5mm veg-tan cowhide patch inked with River special edition',
            //     'sku' => 'SA.BLO-UA004',
            //     'productprice' => '1150000',
            //     'productsize' => '-',
            //     'productquantity' => '62',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => '7th Anniversary Special  Sierra 18oz Unsanforized Deep Indigo x Brown Weft',
            //     'productdescription' => '18oz loomstate Deep Indigo x Brown Weft selvedge denim
            //     Milled exclusively in Sage Denim Foundry - Japanese material, milled in Indonesia
            //     100% cotton - spinned in Japan
            //     Brown selvedge line
            //     Deep Indigo x Brown Weft
            //     Right hand twill
            //     Ring slub
            //     Rigid and hairy
            //     Slim & slim straight cut
            //     Single felled inseam with gold thread
            //     Mountain inspired gold arcuate
            //     Raised belt loop
            //     Polaris symbol tab - White for Slim & Blue for Slim Straight cut
            //     One way waistband stitching with signature "V" shape
            //     Belt loop hook
            //     Off white twill pocket lining
            //     Sage embossed copper rivets
            //     Hidden rivets
            //     Sage signature pattern black button
            //     5mm veg-tan cowhide patch inked with Sierra special edition',
            //     'sku' => 'SA.BLO-UA005',
            //     'productprice' => '1150000',
            //     'productsize' => '-',
            //     'productquantity' => '22',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Rover Denim – 14oz Indigo Denim',
            //     'productdescription' => '14oz sanforized indigo denim
            //     Ring spun
            //     Projectile-Loomed
            //     100% cotton
            //     Rope dyed deep indigo
            //     Right hand twill
            //     Slim tapered cut
            //     Single felled inseam with gold thread
            //     Plain backpocket
            //     Polaris Symbol tab
            //     Heavy cotton ecru twill pocket lining
            //     Sage embossed copper rivets
            //     Hidden rivets
            //     Sage signature pattern black button
            //     Inked and embossed pull up cowhide patch
            //     Chainstitched by Union Special 43200G',
            //     'sku' => 'SA.BLO-UA006',
            //     'productprice' => '520000',
            //     'productsize' => '-',
            //     'productquantity' => '28',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Rover Denim – 14oz Indigo x Black Denim',
            //     'productdescription' => '14oz sanforized deep indigo warp x black weft
            //     Ring spun
            //     Projectile-Loomed
            //     100% cotton
            //     Rope dyed deep indigo
            //     Right hand twill
            //     Slim tapered cut
            //     Navy blue stealth stitching
            //     Plain backpocket
            //     White Polaris Symbol tab
            //     Heavy cotton ecru twill pocket lining
            //     Sage embossed copper rivets
            //     Hidden rivets
            //     Sage signature pattern black button
            //     Inked and embossed pull up cowhide patch
            //     Chainstitched with Union Special 43200G',
            //     'sku' => 'SA.BLO-UA007',
            //     'productprice' => '600000',
            //     'productsize' => '-',
            //     'productquantity' => '34',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Rover Denim – 14oz Indigo x Black Denim',
            //     'productdescription' => '21oz sanforized deep indigo selvedge denim
            //     Specifically and exclusively milled for Sage
            //     100% extra long staple cotton
            //     Deep blue selvedge line
            //     Rope dyed deep indigo
            //     Right hand twill
            //     Ring slub
            //     Slim & slim straight cut
            //     Single felled inseam with gold thread
            //     Mountain inspired gold arcuate
            //     Raised belt loop
            //     Polaris symbol tab – White for Slim & Blue for Slim Straight cut
            //     One way waistband stitching with signature “V” shape
            //     Belt loop hook
            //     Off white twill pocket lining
            //     Sage embossed copper rivets
            //     Hidden rivets
            //     Sage signature pattern black button
            //     High pressure stamped 2mm buffalo hide patch',
            //     'sku' => 'SA.BLO-UA008',
            //     'productprice' => '1250000',
            //     'productsize' => '-',
            //     'productquantity' => '6',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 26,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Sage Craftworks  Bearer Belt Tan',
            //     'productdescription' => 'Finest grade vegetable tanned leather
            //     Tan color
            //     Brass buckle
            //     Handstitch detailing
            //     Embossed with Sage signature details
            //     Burnished edge using natural beeswax
            //     Handsewn with linen thread
            //     Size 29" – 36"',
            //     'sku' => 'SA.BLO-UA001',
            //     'productprice' => '320000',
            //     'productsize' => '-',
            //     'productquantity' => '9',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Sage Craftworks  Mountwise Bifold Wallet Natural',
            //     'productdescription' => 'Finest grade vegetable tanned leather
            //     Natural color
            //     Mountain ornament with brogue detailing
            //     Burnished edge using natural beeswax
            //     Handsewn with ramie thread
            //     Side cut for easy acess
            //     Quick slot on the back',
            //     'sku' => 'SA.BLO-UA002',
            //     'productprice' => '600000',
            //     'productsize' => '-',
            //     'productquantity' => '12',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 26,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Talon Lanyard II Tan',
            //     'productdescription' => 'Sage original design pattern
            //     1.5-2mm vegetable tanned water buffalo leather
            //     Natural color
            //     High pressure stamped with signature pattern
            //     9.5cm length x 2.5cm width
            //     Silver nickel hook',
            //     'sku' => 'SA.BLO-UA003',
            //     'productprice' => '80000',
            //     'productsize' => '-',
            //     'productquantity' => '17',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 27,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'LORDE TSHIRT – BLACK',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA008',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '26',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Shining Bright and Scooby-Doo Boo Shirt',
            //     'productdescription' => 'Shirt Collection Shining Bright co and Schoobydoo. This is the best combination of quality materials for screen printing materials. Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
            //     'sku' => 'SB.BLO-UA009',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '42',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Shining Bright Driblingz Crewneck',
            //     'productdescription' => 'Crewneck Shining Bright co. This is the best combination of quality materials & types of screen printing. Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
            //     'sku' => 'SB.BLO-UA010',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '46',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Shining Bright G4sh Tshirt',
            //     'productdescription' => 'Shining Bright co. This is the best combination of quality materials & types of screen printing. Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
            //     'sku' => 'SB.BLO-UA011',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '86',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 27,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'LUXE SHORT PANTS – GREY',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA007',
            //     'productprice' => '300000',
            //     'productsize' => '-',
            //     'productquantity' => '20',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 27,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Shining Bright Flacid Socks',
            //     'productdescription' => 'Shining Bright Socks co. This is the best blend of quality materials & materials.
            //     Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
            //     'sku' => 'SB.BLO-UA001',
            //     'productprice' => '300000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Shining Bright Victoria Sunglasses',
            //     'productdescription' => 'Shining Bright Socks co. This is the best blend of quality materials & materials.
            //     Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
            //     'sku' => 'SB.BLO-UA002',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '41',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Shining Bright X Noxa Pin',
            //     'productdescription' => 'Material: Acrylic

            //     Get 3 (three) in one package',
            //     'sku' => 'SB.BLO-UA003',
            //     'productprice' => '50000',
            //     'productsize' => '-',
            //     'productquantity' => '3',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 27,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'BILLIARD BALLS LOGO TSHIRT – PURPLE',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA022',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '7',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Shining Bright and Scooby-Doo Whoa Pocket Tees',
            //     'productdescription' => 'Pocket T-Shirt Colection Shining Bright co and Schoobydoo. This is the best combination of quality materials for screen printing materials. Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
            //     'sku' => 'SB.BLO-UA023',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'VIBRANT LOGO TSHIRT – BLUE',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA024',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '35',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 27,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'C&S WORK PANTS – BLACK-OLIVE',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA020',
            //     'productprice' => '375000',
            //     'productsize' => '-',
            //     'productquantity' => '45',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'MARCO SHORT PANTS – WHITE',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA021',
            //     'productprice' => '275000',
            //     'productsize' => '-',
            //     'productquantity' => '65',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 27,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'AMARI SUNGLASSES – TORTOISE',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA015',
            //     'productprice' => '200000',
            //     'productsize' => '-',
            //     'productquantity' => '75',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'REN-78 DIGITAL WATCH – CLEAR',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA017',
            //     'productprice' => '350000',
            //     'productsize' => '-',
            //     'productquantity' => '77',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Shining Bright Alienation Wallet',
            //     'productdescription' => 'Shining Bright co. This is the best blend of quality materials & materials.
            //     Coupled with an attractive design character, this is what makes the Shiningbrightco brand one of the best brands in Indonesia.',
            //     'sku' => 'SB.BLO-UA018',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '45',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 27,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'SHINING LIFE NAIL CLIPPER – BLACK',
            //     'productdescription' => '-',
            //     'sku' => 'SB.BLO-UA019',
            //     'productprice' => '175000',
            //     'productsize' => '-',
            //     'productquantity' => '37',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 28,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Mantra Orange Shirt',
            //     'productdescription' => '-',
            //     'sku' => 'TD.BLO-UA002',
            //     'productprice' => '330000',
            //     'productsize' => '-',
            //     'productquantity' => '39',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 28,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Shirt',
            //     'productdescription' => 'The piece that surely will brighten up your closet mix. An abstraction of a scene of reaping future and sowing hope in collaboration with Abenk Alter. Incorporate a touch of classy festivity to your days. Check out our 3 other articles collaborated especially with Abenk Alter, Available in short pants as well.',
            //     'sku' => 'TD.BLO-UA003',
            //     'productprice' => '479000',
            //     'productsize' => '-',
            //     'productquantity' => '49',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 28,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'All Day Pajamas Tosca Short Pants',
            //     'productdescription' => 'Presenting you, your all day, 24 hours essential is our All Day Pajamas Collection. A collection of clothing perfect to be mix and matched to get suited up to snuggle and dressed down to mingle. Get in your pajamas and start your day now!',
            //     'sku' => 'TD.BLO-UA001',
            //     'productprice' => '129000',
            //     'productsize' => '-',
            //     'productquantity' => '61',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 28,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Contour Miro Shirt',
            //     'productdescription' => 'A short dance for the long run, one more stroke of damn good feeling for a long lasting fling with you. With each stroke and splash of colors that bring happiness to your life today, tomorrow, and beyond.

            //     We hope you notice not only the best of what Contour Capsule can offer, but to find beauty in the perfectly imperfect sketches of each unique artwork. For you are the ones who help rediscover Contour Shirt, and we are here to help you reimagine what\'s possible',
            //     'sku' => 'TD.BLO-UA015',
            //     'productprice' => '380000',
            //     'productsize' => '-',
            //     'productquantity' => '16',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 28,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'All Day Pajamas Blue Long Pants',
            //     'productdescription' => 'Presenting you, your all day, 24 hours essential is our All Day Pajamas Collection. A collection of clothing perfect to be mix and matched to get suited up to snuggle and dressed down to mingle. Get in your pajamas and start your day now!',
            //     'sku' => 'TD.BLO-UA011',
            //     'productprice' => '129000',
            //     'productsize' => '-',
            //     'productquantity' => '56',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 28,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Small Bag',
            //     'productdescription' => '-',
            //     'sku' => 'TD.BLO-UA010',
            //     'productprice' => '118000',
            //     'productsize' => '-',
            //     'productquantity' => '41',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'THE GOODS DEPT - Good Heart T-Shirt Brown',
            //     'productdescription' => '- Printed T-Shirt
            //     - Round neck
            //     - Long sleeves
            //     - Regular fit
            //     - Material: Cotton',
            //     'sku' => 'TG.BLO-UA013',
            //     'productprice' => '135000',
            //     'productsize' => '-',
            //     'productquantity' => '19',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'THE GOODS DEPT - Good Heart T-Shirt Red',
            //     'productdescription' => '- Printed T-Shirt
            //     - Round neck
            //     - Long sleeves
            //     - Regular fit
            //     - Material: Cotton',
            //     'sku' => 'TG.BLO-UA014',
            //     'productprice' => '135000',
            //     'productsize' => '-',
            //     'productquantity' => '21',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'THE GOODS DEPT - Good Smile Tee White',
            //     'productdescription' => '- Printed T-Shirt
            //     - Round neck
            //     - Short sleeves
            //     - Regular fit
            //     - Material: Cotton',
            //     'sku' => 'TG.BLO-UA015',
            //     'productprice' => '143000',
            //     'productsize' => '-',
            //     'productquantity' => '24',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'THE GOODS DEPT - Jarvis Short Sleeve Shirt Dark Olive',
            //     'productdescription' => '- Collared neckline
            //     - Unlined
            //     - Regular fit
            //     - Short sleeves
            //     - Material: 100% Cotton
            //     - Color: Dark Olive',
            //     'sku' => 'TG.BLO-UA016',
            //     'productprice' => '250000',
            //     'productsize' => '-',
            //     'productquantity' => '27',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'THE GOODS DEPT - Sam Pocket T-Shirt Dark Green',
            //     'productdescription' => '- Solid color T-Shirt
            //     - Round neck
            //     - Long sleeves
            //     - Front pocket
            //     - Regular fit
            //     - Material: Cotton',
            //     'sku' => 'TG.BLO-UA018',
            //     'productprice' => '225000',
            //     'productsize' => '-',
            //     'productquantity' => '32',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'THE GOODS DEPT - Tom Pocket T-Shirt Dark Blue',
            //     'productdescription' => '- Solid color T-Shirt
            //     - Round neck
            //     - Short sleeves
            //     - Front pocket
            //     - Regular fit
            //     - Material: Cotton',
            //     'sku' => 'TG.BLO-UA019',
            //     'productprice' => '175000',
            //     'productsize' => '-',
            //     'productquantity' => '38',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 29,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'DREAM SLIDE - NAVY',
            //     'productdescription' => '- Wide strap sandals

            //     - Rubber upper
            
            //     - Rubber insole
            
            //     - PU outsole
            
            //     - Open toe',
            //     'sku' => 'TG.BLO-UA010',
            //     'productprice' => '279000',
            //     'productsize' => '-',
            //     'productquantity' => '4',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'NEON SLIDE - LIGHT GREEN',
            //     'productdescription' => '- Wide strap sandals

            //     - Rubber upper
            
            //     - Rubber insole
            
            //     - PU outsole
            
            //     - Open toe',
            //     'sku' => 'TG.BLO-UA011',
            //     'productprice' => '279000',
            //     'productsize' => '-',
            //     'productquantity' => '6',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Rama Sneakers - Black',
            //     'productdescription' => 'RZ1295 An oxford shoe with a casual twist but still a classic. Made of leather with a brushed finish, fabric lining, and rubber outsole',
            //     'sku' => 'TG.BLO-UA012',
            //     'productprice' => '269000',
            //     'productsize' => '-',
            //     'productquantity' => '11',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => '88RISING SACOCHE ORANGE',
            //     'productdescription' => 'Official Merchandise Heads in The Clouds by The Goods Dept',
            //     'sku' => 'TG.BLO-UA001',
            //     'productprice' => '199000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => '88RISING STICKER PACK',
            //     'productdescription' => 'Official Merchandise Heads in The Clouds by The Goods Dept',
            //     'sku' => 'TG.BLO-UA002',
            //     'productprice' => '29000',
            //     'productsize' => '-',
            //     'productquantity' => '18',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'OVER-P EASY LARGE SLING BAG BLACK',
            //     'productdescription' => 'The Goods Dept Over-P Large Sling Bag Black



            //     Unisex Totebag with detail black color and white font
            
            
            
            //     Volume Maximize : 3kg
            
            //     Size Details :
            
            //     Height: 35cm
            
            //     Width: 39 cm
            
            //     Depth: 15 cm',
            //     'sku' => 'TG.BLO-UA003',
            //     'productprice' => '300000',
            //     'productsize' => '-',
            //     'productquantity' => '29',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'OVER-P EASY SHOULDER BAG BLACK',
            //     'productdescription' => 'Over-P Easy Shoulder Bag Black



            //     Dimension: 24cm x 4cm x 15cm ; Strap : 126cm',
            //     'sku' => 'TG.BLO-UA004',
            //     'productprice' => '180000',
            //     'productsize' => '-',
            //     'productquantity' => '39',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'STICKER PACK RIPPLE.MIX',
            //     'productdescription' => 'STICKER PACK RIPPLE.MIX



            //     The Goods Dept x Ripple Totebag
            
            //     Heavily inspired by components that made a magazine enjoyable to read. A tribute to the golden days of printed media that paved the local creative culture',
            //     'sku' => 'TG.BLO-UA005',
            //     'productprice' => '29000',
            //     'productsize' => '-',
            //     'productquantity' => '49',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'THE GOODS DEPT CRUMPLED MINI SLING BLACK',
            //     'productdescription' => 'The Goods Dept Drawsting Backpack Crumpled Mini Sling



            //     Dimension: 19 cm x 16 cm ; strap : 139 cm',
            //     'sku' => 'TG.BLO-UA006',
            //     'productprice' => '300000',
            //     'productsize' => '-',
            //     'productquantity' => '59',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'THE GOODS DEPT SINGLE LOGO DRAWSTRING BAG',
            //     'productdescription' => 'The Goods Dept Drawstring Bag with Single Logo',
            //     'sku' => 'TG.BLO-UA008',
            //     'productprice' => '49000',
            //     'productsize' => '-',
            //     'productquantity' => '56',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'The Goods Dept Tote Bag Jakarta Coklat',
            //     'productdescription' => 'Oversized canvas totebag to fit all of your daily essentials.



            //     Size Chart:
            
            //     Height : 38 cm
            
            //     Widht: 35 cm
            
            //     Depth : 10 cm
            
            //     Handle drop : 54 cm',
            //     'sku' => 'TG.BLO-UA009',
            //     'productprice' => '149000',
            //     'productsize' => '-',
            //     'productquantity' => '65',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'LOGO LONGSLEEVE .DARK BROWN.S',
            //     'productdescription' => 'The Goods Dept x Ripple Long Sleeve T-shirt

            //     A tribute to the golden days of printed media that paved the local creative culture
            
            //     --
            
            //     Material: 100% COTTON 24\'S
            
            //     Size Detail (Width x Length) :
            
            //     S : 52 x 70
            
            //     M : 54 x 72
            
            //     L : 56 x 74
            
            //     XL : 58 x 76
            
            //     Care Instruction:
            
            //     WASH COLOR SEPARATELY, WASH INSIDE OUT, DO NOT IRON ON GRAPHIC, DO NOT BEACH.',
            //     'sku' => 'TG.BLO-UA041',
            //     'productprice' => '279000',
            //     'productsize' => '-',
            //     'productquantity' => '68',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'MULTICOLOR TEE SS.BLUE',
            //     'productdescription' => 'The Goods Dept x Ripple 1999 Logo T – Shirt

            //     1999 was the year Ripple cemented their ideology of an independent, mind-free and full of dedication magazine in Indonesia.
            
            //     --
            
            //     Material: 100% COTTON 24\'S
            
            //     Size Detail (Width x Length) :
            
            //     S : 52 x 70
            
            //     M : 54 x 72
            
            //     L : 56 x 74
            
            //     XL : 58 x 76
            
            //     Care Instruction:
            
            //     WASH COLOR SEPARATELY, WASH INSIDE OUT, DO NOT IRON ON GRAPHIC, DO NOT BEACH.',
            //     'sku' => 'TG.BLO-UA042',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '86',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'PUFF TEE SS.MUSTARD',
            //     'productdescription' => 'The Goods Dept x Ripple Logo T – Shirt

            //     A tribute to the golden days of printed media that paved the local creative culture
            
            //     --
            
            //     Material: 100% COTTON 24\'S
            
            //     Size Detail (Width x Length) :
            
            //     S : 52 x 70
            
            //     M : 54 x 72
            
            //     L : 56 x 74
            
            //     XL : 58 x 76
            
            //     Care Instruction:
            
            //     WASH COLOR SEPARATELY, WASH INSIDE OUT, DO NOT IRON ON GRAPHIC, DO NOT BEACH.',
            //     'sku' => 'TG.BLO-UA043',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '44',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'PUFF TEE SS.OFF WHITE',
            //     'productdescription' => 'The Goods Dept x Ripple Logo T – Shirt

            //     A tribute to the golden days of printed media that paved the local creative culture
            
            //     --
            
            //     Material: 100% COTTON 24\'S
            
            //     Size Detail (Width x Length) :
            
            //     S : 52 x 70
            
            //     M : 54 x 72
            
            //     L : 56 x 74
            
            //     XL : 58 x 76
            
            //     Care Instruction:
            
            //     WASH COLOR SEPARATELY, WASH INSIDE OUT, DO NOT IRON ON GRAPHIC, DO NOT BEACH.',
            //     'sku' => 'TG.BLO-UA044',
            //     'productprice' => '249000',
            //     'productsize' => '-',
            //     'productquantity' => '52',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 29,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => '88RISING SANDAL SLIP ON WHITE',
            //     'productdescription' => 'Official Merchandise Heads in The Clouds by The Goods Dept',
            //     'sku' => 'TG.BLO-UA037',
            //     'productprice' => '199000',
            //     'productsize' => '-',
            //     'productquantity' => '25',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'GOODS MULES RED',
            //     'productdescription' => 'The Goods Dept Round Heel Mules',
            //     'sku' => 'TG.BLO-UA038',
            //     'productprice' => '169000',
            //     'productsize' => '-',
            //     'productquantity' => '30',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'GOODS LIZZY SANDAL MIX',
            //     'productdescription' => 'The Goods Dept Lizzy Sandal Mix',
            //     'sku' => 'TG.BLO-UA039',
            //     'productprice' => '100000',
            //     'productsize' => '-',
            //     'productquantity' => '47',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'GOODS ROUND HEELS GREEN',
            //     'productdescription' => 'The Goods Dept Round Heel Pump



            //     Round heels mules with a pattern design on the heels for a different classy and elegant impression.',
            //     'sku' => 'TG.BLO-UA040',
            //     'productprice' => '149000',
            //     'productsize' => '-',
            //     'productquantity' => '57',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'NEON SLIDE - PINK',
            //     'productdescription' => '- Wide strap sandals

            //     - Rubber upper
            
            //     - Rubber insole
            
            //     - PU outsole
            
            //     - Open toe',
            //     'sku' => 'TG.BLO-UA041',
            //     'productprice' => '279000',
            //     'productsize' => '-',
            //     'productquantity' => '77',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'LOGO HAT.OLIVE.F',
            //     'productdescription' => 'The Goods Dept x Ripple Bonnie Hat

            //     A tribute to the golden days of printed media that paved the local creative culture
            
            //     --
            
            //     Material: COTTON CANVAS
            
            //     Size Detail:
            
            //     Free Size
            
            //     Care Instruction:
            
            //     WASH COLOR SEPARATELY, WASH INSIDE OUT, DO NOT IRON ON GRAPHIC, DO NOT BEACH.',
            //     'sku' => 'TG.BLO-UA030',
            //     'productprice' => '159000',
            //     'productsize' => '-',
            //     'productquantity' => '87',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'MULTICOLOR TOTE.OFF WHITE',
            //     'productdescription' => 'The Goods Dept x Ripple Totebag

            //     Heavily inspired by components that made a magazine enjoyable to read. A tribute to the golden days of printed media that paved the local creative culture
            
            //     --
            
            //     Material: COTTON CANVAS
            
            //     Size Detail:
            
            //     38 CM X 35 CM X 10 CM
            
            //     Care Instruction:
            
            //     WASH COLOR SEPARATELY, WASH INSIDE OUT, DO NOT IRON ON GRAPHIC, DO NOT BEACH.',
            //     'sku' => 'TG.BLO-UA031',
            //     'productprice' => '179000',
            //     'productsize' => '-',
            //     'productquantity' => '89',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'The Goods Dept TRANSPARANT POUCH SET',
            //     'productdescription' => 'The Goods Dept. TRANSPARANT POUCH SET



            //     The Goods Dept Pouch Transparent Versatile with ziplock (1 Set, 2 pcs)
            
            //     Multipurpose pouch equipped with bubble wrap that makes it easier for you to store and organize various needs. Suitable for storing cosmetics or toiletries, because it is equipped with bubble wrap.
            
            
            
            //     Color: Transparent
            
            //     Material: LDPE plastic with Bubble Wrap and Ziplock lid
            
            //     Size Details:
            
            //     S: 20cm x 17cm
            
            //     M: 25cm x 21.5cm',
            //     'sku' => 'TG.BLO-UA034',
            //     'productprice' => '55000',
            //     'productsize' => '-',
            //     'productquantity' => '57',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 29,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'THUNDER R TOTE.OLIVE',
            //     'productdescription' => 'The Goods Dept x Ripple Totebag

            //     Heavily inspired by components that made a magazine enjoyable to read. A tribute to the golden days of printed media that paved the local creative culture
            
            //     --
            
            //     Material: COTTON CANVAS
            
            //     Size Detail:
            
            //     38 CM X 35 CM X 10 CM
            
            //     Care Instruction:
            
            //     WASH COLOR SEPARATELY, WASH INSIDE OUT, DO NOT IRON ON GRAPHIC, DO NOT BEACH.',
            //     'sku' => 'TG.BLO-UA035',
            //     'productprice' => '179000',
            //     'productsize' => '-',
            //     'productquantity' => '97',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 30,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'HO VAGUE',
            //     'productdescription' => '-',
            //     'sku' => 'UH.BLO-UA002',
            //     'productprice' => '428000',
            //     'productsize' => '-',
            //     'productquantity' => '20',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 30,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Checkered Hart Scarf',
            //     'productdescription' => '-',
            //     'sku' => 'UH.BLO-UA001',
            //     'productprice' => '120000',
            //     'productsize' => '-',
            //     'productquantity' => '40',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 30,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'ABNORMAL CREWNECK',
            //     'productdescription' => '-',
            //     'sku' => 'UH.BLO-UA019',
            //     'productprice' => '420000',
            //     'productsize' => '-',
            //     'productquantity' => '48',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 30,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'TS THINKING',
            //     'productdescription' => '-',
            //     'sku' => 'UH.BLO-UA025',
            //     'productprice' => '248000',
            //     'productsize' => '-',
            //     'productquantity' => '60',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 31,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Gum (bts) Series',
            //     'productdescription' => '-',
            //     'sku' => 'VE.BLO-UA001',
            //     'productprice' => '385000',
            //     'productsize' => '-',
            //     'productquantity' => '30',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 31,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Hard13 Noir',
            //     'productdescription' => '-',
            //     'sku' => 'VE.BLO-UA002',
            //     'productprice' => '299000',
            //     'productsize' => '-',
            //     'productquantity' => '32',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 31,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Sang Sekerta',
            //     'productdescription' => '-',
            //     'sku' => 'VE.BLO-UA003',
            //     'productprice' => '385000',
            //     'productsize' => '-',
            //     'productquantity' => '38',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 31,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Urban',
            //     'productdescription' => '-',
            //     'sku' => 'VE.BLO-UA006',
            //     'productprice' => '299000',
            //     'productsize' => '-',
            //     'productquantity' => '48',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 31,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Armor',
            //     'productdescription' => '-',
            //     'sku' => 'VE.BLO-UA011',
            //     'productprice' => '299000',
            //     'productsize' => '-',
            //     'productquantity' => '58',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 31,
            //     'categoryid' => 3,
            //     'gender_id' => 2,
            //     'productname' => 'Ethnic Series',
            //     'productdescription' => '-',
            //     'sku' => 'VE.BLO-UA012',
            //     'productprice' => '299000',
            //     'productsize' => '-',
            //     'productquantity' => '38',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 32,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Slowday Exploration Shirt - Voyej x Tropic Thunder x Melfri Gazza',
            //     'productdescription' => 'SLOW DAY EXPLORATION

            //     "When you start to get overwhelmed by the pace of exploration, it is best to slow the mind for a day."
            
            //     .
            
            //     The illustration by Melfri Gazza try to capture the exploration of our ancestor whose heart and soul belong to the sea, and land.',
            //     'sku' => 'VE.BLO-UA006',
            //     'productprice' => '499000',
            //     'productsize' => '-',
            //     'productquantity' => '78',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 32,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'WEST INLAND Tee',
            //     'productdescription' => 'The West Inland tee are made to commemorate our store opening at the west district of Jakarta. Thus featured an illustration of Jakarta map and a word "phys.str" that stand for physical store.',
            //     'sku' => 'VE.BLO-UA007',
            //     'productprice' => '220000',
            //     'productsize' => '-',
            //     'productquantity' => '8',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 32,
            //     'categoryid' => 3,
            //     'gender_id' => 1,
            //     'productname' => 'Adler - Leather Sneaker',
            //     'productdescription' => 'Meet our new shoes collection, ADLER - taking the main silhouette of German army trainer, the upper is made from vegetable tanned leather with semi-tumbled finishing method combined with rubber sole underneath it.

            //     Adler will be the very first article from our shoe-line, there will be many others over time...',
            //     'sku' => 'VE.BLO-UA007',
            //     'productprice' => '1549000',
            //     'productsize' => '-',
            //     'productquantity' => '9',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 32,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Golden Hind Belt',
            //     'productdescription' => 'Golden Hind, the famous British ship that was captained by Sir Francis Drake and successfully sailed around the globe with this ship during his time. This is our new take on belt article, customize sized belt that will cover all of your waist size need (maximum for waist size 38). We\'ll cut the leather to match your waist size. Made from Brazilian Vegetable Tanned Leather combined with solid brass buckle.',
            //     'sku' => 'VE.BLO-UA001',
            //     'productprice' => '649000',
            //     'productsize' => '-',
            //     'productquantity' => '13',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 32,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Karimata V',
            //     'productdescription' => 'The fifth version of Karimata got this slope accent on the exterior’s edge, a little detail that set it apart from the previous series.
            //     Instead of card slots set on both sides, Karimata V features an internal coin pocket on the left side.
            //     Made from locally sourced natural vegetable tanned leather with supple characteristics.',
            //     'sku' => 'VE.BLO-UA002',
            //     'productprice' => '825000',
            //     'productsize' => '-',
            //     'productquantity' => '19',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 32,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Vasa III American',
            //     'productdescription' => 'As we are thriving to tackle the recent pandemic of COVID-19 that has lots of impacts both in national health & economic landscape, this PRE-ORDER method is one of our strategies to sustain.
            //     Please expect waiting time for production based on your order date, for instance; your order should be arrived within XX days (PO time) after your order date. Worry not, most probably it will be arrived faster than you thought.
            
            //     --
            
            //     VASA III AMERICANA is a compact and spacious BI-fold card wallet. Each compartment can hold multiple cards. The front one is an easy access to your business cards. The inside compartments are very suitable to keep your cards and folded paperbills needs. Made from American natural vegetable tanned cowhide, VASA III AMERICANA is machine-stitched using Durkopp Adler sewing machine.',
            //     'sku' => 'VE.BLO-UA003',
            //     'productprice' => '259000',
            //     'productsize' => '-',
            //     'productquantity' => '26',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 32,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Cruise Pouch - Horween Red Berry',
            //     'productdescription' => 'Cruise Pouch will accompany the fun you had while wandering around, be it through the unnamed road or concrete jungle. This compact pouch could hold your essentials such as a smartphone, daily wallet, and a personal hand sanitizer bottle (60ml). The journey awaits you.',
            //     'sku' => 'VE.BLO-UA020',
            //     'productprice' => '999000',
            //     'productsize' => '-',
            //     'productquantity' => '41',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 32,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Cruise Pouch - Horween Red Berry',
            //     'productdescription' => 'Cruise Pouch will accompany the fun you had while wandering around, be it through the unnamed road or concrete jungle. This compact pouch could hold your essentials such as a smartphone, daily wallet, and a personal hand sanitizer bottle (60ml). The journey awaits you.',
            //     'sku' => 'VE.BLO-UA020',
            //     'productprice' => '999000',
            //     'productsize' => '-',
            //     'productquantity' => '41',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 32,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Grote Bag',
            //     'productdescription' => 'With its subtle appearance, Grote Bag will go along fine with all of your daily journey. We want to empower you to reduce plastic usage by using this spacious bag as it will get better with time.',
            //     'sku' => 'VE.BLO-UA021',
            //     'productprice' => '549000',
            //     'productsize' => '-',
            //     'productquantity' => '47',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 32,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Passport Cover Americana',
            //     'productdescription' => 'The product that all of you have been asking for such a long time.
            //     We present Passport Cover or Holder to give your standard passport a better look. Made from American vegetable tanned leather, able to hold your folded boarding pass and one business card slot inside the holder.
            
            //     Let your journey starts with this item.',
            //     'sku' => 'VE.BLO-UA027',
            //     'productprice' => '429000',
            //     'productsize' => '-',
            //     'productquantity' => '55',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 33,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Wellborn Wire FP Shirt Black',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA020',
            //     'productprice' => '153000',
            //     'productsize' => '-',
            //     'productquantity' => '67',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 33,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Wellborn Hellday White T-Shirt',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA021',
            //     'productprice' => '88000',
            //     'productsize' => '-',
            //     'productquantity' => '27',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 33,
            //     'categoryid' => 1,
            //     'gender_id' => 1,
            //     'productname' => 'Wellborn Piece FP Black Shirt',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA022',
            //     'productprice' => '153000',
            //     'productsize' => '-',
            //     'productquantity' => '83',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 33,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Wellborn Cargo Short Black',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA010',
            //     'productprice' => '280000',
            //     'productsize' => '-',
            //     'productquantity' => '38',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 33,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Wellborn Denim Distressed Alpha',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA005',
            //     'productprice' => '170000',
            //     'productsize' => '-',
            //     'productquantity' => '42',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 33,
            //     'categoryid' => 2,
            //     'gender_id' => 1,
            //     'productname' => 'Wellborn Slim Fit Chino Beige Pants',
            //     'productdescription' => 'Classic, but make it more stylish and modern at the same time. Slim Fit Chino Pants are made from a comfortable cotton twill, featuring two front pockets and two semi-flap back pockets. Cut in a slim-fit silhouette, these pair of chino pants are finished with a zip fly and a button closure.',
            //     'sku' => 'WB.BLO-UA011',
            //     'productprice' => '150000',
            //     'productsize' => '-',
            //     'productquantity' => '58',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 33,
            //     'categoryid' => 4,
            //     'gender_id' => 1,
            //     'productname' => 'Wellborn Jungle Bucket Hat Black',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA001',
            //     'productprice' => '123000',
            //     'productsize' => '-',
            //     'productquantity' => '68',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 33,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Wellborn Group White T-Shirt',
            //     'productdescription' => 'The group of surrealism.
            //     Group White T-Shirt featuring a lettering wellborn at the left chest. For the back there’s a list for surrealism painters. The T-Shirt made in a midweight cotton jersey, combed 30s for a soft hand feel, custom graphics manual screen printing and cut in regular fit.',
            //     'sku' => 'WB.BLO-UA037',
            //     'productprice' => '78000',
            //     'productsize' => '-',
            //     'productquantity' => '86',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 33,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Wellborn Logo Maroon T-Shirt',
            //     'productdescription' => 'Wellborn Logo Maroon T-Shirt with a just ordinary Wellborn’s logo at the chest. This T-Shirt made from soft cotton combed, cut in a regular fit and a rib-knit crew neck. Maroon colour give you a confident style.',
            //     'sku' => 'WB.BLO-UA045',
            //     'productprice' => '78000',
            //     'productsize' => '-',
            //     'productquantity' => '21',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 33,
            //     'categoryid' => 1,
            //     'gender_id' => 2,
            //     'productname' => 'Wellborn Untruth SS Orange T-Shirt',
            //     'productdescription' => 'SS Untruth Orange T-Shirt featuring a quotes by Mahatma Gandhi “Shall conquer untruth by truth. And in resisting untruth, I shall put up with all suffering” at the chest. For the back side there’s a lettering “Wellborn, Born Divine”. This T-Shirt made from soft cotton combed, cut in a regular fit and a rib-knit crew neck. Neon orange vibes give you a confident style.',
            //     'sku' => 'WB.BLO-UA034',
            //     'productprice' => '78000',
            //     'productsize' => '-',
            //     'productquantity' => '15',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 33,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'Wellborn Rascal Black Pants',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA030',
            //     'productprice' => '385000',
            //     'productsize' => '-',
            //     'productquantity' => '19',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 33,
            //     'categoryid' => 2,
            //     'gender_id' => 2,
            //     'productname' => 'Wellborn Work Pant Long Khaki',
            //     'productdescription' => 'A pair of work pants, but with a street style vibe.

            //     Crafted from baby canvas which makes these pants thinner, softer, more breathable, and more flexible, Work Pants Long is cut in flat front silhouette and finished with a button and zip closure to the front, side pockets, and back pockets with velcro closures.',
            //     'sku' => 'WB.BLO-UA031',
            //     'productprice' => '260000',
            //     'productsize' => '-',
            //     'productquantity' => '23',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],

            // [
            //     'brandid' => 33,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Wellborn Jungle Bucket Hat Black',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA002',
            //     'productprice' => '78000',
            //     'productsize' => '-',
            //     'productquantity' => '27',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            // [
            //     'brandid' => 33,
            //     'categoryid' => 4,
            //     'gender_id' => 2,
            //     'productname' => 'Wellborn Pocket Bucket Hat Olive',
            //     'productdescription' => '-',
            //     'sku' => 'WB.BLO-UA001',
            //     'productprice' => '78000',
            //     'productsize' => '-',
            //     'productquantity' => '2',
            //     'productimage' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012 - 450k/picture.jpg',
            //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            // ],
            

        ]);
    }
}
