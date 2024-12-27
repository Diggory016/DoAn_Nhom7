<?php
include "header.php";
include "sidebar.php";
if(isset($_GET['provider_id'])):
{
    $id = $_GET['provider_id'];
    $getProviderID = $provider->getProviderId($id);
}
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1><b>Update Provider</b>  </h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Provider info</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- BEGIN FORM -->
                        <form action="updateprovider.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Name </label>
                                <div class="controls">
                                <input type="hidden" name="provider_id" value="<?php echo $getProviderID[0]['provider_id'] ?>">
                                    <input type="text" class="span11" name="provider_name" value="<?php echo $getProviderID[0]['provider_name'] ?>" /> *
                                </div>
                                <div class="control-group">
                                <label class="control-label">Email </label>
                                <div class="controls">
                                    <input type="text" class="span11" name="provider_email" value="<?php echo $getProviderID[0]['provider_email'] ?>" /> *
                                </div>
                                <div class="control-group">
                                <label class="control-label">Phone
                                </label>
                                <div class="controls">
                                    <input type="number" class="span11" name="provider_phone" value="<?php echo $getProviderID[0]['provider_phone'] ?>" /> *
                                </div>
                            </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END FORM -->
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->
<?php endif; include "footer.php"; ?>