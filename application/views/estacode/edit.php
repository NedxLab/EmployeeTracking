<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('estacode');?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('estacode/update/'.$item->id);?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


    <div class="row">
    <input class="form-control" name = "user_id" type="text" placeholder="<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" value = "<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" readonly>
    <div class="col-xs-12 col-sm-4 col-md-12">
            <div class="form-group">
                <strong>serial</strong>
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
                <input type="date" name="voucher_date" class="form-control" value="<?php echo $item->voucher_date; ?>">
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
                <strong>program_title</strong>
                <input type="text" name="program_title" class="form-control" value="<?php echo $item->program_title; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>program_type</strong>
                <input type="text" name="program_type" class="form-control" value="<?php echo $item->program_type; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>program_country</strong>
                <input type="text" name="program_country" class="form-control" value="<?php echo $item->program_country; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>long_haul</strong>
                <input type="text" name="long_haul" class="form-control" value="<?php echo $item->long_haul; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>trip_start_date</strong>
                <input type="date" name="trip_start_date" class="form-control" value="<?php echo $item->trip_start_date; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-12">
            <div class="form-group">
                <strong>trip_end_date</strong>
                <input type="date" name="trip_end_date" class="form-control" value="<?php echo $item->trip_end_date; ?>">
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