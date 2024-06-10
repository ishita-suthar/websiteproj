<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\mym;

class cro extends Controller
{
    //
    function product(request $set){
        $im=$set->file("pimg")->getClientOriginalName();
        $set->pimg->move(public_path('img'),$im);
        $pn=$set->get("pname");
        $sc=$set->get("scategory");
        $pp=$set->get("ppri");

        $sql=new mym();
        $sql->image=$im;
        $sql->name=$pn;
        $sql->category=$sc;
        $sql->price=$pp;

        $sql->save();
        return redirect()->back()->with('msg','new data add');
    }

    function show(){
        $sql=mym::all();
        return view('show',['in'=>$sql]);
    }

    function dele($id){
        $sql=mym::find($id);
        $sql->delete();
        return redirect('show');
    }
    function upin($id){
        $sql=mym::find($id);
        return view ('update',['sh'=>$sql]);
    }

    function upshow(Request $req){
$sql=mym::find($req->id);
        $aa=$req->file("pimg")->getClientOriginalName();
        $req->pimg->move(public_path('img'),$aa);
        $sql->image=$req->pimg->getClientOriginalName();
        $sql->name=$req->pname;
        $sql->category=$req->scategory;
        $sql->price=$req->ppri;

        $sql->save();
        return redirect('show');
    }


    function webshow(){
        $sql = mym::query()->where('category','Sunscreen')->get();
        $sql1 = mym::query()->where('category','Moisturizer')->get();
        $sql2 = mym::query()->where('category','bodylotion')->get();
        $sql3 = mym::query()->where('category','clesanser')->get();
        $sql4 = mym::all();
        return view('index',compact('sql','sql1','sql2','sql3','sql4'));
    
    }
    
    function cart($id){
        $sql=mym::find($id);
        return view ('shop',['sh'=>$sql]);
    }
   

    function search(Request $req){
        $search=$req->get('sea');
        
        $sql=mym::query()->where('productname','LIKE',"%{$search}%")->get();
        $sql1=mym::query()->where('productname','LIKE',"%{$search}%")->get();
        $sql2=mym::query()->where('productname','LIKE',"%{$search}%")->get();
        $sql3=mym::query()->where('productname','LIKE',"%{$search}%")->get();
        $sql4=mym::query()->where('productname','LIKE',"%{$search}%")->get();
        return view('index',compact('sql','sql1','sql2','sql3','sql4'));
        
        }
}
