<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;
use Session;
use App\Admin;
use App\AdminsImage;

class AdminsController extends Controller
{
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         // we will create validation function here
        $this->validate($request,[
            'email'=> 'required',
            'password' => 'required',
            'fname'=> 'required',
            'lname' => 'required',
            'role'=> 'required',
        
        ]);

        $admin = new Admin;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->fname = $request->fname;
        $admin->lname = $request->lname;
        $admin->role = $request->role;

        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $request->file('image')->move(storage_path('app/admin/img'),$fileName);
        $admin->image = $fileName;
        AdminsImage::create([
                'admin_id' => $admin->id,
                'filename' => $fileName
            ]);     
        // save all dataqe
        $admin->save();
        return Response::json(array('success' => true, 'last_insert_id' => $admin->id), 200);
        //redirect page after save data
        return Redirect('admin')->with('message','data hasbeen updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
