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
                            Edit user information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                               
                                    <form method="post" action="<?php echo base_url(); ?>index.php/user/updateuser">
                                    <input type="hidden" name="userid" value="<?php echo $this->uri->segment(3);  ?>" />
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control" value="<?php echo $user['first_name']; ?>" placeholder="First Name">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control" value="<?php echo $user['last_name']; ?>" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" placeholder="Email">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $user['user']; ?>" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" value="<?php echo $user['password']; ?>" placeholder="Password">
                                        </div>
                                       
                                        <input type="submit" class="btn btn-success" value="Update User" />
                                        
                                    </form>
                                </div>
                                
                                    
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>