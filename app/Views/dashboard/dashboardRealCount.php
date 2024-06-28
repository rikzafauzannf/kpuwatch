<div class="d-flex justify-content-center align-items-center mb-4">
    <div class="text-center">
        <h4 class="fw-semibold">
            REAL COUNT PILKADA <br>
            KOTA TASIKMALAYA TAHUN 2024
        </h4>
        <small class="fs-6 fw-light text-secondary ilatic">sumber data sirekap kpu 2024</small>
    </div>
</div>

<div class="card mb-4 shadow border border-none">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h4 class="fw-medium">Grafik Perolehan Suara</h4>
            </div>
            <div class="col-md-4">
                <div class="w-100 h-auto p-4 rounded border border-none shadow bg-gradient-purple">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4>
                                Data Masuk
                            </h4>
                        </div>
                        <div class="col-md-6">
                            <h1 class="fw-bold" style="font-size: 80px;">50%</h1>
                        </div>
                        <div class="col-md-12 text-center">
                            <small class="fw-light">
                                dari 428.000 suara
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div id="chart2"></div>
        </div>
    </div>
</div>

<div class="row" data-slick='{"slidesToShow": 2, "slidesToScroll": 4}'>
    <?php
    for ($i = 1; $i <= 4; $i++) :
    ?>
        <div class="col-md-3">
            <div class="card shadow bg-gradient-purple">
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
                                <span class="fw-light">Calon Wali Kota</span>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="/assets/img/avatar.png" alt="" width="50" height="50" class="rounded-pill border border-2 border-primary shadow">
                        </div>
                        <div class="col-md-9">
                            <p class="fw-bold">Nama Paslon <br>
                                <span class="fw-light">Calon Wali Kota</span>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <span class="badge text-bg-primary">#Paslon <?= $i ?></span>
                            <div class="mt-2">
                                <p class="fw-medium">Jumlah Perolehan Suara</p>
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="me-3">
                                        <h1 class="fw-bold" style="font-size: 70px;">40%</h1>
                                    </div>
                                    <small>dari 480.000 suara <br> Sumber <i>Sirekap KPU</i></small>
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

<div class="mt-5">
    <h4>Data Rekapitulasi Tabulasi</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-sm dataTable w-100">
            <thead class="bg-gradint-purple">
                <tr>
                    <th rowspan="2" class="text-center">No.</th>
                    <th rowspan="2" class="text-center">Kecamatan</th>
                    <th rowspan="2" class="text-center">Jumlah DPT</th>
                    <th rowspan="2" class="text-center">Jumlah TPS</th>
                    <th colspan="2" class="text-center">Jumlah Data</th>
                    <th rowspan="2" class="text-center">Paslon 1</th>
                    <th rowspan="2" class="text-center">Paslon 2</th>
                </tr>
                <tr>
                    <th>Total Suara Sah</th>
                    <th>Total Suara Tidak Sah</th>
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
    options = {
        chart: {
            type: 'bar'
        },
        series: [{
            data: [{
                x: 'Paslon 1',
                y: 10
            }, {
                x: 'Paslon 2',
                y: 18
            }, {
                x: 'Paslon 3',
                y: 13
            }, {
                x: 'Paslon 4',
                y: 10
            }]
        }],
        dropShadow: {
            enabled: true,
            top: 0,
            left: 0,
            blur: 3,
            opacity: 0.5
        },
        colors: ['#4C3BCF'],
        dataLabels: {
            enabled: true,
            style: {
                fontSize: '20px', // Set the font size for data labels
                fontWeight: 'bold' // Set the font weight for data labels
            }
        },
        xaxis: {
            labels: {
                style: {
                    fontSize: '14px', // Set the font size for x-axis labels
                    fontWeight: 'bold' // Set the font weight for x-axis labels
                }
            }
        },
        yaxis: {
            labels: {
                style: {
                    fontSize: '14px', // Set the font size for y-axis labels
                    fontWeight: 'bold' // Set the font weight for y-axis labels
                }
            }
        }
    }

    var chart = new ApexCharts(document.querySelector("#chart2"), options);

    chart.render();
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
