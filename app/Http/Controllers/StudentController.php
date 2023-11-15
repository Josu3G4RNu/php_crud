<?php

namespace App\Http\Controllers;

use App\Models\Carrier;
use App\Models\Town;
use App\Models\Rol;
use App\Models\Status;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Read
        $students = Student::all();
        return View('Student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // Read
        $roles = Rol::all();
        $carriers = Carrier::all();
        $Towns = Town::all();
        $status = Status::all();
        $students = Student::all();
        return View('Student.create', compact('students', 'roles', 'carriers', 'Towns', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $student = $request->validate(Student::$rules);
        //dd($request);
        Student::create($student);

        return redirect(route('Student.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student): View
    {
        //
        return view('Student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
