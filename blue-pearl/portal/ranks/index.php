<?php
session_start();
if(!isset($_SESSION['anon_id'])){
    header("location:/blue-pearl/index.php");
}

?>

<?php include_once "/xampp/htdocs/blue-pearl/src/php/header.php";?>
<div class="container mt-5" id="rank-body">
<?php include_once "/xampp/htdocs/blue-pearl/src/php/navbar.php";?>

       
        <div class="container" id="ranking">
 
        </div>
</div>
