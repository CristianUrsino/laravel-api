<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies=['html','css','js','vue','php','laravel'];
        foreach($technologies as $value){
            $newTechnology = new Technology();
            $newTechnology->name = $value;
            $newTechnology->slug = Str::slug($value, '-');
            $newTechnology->save();
        }
    }
}