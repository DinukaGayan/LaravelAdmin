<?php
namespace Laraveldaily\Quickadmin\Controllers;

use App\Http\Controllers\Controller;
use Laraveldaily\Quickadmin\Models\UsersLogs;
use Yajra\Datatables\Datatables;
use Session;

class UserActionsController extends Controller
{
    /**
     * Show User actions log
     *
     * @return Response
     */
    public function index()
    {
        
        Session::flash('Title', ucwords('User Action'));

        return view('qa::logs.index');
    }

    public function table()
    {
        return Datatables::of(UsersLogs::with('users')->orderBy('id', 'desc'))->make(true);
    }
}