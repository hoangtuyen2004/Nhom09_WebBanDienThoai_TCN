<?php

namespace MVC;

class Controller {
    protected function render($view, $data = []) {
        extract($data);
        include "Views/".$view.".php";
    }
    protected function checkTai_khoan() {
        if (isset($_SESSION['tai_khoan']) && isset($_SESSION['trang_thai'])) {
            //Nếu mã trang thái là 1 tức người dùng bình thuòng
            if ($_SESSION['trang_thai'] == 1) {
                return true;
            }
            //Nếu là tài khoản admin thì chuyển đến trang dashboard
            else if ($_SESSION['trang_thai'] == 2) {
                $this->render("admin/dashboard");
            }
            //Nếu người dùng đã bị chặn
            else if ($_SESSION['trang_thai'] == 3) {
                return false;
            }
        }
        else {
            return false;
        }
    }
    protected function renderAdmin($view, $data = []) {
        $data['view'] = $view;
        include_once "Views/admin/dashboard.php";
        die();
        extract($data);
        if (isset($_SESSION['tai_khoan']) && $_SESSION['trang_thai'] == 2) {
            include_once "Views/admin/dashboard.php";
        }
        else {
            header('location: /');
        }
    }
}