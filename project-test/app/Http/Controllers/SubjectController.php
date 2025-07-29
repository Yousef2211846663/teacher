<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Subjects =Subject::all(); // Fetch all subjects from the database
        return view('subjects.index' ,compact('Subjects')); // Pass the subjects to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50',
            'semester' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);
        
        // Create a new subject using the validated data
        $subject = Subject::create([
            'name' => $request->name, 
            'code' => $request->code,
            'semester' => $request->semester,
            'description' => $request->description,
        ]);
        // Redirect to the subjects index with a success message
        return redirect()->route('subjects.index')->with('success', 'Subject created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //  
        $subject = Subject::findOrFail($id); // Find the subject by ID
        return view('subjects.edit',compact('subject')); // Pass the subject
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50',
            'semester' => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]); 
        $subject = Subject::findOrFail($id);
        $subject->update([
            'name' => $request->name,
            'code' => $request->code,
            'semester' => $request->semester,
            'description' => $request->description,
        ]);
         return redirect()->route('subjects.index')->with('success', 'تم تحديث المادة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->route('subjects.index')->with('success', 'تم حذف المادة بنجاح');
    }
}
