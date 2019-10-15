@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Berita</div>
                <div class="card-body">
                    
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listKategoriBerita as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s')!!}</td>
                        <td>
                         <a href="{!! route('kategori_berita.show',[$item->id]) !!}"class="btn-sn btn-success">
                            lihat
                        </a>
                        <a href="{!! route('kategori_berita.edit',[$item->id]) !!}"class="btn-sn btn-warning">
                            ubah
                        </a>
                            {!! Form::open(['route'=>['kategori_berita.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Apakah Anda Yakin Menghapus Data Tersebut ?')"]); !!}

                        {!! Form::close() !!}


                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                    <td>
                        <a href="{!! route('kategori_berita.create') !!}" class="btn btn-primary">Tambah Data</a>
                    </td>
            </div>
        </div>
    </div>
</div>
</div>
@endsection