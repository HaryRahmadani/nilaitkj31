<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $subject_id = $_POST['subject_id'];
    
    $sql = "INSERT INTO teachers SET nip='$nip' , name='$name', gender='$gender' , pob='$pob' , dob='$dob' , subject_id='$subject_id'";
    $result = mysqli_query($con, $sql);
    if ($result){
        //var_dump($sql);
        //exit;
        //var dum buat ngasih tau salah untuk sementara dihapus atau dikomentar agar orang tidak dapat melihat kesalahan
        header('location: ?m=instruktur');
    } else {
        include('index.php?m=instruktur');
        echo '<script language="JavaScript">';
            echo'alert("Data gagal ditambahkan")';
        echo '</script>';
    }
} else {
     echo "Jangan langsung kesini, klik untuk <a href='?m=instruktur&s=add'>disini</a>";
    //echo '<';
}
