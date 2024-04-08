<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\User;
use App\Models\Education;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array();

        $users = User::all();
        $data['users'] = count($users);

        $abouts = About::all();
        $data['abouts'] = count($abouts);

        $skills = Skill::all();
        $data['skills'] = count($skills);

        $educations = Education::all();
        $data['educations'] = count($educations);

        $exps = Experience::all();
        $data['exps'] = count($exps);

        $blogs = Blog::all();
        $data['blogs'] = count($blogs);

        
        return view('home', compact('data'));
    }
}
