<?php

namespace App\Http\Controllers;
use App\Models\SemesterMaster;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator; 
class SemesterMasterController extends Controller
{
    public function index()
    {
        $semester = SemesterMaster::all();
        return view('semester.index', compact('semester'));
    }

    public function create()
    {
        return view('semester.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'semester_number' => 'required|integer',
            'status' => 'required',
            'course_id' => 'nullable|exists:courses,id',
        ]);
        // Handle validation errors
        if ($validator->fails()) {
            return redirect()->route('semester.create')
                ->withErrors($validator)->withInput();
        }
        
        // Create semester record
        SemesterMaster::create([
            'semester_number' => $request->semester_number,
            'status' => $request->status,
            'created_on' => date("Y-m-d h:i:s"),
            'created_by'=> $request->created_by,
        ]);

        
        return redirect()->route('semester.index')->withInput()->with('success', 'Semester created successfully.');
    }

    public function show($id)
    {
        $semester = SemesterMaster::findOrFail($id);
        return view('semester.show', compact('semester'));
    }

    public function edit($id)
    {
        $semester = SemesterMaster::findOrFail($id);
        return view('semester.edit', compact('semester'));
    }

    public function update(Request $request, $id)
    {
        {
            $semester = SemesterMaster::findOrFail($id);                          
            $rules=([
                'semester_number' => 'required|integer',
                'status' => 'required',
            ]);
    
            $validator =Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return redirect()->route('semester.edit', $semester->id)->withInput()->withErrors($validator);
            }                                                                                                                                               
    
            $semester->semester_number = $request->semester_number;
            $semester->Status = $request->status;
            $semester->save();
            
            return redirect()->route('semester.index')->with('success', 'Semester updated successfully.');
        
    }
    }
    public function destroy($id)
    {
        $semester = SemesterMaster::findOrFail($id);
        $semester->delete();
        return redirect()->route('semester.index')
                ->with('success', "Course deleted successfully.");
    }
}
