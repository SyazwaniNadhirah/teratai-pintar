<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where(auth()->user()->role == '1');
        $programs = Program::All();
        return view('admin.program.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::where(auth()->user()->role == '1');
        return view('admin.program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $picturePath = $request->file('image')->store('public/banner');

        Program::create([
            'programType' => $request->programType,
            'price' => $request->price,
            'status' => 'Active',
            'description' => $request->description,
            'picture' => $picturePath,
        ]);
       
        return redirect()->route('program.index')->with('success', 'Program Created!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    { 
        $program = Program::find($id);
        return view('admin.program.show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $program = Program::find($id);
        return view('program.index', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $program->status = $request->status;
        $program->save();
        return redirect()->route('program.index')->with('success', ' Status Program  Successfuly Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect()->route('program.index')->with('success', 'Program Deleted Successfully!');
    }
}
