<?php

namespace App;

class Home
 {
    public  function index(): string
    {
        return '<h2>Huỳnh Thị Thiên Trang - PC02468</h2>';
    }

    public static function form() {
        return '
        <form action="/upload" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="receipt" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" name="btn-submit">Submit</button>
                        </div>
                    </form>
        ';
    }

    public function upload(){
        if(isset($_POST['btn-submit'])){ 
            $old_name = $_FILES['receipt']['name'];
            $file_extension = pathinfo($old_name, PATHINFO_EXTENSION);
            $new_name = date('YmdHis').'.'.$file_extension;
            // echo $old_name .'<br>';
            // echo $file_extension.'<br>';
            // echo $new_name;
            // echo _DIR_ROOT_.'/uploads/';
            move_uploaded_file(
                $_FILES['receipt']['tmp_name'],
                _DIR_ROOT_.'/uploads/'.$new_name
            );
        }
    }
}