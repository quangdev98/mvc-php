
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách danh mục
                <small></small>
            </h1>
            <p class="addQuery"><a href="/category/add_cate">Thêm thể loại</a></p>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="customers">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Bài viết</th><!-- 
                    <th>Status</th> -->
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $data['data'] as $cate ){ ?>
                <tr class="" align="center">
                    <td><?= $cate->id ?></td>
                    <td><?= $cate->name ?></td>
                    <td><?= $cate->numberPost ?></td>
                    <!-- <td>Hiện</td> -->
                    <td class="center"><a href="/category/delete?id=<?= $cate->id ?>"><i class="fad fa-trash-alt"></i></a></td>
                    <td class="center"><a href="/category/dataCate?id=<?= $cate->id ?>"><i class="fad fa-pencil"></i></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.row -->
</div>
           