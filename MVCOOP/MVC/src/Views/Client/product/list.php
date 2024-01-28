<h2>Danh sách sản phẩm</h2>

<div class="row">

    <?php foreach ($productAll as $item) : ?>
        <div class="col-md-4 mt-5">
            <div class="card">
                <img class="card-img-top" src="kimoanh-851.jpeg" alt="<?= $item['name'] ?>" />
                <div class="card-body">
                    <h4 class="card-title"><?= $item['name'] ?></h4>
                    <p class="card-text"><?= $item['created_at'] ?></p>
                    <a href="/?act=ctsp&id=<?= $item['id'] ?>" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>