<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('ticketing');?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('ticketing/update/'.$item->id);?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


    <div class="row">
    <input class="form-control" name = "user_id" type="text" placeholder="<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" value = "<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" readonly>
   
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>serial_no</strong>
                <input type="text" name="serial" class="form-control" value = "<?php echo $item->serial; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>voucher_no</strong>
                <input type="text" name="voucher_no" class="form-control" value = "<?php echo $item->voucher_no; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>voucher_date</strong>
                <input type="text" name="voucher_date" class="form-control" value="<?php echo $item->voucher_date; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>voucher_amount</strong>
                <input type="text" name="voucher_amount" class="form-control" value="<?php echo $item->voucher_amount; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>voucher_currency</strong>
                <input type="text" name="voucher_currency" class="form-control" value="<?php echo $item->voucher_currency; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>airline</strong>
                <input type="text" name="airline" class="form-control" value="<?php echo $item->airline; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>agent</strong>
                <input type="text" name="agent" class="form-control" value="<?php echo $item->agent; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>booking_ref</strong>
                <input type="text" name="booking_ref" class="form-control" value="<?php echo $item->booking_ref; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>ticket_no</strong>
                <input type="text" name="ticket_no" class="form-control" value="<?php echo $item->ticket_no; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>destination</strong>
                <input type="text" name="destination" class="form-control" value="<?php echo $item->destination; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>depart_date</strong>
                <input type="text" name="depart_date" class="form-control" value="<?php echo $item->depart_date; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-12">
            <div class="form-group">
                <strong>return_date</strong>
                <input type="text" name="return_date" class="form-control" value="<?php echo $item->return_date; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>remarks</strong>
                <textarea name="remarks" class="form-control"><?php echo $item->remarks; ?></textarea>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>