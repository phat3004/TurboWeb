<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatGroupModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ChatGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = ["dssp"=>[DB::table('Users')->get()]];
        // return view('UserBoard',$data);
         $data=["dssp"=>ChatGroupModel::all()];    
         return view('InboxGroupBroad',$data);
        //return view("UserBoard");
    }
}
