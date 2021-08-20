<?php

namespace App\Console\Commands;

use App\Product;
use App\Trending;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RefreshTrendingNow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:refreshTrendingNow';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For refresh Product Trending Now';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // RANDOM 12 PRODUCT
        $product_random = Product::limit(12)
            ->select("*")
            ->orderBy(DB::raw('RAND()'))
            ->get();

        // UPDATE TRENDING FROM RANDOM PRODUCT
        $i = 0;
        foreach ($product_random as $product) {
            Trending::where('product_id', $i)->update([
                'product_id' => $product->id
            ]);
            $i++;
        }
    }
}
