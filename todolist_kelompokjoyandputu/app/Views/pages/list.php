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

<a href="/create" type="button" class="btn btn-primary mb-3 ms-2">tambah data</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Keterangan Waktu</th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; foreach($Todolist as $list): ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $list['kegiatan']?></td>
      <td><?= $list['ket_waktu']?></td>
      <td><?= $list['deskripsi']?></td>
      <td>
        <div class="d-flex">
          <a href="/edit/<?=$list['id']?>" class="btn btn-warning mr-3">Edit</a>
            <form action="/delete/<?=$list['id'] ?>" method="post">
              <input name="_method" value="DELETE" type="hidden">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
      </td>
    </tr>
    <?php $no++; endforeach ?>
  </tbody>
</table>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

</body>
</html>