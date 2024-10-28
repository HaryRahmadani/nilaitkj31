<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
<!--col maks 12 -->
                <div class="card-title h3 col-8">Data Instruktur</div>
                <div class="col-4">
                    <a href="?m=instruktur&s=add" class="btn btn-md btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered tabel-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Instruktur</th>
                            <th>Gender</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT teachers.id AS ids, teachers.nip, teachers.name AS names, teachers.gender, teachers.pob, teachers.dob, teachers.subject_id, subjects.id, subjects.subject AS namen FROM teachers JOIN subjects ON subjects.id=teachers.subject_id";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)) {
                            $no=1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo'<tr>
                                 <td>'.$no.'</td>
                                 <td>'.$r['nip'].'</td>
                                 <td>'.$r['names'].'</td>
                                 <td>'.$r['gender'].'</td>
                                 <td>'.$r['pob'].'</td>
                                 <td>'.$r['dob'].'</td>
                                 <td>'.$r['namen'].'</td>
                                 <td>
                                    <a href="?m=instruktur&s=edit&id='.$r['ids'].'" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?m=instruktur&s=delete&id='.$r['ids'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Seriusan DiHAPUS, Kalo ngehapus instruktur data instrukturnya hilang juga \')">Hapus</a>
                                </td>
                                </tr>';
                                $no++;
                            }
                        } else {
                            echo '<tr>
                                <td colspan="8" align="center">Data kosong</td>
                            </tr>';
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
