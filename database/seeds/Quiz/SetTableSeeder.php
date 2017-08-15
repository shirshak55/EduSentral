<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class SetTableSeeder.
 */
class SetTableSeeder extends Seeder
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
        $this->truncate('sets');

        $sets = [
            [
                'name'       => 'Kathmandu University 2017',
                'rule_id'    => 1,
                'board_id'   => 1,
                'year'       => 2017,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'slug'       => 'kucat2017',
            ],
            [
                'name'       => 'IOE 2017',
                'rule_id'    => 2,
                'board_id'   => 2,
                'year'       => 2017,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'slug'       => 'ioe2017',
            ],

        ];

        DB::table('sets')->insert($sets);

        $this->enableForeignKeys();
    }
}
