<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/sidebar');?>
<?php $this->load->view('includes/footer');?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">News</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">News</h1>
        </div>
    </div><!--/.row-->
    <a href="<?php echo base_url(); ?>news/addnews" class="btn btn-primary">Add News</a>
    <br/>
    <br/>

     <table class="table table-bordered">
                   
                    <thead>
                    <th>S.N</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <?php
                    $i = 0;
                    if($news){
  foreach($news as $new)
  {
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i ;?></td>
                            <td><?php echo $new['category']; ?></td>
                            <td><?php echo $new['title'];?></td>
                             <td><?php echo $new['description'];?></td>
                            <td><img src="<?php echo base_url();?>/assets/img/<?php echo $new['image'];?>" width="50" height="50"> </td>
                            <td><?php echo $new['date'];?></td>
                            <td><a href="<?php echo base_url() ?>news/editnews/<?php echo $new['n_id']; ?>" class="btn btn-info">Edit</a></td>
                            <td><a href="<?php echo base_url(); ?>news/deleteNews/<?php echo $new['n_id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php
                    }
                    }
                    ?>
                </table>
            </div>
        </div>