<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/sidebar');?>
<?php $this->load->view('includes/footer');?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">User</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User</h1>
        </div>
    </div><!--/.row-->

     <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        Add News Info
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">

                <form method="post" action="<?php echo base_url(); ?>news/saveNews" enctype="multipart/form-data">
                    <select name="category" class="form-control">
                        <option value="">Choose Category</option>
                        <?php
                        foreach($category as $c){
                        ?>
                        <option value="<?php echo $c['id']; ?>"> <?php echo $c['category']; ?></option>
                        <?php
                        }
                        ?>
                        </select>
                    <div class="form-group">
                        <label>News Title</label>
                        <input type="text" name="title" class="form-control" placeholder="News Title">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="date" class="form-control" value="<?php echo date("Y-m-d"); ?>" placeholder="News Title">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" size="20" />
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" style="height:200px;width:400px;"></textarea>
                    </div>

                    <input type="submit" class="btn btn-success" value="Add News" />

                </form>
            </div>



        </div>
        <!-- /.col-lg-6 (nested) -->
    </div>