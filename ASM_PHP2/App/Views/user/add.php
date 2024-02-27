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
                            <h5 class="card-title">Thêm mới người dùng</h5>

                            <!-- Vertical Form -->
                            <form class="row g-3" action="?url=UserController/store" method="POST">
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Tên</label>
                                    <input type="text" class="form-control" id="inputNanme4" name="name" value="<?= isset($old['name']) ? $old['name'] : '' ?>" >
                                    <small class="text-danger"> <?= (!empty($errors) && array_key_exists('name', $errors)) ?  $errors['name'] : false ?> </small>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= isset($old['email']) ? $old['email'] : '' ?>" >
                                    <small class="text-danger"> <?= (!empty($errors) && array_key_exists('email', $errors)) ?  $errors['email'] : false ?> </small>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="inputPassword" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="inputPassword" name="password" value="<?= isset($old['password']) ? $old['password'] : '' ?>" >
                                    <small class="text-danger"> <?= (!empty($errors) && array_key_exists('password', $errors)) ?  $errors['password'] : false ?> </small>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="inputPass" class="form-label">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" id="inputPass" name="confirm_password" value="<?= isset($old['confirm_password']) ? $old['confirm_password'] : '' ?>" >
                                    <small class="text-danger"> <?= (!empty($errors) && array_key_exists('confirm_password', $errors)) ?  $errors['confirm_password'] : false ?> </small>
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-2 col-form-label">Trạng thái</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option value="0">Ẩn</option>
                                            <option value="1" selected>Hiển thị</option>
                                        </select>
                                    </div>
                                    <small class="text-danger"><?= $_SESSION['error']['status'] ?? '' ?></small>
                                </div>
                                <div class="col-12">
                                    <label class="col-sm-2 col-form-label">Vai trò</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option value="0">Khách hàng</option>
                                            <option value="1" selected>Quản trị</option>
                                        </select>
                                    </div>
                                    <small class="text-danger"><?= $_SESSION['error']['role'] ?? '' ?></small>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="btn-submit">Thêm mới</button>
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
