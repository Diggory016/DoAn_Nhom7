<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1><b>Manage Users</b></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form_add_user.php"> <i class="icon-plus"></i>
                            </a></span>
                        <h5><b>Products</b></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Power</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($getAllUsers as $value): ?>
                                    <tr class="">
                                        <td><?php echo $value['ad_id'] ?></td>
                                        <td><?php echo $value['ad_user'] ?></td>
                                        <td><?php echo $value['ad_pwd'] ?></td>
                                        <td><?php echo $value['ad_name'] ?></td>
                                        <td><?php echo $value['ad_email'] ?></td>
                                        <td><?php echo $value['ad_phone'] ?></td>
                                        <td><?php echo $value['ad_pow'] ?></td>
                                        <td>
                                            <a href="form_update_user.php?ad_id=<?php echo $value['ad_id']  ?>" class="btn
                                                    btn-primary btn-mini">Edit</a>
                                            <a href="delete.php?ad_id=<?php echo $value['ad_id'] ?>" class="btn
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
<!-- END CONTENT -->
<?php include "footer.php" ?>