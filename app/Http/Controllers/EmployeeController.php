<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    public function index(Request $request){
        if(!empty($request->job) && $request->job != 'all'){
            $job = Company::where('job','like','%'.$request->job.'%')
            ->get();
        }else{
            $job = Company::get();
        }
        return view('jobs.index',['jobs'=>$job]);
    }
    public function detail($id){
        $job = Company::find($id);
        return view('jobs.detail',['job'=>$job]);
    }
}
