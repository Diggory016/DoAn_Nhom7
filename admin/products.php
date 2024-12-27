<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1><b>Manage Products</b></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form_add_product.php"> <i class="icon-plus"></i>
                            </a></span>
                        <h5><b>Products</b></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
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
                                <?php foreach ($getAllProducts as $value) : ?>
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
                                            <a href="form_update_product.php?product_id=<?php echo $value['product_id'] ?>" class="btn
                                                    btn-primary btn-mini">Edit</a>
                                            <a href="delete.php?product_id=<?php echo $value['product_id'] ?>" class="btn
                                                    btn-danger btn-mini"> Delete </a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <div class="row" style="margin-left: 18px;">
                            <ul class="pagination">
                                <li class="active">1</li>
                                <li>2</li>
                                <li>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>