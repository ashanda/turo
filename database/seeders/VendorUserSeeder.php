<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
class VendorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::create([  
            'email' => 'vendor@gmail.com',
            'password' => bcrypt('123456'),
            'company_name' => 'vendor',
            'company_reg_no' => 'test',
            'company_reg_certificate' => 'test',
            'location' => 'test',
            'rent_car_license' => 'test',
            'rent_car_certificate' => 'test',
            'contact_person' => 'test',
            'contact_no' => 'test',
            'chamber_of_commerce_certificate' => 'test',
        ]);
    }
}
