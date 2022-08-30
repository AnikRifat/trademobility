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
<script src="{{ asset('/') }}assets/admin/libs/dropzone/min/dropzone.min.js"></script>
<script src="{{ asset('/') }}assets/admin/js/app.js"></script>




<script>
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#thm1').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#thm2').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#thm3').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }



  Dropzone.discover();



feather.replace()



@if ($errors->any())

@foreach ($errors->all() as $error)
alertify.error("{{ $error }}");
@endforeach

@endif

async function genSubCat() {
            const id = document.querySelector("#category_id").value;
            const url = `{{ url('findSubCat') }}/${id}`;

            document.getElementById('sub_cat_id').innerHTML = " ";

            const res = await fetch(`${url}`);
            let data = await res.json();

            data.forEach((res) => {
                document.getElementById('sub_cat_id').innerHTML +=
                    `<option value="${res.id}">${res.name}</option>`;
            });
        }

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
ClassicEditor.create(document.querySelector("#ckeditor2"))
.then(function(e){e.ui.view.editable.element.style.height="200px"})
.catch(function(e){console.error(e)});
</script>
</body>


</html>