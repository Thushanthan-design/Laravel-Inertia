<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class StudentController extends Controller
{
    public function index()
    {
        return Inertia::render('Students/index', [
            'students' => Student::all()->map(function($student){
                
                return [
                    'id'=> $student->id,
                    'name'=> $student->name,
                    'image'=> assert('storage/'.$image->image),
                    'age'=> $student-> age,
                    'status' =>$student-> status,
                ];
              
            })
        ]);
    }
    public function create()
    {
        return Inertia::render('Students/create');
    }

    public static function store()
    {
        $image =  Request::file('image')->store('studets', 'public');

        Student::create([
            'name' => Request::input('name'),
            'image' => $image,
            'age' => Request::input('age'),
            'status' => Request::input('status'),
        ]);

        return Redirect::route('students.index');
    }

   

    
        
            
       
        
    
}
