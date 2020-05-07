<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Buku</title>
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
                    <div class="card-header">Edit Buku</div>
                    <div class="card-body">
                            <form action="/buku/{{$buku1->id}}" method="POST" >
                                @csrf
                                @method("PUT")
                                <input type="text" name="judul_buku" value="{{$buku1->judul_buku}}" required="" class="form-control"><br>
                                <input type="text" name="kategori" value="{{$buku1->kategori}}" required="" class="form-control"><br>
                                <input type="text" name="penulis" value="{{$buku1->penulis}}" required="" class="form-control"><br>
                                <input type="text" name="penerbit" value="{{$buku1->penerbit}}" required="" class="form-control"><br>
                                <input type="number" name="tahun" value="{{$buku1->tahun}}" required="" class="form-control"><br>
                                <input type="submit" name="submit" value="update">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>