<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'Ahmed Rami',
                'email' => 'ahmed.rami@example.com',
                'phone_number' => '+212612345678',
                'message' => 'Great selection of supplements, and the staff was very knowledgeable!',
            ],
            [
                'name' => 'Sara Benjelloun',
                'email' => 'sara.benjelloun@example.com',
                'phone_number' => '+212623456789',
                'message' => 'The protein powders here are top-notch. Highly recommended!',
            ],
            [
                'name' => 'Omar Taoufik',
                'email' => 'omar.taoufik@example.com',
                'phone_number' => '+212634567890',
                'message' => 'Best prices in town and excellent customer service!',
            ],
            [
                'name' => 'Lina Boukili',
                'email' => 'lina.boukili@example.com',
                'phone_number' => '+212645678901',
                'message' => 'I found all the vitamins I needed. Super happy with my purchase!',
            ],
            [
                'name' => 'Reda Idrissi',
                'email' => 'reda.idrissi@example.com',
                'phone_number' => '+212656789012',
                'message' => 'The staff guided me to the perfect supplements for my fitness goals!',
            ],
        ]);
    }
}
