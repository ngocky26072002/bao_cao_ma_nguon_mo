<div class="sidebar">
    <ul class="list_sidebar">
         <?php
        $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while ($row = mysqli_fetch_array($query_danhmuc)) {
        ?>  
            <li><a href="index.php?quanli=danhmucsanpham&id=<?php echo $row['id']?>"><?php echo $row['ten_danhmuc']?></a></li>
        <?php
        }
        ?>

        </ul>
    </div>