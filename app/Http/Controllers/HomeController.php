<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Cart;


class HomeController extends Controller
{
    public function index(){
        $data2=Foodchef::all();
        $data=Food::all();
        return view('home',compact ('data','data2'));
    }

    public function redirects(){

        $data=Food::all();
        $data2=Foodchef::all();
        // dd($data);
   $usertype=Auth::User()->usertype;

   if($usertype==1){
return view('admin.adminhome');
   }
   else{
    return view('home', compact('data','data2'));
   }

}
public function adminhome(Request $request,$id){
    return view('admin.adminhome',compact('data' ,'data2'));
}
public function addcart()
{

    if(Auth::id())

    {

        $user_id=Auth::id();
        $foodid=$id;
        $quantity=$request->quantity;
        $cart=new Cart;
        $cart->user_id=user_id;
        $cart->food_id=foodid;

        $cart->quantity=quantity;
        $cart->save();

        return redirect()->back();
    }

    else
    {

    return redirect('/login');
}
}
}

