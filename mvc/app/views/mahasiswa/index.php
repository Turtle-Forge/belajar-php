<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data
            </button>
            <br><br>

            <h3>Daftar Mahasiswa</h3>


            <?php foreach ($data["mhs"] as $mhs) : ?>
                <ul class="list-group">

                    <li class="list-group-item">
                        <?= $mhs["nama"] ?>

                        <a class="badge badge-danger float-right ml-3" href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs["id"] ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>

                        <a class="badge badge-warning float-right ml-3 tampilModalUbah" href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs["id"] ?>" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs["id"] ?>">Ubah</a>

                        <a class="badge badge-primary float-right ml-3" href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs["id"] ?>">Detail</a>

                    </li>

                </ul>
            <?php endforeach; ?>


        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama mahasiswa" required>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" value="105222023" placeholder="105222023" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Teknik Logistik">Teknik Logistik</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Teknik Perminyakan">Teknik Perminyakan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan </label>
                        <input type="number" class="form-control" id="angkatan" name="angkatan" value="2020" placeholder="2020" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>