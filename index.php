<?php
    $nama = "Richie Mulyo Liauren";
    $nim  = "52020014";
    $jurusan = "Teknik Informatika";
    $instagram = "https://www.instagram.com/richie2596_";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Hadiah Prak Cloud Computing</title>
    <style>
        .wrap {
            background-color: rgba(255, 255, 255, 0.7);
            width: 800px;
            color: black;
            margin: 20px auto;
            padding: 25px;
        }
    </style>
</head>

<body style="background: url(https://i0.wp.com/dianisa.com/wp-content/uploads/2022/04/Background-Abstract-HD-5.jpg?w=1000&ssl=1);background-size:cover;background-attachment: fixed;">
    <div class="wrap">
        <h1 class="class" align="center">Halo Guys!</h1><hr/align="center" width="75%" style="border-top: 3px double #8c8b8b;">
        
        <table>
            <tr>
                <td rowspan="10" width="100px">
                    <img src="https://lh3.googleusercontent.com/a/AGNmyxZ-zOBys7FRq4mM_p4zuiobJYFIwssca7lqDaAd=s96" width="200px"
                        style="display: block;border-radius: 50%;border-color:white;margin-right:30px" border="2px">
                </td>
            </tr>
            <tr>
                <td><b>Nama</b></td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td><b>Nim</b></td>
                <td>:</td>
                <td><?= $nim ?></td>
            </tr>
            <tr>
                <td><b>Jurusan</b></td>
                <td>:</td>
                <td><?= $jurusan ?></td>
            </tr>
            <tr>
                <td><b>Instagram</b></td>
                <td>:</td>
                <td><a href="<?= $instagram ?>"><?= $instagram ?></a></td>
            </tr>
        </table>
    </div>
</body>

</html>
