<?php

namespace App\Http\Controllers;

use App\Models\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProjectController extends Controller
{
    public function editdepartment()
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

            return back()->with(array(
                'toastmessage' => '✔️ บันทึก',
                'modalmessage' => 'emergency'
            ));
        } catch (Exception $e){
            return back()->withInput();
        }
    }
}
