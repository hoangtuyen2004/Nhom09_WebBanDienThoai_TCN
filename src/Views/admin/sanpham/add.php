<div class="card">
    <div class="">
        <h3 class="cart-title text-center px-5 py-3 bg-secondary text-light"><?= $title ?></h3>
    </div>
    <div class="container my-3">
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="lable-control" for="">Tên sản phẩm</label>
                    <input class="form-control" type="text" name="ten_san_pham" id="">
                    <?php if ($check) : ?>
                        <div class='form-text text-danger' style='font-size: 15px;'>Vui lòng điền tên sản phẩm</div>
                    <?php endif ?>
                    <?php if (!$check) : ?>
                        <?php if ($checkForm) : ?>
                            <div class='form-text text-danger' style='font-size: 15px;'>Đã tồn tại</div>
                        <?php endif ?>
                    <?php endif ?>
                </div>
                <div class="mb-3">
                    <label class="lable-control" for="">Ảnh chính</label>
                    <input class="form-control" type="file" name="anh_chinh" id="">
                </div>
                <div class="mb-3">
                    <label class="lable-control" for="">Ảnh 1</label>
                    <input class="form-control" type="file" name="anh_phu_1" id="">
                </div>
                <div class="mb-3">
                    <label class="lable-control" for="">Ảnh 2</label>
                    <input class="form-control" type="file" name="anh_phu_2" id="">
                </div>
                <div class="mb-3">
                    <label class="lable-control" for="">Ảnh 3</label>
                    <input class="form-control" type="file" name="anh_phu_3" id="">
                </div>

                <div class="mb-3">
                    <label class="lable-control" for="">Mô tả ngắn</label>
                    <input class="form-control" type="text" name="mo_ta_ngan" id="">
                </div>

                <div class="mb-3">
                    <label class="lable-control" for="">Mô tả </label>
                    <textarea class="form-control" id="" name="mo_ta" rows="3"></textarea>

                </div>

                <div class="mb-3">

                    <select class="form-select" name="id_danh_mucs" aria-label="Chọn danh mục">
                        <option selected>Chọn danh mục</option>
                        <?php foreach ($danhmucs as $key => $danhmuc) : ?>
                            <option value="<?= $danhmuc['id'] ?>"> <?= $danhmuc['ten_danh_muc'] ?></option>
                        <?php endforeach ?>
                    </select>

                </div>


                <div class="text-center">
                    <input name="submit" class="btn btn-success" type="submit" value="Thêm mới">
                    <input class="btn btn-danger" type="reset" value="Xóa">
                    <a class="btn btn-info" href="/admin-san-pham">Quay lại</a>
                </div>
            </form>

        </div>
    </div>
</div>