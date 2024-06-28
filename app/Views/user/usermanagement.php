<div class="w-full d-flex justify-content-end align-items-end">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">
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
                    <th>Jabatan</th>
                    <th>Email</th>
                    <th>Hak Akes Pengguna</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <th scope="row">
                            <img src="/assets/img/avatar.png" alt="" width="40" height="40" class="rounded-pill object-cover">
                            <?= $user['name'] ?>
                        </th>
                        <td><?= $user['nip'] ?></td>
                        <td><?= $user['jabatan'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><span class="badge text-bg-primary"><?= $user['role'] ?></span></td>
                        <td>
                            <button class="btn btn-warning edit-button" data-id="<?= $user['id'] ?>" data-name="<?= $user['name'] ?>" data-nip="<?= $user['nip'] ?>" data-jabatan="<?= $user['jabatan'] ?>" data-email="<?= $user['email'] ?>" data-role="<?= $user['role'] ?>" data-bs-toggle="modal" data-bs-target="#editUserModal"><i class="bi bi-pen"></i> Edit</button>
                            <form action="/usersdelete/<?= $user['id'] ?>" method="post" style="display: inline;">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');"><i class="bi bi-trash"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
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

    // Mengisi data pada form edit ketika tombol edit diklik
    $('.edit-button').click(function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var nip = $(this).data('nip');
        var jabatan = $(this).data('jabatan');
        var email = $(this).data('email');
        var role = $(this).data('role');

        $('#editUserModal form').attr('action', 'useredit/' + id);
        $('#editUserModal input[name="id"]').val(id);
        $('#editUserModal input[name="name"]').val(name);
        $('#editUserModal input[name="nip"]').val(nip);
        $('#editUserModal input[name="jabatan"]').val(jabatan);
        $('#editUserModal input[name="email"]').val(email);
        $('#editUserModal select[name="role"]').val(role);
    });
</script>

<!-- Modal Tambah Data -->
<div class="modal fade" id="addUserModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="addUserModalLabel">Tambah Data Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php if (session()->getFlashdata('success')) { ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php } ?>

            <?php if (session()->getFlashdata('error')) { ?>
                <div class="alert alert-danger">
                    <?php foreach (session()->getFlashdata('error') as $field => $error) : ?>
                        <p><?= $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php } ?>
                    
            <?= form_open('user'); ?>
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
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-people"></i>
                            </span>
                            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" aria-label="jabatan" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-people"></i>
                            </span>
                            <input type="text" class="form-control" name="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-key"></i>
                            </span>
                            <input type="password" class="form-control" name="password" placeholder="Password" aria-label="pass" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">       
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-people"></i>
                            </span>                     
                            <select name="role" class="form-control">
                                <option value="">Pilih Hak Akses</option>
                                <option value="walikota">Walikota</option>
                                <option value="kecamatan">Kecamatan</option>
                                <option value="kelurahan">Kelurahan</option>
                                <!-- <option value="kpu">KPU</option> -->
                            </select>
                        </div>
                    </div>                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary">Simpan Data</button>
                            <?= form_close(); ?>                                                
                            <!-- <button class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button> -->
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Data -->
<div class="modal fade" id="editUserModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="editUserModalLabel">Edit Data Pengguna</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php if (session()->getFlashdata('success')) { ?>
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success'); ?>
                </div>
            <?php } ?>

            <?php if (session()->getFlashdata('error')) { ?>
                <div class="alert alert-danger">
                    <?php foreach (session()->getFlashdata('error') as $field => $error) : ?>
                        <p><?= $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php } ?>
            
            <?= form_open('', ['id' => 'editUserForm']); ?>
            <input type="hidden" name="id">
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
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" aria-label="Nama" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-people"></i>
                            </span>
                            <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" aria-label="jabatan" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-people"></i>
                            </span>
                            <input type="text" class="form-control" name="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-key"></i>
                            </span>
                            <input type="password" class="form-control" name="password" placeholder="Password" aria-label="pass" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">       
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-people"></i>
                            </span>                     
                            <select name="role" class="form-control">
                                <option value="">Pilih Hak Akses</option>
                                <option value="walikota">Walikota</option>
                                <option value="kecamatan">Kecamatan</option>
                                <option value="kelurahan">Kelurahan</option>
                                <!-- <option value="kpu">KPU</option> -->
                            </select>
                        </div>
                    </div>                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary">Update Data</button>
                            <?= form_close(); ?>                    
                            <!-- <button class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button> -->
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
