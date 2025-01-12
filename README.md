# บทสอนพื้นฐานเกี่ยวกับการเขียนโปรแกรม PHP

PHP (Hypertext Preprocessor) เป็นภาษาโปรแกรมที่ใช้พัฒนาเว็บเซิร์ฟเวอร์ยอดนิยม เนื่องจากง่ายต่อการเรียนรู้และสามารถใช้ร่วมกับ HTML ได้เป็นอย่างดี

---

## **1. การตั้งค่าพื้นฐาน**
### **1.1 การติดตั้ง PHP**
- ดาวน์โหลด PHP ได้ที่ [php.net](https://www.php.net/downloads)
- ใช้ซอฟต์แวร์เช่น XAMPP หรือ WAMP สำหรับติดตั้ง PHP, MySQL และ Apache ในที่เดียว

### **1.2 สร้างไฟล์ PHP**
1. สร้างโฟลเดอร์ในไดเรกทอรีเว็บเซิร์ฟเวอร์ (เช่น `htdocs` ใน XAMPP)
2. สร้างไฟล์ PHP ชื่อ `index.php`

---

## **2. การเขียนโค้ด PHP เบื้องต้น**

PHP ถูกฝังใน HTML โดยใช้แท็ก:
```php
<?php
// โค้ด PHP ของคุณ
?>
```

### **2.1 Hello World!**
```php
<!DOCTYPE html>
<html>
<body>
    <?php
        echo "Hello, World!";
    ?>
</body>
</html>
```
**ผลลัพธ์:** จะแสดงข้อความ "Hello, World!" บนหน้าเว็บ

---

## **3. ตัวแปรและประเภทข้อมูล**
PHP เป็นภาษาที่ไม่ต้องระบุประเภทข้อมูล (Dynamically Typed Language)

### **3.1 ตัวแปร**
ตัวแปรใน PHP เริ่มต้นด้วย `$`:
```php
<?php
$name = "John"; // ตัวแปรแบบข้อความ (String)
$age = 25;      // ตัวแปรแบบตัวเลข (Integer)
$height = 5.9;  // ตัวแปรแบบทศนิยม (Float)
$isStudent = true; // ตัวแปรแบบบูลีน (Boolean)

echo $name; // แสดงค่า John
?>
```

### **3.2 ประเภทข้อมูล**
- **String**: `"Hello"`
- **Integer**: `123`
- **Float**: `12.34`
- **Boolean**: `true` หรือ `false`
- **Array**: `["Apple", "Banana"]`
- **Object**: ใช้ใน OOP (Object-Oriented Programming)

---

## **4. การควบคุมโครงสร้าง**
### **4.1 คำสั่งเงื่อนไข (If-Else)**
```php
<?php
$age = 20;

if ($age >= 18) {
    echo "คุณเป็นผู้ใหญ่";
} else {
    echo "คุณยังไม่บรรลุนิติภาวะ";
}
?>
```

### **4.2 ลูป**
#### **4.2.1 For Loop**
```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "รอบที่: $i<br>";
}
?>
```

#### **4.2.2 While Loop**
```php
<?php
$i = 1;
while ($i <= 5) {
    echo "รอบที่: $i<br>";
    $i++;
}
?>
```

---

## **5. ฟังก์ชัน**
ฟังก์ชันช่วยจัดการโค้ดที่ใช้งานซ้ำได้
```php
<?php
function greet($name) {
    return "สวัสดี $name!";
}

echo greet("สมชาย");
?>
```

---

## **6. การจัดการฟอร์ม (Form Handling)**
### **6.1 การส่งข้อมูลด้วย Method POST**
**HTML:**
```html
<form method="POST" action="process.php">
    ชื่อ: <input type="text" name="name">
    <input type="submit" value="ส่งข้อมูล">
</form>
```

**PHP (process.php):**
```php
<?php
$name = $_POST['name']; // รับค่าจากฟอร์ม
echo "สวัสดี $name!";
?>
```

---

## **7. การเชื่อมต่อฐานข้อมูล (MySQL)**
PHP สามารถเชื่อมต่อ MySQL ได้โดยใช้ `mysqli` หรือ `PDO`

### **7.1 ตัวอย่างการเชื่อมต่อ**
```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

echo "เชื่อมต่อสำเร็จ!";
$conn->close();
?>
```

---

## **8. การประยุกต์ใช้ PHP ในโครงการ**
1. **ระบบล็อกอิน:** รับข้อมูลจากฟอร์ม เชื่อมต่อฐานข้อมูลเพื่อตรวจสอบผู้ใช้
2. **การจัดการไฟล์:** อัปโหลดและดาวน์โหลดไฟล์
3. **API:** สร้าง RESTful API สำหรับการแลกเปลี่ยนข้อมูล

---

## **9. ข้อแนะนำเพิ่มเติม**
- เปิดโหมด Error Reporting ระหว่างพัฒนา:
```php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
```
- ใช้ Framework เช่น Laravel, CodeIgniter สำหรับโครงการขนาดใหญ่

---

หากคุณต้องการตัวอย่างเพิ่มเติม หรือแนะนำเกี่ยวกับส่วนใดใน PHP บอกได้เลย! 😊

