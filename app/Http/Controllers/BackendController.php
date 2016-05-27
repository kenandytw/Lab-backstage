<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MC;
use App\Http\Requests;
use App\model\email;
use App\Http\Controllers\Controller;
use App\model\act;
use App\model\orderlist;
use App\model\pople;
use App\model\contact;
use Carbon\Carbon;

class BackendController extends Controller
{
    protected $user; //protected 是保護的變數,意思是這變數只能在這個 class使用
    public function __construct(Request $request)
    {
        //驚嘆號是否定判斷的意思
        if(!$request->session()->has('key')){
            return redirect('login')->send();
        } else {
            $this->user = $request->session()->get('key');
        }
    }

    /*
    活動
    */
    public function acts(Request $request){
        if($request->has('filter') && $request->filter=='feature'){
            $acts = act::latest('updated_at')->where('ADay','>=',Carbon::today())->get();
        } elseif($request->has('filter') && $request->filter=='old'){
            $acts = act::orderBy('ADay', 'ASC')->where('ADay','<',Carbon::today())->get();
        } else {
            $acts = act::latest('updated_at')->get();
        }
        return view('backstage.act.list',compact('acts','request'));
    }
    public function act(Request $request){
        $act = collect();
        if($request->has('AID')){
            $act = act::find($request->AID);
        }
        if($request->ajax()){

        } else {
            return view('backstage.act.edit',compact('act'));
        }
    }
    public function actstore(Request $request){
        $input = $request->all();
        $act = act::firstOrCreate(['AID'=>$input['AID']]);
        if(orderlist::where('Status','SUCCESS')->where('AID',$input['AID'])->sum('Pople')>0){
            $act->Pop   = $input['Pop'];
        } else {
            $act->ADay  = $input['ADay'];
            $act->Pop   = $input['Pop'];
            $act->STime = $input['STime'];
            $act->ETime = $input['ETime'];
            $act->One   = $request->has('One') ? $input['One'] : 0;
            $act->Sp    = $request->has('Sp') ? $input['Sp'] : 0;
            $act->Card  = $input['Card'];
            $act->Money = $input['Money'];
        }
        $act->save();
        return redirect('acts');
    }

    public function actdelete(Request $request,$aid){

        act::where('AID', $aid)->delete();
        orderlist::where('AID',$aid)->delete();

        return redirect()->back();
    }

    /*
    報名清單
    */
    public function orders(Request $request,$aid){
        $orders = orderlist::latest('updated_at')->where('AID',$aid)->get();
        $act = act::find($aid);
        return view('backstage.order.list',compact('orders','act'));
    }
    public function order(Request $request,$aid,$oid){
        $order = orderlist::find($oid);
        return view('backstage.order.edit',compact('order'));
    }
    public function orderstore(Request $request){
        $input = $request->all();
        $order = orderlist::find($input['OID']);
        $order->PS = $input['PS'];
        if($request->has('Cancel') && $input['Cancel']==1){
            $order->Status = 'Cancel';
        }
        $order->save();
        return redirect("/act/{$input['AID']}/orders");
    }

    /*
    contact
    */
    public function contacts(Request $request){
        $contacts = contact::latest('updated_at')->get();
        return view('backstage.contact.list',compact('contacts'));
    }
    public function contact(Request $request,$cid){
        $contact = contact::find($cid);
        return view('backstage.contact.edit',compact('contact'));
    }
    public function contactstore(Request $request){
        $input = $request->all();
        $contact = contact::find($input['CID']);
        $contact->Status = $input['Status'];
        $contact->Notes  = $input['Notes'];
        $contact->save(); 
        return redirect('contacts');
    }

}
