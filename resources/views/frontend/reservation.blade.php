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
                </p>
                <a href="reservation-2.html">
                    <div class="btn btn-standard">
                        立即訂位
                    </div>
                </a>
            </div>
            

            <div style="max-width:300px;" class="main-container" id="second-section">
                <table>
                    <tr>
                        <td>選擇人數</td>
                    </tr>
                    <tr>
                        <td class="select-wrap">
                            <select name="" id="">
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                    <input class="form-control" size="14" type="text" value="">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                                <input type="hidden" id="dtp_input2" value="" /><br/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="alert-wrap alert-show">

                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                您選擇的日期訂位已滿
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>選擇時間</td>
                    </tr>
                    <tr>
                        <td class="select-wrap">
                            <select name="" id="">
                                <option value="">11:30-13:30</option>
                                <option value="">14:00-16:00</option>
                                <option value="">18:30-20:30</option>
                                <option value="">21:00-23:00</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="alert-wrap">

                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                您選擇的時間訂位已滿
                            </span>
                        </td>
                    </tr>
                </table>

                <a href="reservation.html">
                    <div class="btn btn-standard">
                        上一步
                    </div>
                </a>
                <a href="reservation-3.html">
                    <div class="btn btn-standard">
                        下一步
                    </div>
                </a>
            </div>
            

            <div style="max-width:300px;" class="main-container" id="third-section">
                <table>
                    <tr>
                        <td>＊姓名</td>
                    </tr>
                    <tr>
                        <td>
                           <input type="text">
                        </td>
                    </tr>
                    <tr>
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
                            <input type="tel">
                        </td>
                    </tr>
                    <tr>
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
                           <input type="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="alert-wrap">

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
                           <table>
                               <tr>
                                   <td></td>
                                   <th>雞</th>
                                   <th>豬</th>
                                   <th>素</th>
                                   <th>魚</th>
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
                                   <th>
                                       <input id='c1-3' name="c1" type="radio">
                                       <label for="c1-3"><span></span></label>
                                   </th>
                                   <th>
                                       <input id='c1-4' name="c1" type="radio">
                                       <label for="c1-4"><span></span></label>
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
                                   <th>
                                       <input id='c2-3' name="c2" type="radio">
                                       <label for="c2-3"><span></span></label>
                                   </th>
                                   <th>
                                       <input id='c2-4' name="c2" type="radio">
                                       <label for="c2-4"><span></span></label>
                                   </th>
                               </tr>
                           </table>
                       </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="alert-wrap">

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
                            <textarea rows="5"></textarea>
                        </td>
                    </tr>
                   
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <input id="agree" type="checkbox">
                            <label class="agree-check" for="agree"><span></span></label>
                            我已閱讀並同意<a class="privacy-link" href="#">隱私條款</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="alert-wrap">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                請確認您已閱讀隱私條款
                            </span>
                        </td>
                    </tr>
                </table>

                <a href="reservation-2.html">
                    <div class="btn btn-standard">
                        上一步
                    </div>
                </a>
                <a href="reservation-4.html">
                    <div class="btn btn-standard">
                        下一步
                    </div>
                </a>
            </div>
            
            
            <div class="main-container" id="fourth-section">
                <p style="max-width:350px;margin:0 auto;">
                    請確認您的訂位資料
                </p>
                <table class="confirm-table">
                    <tr>
                        <td>人數：</td>
                        <th>
                            4
                        </th>
                    </tr>
                    <tr>
                        <td>日期：</td>
                        <th>
                            2016-03-17 Wed
                        </th>
                    </tr>
                    <tr>
                        <td>時間：</td>
                        <th>
                            14:00-16:00
                        </th>
                    </tr>
                    <tr>
                        <td>姓名：</td>
                        <th>
                            鍾孟儒
                        </th>
                    </tr>
                    <tr>
                        <td>電話：</td>
                        <th>
                            0918888888
                        </th>
                    </tr>
                    <tr>
                        <td>Email：</td>
                        <th>
                            norika30379@gmail.com
                        </th>
                    </tr>
                    <tr>
                        <td>主餐選擇：</td>
                        <th>
                            豬/豬/豬/豬
                        </th>
                    </tr>
                    <tr>
                        <td>備註：</td>
                        <th>
                            豬心豬耳朵我不吃!
                        </th>
                    </tr>
                </table>

                <a href="reservation-3.html">
                    <div style="height:54px;line-height:39px" class="btn btn-standard btn-pay btn-negative">
                        上一步
                    </div>
                </a>
                <a href="reservation-5.html">
                    <div class="btn btn-standard btn-pay btn-negative">
                        現場付費<br>NT 2500
                    </div>
                </a>
                <a href="reservation-5.html">
                    <div class="btn btn-standard btn-pay">
                        線上付費<br>NT 1800
                    </div>
                </a>
            </div>
        

        	<div style="padding: 60px 15px 140px;" class="main-container" id="done-section">
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
    <script type="text/javascript" src="/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="/js/locales/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
     
        $('.form_date').datetimepicker({
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    
    </script>
@endsection