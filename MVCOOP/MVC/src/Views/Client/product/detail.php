<h2>Chi tiết sản phẩm: <?= $product['name'] ?></h2>

<div class="row">
    <table border="1">
        <tr>
            <th>Trường dữ liệu</th>
            <th>Giá trị</th>
        </tr>
        <tr>
            <td>ID</td>
            <td><?= $product['id'] ?></td>
        </tr>
        <tr>
            <td>IMAGE</td>
            <td>
                <img src="kimoanh-851.jpeg" width="100px" />
            </td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><?= $product['name'] ?></td>
        </tr>
    </table>
</div>