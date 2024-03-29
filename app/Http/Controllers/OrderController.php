<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

use App\Models\Product;

class OrderController extends Controller
{
    public function cart_to_processing(Request $request)
    {
        $validated = $request->validate([
            "address" => "required",
            "address2" => "",
            "municipality" => "required",
            "zip" => "required|min:0|max:99999"
        ]);

        $cart = get_cart();

        $cart->delivery_address =
            $validated["address"] . ", " .
            $validated["address2"] . ", " .
            $validated["municipality"] . ", " .
            $validated["zip"];

        $cart->status = "processing";

        $cart->save();

        return view('public.processing');
    }

    public function processing_to_sent(Request $request)
    {
        $validated = $request->validate([
            "id" => "required|exists:orders,id",
            "traking" => "required",
        ]);

        $order = Order::find($validated["id"]);

        $order->traking_number = $validated["traking"];
        $order->status = "sent";

        $order->save();

        return redirect(route('list-orders'))->with('status', 'El pedido ha sido enviado correctamente!');
    }

    public function list(Request $request)
    {
        return view('admin.orders-page', [
            "orders_cart" => Order::where('status', 'cart')->get(),
            "orders_processing" => Order::where('status', 'processing')->get(),
            "orders_sent" => Order::where('status', 'sent')->get(),
        ]);
    }
    public function orders_list()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();

        return view('public.orders-page', [

            "orders" => $orders,

        ]);
    }
    public function admin_orders_list($id)
    {
        $user = User::findOrFail($id);


        return view('admin.show-customer-orders', [

            "user" => $user,


        ]);
    }

    public function show_order($id)
    {
        $order = Order::findOrFail($id);


        return view('public.show-order', [

            "order" => $order,

        ]);
    }

    public function admin_show_order($id)
    {
        $order = Order::findOrFail($id);


        return view('admin.show-order', [

            "order" => $order,

        ]);
    }
}

