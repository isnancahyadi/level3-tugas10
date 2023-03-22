<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $key => $value) : ?>
                <tr>
                    <th><?= $key + 1 ?></th>
                    <th><?= $value->nama_produk ?></th>
                    <th><?= $value->keterangan ?></th>
                    <th><?= $value->harga ?></th>
                    <th><?= $value->jumlah ?></th>
                    <th class="text-center" style="width: 15%">
                        <a href="<?= site_url('produk/' . $value->id_produk . '/edit') ?>" class="btn btn-warning btn-sm">edit</i></a>
                        <form action="<?= site_url('produk/' . $value->id_produk) ?>" method="POST" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm">delete</button>
                        </form>
                    </th>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <a class="btn btn-primary btn-lg" href="<?= site_url('produk/new') ?>" role="button">Tambah Data</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>