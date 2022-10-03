<?php $this->load->view('admin/header');?>
    <div class="container">
        <form action="<?php echo base_url('adminauth/logout');?>" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                 
                <div class="card" > 
                <div class="d-flex flex-row row"> 
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('ci_seesion_key')['user_level']==='1'):?>                
                  <div class=" moet card bg-primary main text-white text-center p-3" style = "width: 90vw; height: 6rem;">
                        <blockquote class="blockquote mb-0">
                        <p>you are the super admin</p>                        
                    </div>
                
                  
                     <div class="card moet bg-warning text-white text-center p-3" >
                        <blockquote class="blockquote mb-0">
                        <a href="<?php echo base_url('adminauth/adminRegister');?>">Add Admin</a>                       
                    </div>
                
                     
                         <div class="card moet bg-danger text-white text-center p-3">
                             <blockquote class="blockquote mb-0">
                            <a href="<?php echo base_url('auth/actionRegister');?>">Add users</a>                              
                    </div>
                
                
                         <div class="card moet bg-success text-white text-center p-3">
                             <blockquote class="blockquote mb-0">
                            <a href="<?php echo base_url('employeeauth/employeeRegister');?>">Add Employee</a>                              
                    </div>
                
                
                  <div class="card moet bg-info text-white text-center p-3">
                                <blockquote class="blockquote mb-0">
                                <a href="<?php echo base_url('user');?>">update users</a>                              
                                                 
                    </div>
                  
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('ci_seesion_key')['user_level']==='2'):?>                 
                  
                    <div class="card moet main bg-warning text-white text-center p-3">
                        <blockquote class="blockquote mb-0">
                        <p>you are a normal admin</p>                      
                    </div>
                
                
                         <div class="card moet bg-danger text-white text-center p-3">
                             <blockquote class="blockquote mb-0">
                            <a href="<?php echo base_url('auth/actionRegister');?>">Add users</a>                              
                    </div>
                
                
                         <div class="card moet bg-success text-white text-center p-3">
                             <blockquote class="blockquote mb-0">
                            <a href="<?php echo base_url('employeeauth/employeeRegister');?>">Add Employee</a>                              
                    </div>
                
                
                  <div class="card moet bg-info text-white text-center p-3">
                                <blockquote class="blockquote mb-0">
                                <a href="<?php echo base_url('user');?>">update users</a>                              
                                                 
                    </div>
                  
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php elseif($this->session->userdata('ci_seesion_key')['user_level']==='3'):?> 
                  <div class="card moet main bg-warning text-white text-center p-3">
                        <blockquote class="blockquote mb-0">
                        <p>you are an admin author</p>                      
                    </div>
                  
                         <div class="moet card bg-danger text-white text-center p-3">
                             <blockquote class="blockquote mb-0">
                            <a href="<?php echo base_url('auth/actionRegister');?>">Add users</a>                              
                    </div>
                                 
                
                  <div class="moet card bg-info text-white text-center p-3">
                                <blockquote class="blockquote mb-0">
                                <a href="<?php echo base_url('user');?>">update users</a>                              
                                                 
                    </div>
                  
                <?php endif;?>
              </div>
                </div>
            <button class = "btn btn-dark" href="<?php echo base_url('adminauth/logout');?>">Sign Out</button>
        <div class="jumbotron">
          <h1>Welcome Back <?php print $this->session->userdata('ci_seesion_key')['first_name']; ?></h1>
          <?php if($this->session->userdata('ci_seesion_key')['user_level']):?>
          <h3>You are in level <?php echo $this->session->userdata('ci_seesion_key')['user_level'];?></h3>
          <p>Your User Id is: <?php print $this->session->userdata('ci_seesion_key')['user_id']; ?></p>
          <?php else:?>
            <h2>Your User Id is: <?php print $this->session->userdata('ci_seesion_key')['user_id']; ?></h2>
             <?php if($this->session->userdata('ci_seesion_key')) { ?>
                <h4><?php print $this->session->userdata('ci_seesion_key')['email']; ?></h4>
            <?php } ?>
            <div class="row">   
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row p-2" style = "background:grey;">
                        <div class = "col-sm-9">  
                        <h4 class="float-left"> View,Add and Make changes to travel history.</h4>
                        </div>
                        <div class = " col-sm-2" style = "padding: 0.7rem;">   
                        <a class="btn btn-warning " href="<?php echo base_url('estacode') ?>"> ESTACODE</a>
                        </div>
                    </div>
                    <div class="row p-2" style = "background:ash;">
                        <div class = "col-sm-9">  
                        <h4 class="float-left"> View,Add and Make changes to travel history.</h4>
                        </div>
                        <div class = " col-sm-2" style = "padding: 0.7rem;">   
                        <a class="btn btn-success " href="<?php echo base_url('ticketing') ?>"> TICKETING</a>
                        </div>
                    </div>

                    <div class="row p-2" style = "background:grey;">
                        <div class = "col-sm-9">  
                        <h4 class="float-left"> View,Add and Make changes to travel history.</h4>
                        </div>
                        <div class = " col-sm-2" style = "padding: 0.7rem;">   
                        <a class="btn btn-danger " href="<?php echo base_url('programfee') ?>"> PROGRAM-FEE</a>
                        </div>
                    </div>
                </div>
            </div>
           <!-- container --> 
            <section class="showcase">
            <button class = "btn btn-dark" href=" <?php echo base_url('adminauth/logout');?>" >Logout</button>           
                </form>
            </section>
          <?php endif;?>         
     </div>
    <?php $this->load->view('admin/footer');?>  