<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập Nhật Người Dùng</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Cập Nhật Người Dùng <?=$user['name']?></h1>

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
                    <label for="id" class="form-label">ID:</label>
                    <input type="text" class="form-control" id="id" value="<?=$user['user_id']?>" required placeholder="Enter id" name="id">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" value="<?=$user['name']?>" required placeholder="Enter name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" value="<?=$user['email']?>" required placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" value="<?=$user['password']?>" required placeholder="Enter password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>