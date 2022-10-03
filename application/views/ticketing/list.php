<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
            <h2>Your User Id is: <?php print $this->session->userdata('ci_seesion_key')['user_id']; ?></h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('ticketing/create') ?>"> Create New Item</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>serial_no</th>
          <th>voucher_no</th>
          <th>voucher_date</th>
          <th>voucher_amount</th>
          <th>voucher_currency</th>
          <th>airline</th>
          <th>agent</th>
          <th>booking_ref</th>
          <th>ticket_no</th>
          <th>destination</th>
          <th>depart_date</th>
          <th>return_date</th>
          <th>remarks</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->serial; ?></td>
          <td><?php echo $item->voucher_no; ?></td>
          <td><?php echo $item->voucher_date; ?></td>  
          <td><?php echo $item->voucher_amount; ?></td>  
          <td><?php echo $item->voucher_currency; ?></td>  
          <td><?php echo $item->airline; ?></td>  
          <td><?php echo $item->agent; ?></td>  
          <td><?php echo $item->booking_ref; ?></td>  
          <td><?php echo $item->ticket_no; ?></td> 
          <td><?php echo $item->destination; ?></td>  
          <td><?php echo $item->depart_date; ?></td>  
          <td><?php echo $item->return_date; ?></td>  
          <td><?php echo $item->remarks; ?></td>           
      <td>
        <form method="DELETE" action="<?php echo base_url('ticketing/delete/'.$item->id);?>">
         <a class="btn btn-primary" href="<?php echo base_url('ticketing/edit/'.$item->id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>