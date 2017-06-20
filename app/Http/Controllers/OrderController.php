<?php

namespace App\Http\Controllers;
use App\order;
use App\order_item;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request)
    {
       
        $create_order=new order;
        $create_order->email_id=$request->email_id;
        $create_order->status=$request->status;
        $create_order->save();
        
        $create_order_item=new order_item;
        $create_order_item->order_id=$create_order->id;
        $create_order_item->name=$request->name;
        $create_order_item->price=$request->price;
        $create_order_item->quantity=$request->quantity;
        $create_order_item->save();

        return json_encode(array('message'=>'inserted successfully','status_code'=>'200'));


        
    }

    public function update(Request $request,$id)
    {
    
        $update=order::find($id);
        $update->id=$request->id;
        $update->email_id=$request->email_id;
        $update->status=$request->status;
        $update->save();

        $view_order_item=order_item::all();
        $update_item=order_item::find($id);
        $update_item->order_id=$request->order_id;
        $update_item->name=$request->name;
        $update_item->price=$request->price;
        $update_item->quantity=$request->quantity;
        $update_item->save();
        return json_encode(array('message'=>'updated successfully','status_code'=>'200'));

    }

    public function cancel(Request $request,$id)
    {
        $cancel=order::find($id);
        $cancel->status="cancelled";
        $cancel->save();
        return json_encode(array('message'=>'successfully updated cancel in status','status_code'=>'200'));
    }

    public function payment(Request $request,$id)
    {
        $payment=order::find($id);
        $payment->status="created";
        $payment->save();
        return json_encode(array('message'=>'successfully updated payment in status','status_code'=>'200'));
    }

    public function get_id(Request $request,$id)
    {
        $view_order_id= order::find($id);
        $view_order_id->id=$request->id;
        return json_encode(array('message'=>'successfully updated payment in status','data'=>$view_order_id ,'status_code'=>'200'));
    
    }

    public function search(Request $request)
    {
        return "user";
    }

    public function today()
    {
        $today_order= order::whereDate('created_at', '=', date('Y-m-d'))->get();
        
         return json_encode(array('message'=>'success ',
            'data'=>$today_order,'status_code'=>'200'));
       
    }

}
