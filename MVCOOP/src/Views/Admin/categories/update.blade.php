<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập Nhật Danh Mục</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Cập Nhật Danh Mục <?= $categories['name'] ?></h1>

        <div class="row">
            @if(!empty($_SESSION['success']))
            <div class="alert alert-success">
                {{ $_SESSION['success'] }}
            </div>

            @php
            $_SESSION['success'] = null;
            @endphp
            @endif

            <form action="" method="POST">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" required placeholder="Enter name" value="<?=$categories['name']?>" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/admin/categories" class="btn btn-warning">Danh sách Danh mục</a>
            </form>
        </div>
    </div>

</body>

</html>