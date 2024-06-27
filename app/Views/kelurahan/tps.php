<div class="d-flex justify-content-start align-items-center gap-4">
    <h5>Kelurahan : Default</h5>
    <h5>Kecamatan : Default</h5>
</div>
<div class="row mb-3">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 bg-primary bg-gradient border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Jumlah Data TPS
                        </h6>
                        <h5 class="fw-bold">60000</h5>
                        <small>Tempat Pemungutan Suara</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 bg-primary bg-gradient border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Jumlah Pemilih
                        </h6>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="fw-bold">60000</h5>
                                <small>Laki - Laki</small>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold">60000</h5>
                                <small>Perempuan</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 bg-primary bg-gradient border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Total Pemilih
                        </h6>
                        <h5 class="fw-bold">60000</h5>
                        <small>Akumulasi Pemilih L+P</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
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

<div class="row align-items-center">
    <div class="col-md-10">
        <h5 class="fw-bold">
            Peta Lokasi TPS-DPT Kota Tasikmalaya
        </h5>
    </div>
    <div class="col-md-2">
        <!-- fillter action -->
        <div class="row">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>

        </div>
    </div>
    <!-- table -->
    <div class="col-md-12 mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead class="table-primary">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data TPS</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
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
                                <div class="col-md-12"><button type="submit" class="btn btn-md btn-primary w-100 shadow">Submit</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>
