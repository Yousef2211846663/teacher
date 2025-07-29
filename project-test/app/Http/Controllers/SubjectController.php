<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function index()
    {
        // لو عندك موديل Subject وتبي تجيب كل المواد:
        // $subjects = Subject::all();
        // return view('subjects.index', compact('subjects'));

        // مؤقتاً نرجع نص للتأكد أن الراوت شغال:
        return view('subjects.index');

    }
    function create()
    {
        // لو عندك موديل Subject وتبي تعرض فورم الإضافة:
        // return view('subjects.create');

        // مؤقتاً نرجع نص للتأكد أن الراوت شغال:
        return view('subjects.create');
}
}
