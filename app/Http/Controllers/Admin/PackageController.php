<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index() 
    {
        $packages = Package::all();
        return view('admin.packages', ['packages' => $packages]);    
    } 
    public function create() 
    {
        return view('admin.package-create');    
    }
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'max_days' => 'required|integer',
            'max_users' => 'required|integer',
            'is_download' => 'required',
            'is_4k' => 'required',
        ]);
        
        Package::create($data);

        return redirect()->route('admin.package')->with('success', 'Package created');
    }
    public function edit($id) 
    {
        $package = Package::find($id);
        return view('admin.package-edit', ['package'=>$package]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'max_days' => 'required|integer',
            'max_users' => 'required|integer',
            'is_download' => 'required',
            'is_4k' => 'required',
        ]);
        $package = Package::find($id);

        $package->update($data);

        return redirect()->route('admin.package')->with('success', 'Package updated');
    }
    public function destroy($id) 
    {
        Package::find($id)->delete();
        return redirect()->route('admin.package')->with('success', 'Package deleted');
    }
}
