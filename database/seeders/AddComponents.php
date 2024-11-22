<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;


class AddComponents extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Component::insert([
            [
                'name' => 'Processor',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Motherboard',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Graphics Card',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'RAM',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Power Supply',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Hard Drive',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Solid State Drive (SSD)',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Case',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Cooling Fan',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Monitor',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Keyboard',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Mouse',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Speaker',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Webcam',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
            [
                'name' => 'Others',
                'created_by' => '1',
                'created_at' => Date::now(),
            ],
        ]);
    }
}
