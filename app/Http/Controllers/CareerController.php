<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function index(Request $req){
        $career = Career::all();
        return  view('display')->with("career",$career);
    }

    public function add(Request $req){
        $career = new Career;
        $career->name = $req->name;
        $career->email = $req->email;
        $career->frole = $req->frole;
        $career->nrole = $req->nrole;
        $career->save();
        return redirect()->back();
    }


}
