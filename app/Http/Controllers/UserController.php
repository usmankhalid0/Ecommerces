<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use App\Models\User_block ;
use Illuminate\Support\Facades\Session ;
use Yajra\DataTables\Facades\DataTables;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request)
    {
        if ($request->ajax()) {
            $data = User::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-primary btn-sm editBtn">Edit</a>';
                    $deleteBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteBtn">Delete</a>';
                    $blockBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-warning btn-sm blockBtn">Block</a>';
                    $unblockBtn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-warning btn-sm blockBtn disabled">UnBlock</a>';
        
                    return $editBtn . ' ' . $deleteBtn . ' ' . $blockBtn . ' ' . $unblockBtn;
                })
                ->addColumn('checkbox', '<input type="checkbox" name="users_checkbox[]" class="users_checkbox" value="{{$id}}" />')
                ->rawColumns(['checkbox','action'])
                ->make(true);
        }
        
    return view('users.index');
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
        $result = User::create([
            'name'=>$request->name ,
            'email'=>$request->email,
            'password'=>$request->password ,
        ]);
        $result1 = User_block::create([
            'blockStatus' => 0,
            'user_id' => $result->id ,
        ]);
        $flag = 0 ;
        if($result && $result1)
        {
            $flag = 1 ;
        //   return redirect()->back()->with('msg', 'Data entered successfully');
        }else{
            $flag = 0 ;
        //     return  redirect()->back()->with('msg', 'Data are entered successfully');
        }
        return $flag;
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
       $data =  User::find($id);
       return $data;
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
