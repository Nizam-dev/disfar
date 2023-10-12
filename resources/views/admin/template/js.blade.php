<script src="{{ asset('public/template-admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('public/template-admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('public/template-admin/assets/js/sidebarmenu.js')}}"></script>
<script src="{{ asset('public/template-admin/assets/js/app.min.js')}}"></script>
<!-- <script src="{{ asset('public/template-admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script> -->
<!-- <script src="{{ asset('public/template-admin/assets/libs/simplebar/dist/simplebar.js')}}"></script> -->
<!-- <script src="{{ asset('public/template-admin/assets/js/dashboard.js')}}"></script> -->
<script src="{{ asset('public/template-admin/assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/template-admin/assets/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('public/toastr/toastr.min.js') }}"></script>

<script>
    toastr.options.timeOut = 1500;
    toastr.options.showMethod = 'slideDown';
    toastr.options.hideMethod = 'slideUp';
    toastr.options.closeMethod = 'slideUp';
    @if(session()->has('success'))
        toastr.success('{{session()->get("success")}}')
    @elseif(session()->has('error'))
        toastr.error('{{session()->get("error")}}')
    @endif
</script>


@stack('js')