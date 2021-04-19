<?php

use App\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([

            [
                'name' => 'BrightSpotMrkt',
                'theme' => 'Event Management',
                'picture' => 'BrightspotMrkt/Logo/Brightspotmrkt.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => 'www.BrightSpotMrkt.com',
                'capacity' => '10000',
                'about_us' => 'Inspired by the movement in Indonesian & international cool culture, the founders of brightspotMRKT Future10, C&C Projects & LTD started the first of the curated festival in 2009 in Plaza Indonesia, Jakarta. The first event put together 25 carefully selected tenants across of fashion, lifestyle, food, art, collectibles from Jakarta & the surroundings in a raw warehouse space that brought in 5,000 people over 4 days. 9 years later the event has grown to take in up to 190 vendors with hundreds more on waiting list & the attendance number has grown to more than 60,000 people over 4 days! There have been additions of features such as music, art & knowledge sharing that completes the festival experience of being the offline to our online life. The numbers & the impact of Brightspot to Indonesia\'s creative industry (& beyond) has grown massively but our belief remains the same even in this age of unprecedented technology revolution. The belief that human creativity can definitely change the world for the better. That the creation & distribution of new & different things that have value, carries it\'s importance well into the future. See you at the festival!',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Indonesia Sneaker Yes',
                'theme' => 'Event Management',
                'picture' => 'Indonesia Sneaker Yes/Logo/Indonesia_Sneaker_Yes.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => '-',
                'capacity' => '3000',
                'about_us' => 'Indonesia Senaker Yes is the first event that combines 3 events into 1. In addition to the sneaker event, Indonesia Sneaker Yes also organizes music and foot that enliven this event. The location of the Indonesian sneaker event yes is in the Kuningan city mall, Jakarta, a place that is very easily accessible by the audience.
                Indonesia sneaker yes collaborates with several sneaker platforms and will also invite 60 sneaker and streetware tenants from various local and foreign brands. Indonesia sneaker yes will also hold a big stealing deal, raffle and give away.
                We have a wish list of artists who will later enliven this event: HIVI, Naif, Malik and Dessentials, reality club, danilla and many others.
                Our food events will provide a variety of interesting culinary experiences from the flavors of each dish. We will also provide 15 food stalls from various types of food and beverages in Indonesia.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jakarta Sneakers Day',
                'theme' => 'Environmental & Place making',
                'picture' => 'Jakarta Sneakers Day/Logo/Jakarta_Sneakers_Day.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => 'www.bca.co.id/jakartasneakerday',
                'capacity' => '5000',
                'about_us' => 'Jakarta Sneaker Day which lasts for three days, continued Andrey, will present a variety of events, such as Exhibition, Talkshow, Sneaker Custom, Legit Check (testing the authenticity of shoes), Community Gathering, Mini Bazar & Garage Sale, Auction, Trading Pit & Steal Deal Sale, Red Carpet, and Music Perform.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jakcloth',
                'theme' => 'Brand Development & Graphic Artworks',
                'picture' => 'Jakcloth Expo/Logo/Jakcloth_Expo.png',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => 'https://jakcloth.co.id/',
                'capacity' => '3500',
                'about_us' => 'Hello, Welcome to Jakcloth.co.id Jakcloth is one of the most popular events among today youth. Not felt, since its appearance in 2009 it has had a big influence on young people. In Jakcloth, besides the presence of domestic products, there are also young entrepreneurs who are involved in the country\'s clothing scene. Interestingly, not a few have experienced great success since joining Jakcloth. After Jakcloth has grown rapidly, this event which is managed by one of the well-known promoters has returned to grow another proud product. Yes, Jakcloth.co.id is one of the most popular online stores among young people, offering a line of famous men\'s and women\'s fashion products to complement the appearance of today\'s young people. Jakcloth.co.id provides technical products with a variety of attractive choices to complement your appearance. Various models of t-shirts, shirts, pants, bags, shoes, quality hats and accessories to support your appearance in various sizes will be very easy to find at Jakcloth.co.id.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Para-site',
                'theme' => 'Brand Development & Graphic Artworks',
                'picture' => 'Para-Site/Logo/Para-site.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => '-',
                'capacity' => '6500',
                'about_us' => 'Para-site is Indonesia International Streetwear Event which will be held on 23-26 May 2019 at The Space Senayan City, Jakarta. This activity is to provide understanding and learning about business lines in the streetwear industry from experts in their respective fields.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => ' Sneaker Bless',
                'theme' => 'Brand Development & Graphic Artworks',
                'picture' => 'Sneaker Bless/Logo/Sneaker_Bless.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => '-',
                'capacity' => '7000',
                'about_us' => 'a festival of sneakers and clothing that merged charity work. The 2019 Sneaker Bless will be held at the Plaza Indonesia Function Hall, Central Jakarta.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => ' Sole Vacation',
                'theme' => 'Event Management',
                'picture' => 'Sole Vacation/Logo/Sole_Vacation.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => '-',
                'capacity' => '2000',
                'about_us' => 'Sneakers & Apparel Market, With more than 50 sneakers, streetwear and local brands tenant. Also lot of sneakers raffle & trading pit for sneakers enthusiast.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Urban Sneaker Society',
                'theme' => 'Brand Development. Graphic Artworks',
                'picture' => 'Urban Sneaker Society/Logo/Urban_Sneaker_Society.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => 'https://karwaku.urbansneakersociety.com/',
                'capacity' => '7250',
                'about_us' => 'Urban Sneakers Society is diffrent from other events because existence of a sneaker raffle that is held every hour during the event. USS also has a daily news media called the USS feed.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'USS Downtown Market',
                'theme' => 'Environmental & Place Making',
                'picture' => 'USS Downtown Market//Logo/USS_Downtown_Market.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => '-',
                'capacity' => '5000',
                'about_us' => 'This event will be an attractive alternative to year-end shopping for the people of Surabaya. USS Downtown Market itself is divided into four shopping areas, namely the sneaker market, streetwear market, thrift store, and the F&B market. In addition to the varied shopping areas, visitors who attend will also be entertained by the presence of sneaker raffles, music, skate park areas, and the opportunity to get Compass Shoes and Uniqlo X Kaws collaboration at retail prices.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'USS Yard Sale',
                'theme' => 'Environmental & Place Making',
                'picture' => 'USS Yard Sale/Logo/USS_Yard_Sale.jpeg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => '-',
                'capacity' => '4500',
                'about_us' => 'USS Yard sale is an event that holds a bazaar of hype items with discount prices of up to 80 percent at The Hall Senayan City. In this event, there will be sneakers & apparel sales from several well-known brands such as Nike, Adidas, Puma, Guess, Supreme, Vans and other well-known brands. In addition, USS Yard Sale will also provide a Thrifting Area which will be curated directly by the two largest sneaker communities in Indonesia, the Urban Sneaker Society and the Indonesia Sneakers Team.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wall of Fades',
                'theme' => 'Environmental & Place Making',
                'picture' => 'Wall Of Fades/Logo/Wall_of_Fades.jpg',
                'held_on' => Carbon::now()->format('Y-m-d H:i:s'),
                'website' => 'https://www.darahkubiru.com/tag/wall-of-fades/',
                'capacity' => '12000',
                'about_us' => 'Wall Of Fades is an annual event presented by Darahkubiru and INDIGO and has been running for 8 years since 2009.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}