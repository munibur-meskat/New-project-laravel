<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Client\Request as ClientRequest;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class HomeController extends Controller {
    function homefunction() {
        $users = User::orderBy('id', 'DESC')->simplePaginate(3);

        // $users = DB::table('users')->get();
        return view("home", compact('users'));
    }

    function aboutfunction() {
        $data = "About Data";
        return view("about", compact('data'));
    }

    function addUserForm() {
        return view("sign-up");
    }
    
    function insertUser(Request $request) {

        $request->validate([
                "name"      => "required",
                "user_name" => "required",
                "email"     => "required|email",
                "password"  => "required|min:8",
                "address"   => "max:255",
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();


        // User::insert([
        //         "name"      => $request->name,
        //         "user_name" => $request->user_name,
        //         "email"     => $request->email,
        //         "address"   => $request->address,
        //         "password"  => Hash::make($request->password),
        // ]);

        // DB::table('users')->insert([
        //         "name"      => $request->name,
        //         "user_name" => $request->user_name,
        //         "email"     => $request->email,
        //         "address"   => $request->address,
        //         "password"  => Hash::make($request->password),
        // ]);

        return redirect(route('home'))->with("success", "User Insert Successfully!");
    }

    function userEdit($id){

        $user = User::find($id);
        // $user = DB::table('users')->find($id);
        return view("edit", compact('user'));
    }

    function userUpdate(Request $request,$id){
         $user = User::find($id);
        $request->validate([
            "name"      => "required",
            "user_name" => "required",
            "email"     => "required|email",
            "address"   => "max:255",
    ]);

        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();

    // DB::table('users')->where('id', $id)->update([
    //             "name"      => $request->name,
    //             "user_name" => $request->user_name,
    //             "email"     => $request->email,
    //             "address"   => $request->address,
    // ]);

    return redirect(route('home'))->with("success", "User Update Successfully!");

    }

    function userView($id){

        $user = User::find($id);
        // $user = DB::table('users')->find($id);

        return view('user', compact('user'));
    }

    function userDelete($id){

         User::where('id', $id)->delete();
        //  DB::table('users')->where('id', $id)->delete();

         return redirect(route('home'))->with("success", "User Delete Successfully!");

    }
}
