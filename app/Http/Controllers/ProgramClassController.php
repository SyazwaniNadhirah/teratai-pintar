<?php

namespace App\Http\Controllers;
use App\Models\User;
// use App\Models\Program;
use App\Models\ProgramClass;
use Illuminate\Http\Request;

class ProgramClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where(auth()->user()->role == '1');
        // $programs = Program::All();
        $classes = ProgramClass::All();
        return view('admin.class.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::where(auth()->user()->role == '1');
        // $programs = Program::All();
        return view('admin.class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $program = Program::find($request->input('program_id'));
        // $request->merge([
        // 'program_id' => $program->id,
        // ]);
        
        ProgramClass::create($request->all());
        return redirect()->route('class.index')->with('success', 'Subject Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $classes = ProgramClass::find($id);
        return view('admin.class.show',compact('classes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgramClass $programClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgramClass $programClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgramClass $programClass)
    {
        //
    }
}
