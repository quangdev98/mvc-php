

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài viết
                            <small>Danh sách</small>
                        </h1>
                        <p class="addQuery"><a href="/posts/add">Thêm bài viết</a></p>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="customers">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung nổi bật</th>
                                <th>Thể loại</th>
                                <th>Tác giả</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ( $data['data'] as $pro ){ ?>
                                <tr class="" align="center">
                                    <td><?= $pro->id ?></td>
                                    <td><?= $pro->title ?></td>
                                    <td><?= $pro->contentHot ?></td>
                                    <td><?= $pro->categoryName ?></td>
                                    <td><?= $pro->author ?></td>
                                    <td class="center"><a href="/posts/delete?id=<?= $pro->id ?>"><i class="fad fa-trash-alt"></i></a></td>
                                    <td class="center"><a href="/posts/update?id=<?= $pro->id ?>"><i class="fad fa-pencil"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
       