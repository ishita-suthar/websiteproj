<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\mo1;

class cor extends Controller
{
    //

    function product(request $set){
        $im=$set->file("pimg")->getClientOriginalName();
        $set->pimg->move(public_path('img'),$im);
        $pn=$set->get("pname");
        $pp=$set->get("ppri");

        $sql=new mo1();
        $sql->image=$im;
        $sql->name=$pn;
        $sql->price=$pp;

        $sql->save();
        return redirect('ins');
    }

    function show(){
        $sql=mo1::all();
        return view('show',['in'=>$sql]);
    }

    function dele($id){
        $sql=mo1::find($id);
        $sql->delete();
        return redirect('show');
    }

    function upin($id){
        $sql=mo1::find($id);
        return view ('update',['sh'=>$sql]);
    }

    function upshow(Request $req){
$sql=mo1::find($req->id);
        $aa=$req->file("pimg")->getClientOriginalName();
        $req->pimg->move(public_path('img'),$aa);
        $sql->image=$req->pimg->getClientOriginalName();
        $sql->name=$req->pname;
        $sql->price=$req->ppri;

        $sql->save();
        return redirect('show');
    }

    function webshow(){
        $sql=mo1::all();
        return view('index',['data'=>$sql]);
    }
}
