<!-- Modal para eliminar-->
<div class="modal fade" id="modalDelete<?php echo $renglon['ISBN']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do you really want to delete the book titled
                <h1 id="bookName" class="modal-title">
                    <?php echo $renglon['BookName']; ?> ?
                </h1>
            </div>
            <div class="modal-footer">
                <form id="formDeleteBook" method="post" action="../includes/book.php?isbn=<?php echo $renglon['ISBN']; ?>">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="return deleteBookJS()" class="btn btn-danger " data-dismiss="modal" name="deleteBook" >Delete It!</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para editar-->
<div class="modal fade" id="modalModify<?php echo $renglon['ISBN']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formModifyBook" method="post" action="../includes/book.php?isbn=<?php echo $renglon['ISBN']; ?>">
                <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label"">ISBN</label>
                            <input name="isbn"  class="form-control" value="<?php echo $renglon['ISBN']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edit Book Name</label>
                            <input name="bookName" class="form-control" value="<?php echo $renglon['BookName']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edit Topic</label>
                            <input name="topic" class="form-control" value="<?php echo $renglon['Topic']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edit Publisher</label>
                            <input name="publisher" class="form-control" value="<?php echo $renglon['Publisher']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edit Year of Edition</label>
                            <input type="date" name="yearOfEdition" class="form-control" value="<?php echo $renglon['YearOfEdition']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edit Author</label>
                            <input name="author" class="form-control" value="<?php echo $renglon['Author']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Edit Number of Pages</label>
                            <input name="numberOfPages" class="form-control" value="<?php echo $renglon['NumberOfPages']; ?>">
                        </div>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button onclick="return modifyBookJS()" class="btn btn-primary " data-dismiss="modal" name="updateBook" >Update Book</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Modal para Informacion-->
<div class="modal fade" id="modalInfo<?php echo $renglon['ISBN']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="mb-3">
                        <b><label class="form-label"">ISBN: </label></b>
                        <label class="form-label""><?php echo $renglon['ISBN']; ?></label>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>