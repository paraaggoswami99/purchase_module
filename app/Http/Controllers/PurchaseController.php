<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchaseController extends Controller
{



    public function create()
{
    $purchases = Purchase::all(); // Database se sare purchases fetch karein
    return view('purchases.create', compact('purchases')); // View me pass karein
}

public function store(Request $request)
{
    $request->validate([
        'vendor' => 'required',
        'make' => 'required',
        'model' => 'required',
        'color' => 'required',
        'mileage' => 'required',
        'specification' => 'required',
        'engine_size' => 'required',
        'base_price' => 'required',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    

    // Pehle purchase ka record save karein
    $purchase = Purchase::create($request->all());

    // Agar images upload ho rahi hain toh unko store karein
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            // PurchaseImage table me save karein
            $purchase->images()->create([
                'image_path' => 'uploads/' . $imageName
            ]);
        }
    }

    

    // return redirect()->back()->with('success', 'Purchase created successfully!');
    return redirect()->route('purchases.index')->with('success', 'Purchase added successfully!');
}



public function index()
{
    $purchases = Purchase::all(); // Sare purchases fetch karein
    return view('purchases.index', compact('purchases')); // Blade file ko data bhejein
}







}









   