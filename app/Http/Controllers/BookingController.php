<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Course;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // buchung adden
    public function store(Request $request, Course $course)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
        ]);

        if ($course->available_seats > 0) {
            Booking::create([
                'course_id' => $course->id,
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
            ]);

            // 1 platz entfernen
            $course->available_seats -= 1;
            $course->save();

            return redirect()->back()->with('success', 'buchung durchgeführt');
        }

        // kein platz frei
        return redirect()->back()->with('error', 'kein platz mehr frei');
    }
}
