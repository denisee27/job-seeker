<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    public function index(){
        
        return view('company.index');
    }
    public function store(Request $request){
        $store = new Company();
        $store->company_id = Auth::user()->id;
        $store->email = $request->email;
        $store->job = $request->job;
        $store->description = $request->description;
        $store->location = $request->location;
        $store->url = $request->url;
        $store->requirement = $request->requirement;
        $store->type = $request->type;
        $store->save();

        Alert::success('Input Berhasil','Data Berhasil Di Tambahkan!');
        return back();
    }
}
