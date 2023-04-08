<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseM;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    public function index()
    {
       $data = CourseM::all();
       $no = 0;
        return view ('index', compact('data','no')) ;
    }


    public function create()
    {
        return view('formjurnal');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            'description' => 'required',
            'price' => 'required',
            'institution_id' => 'required',

        ]);

        $create = CourseM::create($request->all());
        return redirect()->route('index');
    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {
        $table_jurnal=CourseM::findOrFail($id);

        return view('jurnalEdit', compact('table_courses'));
    }


    public function update(Request $request, string $id)
    {
        $table_courses = CourseM::findOrFail($id);

        $table_courses->name = $request->name;
        $table_courses->description = $request->description;
        $table_courses->price = $request->price;
        $table_courses->instution_id = $request->instution_id;

        $table_courses->save();

        if ($table_courses) {
         return redirect()->route('index');
        }
    }


    public function destroy(string $id)
    {
        $table_courses = CourseM::findOrFail($id);
        $table_courses->delete();

        if ($table_courses) {
            return redirect()->route('index');
           }
    }
}
