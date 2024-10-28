<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $subject_id = $_POST['subject_id'];

    $sql = "UPDATE teachers SET nip='$nip', name='$name', gender='$gender', pob='$pob', dob='$dob', subject_id='$subject_id' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result){
        header('location: ?m=instruktur');
    } else {
        include('index.php?m=instruktur');
        echo '<script language="JavaScript">';
            echo'alert("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    echo "Jangan langsung kesini, klik untuk <a href='?m=instruktur&s=add'>disini</a>";
}
