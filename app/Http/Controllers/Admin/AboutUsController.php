<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUsContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutContent = AboutUsContent::first(); // Fetch the first entry
        return view('admin.about.index', compact('aboutContent'));
    }

    public function edit($id)
    {
        $aboutContent = AboutUsContent::findOrFail($id);
        return view('admin.about.edit', compact('aboutContent'));
    }

    public function update(Request $request, $id)
    {
        $aboutContent = AboutUsContent::findOrFail($id);

        $data = $request->all();

        // Handle banner image upload
        if ($request->hasFile('banner_image')) {
            if ($aboutContent->banner_image) {
                Storage::delete('public/' . $aboutContent->banner_image);
            }
            $data['banner_image'] = $request->file('banner_image')->store('about', 'public');
        }

        // Handle about image upload
        if ($request->hasFile('about_image')) {
            if ($aboutContent->about_image) {
                Storage::delete('public/' . $aboutContent->about_image);
            }
            $data['about_image'] = $request->file('about_image')->store('about', 'public');
        }

        $aboutContent->update($data);

        return redirect()->route('admin.about.index')->with('success', 'About Us content updated successfully.');
    }
    public function show()
    {
        // Fetch the first record from the AboutUsContent table
        $aboutContent = AboutUsContent::first();

        // Check if there is content in the database and pass it to the view
        if (!$aboutContent) {
            return view('about')->with('message', 'No content found.');
        }

        return view('about', compact('aboutContent'));
    }
}
