<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $widthPixels = (int)$_POST['widthPixels'];
    $heightPixels = (int)$_POST['heightPixels'];
    $sizeInches = (int)$_POST['sizeInches'];
    $remark = $_POST['remark'];



    // 计算 PPI
    $ppi = sqrt($widthPixels**2 + $heightPixels**2) / $sizeInches;

    // 连接数据库
    $conn = new mysqli("127.0.0.1", "root", "", "ppi");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 保存到数据库
    $sql = "INSERT INTO ppiTable (widthPixels, heightPixels, sizeInches, ppi,remark) VALUES ('$widthPixels', '$heightPixels', '$sizeInches', '$ppi', '$remark')";
    
    if ($conn->query($sql) === TRUE) {
        echo "新记录插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
