<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chào mừng đến với bình nguyên vô tận</h1>
    <?php var_dump($listProduct) ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Giá</th>
        </tr>
            <?php foreach($listProduct as $value){?>
            <tr>
                <td><?php echo $value['id'];?></td>
                <td><?php echo $value['name'];?></td>
                <td><?php echo $value['price'];?></td>
            </tr>
            <?php }?>
    </table>
</body>
</html>