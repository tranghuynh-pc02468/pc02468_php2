<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container mt-3">
        <div class="card mb-3">
            <div class="card-header">Lab 1 - Bài 3</div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="mb-3 col-md-3">
                            <input type="text" class="form-control" name="email" placeholder="Nhập email">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary">Submit</button>
                        </div>  
                    </div>
                    <div class="row">
                    <h3><?=  $user['user_name'] ??''; ?></h3>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Lab 1 bài 4</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $item ): ?>
                        <tr>
                            <td><?= $item['user_name'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td>
                                <button class="btn btn-primary"><i class="bi bi-pencil-square"></i> Sửa</button>
                                
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>