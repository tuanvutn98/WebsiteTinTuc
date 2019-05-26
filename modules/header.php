<?php
require('config.php');
$search = $_GET['search'];
$search = mysqli_real_escape_string($search);

$query = "SELECT idbaiviet FROM baiviet WHERE tenbaiviet LIKE '%".$search."%'";
$result= mysqli_query($query);

while($row = $result -> fetch_object()){
    echo "<div id='link' onClick='addText(\"".$row -> username."\");'>" . $row -> username . "</div>";
}
?>


<div class="header" id="myHeader">
    <div class="row">
        <div class="col-sm-1">
            <p>logo</p>
        </div>
        <div class="col-sm-5">
            <a class="active" href="#"><i class="fas fa-home"></i> Trang chủ</a>
        </div>
        <div class="col-sm-5">
            <div class="search-container">
                <form action="#">
                    <input class="search-input" type="text" id="search-query" placeholder="Tìm kiếm" spellcheck="false">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="col-sm-1">
            <button id="btnUser" type="button" onclick="clickUser()"><i class="fas fa-user"></i></button>
            <!-- The Modal -->


        </div>
    </div>
</div>
<!-- ket thuc header -->