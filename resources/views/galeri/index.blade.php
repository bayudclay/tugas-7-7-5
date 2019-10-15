@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-center">List Galeri</div> 
                <div class="card-body">
                    <td>
                    
                 <table class="table table-bordered">
                     <thead class ="bg-success text-center">
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Path</th>
                                 <th scope="col">Users</th>
                                <th scope="col">Kategori Galeri</th>
                            <th scope="col">Update</th>
                                
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($listGaleri as $item)
                            <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->keterangan !!}</td>
                            <td>{!! $item->path !!}</td>
                            <td>{!! $item->users_id !!}</td>
                            
                            <td>{!! $item->kategori_galeri_id !!}</td>
                            <td>
                            <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-sm btn-primary">Detail</a>
                            <a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">Edit</a>

                            {!! Form::open(['route'=>['galeri.destroy',$item->id],'method'=>'delete']) !!}

                            {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Apakah Anda Yakin Menghapus Data Tersebut ?')"]); !!}

                            {!! Form::close() !!}
                            </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                    </table>
                            <td>
                                <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                            </td> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection