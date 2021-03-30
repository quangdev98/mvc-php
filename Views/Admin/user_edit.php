
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User
                <small>Sửa</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="name" placeholder="Username" value="<?= $data['data']['name'] ?>" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" value="<?= $data['data']['password'] ?>" />
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Nhập phone" value="<?= $data['data']['phone'] ?>" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Please Enter Email" value="<?= $data['data']['email'] ?>" />
                </div>
                <div class="form-group">
                    <label>User Level</label>
                    <label class="radio-inline">
                        <input name="level" value="1"  type="radio">Admin
                    </label>
                    <label class="radio-inline">
                        <input name="level" value="2" checked="" type="radio">Member
                    </label>
                </div>
                <button type="submit" class="btn btn-default">User Add</button>
            <form>
        </div>
    </div>
    <!-- /.row -->
</div>
