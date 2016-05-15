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
                    無光晚餐是一場全新的冒險,請花些時間詳讀規則,讓您的體驗做足準備。
                </p>    
                <table>
                    <tr>
                        <td width="100px"> 每位單價：</td>
                        <td>1800+10% 線上預付</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>2500+10% 現場付現</td>
                    </tr>
                    <tr>
                        <td> 特別場次：</td>
                        <td>2200+10% 線上預付(未定)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>3000+10% 現場付現(未定)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="color:#777">將收一成服務費用<br>特別場次資訊請至EVENT頁面</td>
                    </tr>
                </table>
                <p style="margin-top:25px;">
                    <input id="agree" type="checkbox">
                    <label class="agree-check" for="agree"><span></span></label>
                    我已詳讀並遵守<a href="rules.html" target="_blank">無光晚餐訂位與用餐規則</a>。
<span class="alert-wrap alert-show" id="agree-error" style="display: none;"><br /><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>請先閱讀並同意我們的定位與用餐規則</span>
                </p>
                <a href="javascript:;" id="first-btn">
                    <div class="btn btn-standard">
                        立即訂位
                    </div>
                </a>
            </div>
            

            <div style="max-width:300px;display: none;" class="main-container" id="second-section">
                <table>
                    <tr>
                        <td>選擇人數</td>
                    </tr>
                    <tr>
                        <td class="select-wrap">
                            <select name="Pople" id="Pople">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="10">10</option>
                                <option value="12">12</option>
                            </select>
                        </td>
                    </tr>
                    <tr style="display: none;" id="PopleAlert">
                        <td>
                            <span class="alert-wrap alert-show">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                請選擇您的用餐人數
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>選擇日期</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <div class="input-group date form_date" id="form_date">
                                    <input class="form-control" size="14" type="text" value="" name="ADay" id="ADay" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>
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
                        <td>選擇時間</td>
                    </tr>
                    <tr>
                        <td class="select-wrap">
                            <select name="AID" id="AID"></select>
                        </td>
                    </tr>
                    <tr style="display: none;" id="AIDAlert">
                        <td>
                            <span class="alert-wrap">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                您選擇的時間訂位已滿
                            </span>
                        </td>
                    </tr>
                </table>
                <a href="javascript:;" id="second-btn-back"><div class="btn btn-standard">上一步</div></a>
                <a href="javascript:;" id="second-btn"><div class="btn btn-standard">下一步</div></a>
            </div>
            
            <div style="max-width:300px;display: none;" class="main-container" id="third-section">
                <table>
                    <tr>
                        <td>＊姓名</td>
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
                                請輸入您的姓名
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>＊電話</td>
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
                                請輸入正確電話
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
                                請輸入正確電子信箱
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>＊主餐選擇</td>
                    </tr>
                    <tr>
                       <td>
                           <table id="MealTable">
                               <tr>
                                   <td></td>
                                   <th>葷食</th>
                                   <th>素食</th>
                               </tr>
                               <tr class="not-active">
                                   <td>顧客1</td>
                                   <th>
                                       <input id='c1-1' name="c1" type="radio">
                                       <label for="c1-1"><span></span></label>
                                   </th>
                                   <th>
                                       <input id='c1-2' name="c1" type="radio">
                                       <label for="c1-2"><span></span></label>
                                   </th>
                               </tr>
                               <tr>
                                   <td>顧客2</td>
                                   <th>
                                       <input id='c2-1' name="c2" type="radio">
                                       <label for="c2-1"><span></span></label>
                                   </th>
                                   <th>
                                       <input id='c2-2' name="c2" type="radio">
                                       <label for="c2-2"><span></span></label>
                                   </th>
                               </tr>
                           </table>
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
                        <td>備註</td>
                    </tr>
                    <tr>
                        <td>
                            <textarea rows="5" name="Notes" id="Notes"></textarea>
                        </td>
                    </tr>
                   
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input id="privatecheck" type="checkbox">
                            <label class="agree-check" for="privatecheck"><span></span></label>
                            我已閱讀並同意<a class="privacy-link" href="#">隱私條款</a>
                        </td>
                    </tr>
                    <tr style="display: none;" id="PrivateAlert">
                        <td>
                            <span class="alert-wrap alert-show">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                請確認您已閱讀隱私條款
                            </span>
                        </td>
                    </tr>
                </table>

                <a href="javascript:;" id="third-btn-back"><div class="btn btn-standard">上一步</div></a>
                <a href="javascript:;" id="third-btn"><div class="btn btn-standard">下一步</div></a>
            </div>
            
            
            <div class="main-container" id="fourth-section" style="display: none;">
                <p style="max-width:350px;margin:0 auto;">
                    請確認您的訂位資料
                </p>
                <table class="confirm-table">
                    <tr>
                        <td>人數：</td>
                        <th id="PopCheck"></th>
                    </tr>
                    <tr>
                        <td>日期：</td>
                        <th id="ADayCheck"></th>
                    </tr>
                    <tr>
                        <td>時間：</td>
                        <th id="STimeCheck"></th>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <th id="NameCheck"></th>
                    </tr>
                    <tr>
                        <td>電話：</td>
                        <th id="TelCheck"></th>
                    </tr>
                    <tr>
                        <td>Email：</td>
                        <th id="EMailCheck"></th>
                    </tr>
                    <tr>
                        <td>主餐選擇：</td>
                        <th id="MealCheck"></th>
                    </tr>
                    <tr>
                        <td>備註：</td>
                        <th id="NotesCheck"></th>
                    </tr>
                </table>

                <a href="javascript:;" id="fourth-btn-back">
                    <div style="height:54px;line-height:39px" class="btn btn-standard btn-pay btn-negative">
                        上一步
                    </div>
                </a>
                <a href="javascript:;" id="fourth-btn-onsite">
                    <div class="btn btn-standard btn-pay btn-negative">
                        現場付費<br>NT 2500
                    </div>
                </a>
                <a href="javascript:;" id="fourth-btn-online">
                    <div class="btn btn-standard btn-pay">
                        線上付費<br>NT 1800
                    </div>
                </a>
            </div>
        

        	<div style="padding: 60px 15px 140px;display: none;" class="main-container" id="done-section">
               <h1>
                   恭喜您已完成訂位! 
                   <br>請至您的信箱確認訂位完成信件<div class="visible-xs"></div>及詳細的用餐規則
               </h1>
               <a href="about.html">
                   <div class="btn btn-standard">關於無光晚餐</div>    
               </a>
            </div>
        </div>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script src="/backstage/plugins/moment/moment.js"></script>
