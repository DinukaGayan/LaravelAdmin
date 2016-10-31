<?php
namespace Laraveldaily\Quickadmin\Controllers;

use App\Http\Controllers\Controller;
use Session;

class QuickadminController extends Controller
{
    /**
     * Show QuickAdmin dashboard page
     *
     * @return Response
     */
    public function index()
    {
    	Session::flash('Title', 'Dashboard');
        return view('admin.dashboard')->with('Title', 'Dashboard');
    }
}