<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testmonial;
class TestmonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testmonial::create([
            'name' => 'John Due',
            'position' => 'CEO',
            'testmonial' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as',
            'img_profile' => 'john-image.png',
        ]);

        Testmonial::create([
            'name' => 'Adam Smith',
            'position' => 'CO-FOUNDER',
            'testmonial' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, asIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as',
            'img_profile' => 'john-image.png',
        ]);
    }
}
