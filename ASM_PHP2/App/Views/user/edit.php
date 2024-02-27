<main id="main" class="main">
    <div class="pagetitle">
        <h1>Người dùng</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                <li class="breadcrumb-item active">Người dùng</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cập nhật người dùng</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" action="?url=UserController/update/<?= $data['id'] ?>" method="POST">
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Tên</label>
                                    <input type="text" class="form-control" id="inputNanme4" name="name" value="<?= $data['name'] ?>" disabled>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $data['email'] ?>" disabled>
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-2 col-form-label">Trạng thái</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option value="0" <?= $data['status'] == 0 ? 'selected' : '' ?>>Ẩn</option>
                                            <option value="1" <?= $data['status'] == 1 ? 'selected' : '' ?>>Hiển thị</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-2 col-form-label">Vai trò</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option value="0" <?= $data['role'] == 0 ? 'selected' : '' ?>>Khách hàng</option>
                                            <option value="1" <?= $data['role'] == 1 ? 'selected' : '' ?>>Quản trị</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="btn-submit">Cập nhật</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>
                    <?php unset($_SESSION['error']); ?>

                </div>
            </div>
        </div>
    </section>
</main>
