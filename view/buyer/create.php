<?php require_once "view/partial/header.php"; ?>

    <div style="text-align: left; margin: 5px 0px 10px; padding-left: 20px; padding-top: 10px"> 
        <a class="btn btn-sm btn-primary" id="btnAddAction" href="index.php">Go to home</a>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form id="receiptForm">
                <div id="validity-message">
                    <?php
                        if(isset($validity['resp_code'])){
                            echo $validity['message'];
                        }
                    ?>
                </div>
                <div class="row">
                    <label for="amount" class="col-sm-2 col-form-label col-form-label-sm">Amount</label>
                    <div class="col-sm-10">
                    <input type="text" name="amount" class="form-control form-control-sm" id="amount">
                    <span id="amount-info" class="info"></span><br /> 
                    </div>
                </div>
    
                <div class="row">
                    <label for="amount" class="col-sm-2 col-form-label col-form-label-sm">Buyer</label>
                    <div class="col-sm-10">
                    <input type="text" name="buyer" class="form-control form-control-sm" id="buyer">
                    <span id="buyer-info" class="info"></span><br /> 
                    </div>
                </div>
    
                <div class="row">
                    <label for="receipt" class="col-sm-2 col-form-label col-form-label-sm">Receipt ID</label>
                    <div class="col-sm-10">
                    <input type="text" name="receipt_id" class="form-control form-control-sm" id="receipt">
                    <span id="receipt-info" class="info"></span><br /> 
                    </div>
                </div>
    
                <div class="row">
                    <label for="items" class="col-sm-2 col-form-label col-form-label-sm">Items</label>
                    <div class="col-sm-10">
                    <input type="text" name="items" class="form-control form-control-sm" id="items">
                    <span id="items-info" class="info"></span><br /> 
                    </div>
                </div>
    
                <div class="row">
                    <label for="buyer-email" class="col-sm-2 col-form-label col-form-label-sm">Items</label>
                    <div class="col-sm-10">
                    <input type="text" name="buyer_email" class="form-control form-control-sm" id="buyer-email">
                    <span id="buyer-email-info" class="info"></span><br /> 
                    </div>
                </div>
    
                <div class="row">
                    <label for="note" class="col-sm-2 col-form-label col-form-label-sm">Note</label>
                    <div class="col-sm-10">
                    <textarea name="note" class="form-control form-control-sm" id="note"></textarea>
                    <span id="note" class="info"></span><br /> 
                    </div>
                </div>
    
                <div class="row">
                    <label for="city" class="col-sm-2 col-form-label col-form-label-sm">City</label>
                    <div class="col-sm-10">
                    <input type="text" name="city" class="form-control form-control-sm" id="city">
                    <span id="city-info" class="info"></span><br /> 
                    </div>
                </div>
    
                <div class="row">
                    <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">Phone</label>
                    <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control form-control-sm" id="phone">
                    <span id="phone-info" class="info"></span><br /> 
                    </div>
                </div>
    
                <div class="row">
                    <label for="entry-by" class="col-sm-2 col-form-label col-form-label-sm">Entry By</label>
                    <div class="col-sm-10">
                    <input type="number" name="entry_by" class="form-control form-control-sm" id="entry-by">
                    <span id="entry-by-info" class="info"></span><br /> 
                    </div>
                </div>
                
                <div class="float-end">
                    <button type="submit" class="btn btn-sm btn-success">Generate</button>
                    <button type="reset" class="btn btn-sm btn-secondary" id="resetButton">Reset</button>
                </div>
                </div>
            </form>
        </div>
    </div>


<?php require_once "view/partial/footer.php"; ?>
