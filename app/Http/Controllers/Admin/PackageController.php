<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Auth;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){
        $data['title'] = 'Packages';
        $data['navPackageParentActiveClass'] = 'mm-active';
        $data['subNavPackageIndexActiveClass'] = 'mm-active';
        $data['packages'] = Package::get();
        return view('admin.packages.form', compact('data'));
    }
     public function addForm(){
        return view("admin.packages.add");
    }
    public function show($id){
        $package_data = Package::where("id",$id)->first();
        return view("admin.packages.edit",compact("package_data"));
    }
    public function create(Request $request){
         $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
            'price' => 'required|max:10',
            'real_price' => 'required|max:10',
            'description' => 'required',
        ]);

        $package = new Package;
        $package->title = $request->title;
        $package->sub_title = $request->sub_title;
        $package->price = $request->price;
        $package->real_price = $request->real_price;
        $package->description = $request->description;
        $package->save();
        
        return back()->with("success","Package Create Successfully");
    }
     public function update(Request $request){
         $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
            'price' => 'required|max:10',
            'real_price' => 'required|max:10',
            'description' => 'required',
        ]);

        $package = Package::find($request->id);
        $package->title = $request->title;
        $package->sub_title = $request->sub_title;
        $package->price = $request->price;
        $package->real_price = $request->real_price;
        $package->description = $request->description;
        $package->save();
        
        return back()->with("success","Package Update Successfully");
    }
     public function changeStatus(Request $request){
         
          if (!Auth::user()->can('packages')) {
            abort('403');
        } // end permission checking

        $package = Package::findOrFail($request->id);
        $package->status = $request->status;
        $package->save();

        return response()->json([
            'data' => 'success',
        ]);
    }
    
      public function Delete($id)
    {
        if (!Auth::user()->can('packages')) {
            abort('403');
        } // end permission checking

        $package = Package::where('id', $id)->firstOrFail();
        $package->delete();
        return back()->with("success","Package Delete Successfully");
    }
    
    


}
