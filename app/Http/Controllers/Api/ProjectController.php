<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::paginate(1);
        return response()->json(
            [
                'success' => true,
                'results' => $project,
                'last_page' => $project->lastPage(),
            ]
            );
    }
    public function show($id){
        $project = Project::with(['type', 'technologies'])->find($id);
        if (!$project) {
            return response()->json([
                'success' => false,
                'error' => 'Project not found',
            ]);
        }
        return response()->json(
            [
                'success' => true,
                'results' => $project,
            ]
        );
    }
}