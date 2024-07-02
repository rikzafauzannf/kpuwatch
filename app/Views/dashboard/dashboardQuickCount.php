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
                <h4 class="fw-medium">Grafik Perolehan Suara</h4>
            </div>
            <div class="col-md-4">
                <div class="w-100 h-auto p-4 rounded border border-none shadow bg-gradient-purple">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h6>
                                Data Masuk
                            </h6>
                        </div>
                        <div class="col-6">
                            <h1 class="fw-bold" style="font-size: 42px;">50%</h1>
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


<section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track">
		<ul class="splide__list">
        <?php
    for ($i = 1; $i <= 4; $i++) :
    ?>
			<li class="splide__slide">
            <div class="card shadow bg-gradient-purple mx-2">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <img src="/assets/img/flagIDN.png" alt="" srcset="" style="width: 15%;">
                    </div>
                    <div class="row align-items-center g-1">
                        <div class="col-3">
                            <img src="/assets/img/avatar.png" alt="" class="w-100 rounded-pill border border-2 border-primary shadow">
                        </div>
                        <div class="col-9">
                            <small class="fw-bold">Nama Paslon <br>
                                <span class="fw-light">Calon Wali Kota</span>
                            </small>
                        </div>
                        <div class="col-3">
                            <img src="/assets/img/avatar.png" alt="" class="w-100 rounded-pill border border-2 border-primary shadow">
                        </div>
                        <div class="col-9">
                            <small class="fw-bold">Nama Paslon <br>
                                <span class="fw-light">Calon Wali Kota</span>
                            </small>
                        </div>
                        <div class="col-md-12">
                            <span class="badge text-bg-primary">#Paslon <?= $i ?></span>
                            <div class="mt-2">
                                <p class="fw-medium">Jumlah Perolehan Suara</p>
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="me-3">
                                        <h1 class="fw-bold" style="font-size: 42px;">40%</h1>
                                    </div>
                                    <small style="font-size: 10px;">dari 480.000 suara <br> Sumber <i>Sirekap KPU</i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </li>
            <?php
    endfor;
    ?>
		</ul>
  </div>
</section>


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
