<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<form action ="/update/<?=$Todolist["id"]?>" method ="post">
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="kegiatan">Kegiatan</label>
        <input type="text" name= "kegiatan" class="form-control" id="kegiatan" value="<?=$Todolist['kegiatan'] ?>">
      </div>
    <div class="form-group">
     <label for="ket_waktu">Keterangan Waktu</label>
     <input type="text" name= "ket_waktu" class="form-control" id="ket_waktu" value="<?=$Todolist['ket_waktu'] ?>">
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" name= "deskripsi" class="form-control" id="deskripsi" value="<?=$Todolist['deskripsi'] ?>">
   </div>
  </div>
  <div class="col-6">
  </div>
<div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

</body>
</html>