<script src="/backstage/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/build/css/bootstrap-datetimepicker.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
$('#form_date').datetimepicker({
    format: "YYYY-MM-DD",
    minDate:'{{ Carbon\Carbon::today()->format('Y-m-d') }}',
    maxDate:'{{ config('setting.enddate') }}',
    daysOfWeekDisabled: [1],
    ignoreReadonly:true
}).on('dp.change',function(event){
    $.get('/GetAjaxData',{'act':'GetActByDate','Day':event.date.format('YYYY-MM-DD')},function(data){
        $('#AID option').remove();
        for(i=0;i<data.length;i++){
            $('#AID').append('<option value="'+data[i].AID+'" data-pople="'+data[i].Pople+'">'+data[i].STime+'-'+data[i].ETime+'</option>');
        }
    },'json');
});
$(function(){
    var showdate = [];
    // 第一步
    $('#first-btn').bind('click',function(){
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
        if($('#AID').val()==0 || $('#AID:selected').data('Pople')<$('#Pople').val()){
            $('#AIDAlert').show(); GoNext++;
        } else {
            $('#AIDAlert').hide();
        }
        if(GoNext==0){
            // creat table 

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
            //$('#MealCheck').text($('#Name').val());
            $('#NotesCheck').text($('#Notes').val());
            ChangeSectionNav('fourth','third',3);
        }
    });

    // 第四步
    $('#fourth-btn-back').bind('click',function(){
        ChangeSectionNav('third','fourth',2);
    });
    $('#fourth-btn-onsite').bind('click',function(){
        // 送出資料

    });
    $('#fourth-btn-online').bind('click',function(){
        // 轉到金流

    });
    //$('#first-section').val();

    
    //$('#second-section,#third-section,#fourth-section,#done-section').hide();
    $('#Pople').bind('change',function(){
        var val = $(this).val();
        $.get('/GetAjaxData',{'act':'GetActByPople','Pople':val},function(data){
            var nowdata = [];
            for(i=0;i<data.length;i++){
                nowdata.push(data[i].ADay.replace(' 00:00:00',''));
            }
            if(nowdata.length>0){
                $('#form_date').data("DateTimePicker").enabledDates(nowdata);
                showdate = nowdata;
            }
        },'json');
    });


});
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