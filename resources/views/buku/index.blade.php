<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List Buku</div>
                    <div class="card-body">
                            <a href="/buku/create">Tambah Buku</a>
                            <table class="table table-hover">
                                <thead>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun</th>
                                    <th>edit</th>
                                    <th>delete</th>
                                </thead>
                                <tbody>
                                    
                                    @foreach($data as $data)
                                    
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->judul_buku}}</td>
                                        <td>{{$data->kategori}}</td>
                                        <td>{{$data->penulis}}</td>
                                        <td>{{$data->penerbit}}</td>
                                        <td>{{$data->tahun}}</td>
                                        <td>
                                        <form action="/buku/{{$data->id}}/edit" method="GET">
                                                @csrf
                                         <button type="submit" class="btn btn-warning">
                                                    Edit
                                         </button>
                                        </form>
                                        </td>
                                         <td>
                                        <form action="/buku/{{$data->id}}/" method="POST">
                                            @method("DELETE")
                                                @csrf
                                        <button type="submit" class="btn btn-danger">
                                            DELETE
                                         </button>
                                        </form>
                                        </td> 
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>