<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
<!--col maks 12 -->
                <div class="card-title h3 col-8">Edit Instruktur</div>
                <div class="col-4">
                    <a href="?m=instruktur&s=view" class="btn btn-md btn-primary float-end">Kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM teachers WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query);
            ?>
            <div class="card-body">
                <form action="?m=instruktur&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="nip" value="<?=$r['nip']?>" class="form-control" placeholder="No Induk Instruktur" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" value="<?=$r['name']?>" class="form-control" placeholder="Nama Instruktur" required >
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin:</label>&nbsp;
                        <input type="radio" name="gender" value="Laki-laki" <?= $r['gender'] == 'Laki-laki' ? 'checked' : '' ?> required>Laki-laki &nbsp;
                        <input type="radio" name="gender" value="Perempuan" <?= $r['gender'] == 'Perempuan' ? 'checked' : '' ?>  required>Perempuan 
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pob" value="<?=$r['pob']?>" class="form-control" placeholder="Tempat Lahir" required >
                    </div>
                    <div class="mb-3">
                        <input type="date" name="dob" value="<?=$r['dob']?>" class="form-control" placeholder="Tanggal Lahir" required >
                    </div>
                    <div class="mb-3">
                        <select name="subject_id" class="form-control" required>
                            <option value="">Pilih Jurusan</option>
                                <?php
                                $sql2 = "SELECT id,name FROM subjects";
                                $query2 = mysqli_query($con, $sql2);
                                while ($r2 = mysqli_fetch_array($query2)) {
                                ?>
                                   <option value="<?=$r2['id']?>" <?=$r2['id']==$r['subject_id'] ? 'selected' : '' ?>><?=$r2['name']?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$r['id']?>">
                        <input type="reset" class="btn btn-warning">&nbsp;
                        <input type="submit" name="update" value="Update" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--