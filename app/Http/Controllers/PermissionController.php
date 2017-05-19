<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Permission;

class PermissionController extends Controller
{
     public function index(Request $request)
    {
        $data = Permission::orderBy('id','DESC')->paginate(5);
        return view('permissions.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
