<div class="row">
    <div class="col-md-3">
        <div class="card border border-top-3 border-info shadow-md bg-primary bg-gradient text-white my-2">
            <div class="card-body">
                <h5><i class="bi bi-clipboard2-check"></i> Jumlah TPS</h5>
                <h3 class="text-md-center fw-semibold">101010</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border border-top-3 border-info shadow-md bg-primary bg-gradient text-white my-2">
            <div class="card-body">
                <h5><i class="bi bi-clipboard2-check"></i> Jumlah DPT</h5>
                <h3 class="text-md-center fw-semibold">101010</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border border-top-3 border-info shadow-md bg-primary bg-gradient text-white my-2">
            <div class="card-body">
                <h5><i class="bi bi-clipboard2-check"></i> Jumlah DPTB</h5>
                <h3 class="text-md-center fw-semibold">101010</h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border border-top-3 border-info shadow-md bg-primary bg-gradient text-white my-2">
            <div class="card-body">
                <h5><i class="bi bi-clipboard2-check"></i> Jumlah DPPH</h5>
                <h3 class="text-md-center fw-semibold">101010</h3>
            </div>
        </div>
    </div>
</div>

<!-- statistic -->
<section class="mt-4">
    <h5>Persentase Kesiapan</h5>
    <div class="row">
        <div class="col-md-4">
            <?php
            for ($i = 1; $i <= 6; $i++) :
            ?>
                <div class="p-3 my-2 bg-white shadow w-100 rounded d-flex justify-content-between align-items-center">
                    <h5>Kecamatan <?= $i ?></h5>
                    <button class="btn btn-success btn-md bg-gradient">CEK</button>
                </div>
            <?php
            endfor;
            ?>
        </div>
        <div class="col-md-8">
            <div class="card border-none shadow">
                <div class="card-body">
                    <h1>Chart</h1>
                    <p>Persentase dari kelayakan dan kerusakan</p>
                    <p>hasil di raih dari cek surpras data yang di cek di lapangan</p>
                </div>
            </div>
        </div>
    </div>
</section>
