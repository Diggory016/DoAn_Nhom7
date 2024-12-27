<?php
include "header.php";
include "sidebar.php";
?>
<!-- BEGIN CONTENT -->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                Home</a></div>
        <h1>Add New Items</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Item info</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- BEGIN FORM -->
                        <form action="addproduct.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Choose
                                    an image</label>
                                <div class="controls">
                                    <input type="file" name="fileUpload" id="fileUpload">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Name </label>
                                <div class="controls">
                                    <input type="text" class="span11" name="product_name" /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <textarea class="span11" name="product_description"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Detail</label>
                                <div class="controls">
                                    <textarea class="span11" name="product_detail"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price
                                </label>
                                <div class="controls">
                                    <input type="number" class="span11" name="product_price" /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Quantity
                                </label>
                                <div class="controls">
                                    <input type="number" class="span11" name="product_quantity" /> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Choose a category</label>
                                <div class="controls">
                                    <select name="cat_id" id="cat_id">
                                        <?php foreach ($getAllCates as $value): ?>
                                            <option value="<?php echo $value['cat_id'] ?>"><?php echo $value['cat_name'] ?></option>
                                        <?php endforeach ?>
                                    </select> *
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Choose a provider</label>
                                <div class="controls">
                                    <select name="provider_id" id="provider_id">
                                        <?php foreach ($getAllProviders as $value): ?>
                                            <option value="<?php echo $value['provider_id'] ?>"><?php echo $value['provider_name'] ?></option>
                                        <?php endforeach ?>
                                    </select> *
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Add</button>
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
<?php include "footer.php" ?>