<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\DataTables\UsersDataTable;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTable $dataTable)
    {
        // return view('users', [
        //     'users' => User::orderBy('id', 'asc')->get(),
        //     'roles' => Role::orderBy('id', 'desc')->get(),
        // ]);
        return $dataTable->render('users', [
                'users' => User::orderBy('id', 'asc')->get(),
                'roles' => Role::orderBy('id', 'desc')->get(),
            ]);
    }

     /**
     * Display a listing of the resource. (API)
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $users = User::orderBy('id', 'asc')->with('role')->get();

        return Datatables::of($users)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<button type="button" class="btn btn-alt-info" data-toggle="modal" data-target="#modal-extra-large">Launch Modal</button>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
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
        $this->validateArticle();

        User::create([
            'first_name'    =>  $request->input('first_name'),
            'last_name'     =>  $request->input('last_name'),
            'role_id'       =>  $request->input('role'),
            'job_title'       =>  $request->input('job_title'),
            'email'         =>  $request->input('email'),
            'password'      =>  Hash::make($request->input('password') ?? '12345678'),
            'company_id'    =>  Auth::user()->company_id,
        ]);

        return redirect(route('users.index'));
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

    public function validateArticle() {
        return request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => 'required',
            'job_title' => 'required',
            'password' => ['nullable'],
        ]);
    }
}
