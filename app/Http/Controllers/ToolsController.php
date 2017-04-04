<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Description
     *
     * @return void
     */
    public function index()
    {
    	return view('tools.tools');
    }

    /**
     * Description
     *
     * @return void
     */
    public function frontend()
    {
    	return view('resources.frontend');
    }

    /**
     * Description
     *
     * @return void
     */
    public function backend()
    {
    	return view('resources.backend');
    }

    /**
     * Description
     *
     * @return void
     */
    public function database()
    {
    	return view('resources.database');
    }
    
}
