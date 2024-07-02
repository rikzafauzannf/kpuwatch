<div class="d-flex justify-content-start align-items-center gap-4">
    <p class="fw-medium">Kelurahan : Default</p>
    <p class="fw-medium">Kecamatan : Default</p>
</div>
<div class="row mb-4">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-gradient-purple border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Jumlah Data TPS
                        </h6>
                        <h5 class="font-number-core">60000</h5>
                        <small class="font-subs-core">Tempat Pemungutan Suara</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-gradient-purple border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Jumlah Pemilih
                        </h6>
                        <div class="row">
                            <div class="col-6">
                                <h5 class="font-number-core">60000</h5>
                                <small class="font-subs-core">Laki - Laki</small>
                            </div>
                            <div class="col-6">
                                <h5 class="font-number-core">60000</h5>
                                <small class="font-subs-core">Perempuan</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-gradient-purple border-none shadow">
                    <div class="card-body text-center text-white">
                        <h6>
                            Total Pemilih
                        </h6>
                        <h5 class="font-number-core">60000</h5>
                        <small class="font-subs-core">Akumulasi Pemilih L + P</small>
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
        <h6 class="fw-bold">
            Peta Lokasi TPS-DPT Kota Tasikmalaya
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
            <button class="btn btn-sm btn-gradient-purple">CSV</button>
            <button class="btn btn-sm btn-ghost">EXCEL</button>
            <button class="btn btn-sm btn-ghost">PDF</button>
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
                        <th scope="col" class="fs-6">No.</th>
                        <th scope="col" class="fs-6">Dapl</th>
                        <th scope="col" class="fs-6">Kelurahan</th>
                        <th scope="col" class="fs-6">Kecamatan</th>
                        <th scope="col" class="fs-6">Jumlah Pemilih</th>
                        <th scope="col" class="fs-6">Meliputi RT/RW</th>
                        <th scope="col" class="fs-6">RT</th>
                        <th scope="col" class="fs-6">RW</th>
                        <th scope="col" class="fs-6">Ciri & Lokasi TPS</th>
                        <th scope="col" class="fs-6">Titik Koordinat</th>
                        <th scope="col" class="fs-6">Opsi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php 
                        $i = 1;
                        foreach ($datatps as $datatpss): 
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
                        $i++;
                        endforeach;                         
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
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-md-6">
                        <?= form_open('datatpsave', ['enctype' => 'multipart/form-data']); ?>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="NO" name="NO">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="DAPIL" name="dapil">
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="NO TPS" name="notps">
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Kecamatan" name="Kecamatan">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Kelurahan" name="Kelurahan">
                                </div>
                                <hr>                                
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="Jumlah Pemilih LK" name="jml_l" id="jml_l">
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="Jumlah Pemilih P" name="jml_p" id="jml_p">
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="Jumlah LK+P" name="jml_lp" id="akumulasiJumlah" readonly>
                                </div>
                                <hr>                                
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Meliputi RT/RW" name="meliputi">
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" placeholder="RT" name="rt">
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" placeholder="RW" name="rw">
                                </div>                                
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Ciri & Lokasi TPS" name="ciri">
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Latitude" name="latitude" readonly>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Longitude" name="longitude" readonly>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <div class="drag-drop-area" id="drag-drop-area">
                                        Geser gambar disini atau klik untuk Upload
                                    </div>
                                    <input type="file" class="form-control" id="multipleImage" name="multipleImage[]" multiple hidden>
                                </div>
                                <div class="col-md-12">
                                    <div id="preview-container" class="preview-container"></div>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <select name="kategori" id="kategori" class="form-control form-select">
                                        <option>Kategori TPS</option>
                                        <option value="indoor">Indoor</option>
                                        <option value="Outdoor">Outdoor</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-md btn-primary w-100 shadow">Simpan Data</button>
                                    <?= form_close(); ?>   
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <input id="pac-input" class="controls form-control mb-3" type="text" placeholder="Search Box">
                        <div id="map" style="width: 100%; height: 500px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function calculateTotal() {
        let jml_l = parseInt(document.getElementById('jml_l').value) || 0;
        let jml_p = parseInt(document.getElementById('jml_p').value) || 0;

        let total = jml_l + jml_p;

        document.getElementById('akumulasiJumlah').value = total;
    }

    document.getElementById('jml_l').addEventListener('input', calculateTotal);
    document.getElementById('jml_p').addEventListener('input', calculateTotal);
</script>

<script>
    let map;
    let marker;
    let searchBox;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: -7.351121506053825,
                lng: 108.21657083250759
            },
            zoom: 15
        });

        marker = new google.maps.Marker({
            position: {
                lat: -7.351121506053825,
                lng: 108.21657083250759
            },
            map: map,
            draggable: true
        });

        marker.addListener('dragend', function() {
            updateLatLngFields(marker.getPosition());
        });

        const input = document.getElementById('pac-input');
        searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        searchBox.addListener('places_changed', function() {
            const places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            marker.setMap(null);

            const bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }

                marker = new google.maps.Marker({
                    map: map,
                    title: place.name,
                    position: place.geometry.location,
                    draggable: true
                });

                updateLatLngFields(marker.getPosition());

                marker.addListener('dragend', function() {
                    updateLatLngFields(marker.getPosition());
                });

                if (place.geometry.viewport) {
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
    }

    function updateLatLngFields(location) {
        document.getElementsByName('lat')[0].value = location.lat();
        document.getElementsByName('lng')[0].value = location.lng();
    }

    function previewImages(files) {
        const previewContainer = document.getElementById('preview-container');
        previewContainer.innerHTML = ''; // Clear previous previews

        for (const file of files) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                previewContainer.appendChild(img);
            }
            reader.readAsDataURL(file);
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.getElementById('multipleImage');
        const dropArea = document.getElementById('drag-drop-area');

        fileInput.addEventListener('change', function() {
            previewImages(fileInput.files);
        });

        dropArea.addEventListener('click', function() {
            fileInput.click();
        });

        dropArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            dropArea.classList.add('dragging');
        });

        dropArea.addEventListener('dragleave', function() {
            dropArea.classList.remove('dragging');
        });

        dropArea.addEventListener('drop', function(e) {
            e.preventDefault();
            dropArea.classList.remove('dragging');
            const files = e.dataTransfer.files;
            fileInput.files = files;
            previewImages(files);
        });

        $('#exampleModal').on('shown.bs.modal', function() {
            initMap();
        });
    });
</script>
