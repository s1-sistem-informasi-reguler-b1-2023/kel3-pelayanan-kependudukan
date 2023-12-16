<?php

namespace Database\Seeders;

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'territories';
        $this->mapping = [
            0 => 'kode',
            1 => 'nama',
        ];
        $this->filename = base_path() . '/database/seeders/csvs/territories.csv';
    }

    public function run()
    {
        DB::disableQueryLog();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($this->table)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        parent::run();
    }
}
