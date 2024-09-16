<?php

namespace App\Http\Controllers;

use App\Models\Product; 
use App\Models\HomePageContent; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    // Method to show the home page
    public function index()
    {
        $content = HomePageContent::first();
        $products = Product::all(); // Fetch products to display on the homepage
        return view('home', compact('content', 'products'));
    }
    public function edit()
    {
        $content = HomePageContent::firstOrCreate([]); // Get or create a new homepage content record
        return view('admin.home_page.edit', compact('content'));
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

        return redirect()->route('admin.home_page.edit')->with('success', 'Home page content updated successfully.');
    }
    // Method to show the about us page
    public function about()
    {
        return view('about'); // Return the 'about' view
    }

    // Method to show the contact us page
    public function contact()
    {
        return view('contact');
    }

    // Handle form submission
    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Here you can process the form data, e.g., send an email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Send an email or save the data to the database (example with email)
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('ourservices@ultras.com')
                    ->subject('New Contact Form Submission')
                    ->from($data['email'], $data['name']);
        });

        return redirect()->route('contact')->with('success', __('Your message has been sent successfully!'));
    }
    
}
