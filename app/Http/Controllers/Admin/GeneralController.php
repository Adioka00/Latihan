<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    function about() {
        $title = 'PROJEK SAYA';
        return view('fronend.page.about.index',[
            'title_page'=>$title
        ]);
    }
    function skill() {
        $title = 'PROJEK SAYA';
        return view('fronend.page.skill.index',[
            'title_page'=>$title
        ]);
    }
    function exp() {
        $title = 'PROJEK SAYA';
        return view('fronend.page.exp.index',[
            'title_page'=>$title
        ]);
    }
    function education() {
        $title = 'PROJEK SAYA';
        return view('fronend.page.education.index',[
            'title_page'=>$title
        ]);
    }
    function interests() {
        $title = 'PROJEK SAYA';
        return view('fronend.page.interests.index',[
            'title_page'=>$title
        ]);
    }
    function awards() {
        $title = 'PROJEK SAYA';
        return view('fronend.page.awards.index',[
            'title_page'=>$title
        ]);
    }
}

