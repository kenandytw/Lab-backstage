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
use DB;
use App\model\contact;
use Carbon\Carbon;

class FrontendController extends Controller
{
	public function __construct(Request $request)
    {
        DB::enableQueryLog();
    }
    
	public function home(){
		return view('frontend.home');
	}

	public function about(){
		return view('frontend.about');
	}

	public function chef(){
		return view('frontend.chef');
	}

	public function rules(){
		return view('frontend.rules');
	}

	public function reservation(){
		return view('frontend.reservation');
	}

	public function contact(){
		return view('frontend.contact');
	}





    public function GetAjaxData(Request $request){
    	if($request->ajax()){
    		if($request->has('act')){
    			switch ($request->act) {
    				case 'GetActByPople':
    					$act = act::whereRaw('(Pop-IFNULL((SELECT SUM(Pople) FROM(Orderlists) WHERE Orderlists.AID=Acts.AID),0))>'.$request->Pople)
    						->select('ADay')->groupBy('ADay')->where('ADay','>=',Carbon::today())->get();
    					return $act->toJson();
    				break;
    				case 'GetActByDate':
    					$act = act::where('ADay',$request->Day)->select(DB::raw('(Pop-IFNULL((SELECT SUM(Pople) FROM(Orderlists) WHERE Orderlists.AID=Acts.AID),0)) AS Pople, ADay,AID,STime,ETime'))->get();
    					return $act->toJson();
    				break;
    			}
    		}
    	} else {
    		abort(404);
    	}
    }
}
