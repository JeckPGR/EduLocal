<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function create()
    {
        return view("CRUD.create"); // ke page create
    }

    public function update($id)
    {
        $content = Content::findOrFail($id);
        return view("CRUD.update", compact('content')); // ke page update
    }

    public function edit(Request $request, $id)
    {
        $content = Content::findOrFail($id);
        $content->update($request->all());

        return redirect("adminview")->with('action', [
            'success' => 'Content Updated successfully',
            'type' => 'success'
        ]);
        // pengupdatean
    }

    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('/login');
    }

    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect("adminview")->with('action', [
            'success' => 'Content Deleted successfully',
            'type' => 'danger'
        ]);
        //delete
    }

    public function store(Request $request)
    {
        $data = Content::create($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('dbimg/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }


        return redirect("adminview")->with('action', [
            'success' => 'Content Upload successfully',
            'type' => 'success'
        ]);

        //create
    }

    public function view($id)
    {
        $content = Content::findOrFail($id);
        return view("CRUD.read", compact('content'));
        //read
    }

    public function search(Request $request)
    {
        session_start();
        $query = request()->input('query');
        $content = Content::where('Nama', 'like', '%' . $query . '%')->paginate(15); // Adjust the number of items per page as needed
        return view("CRUD.adminview", compact('content'));
    }
}
