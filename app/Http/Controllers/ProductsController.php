<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = \App\Product::all();
        return view('products.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = \App\Brand::pluck('name', 'id')->all();
        $manufactures = \App\Manufacture::pluck('name', 'id')->all();
        $descriptions = \App\Description::pluck('name', 'id')->all();
        $locations = \App\Location::pluck('name', 'id')->all();
        $categories = \App\Category::pluck('name', 'id')->all();
        return view('products.create', compact('brands', 'manufactures', 'descriptions', 'locations', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->quantity as $key => $value) {
            \App\Product::create([
                                    'quantity' => $request->quantity[$key],
                                    'serial' => $request->serial[$key],
                                    'manufacture_id' => $request->manufacture[$key],
                                    'description_id' => $request->description[$key],
                                    'location_id' => $request->location[$key],
                                    'category_id' => $request->category[$key],
                                    'brand_id' => $request->model[$key]
                                ]);
        }
        return redirect(route('techitems.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = null, Request $request)
    {
    }
}
