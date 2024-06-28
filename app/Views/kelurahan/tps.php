<div class="d-flex justify-content-start align-items-center gap-4">
    <h5>Kelurahan : Default</h5>
    <h5>Kecamatan : Default</h5>
</div>
<div class="row mb-4">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 bg-gradient-purple border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Jumlah Data TPS
                        </h6>
                        <h5 class="fw-bold" style="font-size: 40px;">60000</h5>
                        <small class="fw-bold">Tempat Pemungutan Suara</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 bg-gradient-purple border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Jumlah Pemilih
                        </h6>
                        <div class="row">
                            <div class="col-6">
                                <h5 class="fw-bold" style="font-size: 40px;">60000</h5>
                                <small class="fw-bold">Laki - Laki</small>
                            </div>
                            <div class="col-6">
                                <h5 class="fw-bold" style="font-size: 40px;">60000</h5>
                                <small class="fw-bold">Perempuan</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 bg-gradient-purple border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Total Pemilih
                        </h6>
                        <h5 class="fw-bold" style="font-size: 40px;">60000</h5>
                        <small class="fw-bold">Akumulasi Pemilih L + P</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-none border">
            <div class="card-body">
                <form action="">
                    <div class="row">
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
    <div class="col-md-9">
        <h5 class="fw-bold">
            Peta Lokasi TPS-DPT Kota Tasikmalaya
        </h5>
    </div>
    <div class="col-md-3">
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
            <button class="btn btn-md btn-gradient-purple">CSV</button>
            <button class="btn btn-md btn-ghost">EXCEL</button>
            <button class="btn btn-md btn-ghost">PDF</button>
            <button type="button" class="btn btn-gradient-purple" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                        <th scope="col">No.</th>
                        <th scope="col">Dapl</th>
                        <th scope="col">Kelurahan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Jumlah Pemilih</th>
                        <th scope="col">Meliputi RT/RW</th>
                        <th scope="col">RT</th>
                        <th scope="col">RW</th>
                        <th scope="col">Ciri & Lokasi TPS</th>
                        <th scope="col">Titik Koordinat</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    for ($i = 1; $i <= 20; $i++) :
                    ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $i ?></th>
                            <td>DAPl 01</td>
                            <td>Mangkubumi</td>
                            <td>Mangkubumi</td>
                            <td>2000</td>
                            <td>RT 1,2,3 RW 12</td>
                            <td>03</td>
                            <td>12</td>
                            <td>SDN 1 Mangkubumi</td>
                            <td>Long - Lat</td>
                            <td>
                                <a href="#" class="btn btn-ghost">Detail</a>
                            </td>
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
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tambah Data TPS</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-md-6">
                        <form action="">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="NO" name="NO">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="DAPL" name="DAPL">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="NO TPS" name="NOTPS">
                                </div>
                                <div class="col-md-6"><input type="text" class="form-control" placeholder="Kecamatan" name="Kecamatan"></div>
                                <div class="col-md-6"><input type="text" class="form-control" placeholder="Kelurahan" name="Kelurahan"></div>
                                <div class="col-md-6"><input type="text" class="form-control" placeholder="Jumlah Pemilih LK" name="jumlahLK"></div>
                                <div class="col-md-6"><input type="text" class="form-control" placeholder="Jumlah Pemilih P" name="jumlahP"></div>
                                <div class="col-md-4"><input type="text" class="form-control" placeholder="Akumlasi Jumlah LK+P" name="akumulasiJumlah"></div>
                                <div class="col-md-8"><input type="text" class="form-control" placeholder="Meliputi RT/RW" name="meliputiRT/RW"></div>
                                <div class="col-md-2"><input type="number" class="form-control" placeholder="RT" name="RT"></div>
                                <div class="col-md-2"><input type="number" class="form-control" placeholder="RW" name="RW"></div>
                                <div class="col-md-8"><input type="text" class="form-control" placeholder="Ciri & Lokasi TPS" name="ciriTPS"></div>
                                <div class="col-md-6"><input type="text" class="form-control" placeholder="Langtitude" name="lang"></div>
                                <div class="col-md-6"><input type="text" class="form-control" placeholder="Longtitude" name="long"></div>
                                <div class="col-md-12"><input type="file" class="form-control" placeholder="file" name="mutiplyImage" multiple></div>
                                <div class="col-md-6">
                                    <select name="kategori" id="kategori" class="form-control form-select">
                                        <option>Kategori TPS</option>
                                        <option value="indoor">Indoor</option>
                                        <option value="Outdoor">Outdoor</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-4"><button type="submit" class="btn btn-md btn-primary w-100 shadow">Simpan Data</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: -34.397,
                lng: 150.644
            },
            zoom: 8
        });
    }
</script>
