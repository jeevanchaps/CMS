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
    <a href="<?php echo base_url(); ?>category/add" class="btn btn-primary">Add Category</a>
    <br/>
    <br/>
    <table class="table table-bordered">
    <thead>
        <th>S.N</th>
        <th>Category Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <?php
    $i = 0;
    foreach($category as $c){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $c['category']; ?></td>
        <td><a href="<?php echo base_url(); ?>category/editcategory/<?php echo $c['id']; ?>" class="btn btn-info">Edit</a></td>
        <td><a href="<?php echo base_url(); ?>category/deletecategory/<?php echo $c['id'];?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
        }
    ?>
</table>