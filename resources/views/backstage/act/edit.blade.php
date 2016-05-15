@include('backstage.header')
<!-- =======================
===== START PAGE ======
======================= -->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">新增活動</h4>
                    </div>
                </div>
                <!-- Page-Title -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-20">
                                        <form  data-parsley-validate novalidate method="post" action="/actstore">
                            {!! csrf_field() !!}
                                        <input type="hidden" name="AID" value="{{ $act->AID or 0 }}">
                                            <div class="form-group">
                                                <label class="control-label">日期</label>
                                                <div class="input-group" id="datepicker">
                                                    <input name="ADay" type="text" class="form-control" placeholder="yyyy-mm-dd" value="{{ $act->ADay or Carbon\Carbon::today()->format('Y-m-d')  }}">
                                                    <span class="input-group-addon bg-primary b-0 text-white"><i class="ion-calendar"></i></span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label">人數</label>
                                                <input id="Pop" type="number" class="form-control" value="{{ $act->Pop or 20 }}" name="Pop">
                                            </div>
                                            
                                            <div class="col-md-6" style="padding-left: 0px;">
                                                    <label>開始時間</label>
                                                    <div class="input-group m-b-15">

                                                        <div class="bootstrap-timepicker">
                                                            <input name="STime" type="text" value="{{ $act->STime or '' }}" class="form-control timepicker">
                                                        </div>
                                                        <span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
                                                    </div><!-- input-group -->
                                            </div>
                                            <div class="col-md-6" style="padding-right: 0px;padding-bottom: 15px;">
                                                    <label>結束時間</label>
                                                    <div class="input-group m-b-15">

                                                        <div class="bootstrap-timepicker">
                                                            <input name="ETime" type="text" value="{{ $act->ETime or '' }}" class="form-control timepicker">
                                                        </div>
                                                        <span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
                                                    </div><!-- input-group -->
                                            </div>
                                            <span class="input-group-btn">
                                                <button style="background-color: #7266ba !important;border: 1px solid #7266ba !important;" type="submit" class="btn waves-effect waves-light btn-primary">Submit</button>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                2016 © Minton.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- End wrapper -->

@include('backstage.jquery')
<link href="/backstage/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
<link href="/backstage/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="/backstage/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


        <script src="/backstage/plugins/switchery/switchery.min.js"></script>
        <script src="/backstage/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript" src="/backstage/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="/backstage/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="/backstage/plugins/select2/select2.min.js" type="text/javascript"></script>
        <script src="/backstage/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="/backstage/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>

        <script src="/backstage/plugins/moment/moment.js"></script>
        <script src="/backstage/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!--<script src="/backstage/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <script src="/backstage/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="/backstage/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
--><link rel="stylesheet" type="text/css" href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/build/css/bootstrap-datetimepicker.css">
    
      <script type="text/javascript" src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/v4.0.0/src/js/bootstrap-datetimepicker.js"></script>
        <script src="/backstage/js/jquery.core.js"></script>
        <script src="/backstage/js/jquery.app.js"></script>

        <script>
        $(function(){
            // Time Picker
            jQuery('.timepicker').timepicker({
                showMeridian : false
            });

$("#datepicker").datetimepicker({
    "format": "YYYY-MM-DD",
    "minDate":'{{ Carbon\Carbon::today()->format('Y-m-d') }}',
    "maxDate":'{{ config('setting.enddate') }}',
});

/*
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                orientation:'bottom',
                todayHighlight: true
            });
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple-date').datepicker({
                format: "mm/dd/yyyy",
                clearBtn: true,
                multidate: true,
                multidateSeparator: ","
            });
            jQuery('#date-range').datepicker({
                toggleActive: true
            });*/
        });



        </script>



    </body>
</html>