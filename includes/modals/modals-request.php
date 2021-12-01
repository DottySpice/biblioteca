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
                            echo ' <label class="form-label text-primary">Waiting for Confirmation</label>';
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

<!-- Modal para confirmar o denegar prestamo-->
<div class="modal fade" id="modalConfirm<?php echo $renglon['IdLoan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Loan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="loanConfirmDeny" method="POST" action="../includes/request.php?IdLoan=<?php echo $renglon['IdLoan']; ?>">
                <div class="modal-body">
                    <h6 class="modal-title">
                        Id Loan: <label id="idLoan"> <?php echo $renglon['IdLoan']; ?> </label> 
                    </h6>
                    <h6 id="fullName class="modal-title">
                        Full Name: <label id="fullName"> <?php echo $renglon['fullName']; ?> </label> 
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
                    <button onclick="return denyLoanJS()"  class="btn btn-danger " data-dismiss="modal" name="denyLoan" >Deny</button>
                    <button onclick="return confirmLoanJS()" class="btn btn-success " data-dismiss="modal" name="confirmLoan" >Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal para Solicitar Libro Por Usuario-->
<div class="modal fade" id="modalRequestBook<?php echo $renglon['ISBN']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formRequestBook" method="post" action="../includes/request.php?isbn=<?php echo $renglon['ISBN']; ?>">
                <div class="modal-body">
                    <h1 class="modal-title">
                        Book Select
                    </h1>
                    <h6 id="bookName" class="modal-title">
                        Book: <?php echo $renglon['BookName']; ?>
                    </h6>
                    <h6 class="modal-title">
                        Author: <?php echo $renglon['Author']; ?>
                    </h6>
                    <h6 class="modal-title">
                        Year Of Edition: <?php echo $renglon['YearOfEdition']; ?>
                    </h6>
                    <div class="modal-body">
                        <h4 class="modal-title">
                            Request this book?
                        </h4>            
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="return requestBookJS()" class="btn btn-success " data-dismiss="modal" name="confirmRequestBook" >Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal para Confirmar entrega de libro por parte del usuario-->
<div class="modal fade" id="modalDeliverBook<?php echo $renglon['IdLoan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Book Delivery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formDeliverBook" method="post" action="../includes/request.php?IdLoan=<?php echo $renglon['IdLoan'].'&deadline='.$renglon['DeadLineDate'] ?>">
                <div class="modal-body">
                    <h1 class="modal-title">
                        Loan Info
                    </h1>
                    <h6 id="idLoan" class="modal-title">
                        Id Loan: <?php echo $renglon['IdLoan']; ?>
                    </h6>
                    <h6 class="modal-title">
                        Loan Date: <?php echo $renglon['LoanDate']; ?>
                    </h6>
                    <h6 class="modal-title">
                        Dead Line Date: <?php echo $renglon['DeadLineDate']; ?>
                    </h6>
                    <div class="modal-body">
                        <h4 class="modal-title">
                            Deliver Book?
                        </h4>            
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="return deliverBookJS()" class="btn btn-success " data-dismiss="modal" name="confirmDeliverBook" >Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>