<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $major_id = $_POST['major_id'];
    
    $sql = "INSERT INTO students SET nis='$nis' , name='$name', gender='$gender' , pob='$pob' , dob='$dob' , major_id='$major_id'";
    $result = mysqli_query($con, $sql);
    if ($result){
        //var_dump($sql);
        //exit;
        //var dum buat ngasih tau salah untuk sementara dihapus atau dikomentar agar orang tidak dapat melihat kesalahan
        header('location: ?m=santri');
    } else {
        include('index.php?m=santri');
        echo '<script language="JavaScript">';
            echo'alert("Data gagal ditambahkan")';
        echo '</script>';
    }
} else {
     echo "Jangan langsung kesini, klik untuk <a href='?m=santri&s=add'>disini</a>";
    //echo '<';
}
