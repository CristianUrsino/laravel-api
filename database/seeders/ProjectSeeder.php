<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('db.projects');

        foreach($projects as $project){
            $newProject = new Project();
            $newProject->name = $project['name'];
            $newProject->description = $project['description'];
            $newProject->repository_link = $project['repository_link'];
            $newProject->completion_date = $project['completion_date'];
            $newProject->project_status = $project['project_status'];
            $newProject->user_id = 1;
            $newProject->save();
        }

    }
}
