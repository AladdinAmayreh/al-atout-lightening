<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageContent;
use Illuminate\Http\Request;

class HomePageContentController extends Controller
{
    public function index()
    {
        $content = HomePageContent::first(); // Get the first homepage content record
        return view('admin.homePage.index', compact('content'));
    }
    public function edit()
    {
        // Get the first home page content record or create a new one
        $content = HomePageContent::firstOrCreate([]);
        return view('admin.homePage.edit', compact('content'));
    }

    public function update(Request $request)
    {
        $content = HomePageContent::first();

        // Validate the request
        $request->validate([
            'banner_title_1' => 'nullable|string|max:255',
            'banner_text_1' => 'nullable|string',
            'banner_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_title_2' => 'nullable|string|max:255',
            'banner_text_2' => 'nullable|string',
            'banner_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'about_us_text' => 'nullable|string',
            'about_us_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'vision_text' => 'nullable|string',
            'section_title' => 'nullable|string|max:255',
        ]);

        // Update content fields
        $content->update($request->all());

        // Handle image uploads
        if ($request->hasFile('banner_image_1')) {
            $content->banner_image_1 = $request->file('banner_image_1')->store('images', 'public');
        }
        if ($request->hasFile('banner_image_2')) {
            $content->banner_image_2 = $request->file('banner_image_2')->store('images', 'public');
        }
        if ($request->hasFile('about_us_image')) {
            $content->about_us_image = $request->file('about_us_image')->store('images', 'public');
        }

        $content->save();

        return redirect()->route('admin.homePage.edit')->with('success', 'Home page content updated successfully.');
    }
}
