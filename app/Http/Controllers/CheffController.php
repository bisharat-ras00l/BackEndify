<?php

namespace App\Http\Controllers;

use App\Models\Clain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheffController extends Controller
{
    public function index()
    {
        return view('web');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cheff.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,svg,webp,ico|max:4048',
            'specialty' => 'required',
            'nationality' => 'required',
            'experience' => 'required',
        ]);
        $image = rand(52000, 600000000) . "ACI" . time() . "." . $request->image->extension();
        $request->image->move(public_path('uploads/cheffimages'), $image);
        $image_path = 'uploads/cheffimages/' . $image;


        $data = new Clain();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->experience = $request->experience;
        $data->nationality = $request->nationality;
        $data->specialty = $request->specialty;
        $data->image = $image_path;
        $data->save();

        return redirect()->back()->with('success', ' added successfully!');
    }

    public function show()
    {
        $data = Clain::all();
        return view('cheff.show', compact('data'));
    }
    public function showdash()
    {
        $data = Clain::simplePaginate(4);
        return view('showdata', compact('data'));
    }

    public function edit(string $id)
    {
        $data = Clain::find($id);
        return view('cheff.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,svg,webp,ico|max:4048',
            'specialty' => 'required',
            'nationality' => 'required',
            'experience' => 'required',
        ]);

        $clain = Clain::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($clain->image && file_exists(public_path($clain->image))) {
                unlink(public_path($clain->image));
            }

            $imageName = rand(52000, 600000000) . "cheff" . time() . "." . $request->image->extension();
            $request->image->move(public_path('uploads/cheffimages'), $imageName);
            $clain->image = 'uploads/cheffimages/' . $imageName;
        }

        $clain->name = $request->name;
        $clain->email = $request->email;
        $clain->experience = $request->experience;
        $clain->nationality = $request->nationality;
        $clain->specialty = $request->specialty;

        $clain->save();
        return redirect()->back()->with('success', 'Updated successfully!');
    }



    public function destroy(string $id)
    {
        $data = Clain::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'data deleted successfully');
    }
}
