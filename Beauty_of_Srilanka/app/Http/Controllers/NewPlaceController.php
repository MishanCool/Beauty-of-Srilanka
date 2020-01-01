<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewPlaceModel;

class NewPlaceController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function store(Request $request) {
        $new_place = new NewPlaceModel();

        $new_place->author = $request->input('author');
        $new_place->district = $request->input('district');
        $new_place->title = $request->input('title');
        $new_place->body = $request->input('body');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/new_place/', $filename);
            $new_place->image = $filename;
        }
        else{
            return $request;
            $new_place->image = '';
        }

        // echo "fgggggggg".$new_place;

        $new_place->save();


        //return redirect()->route('admin.dashboard');

        return view('admin.dashboard')->withSuccess('Great!   New place has been successfully uploaded.');
    }

    public function display() {
        //$home_front = NewPlaceModel::select('select * add_places');
        $home_front = NewPlaceModel::all();
        //return view('/')->with('home_front', $home_front);
        return view('home.home',['home_front'=>$home_front]);
    }
}
