<?php
include "header.php";
include "sidebar.php";
if (isset($_GET['cat_id'])):
{
    $id = $_GET['cat_id'];
    $getCateID = $cate->getCateId($id);
}
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1>Update Category</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Category info</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- BEGIN FORM -->
                        <form action="updatecategory.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Name </label>
                                <div class="controls">
                                <input type="hidden" name="cat_id" value="<?php echo $getCateID[0]['cat_id'] ?>">
                                    <input type="text" class="span11" name="cat_name" value="<?php echo $getCateID[0]['cat_name'] ?> "/>
                                    *
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
<?php endif; include "footer.php" ?>