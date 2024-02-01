<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi Tiết Người Dùng</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Chi Tiết Người Dùng <?= $user['name']?></h1>

        <div class="row">
            <table class="table">
                <tr>
                    <th>Trường dữ liệu</th>
                    <th>Giá trị</th>
                </tr>
                <tr>
                    <td>ID</td>
                    <td> <?= $user['user_id']?> </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <?= $user['name']?> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> <?= $user['email'] ?> </td>
                </tr>
                <tr> 
                    <td>Password</td>
                    <td> <?= $user['password']?> </td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>