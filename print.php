<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Data Informasi</title>
</head>

<body>
    <div class="container-md">
        <div class="card mt-4">
            <h5 class="card-header  bg-primary text-white"><i class="fa fa-vcard mr-3"></i>Data Informasi</h5>
            <div class="card-body">
                <h5 class="card-title">Daftar Informasi</h5>
                <div class="table-responsive">
                    <table class="table table-sm table-hover">
                        <thead class=" text-light">
                            <tr class="bg-primary">
                                <th scope="col">Id</th>
                                <th scope="col">Judul Informasi</th>
                                <th scope="col">Isi Informasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($conn, "SELECT `id`, `judul_informasi`, `isi_informasi` FROM `entry_informasi`");
                            $no = 1;
                            foreach ($sql as $data) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data['judul_informasi']; ?></td>
                                    <td><?php echo $data['isi_informasi']; ?></td>
                                </tr>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
