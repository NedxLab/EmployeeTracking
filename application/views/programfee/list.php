<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
            <h2>Your User Id is: <?php print $this->session->userdata('ci_seesion_key')['user_id']; ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('programfee/create') ?>"> Create New Item</a>
        </div>

    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>voucher_no</th>
          <th>voucher_date</th>
          <th>voucher_amount</th>
          <th>voucher_currency</th>
          <th>program_start_date</th>
          <th>program_end_date</th>
          <th>remarks</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->voucher_no; ?></td>
          <td><?php echo $item->voucher_date; ?></td>  
          <td><?php echo $item->voucher_amount; ?></td>  
          <td><?php echo $item->voucher_currency; ?></td>  
          <td><?php echo $item->program_start_date; ?></td>  
          <td><?php echo $item->program_end_date; ?></td>  
          <td><?php echo $item->remarks; ?></td>           
      <td>
        <form method="DELETE" action="<?php echo base_url('programfee/delete/'.$item->id);?>">
         <a class="btn btn-primary" href="<?php echo base_url('programfee/edit/'.$item->id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>