<?php $this->load->view('admin/header');?>
 <!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>edit a User</h2>
      </div> 
      <?php

      if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }
    ?>
      <form action=" <?php echo base_url('user/update/'.$item->id);?>" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">
		
        
        <!--Form with header-->
            <div class="card border-info rounded-0">
                <div class="card-header p-0">
                    <div class="bg-login-page text-white text-center py-2">
                        <h3><i class="fas fa-user-plus"></i> edit user details</h3>
                    </div>
                </div>
                <div class="card-body p-3">                
                    <!--Body-->
                    <input class="form-control" name = "admin_id" type="text" placeholder="<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" value = "<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" readonly>
                    <input class="form-control" name = "user_id" type="text" placeholder="<?php echo $item->user_id; ?>" value = "<?php echo $item->user_id; ?>" readonly>
                  
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="first-name" name="first_name" placeholder="First Name" value="<?php echo $item->first_name; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last Name" value="<?php echo $item->last_name; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email *" value="<?php echo $item->email; ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-phone-square"></i></div>
                            </div>
                            <input type="text" class="form-control" id="contact-no" name="contact_no" placeholder="Contact No" value="<?php echo $item->contact_no; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                            </div>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $item->address; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" class="form-control" id="dob" name="dob" placeholder="DOB" value="<?php echo $item->dob; ?>">
                        </div>
                    </div>
                                                       
                    <div class="text-center">
                        <button type="submit" id="contact-send-a" class="btn btn-info btn-block rounded-0 py-2">Edit User</button>
                    </div>
                    
                </div>
            </div> 
          </div>
        </div>
    </form>
    </div>
  </section>
 <?php $this->load->view('admin/footer');?>        
