<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["mhs"]["nama"] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data["mhs"]["nim"] ?></h6>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data["mhs"]["jurusan"] ?></h6>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data["mhs"]["angkatan"] ?></h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?= BASEURL ?>/mahasiswa" class="card-link">Back</a>
        </div>
    </div>
</div>