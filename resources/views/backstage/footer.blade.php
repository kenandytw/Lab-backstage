<footer class="footer text-right">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                2016 © SUPERISE LAB.
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

</div> <!-- end container -->
</div>
<!-- End wrapper -->


<!-- MODAL -->
<div id="dialog" class="modal-block mfp-hide">
    <section class="panel panel-info panel-color">
        <header class="panel-heading">
            <h2 class="panel-title">Are you sure?</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-text">
                    <p>Are you sure that you want to delete this row?</p>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-md-12 text-right">
                    <button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                    <button id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- end Modal -->


<!-- jQuery  -->
<script src="backstage/js/jquery.min.js"></script>
<script src="backstage/js/bootstrap.min.js"></script>
<script src="backstage/js/detect.js"></script>
<script src="backstage/js/fastclick.js"></script>
<script src="backstage/js/jquery.blockUI.js"></script>
<script src="backstage/js/waves.js"></script>
<script src="backstage/js/wow.min.js"></script>
<script src="backstage/js/jquery.nicescroll.js"></script>
<script src="backstage/js/jquery.scrollTo.min.js"></script>

<!-- Examples -->
<script src="backstage/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="backstage/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
<script src="backstage/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="backstage/plugins/tiny-editable/mindmup-editabletable.js"></script>
<script src="backstage/plugins/tiny-editable/numeric-input-example.js"></script>

<script src="backstage/pages/datatables.editable.init.js"></script>

<script src="backstage/js/jquery.core.js"></script>
<script src="backstage/js/jquery.app.js"></script>

<script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
</script>


</body>
</html>