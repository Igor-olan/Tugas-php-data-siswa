<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <?php include('template/Header.php'); ?>

</head>
<?php $Murid = [
    [
        "Nama" => "Igor",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "17",
        "Status" => "Hadir"
    ],
    [
        "Nama" => "Fachri",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "17",
        "Status" => "Hadir"
    ],
    [
        "Nama" => "Joel",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "17",
        "Status" => "Hadir"
    ],
    [
        "Nama" => "Hansel",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "16",
        "Status" => "Hadir"
    ],
    [
        "Nama" => "Abdillah",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "16",
        "Status" => "Sakit"
    ],
    [
        "Nama" => "Razwa",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "17",
        "Status" => "Izin"
    ],
    [
        "Nama" => "Rifandi",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "16",
        "Status" => "Hadir"
    ],
    [
        "Nama" => "Lutfi",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "16",
        "Status" => "Hadir"
    ],
    [
        "Nama" => "Satria",
        "Kelas" => "XI",
        "Jurusan" => "PPLG",
        "Umur" => "16",
        "Status" => "Hadir"
    ]
]
?>

<body>
    <!-- main content start -->
    <div class="main-content">

        <div class="panel">
                    <div class="panel-header">
                        <h5>Kehadiran</h5>
                        <hr>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($Murid as $Data) { ?>
                                <tr>
                                    <td><?php echo($Data['Nama'])?></td>
                                    <td><?php echo($Data['Kelas'])?></td>
                                    <td><?php echo($Data['Jurusan'])?></td>
                                    <td><?php echo($Data['Umur'])?></td>
                                    <td><?php echo($Data['Status'])?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->
</body>

<?php include('template/Footer.php'); ?>)