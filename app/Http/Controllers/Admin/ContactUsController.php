<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUsContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactContent = ContactUsContent::first(); // Assuming you have only one entry
        return view('admin.contact.index', compact('contactContent'));
    }

    public function edit($id)
    {
        $contactContent = ContactUsContent::findOrFail($id);
        return view('admin.contact.edit', compact('contactContent'));
    }

    public function update(Request $request, $id)
    {
        $contactContent = ContactUsContent::findOrFail($id);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($contactContent->image) {
                Storage::delete('public/' . $contactContent->image);
            }
            $imagePath = $request->file('image')->store('contact', 'public');
            $data['image'] = $imagePath;
        }

        $contactContent->update($data);

        return redirect()->route('admin.contact.index')->with('success', 'Contact page content updated successfully.');
    }
    public function show()
    {
        $contactContent = ContactUsContent::first();
        return view('contact', compact('contactContent'));
    }
}

