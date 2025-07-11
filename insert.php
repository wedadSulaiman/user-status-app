<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "root", "", "info");

// التحقق من الاتصال
if ($conn->connect_error) {
die("فشل الاتصال: " . $conn->connect_error);
}

// التحقق من إرسال البيانات عبر POST
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name']) && isset($_POST['age'])) {
$name = $conn->real_escape_string($_POST['name']);
$age = intval($_POST['age']);

// إدخال البيانات مع الحالة الافتراضية = 0
$insert = $conn->query("INSERT INTO user (name, age, status) VALUES ('$name', $age, 0)");

if (!$insert) {
echo "خطأ في الإدخال: " . $conn->error;
exit();
}
}

// الرجوع للصفحة الرئيسية
header("Location: index.php");
exit();
?>
