<?php

namespace App\Http\Controllers;

use App\Http\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\account;
use App\Models\Content;

class SessionController extends Controller
{

    public function index()
    {
        $contents = Content::get();
        return view("index", compact('contents'));
    }

    public function login()
    {
        return view("login");
    }

    public function adminview()
    {
        $content = Content::paginate(15);
        session_start();
        if (isset($_SESSION['username'])) {
            return view("CRUD.adminview", compact('content'));
        } else {
            return redirect('/login');
        }
    }

    public function auth(Request $request)
    {
        $akun = account::get();
        foreach ($akun as $key => $value) {
            if ($request->username == $value['username'] && $request->password == $value['password']) {

                session_start();
                $_SESSION['name'] = $value['name'];
                $_SESSION['username'] = $value['username'];
                return redirect('adminview')->with('msg', [
                    'type' => 'success',
                    'msg' => "Login Berhasil"

                ]);
            } else {
                return redirect('login')->with('msg', [
                    'type' => 'danger',
                    'msg' => 'username atau password salah'
                ]);
            }
        }
    }

    public function  showfiltered()
    {
        return view('Process.showfiltered');
    }

    public function showdetail($id)
    {
        $content = Content::findorFail($id);

        return view('Process.showdetail', compact('content'));
    }

    public function processFilterProgramming(Request $request)
    {

        $location = $request->input('Lokasi');

        $filteredContents = Content::where('Tipe', 'programming')
            ->where('lokasi', $location)
            ->get();

        return view('Process.showfiltered', compact('filteredContents'));
    }

    public function processFilterBahasaInggris(Request $request)
    {
        $location = $request->input('Lokasi');

        $filteredContents = Content::where('Tipe', 'English')
            ->where('lokasi', $location)
            ->get();

        return view('Process.showfiltered', compact('filteredContents'));
    }
}
