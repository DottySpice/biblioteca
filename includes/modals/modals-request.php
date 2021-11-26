<!-- Modal para Informacion-->
<div class="modal fade" id="modalInfo<?php echo $renglon['IdLoan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="mb-3">
                        <b><label class="form-label"">Id Loan: </label></b>
                        <label class="form-label""><?php echo $renglon['IdLoan']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Loan Date: </label></b>
                        <label class="form-label""><?php echo $renglon['LoanDate']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">ISBN Requested: </label></b>
                        <label class="form-label""><?php echo $renglon['ISBN']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Full Name: </label></b>
                        <label class="form-label""><?php echo $renglon['fullName']; ?></label>
                    </div>
                    <div class="mb-3">  
                        <b><label class="form-label">Book Name: </label></b>
                        <label class="form-label""><?php echo $renglon['BookName']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Status: </label></b>
                        <?php 
                        if ($renglon['Status'] == 0) {
                            echo ' <label class="form-label"">Waiting for Confirmation</label>';
                        }
                        ?>
                    </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para eliminar-->
<div class="modal fade" id="modalConfirm<?php echo $renglon['IdLoan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Loan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="../includes/request.php?IdLoan=<?php echo $renglon['IdLoan']; ?>">
                <div class="modal-body">
                    <h6 class="modal-title">
                        Id Loan: <?php echo $renglon['IdLoan']; ?>
                    </h6>
                    <h6 class="modal-title">
                        Full Name: <?php echo $renglon['fullName']; ?>
                    </h6>
                    <h6 class="modal-title">
                        Book: <?php echo $renglon['BookName']; ?>
                    </h6>

                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Dead Line Date</label>
                                <input type="date" name="deadLineDate" class="form-control">
                            </div>               
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger " data-dismiss="modal" name="denyLoan" >Deny</button>
                    <button type="submit" class="btn btn-success " data-dismiss="modal" name="confirmLoan" >Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>