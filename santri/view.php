<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
<!--col maks 12 -->
                <div class="card-title h3 col-8">Data Santri</div>
                <div class="col-4">
                    <a href="?m=santri&s=add" class="btn btn-md btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered tabel-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Santri</th>
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
                        $sql = "SELECT students.id AS ids, students.nis, students.name AS names, students.gender, students.pob, students.dob, students.major_id, majors.id, majors.name AS namen FROM students JOIN majors ON majors.id=students.major_id";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)) {
                            $no=1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo'<tr>
                                 <td>'.$no.'</td>
                                 <td>'.$r['nis'].'</td>
                                 <td>'.$r['names'].'</td>
                                 <td>'.$r['gender'].'</td>
                                 <td>'.$r['pob'].'</td>
                                 <td>'.$r['dob'].'</td>
                                 <td>'.$r['namen'].'</td>
                                 <td>
                                    <a href="?m=santri&s=edit&id='.$r['ids'].'" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?m=santri&s=delete&id='.$r['ids'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Seriusan DiHAPUS, Kalo ngehapus santri data santrinya hilang juga \')">Hapus</a>
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
