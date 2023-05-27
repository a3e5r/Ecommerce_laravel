<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PhoneController extends Controller
{
    
    public function phoneType(){

$phone=DB::table('products')->get();

return view('phone',['phone'=>$phone]);

        
    }

     public function checkout($id){
        $phone=DB::table('products')
        ->where('id','=',$id)
        ->first();
        //dd($phone);
        return view('checkout',['phone'=>$phone]);
     }

public $Empid1='';

public function A1(Request $request){
    session::put('empid','1');
    return "The Vairable is stored";
}

public function A2(Request $request){
    $phone=DB::table('users')
    -> where ('id','=', $request->session()->get('empid'))
    ->get();
    dd($phone);
}

    public function invoice(Request $request){

       // dd($request);
        $row=[
            'name'=> $request->fullname,
            'country'=> $request->country,
            'addres'=> $request->address,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'date'=> $request->d,
            'productName'=> $request->productName,
            'total'=> $request->total,
        ];
       // dd($row);

       
        DB::table('invoice')->insert($row);
        $phone=DB::table('invoice')
        ->where('phone','=',$request->phone)
       ->first();


        return view('invoice', ['inv'=>$phone]);

        // $id = DB::table('invoice')->insertGetId($inv);
        // $invoice =DB::table('invoice')->where('id',$id)->first();
        // return view('invoice',compact('invoice'));
        
    }
    

   
    
    
}

// array
// $phone=[
        // [
        //     'code'=> '442222',
        //     'Name'=> 'Iphone 14 pro',
        //     'Display'=> 'This is Iphone card',
        //     'price'=> '3500 SR',
        //     'Tax'=> '0.15',
        //     'Total'=> '4025',
        //     'color'=> 'White',
        //     'img'=> 'iphone12.jpg'
        // ],
        
        // [
        //     'code'=> '42425',
        //     'Name'=> 'Sumsung s 23',
        //     'Display'=> 'This is samsung card',
        //     'price'=> '3500 SR',
        //     'Tax'=> '0.15',
        //     'Total'=> '4025',
        //     'color'=> 'Black',
        //     'img'=> 'samsungA.jpg'
        // ] ,
        // [
        //     'code'=> '42425',
        //     'Name'=> 'Nokia',
        //     'Display'=> 'This is Nokia card',
        //     'price'=> '3500 SR',
        //     'Tax'=> '0.15',
        //     'Total'=> '4025',
        //     'color'=> 'Black',
        //     'img'=> 'iphone14.jpg'
        // ] ,
        // [
        //     'code'=> '42425',
        //     'Name'=> 'Hawaui',
        //     'Display'=> 'This is Hawaui card',
        //     'price'=> '3500 SR',
        //     'Tax'=> '0.15',
        //     'Total'=> '644',
        //     'color'=> 'Black',
        //     'img'=> 'samsungA.jpg'
           
        // ] ,
        // ];

        // return view('phone',['phone'=>$phone]);
