<?php

use App\Magazine;
use Illuminate\Database\Seeder;

class MagazineTableSeeder extends Seeder
{
    /**
     * The magazines seeder array
     *
     * @var array
     */
    protected $magazines = [
        [
            'name'  => 'Wired',
            'price' => 4.99,
            'cover' => 'Apple share price',
            'colour'=> 'Red',
            'size'  => 'A4',
            'theme' => 'tech',
        ],
        [
            'name'  => 'National Geographic',
            'price' => 6.99,
            'cover' => 'News of the cosmos',
            'colour'=> 'Yellow',
            'size'  => 'A4',
            'theme' => 'Nature and Science',
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return mixed
     */
    public function run()
    {
        foreach ($this->magazines as $magazine)
            Magazine::firstOrCreate($magazine);
    }
}
