<?php $this->load->view('includes/header');?>

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
   <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit news
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">

                                <form method="post" action="<?php echo base_url(); ?>index.php/news/editNews">
                                    <input type="hidden" name="newsid" value="<?php echo $this->uri->segment(3);  ?>" />
                                     <select name="news_category" class="form-control">
                        <option value="">Choose Category</option>
                        <?php
                        foreach($category as $c){
                        ?>
                        <option value="<?php echo $c['id']; ?>" 
                        <?php if($c['id'] == $user['id']){echo "selected";} ?> >
                         <?php echo $c['name']; ?></option>
                        <?php
                        }
                        ?>
                        </select>
                                    <div class="form-group">
                                        <label>News Title</label>
                                        <input type="text" name="title" class="form-control" value="<?php echo $user['title']; ?>" placeholder="Edit news">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <img  name="image" src="<?php echo base_url();?>assets/img/<?php echo $user['image'];?>" width="150" height="150">
                                        <input type="file" name="image"/>

                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="textarea" name="description" class="form-control" value="<?php echo $user['description']; ?>">
                                    </div>

                                    <input type="submit" class="btn btn-success" value="Update News" />

                                </form>
                            </div>



                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>