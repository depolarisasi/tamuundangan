@extends('layouts.admin')
@section('title','Ubah Tamu')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Ubah Tamu {{$tamu->tamu_nama}}</h5>
         </div>
        <div class="card-body">
            <form method="post" action="{{url('mempelai/tamu/'.$tamu->tamu_id)}}">
                @csrf
                @method('PUT')
                <div class="col mb-4">
                    <label for="namaTamu" class="form-label">Nama Tamu</label>
                    <input type="text" id="namaTamu" name="tamu_nama" class="form-control" value="{{$tamu->tamu_nama}}" required>
                  </div>
                  <div class="col mb-4">
                      <label for="noTelpTamu" class="form-label">No Telepon <small>Gunakan kode negara, contoh +628212323</small></label>
                      <input type="text" id="noTelpTamu" name="tamu_nohp" class="form-control" value="{{$tamu->tamu_nohp}}" required>
                    </div>
                    <div class="col mb-4">
                      <label for="organisasiTamu" class="form-label">Organisasi / Perusahaan</label>
                      <input type="text" id="organisasiTamu" name="tamu_organisasi" class="form-control" value="{{$tamu->tamu_organisasi}}">
                    </div>
                    <div class="col mb-4">
                      <label for="typeTamu" class="form-label">Type Tamu</label>
                      <select id="selecttype" name="tamu_keluarga" class="select2 form-select form-select-lg" data-allow-clear="true">
                          <option value="Tamu Mempelai Pria" @if($tamu->tamu_organisasi == "Tamu Mempelai Pria") selected @endif>Tamu Mempelai Pria</option>
                          <option value="Tamu Mempelai Wanita"  @if($tamu->tamu_organisasi == "Tamu Mempelai Wanita") selected @endif>Tamu Mempelai Wanita</option>
                          <option value="Tamu Keluarga Pria"  @if($tamu->tamu_organisasi == "Tamu Keluarga Pria") selected @endif>Tamu Keluarga Pria</option>
                          <option value="Tamu Keluarga Wanita"  @if($tamu->tamu_organisasi == "Tamu Keluarga Wanita") selected @endif>Tamu Keluarga Wanita</option>
                        </select>
                    </div>
              <div class="col mb-4">
                <button class="btn btn-md btn-primary">Simpan</button>
              </div>
             </form>
        </div>
      </div>
  </div>

@endsection
