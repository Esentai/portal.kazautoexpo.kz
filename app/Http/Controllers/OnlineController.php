<?php

namespace App\Http\Controllers;

use App\Models\Online;
use Illuminate\Http\Request;

class OnlineController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('online.index');
    }

    public function create(){
        return view('online.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
            'surname' => 'string',
            'company' => 'string',
            'job' => 'string',
            'phone' => 'string',
            'website' => '',
            'content' => '',
        ]);
        Online::create($data);
        return redirect()->route('online.index');
    }
}
