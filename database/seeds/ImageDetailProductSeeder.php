<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageDetailProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagedetail')->insert([
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Tops/AGLXY GRAPHIC SPREAD 011/AGLXY_GRAPHIC_SPREAD_011.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Tops/AGLXY GRAPHIC SPREAD 011/sdasdd.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Tops/AGLXY RUGBY SHIRT 012/Rugby-Shirt-012-Navy-Front-Product-Image-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Tops/AGLXY RUGBY SHIRT 012/Rugby-Shirt-012-Navy-Back-Product-Image-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Tops/AGLXY STRIPES/AGLXY_STRIPES.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Tops/AGLXY STRIPES/sfasfs.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Tops/AGLXY X STAPLE BUBBLE GRAFITY/Staple-Graff-Front-Product-Image-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Tops/AGLXY X STAPLE BUBBLE GRAFITY/Staple-Graff-Back-Product-Image-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Tops/JEFF THE PIGEON/JEFF_THE_PIGEON-HEATHER_GREY.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Tops/JEFF THE PIGEON/Staple-Heather-Back-Product-Image-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Tops/WHATEVER IT TAKES 011/Whatever-it-Takes-012-Black-Front-Product-Image-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Tops/WHATEVER IT TAKES 011/Whatever-it-Takes-012-Black-Back-Product-Image-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012/AGLXY-Shorts-012-Black-Front-Product-Image-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Bottom/AGLXY POPPLIN SHORTS 012/AGLXY-Shorts-012-Black-Back-Product-Image1-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Accessories/ALL GONE BOOK 2020/ALL_GONE_BOOK_2020.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Accessories/ALL GONE BOOK 2020/fafsfss.jpg',
                'image_detail_3' => 'Ageless Galaxy/Men/Accessories/ALL GONE BOOK 2020/dadss.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Accessories/PATTA RIPSTOP SHOULDER BAG/PATTA RIPSTOP SHOULDER BAG.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Accessories/PATTA RIPSTOP SHOULDER BAG/Cassasure.jpg',
                'image_detail_3' => 'Ageless Galaxy/Men/Accessories/PATTA RIPSTOP SHOULDER BAG/dadasds.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Accessories/TERRY THE SPACE SHUTTLE PIN/Terry-Pin-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Accessories/TERRY THE SPACE SHUTTLE PIN/Terry-Pin-Front-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Accessories/WHATEVER IT TAKES 010 KEYCHAIN/Whatever-it-Takes-Black-White-Front-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Accessories/WHATEVER IT TAKES 010 KEYCHAIN/Whatever-it-Takes-Black-White-Back-555x555.jpg',
                'image_detail_3' => 'Ageless Galaxy/Men/Accessories/WHATEVER IT TAKES 010 KEYCHAIN/Whatever-it-Takes-Black-White-Box-555x555.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Men/Accessories/WHATEVER IT TAKES E-MONEY/WHATEVER_IT_TAKES_E-MONEY.jpg',
                'image_detail_2' => 'Ageless Galaxy/Men/Accessories/WHATEVER IT TAKES E-MONEY/sadsds.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Tops/AGLXY HZ TRACKTOP 011/AGLXY_HZ_TRACKTOP_011–BLACKPURPLE.jpg',
                'image_detail_2' => 'Ageless Galaxy/Women/Tops/AGLXY HZ TRACKTOP 011/asfsfff.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Tops/BYB POCKET STRIPES/BYB_POCKET_STRIPES.jpg',
                'image_detail_2' => 'Ageless Galaxy/Women/Tops/BYB POCKET STRIPES/fasfsfe.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Tops/COMMITTED TO TIME 012 LS/CTT-012-LS-Purple-Front-Product-Image-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Women/Tops/COMMITTED TO TIME 012 LS/CTT-012-LS-Purple-Back-Product-Image-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Tops/PATTA CURVE LOGO LONGSLEEVE/PATTA_CURVE_LOGO_LONGSLEEVE.JPG',
                'image_detail_2' => 'Ageless Galaxy/Women/Tops/PATTA CURVE LOGO LONGSLEEVE/ASDD.JPG',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Tops/PATTA WEIRD BABY HOODED SWEATER/PATTA_WEIRD_BABY_HOODED_SWEATER.JPG',
                'image_detail_2' => 'Ageless Galaxy/Women/Tops/PATTA WEIRD BABY HOODED SWEATER/adsdse.JPG',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Tops/SPACE MONKEY ELEMENTS/AGLXY_BR_2018_AGLXYXDALEK_PR_TSG001_1-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Women/Tops/SPACE MONKEY ELEMENTS/AGLXY_BR_2018_AGLXYXDALEK_PR_TSG001_2-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Bottom/AGLXY POPPLIN SHORTS 012/AGLXY_POPPLIN_SHORTS_012.JPG',
                'image_detail_2' => 'Ageless Galaxy/Women/Bottom/AGLXY POPPLIN SHORTS 012/sadsdd.JPG',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Accessories/AGLXY X BAKMI GM NOODLE BOWL/GM-Bowl-Front-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Women/Accessories/AGLXY X BAKMI GM NOODLE BOWL/GM-Bowl-Back-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Accessories/CONTEMPORARY PIGEON PIN/CONTEMPORARY_PIGEON_PIN.JPG',
                'image_detail_2' => 'Ageless Galaxy/Women/Accessories/CONTEMPORARY PIGEON PIN/asfag.JPG',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Accessories/OUTER SPACE REFINED BASICS MONKEY TOTE BAG/AGLXY-x-Dalek-Totebag-Front-Product-Images-1-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Women/Accessories/OUTER SPACE REFINED BASICS MONKEY TOTE BAG/AGLXY-x-Dalek-Totebag-Back-Product-Images-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Accessories/TERRY THE SPACE SHUTTLE E-MONEY/TERRY_THE_SPACE_SHUTTLE_E-MONEY.JPG',
                'image_detail_2' => 'Ageless Galaxy/Women/Accessories/TERRY THE SPACE SHUTTLE E-MONEY/asdsdsfs.JPG',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ageless Galaxy/Women/Accessories/THE DISCOVERY 006 - CARPET/ACAG045-DISCOVERYcarpet-555x555.jpg',
                'image_detail_2' => 'Ageless Galaxy/Women/Accessories/THE DISCOVERY 006 - CARPET/ACAG045-DISCOVERYcarpet-02B-555x555.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Men/Tops/AHHA - DENIM RA KARTINI/AHHA_DENIM_RA_KARTINI.jpg',
                'image_detail_2' => 'AHHA/Men/Tops/AHHA - DENIM RA KARTINI/Capture2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Men/Tops/AHHA - Hoodie Si Pitung/AHHA-Hoodie_Si_Pitung.jpg',
                'image_detail_2' => 'AHHA/Men/Tops/AHHA - Hoodie Si Pitung/Capture2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Men/Tops/AHHA - Oversized T-Shirt - Cakil/AHHA_Oversized_T-Shirt-Cakil.jpg',
                'image_detail_2' => 'AHHA/Men/Tops/AHHA - Oversized T-Shirt - Cakil/Capture2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Men/Tops/AHHA - Oversized T-Shirt - Prambanan/AHHA_Oversized_T-Shirt-Prambanan.jpg',
                'image_detail_2' => 'AHHA/Men/Tops/AHHA Oversized T-Shirt - Prambanan/Capture2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Men/Tops/AHHA - Oversized T-Shirt - Si Pitung/AHHA-Oversized_T-Shirt-Si_Pitung.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Men/Accessories/AHHA MASK Indo Pride Edition PARANG HITAM/AHHA_MASK_Indo_Pride_Edition.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Men/Accessories/AHHA Navy Gym Bag/AHHA_Navy_Gym_Bag.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Men/Accessories/SlingBag AHHA Lenity Camo (Limited Edition)/SlingBag_AHHA_Lenity_Camo.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Tops/AHHA - T-Shirt Diponegoro/asdsdsds.jpg',
                'image_detail_2' => 'AHHA/Women/Tops/AHHA - T-Shirt Diponegoro/AHHA- T-Shirt_Diponegoro.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Tops/AHHA - T-Shirt Fahombo (Limited Edition)/FAFSFSe.jpg',
                'image_detail_2' => 'AHHA/Women/Tops/AHHA - T-Shirt Fahombo (Limited Edition)/AHHA-T-Shirt_Fahombo.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Tops/AHHA - T-Shirt Let it Burn/AHHA-T-Shirt_Let_it_Burn.jpg',
                'image_detail_2' => 'AHHA/Women/Tops/AHHA - T-Shirt Let it Burn/sadsds.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Tops/AHHA - T-Shirt Unity Batik/AHHA-T-Shirt_Unity_Batik.jpg',
                'image_detail_2' => 'AHHA/Women/Tops/AHHA - T-Shirt Unity Batik/ASDDSa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Tops/T-Shirt Kerapan Sapi (Limited Edition)/AHHA-T-Shirt_Kerapan_Sapi.jpg',
                'image_detail_2' =>'AHHA/Women/Tops/T-Shirt Kerapan Sapi (Limited Edition)/sadsdss.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Accessories/AHHA MASK Indo Pride Edition Jumputan/AHHA_MASK_Indo_Pride_Edition.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Accessories/AHHA MASK Indo Pride Edition TENUN TIMUR/AHHA_MASK_Indo_Pride_Edition_TENUN_TIMUR.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Accessories/Scrunchie Voal/Scrunchie_Voal.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'AHHA/Women/Accessories/Signature Pin Gold/Signature_Pin_Gold.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Tops/AYE X SMILEY ARCA DYE SMI WHITE TEES/asa.jpg',
                'image_detail_2' => 'Aye & Co/Men/Tops/AYE X SMILEY ARCA DYE SMI WHITE TEES/back.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Tops/AYE X SMILEY BELLATRO SMI - GREEN JACKET/faas.jpg',
                'image_detail_2' => 'Aye & Co/Men/Tops/AYE X SMILEY BELLATRO SMI - GREEN JACKET/44CB5D8A-05EC-4BE6-9D9F-060A09CFEE9E-34166-00000D564F5D7A9D_1604575995400_resized1024.jpg',
                'image_detail_3' => 'Aye & Co/Men/Tops/AYE X SMILEY BELLATRO SMI - GREEN JACKET/asafa.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Tops/Aye X Smiley Olens smi Dye Blue Hoodie/dia.jpg',
                'image_detail_2' => 'Aye & Co/Men/Tops/Aye X Smiley Olens smi Dye Blue Hoodie/1616412287988_1616412499743_resized1024.jpg',
                'image_detail_3' => 'Aye & Co/Men/Tops/Aye X Smiley Olens smi Dye Blue Hoodie/oks.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Tops/AYE X SMILEY PATRON SMI BLUE TYPE 2 JACKET/bb.jpg',
                'image_detail_2' => 'Aye & Co/Men/Tops/AYE X SMILEY PATRON SMI BLUE TYPE 2 JACKET/IMG_8348_1614000496175_resized1024.jpg',
                'image_detail_3' => 'Aye & Co/Men/Tops/AYE X SMILEY PATRON SMI BLUE TYPE 2 JACKET/afa.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Tops/AYE X SMILEY VITA SMI PEACH TEES/taga.jpg',
                'image_detail_2' => 'Aye & Co/Men/Tops/AYE X SMILEY VITA SMI PEACH TEES/afasa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Tops/ORDO LIME TEES/84AB71B0-8D9C-4208-BF11-FA7D4018CDE3_1603095032968_resized1024.jpeg',
                'image_detail_2' => 'Aye & Co/Men/Tops/ORDO LIME TEES/Capture.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Bottom/AYE X SMILEY QUARE SMI - BLACK DISTRESSED JEANS/0A923613-02C7-46B6-8B07-45D483330D53-7802-000003575D712166_1604577726568_resized1024.jpg',
                'image_detail_2' => 'Aye & Co/Men/Bottom/AYE X SMILEY QUARE SMI - BLACK DISTRESSED JEANS/basa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Bottom/BIGOLLO SLIM STRAIGHT SELVEDGE JEANS/DSCF6864_1587886312583_resized1024.jpg',
                'image_detail_2' => 'Aye & Co/Men/Bottom/BIGOLLO SLIM STRAIGHT SELVEDGE JEANS/fsafsa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Bottom/Sentinell Green Cargo Pants/asvzcbfn.jpg',
                'image_detail_2' => 'Aye & Co/Men/Bottom/Sentinell Green Cargo Pants/badbfnn.jpg',
                'image_detail_3' => 'Aye & Co/Men/Bottom/Sentinell Green Cargo Pants/IMG_9755_1616576615183_resized1024.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Bottom/WARDEN BLACK PANTS/49031571_0a01e96e-32b1-4996-95fb-2e493dfd3c7c_938_938_1582367555397._resized1024.jpg',
                'image_detail_2' => 'Aye & Co/Men/Bottom/WARDEN BLACK PANTS/afsaa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Men/Bottom/WARDEN KHAKI PANTS/49031571_43daae2f-2d82-4c79-85e2-d29e43770e0b_936_936_1582357369824._resized1024.jpg',
                'image_detail_2' => 'Aye & Co/Men/Bottom/WARDEN KHAKI PANTS/avsavavd.jpg',
                'image_detail_3' => 'Aye & Co/Men/Bottom/WARDEN KHAKI PANTS/bfbsda.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Women/Tops/AYE & CO FULGO TEE WHITE - 220K/1_253994a6-53ec-468e-be46-3582f68f7710_1350x1800.jpg',
                'image_detail_2' => 'Aye & Co/Women/Tops/AYE & CO FULGO TEE WHITE - 220K/2_ab5eed5b-3e18-4009-a0c3-33733f324f79_1350x1800.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Women/Tops/AYE & CO IGNIS BLACK TEE - 220K/1_8447ef74-ba92-4b22-b46c-44552a0f955c_1350x1800.jpg',
                'image_detail_2' => 'Aye & Co/Women/Tops/AYE & CO IGNIS BLACK TEE - 220K/2_5bd6edb4-ce37-4f29-9309-75f5843d3be0_1350x1800.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Women/Tops/AYE & CO PURUS VIOLET LONG SLEEVE T-SHIRT - 240K/2_58755950-d6a8-4d29-80b3-be4b7c058f7b_1350x1800.jpg',
                'image_detail_2' => 'Aye & Co/Women/Tops/AYE & CO PURUS VIOLET LONG SLEEVE T-SHIRT - 240K/1_f027f436-da73-43e7-90e4-ae317ec5d78d_1350x1800.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Women/Tops/FULGO - White Tshirt - 220K/49031571_9ae56baf-48af-4ddd-9348-f81bad2ce27d_1200_1200.jpg',
                'image_detail_2' => 'Aye & Co/Women/Tops/FULGO - White Tshirt - 220K/49031571_f71eb19f-e4ff-472d-a4a8-ede22dd5a67b_1200_1200.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Women/Accessories/AYE & CO CULTUS BLACK DAD CAP - 210K/sasds.jpg',
                'image_detail_2' => 'Aye & Co/Women/Accessories/AYE & CO CULTUS BLACK DAD CAP - 210K/sadsdse.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Aye & Co/Women/Accessories/VISUM Grey Navy Dad Cap - 190K/49031571_cb270d05-d15f-4bf3-857d-50ff3fb183e6_1505_1505.jpg',
                'image_detail_2' => 'Aye & Co/Women/Accessories/VISUM Grey Navy Dad Cap - 190K/49031571_702c9f22-a09c-4094-9bd0-0cc4f7be270e_2048_2047.jpg',
                'image_detail_3' => 'Aye & Co/Women/Accessories/VISUM Grey Navy Dad Cap - 190K/49031571_4a38f0d3-b023-4f70-97b0-050477e3ab86_1500_1500.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bear Wang Apparel/Men/Tops/Black False - 189K/IMG_0284-scaled.jpg',
                'image_detail_2' => 'Bear Wang Apparel/Men/Tops/Black False - 189K/IMG_0292-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bear Wang Apparel/Men/Tops/BWA Axy - 179K/Bear-Axy-1.jpg',
                'image_detail_2' => 'Bear Wang Apparel/Men/Tops/BWA Axy - 179K/Bear-Axy-3.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bear Wang Apparel/Men/Tops/BWA Rawr Bear - 179K/Rawr-Bear-1.jpg',
                'image_detail_2' => 'Bear Wang Apparel/Men/Tops/BWA Rawr Bear - 179K/BWA-Rawr-Bear.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bear Wang Apparel/Men/Bottom/BWA Bomb Trackpants Men Trousers - 350K/TB2.png',
                'image_detail_2' => 'Bear Wang Apparel/Men/Bottom/BWA Bomb Trackpants Men Trousers - 350K/TB3.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bear Wang Apparel/Men/Accessories/BWA Black Caps - 140K/Black-Caps-1.jpg',
                'image_detail_2' => 'Bear Wang Apparel/Men/Accessories/BWA Black Caps - 140K/Black-Caps-2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bear Wang Apparel/Women/Accessories/Beanie Hat BWA Beanie Hat - 165K/beanie-hat-BWA.png',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bear Wang Apparel/Women/Accessories/BWA Mask Newest Mouth Mask 03 - 35K/WhatsApp-Image-2017-12-21-at-9.23.40-AM-1.png',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Tops/JK DIGNITY 03 - 250K/JK-DIGNITY-03.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Tops/JK DIGNITY 03 - 250K/JK-DIGNITY-03-1-525x525.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Tops/JK REVIVAL 01 - 250K/JK-REVIVAL-01.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Tops/JK REVIVAL 01 - 250K/JK-REVIVAL-01-1-525x525.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Tops/JK STANIS LEATHER JACKET - 1.650K/stanis1.jpeg',
                'image_detail_2' => 'Bloods Industries/Men/Tops/JK STANIS LEATHER JACKET - 1.650K/stanis2.jpeg',
                'image_detail_3' => 'Bloods Industries/Men/Tops/JK STANIS LEATHER JACKET - 1.650K/stanis3.jpeg',
                'image_detail_4' => 'Bloods Industries/Men/Tops/JK STANIS LEATHER JACKET - 1.650K/stanis5.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Tops/LT SLICY 04 - 160K/LT-SLICY-04.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Tops/LT SLICY 04 - 160K/LT-SLICY-04-1-525x525.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Tops/SW DREAD - 315K/SW-DREAD.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Tops/SW KENNYS 01 - 299K/SW-KENNYS-01.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Tops/SW KENNYS 01 - 299K/SW-KENNYS-01-1-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Tops/SW KENNYS 01 - 299K/SW-KENNYS-01-2-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Tops/T FLAGY 04 - 100K/T-FLAGY-04.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Tops/T FLAGY 04 - 100K/T-FLAGY-04-1-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Tops/T FLAGY 04 - 100K/T-FLAGY-04-2-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Tops/T HEARTES 03 - 135K/T-HEARTES-03.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Tops/T HEARTES 03 - 135K/T-HEARTES-03-2-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Tops/T HEARTES 03 - 135K/T-HEARTES-03-3-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Bottom/BX ANIMISM - 95K/BX-ANIMISM.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Bottom/BX GRIFRICH - 67K/BX-GRIFRICH.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Bottom/BX GRIFRICH - 67K/BX-GRIFRICH-1-525x525.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Bottom/BX TRICOLOR - 95K/BX-TRICOLOR.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Bottom/BX TRICOLOR - 95K/BX-TRICOLOR-1.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Bottom/BX TRICOLOR - 95K/BX-TRICOLOR-2-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Bottom/JN COATER 04 - 329K/JN-COATER-04.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Bottom/JN COATER 04 - 329K/JN-COATER-04-1-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Bottom/JN COATER 04 - 329K/JN-COATER-04-2-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Bottom/JN ODRE 03 - 329K/JN-ODRE-03.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Bottom/JN ODRE 03 - 329K/JN-ODRE-03-1-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Bottom/JN ODRE 03 - 329K/JN-ODRE-03-2-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Bottom/ST GROSSY 02- 139K/ST-GROSSY-02-2-525x525.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Bottom/ST GROSSY 02- 139K/ST-GROSSY-02.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Bottom/ST GROSSY 02- 139K/ST-GROSSY-02-1-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Bottom/ST SUNSET - 165K/ST-SUNSET.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 01 - 390K/BLAZE-RUNNER-01-4.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 01 - 390K/BLAZE-RUNNER-01-3-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 01 - 390K/BLAZE-RUNNER-01-5-525x525.jpg',
                'image_detail_4' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 01 - 390K/BLAZE-RUNNER-01-1-525x525.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 03 - 390K/BLAZE-RUNNER-03-7-250x300.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 03 - 390K/BLAZE-RUNNER-03-2-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 03 - 390K/BLAZE-RUNNER-03-2-525x525 (1).jpg',
                'image_detail_4' => 'Bloods Industries/Men/Shoes/BLAZE RUNNER 03 - 390K/BLAZE-RUNNER-03-1-525x525.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Shoes/LUGED HI 03 - 349K/LUGED-HI-03-4.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Shoes/LUGED HI 03 - 349K/LUGED-HI-03-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Shoes/LUGED HI 03 - 349K/LUGED-HI-03-1-525x525.jpg',
                'image_detail_4' => 'Bloods Industries/Men/Shoes/LUGED HI 03 - 349K/LUGED-HI-03-2-525x525.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Shoes/LUGED LOW 03 - 325K/LUGED-LOW-03.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Shoes/LUGED LOW 03 - 325K/LUGED-LOW-03-1.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Shoes/LUGED LOW 03 - 325K/LUGED-LOW-03-1-525x525.jpg',
                'image_detail_4' => 'Bloods Industries/Men/Shoes/LUGED LOW 03 - 325K/LUGED-LOW-03-2.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Shoes/SD CAPITAL 01 - 199K/SD-CAPITAL-01.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Shoes/SD CAPITAL 01 - 199K/SD-CAPITAL-01-1-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Shoes/SD CAPITAL 01 - 199K/SD-CAPITAL-01-2-525x525.jpg',
                'image_detail_4' => 'Bloods Industries/Men/Shoes/SD CAPITAL 01 - 199K/SD-CAPITAL-01-3-525x525.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Shoes/SD ZAGATO 02 -199K/SD-ZAGATO-02-2.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Shoes/SD ZAGATO 02 -199K/SD-ZAGATO-02.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Shoes/SD ZAGATO 02 -199K/SD-ZAGATO-02-1.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Accessories/BEVEL HELMET - 335K/BEVEL-HELMET.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Accessories/BEVEL HELMET - 335K/BEVEL-HELMET-1-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Accessories/BEVEL HELMET - 335K/BEVEL-HELMET-3-525x525.jpg',
                'image_detail_4' => 'Bloods Industries/Men/Accessories/BEVEL HELMET - 335K/BEVEL-HELMET-5-525x525.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Accessories/LY COMBO 01 - 49K/LY-COMBO-01.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Accessories/SACK RAIN PROTECTOR 06 - 150K/SACK-RAIN-PROTECTOR-06.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Accessories/SACK RAIN PROTECTOR 06 - 150K/SACK-RAIN-PROTECTOR-06-1-525x525.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Accessories/SC WIRE - 69K/SC-WIRE-1.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Accessories/SC WIRE - 69K/SC-WIRE.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Accessories/SL OUNWEL 02 - 59K/SL-OUNWEL-02.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Accessories/SL OUNWEL 02 - 59K/SL-OUNWEL-02-1-525x525.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Accessories/WATCHES BW0215 03 - 345K/WATCHES-BW0215-03.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Accessories/WATCHES BW0215 03 - 345K/WATCHES-BW0215-03-1.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Accessories/WATCHES BW0215 03 - 345K/WATCHES-BW0215-03-2-525x525.jpg',
                'image_detail_4' => 'Bloods Industries/Men/Accessories/WATCHES BW0215 03 - 345K/WATCHES-BW0215-03-3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Accessories/WL ARGED - 109K/WL-ARGED.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Accessories/WL ARGED - 109K/WL-ARGED-1-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Accessories/WL ARGED - 109K/WL-ARGED-2-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Bloods Industries/Men/Accessories/WL SHIELD - 99K/WL-SHIELD.jpg',
                'image_detail_2' => 'Bloods Industries/Men/Accessories/WL SHIELD - 99K/WL-SHIELD-1-525x525.jpg',
                'image_detail_3' => 'Bloods Industries/Men/Accessories/WL SHIELD - 99K/WL-SHIELD-2-525x525.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Men/Shoes/Gazelle Hi BlackBlack/Copy-of-GAZELLE-HI-BLACK-BLACK-1-1000x1000.jpg',
                'image_detail_2' => 'Compass/Men/Shoes/Gazelle Hi BlackBlack/Copy-of-GAZELLE-HI-BLACK-BLACK-2-1000x1000.jpg',
                'image_detail_3' => 'Compass/Men/Shoes/Gazelle Hi BlackBlack/Copy-of-GAZELLE-HI-BLACK-BLACK-3-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Men/Shoes/Gazelle Hi Blue Sky/Copy-of-GAZELLE-HI-SKY-BLUE-1-1000x1000.jpg',
                'image_detail_2' => 'Compass/Men/Shoes/Gazelle Hi Blue Sky/Copy-of-GAZELLE-HI-SKY-BLUE-2-1000x1000.jpg',
                'image_detail_3' => 'Compass/Men/Shoes/Gazelle Hi Blue Sky/Copy-of-GAZELLE-HI-SKY-BLUE-3-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Men/Shoes/Gazelle Hi Cappuccino/Copy-of-GAZELLE-HI-CAPPUCCINO-1-1000x1000.jpg',
                'image_detail_2' => 'Compass/Men/Shoes/Gazelle Hi Cappuccino/Copy-of-GAZELLE-HI-CAPPUCCINO-2-1000x1000.jpg',
                'image_detail_3' => 'Compass/Men/Shoes/Gazelle Hi Cappuccino/Copy-of-GAZELLE-HI-CAPPUCCINO-3-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Men/Shoes/Gazelle Low Cappuccino/GAZELLE-LOW-CAPPUCCINO-1.jpg',
                'image_detail_2' => 'Compass/Men/Shoes/Gazelle Low Cappuccino/Copy-of-GAZELLE-LOW-CAPPUCCINO-2-1000x1000.jpg',
                'image_detail_3' => 'Compass/Men/Shoes/Gazelle Low Cappuccino/Copy-of-GAZELLE-LOW-CAPPUCCINO-3-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Men/Shoes/Gazelle Low Red/GAZELLE-LOW-RED-1-1000x1000.jpg',
                'image_detail_2' => 'Compass/Men/Shoes/Gazelle Low Red/GAZELLE-LOW-RED-2-1000x1000.jpg',
                'image_detail_3' => 'Compass/Men/Shoes/Gazelle Low Red/GAZELLE-LOW-RED-3-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Women/Shoes/Gazelle Hi Black/Copy-of-GAZELLE-HI-BLACK-WHITE-1.jpg',
                'image_detail_2' => 'Compass/Women/Shoes/Gazelle Hi Black/Copy-of-GAZELLE-HI-BLACK-WHITE-2-1000x1000.jpg',
                'image_detail_3' => 'Compass/Women/Shoes/Gazelle Hi Black/Copy-of-GAZELLE-HI-BLACK-WHITE-3-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Women/Shoes/Gazelle Hi Pink/GAZELLE-HI-PINK-1-1000x1000.jpg',
                'image_detail_2' => 'Compass/Women/Shoes/Gazelle Hi Pink/4_1-1000x1000.jpg',
                'image_detail_3' => 'Compass/Women/Shoes/Gazelle Hi Pink/5_1-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Women/Shoes/Gazelle Low Blue Sky/GAZELLE-LOW-SKY-BLUE-1-1.jpg',
                'image_detail_2' => 'Compass/Women/Shoes/Gazelle Low Blue Sky/Copy-of-GAZELLE-LOW-SKY-BLUE-2-1000x1000.jpg',
                'image_detail_3' => 'Compass/Women/Shoes/Gazelle Low Blue Sky/Copy-of-GAZELLE-LOW-SKY-BLUE-3-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Compass/Women/Shoes/Gazelle Low Navy/GAZELLE-LOW-NAVY-1-1000x1000.jpg',
                'image_detail_2' => 'Compass/Women/Shoes/Gazelle Low Navy/Copy-of-GAZELLE-LOW-NAVY-2-1000x1000.jpg',
                'image_detail_3' => 'Compass/Women/Shoes/Gazelle Low Navy/Copy-of-GAZELLE-LOW-NAVY-3-1000x1000.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Men/Tops/CROOZ DYNAMIC TSHIRT BLACK - 249K/459aefeb-fb54-491e-94eb-a9aa914bd479.jpg',
                'image_detail_2' => 'Crooz/Men/Tops/CROOZ DYNAMIC TSHIRT BLACK - 249K/9ee5ece5-2fcd-4086-88e2-db5e5e46b52a.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Men/Tops/CROOZ GONZ TSHIRT NAVY (HEAVY WEIGHT COTTON) - 249K/65580410_4d4f3423-cfbb-493e-93fc-9dac81880708.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Men/Tops/CROOZ X NINDITO VEST JACKET - 700K/65580410_bd55570e-67e3-49a8-aebf-ce8ec8a956f5.jpg',
                'image_detail_2' => 'Crooz/Men/Tops/CROOZ X NINDITO VEST JACKET - 700K/50171118_e14089a6-1abc-4a05-8b8a-2d7c49f963a0_2048_2048.jpg',
                'image_detail_3' => 'Crooz/Men/Tops/CROOZ X NINDITO VEST JACKET - 700K/50171118_d925eda8-3d41-401f-b9fd-c4a20a56047c_2048_2048.jpg',
                'image_detail_4' => 'Crooz/Men/Tops/CROOZ X NINDITO VEST JACKET - 700K/50171118_5c9c5784-0b23-4a9a-b590-33205375ed84_2048_2048.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Men/Bottom/Crooz Camo Jogger - 390K/155852368505468_be6e3474-b7cf-4a19-819b-d9f4dbc0802e.jpg',
                'image_detail_2' => 'Crooz/Men/Bottom/Crooz Camo Jogger - 390K/155852368505488_095c81fc-f7d5-4475-8b59-24795084e7cf.jpg',
                'image_detail_3' => 'Crooz/Men/Bottom/Crooz Camo Jogger - 390K/155852368506158_86d0825a-4b0a-40a3-940e-b91f6fc3090a.jpg',
                'image_detail_4' => 'Crooz/Men/Bottom/Crooz Camo Jogger - 390K/155852368505446_f99ee9f5-b816-4e58-b8bd-bdb07770eede.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Men/Accessories/Crooz Moss 3 Way Reversible Bag - 480K/155845741084514_aedc6d50-73c4-4c0a-a1d4-db5a18123b99.jpg',
                'image_detail_2' => 'Crooz/Men/Accessories/Crooz Moss 3 Way Reversible Bag - 480K/155845741084630_d979e7f6-c4b8-4d78-bea9-24759201ce0d.jpg',
                'image_detail_3' => 'Crooz/Men/Accessories/Crooz Moss 3 Way Reversible Bag - 480K/155845741084649_51e49bf4-4ab5-4405-ad0c-b2ade4e40caf.jpg',
                'image_detail_4' => 'Crooz/Men/Accessories/Crooz Moss 3 Way Reversible Bag - 480K/155845741084644_6d889166-fb59-42cc-80f3-98faee16dc82.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Men/Accessories/CROOZ OB NAVY RED SB - 345K/65580410_2bbab1c3-f40f-49ee-a5e3-45e61078b01b.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Women/Tops/CROOZ GEAR UP M51 RAIN COAT - 749K/65580410_b40f86c9-d8dc-4f0e-b8e3-6c791eec36cf.jpg',
                'image_detail_2' => 'Crooz/Women/Tops/CROOZ GEAR UP M51 RAIN COAT - 749K/50171118_c11b34b0-48f5-46e3-a100-2bc4af976118_2048_2048.jpg',
                'image_detail_3' => 'Crooz/Women/Tops/CROOZ GEAR UP M51 RAIN COAT - 749K/50171118_1be97dea-1a4a-4f47-9e63-92c43f00b843_2048_2048.jpg',
                'image_detail_4' => 'Crooz/Women/Tops/CROOZ GEAR UP M51 RAIN COAT - 749K/50171118_4719972d-0206-4b0a-a105-aea257a5a8fd_2048_2048.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Women/Tops/CROOZ X CHOCOMOO TSHIRT YELLOW - 249K/65580410_e500b797-83b4-428d-bc28-707ec9df3fae.jpg',
                'image_detail_2' => 'Crooz/Women/Tops/CROOZ X CHOCOMOO TSHIRT YELLOW - 249K/700768a1-7abe-4c18-9d5d-1a8eafd37de0.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Women/Tops/CROOZ X NINDITO ALL DAY CROOZ PURPLE TSHIRT KAOS- 470K/65580410_c06cd3f2-6334-47aa-a883-381f50a6b3e7.jpg',
                'image_detail_2' => 'Crooz/Women/Tops/CROOZ X NINDITO ALL DAY CROOZ PURPLE TSHIRT KAOS- 470K/50171118_68b3b3f0-0e8b-4ba3-8f62-d13bbc6b89e0_2048_2048.jpg',
                'image_detail_3' => 'Crooz/Women/Tops/CROOZ X NINDITO ALL DAY CROOZ PURPLE TSHIRT KAOS- 470K/50171118_96b52423-3a3a-4348-9fc1-0f0285f513e1_2048_2048.jpg',
                'image_detail_4' => 'Crooz/Women/Tops/CROOZ X NINDITO ALL DAY CROOZ PURPLE TSHIRT KAOS- 470K/50171118_19ae8311-73ea-49b3-937f-a4287c15c4dd_2048_2048.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Women/Bottom/Crooz Heat Sweatpants - 495K/65580410_d442dea0-7ab4-471c-a41c-e56555d3eb40.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Women/Accessories/Crooz FU Socks - 130K/156291636318555_86cee64d-c8c8-4e40-a9b7-225f744d70f6.jpg',
                'image_detail_2' => 'Crooz/Women/Accessories/Crooz FU Socks - 130K/156291636318525_7626ab3f-a49e-4a31-b9d6-6c8b51bdfdbe.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Women/Accessories/CROOZ HAGEN SIDE BAG - 210K/65580410_58dca57b-9af6-428f-b806-c4b826520f29.jpg',
                'image_detail_2' => 'Crooz/Women/Accessories/CROOZ HAGEN SIDE BAG - 210K/50171118_e92695ee-9659-4dbf-8c6b-b7fdd4985006_2048_2048.jpg',
                'image_detail_3' => 'Crooz/Women/Accessories/CROOZ HAGEN SIDE BAG - 210K/50171118_479aa2d4-c2ae-48c3-9589-57c4493a8620_2048_2048.jpg',
                'image_detail_4' => 'Crooz/Women/Accessories/CROOZ HAGEN SIDE BAG - 210K/50171118_4cfb3312-e1e1-44e6-afa0-d21e742a64c8_2048_2048.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Women/Accessories/crooz pin pack - 165K/Capture.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Crooz/Women/Accessories/CROOZ STEPS CREAM TOTE BAG - 180K/65580410_974d1926-3909-404d-b532-9fce26aae16c.jpg',
                'image_detail_2' => 'Crooz/Women/Accessories/CROOZ STEPS CREAM TOTE BAG - 180K/11a7cfc9-fd0f-407b-aa0b-a6bb055a6331.jpg',
                'image_detail_3' => 'Crooz/Women/Accessories/CROOZ STEPS CREAM TOTE BAG - 180K/995fe5c1-9548-405a-baf4-933fcafd059f.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Dreambirds Artwear/Men/Tops/DREAMBIRDS MASTER OF THE EARTH II SS TSHIRT/d4d52471-0bc3-4a40-abc0-ec21ad5b5913.jpg',
                'image_detail_2' => 'Dreambirds Artwear/Men/Tops/DREAMBIRDS MASTER OF THE EARTH II SS TSHIRT/cb3f3e6f-b9c3-4f03-97a6-70be46cd5ee4.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Dreambirds Artwear/Men/Tops/DREAMBIRDS THE LURKER SS TSHIRT (LIMITED EDITION)/0d149d33-e9d4-4509-a51c-12bb94429d4a.jpg',
                'image_detail_2' => 'Dreambirds Artwear/Men/Tops/DREAMBIRDS THE LURKER SS TSHIRT (LIMITED EDITION)/f564b736-d436-4386-9655-ea8862917002.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Dreambirds Artwear/Men/Accessories/DREAMBIRDS DREAMCAPS V USHANKA HAT CORDUROY/19999799_d4f65a2a-b386-4f7a-b573-63dfa043a6f6_1080_1080.jpg',
                'image_detail_2' => 'Dreambirds Artwear/Men/Accessories/DREAMBIRDS DREAMCAPS V USHANKA HAT CORDUROY/19999799_42d27427-fde8-4a34-ac96-7028403a4407_1080_1080.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Dreambirds Artwear/Men/Accessories/DREAMBIRDS TIGRANTULA FACIAL MASK/19999799_27a6145f-dc7b-46fd-b0a2-a823e7158f39_2048_2048.jpg',
                'image_detail_2' => 'Dreambirds Artwear/Men/Accessories/DREAMBIRDS TIGRANTULA FACIAL MASK/19999799_50a7290e-0310-4757-ab9e-b37e2f35d54b_2048_2048.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Dreambirds Artwear/Women/Tops/DREAMBIRDS SPECTRUM II TSHIRT (SPECIAL FX)/d43e5a12-029f-49a0-9ba4-e306ea154938.jpg',
                'image_detail_2' => 'Dreambirds Artwear/Women/Tops/DREAMBIRDS SPECTRUM II TSHIRT (SPECIAL FX)/f8b8514e-a081-481f-b616-808b5f3d4f30.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Dreambirds Artwear/Women/Accessories/DREAMBIRDS FUNDAMENTAL POLO CAPS/19999799_f97f32f1-de9b-41b0-8fbb-dd8cfad30675_1080_1080.jpg',
                'image_detail_2' => 'Dreambirds Artwear/Women/Accessories/DREAMBIRDS FUNDAMENTAL POLO CAPS/19999799_cc513a59-3129-4f6a-aa98-0b9e994eb7a2_1080_1080.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Men/Tops/Classic Garage – Raglan Navy Cream - 275K/hdnfdn.jpg',
                'image_detail_2' => 'Elders Company/Men/Tops/Classic Garage – Raglan Navy Cream - 275K/gbsds.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Men/Tops/Hoodie “Support The Culture” - 495K/gdghf.jpg',
                'image_detail_2' => 'Elders Company/Men/Tops/Hoodie “Support The Culture” - 495K/bhsnmgh.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Men/Tops/Local Garage Cat – Navy - 250K/IMG_1474-600x600.jpg',
                'image_detail_2' => 'Elders Company/Men/Tops/Local Garage Cat – Navy - 250K/asfasfca.jpg',
                'image_detail_3' => 'Elders Company/Men/Tops/Local Garage Cat – Navy - 250K/asafs.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Men/Accessories/Elders Co X Supercub 125 Glove – Hornet - 775K/jgkkhgk.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Men/Accessories/Hornet Gloves – Black - 690K/ghgkghff.jpg',
                'image_detail_2' => 'Elders Company/Men/Accessories/Hornet Gloves – Black - 690K/khfkhhmh.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Men/Accessories/Space - 4375K/gfhds.jpg',
                'image_detail_2' => 'Elders Company/Men/Accessories/Space - 4375K/jtgjfgjd.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Men/Accessories/Utility Waist Bag – Navy - 245K/P1810659.jpg',
                'image_detail_2' => 'Elders Company/Men/Accessories/Utility Waist Bag – Navy - 245K/P1810662.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Women/Tops/Hot Rod – Forest Green - 250K/fasaag.jpg',
                'image_detail_2' => 'Elders Company/Women/Tops/Hot Rod – Forest Green - 250K/IMG_1463-1600x1600.jpg',
                'image_detail_3' => 'Elders Company/Women/Tops/Hot Rod – Forest Green - 250K/bfhshr.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Women/Tops/Womens Souvenir Jacket - 1.475K/hshfsg.jpg',
                'image_detail_2' => 'Elders Company/Women/Tops/Womens Souvenir Jacket - 1.475K/souvenir-jacket-womens-05.jpg',
                'image_detail_3' => 'Elders Company/Women/Tops/Womens Souvenir Jacket - 1.475K/gedshhfdh.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Women/Tops/Work Shirt “Snake” – Olive - 500K/ndffbs.jpg',
                'image_detail_2' => 'Elders Company/Women/Tops/Work Shirt “Snake” – Olive - 500K/6.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Women/Accessories/5 Panel Hat – Square - 125K/gagas.jpg',
                'image_detail_2' => 'Elders Company/Women/Accessories/5 Panel Hat – Square - 125K/jjdjdhd.jpg',
                'image_detail_3' => 'Elders Company/Women/Accessories/5 Panel Hat – Square - 125K/hatt.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Elders Company/Women/Accessories/Elders Ring Ftw – Gold - 350K/kfgfh.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Get Dirrty/Men/Tops/Eggboy Comic - 165k/155296907088299_803795b2-52ec-4b42-accc-b6dd969b6364.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Get Dirrty/Men/Tops/Jesus Is King - 165k/JESUS_IS_KING.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Get Dirrty/Men/Tops/Stranger Things Gang - 165k/156954638997669_3a3fc04e-de1c-4ca1-b9a0-15bb3ccf3c91.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Get Dirrty/Men/Accessories/Goat Socks - 49K/31004694_f540bf8f-b6b9-4b80-bec0-ab0b9e730034_1500_1500.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Get Dirrty/Women/Tops/80s Putin Tee - 165K/155307498531989_90dcb6e6-3108-421d-8b8d-920867194480.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Get Dirrty/Women/Tops/Money Heist Tee - 240K/3672bd2b-d386-4024-a3b7-a59b09c79820.jpg',
                'image_detail_2' => 'Get Dirrty/Women/Tops/Money Heist Tee - 240K/c1d75991-ee83-45cc-a11f-5a79a2160f9b.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Get Dirrty/Women/Tops/Stop Fallin in Love Tshirt - 165K/157680770964981_3277234d-d066-49bb-8286-13cd3d700642.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Get Dirrty/Women/Accessories/Wish We Were Real Socks - 49K/31004694_7ccaa763-07ce-43f5-9dd5-0ad5f0cbf92c_1500_1500.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Tops/Bullitt Raw Dark Blue Trucker Denim Jacket - 169K/gaga.jpg',
                'image_detail_2' => 'Guten Inc/Men/Tops/Bullitt Raw Dark Blue Trucker Denim Jacket - 169K/asfad.jpg',
                'image_detail_3' => 'Guten Inc/Men/Tops/Bullitt Raw Dark Blue Trucker Denim Jacket - 169K/eaga.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Tops/Dover Black Shirt LS - 110K/gasfas.jpg',
                'image_detail_2' => 'Guten Inc/Men/Tops/Dover Black Shirt LS - 110K/agdgeff.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Tops/GutenInc - Fantasy White T-Shirt - 79K/gasga.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Tops/Guten Inc - Smith Camp Collar Khaki - 110K/fasfa.jpg',
                'image_detail_2' => 'Guten Inc/Men/Tops/Guten Inc - Smith Camp Collar Khaki - 110K/agdge.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => "Guten Inc/Men/Tops/Malibu blue Windbreaker - Men's Jacket Guteninc Coach Jacket - 179K/fasfasf.jpg",
                'image_detail_2' => "Guten Inc/Men/Tops/Malibu blue Windbreaker - Men's Jacket Guteninc Coach Jacket - 179K/fafsf.jpg",
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Bottom/Guteninc - Andrew Boardshort Cream - 100K/adas.jpg',
                'image_detail_2' => 'Guten Inc/Men/Bottom/Guteninc - Andrew Boardshort Cream - 100K/fsfasf.jpg',
                'image_detail_3' => 'Guten Inc/Men/Bottom/Guteninc - Andrew Boardshort Cream - 100K/fasfase.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Bottom/GutenInc - Leone Cargo Pants Olive - 140K/fagegag.jpg',
                'image_detail_2' => 'Guten Inc/Men/Bottom/GutenInc - Leone Cargo Pants Olive - 140K/asfsafe.jpg',
                'image_detail_3' => 'Guten Inc/Men/Bottom/GutenInc - Leone Cargo Pants Olive - 140K/agsga.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Bottom/Guteninc Fabio Black Chino Pants  - 135K/dadsae.jpg',
                'image_detail_2' => 'Guten Inc/Men/Bottom/Guteninc Fabio Black Chino Pants  - 135K/dsade.jpg',
                'image_detail_3' => 'Guten Inc/Men/Bottom/Guteninc Fabio Black Chino Pants  - 135K/dasdsae.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Bottom/Rambler Dark Blue Washed Denim - 160K/GAGSAF.jpg',
                'image_detail_2' => 'Guten Inc/Men/Bottom/Rambler Dark Blue Washed Denim - 160K/GASGA.jpg',
                'image_detail_3' => 'Guten Inc/Men/Bottom/Rambler Dark Blue Washed Denim - 160K/gagsare.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Bottom/Triumph Blue Washed Stretch Denim Pants - 160K/asfaf.jpg',
                'image_detail_2' => 'Guten Inc/Men/Bottom/Triumph Blue Washed Stretch Denim Pants - 160K/fafsfs.jpg',
                'image_detail_3' => 'Guten Inc/Men/Bottom/Triumph Blue Washed Stretch Denim Pants - 160K/asse.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Shoes/Campbell Classic Sneakers - 250K/asfa.jpg',
                'image_detail_2' => 'Guten Inc/Men/Shoes/Campbell Classic Sneakers - 250K/gags.jpg',
                'image_detail_3' => 'Guten Inc/Men/Shoes/Campbell Classic Sneakers - 250K/asdade.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Shoes/Caroe Wingtip CH Brown - 350K/dsadsre.jpg',
                'image_detail_2' => 'Guten Inc/Men/Shoes/Caroe Wingtip CH Brown - 350K/asdas.jpg',
                'image_detail_3' => 'Guten Inc/Men/Shoes/Caroe Wingtip CH Brown - 350K/ASFAAe.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Shoes/Guten Inc - Quincy Low Military Green - 250K/ASFAFa.jpg',
                'image_detail_2' => 'Guten Inc/Men/Shoes/Guten Inc - Quincy Low Military Green - 250K/sfsfe.jpg',
                'image_detail_3' => 'Guten Inc/Men/Shoes/Guten Inc - Quincy Low Military Green - 250K/sdads.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Shoes/Lucas Cool Grey - 250K/dsdssad.jpg',
                'image_detail_2' => 'Guten Inc/Men/Shoes/Lucas Cool Grey - 250K/sdsdd.jpg',
                'image_detail_3' => 'Guten Inc/Men/Shoes/Lucas Cool Grey - 250K/sfsafs.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Men/Accessories/Ring Liberty Gold Matte - 120K/AFSAS.jpg',
                'image_detail_2' => 'Guten Inc/Men/Accessories/Ring Liberty Gold Matte - 120K/fasaf.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Women/Tops/GutenInc - Dead Chills Blue Hoodie - 160K/sfasfs.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Women/Tops/GutenInc - OG College Grey T-Shirt - 80K/fssfse.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Women/Tops/OG College Brown Hoodie - 160K/sfasf.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Women/Shoes/Guten Inc- Lucas White Gum - 250K/fsfasssf.jpg',
                'image_detail_2' => 'Guten Inc/Women/Shoes/Guten Inc- Lucas White Gum - 250K/SDAe.jpg',
                'image_detail_3' => 'Guten Inc/Women/Shoes/Guten Inc- Lucas White Gum - 250K/dsdad.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Women/Shoes/Guteninc - Marty Sneakers White - 250K/AFSFa.jpg',
                'image_detail_2' => 'Guten Inc/Women/Shoes/Guteninc - Marty Sneakers White - 250K/CDSD.jpg',
                'image_detail_3' => 'Guten Inc/Women/Shoes/Guteninc - Marty Sneakers White - 250K/SAS.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Women/Shoes/Ralph Sandal Cream - 80K/dsadsde.jpg',
                'image_detail_2' => 'Guten Inc/Women/Shoes/Ralph Sandal Cream - 80K/sds.jpg',
                'image_detail_3' => 'Guten Inc/Women/Shoes/Ralph Sandal Cream - 80K/AFSA.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Women/Accessories/Frins White Slingbag - Guteninc - 80K/sdss.jpg',
                'image_detail_2' => 'Guten Inc/Women/Accessories/Frins White Slingbag - Guteninc - 80K/sdad.jpg',
                'image_detail_3' => 'Guten Inc/Women/Accessories/Frins White Slingbag - Guteninc - 80K/sfsfss.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Guten Inc/Women/Accessories/Masker Tali Strap Extender - Guteninc - 120K/gdgsdg.jpg',
                'image_detail_2' => 'Guten Inc/Women/Accessories/Masker Tali Strap Extender - Guteninc - 120K/fsfsfs.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Hijack Sandals/Men/Tops/Chirps Rain Poncho/chirps-rain-poncho-1.jpg',
                'image_detail_2' => 'Hijack Sandals/Men/Tops/Chirps Rain Poncho/chirps-rain-poncho-2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Hijack Sandals/Men/Shoes/Umbra Storm/hijacksandals-Umbra-Storm-1.jpg',
                'image_detail_2' => 'Hijack Sandals/Men/Shoes/Umbra Storm/hijacksandals-Umbra-Storm-2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Hijack Sandals/Women/Shoes/Argo Blach/hi-jack-sandals-duality-phase-iii-argo-blach-1.jpg',
                'image_detail_2' => 'Hijack Sandals/Women/Shoes/Argo Blach/hi-jack-sandals-duality-phase-iii-argo-blach-3.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Hijack Sandals/Women/Accessories/Piece Simo Sling Bag Blach/piece-simo-sling-bag-blach-1.jpg',
                'image_detail_2' => 'Hijack Sandals/Women/Accessories/Piece Simo Sling Bag Blach/piece-simo-sling-bag-blach-2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Men/Tops/Jack Roastery Tee Orange/Jack-Roastery-Orange-2.jpg',
                'image_detail_2' => 'Jackhammer Co/Men/Tops/Jack Roastery Tee Orange/Jack-Roastery-Orange-1.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Men/Tops/Jackhammer Coffee Industry Tee Red/Jackhammer-Coffee-Industry-Red-3.jpg',
                'image_detail_2' => 'Jackhammer Co/Men/Tops/Jackhammer Coffee Industry Tee Red/Jackhammer-Coffee-Industry-Red-2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Men/Bottom/Axis Cargo Pants Brown/Axis-Cargo-Brown-9-510x510.jpg',
                'image_detail_2' => 'Jackhammer Co/Men/Bottom/Axis Cargo Pants Brown/Pants_0021s_0007_masterArtboard-2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Men/Bottom/Combat Short Pants Olive/Self-Determination-Outfit_0013s_0006_1.jpg',
                'image_detail_2' => 'Jackhammer Co/Men/Bottom/Combat Short Pants Olive/Self-Determination-Outfit_0013s_0004_3.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Men/Accessories/High 3-Way Duffle Bag Brown/Acc_0006s_0000_BagArtboard-1.jpg',
                'image_detail_2' => 'Jackhammer Co/Men/Accessories/High 3-Way Duffle Bag Brown/Acc_0006s_0000_BagArtboard-3.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Women/Tops/Ultimate Master Tee Grey/Ultimate-Master-Grey-2.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Women/Bottom/Jakchammer x W.Essentiels Type-073 Cargo Pants Green/1200x1200_0076_1-510x510.jpg',
                'image_detail_2' => 'Jackhammer Co/Women/Bottom/Jakchammer x W.Essentiels Type-073 Cargo Pants Green/1200x1200_0075_2-510x510.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Women/Accessories/Basic Face Mask Wabash/Acc_0011s_0000_MasterArtboard-1.jpg',
                'image_detail_2' => 'Jackhammer Co/Women/Accessories/Basic Face Mask Wabash/Acc_0011s_0006_MasterArtboard-2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Jackhammer Co/Women/Accessories/Pole Bucket Hat Olive/Acc_0000s_0003_1.jpg',
                'image_detail_2' => 'Jackhammer Co/Women/Accessories/Pole Bucket Hat Olive/Acc_0000s_0001_1.3.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Tops/Kamengski - Adior Crewneck - 330K/7dece409-adc6-428c-a12b-b72f6d4db3be.jpg',
                'image_detail_2' => 'Kamengski/Men/Tops/Kamengski - Adior Crewneck - 330K/4cc6aa09-4615-4f25-8805-dac57b4ca1ab.jpg',
                'image_detail_3' => 'Kamengski/Men/Tops/Kamengski - Adior Crewneck - 330K/e62f4d49-bcf0-478d-b9fa-64d475ef351d.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Tops/Kamengski - Bulog Long Sleeve Tee - 185K/b581f0e2-a29c-47fe-b98b-d8eb5c55b832.jpg',
                'image_detail_2' => 'Kamengski/Men/Tops/Kamengski - Bulog Long Sleeve Tee - 185K/2d210f90-6062-4174-99cf-9e901787b69e.jpg',
                'image_detail_3' => 'Kamengski/Men/Tops/Kamengski - Bulog Long Sleeve Tee - 185K/e62f4d49-bcf0-478d-b9fa-64d475ef351d.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Tops/Kamengski - Jelly Black Short Tee - 150K/05426cf6-368f-410c-942e-597c599ec3ac.jpg',
                'image_detail_2' => 'Kamengski/Men/Tops/Kamengski - Jelly Black Short Tee - 150K/2cc52000-367a-4de8-b173-f912d3f019cc.jpg',
                'image_detail_3' => 'Kamengski/Men/Tops/Kamengski - Jelly Black Short Tee - 150K/e9c55af6-94d1-4784-8c8d-4e5ee4939cd3.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Tops/Kamengski - Lockdown Long Sleeve Tee - 180K/f0c6fa9d-9afd-4ded-b26e-eea9e23a4e7e.jpg',
                'image_detail_2' => 'Kamengski/Men/Tops/Kamengski - Lockdown Long Sleeve Tee - 180K/aae7ebab-e824-4c52-bf6b-1194d7e6fb3d.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Tops/Kamengski - Moon Doa Restu Long Sleeve Tee - 180K/7bb74554-ad60-40eb-be06-b369a7d6fc29.jpg',
                'image_detail_2' => 'Kamengski/Men/Tops/Kamengski - Moon Doa Restu Long Sleeve Tee - 180K/107d0aa4-5cab-410c-95e6-48131022abd7.jpg',
                'image_detail_3' => 'Kamengski/Men/Tops/Kamengski - Moon Doa Restu Long Sleeve Tee - 180K/063089a9-1f93-4602-b83b-a496a7f56657.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Bottom/Kamengski - Camo Red Boxer - 75K/29abd634-8877-425c-8176-43f42f93e94b.jpg',
                'image_detail_2' => 'Kamengski/Men/Bottom/Kamengski - Camo Red Boxer - 75K/e81729e6-56e8-4561-8a46-b09beb348759.jpg',
                'image_detail_3' => 'Kamengski/Men/Bottom/Kamengski - Camo Red Boxer - 75K/e14c86a6-fae2-4471-826a-b815aa008adf.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Bottom/Kamengski - DNB Short Pants - 200K/bdaacfaf-de30-4072-b866-3e3740c355e5.jpg',
                'image_detail_2' => 'Kamengski/Men/Bottom/Kamengski - DNB Short Pants - 200K/7b09ec34-7de5-4d28-b3a5-f1946f1f7c3f.jpg',
                'image_detail_3' => 'Kamengski/Men/Bottom/Kamengski - DNB Short Pants - 200K/c64d3f43-fc34-4d26-9596-b40850abf5a9.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Bottom/Kamengski - Pulp Purple Short Pants - 75K/d85a28df-bd9f-4d17-9a08-9cc2795cff39.jpg',
                'image_detail_2' => 'Kamengski/Men/Bottom/Kamengski - Pulp Purple Short Pants - 75K/c8732303-7763-4c72-8ce3-1da47aff4d18.jpg',
                'image_detail_3' => 'Kamengski/Men/Bottom/Kamengski - Pulp Purple Short Pants - 75K/e494f580-533d-4dd2-8563-ab60f7c3bddc.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Bottom/Kamengski - Queen Short Pants - 225K/4f5b5755-096f-44ad-9bbe-598aa1f709f3.jpg',
                'image_detail_2' => 'Kamengski/Men/Bottom/Kamengski - Queen Short Pants - 225K/10d17fb7-b931-4b47-9f67-9ea3121c611a.jpg',
                'image_detail_3' => 'Kamengski/Men/Bottom/Kamengski - Queen Short Pants - 225K/7d84a5be-0399-4904-93c6-7411723d1a88.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Bottom/Kamengski - Scab Orange Boxer - 75K/019df7db-de67-4439-8f92-3ca19c6c04a4.jpg',
                'image_detail_2' => 'Kamengski/Men/Bottom/Kamengski - Scab Orange Boxer - 75K/e42e4228-efc3-4e6f-8369-c75a680da66a.jpg',
                'image_detail_3' => 'Kamengski/Men/Bottom/Kamengski - Scab Orange Boxer - 75K/1cab7b45-f258-40e6-9fcb-c30b8b51a924.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Accessories/Kamengski - Bench Beanie - Maroon - 140K/19acc40a-74b1-4cf9-a4ab-5f6e1cec9fd5.jpg',
                'image_detail_2' => 'Kamengski/Men/Accessories/Kamengski - Bench Beanie - Maroon - 140K/bbfc29a6-0ac0-44d4-b040-bfcfa5f8c291.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Accessories/Kamengski - Buck Bucket Hat - 160K/4cc2fc81-a6f9-4560-b388-eadcf867bb26.jpg',
                'image_detail_2' => 'Kamengski/Men/Accessories/Kamengski - Buck Bucket Hat - 160K/73c33f48-b4b0-406b-8ee3-4b9f662b9e80.jpg',
                'image_detail_3' => 'Kamengski/Men/Accessories/Kamengski - Buck Bucket Hat - 160K/20cc7a62-19c4-4913-a386-f05e5daad375.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Accessories/Kamengski - Leran Face mask - 45K/ca1f4014-d450-4fbb-97be-b0e272dcafc0.jpg',
                'image_detail_2' => 'Kamengski/Men/Accessories/Kamengski - Leran Face mask - 45K/1a788996-93f6-41f2-ac08-8e0191a57d24.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Accessories/Kamengski - Police Socks - 70K/050ddf88-d2cc-4111-a896-862bd300bc3e.jpg',
                'image_detail_2' => 'Kamengski/Men/Accessories/Kamengski - Police Socks - 70K/86cb6cd4-e770-4da4-9eaf-9af317bdcd22.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Men/Accessories/Kamengski - Potra (2 Mode Bag) - 180K/acdca557-602d-4988-a800-198c23840ef3.jpg',
                'image_detail_2' => 'Kamengski/Men/Accessories/Kamengski - Potra (2 Mode Bag) - 180K/3f83cd1f-ae94-4a3b-aae6-3f3397a90960.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Tops/Kamengski - Ayam Kawin Short Tee - 170K/ea6defb8-6f58-4b07-9dff-a8b2a603a983.jpg',
                'image_detail_2' => 'Kamengski/Women/Tops/Kamengski - Ayam Kawin Short Tee - 170K/bbf47f4a-2243-42e3-b7b4-9f94d8b544e8.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Tops/Kamengski - Bad Short Tee - 150K/0e4c6939-0ea5-4068-bc6c-8f32df4fb24d.jpg',
                'image_detail_2' => 'Kamengski/Women/Tops/Kamengski - Bad Short Tee - 150K/3bc4e5e8-a50b-4d4f-8092-0e3eb79c2bb0.jpg',
                'image_detail_3' => 'Kamengski/Women/Tops/Kamengski - Bad Short Tee - 150K/14416320-afee-4922-94af-6c6cccf4caef.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Tops/Kamengski - Kill Yellow Ring Tee - 170K/263913d6-e08b-48a0-a9fd-47ccfb2c90f4.jpg',
                'image_detail_2' => 'Kamengski/Women/Tops/Kamengski - Kill Yellow Ring Tee - 170K/40e56785-dd3e-4b7f-8d86-a5c89b8d11ab.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Tops/Kamengski - Saks Mustard Short Tee - 150K/e403e504-cbfe-4685-af6b-cfacab08078f.jpg',
                'image_detail_2' => 'Kamengski/Women/Tops/Kamengski - Saks Mustard Short Tee - 150K/9250116f-30c3-4e8f-bc0c-da7ab00b8130.jpg',
                'image_detail_3' => 'Kamengski/Women/Tops/Kamengski - Saks Mustard Short Tee - 150K/b5415619-de6c-4aa3-abc2-2248518de26b.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Tops/Kamengski x Demus - Kills Art Short Tee - 170K/55404731-6533-4b69-b34c-2c20f0000195.jpg',
                'image_detail_2' => 'Kamengski/Women/Tops/Kamengski x Demus - Kills Art Short Tee - 170K/a88f1e43-b9ca-41ec-94ec-be00f4a23be3.jpg',
                'image_detail_3' => 'Kamengski/Women/Tops/Kamengski x Demus - Kills Art Short Tee - 170K/3ce27fb9-6299-4fea-aa30-b042aeba6d5b.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Accessories/Kamengski - Cap Lang Bidon Bottle Purist - 340K/2188b5f8-56b4-4ed9-8073-5c4d0759f342.jpg',
                'image_detail_2' => 'Kamengski/Women/Accessories/Kamengski - Cap Lang Bidon Bottle Purist - 340K/8111fc24-b50d-4f24-8255-faa88cbf1dfb.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Accessories/Kamengski - Loop Shoelaces - 30K/1358b105-7219-4e7b-a3ce-49190501f6bc.jpg',
                'image_detail_2' => 'Kamengski/Women/Accessories/Kamengski - Loop Shoelaces - 30K/c348d17f-b74d-4b27-925b-9048914b8fda.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Accessories/Kamengski - Pancoran Mix 5 Panel Caps - 150K/bf766185-f4c9-4ec8-babf-13c2551753f3.jpg',
                'image_detail_2' => 'Kamengski/Women/Accessories/Kamengski - Pancoran Mix 5 Panel Caps - 150K/be8cc36b-3ef0-41a4-b3c3-6f8c0ce59c72.jpg',
                'image_detail_3' => 'Kamengski/Women/Accessories/Kamengski - Pancoran Mix 5 Panel Caps - 150K/0d8db8ff-1c00-481b-82a4-0ca00adb04c3.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Accessories/Kamengski - Runa Caps - 150K/ca906fbf-3e49-46e1-bcaf-efad86cf712a.jpg',
                'image_detail_2' => 'Kamengski/Women/Accessories/Kamengski - Runa Caps - 150K/30d7e7d8-200c-4eef-b648-c2682fe57aff.jpg',
                'image_detail_3' => 'Kamengski/Women/Accessories/Kamengski - Runa Caps - 150K/eb75f1d1-c228-4c59-aa33-dc53ad6c0f3d.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Kamengski/Women/Accessories/Kamengski - Tochi Green Tote Bag - 160K/4be14675-cba3-4c68-9db3-abc61c23ed2c.jpg',
                'image_detail_2' => 'Kamengski/Women/Accessories/Kamengski - Tochi Green Tote Bag - 160K/9d4ccc6e-6cb9-4abf-8263-52ba7ba2f454.jpg',
                'image_detail_3' => 'Kamengski/Women/Accessories/Kamengski - Tochi Green Tote Bag - 160K/027affc3-cde4-41b6-a21d-186821f33af8.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'LTHRKRFT/Men/Accessories/Beyza Tan/2021-01-30 14_11_17-Beyza Tan.jpg',
                'image_detail_2' => 'LTHRKRFT/Men/Accessories/Beyza Tan/2021-01-30 14_11_31-Beyza Tan.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'LTHRKRFT/Men/Accessories/Bifold Olive/2021-01-30 14_10_14-Bifold Olive.jpg',
                'image_detail_2' => 'LTHRKRFT/Men/Accessories/Bifold Olive/2021-01-30 14_09_56-Bifold Olive.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'LTHRKRFT/Men/Accessories/Gorilla Tan/2021-01-30 14_13_22-Gorilla Tan.jpg',
                'image_detail_2' => 'LTHRKRFT/Men/Accessories/Gorilla Tan/2021-01-30 14_13_35-Gorilla Tan.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'LTHRKRFT/Men/Accessories/Lwc - 01 White  Tan Strap/2021-01-30 14_12_19-LWC - 01 WHITE _ Tan Strap.jpg',
                'image_detail_2' => 'LTHRKRFT/Men/Accessories/Lwc - 01 White  Tan Strap/2021-01-30 14_12_32-LWC - 01 WHITE _ Tan Strap.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Men/Tops/ATH. DEPT MISTY/1-13-1.png',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Men/Tops/DOUBLE DRAGON SHIRT/a.png',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Men/Tops/IL EAGLE MISTY/1-copy.png',
                'image_detail_2' => 'Mischief/Men/Tops/IL EAGLE MISTY/2-9.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Men/Bottom/IL ST KARYU 13TH 220Z/01-11.png',
                'image_detail_2' => 'Mischief/Men/Bottom/IL ST KARYU 13TH 220Z/02-11.png',
                'image_detail_3' => 'Mischief/Men/Bottom/IL ST KARYU 13TH 220Z/03-9.png',
                'image_detail_4' => 'Mischief/Men/Bottom/IL ST KARYU 13TH 220Z/04-8.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Men/Bottom/SL - 001 LITE/1-600x780.png',
                'image_detail_2' => 'Mischief/Men/Bottom/SL - 001 LITE/2.png',
                'image_detail_3' => 'Mischief/Men/Bottom/SL - 001 LITE/3.png',
                'image_detail_4' => 'Mischief/Men/Bottom/SL - 001 LITE/4.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Men/Bottom/SR - 02 BLACK X BLACK/1-15.png',
                'image_detail_2' => 'Mischief/Men/Bottom/SR - 02 BLACK X BLACK/2-15.png',
                'image_detail_3' => 'Mischief/Men/Bottom/SR - 02 BLACK X BLACK/4-14.png',
                'image_detail_4' => 'Mischief/Men/Bottom/SR - 02 BLACK X BLACK/5-3.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Men/Accessories/ENAMEL PIN LOGO/1-23.png',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Men/Accessories/MISCHIEF X MUCCA MASK/04-3-1.png',
                'image_detail_2' => 'Mischief/Men/Accessories/MISCHIEF X MUCCA MASK/03-6-1.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Mischief/Women/Accessories/BEANIE PATCH LOGO BLACK/1-copy.png',
                'image_detail_2' => 'Mischief/Women/Accessories/BEANIE PATCH LOGO BLACK/2-18.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Tops/Brighter Day Tee - 249K/adsde.jpg',
                'image_detail_2' => 'Monstore/Men/Tops/Brighter Day Tee - 249K/afsfsssf.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Tops/Constant Pleasure Green Jersey - 899K/FASFGs.jpg',
                'image_detail_2' => 'Monstore/Men/Tops/Constant Pleasure Green Jersey - 899K/aggdg.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Tops/Constant Pleasure Tee - 249K/safsf.jpg',
                'image_detail_2' => 'Monstore/Men/Tops/Constant Pleasure Tee - 249K/saffsff.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Tops/Emotion Shirt - 599K/fafffsf.jpg',
                'image_detail_2' => 'Monstore/Men/Tops/Emotion Shirt - 599K/fasffe.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Tops/Monstore Cross Logo Tee Maroon - 149K/AFSFe.jpg',
                'image_detail_2' => 'Monstore/Men/Tops/Monstore Cross Logo Tee Maroon - 149K/asdds.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Tops/Positive Capability Chore Jacket Blue - 549K/afsf.jpg',
                'image_detail_2' => 'Monstore/Men/Tops/Positive Capability Chore Jacket Blue - 549K/fafaff.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Bottom/Fantaisie Pants - 720K/FFAF.jpg',
                'image_detail_2' => 'Monstore/Men/Bottom/Fantaisie Pants - 720K/adsffs.jpg',
                'image_detail_3' => 'Monstore/Men/Bottom/Fantaisie Pants - 720K/asdsdsf.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Bottom/Jeune Cargo Pants - 680K/afsfssssf.jpg',
                'image_detail_2' => 'Monstore/Men/Bottom/Jeune Cargo Pants - 680K/dadsd.jpg',
                'image_detail_3' => 'Monstore/Men/Bottom/Jeune Cargo Pants - 680K/sdsdd.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Accessories/Cross Bucket Hat Washed Green -180K/fafsfs.jpg',
                'image_detail_2' => 'Monstore/Men/Accessories/Cross Bucket Hat Washed Green -180K/addse.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Accessories/DWPV Crystal Sling Bag - 150K/sdsafe.jpg',
                'image_detail_2' => 'Monstore/Men/Accessories/DWPV Crystal Sling Bag - 150K/safffsf.jpg',
                'image_detail_3' => 'Monstore/Men/Accessories/DWPV Crystal Sling Bag - 150K/sdgdg.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Accessories/DWPV Orion V2 Mask - 57K/afsfsfJPG.jpg',
                'image_detail_2' => 'Monstore/Men/Accessories/DWPV Orion V2 Mask - 57K/asffsg.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Accessories/Positive Capability Sling Bag - 180K/asfsfsf.jpg',
                'image_detail_2' => 'Monstore/Men/Accessories/Positive Capability Sling Bag - 180K/assssfsfsf.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Accessories/Recycle Tyrant Mask - 49K/fsaffre.jpg',
                'image_detail_2' => 'Monstore/Men/Accessories/Recycle Tyrant Mask - 49K/gasgge.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Men/Accessories/WTF Replayrepliy Scarf - 91K/afsfafg.jpg',
                'image_detail_2' => 'Monstore/Men/Accessories/WTF Replayrepliy Scarf - 91K/dsfagsge.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Women/Tops/Feast Windbreaker - 480K/sdadsde.jpg',
                'image_detail_2' => 'Monstore/Women/Tops/Feast Windbreaker - 480K/saddde.jpg',
                'image_detail_3' => 'Monstore/Women/Tops/Feast Windbreaker - 480K/sadsdd.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Women/Tops/Home Chore Jacket Army Green - 549K/adsda.jpg',
                'image_detail_2' => 'Monstore/Women/Tops/Home Chore Jacket Army Green - 549K/asffs.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Women/Tops/Long weekend Pattern Kimono - 450K/DSAFS.jpg',
                'image_detail_2' => 'Monstore/Women/Tops/Long weekend Pattern Kimono - 450K/dasade.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Women/Tops/Mammon x Monstore Bomber Jacket - 479K/dadssde.jpg',
                'image_detail_2' => 'Monstore/Women/Tops/Mammon x Monstore Bomber Jacket - 479K/sadsde.jpg',
                'image_detail_3' => 'Monstore/Women/Tops/Mammon x Monstore Bomber Jacket - 479K/aasfsfe.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Women/Tops/Memoire Long Jacket Black - 800K/adssssda.jpg',
                'image_detail_2' => 'Monstore/Women/Tops/Memoire Long Jacket Black - 800K/sdsdsdsre.jpg',
                'image_detail_3' => 'Monstore/Women/Tops/Memoire Long Jacket Black - 800K/adsdde.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'image_detail_4' => '',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Women/Bottom/Moonlight Short - 360K/ASFFSa.jpg',
                'image_detail_2' => 'Monstore/Women/Bottom/Moonlight Short - 360K/dadsdss.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Women/Bottom/Trespasser Short - 360K/asfsfaf.jpg',
                'image_detail_2' => 'Monstore/Women/Bottom/Trespasser Short - 360K/fasffw.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Monstore/Women/Accessories/Agatha Pricilla Enamel Pin - 72K/AFSFFe.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Monstore/Women/Accessories/DWPV x LFBD Alpha Mask Tosca - 57K/adsfagsg.jpg',
                'image_detail_2' => 'Monstore/Women/Accessories/DWPV x LFBD Alpha Mask Tosca - 57K/sadaasde.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Monstore/Women/Accessories/Hindia Tote Bag Beige - 176K/ASAFSF.jpg',
                'image_detail_2' => 'Monstore/Women/Accessories/Hindia Tote Bag Beige - 176K/adsafe.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Monstore/Women/Accessories/Monstore Saving Graces Bag - 50K/SADSAFS.jpg',
                'image_detail_2' => 'Monstore/Women/Accessories/Monstore Saving Graces Bag - 50K/fsfafe.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Monstore/Women/Accessories/SunEater Lanyard - 80K/dasdsde.jpg',
                'image_detail_2' => 'Monstore/Women/Accessories/SunEater Lanyard - 80K/safsafsf.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Monstore/Women/Accessories/WTF Summer Gloves Beige - 120K/SaaAFSF.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Nama Studios/Men/Accessories/LITE - NO. 160 - 250K/afsafa.jpg',
                'image_detail_2' => 'Nama Studios/Men/Accessories/LITE - NO. 160 - 250K/agdga.jpg',
                'image_detail_3' => 'Nama Studios/Men/Accessories/LITE - NO. 160 - 250K/ggkg.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Nama Studios/Men/Accessories/LITE - NO. 321 - 250K/hfhfssd.jpg',
                'image_detail_2' => 'Nama Studios/Men/Accessories/LITE - NO. 321 - 250K/jtjrw.jpg',
                'image_detail_3' => 'Nama Studios/Men/Accessories/LITE - NO. 321 - 250K/fasfa.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Nama Studios/Men/Accessories/LITE - NO. 325 - 250K/jtfdsg.jpg',
                'image_detail_2' => 'Nama Studios/Men/Accessories/LITE - NO. 325 - 250K/khfghd.jpg',
                'image_detail_3' => 'Nama Studios/Men/Accessories/LITE - NO. 325 - 250K/guguj.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Nama Studios/Men/Accessories/LITE - NO. 350 - 250K/hrfhg.jpg',
                'image_detail_2' => 'Nama Studios/Men/Accessories/LITE - NO. 350 - 250K/jghs.jpg',
                'image_detail_3' => 'Nama Studios/Men/Accessories/LITE - NO. 350 - 250K/fhfh.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Nama Studios/Men/Accessories/LITE - NO. 372 - 250K/hagag.jpg',
                'image_detail_2' => 'Nama Studios/Men/Accessories/LITE - NO. 372 - 250K/hdfhsh.jpg',
                'image_detail_3' => 'Nama Studios/Men/Accessories/LITE - NO. 372 - 250K/jgjdjd.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Nama Studios/Men/Accessories/LITE - NO. 385 - 250K/lukgy.jpg',
                'image_detail_2' => 'Nama Studios/Men/Accessories/LITE - NO. 385 - 250K/jfhdhfd.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Nama Studios/Women/Accessories/LITE - NO. 151 - 250K/ktktje.jpg',
                'image_detail_2' => 'Nama Studios/Women/Accessories/LITE - NO. 151 - 250K/hddgda.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Nama Studios/Women/Accessories/LITE - NO. 301 - 250K/ggahhrr.jpg',
                'image_detail_2' => 'Nama Studios/Women/Accessories/LITE - NO. 301 - 250K/hgjf.jpg',
                'image_detail_3' => 'Nama Studios/Women/Accessories/LITE - NO. 301 - 250K/khkyr.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Nama Studios/Women/Accessories/LITE - NO. 361 - 250K/hrkyky.jpg',
                'image_detail_2' => 'Nama Studios/Women/Accessories/LITE - NO. 361 - 250K/ljlghkg.jpg',
                'image_detail_3' => 'Nama Studios/Women/Accessories/LITE - NO. 361 - 250K/ugfjfj.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Nama Studios/Women/Accessories/LITE - NO. 381 - 250K/fhfjtj.jpg',
                'image_detail_2' => 'Nama Studios/Women/Accessories/LITE - NO. 381 - 250K/kyhhj.jpg',
                'image_detail_3' => 'Nama Studios/Women/Accessories/LITE - NO. 381 - 250K/gagadfa.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'NBDN/Men/Tops/BANDANA PATCHED RELAXED CHAMBRAY NEPPY GREY SS/utama_chambray-black-3.jpg',
                'image_detail_2' => 'NBDN/Men/Tops/BANDANA PATCHED RELAXED CHAMBRAY NEPPY GREY SS/a.jpg',
                'image_detail_3' => 'NBDN/Men/Tops/BANDANA PATCHED RELAXED CHAMBRAY NEPPY GREY SS/black.jpg',
                'image_detail_4' => 'NBDN/Men/Tops/BANDANA PATCHED RELAXED CHAMBRAY NEPPY GREY SS/b.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Half Sleeve Navy/Utama_kanaola-3.jpg',
                'image_detail_2' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Half Sleeve Navy/kanaola-2.jpg',
                'image_detail_3' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Half Sleeve Navy/kanaola.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Long Sleeve Olive/Utama_kanaola-5.jpg',
                'image_detail_2' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Long Sleeve Olive/kanaola-7.jpg',
                'image_detail_3' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Long Sleeve Olive/kanaola-4.jpg',
                'image_detail_4' => 'NBDN/Men/Tops/KANALOA Belly Flap Slubby Colarless Shirt Long Sleeve Olive/kanaola-6.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'NBDN/Men/Bottom/RONIN II THE LOYAL SERPENT Slim Fit 14oz/utama-min-9.jpg',
                'image_detail_2' => 'NBDN/Men/Bottom/RONIN II THE LOYAL SERPENT Slim Fit 14oz/a-min-4.jpg',
                'image_detail_3' => 'NBDN/Men/Bottom/RONIN II THE LOYAL SERPENT Slim Fit 14oz/b-min-4.jpg',
                'image_detail_4' => 'NBDN/Men/Bottom/RONIN II THE LOYAL SERPENT Slim Fit 14oz/c-min-3.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'NBDN/Men/Bottom/WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid/utama-min-3.jpg',
                'image_detail_2' => 'NBDN/Men/Bottom/WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid/a-min-8.jpg',
                'image_detail_3' => 'NBDN/Men/Bottom/WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid/b-min-10.jpg',
                'image_detail_4' => 'NBDN/Men/Bottom/WICKED LEVIATHAN V 21,9oz Super Heavyweight Deep Rich Indigo Rigid/c-min-10.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'NBDN/Women/Bottom/NBDN x ROOT Greenhaus 13,75oz Olive Green Warp x Mild Green Weft Sanforized/utama.jpg',
                'image_detail_2' => 'NBDN/Women/Bottom/NBDN x ROOT Greenhaus 13,75oz Olive Green Warp x Mild Green Weft Sanforized/nbdn-x-root-greenhaus-1375oz-olive-green-warp-x-mild-green-weft-sanforized-7.jpg',
                'image_detail_3' => 'NBDN/Women/Bottom/NBDN x ROOT Greenhaus 13,75oz Olive Green Warp x Mild Green Weft Sanforized/nbdn-x-root-greenhaus-1375oz-olive-green-warp-x-mild-green-weft-sanforized-1.jpg',
                'image_detail_4' => 'NBDN/Women/Bottom/NBDN x ROOT Greenhaus 13,75oz Olive Green Warp x Mild Green Weft Sanforized/nbdn-x-root-greenhaus-1375oz-olive-green-warp-x-mild-green-weft-sanforized-8-1.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'NBDN/Women/Accessories/21oz Heavyweight Olive Canvas Tote Bag/tas-1.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'NBDN/Women/Accessories/BUDDY BOLD BEANIE BLACK/1610597747316.jpg',
                'image_detail_2' => 'NBDN/Women/Accessories/BUDDY BOLD BEANIE BLACK/1610597747351.jpg',
                'image_detail_3' => 'NBDN/Women/Accessories/BUDDY BOLD BEANIE BLACK/1610597747362.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Oldblue/Men/Tops/Tee - The Bleu Mugger/Oldblue-The-Bleu-Mugger-Tee-Main-Front-scaled.jpg',
                'image_detail_2' => 'Oldblue/Men/Tops/Tee - The Bleu Mugger/9th-Anniv-Cobalt-Blue-Tee-MAIN-IMAGE-BK-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Oldblue/Men/Tops/Tee - The Shrunk Overalls/Oldblue-Tee-The-Shrunk-Overalls-Main-Front-scaled.jpg',
                'image_detail_2' => 'Oldblue/Men/Tops/Tee - The Shrunk Overalls/Oldblue-Tee-The-Shrunk-Overalls-Main-Rear-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Oldblue/Men/Bottom/8.25 Cut - 3133 Oz Over-Weight Selvedge Cobalt Blue/Oldblue-8.25-Cut-31-33-Oz-Over-Weight-Cobalt-Blue-Front-scaled.jpg',
                'image_detail_2' => 'Oldblue/Men/Bottom/8.25 Cut - 3133 Oz Over-Weight Selvedge Cobalt Blue/Oldblue-8.25-Cut-31-33-Oz-Over-Weight-Cobalt-Blue-Back-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Oldblue/Men/Bottom/The Black Stallion - 2123 Oz Ultra Black Okayama/Oldblue-The-Black-Stallion-21-23-Oz-Heavy-Weight-Okayama-Front-Main-scaled.jpg',
                'image_detail_2' => 'Oldblue/Men/Bottom/The Black Stallion - 2123 Oz Ultra Black Okayama/Oldblue-The-Black-Stal-eavy-Weight-Okayama-Back-Main-1-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Oldblue/Men/Shoes/Oldblue X Wesco - The Pacemaker Boots/Oldblue-X-Wesco-The-Pacemaker-Boots-Main-Image-1-scaled.jpg',
                'image_detail_2' => 'Oldblue/Men/Shoes/Oldblue X Wesco - The Pacemaker Boots/Oldblue-X-Wesco-The-Pacemaker-Boots-Fit-3-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Oldblue/Men/Accessories/Bandana - The Loopin Good/Oldblue-Bandana-The-Loopin-Good.jpg',
                'image_detail_2' => 'Oldblue/Men/Accessories/Bandana - The Loopin Good/Oldblue-Bandana-The-Loopin-Good-3.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Oldblue/Men/Accessories/Denim Wallet Type I/Denim-Wallet-Type-I-Main-Image-scaled.jpg',
                'image_detail_2' => 'Oldblue/Men/Accessories/Denim Wallet Type I/Denim-Wallet-Type-I-Opened-Main-Image-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Oldblue/Women/Tops/Tee - The Rouge Zoltar/Oldblue-The-Rouge-Zoltar-Tee-Main-Front-scaled.jpg',
                'image_detail_2' => 'Oldblue/Women/Tops/Tee - The Rouge Zoltar/9th-Anniv-Crimson-Red-Tee-MAIN-IMAGE-BK-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Oldblue/Women/Bottom/7.75 Cut - 15 Oz Deep Indigo Okayama ID X ID/7.75-Cut-15-Oz-Deep-Indigo-Okayama-IDxID-MAIN-FRONT-2-scaled.jpg',
                'image_detail_2' => 'Oldblue/Women/Bottom/7.75 Cut - 15 Oz Deep Indigo Okayama ID X ID/7.75-Cut-15-Oz-Deep-Indigo-Okayama-IDxID-MAIN-IMAGE-2-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Oldblue/Women/Accessories/Denim Mask Type I/Denim-Mask-Type-I-7-scaled.jpg',
                'image_detail_2' => 'Oldblue/Women/Accessories/Denim Mask Type I/Denim-Mask-Type-I-9-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Original Quzzy/Men/Tops/ALPHA - 185K/8502a061-73bc-4a21-ae4b-c837f49b7d93.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Tops/ALPHA - 185K/647f378e-87f3-4768-bf0c-98b8007e302d.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Original Quzzy/Men/Tops/BEKOS BLACK - 150K/faed4fc5-80c8-4d4b-be9b-72b5a2c5a75f.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Tops/BEKOS BLACK - 150K/f5d851c0-a1b2-49e0-be84-9d8da4f22b6e.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Men/Tops/NYO WHITE COLAR - 185K/f048dd3d-1472-407e-a2eb-618fe95fe46c.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Tops/NYO WHITE COLAR - 185K/2c73dfd1-c550-4d21-9334-92ff51aa7b44.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Men/Tops/TERU LS - 175K/b44b7088-8d27-49f9-82c7-df5d8467707a.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Tops/TERU LS - 175K/42b42f22-e3f8-461c-b6d3-72e10835687b.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'image_detail_1' => 'Original Quzzy/Men/Tops/VARIOUS OLIVE - 150K/8c9e49df-5b60-4c1d-93e9-eccf1d821174.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Tops/VARIOUS OLIVE - 150K/6800096e-b217-4b6c-848e-62cf5e9ee808.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Men/Bottom/FIELD BLACK BOXER - 75K/a96a3d2a-6e67-45f3-8f19-e2bd462126b0.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Bottom/FIELD BLACK BOXER - 75K/9b43deab-9140-442b-98c2-7ad1ec8b8483.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Men/Bottom/GRID OLIVE BOXER - 75K/40162ad7-93e4-4d50-889b-6dfc5d9565dc.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Bottom/GRID OLIVE BOXER - 75K/a16e63f1-e403-4ae8-a904-c45f705fa20f.jpg',
                'image_detail_3' => 'Original Quzzy/Men/Bottom/GRID OLIVE BOXER - 75K/9f7e93cf-d822-48f4-93ed-a0e5d9382539.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Men/Bottom/LEEDS MAROON - 175K/717dfa93-9e00-4fb2-a546-a70b211a4737.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Bottom/LEEDS MAROON - 175K/72320e7c-3134-4618-9c16-ff0faac40255.jpg',
                'image_detail_3' => 'Original Quzzy/Men/Bottom/LEEDS MAROON - 175K/ea1b622a-2bda-47e0-8dfc-7d5227458cd8.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Men/Bottom/LINE BOXER WHITE - 75K/a5858c03-e74f-4ed1-b19f-e4efff2ae478.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Bottom/LINE BOXER WHITE - 75K/39e2a106-031d-4a30-b9a4-aee288c662b5.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Men/Accessories/NIZU BLACK - 100K/9feec9d7-39fa-443d-8428-2b6decb2df25.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Accessories/NIZU BLACK - 100K/78fa6e8e-0502-4230-bd5c-84127f35b89b.jpg',
                'image_detail_3' => 'Original Quzzy/Men/Accessories/NIZU BLACK - 100K/4d310a81-6279-49f2-9cc8-704a3efbcc73.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Men/Accessories/ROWDI HAT - 140K/edb5fe7d-9739-4872-87d6-441baec2d50d.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Accessories/ROWDI HAT - 140K/92f28172-4876-4e00-a15e-ff9e75e4c117.jpg',
                'image_detail_3' => 'Original Quzzy/Men/Accessories/ROWDI HAT - 140K/b899cb4d-7ec0-42f1-bbe1-114416bd7d60.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Men/Accessories/TORRU NAVY - 100K/ec789c99-f7c7-49fd-87e1-7ca95acb519d.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Men/Accessories/VERT BLACK - 35K/167be562-8f13-44d6-a37c-9e3c29646966.jpg',
                'image_detail_2' => 'Original Quzzy/Men/Accessories/VERT BLACK - 35K/f07ea23b-175b-47d6-ba30-0a3fc07c0e50.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'image_detail_1' => 'Original Quzzy/Women/Tops/ALL THAT JAZZ WHITE - 150K/a49aebef-1cfd-4953-bfd5-890dddb24501.jpg',
                'image_detail_2' => '',                
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Tops/LEACH MATTE - 150K/47d1a963-980a-43b8-87c3-41308e727edb.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Tops/LEACH MATTE - 150K/477980a5-f53b-4c69-a8c8-4e40d0037dc5.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Tops/NIZU LS - 175K/02839e0b-a1c1-47d3-84ba-8249c4fc36ab.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Tops/NIZU LS - 175K/1a824c6a-92b1-4e22-8f2f-dce424887e98.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Tops/OG LGO WHITE - 150K/bde42052-e20a-45c9-95e3-a033b825c9a4.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Tops/OG LGO WHITE - 150K/a7634e2a-ea5e-4f56-a880-e4a805be81f4.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Tops/ZERU TEE - 150K/b54776af-f800-4888-a073-dc33d79b409d.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Tops/ZERU TEE - 150K/f5ba12bd-f780-4d11-87b6-acd5805f378d.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Accessories/NAGO CAP - 140K/3db3cb3f-77e3-45be-9430-88f010c583ef.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Accessories/NAGO CAP - 140K/b591872c-b1ee-4b8e-a469-129807865d78.jpg',
                'image_detail_3' => 'Original Quzzy/Women/Accessories/NAGO CAP - 140K/1e2b3eba-3a9b-461a-8458-54a6c09c2cb0.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Accessories/NIZU OLIVE - 150K/0b619cb5-46ac-44d9-b0de-952aa379c903.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Accessories/NIZU OLIVE - 150K/e0b6540f-6bd0-442f-b997-aa3c3a65d7c5.jpg',
                'image_detail_3' => 'Original Quzzy/Women/Accessories/NIZU OLIVE - 150K/83fb6828-359a-4df1-8494-1bcf500c2784.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Accessories/NOISE HAT - 140K/41a526bb-67ea-42c0-a9f0-67d105070a2d.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Accessories/NOISE HAT - 140K/7103251d-4f7a-4d0a-a80c-2f2608c97ac2.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Accessories/STOOTH BLACK MASK - 30K/4234dfe1-245f-4da4-9893-e40f7ae3ede7.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Accessories/STOOTH BLACK MASK - 30K/97b7615e-10dd-4db9-974b-a11baa568330.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Accessories/TIER MASK - 30K/eb83e61e-5522-4c41-bf2f-dcea8662f5d2.jpg',
                'image_detail_2' => 'Original Quzzy/Women/Accessories/TIER MASK - 30K/fa608009-14da-497d-a4bf-edee99bcc5c9.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Original Quzzy/Women/Accessories/TORRU MUSTARD - 100K/18b82d92-58b9-49ed-8071-d5003ed95526.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Men/Accessories/Boden Green - 36K/ykykf.jpg',
                'image_detail_2' => 'Pattent Goods/Men/Accessories/Boden Green - 36K/guteur.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Men/Accessories/Jax Navy - 36K/hjdgjdd.jpg',
                'image_detail_2' => 'Pattent Goods/Men/Accessories/Jax Navy - 36K/sgdsgsgd.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Men/Accessories/Polo Cap Black - 150K/lgkhg.jpg',
                'image_detail_2' => 'Pattent Goods/Men/Accessories/Polo Cap Black - 150K/olkgkf.jpg',
                'image_detail_3' => 'Pattent Goods/Men/Accessories/Polo Cap Black - 150K/oggkgh.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Men/Accessories/Shelby Maroon - 36K/jtdjdf.jpg',
                'image_detail_2' => 'Pattent Goods/Men/Accessories/Shelby Maroon - 36K/iyjffg.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Men/Accessories/Vermi Navy Cap - 150K/kgkkyg.jpg',
                'image_detail_2' => 'Pattent Goods/Men/Accessories/Vermi Navy Cap - 150K/kkfjd.jpg',
                'image_detail_3' => 'Pattent Goods/Men/Accessories/Vermi Navy Cap - 150K/kfykff.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Women/Accessories/Basic Circle Shibori - 75K/jdjfd.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Women/Accessories/Hidden 2 White - 35K/gdsgsds.jpg',
                'image_detail_2' => 'Pattent Goods/Women/Accessories/Hidden 2 White - 35K/sgdsgs.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Women/Accessories/Holo Red - 36K/agafasa.jpg',
                'image_detail_2' => 'Pattent Goods/Women/Accessories/Holo Red - 36K/gagava.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pattent Goods/Women/Accessories/Solid Ruby - 38K/jdvdgs.jpg',
                'image_detail_2' => 'Pattent Goods/Women/Accessories/Solid Ruby - 38K/gagaga.jpg',
                'image_detail_3' => 'Pattent Goods/Women/Accessories/Solid Ruby - 38K/ootkt.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Shoes/Loafers Belgian Penny L.I.F.E Tan - 600K/136_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Shoes/Loafers Belgian Penny L.I.F.E Tan - 600K/137_1100x.jpg',
                'image_detail_3' => 'PorteeGoods/Men/Shoes/Loafers Belgian Penny L.I.F.E Tan - 600K/138_1100x.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Shoes/Loafers Slippers L.I.F.E Heels Black - 490K/loafers-slippers-life-heels-black_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Shoes/Loafers Slippers L.I.F.E Heels Black - 490K/loafers-slippers-life-heels-black_1_1100x.jpg',
                'image_detail_3' => 'PorteeGoods/Men/Shoes/Loafers Slippers L.I.F.E Heels Black - 490K/loafers-slippers-life-heels-black_2_1100x.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Shoes/Loom L.I.F.E Grain (Sand White) - 520K/k10_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Shoes/Loom L.I.F.E Grain (Sand White) - 520K/k11_1100x.jpg',
                'image_detail_3' => 'PorteeGoods/Men/Shoes/Loom L.I.F.E Grain (Sand White) - 520K/k12_1100x.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Shoes/Loom L.I.F.E Steel (Grey White) - 520K/kn19_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Shoes/Loom L.I.F.E Steel (Grey White) - 520K/kn20_1100x.jpg',
                'image_detail_3' => 'PorteeGoods/Men/Shoes/Loom L.I.F.E Steel (Grey White) - 520K/kn21_1100x.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Shoes/Oxford Knit Oreo Triple Black - 490K/oxford-knit-oreo-triple-black_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Shoes/Oxford Knit Oreo Triple Black - 490K/oxford-knit-oreo-triple-black_1_1100x.jpg',
                'image_detail_3' => 'PorteeGoods/Men/Shoes/Oxford Knit Oreo Triple Black - 490K/oxford-knit-oreo-triple-black_2_1100x.jpg',
                'image_detail_4' => 'PorteeGoods/Men/Shoes/Oxford Knit Oreo Triple Black - 490K/oxford-knit-oreo-triple-black_3_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E All Black - 520K/oxford-wingtip-black_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E All Black - 520K/oxford-wingtip-black_1_1100x.jpg',
                'image_detail_3' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E All Black - 520K/oxford-wingtip-black_2_1100x.jpg',
                'image_detail_4' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E All Black - 520K/oxford-wingtip-black_3_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E Brown Brushed Off - 700K/oxford-wingtip-life-brown-brushed-off-1_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E Brown Brushed Off - 700K/oxford-wingtip-life-brown-brushed-off_1100x.jpg',
                'image_detail_3' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E Brown Brushed Off - 700K/oxford-wingtip-life-brown-brushed-off_1_1100x.jpg',
                'image_detail_4' => 'PorteeGoods/Men/Shoes/Oxford Wingtip L.I.F.E Brown Brushed Off - 700K/oxford-wingtip-life-brown-brushed-off_2_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Shoes/Oxford Wingtip Oxblood Brushed Off - 700K/oxford-wingtip-oxblood_1_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Shoes/Oxford Wingtip Oxblood Brushed Off - 700K/oxford-wingtip-oxblood_1100x.jpg',
                'image_detail_3' => 'PorteeGoods/Men/Shoes/Oxford Wingtip Oxblood Brushed Off - 700K/oxford-wingtip-oxblood_2_1100x.jpg',
                'image_detail_4' => 'PorteeGoods/Men/Shoes/Oxford Wingtip Oxblood Brushed Off - 700K/oxford-wingtip-oxblood_3_1100x.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Accessories/Marque Cosmos Black - 780K/680-large_default_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Accessories/Marque Cosmos Black - 780K/681-large_default_marque_cosomos_black_1100x.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'PorteeGoods/Men/Accessories/Marque Vintage Creme - 780K/684-large_default_vintage_1100x.jpg',
                'image_detail_2' => 'PorteeGoods/Men/Accessories/Marque Vintage Creme - 780K/685-large_default_vontage_1100x.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Men/Tops/POT MEETS POP - BLAZING TEE NAVY - 250K/7af14111-7665-450a-a65a-ede6bf43d9a4.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Men/Tops/POT MEETS POP - GROOVY DUB HOODIE NAVY - 480K/a3c5c215-b5ba-462c-8353-f7ae6db92a9d.jpg',
                'image_detail_2' => 'Pot Meets Pop/Men/Tops/POT MEETS POP - GROOVY DUB HOODIE NAVY - 480K/30353071-cc9b-420c-a4db-4d11e2293f24.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Men/Tops/POT MEETS POP LOVERS ROCK TEE NAVY - 250K/42910060_0171eacd-bad4-4b95-91b1-686528931c00_1919_1919.jpg',
                'image_detail_2' => 'Pot Meets Pop/Men/Tops/POT MEETS POP LOVERS ROCK TEE NAVY - 250K/42910060_7c8df6b5-2b8e-40d4-80f2-088a8f8a6a08_1919_1919.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Men/Tops/POT MEETS POP OZ ARMY SLANTED POCKET RED JACKET - 650K/42910060_d39b2605-37a7-44ca-88a1-84f63de5d281_898_898.jpg',
                'image_detail_2' => 'Pot Meets Pop/Men/Tops/POT MEETS POP OZ ARMY SLANTED POCKET RED JACKET - 650K/42910060_81a66d9c-e594-4309-acbf-874d96b04a20_1919_1919.jpg',
                'image_detail_3' => 'Pot Meets Pop/Men/Tops/POT MEETS POP OZ ARMY SLANTED POCKET RED JACKET - 650K/42910060_0980cef1-ac81-45be-9807-b5face56a01a_898_898.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Men/Bottom/PMP DENIM HAZE BLUE PANT - 625K/42910060_e3ba750a-1f6a-4d27-b54b-fd1735511fc4_1919_1919.jpg',
                'image_detail_2' => 'Pot Meets Pop/Men/Bottom/PMP DENIM HAZE BLUE PANT - 625K/42910060_cb05dec9-74da-43cc-9f8c-0b9403933478_1919_1919.jpg',
                'image_detail_3' => 'Pot Meets Pop/Men/Bottom/PMP DENIM HAZE BLUE PANT - 625K/42910060_41ce96d1-8bd9-4833-8485-cef06a5d2a72_1919_1919.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Men/Bottom/PMP DENIM SUPER THAISTICK DARK BLUE PANT - 625K/42910060_9480dc74-1e0d-4abc-94f2-c399a32eb1b3_1919_1919.jpg',
                'image_detail_2' => 'Pot Meets Pop/Men/Bottom/PMP DENIM SUPER THAISTICK DARK BLUE PANT - 625K/42910060_c57738d2-9cd0-4e17-810d-327cbe78146b_1919_1919.jpg',
                'image_detail_3' => 'Pot Meets Pop/Men/Bottom/PMP DENIM SUPER THAISTICK DARK BLUE PANT - 625K/42910060_3a692ab8-b756-4b46-8c55-00df8dd05106_1919_1919.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Men/Bottom/POT MEETS POP CHRONIC CARGO BLUE SHORT - 450K/42910060_7cce9e99-2d8e-403b-b109-e8f98353bf6d_900_900.jpg',
                'image_detail_2' => 'Pot Meets Pop/Men/Bottom/POT MEETS POP CHRONIC CARGO BLUE SHORT - 450K/42910060_2f84074f-1593-4718-ba5a-13d04c73c035_1919_1919.jpg',
                'image_detail_3' => 'Pot Meets Pop/Men/Bottom/POT MEETS POP CHRONIC CARGO BLUE SHORT - 450K/42910060_7cce9e99-2d8e-403b-b109-e8f98353bf6d_900_900.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Men/Bottom/POT MEETS POP FATTY FATIGUE PANT MAROON - 550K/42910060_648f6ffc-894d-4cac-861f-70c883817649_900_900.jpg',
                'image_detail_2' => 'Pot Meets Pop/Men/Bottom/POT MEETS POP FATTY FATIGUE PANT MAROON - 550K/42910060_343c5659-039c-4f2a-8342-101996417df5_1919_1919.jpg',
                'image_detail_3' => 'Pot Meets Pop/Men/Bottom/POT MEETS POP FATTY FATIGUE PANT MAROON - 550K/42910060_648f6ffc-894d-4cac-861f-70c883817649_900_900.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Women/Tops/POT MEETS POP - SHAKE A LEG TEE PURPLE - 250K/42910060_9195526b-c398-45c9-b16f-9b148dc5f03e_898_898.jpg',
                'image_detail_2' => 'Pot Meets Pop/Women/Tops/POT MEETS POP - SHAKE A LEG TEE PURPLE - 250K/42910060_0d7c2352-8e60-4713-aca2-ddc00d3653e7_900_900.jpg',
                'image_detail_3' => 'Pot Meets Pop/Women/Tops/POT MEETS POP - SHAKE A LEG TEE PURPLE - 250K/42910060_b25a757c-d200-45db-8f05-14f75efe7b23_898_898.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Women/Tops/POT MEETS POP - LOGO TEE TIE-DYE ORANGE - 280K/4a63c0d6-dad2-498c-a0da-37159285da8c.jpg',
                'image_detail_2' => 'Pot Meets Pop/Women/Tops/POT MEETS POP - LOGO TEE TIE-DYE ORANGE - 280K/7fc5c5f1-33f6-4957-8604-8fe67e41d8c8.jpg',
                'image_detail_3' => 'Pot Meets Pop/Women/Tops/POT MEETS POP - LOGO TEE TIE-DYE ORANGE - 280K/3f597872-4766-494d-a4b5-c6c9f04208b7.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Women/Tops/POT MEETS POP PEACE DEPARTEMENT TEE GREEN - 210K/4711454_32dd8ff1-5ae8-4eb9-939d-c2e4f700a572_721_721.jpg',
                'image_detail_2' => 'Pot Meets Pop/Women/Tops/POT MEETS POP PEACE DEPARTEMENT TEE GREEN - 210K/4711454_296cc154-2ca7-4845-a00e-2b60b5e5db44_721_721.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP PIPES JACQUARD PANT - 500K/42910060_8e3f8b8b-b490-42cd-9a60-cf8b11a68a09_1919_1919.jpg',
                'image_detail_2' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP PIPES JACQUARD PANT - 500K/42910060_555456bc-1302-4943-b2b7-1640472e8fc7_1919_1919.jpg',
                'image_detail_3' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP PIPES JACQUARD PANT - 500K/42910060_07adae54-df3e-4392-8a35-88caa39c1807_1919_1919.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP STARBUD BELT SHORT POLKADOT - 380K/42910060_3d8c5584-aff2-478e-8ef8-f8ddb1f1f619_1919_1919.jpg',
                'image_detail_2' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP STARBUD BELT SHORT POLKADOT - 380K/42910060_d4606b01-4f78-4876-9077-eefd3e9cdb7b_1919_1919.jpg',
                'image_detail_3' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP STARBUD BELT SHORT POLKADOT - 380K/42910060_c1b9dc83-44ac-423d-83e7-2d6a146e6a9c_1919_1919.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP STARBUD BELTED SHORT CORDUROY - 400K/42910060_660ffefb-74aa-46d4-81b4-21abb4046af0_1919_1919.jpg',
                'image_detail_2' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP STARBUD BELTED SHORT CORDUROY - 400K/42910060_913e7520-579b-4a25-aef5-5e90c550f7df_1919_1919.jpg',
                'image_detail_3' => 'Pot Meets Pop/Women/Bottom/POT MEETS POP STARBUD BELTED SHORT CORDUROY - 400K/42910060_355f162e-642c-4b1b-a347-9e5e11ca53be_1919_1919.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Men/Tops/CLASS OF ’99 TRACK TOP – WHITENAVYRED - 650K/SS21-PC-SPORTSWEAR-07-scaled.jpg',
                'image_detail_2' => 'Public Culture/Men/Tops/CLASS OF ’99 TRACK TOP – WHITENAVYRED - 650K/SS21-PC-SPORTSWEAR-08-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Men/Tops/COURT TEE – BLACK - 300K/COURT-TEE-BLACK--scaled.jpg',
                'image_detail_2' => 'Public Culture/Men/Tops/COURT TEE – BLACK - 300K/COURT-TEE-BLACK-1-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Men/Tops/IMAGINATION LS TEE - PEACH - 350K/PRODUCT-THUMBNAIL-WEB-23.jpg',
                'image_detail_2' => 'Public Culture/Men/Tops/IMAGINATION LS TEE - PEACH - 350K/PRODUCT-THUMBNAIL-WEB-24.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Men/Tops/PC SPORT RUGBY – YELLOWNAVY - 500K/SS21-PC-SPORTSWEAR-01-scaled.jpg',
                'image_detail_2' => '',                
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Men/Bottom/PC SPORT SHORT PANTS – NAVY - 400K/SS21-PC-SPORTSWEAR-14-scaled.jpg',
                'image_detail_2' => '',                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Men/Bottom/SHROOM SHORT PANTS - BLUE - 280K/WEB-PRODUCT-PHOTO-FW20-55.jpg',
                'image_detail_2' => 'Public Culture/Men/Bottom/SHROOM SHORT PANTS - BLUE - 280K/WEB-PRODUCT-PHOTO-FW20-56.jpg',                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Men/Accessories/CREATURE WORK PANTS - BLACK - 175K/WEB-FW20-50-1-scaled.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Men/Accessories/LAWS OF THE UNIVERSE STICKER PACK - 50K/STICKER-PACK-FW-20.jpg',
                'image_detail_2' => 'Public Culture/Men/Accessories/LAWS OF THE UNIVERSE STICKER PACK - 50K/STICKER-PACK.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Women/Tops/COLLEGE TEE – BLACK - 300K/COLLEGE-TEE-BLACK-scaled.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Women/Tops/FLOWER HEAD TEE - SOFT BLUE - 300K/PRODUCT-THUMBNAIL-WEB-11.jpg',
                'image_detail_2' => 'Public Culture/Women/Tops/FLOWER HEAD TEE - SOFT BLUE - 300K/PRODUCT-THUMBNAIL-WEB-12.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Women/Tops/MARATHON SNATCH TEE – BLACK - 300K/MARATHON-SNATCH-TEE-BLACK-scaled.jpg',
                'image_detail_2' => 'Public Culture/Women/Tops/MARATHON SNATCH TEE – BLACK - 300K/MARATHON-SNATCH-TEE-BLACK-1-scaled.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Women/Bottom/CREATURE WORK PANTS - BLACK - 350K/WEB-PRODUCT-PHOTO-FW20-59.jpg',
                'image_detail_2' => 'Public Culture/Women/Bottom/CREATURE WORK PANTS - BLACK - 350K/WEB-PRODUCT-PHOTO-FW20-60.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Women/Bottom/PC SPORT PANTS – BLACK - 500K/SS21-PC-SPORTSWEAR-11-scaled.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Women/Accessories/SHROOMS FOLDABLE SHOPPING BAG – YELLOW - 200K/PC-Shopping-Bag-02.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Public Culture/Women/Accessories/SUN TOTEBAG - BLACK - 250K/PRODUCT-THUMBNAIL-WEB-52.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Tops/Alaskan Front Tees Black - 200K/rhrrr.jpg',
                'image_detail_2' => 'Sage Denim/Men/Tops/Alaskan Front Tees Black - 200K/fasfs.jpg',
                'image_detail_3' => 'Sage Denim/Men/Tops/Alaskan Front Tees Black - 200K/agrhrr.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Tops/Pierce Hoodie - 370K/gafa.jpg',
                'image_detail_2' => 'Sage Denim/Men/Tops/Pierce Hoodie - 370K/agdr.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Tops/Sage x Havana Sunset  Mountain - 299K/jyfjg.jpg',
                'image_detail_2' => 'Sage Denim/Men/Tops/Sage x Havana Sunset  Mountain - 299K/kfyhg.jpg',
                'image_detail_3' => 'Sage Denim/Men/Tops/Sage x Havana Sunset  Mountain - 299K/gsdsff.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Tops/Senjo Tees Khaki - 200K/agafas.jpg',
                'image_detail_2' => 'Sage Denim/Men/Tops/Senjo Tees Khaki - 200K/gesgdg.jpg',
                'image_detail_3' => 'Sage Denim/Men/Tops/Senjo Tees Khaki - 200K/agdg.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Tops/Solid Crafts JP Tees - 200K/assfsf.jpg',
                'image_detail_2' => 'Sage Denim/Men/Tops/Solid Crafts JP Tees - 200K/asfaf.jpg',
                'image_detail_3' => 'Sage Denim/Men/Tops/Solid Crafts JP Tees - 200K/ahhtdh.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Bottom/7th Anniversary Special  River 18oz Unsanforized Deep Indigo x Blue Weft - 1150K/zadag.jpg',
                'image_detail_2' => 'Sage Denim/Men/Bottom/7th Anniversary Special  River 18oz Unsanforized Deep Indigo x Blue Weft - 1150K/fasfasada.jpg',
                'image_detail_3' => 'Sage Denim/Men/Bottom/7th Anniversary Special  River 18oz Unsanforized Deep Indigo x Blue Weft - 1150K/fasfafge.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Bottom/7th Anniversary Special  Sierra 18oz Unsanforized Deep Indigo x Brown Weft - 1150K/fasfasf.jpg',
                'image_detail_2' => 'Sage Denim/Men/Bottom/7th Anniversary Special  Sierra 18oz Unsanforized Deep Indigo x Brown Weft - 1150K/fasfasffa.jpg',
                'image_detail_3' => 'Sage Denim/Men/Bottom/7th Anniversary Special  Sierra 18oz Unsanforized Deep Indigo x Brown Weft - 1150K/asfasf.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Bottom/Rover Denim – 14oz Indigo Denim - 520K/gheh.jpg',
                'image_detail_2' => 'Sage Denim/Men/Bottom/Rover Denim – 14oz Indigo Denim - 520K/hrjrj.jpg',
                'image_detail_3' => 'Sage Denim/Men/Bottom/Rover Denim – 14oz Indigo Denim - 520K/faag.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Bottom/Rover Denim – 14oz Indigo x Black Denim- 600K/afseg.jpg',
                'image_detail_2' => 'Sage Denim/Men/Bottom/Rover Denim – 14oz Indigo x Black Denim- 600K/vasf.jpg',
                'image_detail_3' => 'Sage Denim/Men/Bottom/Rover Denim – 14oz Indigo x Black Denim- 600K/aggee.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Bottom/Wolfberg 21oz Sanforized Deep Indigo - 1250K/fafss.jpg',
                'image_detail_2' => 'Sage Denim/Men/Bottom/Wolfberg 21oz Sanforized Deep Indigo - 1250K/fasse.jpg',
                'image_detail_3' => 'Sage Denim/Men/Bottom/Wolfberg 21oz Sanforized Deep Indigo - 1250K/asfs.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Accessories/Sage Craftworks  Bearer Belt Tan - 320K/fasff.jpg',
                'image_detail_2' => 'Sage Denim/Men/Accessories/Sage Craftworks  Bearer Belt Tan - 320K/gasgass.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Accessories/Sage Craftworks  Mountwise Bifold Wallet Natural - 600K/fasffs.jpg',
                'image_detail_2' => 'Sage Denim/Men/Accessories/Sage Craftworks  Mountwise Bifold Wallet Natural - 600K/geafaa.jpg',
                'image_detail_3' => 'Sage Denim/Men/Accessories/Sage Craftworks  Mountwise Bifold Wallet Natural - 600K/gegadf.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Sage Denim/Men/Accessories/Talon Lanyard II Tan - 80K/agsf.jpg',
                'image_detail_2' => 'Sage Denim/Men/Accessories/Talon Lanyard II Tan - 80K/gegaef.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Men/Tops/LORDE TSHIRT - 200K/ff.jpg',
                'image_detail_2' => 'Shining Bright/Men/Tops/LORDE TSHIRT - 200K/afsa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Men/Tops/Shining Bright and Scooby-Doo Boo Shirt - 400K/BOO_1617357077956_resized1024.jpg',
                'image_detail_2' => 'Shining Bright/Men/Tops/Shining Bright and Scooby-Doo Boo Shirt - 400K/asfsfsfe.jpg',
                'image_detail_3' => 'Shining Bright/Men/Tops/Shining Bright and Scooby-Doo Boo Shirt - 400K/dasdsdJPG.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Men/Tops/Shining Bright Driblingz Crewneck - 350K/53ee26da0e8459de495a5e1d67851aca_1617268350515_resized1024.jpeg',
                'image_detail_2' => 'Shining Bright/Men/Tops/Shining Bright Driblingz Crewneck - 350K/asfsf.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Men/Tops/Shining Bright G4sh Tshirt - 200K/49847b42f67bfc052e53e615b5ea8d1a_1617097160498_resized1024.jpeg',
                'image_detail_2' => 'Shining Bright/Men/Tops/Shining Bright G4sh Tshirt - 200K/gasgggs.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Men/Bottom/LUXE SHORT PANTS - GREY/JX7A0423.jpg',
                'image_detail_2' => 'Shining Bright/Men/Bottom/LUXE SHORT PANTS - GREY/a.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Men/Accessories/Shining Bright Flacid Socks - 35K/7d6963e1036d1662bc2656423c13d3ce_1616579512447_resized1024.jpeg',
                'image_detail_2' => 'Shining Bright/Men/Accessories/Shining Bright Flacid Socks - 35K/afsffsaf.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Men/Accessories/Shining Bright Victoria Sunglasses - 200K/87af601bf0745360aeaf618e74b08280_1612238583891._resized1024.jpeg',
                'image_detail_2' => 'Shining Bright/Men/Accessories/Shining Bright Victoria Sunglasses - 200K/asdsds.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Men/Accessories/Shining Bright X Noxa Pin - 50K/d7293c09ad2567950e7f7592e59a89c3_1612238238877._resized1024.jpg',
                'image_detail_2' => 'Shining Bright/Men/Accessories/Shining Bright X Noxa Pin - 50K/asdsdssss.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Tops/BILLIARD BALLS LOGO TSHIRT - PURPLE/fa.jpg',
                'image_detail_2' => 'Shining Bright/Women/Tops/BILLIARD BALLS LOGO TSHIRT - PURPLE/ss.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Tops/Shining Bright and Scooby-Doo Whoa Pocket Tees - 200K/whoa_1617353586499_resized1024.jpg',
                'image_detail_2' => 'Shining Bright/Women/Tops/Shining Bright and Scooby-Doo Whoa Pocket Tees - 200K/sdadsdse.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Tops/VIBRANT LOGO TSHIRT - 200K/afsfaf.jpg',
                'image_detail_2' => 'Shining Bright/Women/Tops/VIBRANT LOGO TSHIRT - 200K/fasfafa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Bottom/C&S WORK PANTS - BLACK-OLIVE/a.jpg',
                'image_detail_2' => 'Shining Bright/Women/Bottom/C&S WORK PANTS - BLACK-OLIVE/b.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Bottom/MARCO SHORT PANTS - WHITE/f.jpg',
                'image_detail_2' => 'Shining Bright/Women/Bottom/MARCO SHORT PANTS - WHITE/c.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Accessories/AMARI SUNGLASSES - TORTOISE/JX7A5873-scaled.jpg',
                'image_detail_2' => 'Shining Bright/Women/Accessories/AMARI SUNGLASSES - TORTOISE/d.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Accessories/REN-78 DIGITAL WATCH - CLEAR/df.jpg',
                'image_detail_2' => 'Shining Bright/Women/Accessories/REN-78 DIGITAL WATCH - CLEAR/g.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Accessories/Shining Bright Alienation Wallet - 150K/89f51cfcc18fcaed15597eae42e1d8be_1612250799317._resized1024.jpg',
                'image_detail_2' => 'Shining Bright/Women/Accessories/Shining Bright Alienation Wallet - 150K/asdsd.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Shining Bright/Women/Accessories/SHINING LIFE NAIL CLIPPER - BLACK/af.jpg',
                'image_detail_2' => 'Shining Bright/Women/Accessories/SHINING LIFE NAIL CLIPPER - BLACK/gg.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Tenue de Attire/Men/Tops/Mantra Orange Shirt/fasaf.jpg',
                'image_detail_2' => 'Tenue de Attire/Men/Tops/Mantra Orange Shirt/kua.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Tenue de Attire/Men/Tops/TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Shirt/feagea.jpg',
                'image_detail_2' => 'Tenue de Attire/Men/Tops/TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Shirt/afsfa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Tenue de Attire/Men/Bottom/All Day Pajamas Tosca Short Pants/gag.jpg',
                'image_detail_2' => 'Tenue de Attire/Men/Bottom/All Day Pajamas Tosca Short Pants/fa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Tenue de Attire/Women/Tops/Contour Miro Shirt/miro-2_800x.jpg',
                'image_detail_2' => '',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Tenue de Attire/Women/Bottom/All Day Pajamas Blue Long Pants/gasga.jpg',
                'image_detail_2' => 'Tenue de Attire/Women/Bottom/All Day Pajamas Blue Long Pants/gawa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Tenue de Attire/Women/Accessories/TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Small Bag/d.jpg',
                'image_detail_2' => 'Tenue de Attire/Women/Accessories/TENUE DE ATTIRE X ABENK ALTER Dream of Tomorrow Small Bag/adsa.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Heart T-Shirt Brown - 135K/zvxzvxz.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Heart T-Shirt Brown - 135K/bdzvd - Copy.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Heart T-Shirt Red - 135K/xzzcz.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Heart T-Shirt Red - 135K/aszxz.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Heart T-Shirt Red - 135K/zxzc.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Smile Tee White - 143K/acxz.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Smile Tee White - 143K/ascxz.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Good Smile Tee White - 143K/xzzz.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Jarvis Short Sleeve Shirt Dark Olive - 250K/vxzx.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Jarvis Short Sleeve Shirt Dark Olive - 250K/nfiykg.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Jarvis Short Sleeve Shirt Dark Olive - 250K/vxzvz.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Sam Pocket T-Shirt Dark Green - 225K/abva.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Sam Pocket T-Shirt Dark Green - 225K/avavas.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Sam Pocket T-Shirt Dark Green - 225K/acva.jpg',
                'image_detail_4' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Sam Pocket T-Shirt Dark Green - 225K/ntdndn.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Tom Pocket T-Shirt Dark Blue - 175K/vavsacx.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Tom Pocket T-Shirt Dark Blue - 175K/vasase.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Tops/THE GOODS DEPT - Tom Pocket T-Shirt Dark Blue - 175K/vavsacx.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Shoes/DREAM SLIDE - NAVY - 279K/vava.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Shoes/DREAM SLIDE - NAVY - 279K/vaa.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Shoes/DREAM SLIDE - NAVY - 279K/gng.jpg',
                'image_detail_4' => 'The Goods Dept/Men/Shoes/DREAM SLIDE - NAVY - 279K/mgfmgf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Shoes/NEON SLIDE - LIGHT GREEN - 279K/vavsa.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Shoes/NEON SLIDE - LIGHT GREEN - 279K/avsav.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Shoes/NEON SLIDE - LIGHT GREEN - 279K/ngng.jpg',
                'image_detail_4' => 'The Goods Dept/Men/Shoes/NEON SLIDE - LIGHT GREEN - 279K/avsa.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Shoes/Rama Sneakers - Black - 269K/vavssa.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Shoes/Rama Sneakers - Black - 269K/vavsac.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Shoes/Rama Sneakers - Black - 269K/ascz.jpg',
                'image_detail_4' => 'The Goods Dept/Men/Shoes/Rama Sneakers - Black - 269K/asc.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Accessories/88RISING SACOCHE ORANGE - 199K/agaa.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Accessories/88RISING SACOCHE ORANGE - 199K/gagav.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Accessories/88RISING SACOCHE ORANGE - 199K/hrhrs.jpg',
                'image_detail_4' => 'The Goods Dept/Men/Accessories/88RISING SACOCHE ORANGE - 199K/mfmf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Accessories/88RISING STICKER PACK - 29K/nsfnsf.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Accessories/88RISING STICKER PACK - 29K/kgkh.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Accessories/88RISING STICKER PACK - 29K/mgfmf.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Accessories/OVER-P EASY LARGE SLING BAG BLACK - 300K/agaf.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Accessories/OVER-P EASY LARGE SLING BAG BLACK - 300K/csac.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Accessories/OVER-P EASY LARGE SLING BAG BLACK - 300K/gagdv.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Accessories/OVER-P EASY SHOULDER BAG BLACK - 180K/hljhl.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Accessories/OVER-P EASY SHOULDER BAG BLACK - 180K/bjtjd.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Accessories/OVER-P EASY SHOULDER BAG BLACK - 180K/grshs.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Accessories/STICKER PACK RIPPLE.MIX - 29K/jtjfg.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Accessories/STICKER PACK RIPPLE.MIX - 29K/gjgfjf.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Accessories/STICKER PACK RIPPLE.MIX - 29K/khhvmv.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Accessories/THE GOODS DEPT CRUMPLED MINI SLING BLACK - 300K/gfnfg.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Accessories/THE GOODS DEPT CRUMPLED MINI SLING BLACK - 300K/vagga.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Accessories/THE GOODS DEPT CRUMPLED MINI SLING BLACK - 300K/abab.jpg',
                'image_detail_4' => 'The Goods Dept/Men/Accessories/THE GOODS DEPT CRUMPLED MINI SLING BLACK - 300K/mfgmf.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Accessories/THE GOODS DEPT SINGLE LOGO DRAWSTRING BAG - 49K/dnd.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Accessories/THE GOODS DEPT SINGLE LOGO DRAWSTRING BAG - 49K/dfndd.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Men/Accessories/The Goods Dept Tote Bag Jakarta Coklat - 149K/fasfa.jpg',
                'image_detail_2' => 'The Goods Dept/Men/Accessories/The Goods Dept Tote Bag Jakarta Coklat - 149K/gasdgd.jpg',
                'image_detail_3' => 'The Goods Dept/Men/Accessories/The Goods Dept Tote Bag Jakarta Coklat - 149K/jykfk.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Tops/LOGO LONGSLEEVE .DARK BROWN.S - 279K/fafsad.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Tops/LOGO LONGSLEEVE .DARK BROWN.S - 279K/asad.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Tops/LOGO LONGSLEEVE .DARK BROWN.S - 279K/afsafa.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Tops/MULTICOLOR TEE SS.BLUE - 249K/afsaf.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Tops/MULTICOLOR TEE SS.BLUE - 249K/agwe.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Tops/MULTICOLOR TEE SS.BLUE - 249K/avsf.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Tops/PUFF TEE SS.MUSTARD - 249K/agsge.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Tops/PUFF TEE SS.MUSTARD - 249K/asgag.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Tops/PUFF TEE SS.OFF WHITE - 249K/gafa.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Tops/PUFF TEE SS.OFF WHITE - 249K/afdfee.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Tops/PUFF TEE SS.OFF WHITE - 249K/gags.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Shoes/88RISING SANDAL SLIP ON WHITE - 199K/asvacz.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Shoes/88RISING SANDAL SLIP ON WHITE - 199K/favzzx.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Shoes/88RISING SANDAL SLIP ON WHITE - 199K/avxzx.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Shoes/DONNA FLAT SHOES BLUE - 175K/asva.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Shoes/DONNA FLAT SHOES BLUE - 175K/avxz.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Shoes/DONNA FLAT SHOES BLUE - 175K/asxzvxz.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Shoes/GOODS LIZZY SANDAL MIX - 100K/vaasa.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Shoes/GOODS LIZZY SANDAL MIX - 100K/vavsx.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Shoes/GOODS LIZZY SANDAL MIX - 100K/aasv.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Shoes/GOODS ROUND HEELS GREEN - 149K/avszsax.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Shoes/GOODS ROUND HEELS GREEN - 149K/asvc.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Shoes/GOODS ROUND HEELS GREEN - 149K/avs.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Shoes/NEON SLIDE - PINK - 279K/aaa.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Shoes/NEON SLIDE - PINK - 279K/vsvsa.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Shoes/NEON SLIDE - PINK - 279K/vavsa.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Accessories/LOGO HAT.OLIVE.F - 159K/ndn.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Accessories/LOGO HAT.OLIVE.F - 159K/gnce.jpg',
                'image_detail_3' => 'The Goods Dept/Women/Accessories/LOGO HAT.OLIVE.F - 159K/zvzc.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Accessories/MULTICOLOR TOTE.OFF WHITE - 179K/aczx.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Accessories/MULTICOLOR TOTE.OFF WHITE - 179K/bzbdd.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Accessories/The Goods Dept TRANSPARANT POUCH SET - 55K/asczc.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Accessories/The Goods Dept TRANSPARANT POUCH SET - 55K/svdg.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'The Goods Dept/Women/Accessories/THUNDER R TOTE.OLIVE - 179K/avxzc.jpg',
                'image_detail_2' => 'The Goods Dept/Women/Accessories/THUNDER R TOTE.OLIVE - 179K/ngmgj.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'United Hart/Men/Tops/HO VAGUE - 428K/18.jpg',
                'image_detail_2' => 'United Hart/Men/Tops/HO VAGUE - 428K/19.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'United Hart/Men/Accessories/Checkered Hart Scarf - 120K/UH-SCARF-CHECKERED-HART-120.000.jpg',
                'image_detail_2' => 'United Hart/Men/Accessories/Checkered Hart Scarf - 120K/UH-SCARF-CHECKERED-HART-120.000-DETAIL.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'United Hart/Women/Tops/ABNORMAL CREWNECK - 420K/22.jpg',
                'image_detail_2' => 'United Hart/Women/Tops/ABNORMAL CREWNECK - 420K/35.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'United Hart/Women/Tops/TS THINKING - 248K/BAJU1.0.jpg',
                'image_detail_2' => 'United Hart/Women/Tops/TS THINKING - 248K/BAJU1.1.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ventela/Men/Shoes/Gum (bts) Series -385K/2021-01-30 09_35_58-GUM HIGH GREEN _ ventela.jpg',
                'image_detail_2' => 'Ventela/Men/Shoes/Gum (bts) Series -385K/2021-01-30 09_36_14-GUM HIGH GREEN _ ventela.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ventela/Men/Shoes/Hard13 Noir - 299K/2021-01-30 09_32_20-hard13-noir low _ ventela.jpg',
                'image_detail_2' => 'Ventela/Men/Shoes/Hard13 Noir - 299K/2021-01-30 09_32_53-hard13-noir low _ ventela.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ventela/Men/Shoes/Sang Sekerta - 385K/2021-01-30 09_30_31-sang sekerta high lohita _ ventela.jpg',
                'image_detail_2' => 'Ventela/Men/Shoes/Sang Sekerta - 385K/2021-01-30 09_30_47-sang sekerta high lohita _ ventela.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ventela/Men/Shoes/Urban - 299K/2021-01-30 09_34_34-urban brown _ ventela.jpg',
                'image_detail_2' => 'Ventela/Men/Shoes/Urban - 299K/2021-01-30 09_34_50-urban brown _ ventela.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ventela/Women/Armor - 299K/2021-01-30 09_27_46-Armor Black Natural _ ventela.jpg',
                'image_detail_2' => 'Ventela/Women/Armor - 299K/2021-01-30 09_28_29-Armor Black Natural _ ventela.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Ventela/Women/Ethnic Series - 299K/2021-01-30 09_37_59-ethnic black natural low _ ventela.jpg',
                'image_detail_2' => 'Ventela/Women/Ethnic Series - 299K/2021-01-30 09_38_17-ethnic black natural low _ ventela.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Men/Tops/Slowday Exploration Shirt - Voyej x Tropic Thunder x Melfri Gazza - 499K/view_SLOWDAY_EXPLORATION_SHIRT_NAVY_01.png',
                'image_detail_2' => 'Voyej/Men/Tops/Slowday Exploration Shirt - Voyej x Tropic Thunder x Melfri Gazza - 499K/view_SLOWDAY_EXPLORATION_SHIRT_NAVY_02.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Men/Tops/WEST INLAND Tee - 220K/view_west_inland_tees_01.png',
                'image_detail_2' => 'Voyej/Men/Tops/WEST INLAND Tee - 220K/view_west_inland_tees_02.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Men/Shoes/Adler - Leather Sneaker -1549K/view_ADLER_NA_01.png',
                'image_detail_2' => 'Voyej/Men/Shoes/Adler - Leather Sneaker -1549K/view_ADLER_NA_05.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Men/Accessories/Golden Hind Belt -649K/view_UNIBELT_NA_01a_copy.png',
                'image_detail_2' => 'Voyej/Men/Accessories/Golden Hind Belt -649K/view_Golden_Hind_NA.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Men/Accessories/Karimata V - 825K/view_KARIMATAV_NA_01.png',
                'image_detail_2' => 'Voyej/Men/Accessories/Karimata V - 825K/view_KARIMATAV_NA_02.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Men/Accessories/Vasa III American -259K/view_VASAIII_NA_031.jpg',
                'image_detail_2' => 'Voyej/Men/Accessories/Vasa III American -259K/view_VASAIII_NA_041.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Women/Accessories/Cruise Pouch - Horween Red Berry - 999K/view_CRUISE_REDBERRY_01.png',
                'image_detail_2' => 'Voyej/Women/Accessories/Cruise Pouch - Horween Red Berry - 999K/view_CRUISE_REDBERRY_02.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Women/Accessories/Grote Bag - 549K/view_GROTE_BAG_BROWN_01.png',
                'image_detail_2' => 'Voyej/Women/Accessories/Grote Bag - 549K/view_GROTE_BAG_BROWN_06.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Voyej/Women/Accessories/Passport Cover Americana - 429K/view_PASSPORTCOVER_NA_01.png',
                'image_detail_2' => 'Voyej/Women/Accessories/Passport Cover Americana - 429K/view_PASSPORTCOVER_NA_04.png',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Men/Tops/Wellborn Freedom Black T-Shirt - 153K/95b1676b-31d8-4612-97ea-00e603dfa7af.jpg',
                'image_detail_2' => 'Wellborn Company/Men/Tops/Wellborn Freedom Black T-Shirt - 153K/aada6418-96f6-46e5-9d78-c09ecee243ad.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Men/Tops/Wellborn Hellday White T-Shirt - 88K/aa241b04-069a-4d67-8d3b-3f457941566e.jpg',
                'image_detail_2' => 'Wellborn Company/Men/Tops/Wellborn Hellday White T-Shirt - 88K/56cf9e5e-6cdf-4d4f-84db-0319e5331d7b.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Men/Tops/Wellborn Piece FP Black Shirt - 153K/1b87bd73-ecf5-4a9b-99d7-175df10dd019.jpg',
                'image_detail_2' => 'Wellborn Company/Men/Tops/Wellborn Piece FP Black Shirt - 153K/90798fda-2b7a-49c6-aad7-7762b3ddca92.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Men/Bottom/Wellborn Cargo Short Black - 280K/ed8ab751-a7e6-40c9-8d5a-2a996696ce7c.jpg',
                'image_detail_2' => 'Wellborn Company/Men/Bottom/Wellborn Cargo Short Black - 280K/e92dddba-6651-40e8-9cf2-80acc014b103.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'image_detail_3' => '',
                'image_detail_4' => '',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Men/Bottom/Wellborn Denim Distressed Alpha - 170K/4587cc57-549e-46f5-b9f2-7b2c70e57409.jpg',
                'image_detail_2' => 'Wellborn Company/Men/Bottom/Wellborn Denim Distressed Alpha - 170K/bcbc57a8-ee1b-41df-8c3d-de2416c32796.jpg',
                'image_detail_3' => 'Wellborn Company/Men/Bottom/Wellborn Denim Distressed Alpha - 170K/e42f3ac5-b46d-4161-85d1-11a9973b097e.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Men/Bottom/Wellborn Slim Fit Chino Beige Pants - 280K/a61ca89c-73ef-4906-b5f4-ccba49c44862.jpg',
                'image_detail_2' => 'Wellborn Company/Men/Bottom/Wellborn Slim Fit Chino Beige Pants - 280K/10bb06c1-0146-45ea-b109-ab7ef966916f.jpg',
                'image_detail_3' => 'Wellborn Company/Men/Bottom/Wellborn Slim Fit Chino Beige Pants - 280K/23f07495-73f3-4c39-a0a0-4cb7e224d3c3.jpg',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Men/Accessories/Wellborn Hollow Black Hat - 123K/004ddb33-9b49-4102-89ca-1c359c4e80ed.jpg',
                'image_detail_2' => 'Wellborn Company/Men/Accessories/Wellborn Hollow Black Hat - 123K/ba593bf3-5b8d-4bd0-96be-b670e6022e0a.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Women/Tops/Wellborn Group White T-Shirt - 78K/274607b7-4635-46f2-b733-0911e41424b8.jpg',
                'image_detail_2' => 'Wellborn Company/Women/Tops/Wellborn Group White T-Shirt - 78K/ed8ae3a3-1c5f-4521-81ca-d520a9b6add4.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Women/Tops/Wellborn Logo Maroon T-Shirt - 78K/837a7f8e-83b7-4462-a24e-085bcd51a509.jpg',
                'image_detail_2' => 'Wellborn Company/Women/Tops/Wellborn Logo Maroon T-Shirt - 78K/55399cbb-8238-42bb-ab5e-ad03c26d1231.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Women/Tops/Wellborn Untruth SS Orange T-Shirt  - 78K/084cc0e7-d698-43c9-95f4-f617c9f0c56e.jpg',
                'image_detail_2' => 'Wellborn Company/Women/Tops/Wellborn Untruth SS Orange T-Shirt  - 78K/93d96a27-9d3f-46cf-9589-f03b9c55d8f0.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Women/Bottom/Wellborn Rascal Black Pants - 385K/9eaf7374-68b0-40cb-a5f2-debf00547770.jpg',
                'image_detail_2' => 'Wellborn Company/Women/Bottom/Wellborn Rascal Black Pants - 385K/5b969e71-361a-42c1-a57a-8abb56b044f3.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Women/Bottom/Wellborn Work Pant Long Khaki - 260K/53184024_310c1f2f-eb91-43a5-b72e-b5d5f3bb5ed7_1200_1200.jpg',
                'image_detail_2' => 'Wellborn Company/Women/Bottom/Wellborn Work Pant Long Khaki - 260K/53184024_c8c26219-5c62-47d0-b45c-96d37ea9ceba_1200_1200.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Women/Accessories/Wellborn Jungle Bucket Hat Black - 78K/65580410_632fe385-c314-4a7a-a865-814987a5c0b8.jpg',
                'image_detail_2' => 'Wellborn Company/Women/Accessories/Wellborn Jungle Bucket Hat Black - 78K/ba593bf3-5b8d-4bd0-96be-b670e6022e0a.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'image_detail_1' => 'Wellborn Company/Women/Accessories/Wellborn Pocket Bucket Hat Olive - 78K/25413a15-792c-42f7-9117-7c86e0aa1aad.jpg',
                'image_detail_2' => 'Wellborn Company/Women/Accessories/Wellborn Pocket Bucket Hat Olive - 78K/f9941eb7-7846-42a8-877d-16adde242fcf.jpg',
                'image_detail_3' => '',
                'image_detail_4' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
