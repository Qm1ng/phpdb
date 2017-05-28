<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜尋結果 : <?php echo $_GET['srch'];?></title>
</head>
<body>
    
    <?php include "header.php"; ?>

    <?php
    $srch = $_GET['srch'];
    include "dbconnect.php";
    
    $result = mysqli_query($link, "SELECT * FROM activity WHERE act_name LIKE '%$srch%' OR act_desc LIKE '%$srch%';");

    $row = mysqli_fetch_assoc($result);

    if(isset($row['act_name'])) {
        echo "搜尋結果 : ".$srch;
        echo "營隊名稱:".$row['act_name'];
        echo "營隊敘述:".$row['act_desc'];
    }else {
        echo "找不到有關 ".$srch." 的營隊";
    }

    ?>


</body>
</html>