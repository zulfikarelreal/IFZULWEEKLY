<?php
    $connection = mysqli_connect("localhost", "root", "zulfikar230904", "ifzulweekly");

    function tampildata($query) { // proses data yang diminta
        global $connection;
        $result = mysqli_query($connection, $query); // lemari sesuai perintah

        // siapkan wadah
        $rows = [];

        // ambil data
        while($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row; // taruh di wadah
        } 
        return $rows; // membawa wadah berisi data
    }
?>
