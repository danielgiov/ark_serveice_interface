<!-- BEGIN VENDOR JS -->
<script src="{{ asset ('assets/plugins/feather-icons/feather.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/tether/js/tether.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset ('assets/plugins/classie/classie.js') }}"></script>
<script src="{{ asset ('assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/nvd3/lib/d3.v3.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/nvd3/nv.d3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/nvd3/src/utils.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/nvd3/src/tooltip.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/nvd3/src/interactiveLayer.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/nvd3/src/models/axis.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/nvd3/src/models/line.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/nvd3/src/models/lineWithFocusChart.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset ('assets/plugins/mapplic/js/hammer.js') }}"></script>
<script src="{{ asset ('assets/plugins/mapplic/js/jquery.mousewheel.js') }}"></script>
<script src="{{ asset ('assets/plugins/mapplic/js/mapplic.js') }}"></script>
<script src="{{ asset ('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- datatables javascript -->
<script src="{{ asset ('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset ('assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"></script>
<script type="text/javascript" src="{{ asset ('assets/plugins/datatables-responsive/js/lodash.min.js') }}"></script>
<script src="{{ asset ('assets/js/datatables.js')}}" type="text/javascript"></script>
<!-- END datatables javascript -->

<!-- <script src="{{ asset ('assets/js/dashboard.js') }}" type="text/javascript"></script> -->
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{{ asset ('styles/js/pages.min.js') }}"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<!-- <script src="{{ asset ('assets/js/dashboard.js') }}" type="text/javascript"></script> -->
<script src="{{ asset ('assets/js/form_elements.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/js/scripts.js') }}" type="text/javascript"></script>
<script type="text/javascript">
$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
});
</script>
<!-- END PAGE LEVEL JS -->