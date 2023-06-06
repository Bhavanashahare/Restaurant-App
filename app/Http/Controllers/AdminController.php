<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
class AdminController extends Controller
{

    public function user()
    {
        $data = User::all();
        return view('admin.user', compact('data'));
    }

    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data = food::all();
        return view('admin.foodmenu', compact('data'));
    }

    public function uplodefood(Request $request)
    {
        $data = new Food;
        $data->title = $request->title;
        $data->price = $request->price;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }

        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function updateview(Request $request, $id)
    {
        $data = Food::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data = Food::find($id);
        $data->title = $request->title;
        $data->price = $request->price;



        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }
        $data->description = $request->description;

        $data->save();
        return redirect()->back();
    }
    public function reservation(Request $request)
    {
        $data =new Reservation();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        // dd($data);
        $data->time = $request->time;
        $data->message = $request->message;
        // dd($data);
        $data->save();

        return redirect()->back();
    }

    public function viewreservation(){

        $data=Reservation::all();

return view('admin.adminreservation',compact('data'));
    }
    public function viewchef(){
        $data=Foodchef::all();
        return view('admin.adminchef',compact('data'));
    }
    public function uplodechef(Request $request ){
        $data=new Foodchef();

        $data->name = $request->name;
        $data->speciality = $request->speciality;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }
        $data->save();
        return redirect()->back();


    }
    public function updatechef($id){
        $data=Foodchef::find($id);
//    dd($data);
        return view('admin.updatechef',compact('data'));

    }
    public function updatefoodchef(Request $request ,$id){
        $data=Foodchef::find($id);
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads', $filename);
            $data->image = $filename;
        }
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->name = $request->name;
        $data->save();
        return redirect()->back();

    }
    public function deletechef($id)
    {
        $data = Foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }

}
