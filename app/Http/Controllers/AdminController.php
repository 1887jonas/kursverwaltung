<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // Admin-Bereich
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    // Admin add
    public function addCourseGet()
    {
        return view('admin.courses.add');
    }

    // Admin add post
    public function addCoursePost(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'max_participants' => 'required|integer|min:1',
        ]);

        $validated['available_seats'] = $validated['max_participants'];

        Course::create($validated);

        return redirect('/admin/courses')->with('success', 'Der Kurs wurde angelegt');
    }

    // Admin-Bereich: Kurs erstellen
    public function store(Request $request)
    {
        
    }

    // Admin-Bereich: Kurs löschen
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/admin/courses')->with('success', 'Course deleted successfully.');
    }
}
