<?php
$conn = new mysqli("127.0.0.1", "root", "", "ppi");

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT id, widthPixels, heightPixels, sizeInches, ppi ,remark FROM ppiTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" ."序号:". $row["id"]. "</td>";
        echo "<td>" ."宽度像素:". $row["widthPixels"]. "</td>";
        echo "<td>" . "高度像素:".$row["heightPixels"]. "</td>";
        echo "<td>" . "尺寸:".$row["sizeInches"]. "</td>";
        echo "<td>" ."ppi:". $row["ppi"]. "</td>";
        echo "<td>" . "备注:".$row["remark"]. "</td>";
        echo "<td><button onclick='deleteRecord(" . $row["id"] . ")'>删除</button></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 结果";
}
$conn->close();
?>
