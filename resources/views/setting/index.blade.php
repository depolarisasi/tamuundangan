@extends('layouts.admin')
@section('title','Setting')
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
        <div class="card-datatable table-responsive">
          <table class="table" id="tamu">
            <thead class="border-top">
              <tr>
                <th>Setting Name</th>
                <th>Value</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @if($setting)
                @foreach($setting as $settings)
                <tr>
                    <td><div class="d-flex justify-content-start align-items-center user-name">
                        <div class="d-flex flex-column"><span class="fw-medium">{{$settings->setting_name}}</span></div></div></td>
                    <td><span class="text-truncate d-flex align-items-center text-heading">{{substr($settings->setting_value,0,50)}}</span></td>
                    <td><div class="d-flex align-items-center">
                        <a href="{{url('/mempelai/setting/'.$settings->setting_id)}}" class="btn btn-icon btn-text-primary rounded-pill"><i class="ti ti-pencil ti-md"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                @endif
            </tbody>
          </table>
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
