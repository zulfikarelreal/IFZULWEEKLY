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

    function tambahdata($data) {
        global $connection;

        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
        $foto = htmlspecialchars($data["foto"]);

        $query = "INSERT INTO mahasiswa(nama, nim, prodi, email, no_hp, foto)
        VALUES ('$nama', '$nim', '$prodi', '$email', '$no_hp', '$foto')";

        mysqli_query($connection, $query);

        return mysqli_affected_rows($connection); // QUERY OK 1 ROW AFFECTED
    }

    function hapusdata($id) {
        global $connection;

        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($connection, $query);
        
        return mysqli_affected_rows($connection); // QUERY OK 1 ROW AFFECTED
    }
?>
