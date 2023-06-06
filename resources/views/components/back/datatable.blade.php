@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('back/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('back/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

<table id="{{$attributes->get('id')}}" class="table table-bordered table-hover">
    {{$slot}}
</table>

@push('scripts')
    <script src="{{asset('back/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('back/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('back/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('back/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('back/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset("back/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
    <script src="{{asset("back/assets/plugins/jszip/jszip.min.js")}}"></script>
    <script src="{{asset("back/assets/plugins/pdfmake/pdfmake.min.js")}}"></script>
    <script src="{{asset("back/assets/plugins/pdfmake/vfs_fonts.js")}}"></script>
    <script src="{{asset("back/assets/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("back/assets/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("back/assets/plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
    <script>
        $(function () {
            $("#{{$attributes->get('id')}}").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        });
    </script>
@endpush
