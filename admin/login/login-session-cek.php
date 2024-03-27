
<!-- 
     admin dashboard resto rynth untuk tugas 

     Nama      : Ebnu Arbynatha
     Kelas     : 12 RPL 4
     Absen     : 09
     
     menu untuk mengecek apakah terdapat user yang mencoba untuk tersambung ke admin.php di layoutadmin
-->


<?php
if (empty($_SESSION['login'])) {
?>
     <script>
          window.location.href = 'login.php';
     </script>
<?php
}
?>