<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Redirect;

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
            //$filename = date('YmdHis') . "." . $extention;
            $file->move('uploads/new_place/', $filename);
            $new_place->image = $filename;
        }
        else{
            return $request;
            $new_place->image = '';
        }

    //     request()->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //    ]);
    //    if ($files = $request->file('image')) {
    //        $destinationPath = 'public/uploads/'; // upload path
    //        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
    //        $files->move($destinationPath, $profileImage);
    //        $new_place['image'] = "$profileImage";
    //     }
    //     $check = NewPlaceModel::insertGetId($new_place);

    //      return Redirect::to("/")->withSuccess('Great! Image has been successfully uploaded.');

        $new_place->save();


       // return redirect()->route('admin.dashboard');

        return view('admin.dashboard');//->withSuccess('Great!   New place has been successfully uploaded.');

    }

    public function display() {
        //$home_front = NewPlaceModel::select('select * add_places');
        $home_front = NewPlaceModel::all();
        //return view('/')->with('home_front', $home_front);
        return view('home.home',['home_front'=>$home_front]);
    }

    // public function recodes()
    // {
    //     $places = NewPlaceModel::all();
    //     return view('/home',['places'=>$places]);
    // }

    // public function destroy($id) {

    //     NewPlaceModel::delete('delete from add_places where id = ?',[$id]);
    //     echo "Record deleted successfully.<br/>";
    //     echo '<a href = "/delete-records">Click Here</a> to go back.';
    //  }
}
