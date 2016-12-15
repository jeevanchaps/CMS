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
    <a href="<?php echo base_url(); ?>user/add" class="btn btn-primary">Add User</a>
    <br/>
    <br/>
<table class="table table-bordered">
    <thead>
    <th>S.N</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>User</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
    </thead>
    <?php
    $i=0;
    if($user){
        foreach ($user as $u){
            $i++;
            ?>
    <tr>
        <td><?php echo $i ;?></td>
        <td><?php echo $u['first_name']; ?></td>
        <td><?php echo $u['last_name'];?></td>
        <td><?php echo $u['user'];?></td>
        <td><?php echo $u['email'];?></td>
        <td><a href="<?php echo base_url() ?>user/edituser/<?php echo $u['id']; ?>" class="btn btn-info">Edit</a></td>
        <td><a href="<?php echo base_url(); ?>user/deleteuser/<?php echo $u['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
        }
    }
?>
    </table>

