<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailFAQInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailfaqinformation')->insert([
            [
                'faqid' => '1',
                'question' => 'What is Tokolocal?',
                'answer' => 'TokoLokal is a concept store based in Jakarta. Started in 2021, TokoLokal become a point for fashion and lifestyle from Indonesian local brands. TokoLokal is a place for curated local products to compete with international products.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '1',
                'question' => 'I forgot my password. How do I obtain it? ',
                'answer' => 'Click forgot password in the sign in page and do steps from there. If you experience any difficulty, you may also reach us in contact us page.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '1',
                'question' => "I didn't get my invoice. What do I do?",
                'answer' => 'Invoice are sent to the email address attached to the account which generated the payment, immediately after the purchase is confirmed. You can also find your invoice in the payment history page.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'What payment methods do you accept?',
                'answer' => 'The following payment methods, which are offered at TokoLocal checkout, are allowed: Paypal, Paypal Credit, Credit card or debit card, and Visa.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'Can I pending the payment transaction?',
                'answer' => 'Yes. You can find your pending transaction in the transaction page.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => "I didn't get my invoice. What do I do?",
                'answer' => 'Invoice are sent to the email address attached to the account which generated the payment, immediately after the purchase is confirmed. You can also find your invoice in the payment history page.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '3',
                'question' => 'How to keep my account secure?',
                'answer' => 'Please use a password unique to Tokolocal and change it regularly.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '4',
                'question' => 'How many store does Tokolocal offer?',
                'answer' => 'Tokolocal offer more than 30 store.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '4',
                'question' => 'Does Tokolocal have an offline store?',
                'answer' => 'Right now, Tokolocal only based on website.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '5',
                'question' => 'Can I return the product?',
                'answer' => 'Yes, customer can return the product as long as it apply our conditions.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '5',
                'question' => 'How many days I have to initiate a return?',
                'answer' => 'Customer should initiate a return three days after receiving the product.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '5',
                'question' => 'What form I should provide a refund in?',
                'answer' => 'Customer should provide proof to do a refund such as invoice product, form of payment, photo or video of products or any evidence.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '6',
                'question' => 'What types of shipping do we accept?',
                'answer' => 'Since Tokolocal do shipping from Indonesia, so we support JNE Regular, SiCepat Regular, JNT Regular, and GrabExpress.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '6',
                'question' => 'Do we support to worldwide shipping?',
                'answer' => "For now we're only limited to Indonesia only, but we will develop it to worldwide.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '6',
                'question' => 'How long does it takes to ship my product?',
                'answer' => 'Usually it takes 3 - 4 days to ship.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '7',
                'question' => 'What party pays return shipping costs?',
                'answer' => 'All Tokolocal shipping return a shipping cost.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '8',
                'question' => 'I’ve lost my item during delivery, can I get a replacement?',
                'answer' => 'Yes. Customer should provide proof to do a refund such as invoice product, form of payment, photo or video of products or any evidence.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '8',
                'question' => "I've got my products broken, can I get a replacement?",
                'answer' => 'Yes. Customer should provide proof to do a refund such as invoice product, form of payment, photo or video of products or any evidence.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '9',
                'question' => 'Does Tokolocal sell hand accessories?',
                'answer' => 'Yes, we sell various accessories, not limited to hand.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '9',
                'question' => "Why aren't any of the product imported from other country?",
                'answer' => 'Tokolocal only support local streetwear products.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'What types of product does Tokolocal sell?',
                'answer' => 'Tokolocal sell products consist of tops, bottom, shoes, and accessories. Also, tokolocal offer information about event and raffle.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '10',
                'question' => 'How do I purchase an item?',
                'answer' => 'Customer should have an account to do a purchase.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '10',
                'question' => 'Why haven’t I received my purchase items?',
                'answer' => 'Please reach us in the contact us page.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '11',
                'question' => 'I forgot my password. How do I obtain it? ',
                'answer' => 'Click forgot password in the sign in page and do steps from there. If you experience any difficulty, you may also reach us in contact us page.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '11',
                'question' => 'What can I access when I login?',
                'answer' => 'Customer can see and access all the products, event, raffle. Also, customer can join raffle.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '11',
                'question' => 'How to contact admin?',
                'answer' => 'You can click Contact Us in the bottom of page and contact admin from there.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
