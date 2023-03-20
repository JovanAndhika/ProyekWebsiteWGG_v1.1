<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi</title>
    <link rel="stylesheet" href="pagePresensiStyle.css">
</head>


<body>
    <?php
        $mahasiswa = ["C14200001" => "12345678", "C14210002" => "12345678", "C14210003" => "12345678"];
    ?>


    <p class="tulisan" id="WGG">Selamat Datang di WGG<br></p>
            <table class="table-content">
                <thead>
                    <tr>
                        <th></th>
                        <th>Hari/Tanggal</th>
                        <th>Agenda</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach($mahasiswa as $key => $value){?>
                            <th></th>
                            <td> <?php $mahasiswa ?></td>
                                
                            
                            <?php } ?>
                        <th></th>
                        <td>Senin, 26 Juli 2023</td>
                        <td>Ngopi</td>
                        <td>Hadir</td>
                    </tr>

                    <tr>
                        <th></th>
                        <td>Selasa, 27 Juli 2023</td>
                        <td>Tidur</td>
                        <td>Hadir</td>
                    </tr>
                </tbody>
            </table>
      
        


</body>
</html>