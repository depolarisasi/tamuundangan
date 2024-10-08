@extends('layouts.admin')
@section('title','Edit Setting')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Setting</h5>
         </div>
        <div class="card-body">
            <form method="post" action="{{url('setting/'.$setting->setting_id)}}">
                @csrf
                @method('PUT')
            <div class="col mb-4">
              <label for="namaTamu" class="form-label">Setting Name</label>
              <input type="text" name="setting_name" class="form-control" value="{{$setting->setting_name}}" required>
            </div>
            <div class="col mb-4">
                <label for="noTelpTamu" class="form-label">Setting Value </label>
                <textarea name="setting_value" class="form-control" rows="10">{{$setting->setting_value}}</textarea>
              </div>
              <div class="col mb-4">
                <button class="btn btn-md btn-primary">Simpan</button>
              </div>
             </form>
        </div>
      </div>
  </div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
       $('#tamu').DataTable( {
        "paging":   true,
        "ordering": true,
        "info":     false,
        "language": {
            "lengthMenu": "_MENU_" // This will display the dropdown only
        }
    } );

$(".delete").on('click', function(event){
    event.stopPropagation();
    event.stopImmediatePropagation();
    var href = $(this).attr('href');
    swal({
  title: "Are you sure?",
  text: "Anda akan menghapus tamu ini?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! sudah terhapus!", {
      icon: "success",
    });
    window.location.href = href;
  } else {
    swal("Tamu tidak dihapus!");
  }
});


});
    </script>
@endsection
