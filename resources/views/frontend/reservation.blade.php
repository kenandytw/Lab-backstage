@extends('frontend.layout')


@section('content')
<!-- privacy lightbox -->
        <div class="lightbox">

            <div class="lightbox-container">
                <div class="lightbox-header">
                    驚喜製造有限公司隱私條款
                </div>

                <div class="lightbox-content">
                    <p>
                        「驚喜電⼦報」由驚喜製造有限公司提供。「驚喜電子報」非常重視讀者的隱私權，因此制訂了隱私權保護政策，訂閱者可參考下列隱私權保護政策的內容。當您按下「我已閱讀並同意隱私條款」按鈕時，既表示您閱讀並同意以下條款，並願意以電子文件之方式行使法律所賦予同意之權利，並具有書面同意之效果。
                    </p>
                    <h1>
                        壹、個人資料之安全
                    </h1>

                    <p>
                        保護消費者的個人隱私是「驚喜電子報」重要的經營理念，在未經讀者同意之下，「驚喜電子報」絕不會將消費者的個人資料提供予任何與本網站服務無關之第三人。請妥善保密讀者本人的網路密碼及個人資料，不要將任何個人資料，尤其是網路密碼提供給任何人。在讀者使用完本網站所提供的各項服務功能後，務必記得登出帳戶，若讀者是與他人共享電腦或使用公共電腦，切記要關閉瀏覽器視窗。
                    </p>

                    <h1>
                        貳、個人資料的利用
                    </h1>
                    <p> 
                        一 、「驚喜電子報」所取得的個人資料，僅用在「驚喜電子報」及其委任處理營業相關事務之第三人間，為進行聯合銷售交互運用予揭露外，不會再向任何其他第三人揭露、出售或轉讓。
                    </p>
                    <p>
                        二、利用之目的例示如下：
                        <br><br>
                        (1) 不定時提供宣傳廣告或行銷等各種電子雜誌等資訊，透過電子郵件來提供與服務有關之資訊。<br><br>
                        (2) 回覆讀者之詢問：針對會員透過電子郵件向「驚喜電子報」所提出之詢問進行回覆。<br><br>
                        (3) 其他業務附隨之事項：附隨於上述 (1)(2)之利用目的而為「驚喜電子報」 提供服務所必要之使用。<br><br>
                        (4) 其他：
                        提供個別服務時，亦可能於上述規定之目的以外，利用個人資料。此時將在該個別服務之網頁載明其要旨。

                    </p>
                    <h1>
                        三、資料安全
                    </h1>
                    <p>
                        為保障讀者的隱私及安全，讀者的「驚喜電子報」將盡力以合理之技術及程序，保障所有個人資料之安全。
                    </p>
                    <h2>
                        【 資訊安全聲明 】
                    </h2>


                    <h1>壹、個⼈人資料查詢或更正的⽅方式</h1>

                    <p>
                        一、訂閱者對於其個人資料，有查詢及閱覽、補充或更正、停止電腦處理及利用、刪除等需求時，可以與「驚喜電子報」連絡，「驚喜電子報」將迅速進行處理。
                    </p>

                    <p>
                        二、 Cookie <br>
                        為了便利訂閱者使用，「驚喜電子報」會使用cookie技術，以便於提供訂閱者所需要的服務；cookie是網站伺服器用來和訂閱者瀏覽器進行溝通的一種技術，它可能在訂閱者的電腦中隨機儲存字串，用以辨識區別使用者。
                    </p>
                    <h1>貳、隱私權保護政策修訂</h1>    
                    <p>
                        隨著市場環境的改變本公司 有權不定時修訂網站政策。訂閱者應隨時注意更新之訊息，假若訂閱者對「驚喜電子報」隱私權聲明、或與個人資料有關之相關事項有任何疑問，可以利用電子郵件與「驚喜電子報」聯絡。
                    </p>    
                </div>

                <div class="lightbox-cancel-container">
                    <a class="privacy-link" href="#">
                        <div class="btn btn-standard">
                            我瞭解了！
                        </div>
                    </a>
                </div>
            </div>
        </div>
		<div class="section-02 reservation-section">
           
            <div class="reservation-nav">
                <ul>
                    <li class="active">
                        1
                    </li>
                    <li>
                        2
                    </li>
                    <li>
                        3
                    </li>
                    <li>
                        4
                    </li>
                    <li>
                        5
                    </li>
                </ul>
            </div>
           
            <div class="main-container" id="first-section">
                <p>
                    {{ trans('front.reservation.slug1title') }}
                </p>    
                {!! trans('front.reservation.slug1table') !!}
                <p style="margin-top:25px;">
                    <input id="agree" type="checkbox">
                    <label class="agree-check" for="agree"><span></span></label>
                    {{ trans('front.reservation.slug1agree') }}<a href="rules.html" target="_blank">{{ trans('front.reservation.slug1agrlink') }}</a>。
