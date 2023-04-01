<?php

namespace App\Http\Controllers;
use App\Models\department;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProjectController extends Controller
{
    public function editdepartment(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'=>'required',
                'project_id'=>'required',
                'slot'=>'required',
                'password'=>'required'
            ]);
            if (!$validated){
                return back()->withInput();
            }
            $department = department::find($request->project_id);
            $department->name = $request->name;
            $department->password = $request->password;
            $department->project_id = $request->project_id;
            $department->slot_num = $request->slot;
            $department->slot_left = $request->slot;
            $department->save();

            return redirect()->back()->with(
                'success','saved'
            );
        } catch (Exception $e){
            return back()->withInput();
        }

    }

    public function addProject()
    {
        $project = new project();
        $project->save();
    }
    public function adddepartment(Request $request){
        try {
            $validated = $request->validate([
                'name'=>'required',
                'project_id'=>'required',
                'slot'=>'required',
                'password'=>'required'
            ]);
            if (!$validated){
                return back()->withInput();
            }
            $department = new department();
            $department->name = $request->name;
            $department->password = $request->password;
            $department->project_id = $request->project_id;
            $department->slot_num = $request->slot;
            $department->slot_left = $request->slot;
            $department->save();

            return redirect()->back()->with(
                'success','saved'
            );
        } catch (Exception $e){
            return back()->withInput();
        }
    }
    public function sorting(Request $request){
        try
        {
            $validated = $request->validate([
                'id' =>'required'
            ]);
            if (!$validated){
                return back()->withInput();
            }
        } catch (Exception $e){
            return back()->withInput();
        }
    }
}
