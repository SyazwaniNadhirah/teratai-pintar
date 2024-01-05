<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\ProgramClass;
use App\Models\ContactUs;
use App\Models\User;
use App\Models\Children;
use App\Models\Application;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $programs = Program::All();
        $classes = ProgramClass::All();
        return view('user.dashboard',compact('programs','classes'));
    }
    public function indexAdmin()
    {
        $child = Children::All();
        $countApplication = Application::count();
        $countProgram = Program::count();
        $countClass = ProgramClass::count();
        $countFeedback = ContactUs::count();
        return view('admin.dashboard',compact('countApplication','countProgram','countClass','countFeedback','child'));
    }

    public function program()
    {
        $programs = Program::All();
        return view('user.program.index',compact('programs'));
    }

    public function class()
    {
        $classes = ProgramClass::All();
        return view('user.class.index',compact('classes'));
    }
    public function showProgram($id)
    {
        $programs = Program::find($id);
        return view('user.program.show',compact('programs'));
    }

    public function showClass($id)
    {
        $classes = ProgramClass::find($id);
        return view('user.class.index',compact('classes'));
    }

    public function user()
    {
        $users = User::All();
        return view('admin.user.index',compact('users'));
    }
}
