<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
   public function index(Request $request){
       $result =  DB::table('categories')->get();
       $service = DB::table('services')->get();
       $team = DB::table('teams')->get();
       $projects = DB::table('projects')->get();
       $projectsfirstsection = DB::table('projects')->skip(0)->take(6)->get();
       $projectssecondsection = DB::table('projects')->skip(6)->take(6)->get();
       $projectsthirdsection = DB::table('projects')->skip(12)->take(6)->get();
       $projectsfourthsection = DB::table('projects')->skip(18)->take(6)->get();


        return view('welcome',compact('result','service','team','projects','projectsfirstsection','projectssecondsection','projectsthirdsection','projectsfourthsection'));
    }

    public function test(){
        //$result =  DB::table('categories')->get();
        //$service = DB::table('services')->get();
        $team = DB::table('teams')->get();
        $projects = DB::table('projects')->get();
        //$projectsfirstsection = DB::table('projects')->skip(0)->take(6)->get();
        //$projectssecondsection = DB::table('projects')->skip(6)->take(6)->get();
        //$projectsthirdsection = DB::table('projects')->skip(12)->take(6)->get();
        //$projectsfourthsection = DB::table('projects')->skip(18)->take(6)->get();
        return view('test',compact('team','projects') );
        //return view('welcome',compact('result','service','team','projects','projectsfirstsection' ));
    }

    public function sample()
    {
        return view('sample');
    }

    public function portfolio()
    {
        $projects = DB::table('projects')->get();
        return view('portfolio',compact('projects'));
    }

}
