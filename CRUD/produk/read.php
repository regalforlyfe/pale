<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Read</title>
  </head>
  <body>
    <div class="container">
        <h1>Read <a href="tambah.php" class="btn btn-primary">tambah</a></h1>
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                    <td>minuman</td>
                    <td>aqua</td>
                    <td>2000</td>
                    <td width="1"><a href="edit.php?id_produk=1" class="btn btn-success">Edit</a></td>
                    <td width="1"><a href="delete.php?id_produk=1" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
      </table>
    </div>  
  </body>
</html>