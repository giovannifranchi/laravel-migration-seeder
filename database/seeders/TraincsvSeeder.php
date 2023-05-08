<?php

namespace Database\Seeders;

use App\Functions\Helper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TraincsvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = __DIR__.'/csv/trains.csv';
        $trains_csv = Helper::getCSV($file);
        foreach($trains_csv as $item){
            $train = new Train();
            $train->company = $item['company'];
            $train->departure_station = $item['departure_station'];
            $train->arrival_station = $item['arrival_station'];
            $train->departure_time = $item['departure_time'];
            $train->arrival_time = $item['arrival_time'];
            $train->train_code = $item['train_code'];
            $train->n_wagons = $item['n_wagons'];
            $train->on_time = $item['on_time'];
            $train->cancelled = $item['cancelled'];
            $train->save();
        }
    }
}
