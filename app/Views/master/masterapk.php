<h6 class="fw-bold" style="font-size: 32px;">
Daftar Lokasi Pemasangan APK
</h6>

<div class="row g-2">
    <div class="col-md-8">
        <div id="myMap" style="width: 100%; height: 100dvh;"></div>
    </div>
    <div class="col-md-4">
        <div class="card bg-blue-gradient">
            <div class="card-body text-white text-center">
                <h5>JUMLAH TITIK LOKASI</h5>
                <h1 class="fw-bold">2022</h1>
                <small>TITIK LOKASI APK</small>
            </div>
        </div>

        <div class="mt-3 d-flex justify-content-between align-items-center">
            <p class="fw-bold">Filter Data</p>
            <button class="btn btn-sm btn-blue-gradient" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i> Tambah Data</button>
        </div>

        <div class="mt-2">
            <form action="">
                <select name="" id="" class="form-control form-select">
                    <option>Pilih Kecamatan</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </form>
        </div>

        <div class="mt-2">
            <table class="w-100 table">
                <thead>
                    <tr>
                        <th scope="col">Jalan</th>
                        <th scope="col">Kelurahan</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    for($i=1; $i<=10; $i++):
                    ?>
                    <tr>
                        <td class="text-truncate" style="max-width: 150px;">JL Kemerdekaan 55 jdsifnisd</td>
                        <td class="text-truncate" style="max-width: 150px;">Kel Mangkubumi</td>
                    </tr>
                    <?php
                    endfor;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-primary">
      <div class="modal-body">
      <div class="row g-2 align-items-center">
            <!-- form -->
            <div class="col-md-6">
                <h5 class="text-center fw-medium">Tambah APK</h5>
                <form action="">
                    <div class="row g-2">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text" id="kecamatan"><i class="bi bi-buildings"></i></span>
                                <input type="text" class="form-control" placeholder="Kecamatan" aria-label="kecamatan" aria-describedby="kecamatan">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text" id="kelurahan"><i class="bi bi-buildings"></i></span>
                                <input type="text" class="form-control" placeholder="Kelurahan" aria-label="kelurahan" aria-describedby="kelurahan">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text" id="JlName"><i class="bi bi-signpost-split"></i></span>
                                <input type="text" class="form-control" placeholder="Nama Jalan" aria-label="jlName" aria-describedby="JlName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" id="latitude"><i class="bi bi-crosshair"></i></span>
                                <input type="text" id="latitude" class="form-control" placeholder="Latitude" aria-label="latitude" aria-describedby="latitude">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text" id="longitude"><i class="bi bi-crosshair"></i></span>
                                <input type="text" id="longitude" class="form-control" placeholder="Longitude" aria-label="longitude" aria-describedby="longitude">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex justify-content-start w-100">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x"></i></button>
                                <div class="flex-1 w-100"><button type="submit" class="btn btn-md btn-primary w-100">Simpan</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div id="mapInput" style="width: 100%; height: 400px;"></div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
      function initMap() {
        var initialLocation = {lat: -7.3274, lng: 108.2202}; // Initial location (Tasikmalaya)
        
        var map = new google.maps.Map(document.getElementById('mapInput'), {
          zoom: 12,
          center: initialLocation
        });

        var marker = new google.maps.Marker({
          position: initialLocation,
          map: map,
          draggable: true
        });

        // Update form fields when marker is dragged
        google.maps.event.addListener(marker, 'dragend', function(evt) {
          document.getElementById('latitude').value = evt.latLng.lat().toFixed(6);
          document.getElementById('longitude').value = evt.latLng.lng().toFixed(6);
        });
      }
    </script>

<script>
    function initMap() {
    // The location of Tasikmalaya
    var tasikmalaya = {lat: -7.3274, lng: 108.2202};
    // The map, centered at Tasikmalaya
    var map = new google.maps.Map(document.getElementById('myMap'), {
        zoom: 12,
        center: tasikmalaya
    });
    // The marker, positioned at Tasikmalaya
    var marker = new google.maps.Marker({
        position: tasikmalaya,
        map: map
    });
    }
</script>