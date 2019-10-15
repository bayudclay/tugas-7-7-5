@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Pengumuman</div>
                <div class="card-body">
                
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori Id</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $listPengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_pengumuman_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at !!}</td>
                        <td>
                     <a href="{!! route('pengumuman.show',[$item->id]) !!}"class="btn-sn btn-success">
                            lihat
                        </a>
                        <a href="{!! route('pengumuman.edit',[$item->id]) !!}"class="btn-sn btn-warning">
                            ubah
                        </a>
                          </a>
                            {!! Form::open(['route'=>['pengumuman.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Apakah Anda Yakin Menghapus Data Tersebut ?')"]); !!}

                        {!! Form::close() !!}
                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                    <td>
                        <a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
                    </td>
            </div>
        </div>
    </div>
</div>
</div>
@endsection