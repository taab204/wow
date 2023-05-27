<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function forget_password()
    {
        return view('admin.forget_password');
    }

    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $admin_data = Admin::where('email',$request->email)->first();
        if(!$admin_data) {
            return redirect()->back()->with('error','Email no encontrado!');
        }

        $token = hash('sha256',time());

        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Restablecer su contraseña de '.$request->email;
        $message = 'Estimado Usuario: ' .$request->email. '<br> Por favor, haga click en el siguiente enlace: <br>';
        $message .= '<a href="'.$reset_link.'">Click Aqui</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->route('admin_login')->with('success','Por favor revise su correo electrónico y siga los pasos.');

    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ];

        if(Auth::guard('admin')->attempt($credential)) {
            if(Auth::guard('admin')->user()->rol == 'Administrador') {
                return redirect()->route('admin_home');
            }
            if(Auth::guard('admin')->user()->rol == 'Backoffice') {
                return redirect()->route('admin_home_backoffice');
            }
            if(Auth::guard('admin')->user()->rol == 'Supervisor-Backoffice') {
                return redirect()->route('admin_home_backoffice');
            }
            if(Auth::guard('admin')->user()->rol == 'Supervisor-Tecnico') {
                return redirect()->route('admin_home');
            }
            if(Auth::guard('admin')->user()->rol == 'Asistente') {
                return redirect()->route('admin_home');
            }
            if(Auth::guard('admin')->user()->rol == 'Tecnico') {
                return redirect()->route('admin_home');
            }
            if(Auth::guard('admin')->user()->rol == 'Supervisor-Asesor') {
                return redirect()->route('admin_home');
            }
            if(Auth::guard('admin')->user()->rol == 'AsesorCall') {
                return redirect()->route('admin_home');
            }
            if(Auth::guard('admin')->user()->rol == 'AsesorCampo') {
                return redirect()->route('admin_home');
            }
            if(Auth::guard('admin')->user()->rol == 'Tesoreria') {
                return redirect()->route('admin_home_tesoreria');
            }
            if(Auth::guard('admin')->user()->rol == 'Almacen') {
                return redirect()->route('admin_home');
            }
            if(Auth::guard('admin')->user()->rol == 'Supervisor-Ventas') {
                return redirect()->route('admin_home');
            }
            else{
                return redirect()->route('admin_home');
            }
        } else {
            return redirect()->route('admin_login')->with('error', 'VERIFICAR, sus credenciales son incorrectos!');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
    }

    public function reset_password($token,$email)
    {
        $admin_data = Admin::where('token',$token)->where('email',$email)->first();
        if(!$admin_data) {
            return redirect()->route('admin_login');
        }

        return view('admin.reset_password', compact('token','email'));

    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        $admin_data = Admin::where('token',$request->token)->where('email',$request->email)->first();

        $admin_data->password = Hash::make($request->password);
        $admin_data->token = '';
        $admin_data->update();

        return redirect()->route('admin_login')->with('success', 'La contraseña se restableció con éxito');

    }


}
