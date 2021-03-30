<form action="" method="POST" enctype="multipart/form-data">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm mới Bài viết
                            <small></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
            <div class="col-md-7">
                <div class="form-group">
                  <label for="">Tiêu Đề</label>
                  <input type="text" class="form-control" id="input" name="title" placeholder="Tiêu Đề">
                </div>
                <div class="form-group">
                  <label for="">Nội dung</label>
                  <textarea name="content" id="content" class="form-control" rows="5" placeholder="Nội Dung..."></textarea>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label for="">Nội Dung Hot</label>
                    <input type="text" class="form-control" name="contentHot" placeholder="Giới hạn 70 kí tự">
                </div>
                <div class="form-group">
                    <label for="">Thẻ</label>
                    <input type="text" class="form-control" name="tag" placeholder="Thẻ tag">
                </div>
                <div class="form-group">
                    <label for="">Thể loại</label>
                    <select name="cate_id" class="form-control">
                        <?php foreach ($data['data']['categories'] as $val){ ?>  
                            <option value="<?= $val->id ?>"><?= $val->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tác giả</label>
                    <select name="user_id" class="form-control">
                        <?php foreach ($data['data']['users'] as $val){ ?>  
                            <option value="<?= $val->id ?>"><?= $val->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">Ảnh</label>
                  <input type="file" class="form-control" id="select_img" required="required" name="image">
                  <img src="" alt="" id="show_img" class="img-responsive">
                </div>
            </div>
                </div>
                <button type="submit" name="submit" class="btn btn-success">Thêm mới</button>
                <!-- /.row -->
            </div>
            </form>

       