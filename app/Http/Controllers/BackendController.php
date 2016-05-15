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
        $act->ADay  = $input['ADay'];
        $act->Pop   = $input['Pop'];
        $act->STime = $input['STime'];
        $act->ETime = $input['ETime'];
        $act->save();
        return redirect('acts');
    }

    /*
    報名清單
    */
    public function poples(){

    }
    public function pople(){

    }

    /*
    contact
    */
    public function contacts(){

    }
    public function contact(){

    }

}
