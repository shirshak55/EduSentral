<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

/**
 * Class QuizTableSeeder.
 */
class QuizTableSeeder extends Seeder
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

        $this->call(BoardTableSeeder::class);
        $this->call(RuleTableSeeder::class);
        $this->call(SetTableSeeder::class);

        $this->enableForeignKeys();
    }
}
