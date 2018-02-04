<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Mail\NewOrder;
use Mail;

class CartController extends Controller
{
    public function update()
    {
        $client = auth()->user();
        $cart = $client->cart;
        $cart->status = 'Pending';
        $cart->order_date = Carbon::now();
        $cart->save(); //UPDATE

        $admins = User::where('admin', true)->get();
        Mail::to($client)->bcc($admins)->send(new NewOrder($client, $cart));

        $notification = 'Tu pedido ha sido registrado correctamente y se enviaron los detalles a tu correo';
        return back()->with(compact('notification'));
    }
}
