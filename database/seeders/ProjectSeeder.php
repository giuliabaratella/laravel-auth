<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = config('db.projects');
        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->user_id = 1;
            $newProject->title = $project['title'];
            $newProject->slug = Str::slug($project['title'], '-');
            $newProject->link = $project['link'];
            // $newProject->image = $project['image'];
            $newProject->description = $project['description'];

            $newProject->save();
        }
    }
}
