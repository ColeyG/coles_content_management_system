<header id="mainHeader" class="container-fluid flexIn green">
    <div><h6 class="centerText"><?php echo $title;?></h6></div>
    <h2>Cole's CMS</h2>
    <div class="flexInDown">
        <h6 class="centerText"><?php echo "{$_SESSION['users_name']}"?></h6> 
        <a href="phpscripts/caller.php?caller_id=logout">Logout</a>
    </div>
</header>