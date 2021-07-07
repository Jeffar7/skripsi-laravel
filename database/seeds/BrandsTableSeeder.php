<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Ageless Galaxy',
                'picture' => 'Ageless Galaxy/Ageless_Galaxy.jpeg',
                'detail_picture' => 'Ageless Galaxy/Display Picture/AGLXY-x-Staple-Lookbook-9.jpg',
                'owner' => 'Tamish Aswani',
                'website' => 'https://aglxy.com/',
                'about' => 'Ageless Galaxy is a lifestyle brand inspired by outer space exploration. At the heart of the brand lies the mentality of staying curious and striving to make your mark in this never-ending galaxy. Working with passionate and like-minded individuals, constantly striving for greatness and on a mission against time to create a legacy for mankind to remember.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'AHHA',
                'picture' => 'AHHA/AHHA.png',
                'detail_picture' => 'AHHA/Display Picture/f381c5ee02ccf50bc67e.png',
                'owner' => 'Atta Halilintar',
                'website' => 'https://www.ahhaofficialstore.com/',
                'about' => "We're ATTA HALILINTAR HABIT GANG!

                We started from 2016 and it's been growing throughout Indonesia and another countries. Thanks for the support and we appreciate it all with always give the best quality of design, product and service. 
                
                We're looking forward to launching a new design and hope you like.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Aye & Co',
                'picture' => 'Aye & Co/Aye_&_Co.jpg',
                'detail_picture' => 'Aye & Co/Display Picture/AYE-CO-1-1500x1000.jpg',
                'owner' => 'Osky Carnelius',
                'website' => 'https://ayeandco.com/home',
                'about' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bear Wang Apparel',
                'picture' => 'Bear Wang Apparel/Bear_Wang_Apparel.jpeg',
                'detail_picture' => 'Bear Wang Apparel/Display Picture/4f66a45069ed2f9d10a216832c76bb38.jpeg',
                'owner' => 'Al harris Wibowo',
                'website' => 'https://bearwangapparel.com/',
                'about' => 'As there seemed to be no chance of getting her hands up to her head, she tried to get her head down to them, and was delighted to find that her neck would bend about easily in any direction, like a serpent.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bloods Industries',
                'picture' => 'Bloods Industries/Bloods_Industries.jpg',
                'detail_picture' => 'Bloods Industries/Display Picture/ootd-54-700x467.jpg',
                'owner' => 'Firmansyah Patriaman',
                'website' => 'https://www.bloods-industries.co/',
                'about' => 'Bloods have been running in the circles of vein for several years. Those cycles of journey have been an amazing adventures. Besides brave thundering days, the tempering nights, some cloaks were washed out, some bottles emptied, some passions tired out.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Compass',
                'picture' => 'Compass/Compass.png',
                'detail_picture' => 'Compass/Display Picture/a.jpg',
                'owner' => 'Aji Handoko Purbo',
                'website' => 'https://sepatucompass.com/',
                'about' => 'Compass started its humble beginning in 1998, as a small family business in Bandung. Two decades later, Compass is reborn with a fresh contemporary touch, while still retaining its history; a solid mix of classic vintage design and pop modern approach. The signature side stripe, symbolizes a running Gazelle in full flight – signifying the brand’s belief in endurance and drive to keep moving forward.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Crooz',
                'picture' => 'Crooz/Crooz.jpg',
                'detail_picture' => 'Crooz/Display Picture/CROOZ-X-CHOCOMO-1536x781.jpg',
                'owner' => 'Max Praditya',
                'website' => 'https://crooz.id/?v=d62a8d1683e6',
                'about' => 'The Crooz brand was created by Max (Adit) and Ariana in 2003. This brand is an expression of their love for music and fashion. Crooz is a distribution that offers clothing products that are distinctive and unique. Initially they (Max and Ariana) only sold their creations to close friends. But over time, their products were liked by many people. They eventually expanded their business and opened a shop in the Duren Tiga area, Jakarta in 2005. Their shop sells clothing products, CD releases and merchandise of local bands. Crooz is now known as a place to find indie goods.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dreambirds Artwear',
                'picture' => 'Dreambirds Artwear/Dreambirds_Artwear.jpg',
                'detail_picture' => 'Dreambirds Artwear/Display Picture/Dreambirds-1.jpg',
                'owner' => 'Prisa Rianzi',
                'website' => 'https://www.tokopedia.com/dreambirds',
                'about' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Elders Company',
                'picture' => 'Elders Company/Elders_Company.jpg',
                'detail_picture' => 'Elders Company/Display Picture/DSCF1203.jpg',
                'owner' => 'Heret Frasthion & Adrianka',
                'website' => 'https://www.elderscompany.com/',
                'about' => 'Elders Company is a passion fueled company which has been inspiring the growth of custom culture scene in Indonesia towards its journey.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Get Dirrty',
                'picture' => 'Get Dirrty/Get_Dirrty.jpg',
                'detail_picture' => 'Get Dirrty/Display Picture/b328e6acfcc1288dd6bc214ac9799c60.jpeg',
                'owner' => 'Gary Gregorius',
                'website' => 'https://getdirrty.com/',
                'about' => "We are the story of the city kids. The young, the broke, and the careless. The ones who dance to drake and riri but not keeping up with the kardashians. The ones who always eat carbs and never count calories. Catching feelings every now and then but do not talk about it. We don't have enough cash to afford all the expensive juices, guccis, and those anti social shirts. But thats ok, because we are the one who put the word 'ump' in 'Trump' and 'street' in 'Backstreet Boys'. So yeah, stop thinking and lets play dirrrrty!
                Oh, and we sell tshirts. And hoodies. And some girl tops. And custom jackets. And stuffs.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Guten Inc',
                'picture' => 'Guten Inc/Guten_Inc.jpg',
                'detail_picture' => 'Get Dirrty/Display Picture/guten-inc-makassar.jpg',
                'owner' => 'Muhammad Ramadhan',
                'website' => 'http://guteninc.com',
                'about' => 'Guten inc is a fashion brand that was founded in 2011 and consistently produces quality and up to date fashion products.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Hijack Sandal',
                'picture' => 'Hijack Sandals/Hijack_Sandals.png',
                'detail_picture' => 'Hijack Sandals/Display Picture/WEBSITE-SLIDER-PRODUCT-DEKSTOP-DALI-BLACH-2048x1024.jpg',
                'owner' => 'Fahmi Faisal',
                'website' => 'https://hijacksandals.com/',
                'about' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jackhammer Co',
                'picture' => 'Jackhammer Co/Jackhammer_Co.png',
                'detail_picture' => 'Jackhammer Co/Display Picture/1946f53ef9efdcc4e974d3ff589f7d40jpg',
                'owner' => 'Unknown',
                'website' => 'https://www.jackhammer.co.id/',
                'about' => 'Jackhammer is an Indonesian clothing company specialized in man’s work wear and apparel. Started in 2011 by four creative college buddies who have engineering background and admires fashion and every aspects behind it. We, as a team of creative youth are aware that the need a fashion has now become an integral part in people’s life, and we believe that is never enough to satisfy that need without further innovation. The idea was to build an apparel that is unique, tough durable, yet comfortable in every way.

 

                To support the idea, Jackhammer’s product are made from the best fabrics. The chosen fabrics reflect the toughness by its own unique nature, therefore bringing the concept of engineering itself. We want to build a product that is durable and survive the age. Most of all, every piece of our product, is made only by the hands of proud Indonesia tailor to ensure its quality. Every patterns and details are carefully cut and sewn to create a masterpiece. Ours tailor uses traditional manual sewing machines that adds up the value of every piece of the products. We believe that quality is above all aspects.
                
                Jackhammer is not just a clothing brand, it’s a concept. Inspired by the tireless engineers operating in rough workplaces from the offshore oil-rigs to construction sites, our dream was to create and apparel that suits those people who shares the same passion and admiration. Bringing the ambience of workers and engineers throughout the products and details, thus disseminating the idea that fashion is an essential part of one’s personality. Like engineering, our main key is innovation and hard work, bringing pride for our customers.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kamengski',
                'picture' => 'Kamengski/Kamengski.jpg',
                'detail_picture' => 'Kamengski/Display Picture/1488003189133-Kamengski1.jpeg',
                'owner' => 'Sulaiman Said &Aditya Fachrizal',
                'website' => '-',
                'about' => "Kamengski is a clothing brand that was founded by Sulaiman Said since 2008. Lasting 12 years, this brand's journey is certainly not an easy matter. starting from a fashion parody into a capable business.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Lthrkrft',
                'picture' => 'Lthrkrft/Lthrkrft.png',
                'detail_picture' => 'Lthrkrft/Display Picture/lg-b-blog-6.jpg',
                'owner' => 'Adhi Nugraha Bhakti',
                'website' => 'http://lthrkrft.com/',
                'about' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mischief',
                'picture' => 'Mischief/Mischief.png',
                'detail_picture' => 'Mischief/Display Picture/lg-b-blog-6.jpg',
                'owner' => 'Christian Hartana',
                'website' => 'http://mischiefdenim.com/',
                'about' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Monstore',
                'picture' => 'Monstore/Monstore.jpg',
                'detail_picture' => 'Monstore/Display Picture/Monstore-Shop-3-1024x684.jpg',
                'owner' => 'Nick Yudha',
                'website' => 'https://heymonstore.com/',
                'about' => "History Founded in early 2009. Monstore is a lifestyle retail company that focuses on the arts or what we call, wearable art. We produce high quality fashion clothing and items that don't stop at just visuals, but go one step further by having a story behind each of our designs. A story that relates to us as humans. What do we feel. What are we doing. And everything that makes us what we are today. Vision As a brand that focuses on art and originality, we have a vision to increase awareness and appreciation of our local people towards the world of art. We want to support emerging artists, local and international artists, to gain recognition by becoming a medium for them to express their creative talents.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nama Studios',
                'picture' => 'Nama Studios/Nama_Studios.jpg',
                'owner' => 'Satrya Putra Adhitama',
                'detail_picture' => 'Nama Studios/Display Picture/Indeesm4.jpg',
                'website' => 'https://www.nama-indonesia.com/',
                'about' => 'NAMA in short of Neutral Alliances Molded Altogether is an exploration of craftsmanship in finding the right mixture of design with functionality. All of our products made in-house in our own workshop. We design, produce and distribute our product in our best know-how methods. 

                To sum up, we like doing things our way. Hopefully, we got the same vision and grow as a family.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'NBDN',
                'picture' => 'NBDN/NBDN.png',
                'detail_picture' => 'NBDN/Display Picture/ff.jpg',
                'owner' => 'Hamzah Nashiruddin',
                'website' => 'https://nbdndenim.com/',
                'about' => 'We are Indonesian denim brand which focused for heritage concept, established independently since middle of 2011. NBDN (nobrandedon) consists of two words, namely ‘no branded’ and ‘branded on’, the meaning of that words like ‘from not worth to be very valuable’. Like from raw materials by dyeing technique that raises the color of the warp and weft, to be used by each owner, changed color fading and scratches as a description of the character of the owner, many many fades history, much experience to tell. We are inspired from various rare things, the myths, the legends, and endangered creatures. That is the basis of every articles that we created, ranging from the selection of raw materials, constructions, details, the coloring of the yarns, until the name we use. We used 100% selected denim fabric both selvedge and non-selvedge with high constructed and premium hardware details. We process all of our stuffs manually, like measuring, cutting, even when we combine every part of it. A pair of well constructed jeans, with good details, good fit, and also good price will be served to you to be worn everyday. Some people may not know, that all of particulars for processing the denim are controlled by the owner directly. What an ordinary way isn’t it? It makes every piece of NBDN (nobrandedon) became an art, not only some jeans or cloth to wear.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Oldblue',
                'picture' => 'Oldblue/Oldblue.png',
                'detail_picture' => 'Oldblue/Display Picture/Oldblue-HQ-Web-Retailer-Thumbnail.jpg',
                'owner' => 'Ahmad Hadiwijaya',
                'website' => 'https://oldblueco.net/homepage/',
                'about' => 'There’s nothing more truthful and genuine than clothes that were designed and made for a real-life purpose. From the detailed construction behind them to the hard-wearing fabrics they’re made of. Oldblue is dedicated to honor those details that beautifully capture the authentic spirit of an everlasting quality, honesty, and integrity.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Original Quzzy',
                'picture' => 'Original Quzzy/Original_Quzzy.png',
                'detail_picture' => 'Oldblue/Display Picture/THANKSINSOMNIA QUZZY 5.jpg',
                'owner' => 'Ade Septian',
                'website' => 'http://www.originalquzzy.com/',
                'about' => 'THE ORIGINAL QUZZY born from our imagination and inspired by Jakarta street culture,art,music,skateboard,sneakers,etc. worked on many designers for make a good fashion in future, theoriginalquzzy also support musician & skateboarders. 
                More than just a clothing, theoriginalquzzy is a lifestyle project that remains personal and direct, reflective of the community and culture, and dedicated to its fanbase.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pattent Goods',
                'picture' => 'Pattent Goods/Pattent_Goods.jpg',
                'owner' => 'Reihan Hidayah',
                'detail_picture' => 'Pattent Goods/Display Picture/2018-07-03.jpg',
                'website' => 'https://www.pattentgoods.com/',
                'about' => 'We present our visual goods for everyone. As long as they shared the same joy of craving wonderful creation from every micro inch of cotton, blended by pure intention to please the wearer. We tried to deliver this visualy goods and comfortable products. So for they who craved the modesty of a creative lifestyle. There’s Pattent here.

                And Inside each layer of lifestyle, Pattent Goods supports the visual amusement of the best possible goods for you to wear and enjoy from time to time. We preserve your love for our products in constant movement toward better goods. 
                
                Because too much never been too much, we stacked every lines and form a harmonized detail, pleased your satisfaction of getting seen by others. Because people eyes won\'t lie for pleasingly good fashion items. You want the best visualy goods? Pattent existed to fulfill that needs.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Portee Goods',
                'picture' => 'PorteeGoods/PorteeGoods.png',
                'owner' => 'Adhi Nugraha',
                'detail_picture' => 'PorteeGoods/Display Picture/slideshow-5_860x.jpg',
                'website' => 'https://porteegoods.com/',
                'about' => "Portee Goods, one of Bandung's original local shoe products that has been established since 2011, provides various types of shoes that you can customize to suit your activities. There are two series of shoes sold, classic series and life series. Almost all Portee Goods shoes are multifunctional, perfect for wearing for formal or casual events.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pot Meets Pop',
                'picture' => 'Pot Meets Pop/Pot_Meets_Pop.jpg',
                'detail_picture' => 'Pot Meets Pop/Display Picture/3153048850.jpg',
                'owner' => 'Hendry Sasmitaputra',
                'website' => '-',
                'about' => 'Pot Meets Pop is a local denim brand that was founded in early 2009. All of their products are made in Indonesia. Produced home industry in the city of Bandung with the best quality.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Public Culture',
                'picture' => 'Public Culture/Public_Culture.jpg',
                'detail_picture' => 'Public Culture/Display Picture/13914005_1060683417312803_2412834513672088959_o.jpg',
                'owner' => 'Michael Kurniawan',
                'website' => 'https://public-culture.com/',
                'about' => 'Founded in 2015, Public Culture first and foremost idea is all about the youth culture. There are no rules in what we do and what we should wear.

                Playing around with colours, messin’ around with graphics, and always producing high quality dailywear garments that are designed to turn heads and drop panties.
                
                With no roots attached, we never limit ourselves in what we do, we’re here just to enjoy the roller coaster ride.
                
                Swing by our Jakarta HQ at Jl. Nipah Raya No. 6B, South Jakarta. If you’re too lazy, check us out on the ‘Gram @public.culture and follow us.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sage Denim',
                'picture' => 'Sage Denim/Sage_Denim.png',
                'detail_picture' => 'Sage Denim/Display Picture/6294dce7-6be0-4b8a-932d-ed1303ba88b0.jpg',
                'owner' => 'Hamzah Dwi Putra & Varian Erwangsa',
                'website' => 'https://sage.gs/',
                'about' => "Sage can be defined as 'wise man'. This was inspired by the youthful passion of Hamzah and Varian who liked adventure, travelling, and climbing mountains. According to Hamzah, with adventure, humans will experience a journey full of stories, and challenges, including challenges against one's own ego.

                The variant revealed that Sage is not just denim or fashion products. The denim products produced by Sage are a manifestation of the stories, experiences or values they acquire during their adventures. Just look, for example, the stitch sketch on the back pocket (arcuate) which is in the form of a mountain which represents the meaning of the denim product. Another distinctive feature is the denim material used. Prioritizing toughness on the side of durability, denim must be resilient.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Shining Bright',
                'picture' => 'Shining Bright/Shining_Bright.png',
                'detail_picture' => 'Shining Bright/Display Picture/s.jpg',
                'owner' => 'Tarra Budiman',
                'website' => 'https://shiningbright.co.id/',
                'about' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tenue de Attire',
                'picture' => 'Tenue de Attire/Tenue_de_Attire.png',
                'detail_picture' => 'Tenue de Attire/Display Picture/TENUE-DE-ATTIRE-WEBSITE-THUMBNAIL.jpg',
                'owner' => 'Renaldi Perdana Kesuma',
                'website' => 'https://tenuedeattire.com/',
                'about' => 'Tenue de Attire is a multifaceted menswear brand which is fond of parisian lifestlye and effortless styling in daily usage. We stay to our root of laidback-stylish design, minimal strokes that creates elegant and easy shioullettes to every piece of our collection.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'The Goods Dept',
                'picture' => 'The Goods Dept/The_Goods_Dept.png',
                'detail_picture' => 'The Goods Dept/Display Picture/33 (1).jpg',
                'owner' => 'Leonard Theosabrata',
                'website' => 'https://thegoodsdept.com/',
                'about' => 'THE GOODS DEPT is a concept store based in Jakarta, managed by PT. Cipta Retail Prakarsa. Since 2010, THE GOODS DEPT has become a main point for fashion and lifestyle from Indonesian and international brands. THE GOODS DEPT is a place for curated local products to compete with international products. THE GOODS DEPT also has become a location for various events, such as art exhibition, movie, exclusive product launch and others. THE GOODS DEPT is a home for THE GOODS CAFÉ, GOODS BURGER, and THE GOODS DINER.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'United Hart',
                'picture' => 'United Hart/United_Hart.jpeg',
                'detail_picture' => 'United Hart/Display Picture/27540241_1216783001799928_1746930733347308075_n.jpg',
                'owner' => 'Indra Saefur',
                'website' => 'https://unitedhart.co/',
                'about' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ventela',
                'picture' => 'Ventela/Ventela.jpg',
                'detail_picture' => 'Ventela/Display Picture/Ventela Hadirkan Seri Terbaru.jpg',
                'owner' => 'William Ventela',
                'website' => 'https://www.ventela.com/',
                'about' => 'Ventela® Shoes was introduced in 2017 by William Ventela, an owner of a retread shoe factory since 1989 in Bandung, West Java.

                Ventela® Shoes have various types and models that are suitable for various types of activities.
                
                Each pair of Ventela® Shoes goes through a long and detailed process, from material selection, production process to very strict quality checks. This is done so that the quality of Ventela® Shoes is well maintained.
                
                With abundant resources, Ventela® Shoes is able to produce shoes in large quantities and the best quality so that all people can have high quality shoes at affordable prices.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Voyej',
                'picture' => 'Voyej/Voyej.png',
                'detail_picture' => 'Voyej/Display Picture/story2.jpg',
                'owner' => 'Aradea Respati',
                'website' => 'https://voyejstore.com/',
                'about' => "Inspired by a man's passion on journey, VOYEJ, as a brand, try to imply the excitement of having a personal journey through leather goods made of well chosen materials. Each product is a form of prudent design with simple yet aesthetic concept in mind to create not only a functional product but one that is contemporary and enduring.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wellborn Company',
                'picture' => 'Wellborn Company/Wellborn_Company.jpg',
                'detail_picture' => 'Wellborn Company/Display Picture/gsgdas.jpg',
                'owner' => 'Tjuk Nurputro Guritno',
                'website' => 'https://www.wellborncompany.com/',
                'about' => '-',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}