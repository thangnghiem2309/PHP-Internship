<?php 

namespace Thangnghiem\Mvcoop\Controllers\Admin;

use Thangnghiem\Mvcoop\Commons\Controller;
use Thangnghiem\Mvcoop\Models\Categories;

class CategoriesController extends Controller
{
    private Categories $categories;

    private string $folder = 'categories.';

    public function __construct() {
        $this->categories = new Categories;
    }

    // Danh sách
    public function index() {
        $data['categories'] = $this->categories->getAll();

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Thêm mới
    public function create() {
        if (!empty($_POST)) {
            $this->categories->insert($_POST['name']);

            header('Location: /admin/categories');
            exit();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Xem chi tiết theo ID
    public function show($cate_id) {
        $data['categories'] = $this->categories->getByID($cate_id);

        if (empty($data['categories'])) {
            die(404);
        }

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Cập nhật theo ID
    public function update($cate_id) {
        $data['categories'] = $this->categories->getByID($cate_id);

        if (empty($data['categories'])) {
            die(404);
        }

        if (!empty($_POST)) {
            $this->categories->update(
                $cate_id,
                $_POST['name']
            );

            $_SESSION['success'] = 'Thao tác thành công!';

            header("Location: /admin/categories/$cate_id/update");
            exit();
        }

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Delete theo ID
    public function delete($cate_id) {
        $this->categories->deleteByID($cate_id);

        header('Location: /admin/categories');
        exit();
    }
}