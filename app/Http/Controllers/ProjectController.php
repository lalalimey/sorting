<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProjectController extends Controller
{
    public function adddepartment()
    {


    }

    public function addProject(Request $request)
    {
        try
        {
            $validated = $request->validate([
                'name' =>'required'
            ]);
            if (!$validated){
                return back()->withInput();
            }
        } catch (Exception $e){
            return back()->withInput();
        }
    }
}
