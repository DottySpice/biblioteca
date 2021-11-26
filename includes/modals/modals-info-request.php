<!-- Modal para Informacion-->
<div class="modal fade" id="modalInfoLoan<?php echo $renglon['IdLoan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <b><label class="form-label">Dead Line Date: </label></b>
                        <label class="form-label""><?php echo $renglon['DeadLineDate']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Return Date: </label></b>
                        <label class="form-label""><?php echo $renglon['ReturnDate']; ?></label>
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
                        <b><label class="form-label">Town: </label></b>
                        <label class="form-label""><?php echo $renglon['town']; ?></label>
                    </div>
                    <div class="mb-3">  
                        <b><label class="form-label">Book Name: </label></b>
                        <label class="form-label""><?php echo $renglon['BookName']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Topic: </label></b>
                        <label class="form-label""><?php echo $renglon['Topic']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Publisher: </label></b>
                        <label class="form-label""><?php echo $renglon['Publisher']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Year of Edition: </label></b>
                        <label class="form-label""><?php echo $renglon['YearOfEdition']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Author: </label></b>
                        <label class="form-label""><?php echo $renglon['Author']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Number of Pages: </label></b>
                        <label class="form-label""><?php echo $renglon['NumberOfPages']; ?></label>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Status: </label></b>
                        <?php 
                        switch ($renglon['Status']) {
                            case '0':
                                echo ' <label class="form-label text-primary">Waiting for Confirmation</label>';
                                break;
                            case '1':
                                echo ' <label class="form-label text-success">Loan Confirmed</label>';
                                break;
                            case '2':
                                echo ' <label class="form-label text-danger">Loan Rejected</label>';
                                break;
                            case '3':
                                echo ' <label class="form-label text-success">Loan Returned  On time</label>';
                                break;
                            case '4':
                                echo ' <label class="form-label text-warning">Loan Returned Out Of time</label>';
                                break;     
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