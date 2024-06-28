<div class="w-full d-flex justify-content-end align-items-end">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
    </button>
</div>

<section>
    <div class="table-responsive">
        <table class="w-full table dataTable">
            <thead class="table-primary">
                <tr>
                    <th>Nama Lengkap</th>
                    <th class="text-start">NIP</th>
                    <th>Hak Akes Pengguna</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 20; $i++) :
                ?>
                    <tr>
                        <th scope="row">
                            <img src="/assets/img/avatar.png" alt="" width="40" height="40" class="rounded-pill object-cover">
                            Rikza Fauzan Nurfadilah, S.Kom
                        </th>
                        <td class="text-start">4320945987603</td>
                        <td><span class="badge text-bg-primary">Lurah</span></td>
                        <td>
                            <a href="" class="btn btn-ghost"><i class="bi bi-pen"></i></a>
                            <a href="" class="btn btn-ghost"><i class="bi bi-trash"></i></a>
                            <a href="" class="btn btn-ghost"><i class="bi bi-share"></i></a>
                        </td>
                    </tr>
                <?php
                endfor;
                ?>
            </tbody>
        </table>
    </div>
</section>

<script>
    $('.dataTable').DataTable({
        order: [
            [3, 'ASC']
        ]
    });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tabah Data Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="number" class="form-control" placeholder="NIP" aria-label="NIP" aria-describedby="basic-addon1" name="nip">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-people"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="basic-addon1" name="namalengkap">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-people"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Jabatan" aria-label="jabatan" aria-describedby="basic-addon1" name="jabatan">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-key"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="pass" aria-describedby="basic-addon1" name="pass">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="fw-medium">Pilih Hak Akses Pengguna</p>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check shadow">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radio
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
