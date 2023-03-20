<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProjectController extends Controller
{
    public function toadd()
    {
        $id = Auth::id();
        $staff_raw = DB::table('users')->where('id',$id)->pluck('staff');
        $staff = $staff_raw[0];
        if($staff==1){
            return view('add');
        } else {
            return redirect('/');
        }

    }

    public function addProject(Request $request) {
        return back()->with('msg','กรุณาใส่ชื่อที่ไม่ซ้ำกับโครงการที่มีอยู่แล้ว');
        $projects = DB::table('project')->pluck('project_name');
        foreach ($projects as $project){
            if ($request->project == $project||$request->project == ""){
                return back()->with('msg','กรุณาใส่ชื่อที่ไม่ซ้ำกับโครงการที่มีอยู่แล้ว');
            }
            else{
                return back()->with('msg','success');
            }
        }
        $check = array($request);
        $request->validate(['project','require|unique:project|max:2']);
        return redirect()->back()->with('');

            dd($request->project);
    }
}
