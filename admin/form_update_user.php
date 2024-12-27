<?php
include "header.php";
include "sidebar.php";
if(isset($_GET['ad_id'])):
{
    $id = $_GET['ad_id'];
    $getUserID = $user->getUserId($id);
}
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1><b>Update User</b>  </h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>User info</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- BEGIN FORM -->
                        <form action="updateuser.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Username </label>
                                <div class="controls">
                                <input type="hidden" name="ad_id" value="<?php echo $getUserID[0]['ad_id'] ?>">
                                    <input type="text" class="span11" name="ad_user" value="<?php echo $getUserID[0]['ad_user'] ?>" /> *
                                </div>
                                <div class="control-group">
                                <label class="control-label">Password </label>
                                <div class="controls">
                                    <input type="text" class="span11" name="ad_pwd" value="<?php echo $getUserID[0]['ad_pwd'] ?>" /> *
                                </div>
                                <div class="control-group">
                                <label class="control-label">Name </label>
                                <div class="controls">
                                    <input type="text" class="span11" name="ad_name" value="<?php echo $getUserID[0]['ad_name'] ?>" /> *
                                </div>
                                <div class="control-group">
                                <label class="control-label">Email </label>
                                <div class="controls">
                                    <input type="text" class="span11" name="ad_email" value="<?php echo $getUserID[0]['ad_email'] ?>" /> *
                                </div>
                                <div class="control-group">
                                <label class="control-label">Phone
                                </label>
                                <div class="controls">
                                    <input type="number" class="span11" name="ad_phone" value="<?php echo $getUserID[0]['ad_phone'] ?>" /> *
                                </div>
                                <div class="control-group">
                                <label class="control-label">Power
                                </label>
                                <div class="controls">
                                    <input type="number" class="span11" name="ad_pow" value="<?php echo $getUserID[0]['ad_pow'] ?>" /> *
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