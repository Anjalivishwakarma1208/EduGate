<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator; 
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        

        // Validate incoming request
        $validator = Validator::make($request->all(), [
            'course_name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
        ]);
        // Handle validation errors
        if ($validator->fails()) {
            return redirect()->route('courses.create')
                ->withErrors($validator)
                ->withInput();
        }
        // Handle file upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/courses'), $imageName);
        } else {
            $imageName = null; // Default image name or null if no image uploaded
        }
        // Create course record
        Course::create([
            'course_name' => $request->course_name,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status,
            'created_on' => date("Y-m-d h:i:s"),
            'created_by' => $request->created_by,
        ]);

        
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);                          
        $rules=([
            'course_name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|max:255',
            'status' => 'required',
        ]);

        $validator =Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('courses.edit', $course->id)->withInput()->withErrors($validator);
        }                                                                                                                                               

        $course->course_name = $request->course_name;
        $course->Status = $request->status;
        $course->image = $request->image;
        $course->description = $request->description;
        $course->save();

        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($course->image) {
                File::delete(public_path('uploads/courses/' . $course->image));
            }

            // Upload the new image
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext;
            $image->move(public_path('uploads/courses'), $imageName);
            $course->image = $imageName;
            $course->save();
        }

        
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', "Course deleted successfully.");
    }
}