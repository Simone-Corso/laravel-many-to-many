<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $technologies = Technology::all();

        foreach ($projects as $project) {
            
            $selectedTechnologies = $technologies->random(rand(1, 4));

            
            $project->technologies()->attach($selectedTechnologies->pluck('id'));
        }
    }
}