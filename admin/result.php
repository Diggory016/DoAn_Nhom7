<?php
include "header.php";
include "sidebar.php";
if(isset($_GET['keyword'])):
    $keyword = $_GET['keyword'];
    $page = isset($_GET['page'])?$_GET['page']:1;
    $count = 3;
    $total = count($product ->searchCount($keyword));
    $url = $_SERVER['PHP_SELF']."?keyword=".$keyword;
    $search = $product->search($keyword,$page,$count);
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h6>Result: found <?php echo $total ?> item(s) with keyword "<?php echo $keyword?>"</h6>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                            </a></span>
                        <h5>Products</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                            <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Detail</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Catename</th>
                                    <th>Provname</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($search as $value) : ?>
                                    <tr class="">
                                        <td width="250">
                                            <img src="../image/<?php echo $value['product_img'] ?>" />
                                        </td>
                                        <td><?php echo $value['product_name'] ?></td>
                                        <td><?php echo $value['product_description'] ?></td>
                                        <td><?php echo $value['product_detail'] ?></td>
                                        <td><?php echo $value['product_quantity'] ?></td>
                                        <td><?php echo $value['product_price'] ?></td>
                                        <td><?php echo $value['product_date'] ?></td>
                                        <td><?php echo $value['catename'] ?></td>
                                        <td><?php echo $value['provname'] ?></td>
                                        <td>
                                            <a href="#45" class="btn
                                                    btn-success btn-mini">Edit</a>
                                            <a href="#45" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <?php echo $product->paginate($url,$total,$count,$page)?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif?>
<!-- END CONTENT -->
<?php include "footer.php" ?>