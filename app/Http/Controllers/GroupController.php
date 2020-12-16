<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
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
         $data=["dssp"=>GroupModel::all()];    
         return view('GroupBoard',$data);
        //return view("UserBoard");
    }
}
