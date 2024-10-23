<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Alle Kurse anzeigen
    public function index()
    {
        $courses = Course::where('date', '>=', now())->get();
        return view('courses.index', compact('courses'));
    }

    // Einzelnen Kurs anzeigen
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // Admin-Bereich: Alle Kurse anzeigen
    public function adminIndex()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    // Admin-Bereich: Kurs erstellen
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'max_participants' => 'required|integer|min:1',
        ]);

        $validated['available_seats'] = $validated['max_participants'];

        Course::create($validated);

        return redirect('/admin/courses')->with('success', 'Course created successfully.');
    }

    // Admin-Bereich: Kurs löschen
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/admin/courses')->with('success', 'Course deleted successfully.');
    }
}
