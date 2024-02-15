<main id="main" class="main">
<div class="pagetitle">
    <h1>Người dùng</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
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
                        <h5 class="card-title">Danh sách người dùng</h5>
                        <!-- Bordered Table -->
                        <div class="table-responsive ">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Trang thái</th>
                                    <th>Vai trò</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <?php $i=1; foreach ($data as $item):  ?>
                                    <tr>
                                        <th><?= $i ?></th>
                                        <td><?= $item['name'] ?></td>
                                        <td><?= $item['email'] ?></td>
                                        <td><?= $item['status'] == 0 ? 'Ẩn' : 'Hiển thị' ?></td>
                                        <td><?= $item['role'] == 0 ? 'Khách hàng' : 'Quản trị' ?></td>
                                        <td>
                                            <a href="" class="btn btn-primary">Sửa</a>
                                            <a href="" class="btn btn-warning">Xóa</a>
                                        </td>
                                    </tr>
                                <?php $i++; endforeach; ?>
                                
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