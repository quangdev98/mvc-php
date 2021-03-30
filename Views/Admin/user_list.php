
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                        <p class="addQuery"> <a href="/users/create">Add User</a></p>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="customers">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Số Điện thoại</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['data'] as $val) { ?>
                            <tr class="odd gradeX" align="center">
                                <td><?= $val->id ?></td>
                                <td><?= $val->name ?></td>
                                <td><?= $val->phone ?></td>
                                <td><?= $val->email ?></td>
                                <td>Hiện</td>
                                <td class="center"><a href="/users/delete?id=<?= $val->id ?>"><i class="fad fa-trash-alt"></i></a></td>
                                <td class="center"><a href="/users/update?id=<?= $val->id ?>"><i class="fad fa-pencil"></i></a></td>
                            </tr>
                           <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
       