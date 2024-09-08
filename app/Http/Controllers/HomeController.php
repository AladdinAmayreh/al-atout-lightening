<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model to fetch products
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    // Method to show the home page
    public function index()
    {
        $products = Product::all(); // Fetch all products from the database
        return view('home', compact('products')); // Return the 'home' view with the products
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
