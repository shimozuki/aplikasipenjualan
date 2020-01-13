<?php
$h ='localhost';
$u ='root';
$p ='';
$db ='hewan_fix';

$koneksi = mysqli_connect($h, $u, $p, $db);
if($koneksi->connect_error){
  echo "gagal terhubung";
}
function daftar($data)
 {
   global $koneksi;

   $NIK = $data['NIK'];
   $nama = $data['nama'];
   $alamat = $data['alamat'];
   $password = $data['password'];
   $data = mysqli_query($koneksi,"INSERT INTO user VALUES('$NIK','$nama','$alamat','$password')");
   if (!$data) {
     echo "<script>
              alert('gagal terdaftar atau anda sudah melakukan pendaftaran sebelumnya');history.go(-1);
              </script>";
              return false;
   }else {
     echo "<script>
            alert('berhasil terdaftar');history.go(1);
            </script>";
   }
   return 1;
 }
 function hewan($dataa)
 {
   global $koneksi;
   $id_hewan = $dataa['id_hewan'];
   $jenis_hewan = $dataa['jenis_hewan'];
   $ciri_hewan = $dataa['ciri_hewan'];
   $jumlah_hewan = $dataa['jumlah_hewan'];
   $jml_betina = $dataa['jml_betina'];
   $jml_jantan = $dataa['jml_jantan'];
   $jml_anak = $dataa['jml_anak'];
   $Nik = $dataa['Nik'];
   $dataa = mysqli_query($koneksi,"INSERT INTO hewan VALUES('$id_hewan','$jenis_hewan','$ciri_hewan','$jumlah_hewan','$jml_betina','$jml_jantan','$jml_anak','$Nik')");
   if (!$dataa) {
     echo "<script>
              alert('gagal terdaftar atau anda sudah melakukan pendaftaran sebelumnya');history.go(-1);
              </script>";
              return false;
   }else {
     echo "<script>
            alert('berhasil terdaftar');history.go(1);
            </script>";
   }
   return 1;
 }
?>