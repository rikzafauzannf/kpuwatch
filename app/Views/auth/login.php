<div class="row align-items-center">
    <div class="col-md-8 bg-primary p-5 min-vh-100 align-items-center d-flex justify-content-center">
        <div class="text-white">
            <h1 class="fw-bold">APLIKASI E-MONEV</h1>
            <p>MONITORING & EVALUASI DESK PILKADA 2024</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-none shadow">
            <div class="card-body text-center">
                <div class="w-100 d-flex justify-content-center align-items-center mb-3">
                    <img src="/assets/img/logoKota.png" alt="" class="w-50">
                </div>
                <h4 class="fw-semibold">SILAHKAN LOGIN</h4>
                <p class="text-secondary">
                    Selamat Datang
                </p>
                <?php if (session()->getFlashdata('success')) { ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php } ?>
                <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>

                <?= form_open('login'); ?>                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="Username" aria-label="Username" name="email" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="password" aria-label="Username" name="password" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="w-100 btn btn-primary rounded-pill shadow">Login</button>
                            <a href="" class="fs-6 text-secondary link-ghost">Lupa Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
