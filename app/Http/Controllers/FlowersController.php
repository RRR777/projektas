<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;

class FlowersController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'country' => 'required|string|max:255',
            'orderqty' => 'required|numeric'
        ]);
        
        //Create new Flowers order
        $flower = new Flower;
        $flower->name = $request->input('name');
        $flower->lastname = $request->input('lastname');
        $flower->email = $request->input('email');
        $flower->country = $request->input('country');
        $flower->orderqty = $request->input('orderqty');
        //Save order
        $flower->save();
        //Redirect
        return redirect('/')->with('success', 'Užsakymas pateiktas');
    }

    public function getOrders(){
        $flowers = Flower::all();

        return view('orders')->with('flowers', $flowers);
    }
}