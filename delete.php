<?php
$conn = new mysqli("127.0.0.1", "root", "", "ppi");



// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM ppiTable WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "记录删除成功";
    } else {
        echo "删除错误: " . $conn->error;
    }
}

$conn->close();
?>
