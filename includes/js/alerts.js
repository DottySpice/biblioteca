//funcion ejemplo para las alertas (No funciona jeje)
//Funcion para negar prestamo
function denyLoanJS() {
    var idLoan =  document.getElementById('idLoan').innerHTML;
    var fullName =  document.getElementById('fullName').innerHTML;
    var formLoan = document.getElementById('loanConfirmDeny');
    
    formLoan.addEventListener('submit', function name(evt) {
        //evt.preventDefault();
        Swal.fire({
            title: "Deny the Loan "+idLoan+" to "+fullName+"?",
            showCancelButton: true,
            confirmButtonText: 'Deny it!',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                //Swal.fire('Saved!', '', 'success')
                formLoan.submit();
                return true;
            } else if (result.isDenied) {
                evt.preventDefault();
                return false;
                //Swal.fire('Changes are not saved', '', 'info')
            }
        })

        /*var confirmAlert = confirm("Deny the Loan "+idLoan+" to "+fullName+"?");

        if(confirmAlert){
            formLoan.submit();
            return true;
        }
        else{
            evt.preventDefault();
            return false;
        }  
        */
    })
}

//Alerta para confirmar loan de libro
function confirmLoanJS() {
    var idLoan =  document.getElementById('idLoan').innerHTML;
    var fullName =  document.getElementById('fullName').innerHTML;
    var formLoan = document.getElementById('loanConfirmDeny');
    
    formLoan.addEventListener('submit', function name(evt) {
        //evt.preventDefault();
        Swal.fire({
            title: "Confirm the Loan "+idLoan+" to "+fullName+"?",
            showCancelButton: true,
            confirmButtonText: 'Confirm it!',
          }).then((result) => {
            if (result.isConfirmed) {
                formLoan.submit();
                return true;
            } else if (result.isDenied) {
                evt.preventDefault();
                return false;
            }
        })
    })
}

//Alerta para confirmar add de libro
function addBookJS() {
    var bookName =  document.getElementById('bookName').innerHTML;
    var formAddBook = document.getElementById('formAddBook');
    formAddBook.addEventListener('submit', function name(evt) {
        Swal.fire({
            title: "Add the Book "+bookName+"?",
            showCancelButton: true,
            confirmButtonText: 'Add it!',
          }).then((result) => {
            if (result.isConfirmed) {
                formAddBook.submit();
                return true;
            } else if (result.isDenied) {
                evt.preventDefault();
                return false;
            }
        })
    })
}

//Alerta para confirmar delete de libro
function deleteBookJS() {
    var bookName =  document.getElementById('bookName').innerHTML;
    var formDeleteBook = document.getElementById('formDeleteBook');
    formDeleteBook.addEventListener('submit', function name(evt) {
        Swal.fire({
            title: "Are you sure to delete the Book "+bookName+"?",
            showCancelButton: true,
            confirmButtonText: ' Yes, delete it!',
          }).then((result) => {
            if (result.isConfirmed) {
                formDeleteBook.submit();
                return true;
            } else if (result.isDenied) {
                evt.preventDefault();
                return false;
            }
        })
    })
}

//Alerta para confirmar modify de libro
function modifyBookJS() {
    var bookName =  document.getElementById('bookName');
    var ISBN =  document.getElementById('isbn');
    var formModifyBook = document.getElementById('formModifyBook');
    formModifyBook.addEventListener('submit', function name(evt) {
        Swal.fire({
            title: "Modify the Book"+bookName+" with ISBN: "+ISBN+"?",
            showCancelButton: true,
            confirmButtonText: 'Modify it!',
          }).then((result) => {
            if (result.isConfirmed) {
                formModifyBook.submit();
                return true;
            } else if (result.isDenied) {
                evt.preventDefault();
                return false;
            }
        })
    })
}


//Alerta para confirmar update de usuario
function updateAccountJS() {
    var formUpdateAccount = document.getElementById('formUpdateAccount');
    formUpdateAccount.addEventListener('submit', function name(evt) {
        Swal.fire({
            title: "Are you sure to update your account?",
            showCancelButton: true,
            confirmButtonText: 'Yes, Update it!',
          }).then((result) => {
            if (result.isConfirmed) {
                formUpdateAccount.submit();
                return true;
            } else if (result.isDenied) {
                evt.preventDefault();
                return false;
            }
        })
    })
}

//Alerta confirmar solicitar libro
function requestBookJS() {
    var bookName =  document.getElementById('bookName').innerHTML;
    var formRequestBook = document.getElementById('formRequestBook');
    formRequestBook.addEventListener('submit', function name(evt) {
        Swal.fire({
            title: "Are you sure to requeste the book "+bookName+"?",
            showCancelButton: true,
            confirmButtonText: 'Yes, request it!',
          }).then((result) => {
            if (result.isConfirmed) {
                formRequestBook.submit();
                return true;
            } else if (result.isDenied) {
                evt.preventDefault();
                return false;
            }
        })
    })
}

//Alerta confirmar entrega de  libro
function deliverBookJS() {
    var idLoan =  document.getElementById('idLoan').innerHTML;
    var formDeliverBook = document.getElementById('formDeliverBook');
    formDeliverBook.addEventListener('submit', function name(evt) {
        Swal.fire({
            title: "Are you sure to deliver the loan: "+idLoan+"?",
            showCancelButton: true,
            confirmButtonText: 'Yes, deliver it!',
          }).then((result) => {
            if (result.isConfirmed) {
                formDeliverBook.submit();
                return true;
            } else if (result.isDenied) {
                evt.preventDefault();
                return false;
            }
        })
    })
}