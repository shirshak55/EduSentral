<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class BoardTableSeeder.
 */
class BoardTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('boards');

        $boards = [
            [
                'name'        => 'Kathmandu University',
                'description' => 'Located at very beautiful place of nepal. Very good climate.',
                'location'    => 'Kavrepalanchowk, Dhulikhel',
                'image'       => 'ku.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'IOE',
                'description' => 'Best University of Nepal',
                'location'    => 'Kathmandu, Nepal',
                'image'       => 'ioe.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'St. Xavier',
                'description' => 'Best High School of Nepal',
                'description' => 'Located at very beautiful place of nepal. Very good climate.',
                'location'    => 'Maitighar, Kathmandu',
                'image'       => 'stxavier.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'name'        => 'Budanilkantha',
                'description' => 'Best High School of Nepal',
                'description' => 'Located at very beautiful place of nepal. Very good climate.',
                'location'    => 'Maitighar, Kathmandu',
                'image'       => 'budanilkantha.jpg',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],


        ];

        DB::table('boards')->insert($boards);

        $this->enableForeignKeys();
    }
}
