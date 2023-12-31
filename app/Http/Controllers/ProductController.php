<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Card;
use App\Models\Order;
// use Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $card = new Card;
            $card->user_id = $req->session()->get('user')['id'];
            $card->product_id = $req->product_id;
            $card->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Card::where('user_id',$userId)->count();
    }
    function cardList()
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('card')
        ->join('products','card.product_id','products.id')
        ->select('products.*','card.id as card_id')
        ->where('card.user_id',$userId)
        ->get();

        return view('cardlist',['products'=>$data]);
    }
    function removeCart($id)
    {
        Card::destroy($id);
        return redirect('cardlist');
    }
    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = DB::table('card')
        ->join('products','card.product_id','products.id')
        ->where('card.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart=Card::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->save();
        }
        Card::where('user_id',$userId)->delete();
        return redirect('/');
        // return $req->input();
    }

    function myOrder()
    {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userId)
        ->get();

        return view('myorder',['orders'=>$orders]);
    }
}
