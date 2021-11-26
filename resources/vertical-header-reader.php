<!--Vertical navbar -->
<?php 
    include "functions-header.php";
    include "icons.php";
?>

<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light header-nav">
        <div class="d-flex align-items-center"><img src="https://bootstrapious.com/i/snippets/sn-v-nav/avatar.png"  width="65" class="mr-3 rounded-circle img-thumbnail">
            <div>
                <h4 class="m-0 user-text"><?php echo $_SESSION['name']; ?></h4>
                <p class="font-weight-light mb-0 home-text"><?php if($_SESSION['userType'] == 2){ echo "Admin";}else{echo "User";}?></p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-2 mb-0">Main</p>
    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a class="nav-link text-dark font-italic <?=echoVerticalHeaderSelect("home")?>"  href="home.php" >
                <i class="fas fa-home text-primary fa-fw"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark font-italic <?=echoVerticalHeaderSelect("list-books")?>"  href="list-books.php" >
                <i class="fas fa-book mr-3 text-primary fa-fw"></i>
                List Of Books
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark font-italic <?=echoVerticalHeaderSelect("info-request-reader")?>"  href="info-request-reader.php" >
                <i class="fas fa-info mr-3 text-primary fa-fw"></i>
                Info of Requests
            </a>
        </li>
        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-2 mb-0">Options</p>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic">
                 <i class="fas fa-user mr-3 text-primary fa-fw"></i>
                Account
            </a>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->