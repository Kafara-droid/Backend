<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();

        return view('produks.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produks.create');
    }
    /**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        'price' => 'required',
        'description' => 'required'
    ]);

    $produk = new Produk();
    $produk->name = $request->name;
    $produk->price = $request->price;
    $produk->description = $request->description;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $produk->photo = $name;
    }

    $produk->save();

    return redirect()->route('produks.index')->with('success', 'produk created successfully.');
}

/**
 * Display the specified resource.
 *
 * @param  \App\produk  $produk
 * @return \Illuminate\Http\Response
 */
public function show(produk $produk)
{
    return view('produks.show', compact('produk'));
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\produk  $produk
 * @return \Illuminate\Http\Response
 */
public function edit(produk $produk)
{
    return view('produks.edit', compact('produk'));
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\produk  $produk
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, produk $produk)
{
    $request->validate([
        'name' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'price' => 'required',
        'description' => 'required'
    ]);

    $produk->name = $request->name;
    $produk->price = $request->price;
    $produk->description = $request->description;

    if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $produk->photo = $name;
    }

    $produk->save();
    return redirect()->route('produks.index')->with('success', 'produk updated successfully.');
}
/**
 * Remove the specified resource from storage.
 *
 * @param  \App\produk  $produk
 * @return \Illuminate\Http\Response
 */
public function destroy(produk $produk)
{
    $produk->delete();
    return redirect()->route('produks.index')->with('success', 'produk deleted successfully.');
}
}