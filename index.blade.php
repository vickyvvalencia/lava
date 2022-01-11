@extends('layout/main')
@section('title','data mahasiswa')

@section('container')
    

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">data </h1>
            <table  class="table table-dark table-stripedble  ">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nrp</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>tes</td>
                        <td>123</td>
                        <td>tes@gmail.com</td>
                        <td>tk</td>
                        <td>
                            <button type="button" class="btn btn-danger">hapus</button>
                            <button type="button" class="btn btn-warning">edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection     