<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projetController extends Controller
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
     * Show the application projets.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function projets()
    {
        return view('projets');
    }
}
