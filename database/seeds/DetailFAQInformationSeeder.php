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
                'question' => 'What is Indonesia Local Brand?',
                'answer' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'What payment methods do you accept?',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vestibulum velit sed orci pharetra, quis vestibulum tortor malesuada. Curabitur rhoncus sollicitudin est nec condimentum. Morbi consequat sagittis dolor vitae varius. Maecenas quis mattis justo. Morbi interdum sapien nec lacus maximus accumsan. Nam vestibulum vehicula leo nec aliquam. Aliquam eget purus vel nunc pretium maximus. Nullam tincidunt ligula at condimentum facilisis.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'How do i purchase an item?',
                'answer' => 'Maecenas quis mattis justo.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'I’ve lost my item during delivery, can I get a replacement?',
                'answer' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'Why haven’t i received my purchase items?',
                'answer' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'Do you sell hand accessories?',
                'answer' => 'Aliquam eget purus vel nunc pretium maximus.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'faqid' => '2',
                'question' => 'Why aren’t any of the product imported from other country? ',
                'answer' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