<span class="alert-wrap alert-show" id="agree-error" style="display: none;"><br /><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>{{ trans('front.reservation.slug1agAlert') }}</span>
                </p>
                <a href="javascript:;" id="first-btn">
                    <div class="btn btn-standard">
                        {{ trans('front.home.order') }}
                    </div>
                </a>
            </div>
            

            <div style="max-width:300px;display: none;" class="main-container" id="second-section">
                <table>
                    <tr>
                        <td>{{ trans('front.reservation.s2party') }}</td>
                    </tr>
                    <tr>
                        <td class="select-wrap">
                            <select name="Pople" id="Pople">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="display: none;" id="PopleAlert">
                        <td>
                            <span class="alert-wrap alert-show">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                {{ trans('front.reservation.s2partyalert') }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('front.reservation.s2date') }}</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <div class="input-group date form_date" id="form_date">
                                    <input class="form-control" size="14" type="text" name="ADay" id="ADay" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <span class="alert-wrap alert-show" style="color:#fff">
                        <i class="fa fa-exclamation-triangle"></i>
                            <span style="color:#81a7fd">藍色</span>為單人場次，<span style="color:#fa4b4b">紅色</span>為特別場次
                        </span>
                        </td>
                    </tr>
                    <!--tr>
                        <td>
                            <span class="alert-wrap alert-show">

                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                您選擇的日期訂位已滿
                            </span>
                        </td>
                    </tr-->
                    <tr>
                        <td>{{ trans('front.reservation.s2time') }}</td>
                    </tr>
                    <tr>
                        <td class="select-wrap">
                            <select name="AID" id="AID"></select>
                        </td>
                    </tr>
                    <tr style="display: none;" id="AIDAlert">
                        <td>
                            <span class="alert-wrap alert-show">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                {{ trans('front.reservation.s2timealert') }}
                            </span>
                        </td>
                    </tr>
                </table>
                <a href="javascript:;" id="second-btn-back"><div class="btn btn-standard">{{ trans('front.reservation.prev') }}</div></a>
                <a href="javascript:;" id="second-btn"><div class="btn btn-standard">{{ trans('front.reservation.next') }}</div></a>
            </div>
            
            <div style="max-width:300px;display: none;" class="main-container" id="third-section">
                <table>
                    <tr>
                        <td>＊{{ trans('front.reservation.Name') }}</td>
                    </tr>
                    <tr>
                        <td>
                           <input type="text" name="Name" id="Name">
                        </td>
                    </tr>
                    <tr style="display: none;" id="NameAlert">
                        <td>
                            <span class="alert-wrap alert-show">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                {{ trans('front.reservation.NameAlert') }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>＊{{ trans('front.reservation.Tel') }}</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="tel" name="Tel" id="Tel">
                        </td>
                    </tr>
                    <tr style="display: none;" id="TelAlert">
                        <td>
                            <span class="alert-wrap alert-show">

                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                {{ trans('front.reservation.TelAlert') }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>＊EMAIL</td>
                    </tr>
                    <tr>
                        <td>
                           <input type="email" name="EMail" id="EMail">
                        </td>
                    </tr>
                    <tr style="display: none;" id="EMailAlert">
                        <td>
                            <span class="alert-wrap alert-show">

                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                {{ trans('front.reservation.EMailAlert') }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>＊{{ trans('front.reservation.Main') }}</td>
                    </tr>
                    <tr>
                       <td>
                           <table id="MealTable"></table>
                       </td>
                    </tr>
                    <tr style="display: none;" id="MealAlert">
                        <td>
                            <span class="alert-wrap alert-show">

                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                請選擇主餐
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('front.reservation.Notes') }}</td>
                    </tr>
                    <tr>
                        <td>
                            <textarea rows="5" name="Notes" id="Notes"></textarea>
                        </td>
                    </tr>
                    {!! trans('front.reservation.slug3ex') !!}
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input id="privatecheck" type="checkbox">
                            <label class="agree-check" for="privatecheck"><span></span></label>
                            {!! trans('front.reservation.AgreeLink') !!}
                        </td>
                    </tr>
                    <tr style="display: none;" id="PrivateAlert">
                        <td>
                            <span class="alert-wrap alert-show">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                {{ trans('front.reservation.AgreeAlert') }}
                            </span>
                        </td>
                    </tr>
                </table>

                <a href="javascript:;" id="third-btn-back"><div class="btn btn-standard">{{ trans('front.reservation.prev') }}</div></a>
                <a href="javascript:;" id="third-btn"><div class="btn btn-standard">{{ trans('front.reservation.next') }}</div></a>
            </div>
            
            
            <div class="main-container" id="fourth-section" style="display: none;">
                <p style="max-width:350px;margin:0 auto;">
                    {{ trans('front.reservation.MakeSure') }}
                </p>
                <table class="confirm-table">
                    <tr>
                        <td>{{ trans('front.reservation.s2party') }}：</td>
                        <th id="PopCheck"></th>
                    </tr>
                    <tr>
                        <td>{{ trans('front.reservation.s2date') }}：</td>
                        <th id="ADayCheck"></th>
                    </tr>
                    <tr>
                        <td>{{ trans('front.reservation.s2time') }}：</td>
                        <th id="STimeCheck"></th>
                    </tr>
                    <tr>
                        <td>{{ trans('front.reservation.Name') }}：</td>
                        <th id="NameCheck"></th>
                    </tr>
                    <tr>
                        <td>{{ trans('front.reservation.Tel') }}：</td>
                        <th id="TelCheck"></th>
                    </tr>
                    <tr>
                        <td>Email：</td>
                        <th id="EMailCheck"></th>
                    </tr>
                    <tr>
                        <td>{{ trans('front.reservation.Main') }}：</td>
                        <th id="MealCheck"></th>
                    </tr>
                    <tr>
                        <td>{{ trans('front.reservation.Notes') }}：</td>
                        <th id="NotesCheck"></th>
                    </tr>
                </table>

                <a href="javascript:;" id="fourth-btn-back"><div style="height:54px;line-height:39px" class="btn btn-standard btn-pay btn-negative">{{ trans('front.reservation.prev') }}</div></a>
                <a href="javascript:;" id="fourth-btn-online"><div class="btn btn-standard btn-pay">{!! trans('front.reservation.Online') !!}<span id="CardView"></span></div></a>
                <a href="javascript:;" id="fourth-btn-onsite"><div class="btn btn-standard btn-pay btn-negative">{!! trans('front.reservation.Self') !!}<span id="MoneyView"></span></div></a>
            </div>
        

        	<div style="padding: 60px 15px 140px;display: none;" class="main-container" id="done-section">
                {!! trans('front.reservation.Done') !!}
            </div>
        </div>
<form name='Pay2go' method='post' id='Pay2Go' action='https://api.pay2go.com/MPG/mpg_gateway' data-backup='https://capi.pay2go.com/MPG/mpg_gateway'>
<input type="hidden" name="MerchantID" id="MerchantID" value="35699182">
<input type="hidden" name="RespondType" id="RespondType" value="JSON">
<input type="hidden" name="CheckValue" id="CheckValue">
<input type="hidden" name="TimeStamp" id="TimeStamp">
<input type="hidden" name="Version" id="Version" value="1.2">
<input type="hidden" name="LangType" id="LangType" value="zh-tw">
<input type="hidden" name="MerchantOrderNo" id="MerchantOrderNo">
<input type="hidden" name="Amt" id="Amt">
<input type="hidden" name="ItemDesc" id="ItemDesc">
<!--input type="hidden" name="TradeLimit" id="TradeLimit"-->
<input type="hidden" name="ReturnURL" id="ReturnURL" value="http://www.surpriselab.com.tw/dininginthedark/getPayDone">
<input type="hidden" name="ClientBackURL" id="ClientBackURL" value="http://www.surpriselab.com.tw/dininginthedark/">
<input type="hidden" name="Email" id="Email">
<input type="hidden" name="LoginType" id="LoginType" value="0">
<input type="hidden" name="OrderComment" id="OrderComment" value="無光晚餐">
</form>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script src="/backstage/plugins/moment/moment.js"></script>
<!--script src="/backstage/plugins/timepicker/bootstrap-timepicker.min.js"></script-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<style type="text/css">


.bootstrap-datetimepicker-widget table td.day {
  color:#000;
}
.bootstrap-datetimepicker-widget table td.disabled,
.bootstrap-datetimepicker-widget table td.disabled:hover {
  color: #F5F5F5;
}
</style>
    <script type="text/javascript">
var spday = [],oneday = [];
$('#form_date').datetimepicker({
    format: "YYYY-MM-DD",
    minDate:'{{ Carbon\Carbon::today()->format('Y-m-d') }}',
    maxDate:'{{ config('setting.enddate') }}',
    daysOfWeekDisabled: [1],
    ignoreReadonly:true,
}).on('dp.change',function(event){
    $.get('/GetAjaxData',{'act':'GetActByDate','Day':event.date.format('YYYY-MM-DD')},function(data){
        $('#AID option').remove();
        for(i=0;i<data.length;i++){
            $('#AID').append('<option value="'+data[i].AID+'" data-pople="'+data[i].Pople+'" data-one="'+data[i].One+'" data-sp="'+data[i].Sp+'" data-card="'+data[i].Card+'" data-money="'+data[i].Money+'">'+data[i].STime+'-'+data[i].ETime+'</option>');
        }
        if($('#AID').html()==''){ $('#AID').append('<option value="0">此日期無時段可供選擇</option>'); }
    },'json');
}).on('dp.show',function(event){
    if(spday.length>0){
        for(i=0;i<spday.length;i++) $('.table-condensed tbody').find('[data-day="'+spday[i]+'"]').css('color','#F00');
    }
    if(oneday.length>0){
        for(i=0;i<oneday.length;i++) $('.table-condensed tbody').find('[data-day="'+oneday[i]+'"]').css('color','#00F');
        //$('.table-condensed tbody').find('[data-day="06/02/2016"]').css('color','#F00');
    }
});
$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var showdate = [];
    // 第一步
    $('#first-btn').bind('click',function(){
        console.log('');
        if($('#agree').prop('checked')){
            $('#agree-error').hide();
            ChangeSectionNav('second','first',1);
        } else {
            $('#agree-error').show();
        }
    });
    // 第二步
    $('#second-btn-back').bind('click',function(){
        ChangeSectionNav('first','second',0);
    });
    $('#second-btn').bind('click',function(){
        // 驗證選項
        var GoNext = 0;
        if($('#Pople').val()==0){
            $('#PopleAlert').show(); GoNext++;
        } else {
            $('#PopleAlert').hide();
        }
        if($('#AID').val()==0 || $('#AID option:selected').data('pople')<$('#Pople').val() || $('#AID').val()==null){
            $('#AIDAlert').show(); GoNext++;
        } else {
            $('#AIDAlert').hide();
        }
        if(GoNext==0){
            // creat table 
            var html = '<tr><td></td><th>葷食</th><th>素食</th></tr>';
            for(i=0;i<$('#Pople').val();i++){
                var Num = i+1;
                html += '<tr><td>顧客'+Num+'</td><th><input id="Pople_H'+Num+'" name="Pople['+Num+']" checked value="Hunsi" type="radio"><label for="Pople_H'+Num+'"><span></span></label></th><th><input id="Pople_V'+Num+'" name="Pople['+Num+']" type="radio" value="Vegetarian"><label for="Pople_V'+Num+'"><span></span></label></th></tr>';
            }
            $('#MealTable').html(html);
            ChangeSectionNav('third','second',2);
        }
    });

    // 第三步
    $('#third-btn-back').bind('click',function(){
        ChangeSectionNav('second','third',1);
    });
    $('#third-btn').bind('click',function(){
        // 驗證資料
        var GoNext = 0;
        if($('#Name').val()==''){ $('#NameAlert').show(); GoNext++; } else { $('#NameAlert').hide(); }
        if(validateTel($('#Tel').val())){ $('#TelAlert').show(); GoNext++; } else { $('#TelAlert').hide(); }
        if(!validateEmail($('#EMail').val())){ $('#EMailAlert').show(); GoNext++; } else { $('#EMailAlert').hide(); }
        if(!$('#privatecheck').prop('checked')){ $('#PrivateAlert').show(); GoNext++; } else { $('#PrivateAlert').hide(); }
        if(GoNext==0){
            $('#PopCheck').text($('#Pople').val());
            $('#ADayCheck').text($('#ADay').val());
            $('#STimeCheck').text($('#AID option:selected').text());
            $('#NameCheck').text($('#Name').val());
            $('#TelCheck').text($('#Tel').val());
            $('#EMailCheck').text($('#EMail').val());
            var text = '';
            for(i=0;i<$('input[value=Hunsi]').length;i++){
                text += text=='' ? '' : '/';
                if($('#Pople_H'+i).prop('checked')){
                    text += '葷';
                } else {
                    text += '素';
                }
            }
            $('#MealCheck').text(text);
            $('#NotesCheck').text($('#Notes').val());
            $('#MoneyView').text($('#AID option:selected').data('money'));
            $('#CardView').text($('#AID option:selected').data('card'));
            ChangeSectionNav('fourth','third',3);
        }
    });

    // 第四步
    $('#fourth-btn-back').bind('click',function(){
        ChangeSectionNav('third','fourth',2);
    });
    $('#fourth-btn-onsite').bind('click',function(){
        // 送出資料
        SendOrderData('onsite');
    });
    $('#fourth-btn-online').bind('click',function(){
        // 轉到金流
        SendOrderData('online');
    });
    //$('#first-section').val();

    
    //$('#second-section,#third-section,#fourth-section,#done-section').hide();
    $('#Pople').bind('change',function(){
        var val = $(this).val();
        $('#AID option').remove();
        $.get('/GetAjaxData',{'act':'GetActByPople','Pople':val},function(data){
            var nowdata = [],spday = [],oneday = [];
            for(i=0;i<data.length;i++){
                nowdata.push(data[i].ADay.replace(' 00:00:00',''));
                var tmp = data[i].ADay.replace(' 00:00:00','');
                tmp = tmp.replace('2016-','');
                tmp = tmp.replace('-','/');
                tmp = tmp+'/2016';
                if(data[i].Sp) spday.push(tmp);
                if(data[i].One) oneday.push(tmp);
            }
            if(nowdata.length>0){
                $('#form_date').data("DateTimePicker").enabledDates(nowdata);
                $('#form_date').data("DateTimePicker").date(nowdata[0]);
                showdate = nowdata;
            } else {
                $('#form_date').data("DateTimePicker").enabledDates(['{{ Carbon\Carbon::today()->format('Y-m-d') }}']);
            }
        },'json');
    });
@if(!empty($success) && $success) ChangeSectionNav('done','first',4); @endif

});
function SendOrderData(Pay){
    var Meal = [];
    for(i=0;i<$('input[value=Hunsi]').length;i++){
        Meal[i] = $('#Pople_H'+i).prop('checked') ? 'Hunsi' : 'Vegetarian';
    }
    var obj = {
        'Name'  : $('#Name').val(),
        'Tel'   : $('#Tel').val(),
        'EMail' : $('#EMail').val(),
        'Notes' : $('#Notes').val(),
        'AID'   : $('#AID').val(),
        'Pople' : $('#Pople').val(),
        'Meal'  : Meal,
        'Pay'   : Pay,
        'Lng'   : ''
    };
    $.post('/dininginthedark/ReOrderData',obj,function(data){
        if(data.success==true){
            if(Pay=='onsite'){ ChangeSectionNav('done','fourth',4); } else if(Pay=='online'){
                $('#Email').val($('#EMail').val());
                $('#CheckValue').val(data.CheckValue);
                $('#TimeStamp').val(data.TimeStamp);
                $('#MerchantOrderNo').val(data.SN);
                $('#Amt').val(data.Amt);
                $('#ItemDesc').val('無光晚餐'+$('#Pople').val()+'人套餐');
                /*console.log('test');
                $('#Pay2go').submit();*/
                document.forms["Pay2go"].submit();
            }
        }
    },'json');
}





function ChangeSectionNav(show,hide,nav){
    $('.reservation-nav ul li').removeClass('active');
    $('.reservation-nav ul li:eq('+nav+')').addClass('active');
    $('#'+hide+'-section').hide();
    $('#'+show+'-section').show();
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validateTel(tel){
    if(tel==''){ return true; } else if(tel.length<9){ return true; } else if(tel.length>12) { return true; } else { return false; }
}
    </script>
@endsection