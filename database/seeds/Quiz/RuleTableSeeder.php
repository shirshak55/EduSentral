<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class RuleTableSeeder.
 */
class RuleTableSeeder extends Seeder
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
        $this->truncate('rules');

        $rules = [
            [
                'name'       => 'Kathmandu University Question Set Rules',
                'content'    => 'Cheating is not allowed. Bottle Not Allowed. Mobile phones not allowed',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name'       => 'IOE Set Rules',
                'content'    => 'Cheating is not allowed. Bottle Not Allowed. Mobile phones not allowed',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name'       => 'St. Xavier Question Set Rules',
                'content'    => 'Cheating is not allowed. Bottle Not Allowed. Mobile phones not allowed',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name'       => 'Chitwan Agriculture Question Set Rules',
                'content'    => 'Cheating is not allowed. Bottle Not Allowed. Mobile phones not allowed',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name'       => 'BudanilKantha Question Set Rules',
                'content'    => 'Cheating is not allowed. Bottle Not Allowed. Mobile phones not allowed',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ];

        DB::table('rules')->insert($rules);

        $this->enableForeignKeys();
    }
}
