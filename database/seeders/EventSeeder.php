<?php

namespace Database\Seeders;

use App\Models\Event; 

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
  
    public function run()
    {
        Event::factory(4)->create();

    }

}
