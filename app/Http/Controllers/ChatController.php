<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
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
         $data=["dssp"=>ChatModel::all()];    
         return view('InboxBoard',$data);
        //return view("UserBoard");
    }

}
