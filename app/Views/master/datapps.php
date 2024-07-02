<div class="d-flex justify-content-start align-items-center gap-4">
    <p class="fw-medium">Kelurahan : Default</p>
    <p class="fw-medium">Kecamatan : Default</p>
</div>
<div class="row mb-4">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-blue-gradient border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Jumlah Data PPS
                        </h6>
                        <h5 class="font-number-core">60000</h5>
                        <small class="font-subs-core">Tempat Pemungutan Suara</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-blue-gradient border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Kecamatan
                        </h6>
                        <h1 class="fw-bold">10</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-blue-gradient border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Kelurahan
                        </h6>
                        <h1 class="fw-bold">69</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-none border">
            <div class="card-body">
                <form action="">
                    <div class="row g-2">
                        <div class="col-md-12">
                            <h5>Filter Data</h5>
                        </div>
                        <div class="col-md-6">
                            <select name="" id="" class="form-control form-select">
                                <option> Pilih Kecamatan</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select name="" id="" class="form-control form-select">
                                <option> Pilih Kelurahan</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row align-items-center">
    <div class="col-md-8">
        <h6 class="fw-bold" style="font-size: 32px;">
        Daftar PPS Kota Tasikmalaya
        </h6>
    </div>
    <div class="col-md-4">
        <!-- fillter action -->
        <!-- <div class="row g-3">
        <div class="col-md-6">
                <form action="">
                    <div class="d-flex">
                        <input type="text" class="form-control" placeholder="Cari Data ...">
                        <button type="submit" class="btn btn-sm btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        <div class="col-md-12">
                <div class="d-flex g-3">
                    <button class="btn btn-md btn-primary">CSV</button>
                    <button class="btn btn-md btn-ghost">EXCEL</button>
                    <button class="btn btn-md btn-ghost">PDF</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data
                    </button>
                </div>
            </div>
        </div> -->
        <div class="d-flex g-3 w-full">
            <button class="btn btn-sm btn-blue-gradient">CSV</button>
            <button class="btn btn-sm btn-ghost">EXCEL</button>
            <button class="btn btn-sm btn-ghost">PDF</button>
            <button type="button" class="btn btn-blue-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data
            </button>
        </div>
    </div>
    <!-- table -->
    <div class="col-md-12 mt-4">
        <div class="table-responsive">
            <table class="table table-sm dataTable w-100">
                <thead>
                    <tr>
                        <th scope="col" class="fs-6 text-center">No.</th>
                        <th scope="col" class="fs-6">Kecamatan</th>
                        <th scope="col" class="fs-6">Kelurahan</th>
                        <th scope="col" class="fs-6">Nama Lengkap</th>
                        <th scope="col" class="fs-6">Jabatan</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    for ($i = 1; $i <= 20; $i++) :
                    ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $i ?></th>
                            <td>Mangkubumi</td>
                            <td>Mangkubumi</td>
                            <td>MUKIDI</td>
                            <td>SEKRI</td>
                        </tr>
                    <?php
                    endfor;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $('.dataTable').DataTable({
        order: [
            [3, 'ASC']
        ]
    });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-medium text-primary" id="exampleModalLabel">Tambah Data PPS</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row g-2 text-primary">
                        <div class="col-md-12"  data-bs-toggle="tooltip" data-bs-title="NIP / Username">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                <input type="text" class="form-control" placeholder="NIP" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-phone"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h6>Pilih Status</h6>
                            <div class="d-flex justify-content-start align-items-start">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="ASN">
                                    <label class="form-check-label" for="ASN">
                                        ASN
                                    </label>
                                </div>
                                <div class="form-check ms-4">
                                    <input class="form-check-input" type="radio" name="status" id="NON-ASN">
                                    <label class="form-check-label" for="NON-ASN">
                                        NON ASN
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-md btn-primary" style="width: 100%;">SIMPAN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
