@extends('master.template')

@section('content')

<div class="card">
    <div class="card-header">
        <a href="/admin/member/createmember" class="btn btn-primary w-10 m-3">Tambah Member</a>
       <span>Data Member</span>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id Member</th>
            <th>Nama Member</th>
            <th>Jenis Kelamin</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($member as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jenis_kelamin}}</td>
                    <td>{{$item->tlp}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>

                        <form action="{{route('member.hapus', ['id' => $item->id])}}" method="POST">
                            @method('delete')
                            @csrf
                            <a href="{{route('member.edit',['id'=>$item->id])}}"class="btn fas fa-edit" style="color:black;"></a>
                            <a href="{{route('member.hapus', ['id' => $item->id])}}" class="btn fas fa-trash-alt" style="color:black;" aria-hidden="true"></a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div>
  </div>

@endsection
