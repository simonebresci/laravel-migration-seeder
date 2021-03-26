<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Animal;

class ApiController extends Controller
{
    public function getFirstAnimal(){
      $firstAnimal= Animal::orderBy('id','asc')->first();

      return response()->json($firstAnimal);
    }

    public function getAllAnimals(){
      $allAnimals= Animal::all();

      return response()->json($allAnimals);
    }
}
