<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Mahasiswa</title>
    <!-- import css -->
    <link rel="stylesheet" href="<?php echo base_url("ext/style.css"); ?>">
</head>
<body>
    <!-- bagian menu / tombol -->
    <nav>

    </nav>

    <!-- bagian tabel -->
    <table>
        <!-- judul tabel -->
        <thead>
            <tr style="background-color: #CDFCF6;">
                <th style="width: 5%; ">No.</th>
                <th style="width: 10%; ">NPM</th>
                <th style="width: 30%; ">Nama</th>
                <th style="width: 15%; ">Telepon</th>
                <th style="width: 15%; ">Jurusan</th>
                <th style="width: 15%; ">Foto</th>
                <th style="width: 10%; ">Status</th>
            </tr>
        </thead>
        <!-- isi tabel -->

        <tbody>
            <!-- awal looping -->
            <?php
            // nilai awal nomor
            $no = 1;
                foreach($hasil as $record)
                {

                    // jika status 1
                    if($record->status == "1")
                    {
                        $status = "Aktif";
                    }
                    else
                    // jika ststus 0
                    {
                        $status ="Pasif";
                    }

            ?>
            <tr <?php if($record->status == "1") {?> class="bg_putih" <?php } else {?> class="bg_unggu"<?php } ?>>
                <td style="text-align: center; "><?php echo $no; ?></td>
                <td style="text-align: center; "><?php echo $record->npm; ?></td>
                <td style="text-align: center; "><?php echo $record->nama; ?></td>
                <td style="text-align: center; "><?php echo $record->telepon; ?></td>
                <td style="text-align: center; "><?php echo $record->jurusan; ?></td>
                <td style="text-align: center; "><?php echo $record->foto; ?></td>
                <td style="text-align: center; "><?php echo $status; ?></td>
            </tr>

            <!-- akhir looping -->
            <?php
                $no++;

                }
            ?>

        </tbody>

    </table>

    
</body>
</html>