<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributeursController extends Controller
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
     * Show the application contributeurs.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contributeurs()
    {
        return view('contributeurs');
    }
}
