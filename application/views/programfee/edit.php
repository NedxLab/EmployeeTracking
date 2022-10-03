<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('programfee');?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('programfee/update/'.$item->id);?>">
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
                <strong>program_start_date</strong>
                <input type="text" name="program_start_date" class="form-control" value="<?php echo $item->program_start_date; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>program_end_date</strong>
                <input type="text" name="program_end_date" class="form-control" value="<?php echo $item->program_end_date; ?>">
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