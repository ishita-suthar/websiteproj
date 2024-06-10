<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m2;

class myc extends Controller
{
    //
    function product(request $set){
        $im=$set->file("pimg")->getClientOriginalName();
        $set->pimg->move(public_path('img'),$im);
        $pn=$set->get("pname");
        $sc=$set->get("scategory");
        $pp=$set->get("ppri");

        $sql=new m2();
        $sql->productimage=$im;
        $sql->productname=$pn;
        $sql->category=$sc;
        $sql->price=$pp;

        $sql->save();
        return redirect('ins');
    }
    function show(){
        $sql=m2::all();
        return view('show',['in'=>$sql]);
    }

    function dele($id){
        $sql=m2::find($id);
        $sql->delete();
        return redirect('show');
    }

    function upin($id){
        $sql=m2::find($id);
        return view ('update',['sh'=>$sql]);
    }

    function upshow(Request $req){
$sql=m2::find($req->id);
        $aa=$req->file("pimg")->getClientOriginalName();
        $req->pimg->move(public_path('img'),$aa);
        $sql->productimage=$req->pimg->getClientOriginalName();
        $sql->productname=$req->pname;
        $sql->category=$req->scategory;
        $sql->price=$req->ppri;

        $sql->save();
        return redirect('show');
    }


    function webshow(){
        $sql=m2::all();
        return view('index',['data'=>$sql]);
    }
}
