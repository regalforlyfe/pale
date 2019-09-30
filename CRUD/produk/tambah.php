
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tambah</title>
  </head>
  <body>
    <div class="container">
      <h1>Tambah</h1>
      <form action="create.php" method="POST">
        <div class="form-group">
          <label>Kategori</label>
          <select class="form-control" name="id_kategori">
                        <option value="22">minuman</option>
                        <option value="23">minuman</option>
                        <option value="32">jdshjdfshj</option>
                        <option value="33"></option>
                        <option value="34"></option>
                        <option value="35"></option>
                        <option value="36"></option>
                        <option value="37">k</option>
                        <option value="38">Lain Lain</option>
                        <option value="39"></option>
                        <option value="40"></option>
                        <option value="41"></option>
                        <option value="42">pakaian</option>
                        <option value="43"></option>
                        <option value="44"></option>
                        <option value="45"></option>
                        <option value="46"></option>
                        <option value="47"></option>
                      </select>
        </div>
        <div class="form-group">
          <label>Produk</label>
          <input type="text" name="nama" class="form-control" placeholder="Enter Produk">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" name="harga" class="form-control" placeholder="Enter Harga">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
      </form>
    </div>
  </body>
</html>