<?php
// الاتصال بقاعدة البيانات
$conn = new mysqli("localhost", "root", "", "info");

// التأكد من الاتصال
if ($conn->connect_error) {
die("فشل الاتصال: " . $conn->connect_error);
}

// التحقق من إرسال POST ومعه id
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
$id = intval($_POST['id']); // نحوله لرقم للتأكد

// جلب الحالة الحالية
$result = $conn->query("SELECT status FROM user WHERE id = $id");

if ($result && $result->num_rows > 0) {
$row = $result->fetch_assoc();
$current_status = $row['status'];
$new_status = ($current_status == 1) ? 0 : 1;

// تحديث الحالة
$update = $conn->query("UPDATE user SET status = $new_status WHERE id = $id");

if (!$update) {
echo "خطأ في التحديث: " . $conn->error;
exit();
}
} else {
echo "المستخدم غير موجود.";
exit();
}
} else {
echo "طلب غير صالح.";
exit();
}

// رجوع للصفحة الرئيسية
header("Location: index.php");
exit();
?>