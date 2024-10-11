@extends('layouts.admin')
@section('title','Ubah Ucapan')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Ubah Ucapan Selamat {{$ucapan->tamu_nama}}</h5>
         </div>
        <div class="card-body">
            <form method="post" action="{{url('mempelai/ucapan/'.$ucapan->ucapan_id)}}">
                @csrf
                @method('PUT')
                <div class="col mb-4">
                    <label for="namaTamu" class="form-label">Nama Tamu</label>
                    <p><strong>{{$ucapan->tamu_nama}} @if($ucapan->tamu_organisasi) - {{$ucapan->tamu_organisasi}} @endif </strong></p>
                  </div>
                  <div class="col mb-4">
                      <label for="noTelpTamu" class="form-label">Ucapan</label>
                      <textarea name="ucapan_isiucapan" class="form-control" required>{{$ucapan->ucapan_isiucapan}}</textarea>
                    </div>
              <div class="col mb-4">
                <button class="btn btn-md btn-primary">Simpan</button>
              </div>
             </form>
        </div>
      </div>
  </div>

@endsection
