<?php

namespace Database\Seeders;

use App\Models\SSLCommerzCredentials;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SSLCommerzSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SSLCommerzCredentials::updateOrCreate([
            'id' => 1,
        ],[
            'store_id'          => 'your-store-id-here',
            'store_password'    => 'your-store-password',
            'currency'          => 'BDT',
            'success_url'       => 'https://your-store-url/success',
            'fail_url'          => 'https://your-store-url/fail',
            'cancel_url'        => 'https://your-store-url/cancel',
            'ipn_url'           => 'https://your-store-url/ipn',
            'int_url'           => 'https://your-store-url/init',
        ]);
    }
}
