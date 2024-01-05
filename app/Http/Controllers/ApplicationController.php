<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Children;
use App\Models\Program;
use App\Models\ProgramClass;
use App\Models\Activity;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $applications = Application::whereHas('user', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->paginate(10);
        
        return view('user.application.index', compact('user', 'applications'));
    }

    public function indexApp()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $applications = Application::all();
        return view('admin.application.index', compact('applications', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $childrens = Children::All();
        $programs = Program::All();
        $classes = ProgramClass::All();
        $activities = Activity::All();
        return view('user.application.create', compact('user', 'childrens', 'programs', 'classes', 'activities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::find($request->input('user_id'));
        $child = $user->children()->first();
        $program = Program::find($request->input('program_id'));
        $classes = ProgramClass::find($request->input('class_id'));
        $activities = Activity::find($request->input('activity_id'));
        $child = new Children();
        $child->name = $request->input('name');
        $child->ic = $request->input('ic');
        $child->age = $request->input('age');
        $child->gender = $request->input('gender');
        $child->dob = $request->input('dob');
        $child->relationship = $request->input('relationship');
        $child->save();
        $user->children()->save($child);
        $request->merge([
            'user_id' => auth()->user()->id,
            'program_id' => $program->id,
            'class_id' => $classes->id,
            'activity_id' => $activities->id,
        ]);
        Application::create($request->all());
        return redirect()->route('application.index')->with('success', 'Application Submitted!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $application = Application::find($id);
        return view('user.application.show', compact('application'));
    }

    public function showApp($id)
    {
        $application = Application::find($id);
        return view('admin.application.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $application = Application::find($id);
        $programs = Program::All();
        $classes = ProgramClass::All();
        $activities = Activity::All();
        return view('user.application.edit', compact('application', 'programs', 'classes', 'activities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        $user = User::find($request->input('user_id'));
        $program = Program::find($request->input('program_id'));
        $classes = ProgramClass::find($request->input('class_id'));
        $activities = Activity::find($request->input('activity_id'));
        
        $application->user_id = auth()->user()->id;
        $application->program_id = $program->id;
        $application->class_id = $classes->id;
        $application->activity_id = $activities->id;
    
        // Save the changes
        $application->save();
        return redirect()->route('application.index')->with('success', 'Application Updated!');
    }

    public function updateApp(Request $request, $id)
    {
        $application = Application::find($id);
        $existingUserId = $application->user_id;
        $existingProgramId = $application->program_id;
        $existingClassId = $application->class_id;
        $existingActivityId = $application->activity_id;
    
        // Assign the new status
        $application->status = $request->status;
    
        // Restore existing values
        $application->user_id = $existingUserId;
        $application->program_id = $existingProgramId;
        $application->class_id = $existingClassId;
        $application->activity_id = $existingActivityId;
        // Save the changes
        $application->update();
        return redirect()->route('application.indexApp')->with('success', 'Application Updated!');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $application = Application::find($id);
        $application->delete();
        return redirect()->route('user.dashboard')->with('success', 'Application Deleted Successfully!');
    }
}
