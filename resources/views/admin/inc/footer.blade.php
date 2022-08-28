</div>
<!-- END layout-wrapper -->









<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('/') }}assets/admin/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('/') }}assets/admin/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="{{ asset('/') }}assets/admin/libs/pace-js/pace.min.js"></script>

<!-- apexcharts -->
<script src="{{ asset('/') }}assets/admin/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="{{ asset('/') }}assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
</script>
<script src="{{ asset('/') }}assets/admin/libs/ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>


<script
  src="{{ asset('/') }}assets/admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
</script>

<script src="{{ asset('/') }}assets/admin/libs/alertifyjs/build/alertify.min.js"></script>
<!-- dashboard init -->
{{-- <script src="{{ asset('/') }}assets/admin/js/pages/dashboard.init.js"></script> --}}
<script src="{{ asset('/') }}assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

<script src="{{ asset('/') }}assets/admin/js/app.js"></script>
<script src="{{ asset('/') }}assets/admin/js/filepond.js"></script>
<script src="{{ asset('/') }}assets/admin/js/index.js"></script>



<script>
    feather.replace()



    @if ($errors->any())

    @foreach ($errors->all() as $error)
alertify.error("{{ $error }}");
@endforeach

@endif



    @if ($massage = Session::get('success'))
    Swal.fire({
		position: "top-end",
		icon: "success",
		title: "{{ $massage }}",
		showConfirmButton: !1,
		timer: 3000
	})
	Swal();

    @endif
    ClassicEditor.create(document.querySelector("#ckeditor1"))
    .then(function(e){e.ui.view.editable.element.style.height="200px"})
    .catch(function(e){console.error(e)});
</script>
</body>


</html>