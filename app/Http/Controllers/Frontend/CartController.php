<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{
    public function add_to_cart($id)
    {
        $product = Product::find($id);

// dd($product);
        
        //case 1: If cart is empty


        $getcart=session()->get('cart');
        // dd(session()->get('cart'));
// session()->forget('cart');

        if(empty($getcart)){
            $newcart=[
                $id => [
                    'id' => $product->id,
                    'name' => $product->product_name,
                    'quantity' => 1,
                    'image' => $product->image,
                    'price' => $product->product_price,
                ] 
            ];
            session()->put('cart', $newcart);
        // dd(session()->get('cart'));
            // return view('frontend.layouts.cart');

        }

        //case 2: when cart is not empty


        if(array_key_exists($id,$getcart)){
           //array_key_exists($key,$array)
            //product exist

             $getcart[$id]['quantity']=$getcart[$id]['quantity']+1;
             session()->put('cart',$getcart);
 
         }
         
         else
        {
            //product not exist


            // dd('asdfghjk');

            $getcart[$id]=[
                'id' => $product->id,
                'name' => $product->product_name,
                'quantity' => 1,
                'image' => $product->image,
                'price' => $product->product_price,
            ];
            session()->put('cart', $getcart);
            // dd($getcart);

        }
        // return view('frontend.layouts.cart');
        return redirect()->route('shop');
    }

    public function cart()
    {
        return view('frontend.layouts.cart');

    }
}
