<?php
$conn_string = "host=ec2-3-224-164-189.compute-1.amazonaws.com port=5432 " . 
    "dbname=df8f0tp94vjcqc user=ruvefagnhulnee " .
    "password=07bb0c8ec7f5a43dbcd5111c9bebca05dd9d4dc43fe7b09ec000d963d93711e7";
$conn = pg_connect($conn_string);

if($conn) {
    // echo "Koneksi DB Berhasil";
} else {
    echo "Koneksi DB GAGAL";
}
?>