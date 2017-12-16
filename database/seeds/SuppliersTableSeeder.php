<?php

use Illuminate\Database\Seeder;
use App\Supplier;
use Faker\Factory as Faker;
use Carbon\Carbon;
class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::truncate();
        $total = 20;
        $faker = Faker::create('zh_TW');
        $data=[];
        foreach (range(1, $total) as $index) {
            Supplier::create([
                'sid'   => random_int(001,1000),
                'name'   => $faker->name,
                'POC' => $faker->userName,
                'contact' => $faker->word,
                'postal' => $faker->word,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'fax' => $faker->phoneNumber,
                'cellphone' => $faker->phoneNumber,
                'TaxID' => $faker->word,
                'email' => $faker->email,
                'created_at' => Carbon::now()->subDays($total - $index),
                'updated_at' => Carbon::now()->subDays($total - $index)->addHours(rand(1, 24)),
            ]);
        }
        $suppliers = $this->table('suppliers');
        $suppliers->insert($data)->save();
    }
}
