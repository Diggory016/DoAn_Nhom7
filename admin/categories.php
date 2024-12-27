<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1><b>Manage Categories</b></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form_add_category.php"> <i class="icon-plus"></i>
                            </a></span>
                        <h5><b>Categories</b></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($getAllCates as $value): ?>
                                <tr class="">
                                    <td><?php echo $value['cat_id']?></td>
                                    <td><?php echo $value['cat_name']?></td>
                                    <td>
                                    <a href="form_update_category.php?cat_id=<?php echo $value['cat_id']?>" class="btn
                                                    btn-primary btn-mini">Edit</a>
                                        <a href="delete.php?cat_id=<?php echo $value['cat_id']?>" class="btn
                                                    btn-danger btn-mini">Delete</a>
                                    </td>
                                </tr> 
                                <?php endforeach ?>                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END CONTENT -->
<?php include "footer.php" ?>