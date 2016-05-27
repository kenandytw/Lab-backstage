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
use Response;
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

    public function contactstore(Request $request){
        $contact = new contact;
        $contact->Name    = $request->Name;
        $contact->Tel     = $request->Tel;
        $contact->EMail   = $request->EMail;
        $contact->Subject = $request->Subject;
        $contact->Content = $request->Content;
        $contact->Status  = 0;
        $contact->save();
        return Redirect::to("/dininginthedark/")->with('message','留言完成!');
    }

    public function ReOrderData(Request $request){
        $now = Carbon::now()->toDateString();
        $count = orderlist::whereRaw("DATE_FORMAT(created_at,'%Y-%m-%d')='{$now}'")->max('SN');
        if($count>0){
            $count += 1;
        } else {
            $count = Carbon::now()->format('Ymd').'001';
        }
        //$count = str_pad($count,3,"0",STR_PAD_LEFT);
        $order = new orderlist;
        $order->Name   = $request->Name;
        $order->Tel    = $request->Tel;
        $order->EMail  = $request->EMail;
        $order->SN     = $count;
        $order->Notes  = $request->Notes;
        $order->Pay    = $request->Pay;
        $order->AID    = $request->AID;
        $order->Pople  = $request->Pople;
        if($order->Pay=='onsite') $order->Status = 'SUCCESS';
        $order->save();
        $OID = $order->OID;
        for($i=0;$i<$request->Pople;$i++){
            $pople = new pople;
            $pople->OID  = $OID;
            $pople->Meal = $request->input('Meal.'.$i);
            $pople->Sort = $i;
            $pople->save();
        }
        $time = time();
        $act = act::find($request->AID);
        $Amt  = $act->Card*$order->Pople;
        $CheckValue = strtoupper(hash("sha256", "HashKey=ybmYe0KpakHaNnkJGYUOLe7pLFfoPO9o&Amt={$Amt}&MerchantID=35699182&MerchantOrderNo={$count}&TimeStamp={$time}&Version=1.2&HashIV=Zvnev7DFskQfIbYo"));


        // 加入電子報
        $data = array(
            'email_address' => $request->EMail
        );
        $result = MC::checksub('0656269a9c',$data);
        $json = json_decode($result,true);
        if($json['status']==404){
            $data = array(
                'email_address' => $request->EMail,
                'status'        => 'subscribed',
                'merge_fields'  => array(
                    'FNAME' => $request->Name
                )
            );
            //訂閱的動作
            $rr = MC::subscribe('0656269a9c',$data);
        }

        return Response::json(array(
            'success'   => true,
            'TimeStamp' => $time,
            'SN'        => $count,
            'Amt'       => $Amt,
            'CheckValue'=> $CheckValue,
        ), 200);
    }

    public function getPayDone(Request $request){
        $obj = json_decode($request->JSONData);

        $result = json_decode($obj['Result']);
        $order = orderlist::where('SN',$result['MerchantOrderNo'])->first();
        $order->Status  = $obj['Status'];
        $order->Message = $obj['Message'];
        $order->Result  = $obj['Result'];
        $order->save();
        $success = true;
        return view('frontend.reservation',compact('success'));
    }

    public function GetAjaxData(Request $request){
    	if($request->ajax()){
    		if($request->has('act')){
    			switch ($request->act) {
    				case 'GetActByPople':
    					$act = act::whereRaw("(Pop-IFNULL((SELECT SUM(Pople) FROM(OrderLists) WHERE OrderLists.AID=Acts.AID AND Status='SUCCESS'),0))>".$request->Pople)
    						->select('ADay')->groupBy('ADay')->where('ADay','>=',Carbon::today())->get();
    					return $act->toJson();
    				break;
    				case 'GetActByDate':
    					$act = act::where('ADay',$request->Day)->select(DB::raw("(Pop-IFNULL((SELECT SUM(Pople) FROM(OrderLists) WHERE OrderLists.AID=Acts.AID AND Status='SUCCESS'),0)) AS Pople, ADay,AID,STime,ETime,One,Sp,Card,Money"))->get();
    					return $act->toJson();
    				break;
    			}
    		}
    	} else {
    		abort(404);
    	}
    }
}
