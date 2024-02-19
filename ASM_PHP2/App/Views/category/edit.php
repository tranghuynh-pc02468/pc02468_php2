<main id="main" class="main">
<div class="pagetitle">
    <h1>Danh mục</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh mục</li>
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
                        <h5 class="card-title">Cập nhật danh mục</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="?url=CategoryController/update/<?= $data['id'] ?>" method="POST">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" id="inputNanme4" name="name" value="<?= $data['name'] ?>">
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

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="btn-submit">Cập nhật</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
</main>
