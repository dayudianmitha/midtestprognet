<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Buku</title>
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
                    <div class="card-header">Tambah Buku</div>
                    <div class="card-body">
                            <form action="/buku" enctype="multipart/form-data" method="POST">
                                @csrf
                                Judul Buku :
                                <input type="text" name="judul_buku" required="" class="form-control"><br>
                                Kategori :
                                <input type="text" name="kategori" required="" class="form-control"><br>
                               Penulis :
                               <input type="text" name="penulis" required="" class="form-control"><br>
                               Penerbit :
                               <input type="text" name="penerbit" required="" class="form-control"><br>
                               Tahun :
                               <input type="number" name="tahun" required="" class="form-control"><br>
                                <br><br>
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
                            </form>
                         </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>