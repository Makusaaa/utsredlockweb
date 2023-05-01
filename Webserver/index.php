<?php
    $con = mysqli_connect('RedlockDB', 'root', '', 'redlock', 3306);
    
    $data = [];
    $result = $con->query("SELECT * FROM users");
    while($row = $result->fetch_assoc()) array_push($data, $row);
?>

<!DOCTYPE html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/tw-cen-mt-condensed" rel="stylesheet">
</head>
<body>
    <table class="tabel">
        <tr class="tabhead">
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
        <?php $total = 0; ?>
        <?php foreach($data as $d){?>
            <?php $total = $total + 1;?>
            <tr>
                <td><?=$d["ID"]?></td>
                <td><?=$d["Nama"]?></td>
                <td><?=$d["Alamat"]?></td>
                <td><?=$d["Jabatan"]?></td>
            </tr>
        <?php }?>
    </table>
    <h1>Total Jumlah User: <?=$total?></h1>
</body>
</html>