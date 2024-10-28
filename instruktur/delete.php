<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];
    
    $sql = "DELETE FROM teachers WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result){
        header('location: ?m=instruktur');
    } else {
        include('index.php?m=instruktur');
        echo '<script language="JavaScript">';
            echo'alert("Data gagal dihapus")';
        echo '</script>';
    }
} else {
    echo "Jangan langsung kesini, klik untuk <a href='?m=instruktur&s=add'>disini</a>";
}
