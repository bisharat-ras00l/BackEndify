<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        // return view('web');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,svg,webp,ico|max:4048',
            'detail' => 'required',
        ]);
        $image = rand(52000, 600000000) . "ACI" . time() . "." . $request->image->extension();
        $request->image->move(public_path('uploads/cheffimages'), $image);
        $image_path = 'uploads/cheffimages/' . $image;


        $data = new Menu();

        $data->name = $request->name;
        $data->price = $request->price;
        $data->detail = $request->detail;
        $data->image = $image_path;
        $data->save();

        return redirect()->back()->with('success', ' added successfully!');
    }

    public function show()
    {
        $data = Menu::all();
        return view('menu.show', compact('data'));
    }
    public function menudash()
    {
        $data = Menu::Paginate(1);
        return view('mendash', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Menu::find($id);
        return view('menu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clain = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,svg,webp,ico|max:4048',
            'detail' => 'required',
        ]);

        $clain = Menu::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($clain->image && file_exists(public_path($clain->image))) {
                unlink(public_path($clain->image));
            }

            $imageName = rand(52000, 600000000) . "cheff" . time() . "." . $request->image->extension();
            $request->image->move(public_path('uploads/cheffimages'), $imageName);
            $clain->image = 'uploads/cheffimages/' . $imageName;
        }

        $clain->name = $request->name;
        $clain->price = $request->price;
        $clain->detail = $request->detail;


        $clain->save();
        return redirect()->back()->with('success', 'Updated successfully!');
    }



    public function destroy(string $id)
    {
        $data = Menu::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'data deleted successfully');
    }
}
