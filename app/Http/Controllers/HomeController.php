<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users/home');
    }

    public function updateProfile(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
        ]);

        # check if user profile image is null, then validate
        if (auth()->user()->profile_img == null) {
            $validate_image = Validator::make($request->all(), [
                'profile_image' => ['required', 'image', 'max:1000']

            ]);

            # check if their is any error in image validation
            if ($validate_image->fails()) {
                return response()->json(['code' => 400, 'msg' => $validate_image->errors()->first()]);
            }
        }

        # check if their is any error
        if ($validated->fails()) {
            return response()->json(['code' => 400, 'msg' => $validated->errors()->first()]);
        }

        # check if the request has profile image
        if ($request->hasFile('profile_image')) {
            $imagePath = 'storage/'.auth()->user()->profile_img;

           
            # check whether the image exists in the directory
            if (File::exists($imagePath)) {
                # delete image
                File::delete($imagePath);
            }

           $profile_img = $request->profile_image->store('profile_images', 'public');
                    
        }

        # update the user info
        Auth::user()->update([
            'name' => $request->name,
            'profile_img' => $profile_img ?? Auth::user()->profile_img
            
        ]);
     


        return response()->json(['code' => 200, 'msg' => 'profile updated successfully.']);
    }
}