<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class StaffController extends Controller
{
    public function RedirectTostaff()
    {
        $id = Auth::id();
        $staff_raw = DB::table('users')->where('id',$id)->pluck('staff');
        $staff = $staff_raw[0];
        if($staff==1){
            return view('staff');
        } else {
            return redirect('/');
        }

    }
}
