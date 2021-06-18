@extends('master.template')

@section('content')

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah Data Member</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('member.store')}}" method="POST">
        @csrf

      <div class="card-body">
        {{-- <div class="form-group">
            <label for="exampleInputEmail1">Id Siswa</label>
            <input type="text" class="form-control" name="id_siswa" id="exampleInputEmail1" placeholder="Enter Siswa">
          </div> --}}

        <div class="form-group">
            <label for="exampleInputEmail1">Nama Member</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="exampleInputEmail1" placeholder="Masukkan Nama Anda">
            @error('nama')
            <span style="color:red">{{$message}}</span>
          @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <select name="jenis_kelamin" id=""
                    class="form-control">
                    <option value="">-- PILIH JENIS KELAMIN --</option>
                    <option value="P">Perempuan</option>
                    <option value="L">Laki-Laki</option>
                </select>
        </div>


          <div class="form-group">
            <label for="exampleInputEmail1">No Telepon</label>
            <input type="text" class="form-control @error('tlp') is-invalid @enderror" name="tlp" id="exampleInputEmail1" placeholder="Masukkan No Telepon Anda">
            @error('tlp')
            <span style="color:red">{{$message}}</span>
          @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="exampleInputEmail1" placeholder="Masukkan Alamat Anda">
            @error('alamat')
            <span style="color:red">{{$message}}</span>
          @enderror
          </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
