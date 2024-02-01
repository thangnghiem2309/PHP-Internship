<?php 

namespace Thangnghiem\Mvcoop\Controllers\Admin;

use Thangnghiem\Mvcoop\Commons\Controller;
use Thangnghiem\Mvcoop\Models\Users;

class UsersController extends Controller
{
    private Users $user;

    private string $folder = 'users.';

    public function __construct() {
        $this->user = new Users;
    }

    // Danh sách
    public function index() {
        $data['users'] = $this->user->getAll();

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Thêm mới
    public function create() {
        if (!empty($_POST)) {
            $this->user->insert($_POST['id'],$_POST['name'], $_POST['email'], $_POST['password']);

            header('Location: /admin/users');
            exit();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Xem chi tiết theo ID
    public function show($user_id) {
        $data['user'] = $this->user->getByID($user_id);

        if (empty($data['user'])) {
            die(404);
        }

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Cập nhật theo ID
    public function update($user_id) {
        $data['user'] = $this->user->getByID($user_id);

        if (empty($data['user'])) {
            die(404);
        }
        if (!empty($_POST)) {
            $this->user->update(
                $user_id,
                $_POST['name'], 
                $_POST['email'], 
                $_POST['password']
            );

            $_SESSION['success'] = 'Thao tác thành công!';

            header("Location: /admin/users/$user_id/update");
            exit();
        }
        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Delete theo ID
    public function delete($user_id) {
        $this->user->deleteByID($user_id);
        header('Location: /admin/users');
        exit();
    }
}