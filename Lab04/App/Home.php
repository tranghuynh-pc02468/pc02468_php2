<?php

namespace App;

class Home
 {
    public static function index(): string
    {
        return '<h2>Trang chủ </h2>';
    }

    public static function form() {
        return '
        <form action="/upload" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="btn btn-primary" type="submit">Submit</div>
                        </div>
                    </form>
        ';
    }

    public function upload(){
        $filePath = STORAGE_PATH.'/'.$_FILES['receipt']['name'];
        move_uploaded_file(
            $_FILES['receipt']['tmp_name'],
            $filePath
        );
        var_dump(pathinfo($filePath));
    }
}