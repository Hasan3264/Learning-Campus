<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\branchdetails;
use Intervention\Image\ImageManagerStatic as Image;

class branchController extends Controller
{
    public function index(){
        $branchdetials = branchdetails::all();
        return view('backend.brench.index',[
            'branchdetials' => $branchdetials,
        ]);
    }
    public function add(){
        return view('backend.brench.addbranch');
    }

    protected $rules = [
        'short_name' => ['required', 'unique:branchdetails'],
        'branch_name' => ['required', 'unique:branchdetails'],
        'address' => ['required', 'unique:branchdetails'],
        'city' => ['required'],
        'zip_code' => ['required', 'numeric'],
        'number' => ['required', 'numeric', 'unique:branchdetails'],
        'fax' => ['required', 'unique:branchdetails'],
        'email' => ['required', 'unique:branchdetails'],
        'auth_signature' => ['required', 'mimes:jpeg,png,pdf'],
        'holydays' => ['required'],
        'map' => ['required'],
        'status' => ['required'],
    ];
    public function input_branch(Request $request){
        $this->validate($request, $this->rules);

        $branchdetails_id = branchdetails::insertGetId([
            'short_name' => $request->short_name,
            'branch_name' => $request->branch_name,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'number' => $request->number,
            'fax' => $request->fax,
            'email' => $request->email,
            'auth_signature' => 'ggg',
            'holydays' => $request->holydays,
            'map' => $request->map,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);
        $uploded_file = $request->auth_signature;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $branchdetails_id . '.' . $extentaion;
        Image::make($uploded_file)->save(public_path('/uploads/backend/auth_signature/' . $file_name));
        branchdetails::find($branchdetails_id)->update([
            'auth_signature' => $file_name,
        ]);
        return back()->with('success', 'Added Successfully!');
    }
    function show_branece($branch_id){
        $branch = branchdetails::findOrFail($branch_id);
        return view('backend.brench.show', ['branch' => $branch]);
    }

    public function edit_branece($id){
        $branch = branchdetails::findOrFail($id);
        return view('backend.brench.edit', ['branch' => $branch]);
    }
    public function edit_push(Request $request){
        $this->validate($request, $this->rules);
        branchdetails::find($request->branch_id)->update([
            'short_name' => $request->short_name,
            'branch_name' => $request->branch_name,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'number' => $request->number,
            'fax' => $request->fax,
            'email' => $request->email,
            'holydays' => $request->holydays,
            'map' => $request->map,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        $branch_id = $request->branch_id;
        $auth_signatures = branchdetails::find($branch_id);

        $delete_from = public_path('/uploads/backend/auth_signature/' . $auth_signatures->auth_signature);
        unlink($delete_from);
        $uploded_file = $request->auth_signature;
        $extentaion = $uploded_file->getClientOriginalExtension();
        $file_name = $branch_id . '.' . $extentaion;
        Image::make($uploded_file)->save(public_path('/uploads/backend/auth_signature/' . $file_name));
        branchdetails::find($branch_id)->update([
            'Product_preview' => $file_name,
        ]);
         return back()->with('success', 'Updated Successfully!');
    }
    public  function branch_delete(Request $request){
        branchdetails::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
    }

}
