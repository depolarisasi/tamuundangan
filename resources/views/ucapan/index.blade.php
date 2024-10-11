@extends('layouts.admin')
@section('title','Ucapan Selamat Tamu')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />

@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header header-elements">
          <h5 class="card-title mb-0">Ucapan Selamat Tamu</h5>
         </div>
        <div class="card-datatable table-responsive">
          <table class="datatables-users table" id="ucapan">
            <thead class="border-top">
              <tr>
                <th>Tanggal</th>
                <th>Tamu</th>
                <th>Ucapan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @if($ucapans)
                @foreach($ucapans as $ucapan)
                <tr>

                    <td>{{$ucapan->ucapan_date}}</td>
                    <td><div class="d-flex justify-content-start align-items-center user-name">
                        <div class="d-flex flex-column"><span class="fw-medium">{{$ucapan->tamu_nama}}</span> <small>{{$ucapan->tamu_organisasi}}</small></div></div></td>
                    <td>{{$ucapan->ucapan_isiucapan}}</td>
                    <td>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button href="{{url('mempelai/ucapan/delete/'.$ucapan->ucapan_id)}}" class="btn btn-outline-secondary waves-effect delete"><i class="ti ti-trash ti-md"></i></button>
                                <a href="{{url('/mempelai/ucapan/edit/'.$ucapan->ucapan_id)}}" class="btn btn-outline-secondary waves-effect"><i class="ti ti-pencil ti-md"></i></a>

                      </div></td>
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
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
       $('#ucapan').DataTable( {
        responsive: true,
        paging:   true,
        ordering: true,
        info:     false,
        language: {
            lengthMenu: "_MENU_" // This will display the dropdown only
        },
    } );

$(".delete").on('click', function(event){
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
