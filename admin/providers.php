<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
        <h1><b>Manage Providers</b></h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><a href="form_add_provider.php"> <i class="icon-plus"></i>
                            </a></span>
                        <h5><b>Providers</b></h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered
                                    table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($getAllProviders as $value):?>
                                <tr class="">
                                    <td><?php echo $value['provider_id']?> </td>
                                    <td><?php echo $value['provider_name']?></td>
                                    <td><?php echo $value['provider_email']?> </td>
                                    <td><?php echo $value['provider_phone']?> </td>
                                    <td>
                                    <a href="form_update_provider.php?provider_id=<?php echo $value['provider_id']?>" class="btn
                                                    btn-primary btn-mini">Edit</a>
                                        <a href="delete.php?provider_id=<?php echo $value['provider_id']?>" class="btn
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