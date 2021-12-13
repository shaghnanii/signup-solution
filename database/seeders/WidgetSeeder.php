<?php

namespace Database\Seeders;

use App\Models\Pack;
use App\Models\Widget;
use Illuminate\Database\Seeder;

class WidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        using fake data
//        Widget::factory()->count(6)->has(Pack::factory()->count(5))->create();
        $widgets = [
            ['name' => "Widget 1"],
//            ['name' => "Widget 2"],
        ];

        $packs = [
            ['size' => 250],
            ['size' => 500],
            ['size' => 1000],
            ['size' => 2000],
            ['size' => 5000],
        ];

//        Widget::insert($widgets);

        foreach ($widgets as $widget) {
            $widget = Widget::create(['name' => $widget['name']]);
            foreach ($packs as $pack){
                $widget->packs()->create($pack);
            }
        }
    }
}
