<div class="d-flex justify-content-center align-items-center mb-4">
    <div class="text-center">
        <h4 class="fw-semibold">
            QUICK COUNT PILKADA <br>
            KOTA TASIKMALAYA TAHUN 2024
        </h4>
        <small class="fs-6 fw-light text-secondary ilatic">sumber data sirekap kpu 2024</small>
    </div>
</div>

<div class="card mb-4">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h4>Grafik Perolehan Suara</h4>
            </div>
            <div class="col-md-4">
                <div class="w-100 h-auto p-4 rounded border shadow-md">
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
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <p>IND</p>
                    </div>
                    <div class="row align-items-center g-1">
                        <div class="col-md-3">
                            img
                        </div>
                        <div class="col-md-9">
                            <p class="fw-bold">Nama Paslon <br>
                                <span class="fw-light text-secondary">Calon Wali Kota</span>
                            </p>
                        </div>
                        <div class="col-md-3">
                            img
                        </div>
                        <div class="col-md-9">
                            <p class="fw-bold">Nama Paslon <br>
                                <span class="fw-light text-secondary">Calon Wali Kota</span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endfor;
    ?>
</div>

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
