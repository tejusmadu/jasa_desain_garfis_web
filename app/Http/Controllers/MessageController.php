<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Message; // Pastikan untuk mengimpor model Message
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Customer::where('customer_id', Auth::id())
            ->orWhere('admin_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $message = new Customer();
        $message->customer_id = Auth::id();
        $message->message = $request->message;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('simpan'), $imageName);
            $message->image_path = 'simpan/' . $imageName;
        }

        $message->save();

        return redirect()->route('messages.index')->with('success', 'Message sent successfully');
    }
}
