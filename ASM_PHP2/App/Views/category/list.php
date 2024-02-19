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
                        <h5 class="card-title">Danh sách danh mục</h5>
                        <!-- Bordered Table -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Trạng thái</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <?php $i=1; foreach ($data as $item): ?>
                                <tr>
                                    <th><?= $i++; ?></th>
                                    <td><?= $item['name'] ?></td>
                                    <td><span class="badge <?= $item['status'] == 0 ? 'bg-secondary' : 'bg-primary' ?>"><?= $item['status'] == 0 ? 'Ẩn' : 'Hiển thị' ?></span></td>
                                    <td>
                                        <a href="?url=CategoryController/edit/<?= $item['id'] ?>" class="btn btn-primary">Sửa</a>
                                        <a onclick="return confirm(`Bạn có chắc muốn xóa không?`);" href="?url=CategoryController/delete/<?= $item['id'] ?>" type="button" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- End Bordered Table -->

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
</main>