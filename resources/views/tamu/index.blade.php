@extends('layouts.admin')
@section('title','Tamu')
@section('css')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />

@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6 mb-6">
      <div class="col-6 col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
              <div class="content-left">
                <span class="text-heading">Tamu Mempelai Pria</span>
                <div class="d-flex align-items-center my-1">
                  <h4 class="mb-0 me-2">{{$count_tamu_pria}}</h4>
                </div>
              </div>
              <div class="avatar">
                <span class="avatar-initial rounded bg-label-primary">
                  <i class="ti ti-users ti-26px"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
              <div class="content-left">
                <span class="text-heading">Tamu Mempelai Wanita</span>
                <div class="d-flex align-items-center my-1">
                  <h4 class="mb-0 me-2">{{$count_tamu_wanita}}</h4>
                </div>
              </div>
              <div class="avatar">
                <span class="avatar-initial rounded bg-label-danger">
                  <i class="ti ti-users ti-26px"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
              <div class="content-left">
                <span class="text-heading">Tamu Keluarga Pria</span>
                <div class="d-flex align-items-center my-1">
                  <h4 class="mb-0 me-2">{{$count_tamu_keluarga_pria}}</h4>
                </div>
              </div>
              <div class="avatar">
                <span class="avatar-initial rounded bg-label-success">
                  <i class="ti ti-users ti-26px"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
              <div class="content-left">
                <span class="text-heading">Tamu Keluarga Wanita</span>
                <div class="d-flex align-items-center my-1">
                  <h4 class="mb-0 me-2">{{$count_tamu_keluarga_wanita}}</h4>
                </div>
              </div>
              <div class="avatar">
                <span class="avatar-initial rounded bg-label-warning">
                  <i class="ti ti-users ti-26px"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Users List Table -->

    <div class="card">
        <div class="card-header header-elements">
          <h5 class="card-title mb-0">Daftar Tamu</h5>
          <div class="card-header-elements ms-auto">
            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalTamu">
               Tambah Tamu
              </button>
          </div>
         </div>
         <div class="modal fade" id="modalTamu" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTamuTitle">Tambah Tamu</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <form method="post" action="{{url('mempelai/tamu')}}">
                        @csrf
                    <div class="col mb-4">
                      <label for="namaTamu" class="form-label">Nama Tamu</label>
                      <input type="text" id="namaTamu" name="tamu_nama" class="form-control" placeholder="Nama Tamu" required>
                    </div>
                    <div class="col mb-4">
                        <label for="noTelpTamu" class="form-label">No Telepon <small>Gunakan kode negara, contoh +628212323</small></label>
                        <input type="text" id="noTelpTamu" name="tamu_nohp" class="form-control" placeholder="+6282158542639" required>
                      </div>
                      <div class="col mb-4">
                        <label for="organisasiTamu" class="form-label">Organisasi / Perusahaan</label>
                        <input type="text" id="organisasiTamu" name="tamu_organisasi" class="form-control" placeholder="Otoritas Jasa Keuangan">
                      </div>
                      <div class="col mb-4">
                        <label for="typeTamu" class="form-label">Type Tamu</label>
                        <select id="selecttype" name="tamu_keluarga" class="select2 form-select form-select-lg" data-allow-clear="true">
                            <option value="Tamu Mempelai Pria">Tamu Mempelai Pria</option>
                            <option value="Tamu Mempelai Wanita">Tamu Mempelai Wanita</option>
                            <option value="Tamu Keluarga Pria">Tamu Keluarga Pria</option>
                            <option value="Tamu Keluarga Wanita">Tamu Keluarga Wanita</option>
                          </select>
                      </div>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah Tamu</button>
                </div>
            </form>
              </div>
            </div>
          </div>
        <div class="card-datatable table-responsive">
          <table class="datatables-users table" id="tamu">
            <thead class="border-top">
              <tr>
                <th>Tamu</th>
                <th>Organisasi / Perusahaan</th>
                <th>Type</th>
                <th>Kehadiran</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @if($tamus)
                @foreach($tamus as $tamu)
                <tr>
                    <td><div class="d-flex justify-content-start align-items-center user-name">
                        <div class="d-flex flex-column"><span class="fw-medium">{{$tamu->tamu_nama}}</span> <small>{{$tamu->tamu_nohp}}</small></div></div></td>
                    <td>{{$tamu->tamu_organisasi}}</td>
                    <td>{{$tamu->tamu_keluarga}}</td>
                    <td> @if($tamu->tamu_kehadiran == "Ya akan hadir")
                        <span class="badge bg-label-success">Akan Hadir</span>
                            @elseif ($tamu->tamu_kehadiran == "Tidak akan hadir")
                            <span class="badge bg-label-danger">Tidak akan hadir</span>
                            @elseif ($tamu->tamu_kehadiran == "Belum menentukan")
                            <span class="badge bg-label-warning">Belum menentukan</span>
                            @else
                            <span class="badge bg-label-warning">{{$tamu->tamu_kehadiran}}</span>
                        @endif</td>
                    <td>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <button href="{{url('mempelai/tamu/delete/'.$tamu->tamu_id)}}" class="btn btn-outline-secondary waves-effect delete"><i class="ti ti-trash ti-md"></i></button>
                                <a href="{{url('/mempelai/tamu/edit/'.$tamu->tamu_id)}}" class="btn btn-outline-secondary waves-effect"><i class="ti ti-pencil ti-md"></i></a>
                        <div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-md d-sm-none"></i><span class="d-none d-sm-block">Other</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                            <button class="dropdown-item waves-effect copy-btn" data-text="{{config('settings.wedding_name')}}\n\nAssalamu'alaikum Warahmatullahi Wabarakatuh,\n\nYth. Bpk/Ibu/Sdr/i {{$tamu->tamu_nama}} - {{$tamu->tamu_organisasi}},\n\nDengan memohon rahmat dan ridho Allah SWT, perkenankan kami mengundang Bpk/Ibu/Sdr/i untuk menghadiri acara pernikahan kami :\n\n{{config('settings.mempelai_wanita_long')}} & {{config('settings.mempelai_pria_long')}}\n\nYang Insyaallah akan diselenggarakan pada :\n\nHari/Tgl : {{config('settings.resepsi_day')}}, {{config('settings.resepsi_date')}}\nPukul : {{config('settings.resepsi_time')}}\nLokasi : {{config('settings.resepsi_place')}}\n\nMerupakan suatu kehormatan bagi kami apabila Bpk/Ibu/Sdr/i berkenan hadir pada acara pernikahan kami pada tautan di bawah ini :\n\n{{url('/?guest='.$tamu->tamu_uniquecode)}}\n\nKami juga mengharapkan ucapan dan doa restu Bpk/Ibu/Sdr/i untuk kami. Atas perhatiannya kami ucapkan terimakasih.\n\nUnduh E-Invitation:\n{{url($tamu->tamu_qr)}}" ><i class="ti ti-clipboard ti-md"></i> Copy WA</button>
                            <a href="{{url('/?guest='.$tamu->tamu_uniquecode)}}" class="dropdown-item waves-effect"><i class="ti ti-device-floppy ti-md"></i>Link</a>
                            <a href="{{url('undangan/'.$tamu->tamu_uniquecode)}}" class="dropdown-item waves-effect"><i class="ti ti-device-floppy ti-md"></i>E-Invitation</a>
                          </div>
                        </div>
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
       $('#tamu').DataTable( {
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
    <script>
        function copyText(event) {
             // Get the text from the data attribute of the clicked button
        const textToCopy = event.target.getAttribute('data-text').replace(/\\n/g, '\n');

        // Create a temporary textarea to hold the text
        const textarea = document.createElement('textarea');
        textarea.value = textToCopy;
        document.body.appendChild(textarea);

        // Select and copy the text
        textarea.select();
        document.execCommand('copy');

            // Remove the temporary textarea
            document.body.removeChild(textarea);

            // Show a success message
            swal("Pesan berhasil tersalin!", { icon: "success",});

        }

        // Attach event listener to all buttons with the class 'copy-btn'
        document.querySelectorAll('.copy-btn').forEach(button => {
            button.addEventListener('click', copyText);
        });
    </script>
@endsection
