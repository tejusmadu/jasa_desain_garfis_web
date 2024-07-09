<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\inputdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        try {
            $inputdata = inputdata::findOrFail($request->inputdata_id);

            $cartItem = Cart::where('inputdata_id', $inputdata->id)->first();

            if ($cartItem) {
                $cartItem->quantity += 1;
            } else {
                $cartItem = new Cart();
                $cartItem->inputdata_id = $inputdata->id;
                $cartItem->quantity = 1;
            }

            $cartItem->save();

            return response()->json(['success' => 'Produk berhasil ditambahkan ke keranjang!']);
        } catch (Exception $e) {
            Log::error('Error adding to cart: ' . $e->getMessage());
            return response()->json(['error' => 'Gagal menambahkan produk ke keranjang!'], 500);
        }
    }
}
