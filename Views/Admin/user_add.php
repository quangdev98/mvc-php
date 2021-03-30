
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User
                <small>Add</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="name" placeholder="Username" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Nhập phone" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
                </div>
                <div class="form-group">
                    <label>User Level</label>
                    <label class="radio-inline">
                        <input name="level" value="1" checked="" type="radio">Admin
                    </label>
                    <label class="radio-inline">
                        <input name="level" value="2" type="radio">Member
                    </label>
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" class="form-control" name="image" placeholder="Please Enter Email" />
                </div>
                <button type="submit" class="btn btn-default">User Add</button>
            <form>
        </div>
    </div>
    <!-- /.row -->
</div>
