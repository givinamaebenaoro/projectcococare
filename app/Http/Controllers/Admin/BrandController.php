<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandFormRequest;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index');
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(BrandFormRequest $request)
    {
        $validatedData = $request->validated();

        $brands = new Brand;
        $brands->name = $validatedData['name'];
        $brands->slug = Str::slug($validatedData['slug']);
        $brands->status = $request->status  == true ? '1':'0';
        $brands->save();

        return redirect('admin/brands')->with('message','Brand Added Successfully!');
    }

    public function edit(Brand $brands)
    {
        return view ('admin.brand.edit', compact('brands'));;
    }

    public function update(BrandFormRequest $request, $brand)
    {
        $validatedData = $request->validated();

        $brands = Brand::findOrFail($brand);

        $brands->name = $validatedData['name'];
        $brands->slug = Str::slug($validatedData['slug']);
        $brands->status = $request->status  == true ? '1':'0';
        $brands->update();

        return redirect('admin/brands')->with('message','Brand Updated Successfully!');

    }


    public function remove(Brand $brands)
    {

        $brands->delete();
        return redirect('admin/brands/')->with('message','Deleted Successfully!');
    }

}
