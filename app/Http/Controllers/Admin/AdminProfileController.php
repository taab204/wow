<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile');
    }

    public function profile_submit(Request $request)
    {
        $admin_data = Admin::where('email',Auth::user()->email)->first();

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email'
        // ]);

        if($request->password!='') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);
            $admin_data->password = Hash::make($request->password);
        }

        if($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$admin_data->foto));

            $ext = $request->file('foto')->extension();
            $final_name =  time().'.'.$ext;


            $request->file('foto')->move(public_path('uploads/'),$final_name);

            $admin_data->foto = $final_name;
        }


        // $admin_data->name = strtoupper($request->name);
        // $admin_data->email = strtolower($request->email);
        $admin_data->update();

        return redirect()->back()->with('actualizo', 'La información del perfil se guardó correctamente.');
    }
}
