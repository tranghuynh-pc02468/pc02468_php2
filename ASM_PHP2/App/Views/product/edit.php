<main id="main" class="main">
    <div class="pagetitle">
        <h1>Sản phẩm</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
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
                            <h5 class="card-title">Cập nhật sản phẩm</h5>
                            <!--                            --><?php //var_dump($data); die(); ?>
                            <!-- Vertical Form -->
                            <form class="row g-3" action="?url=ProductController/update/<?= $data['list']['id'] ?>"
                                  method="POST" enctype="multipart/form-data">
                                <div class="col-12 col-md-6">
                                    <label for="category_id" class="form-label">Danh mục</label>
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        <option value="">--- Chọn danh mục ---</option>
                                        <?php foreach ($data['category'] as $item): ?>
                                            <option value="<?= $item['id'] ?>"  <?= $item['id'] == $data['list']['category_id'] ?  'selected' : '' ?>  > <?= $item['name'] ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <label for="inputName4" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" id="inputName4" name="name"
                                           value="<?= $data['list']['name'] ?>">
                                </div>
                                <div class="col-12 col-md-2">
                                    <label for="quantity" class="form-label">Số lượng</label>
                                    <input type="text" id="quantity" class="form-control" name="quantity"
                                           value="<?= $data['list']['quantity'] ?>">
                                </div>
                                <div class="col-12 col-md-2">
                                    <label for="price" class="form-label">Giá</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                           value="<?= $data['list']['price'] ?>">
                                </div>
                                <div class="col-12 col-md-2">
                                    <label for="price_sale" class="form-label">Giá giảm</label>
                                    <input type="text" class="form-control" name="price_sale" id="price_sale"
                                           value="<?= $data['list']['price_sale'] ?>">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="" class="form-label">Kích thước (cm)</label>
                                    <div class="row">
                                        <?php
                                        $tem = explode('-', $data['list']['dimension']);
                                        //                                        var_dump($tem);
                                        ?>
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName"
                                                       placeholder="Your Name" value="<?= $tem[0] ?>">
                                                <label for="floatingName">Chiều cao</label>
                                            </div>
                                            <!--                                            <input type="text" class="form-control" placeholder="Chiều cao" name="height" value="-->
                                            <?php //= $tem[0] ?><!--">-->
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName"
                                                       placeholder="Your Name" value="<?= $tem[1] ?>">
                                                <label for="floatingName">Chiều dài</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingName"
                                                       placeholder="Your Name" value="<?= $tem[2] ?>">
                                                <label for="floatingName">Chiều rộng</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="material" class="form-label">Vật liệu</label>
                                    <input type="text" class="form-control" name="material" id="material"
                                           value="<?= $data['list']['material'] ?>">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="status" class="form-label">Trạng thái</label>
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option value="0" <?= $data['list']['status'] == 0 ? 'selected' : '' ?>>Ẩn
                                        </option>
                                        <option value="1" <?= $data['list']['status'] == 1 ? 'selected' : '' ?>>Hiển
                                            thị
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="image" class="form-label">Hình ảnh</label>
                                    <input type="file" class="form-control" name="image" id="image"
                                           value="<?= $data['list']['image'] ?>">
                                </div>
                                <div class="col-12 col-md-6">
                                    <img src="<?= ROOT_URL . '/uploads/' . $data['list']['image'] ?>" alt="image"
                                         style="height: 100px">
                                </div>
                                <div class="col-12">
                                    <label for="editor" class="form-label">Mô tả</label>
                                    <textarea id="editor" class="form-control" cols="30" rows="10"
                                              name="content"><?= $data['list']['content'] ?></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="btn-submit" class="btn btn-primary">Cập nhật</button>
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