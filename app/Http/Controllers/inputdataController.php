<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inputdata;
use Illuminate\Support\Facades\Log;
use Exception;

class InputdataController extends Controller
{
    public function inputdata()
    {
        try {
            $images = Inputdata::all(); // use a plural variable name
            return view('inputdata', compact('images'));
        } catch (Exception $e) {
            Log::error('Error fetching inputdata: ' . $e->getMessage());
            return redirect()->route('inputdata')->with('error', 'Failed to fetch data!');
        }
    }

    public function vecktor()
    {
        try {
            $images = Inputdata::all(); // use a plural variable name
            return view('vecktor', compact('images'));
        } catch (Exception $e) {
            Log::error('Error fetching vecktor: ' . $e->getMessage());
            return redirect()->route('vecktor')->with('error', 'Failed to fetch data!');
        }
    }

    public function test()
    {
        try {
            $images = Inputdata::all(); // use a plural variable name
            return view('test', compact('images'));
        } catch (Exception $e) {
            Log::error('Error fetching test: ' . $e->getMessage());
            return redirect()->route('test')->with('error', 'Failed to fetch data!');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $image = new Inputdata;
            $image->title = $request->title;
            $image->description = $request->description;

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads'), $imageName);
                $image->image_path = 'uploads/' . $imageName;
            }

            $image->save();

            return redirect()->route('inputdata')->with('success', 'Data berhasil di tambahkan !');
        } catch (Exception $e) {
            Log::error('Error storing inputdata: ' . $e->getMessage());
            return redirect()->route('inputdata')->with('error', 'Failed to store data!');
        }
    }

    public function edit($id)
    {
        try {
            $image = Inputdata::findOrFail($id);
            return view('edit_inputdata', compact('image'));
        } catch (Exception $e) {
            Log::error('Error fetching inputdata for edit: ' . $e->getMessage());
            return redirect()->route('inputdata')->with('error', 'Failed to fetch data for edit!');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $image = Inputdata::findOrFail($id);

            $image->title = $request->title;
            $image->description = $request->description;

            if ($request->hasFile('image')) {
                // Hapus file lama sebelum menyimpan yang baru
                if (file_exists(public_path($image->image_path))) {
                    unlink(public_path($image->image_path));
                }

                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads'), $imageName);
                $image->image_path = 'uploads/' . $imageName;
            }

            $image->save();

            return redirect()->route('inputdata')->with('success', 'Data berhasil di updated !');
        } catch (Exception $e) {
            Log::error('Error updating inputdata: ' . $e->getMessage());
            return redirect()->route('inputdata')->with('error', 'Failed to update data!');
        }
    }

    public function destroy($id)
    {
        try {
            $image = Inputdata::findOrFail($id);
            if (file_exists(public_path($image->image_path))) {
                unlink(public_path($image->image_path));
            }
            $image->delete();

            return redirect()->route('inputdata')->with('success', 'Data berhasil di hapus !');
        } catch (Exception $e) {
            Log::error('Error deleting inputdata: ' . $e->getMessage());
            return redirect()->route('inputdata')->with('error', 'Failed to delete data!');
        }
    }
}
