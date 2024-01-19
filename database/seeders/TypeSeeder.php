<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['aaa','bbb','ccc','eee','fff','ggg'];

        foreach($types as $type){
            $newType = new Type();
            $newType->name = $type;
            $newType->slug = Str::slug($type, '-');
            $newType->save();
        }
    }
}
