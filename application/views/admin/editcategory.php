<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/sidebar');?>
<?php $this->load->view('includes/footer');?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Category</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category</h1>
        </div>
    </div><!--/.row-->
     <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Category information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" action="<?php echo base_url(); ?>index.php/category/updateCategory">
                                    <input type="hidden" name="id" value="<?php echo $category['id']; ?>" />
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" name="category_name" value="<?php echo $category['category']; ?>" class="form-control" placeholder="First Name">
                                            
                                        </div>
                                       
                                        <input type="submit" class="btn btn-success" value="Save Category" />
                                        
                                    </form>
                                </div>
                                
                                    
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>