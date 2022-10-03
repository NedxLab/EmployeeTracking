<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Your User Id is: <?php print $this->session->userdata('ci_seesion_key')['user_id']; ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="<?php echo base_url('adminauth/profile') ?>"> Go Back Home</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>user id</th>
          <th>user name</th>
          <th>first name</th>
          <th>last name</th>
          <th>contact no</th>
          <th>email</th>
          <th>address</th>
          <th>date of birth</th>
          <th>created on:</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->user_id; ?></td>
          <td><?php echo $item->user_name; ?></td>  
          <td><?php echo $item->first_name; ?></td>  
          <td><?php echo $item->last_name; ?></td>  
          <td><?php echo $item->contact_no; ?></td>  
          <td><?php echo $item->email; ?></td>  
          <td><?php echo $item->address; ?></td>  
          <td><?php echo $item->dob; ?></td>  
          <td><?php echo $item->created_date; ?></td>      
      <td>
        <form method="DELETE" action="<?php echo base_url('user/delete/'.$item->id);?>">
         <a class="btn btn-primary" href="<?php echo base_url('user/edit/'.$item->id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>