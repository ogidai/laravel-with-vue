<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_names = [
            'ご飯を食べる',
            '買い物に行く',
            'お風呂に入る',
            '仕事をする',
            '遊びまくる',
            '読書を欠かさない',
        ];
    
        foreach ($list_names as $list_name) {
    
            \App\Models\Item::create([
                'name' => $list_name
            ]);
    
        }
    }
}
