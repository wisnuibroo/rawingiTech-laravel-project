<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileMyCourseController extends Controller
{
    public function index()
    {

        $courses = session('my_courses', []);
        return view('profile-mycourse', [
            'title' => 'Profile MyCourse',
            'courses' => $courses,
        ]);
    }

    public function showCourse($course)
    {
        $courses = [
            'java' ,
            'js' ,
            'csharp' ,
            'mysql' ,
            'python',
            'html',
            'cpp',
            'nodejs',
            'ai',
            'golang',
            'ruby',
            'uiux'
        ];


        if (!isset($courses[$course])) {
            abort(404, 'Course not found');
        }

        return view('profile.mycourse', [
            'title' => 'Course Details',
            'course' => $courses[$course],
        ]);
    }

    public function addCourseToProfile($course)
    {

        $validCourses = [
            'java', 'js', 'csharp', 'cpp', "mysql", "python", "html", "nodejs", "ai", "golang", "ruby", "uiux"
        ];

        if (!in_array($course, $validCourses)) {
            abort(404, 'Course not found');
        }

        $courses = session('my_courses', []);

        if (!in_array($course, $courses)) {
            $courses[] = $course;
            session(['my_courses' => $courses]);
        }

        return redirect()->route('profile-mycourse');
    }
}
