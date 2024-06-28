<div class="d-flex justify-content-center align-items-center mb-4">
    <div class="text-center">
        <h4 class="fw-semibold">
            QUICK COUNT PILKADA <br>
            KOTA TASIKMALAYA TAHUN 2024
        </h4>
        <small class="fs-6 fw-light text-secondary ilatic">sumber data sirekap kpu 2024</small>
    </div>
</div>

<div class="card mb-4 shadow border border-none">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h4 class="fw-semibold">Grafik Perolehan Suara</h4>
            </div>
            <div class="col-md-4">
                <div class="w-100 h-auto p-4 rounded border border-none shadow">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4>
                                Data Masuk
                            </h4>
                        </div>
                        <div class="col-md-6">
                            <h1 class="fw-bold">50%</h1>
                        </div>
                        <div class="col-md-12 text-center">
                            <small class="fw-light text-secondary">
                                dari 428.000 suara
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <canvas id="chartSuara"></canvas>
        </div>
    </div>
</div>

<div class="row" data-slick='{"slidesToShow": 2, "slidesToScroll": 4}'>
    <?php
    for ($i = 1; $i <= 4; $i++) :
    ?>
        <div class="col-md-3">
            <div class="card shadow border border-none">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <p>IND</p>
                    </div>
                    <div class="row align-items-center g-1">
                        <div class="col-md-3">
                            <img src="/assets/img/avatar.png" alt="" width="50" height="50" class="rounded-pill border border-2 border-primary shadow">
                        </div>
                        <div class="col-md-9">
                            <p class="fw-bold">Nama Paslon <br>
                                <span class="fw-light text-secondary">Calon Wali Kota</span>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="/assets/img/avatar.png" alt="" width="50" height="50" class="rounded-pill border border-2 border-primary shadow">
                        </div>
                        <div class="col-md-9">
                            <p class="fw-bold">Nama Paslon <br>
                                <span class="fw-light text-secondary">Calon Wali Kota</span>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <span class="badge text-bg-primary">#Paslon <?= $i ?></span>
                            <div class="mt-3">
                                <p class="fw-medium">Jumlah Perolehan Suara</p>
                                <div class="d-flex justify-content-start align-items-center">
                                    <h1 class="fw-bold">40%</h1>
                                    <p>dari 480.000 suara <br> Sumber <i>Sirekap KPU</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endfor;
    ?>
</div>

<div class="mt-4">
    <h4>Data Rekapitulasi Tabulasi</h4>
    <div class="table-responsive">
        <table class="table-bordered table-sm dataTable w-100">
            <thead class="table-primary">
                <tr>
                    <th>No.</th>
                    <th>Kecamatan</th>
                    <th>Jumlah DPT</th>
                    <th>Jumlah TPS</th>
                    <th>Total Suara Sah</th>
                    <th>Total Suara Tidak Sah</th>
                    <th>Paslon 1</th>
                    <th>Paslon 2</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                for ($i = 1; $i <= 20; $i++) :
                ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $i ?></th>
                        <td>Mangkubumi</td>
                        <td>728</td>
                        <td>100</td>
                        <td>30</td>
                        <td>10</td>
                        <td>90</td>
                        <td>99</td>
                    </tr>
                <?php
                endfor;
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $('.dataTable').DataTable({
        order: [
            [3, 'ASC']
        ]
    });
</script>

<script>
    const ctx = document.getElementById('chartSuara');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Paslon 1', 'Paslon 1', 'Paslon 1', 'Paslon 1', 'Paslon 1', 'Paslon 1'],
            datasets: [{
                label: 'Persentase suara',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
