<main id="main" class="main">
<div class="pagetitle">
    <h1>Sản phẩm</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
            <li class="breadcrumb-item active">Sản phẩm</li>
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
                        <h5 class="card-title">Danh sách sản phẩm</h5>
                        <!-- Bordered Table -->
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Trạng thái</th>
                                    <th>Hình ảnh</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <?php
                                    $i=1;
                                    foreach ($data as $item):
                                        if($item['price_sale'] !== 0){
                                            $tem = 100 - ($item['price_sale']*100/$item['price']);
                                            echo '';
                                        }
                                ?>
                                <tr>
                                    <th><?= $i++ ?></th>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['price_sale']==0 ? number_format($item['price']) : number_format($item['price_sale']) ?>đ
                                        <?php
                                        if((int)$item['price_sale'] !== 0){
                                            var_dump($item['price_sale']);
                                            $tem = 100 - ($item['price_sale']*100/$item['price']);
                                            echo '<br>
                                                <span class="text-decoration-line-through text-secondary">'. number_format($item['price']) .'đ</span> <span class="badge text-bg-warning text-danger">-'.  $tem .'%</span>
                                            ';
                                        }
                                        ?>
                                    </td>
                                    <td><?= $item['quantity'] ?></td>
                                    <td><span class="badge <?= $item['status'] == 0 ? 'bg-secondary' : 'bg-primary' ?>"><?= $item['status'] == 0 ? 'Ẩn' : 'Hiển thị' ?></span></td>
                                    <td><img src="<?= ROOT_URL.'/uploads/'.$item['image'] ?>" alt="image" style="width: 100px"></td>
                                    <td>
                                        <a href="?url=ProductController/edit/<?= $item['id'] ?>" class="btn btn-primary">Sửa</a>
                                        <a href="" class="btn btn-danger">Xóa</a>
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