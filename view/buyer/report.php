<?php require_once "view/partial/header.php"; ?>
    <div style="text-align: left; margin: 20px 0px 10px; padding-left: 250px;">
        <?php 
            if(isset($_GET['search'])){
               echo '<a id="btnAddAction" href="index.php">back</a>';
            }
        ?>
    </div>
    <div class="row pt-3">
        <div class="col-md-12">
            <form action="" method="get">
                <div class="row">
                    <label for="entry_by" class="col-sm-1 col-form-label col-form-label-sm">User ID</label>
                    <div class="col-sm-2">
                        <input type="text" name="entry_by" class="form-control form-control-sm" id="entry_by">
                        <span id="entry_by-info" class="info"></span> 
                    </div>

                    <label for="from_date" class="col-sm-1 col-form-label col-form-label-sm">From</label>
                    <div class="col-sm-2">
                        <input type="date" name="from_date" class="form-control form-control-sm" id="from_date" value="<?php echo date('Y-m-d')?>">
                        <span id="from_date-info" class="info"></span> 
                    </div>

                    <label for="to_date" class="col-sm-1 col-form-label col-form-label-sm">To</label>
                    <div class="col-sm-2">
                        <input type="date" name="to_date" class="form-control form-control-sm" id="to_date" value="<?php echo date('Y-m-d')?>">
                        <span id="to_date-info" class="info"></span> 
                    </div>
                    <div class="col-sm-1">
                        <input class="btn btn-sm btn-success" type="submit" name="search" id="btnSearch" value="Search" />
                    </div>
                </div>
        
                <div style="margin-left: 20px;" id="validity-message">
                    <?php
                        if(isset($validity['resp_code'])){
                            echo $validity['message'] . "<br/>";
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
    <div style="text-align: left; margin: 5px 0px 10px; padding-left: 20px; padding-top: 10px;">
        <a class="btn btn-sm btn-primary" id="btnAddAction" href="index.php?action=buyer-add">Generate Receipt</a>
    </div>
    <div class="table-responsive">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>Amount</th>
                    <th>Buyer</th>
                    <th>Receipt</th>
                    <th>Items</th>
                    <th>Buyer Email</th>
                    <th>Buyer Ip</th>
                    <th>Note</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Hash Key</th>
                    <th>Entry Date</th>
                    <th>Entry by</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $result[$k]["amount"]; ?></td>
                        <td><?php echo $result[$k]["buyer"]; ?></td>
                        <td><?php echo $result[$k]["receipt_id"]; ?></td>
                        <td><?php echo $result[$k]["items"]; ?></td>
                        <td><?php echo $result[$k]["buyer_email"]; ?></td>
                        <td><?php echo $result[$k]["buyer_ip"]; ?></td>
                        <td><?php echo $result[$k]["note"]; ?></td>
                        <td><?php echo $result[$k]["city"]; ?></td>
                        <td><?php echo $result[$k]["phone"]; ?></td>
                        <td><?php echo $result[$k]["hash_key"]; ?></td>
                        <td><?php echo $result[$k]["entry_at"]; ?></td>
                        <td><?php echo $result[$k]["entry_by"]; ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
            <tbody>
        </table>
    </div>

<?php require_once "view/partial/footer.php"; ?>

