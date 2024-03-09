<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;

use App\User;
use App\UserAttendant as Model;
use DB;
use Illuminate\Http\Request;

class AttendantController extends Controller{

    public function index(Request $request)
    {
        $objDatas =  Model::with("User")->paginate(15);
        return view('user_attendant.index', compact('objDatas'));
    }

    public function create(Request $request)
    {
        $objUsers = User::where('status', "active")->get();
        $objDatas =  Model::with("User")->paginate();
        return view('user_attendant.create_edit', compact('objUsers','objDatas'));
    }
    
    public function store(Request $request)
    {
        $objModel = new Model;
        $objModel->user_id = $request->get("user_id");
        $objModel->started_at = $request->get("started_at");
        $objModel->ended_at = $request->get("ended_at");
        $objModel->status = $request->get("status");
        $objModel->save();
        return redirect(url("attendant"));
    }
    
    public function edit(Request $request)
    {
        $id = $request->route('id');
        $objUsers = User::where('status', "active")->get();
        $objData =  Model::where("id", $id)->with("User")->first();
        return view('user_attendant.create_edit', compact('objUsers','objData'));
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $objModel =  Model::find($id);
      
        $objModel->user_id = $request->get("user_id");
        $objModel->started_at = $request->get("started_at");
        $objModel->ended_at = $request->get("ended_at");
        $objModel->status = $request->get("status");
        $objModel->save();
        return redirect(url("attendant"));
    }

    public function delete(Request $request)
    {
        $id = $request->route('id');
        $objModel =  Model::find($id);
        $objModel->delete();
    }
    
}