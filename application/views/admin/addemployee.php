<?php $this->load->view('admin/header');?>
 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>Add employee</h2>
      </div> 
      <form action=" <?php echo base_url('employeeauth/employeeRegister');?>" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
		<div class="row"><ul style="color: #CB0000"><?php echo validation_errors('<li>', '</li>'); ?></div>
        <!--Form with header-->
            <div class="card border-info rounded-0">
                <div class="card-header p-0">
                    <div class="bg-login-page text-white text-center py-2">
                        <h3><i class="fas fa-user-plus"></i> Registration of employee</h3>
                    </div>
                </div>
                <div class="card-body p-3">                
                    <!--Body-->
                    <input class="form-control" name = "admin_id" type="text" placeholder="<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" value = "<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" readonly>
                   
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="first-name" name="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="last-name" name="surname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="othername" name="othername" placeholder="Other Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email *">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name = "gradelevel">
                            <option selected>select grade level</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">four</option>
                            <option value="5">five</option>
                            <option value="6">six</option>
                            <option value="7">seven</option>
                            <option value="8">eight</option>
                            <option value="9">nine</option>
                            <option value="10">Ten</option>
                        </select>
                    </div>               
                    <div class="text-center">
                        <button type="submit" id="contact-send-a" class="btn btn-info btn-block rounded-0 py-2">Register</button>
                    </div>
                    
                </div>
            </div> 
          </div>
        </div>
    </form>
    </div>
  </section>
 <?php $this->load->view('admin/footer');?>        
