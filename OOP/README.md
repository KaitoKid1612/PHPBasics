# **LẬP TRÌNH HƯỚNG ĐỐI TƯỢNG (OOP)**
## **Phương pháp lập trình truyền thống**
---
**1. Phương pháp lập trình không có cấu trúc**
#### Tổng quan: 
- Phương pháp này sử dụng cho người mới học lập trình, không sử dụng hàm.
- Tất cả dòng lệnh đều được viết trong file từ trên xuống dưới, dữ liệu đều dùng chung và tất cả các biến đều ở dạng toàn cục

Ưu điểm:
- Viết code nhanh
- Chương trình chạy rất nhanh (Vì không phải thông qua giai đoạn gọi hàm, gọi đối tượng,...)

Nhược điểm:
- Gặp khó khăn khi xây dựng các chương trình lớn (Vì dòng lệnh rất dài và rất khó bảo trì và quản lý dòng code)
- Khi chương trình có những dòng lệnh được lặp lại thì phải copy thành nhiều chỗ, và khi sửa một chỗ thì phải sửa tất cả các nơi còn lại
- Chỉ viết được các chương trình nhỏ
- Chương trình không khoa học rất khó sửa chữa và bảo trình
- Phương pháp này chỉ phù hợp cho việc học tập, không có tính thực tế cao

**2. Phương pháp lập trình hướng thủ tục(Còn gọi là lập trình hướng hàm)**
#### Tổng quan:
- Phương pháp này lấy các hàm làm nền tảng cơ bản để xây dựng chương trình, chương trình sẽ được phân nhỏ thành các hàm và mỗi hàm sẽ có chức năng riêng biệt
- Các hàm sẽ gọi qua lại lẫn nhau để tạo thành một hệ thống của chương trình
- Phương pháp này sử dụng biến cục bộ và toàn cục
#### Ưu điểm:
- Dễ quản lý và bảo trình
- Viết được những chương trình lớn hơn không có cấu trúc.
#### Nhược điểm:
- Phương pháp này khó hiểu cho những người mới sử dụng
- Các chương trình lớn khó bảo trì
- Bảo mật kém

**3. Phương pháp lập trình hướng Module**
#### Tổng quan:
- Phương pháp này sẽ gom các hàm có cùng chức năng thành 1 module
- Khi cần sử dụng nào sẽ gọi module đó
- Một chương trình có thể có nhiều module
#### Ưu điểm:
- Xây dựng được các chương trình lớn
- Code rõ ràng, dễ quản lý, bảo trì và nâng cấp
- Phân theo module(folder, file) nên mạch lạc, rõ ràng
#### Nhược điểm:
- Dữ liệu không có sự gắn kết với nhau
- Dữ liệu bị hủy sau khi gọi hàm

## **Phương pháp lập trình hướng đối tượng OOP**
----------------------------------------------------------------
- Lập trình hướng đối tượng (Viết tắt là OOP) là phương pháp lập trình hiện đại có hầu hết ở các ngôn ngữ lập trình
- OOP giải quyết các hạn chế của phương pháp lập trình truyền thống
- OOP sẽ tập trung vào đối tượng để giải quyết vấn đề
### **Thành phần chính của OOP :**
#### ***1. Class (Lớp):***
- Class để định nghĩa chung cho 1 thực thể (Hiểu đơn giản là một bản thiết kế)
- Trong 1 Class bao gồm thuộc tính (biến) và phương thức (hàm)
#### ***2. Object (Đối tượng):***
- Object dùng để thể hiện cụ thể từ bản thiết kế (Class)

=> 1 class có thể có một hoặc nhiều Object
#### **Tính chất của OOP:**
1. Tính trừu tượng (abstraction)
2. Tính đa hình (polymorphism)
3. Tính đóng gói (encapsulation)
4. Tính kế thừa  (inheritance)
#### **Ưu điểm của OOP:**
- Dễ dàng quản lý source code khi có sự thay đổi của chương trình
- Dễ mở rộng dự án
- Tiết kiệm tài nghuyên cho hệ thống
- Tính bảo mật cao
- Tính tái sử dụng cao
#### **Nhược điểm của OOP:**
- Khó tiếp cận cho người mới hoặc những người đã quen với những phương pháp truyền thống
----------------------------------------------------------------
### **Class và Object :**
#### ***1. Class (Lớp):***
- Class dùng để định nghĩa chung cho 1 thực thể (Hiểu đơn giản là bản thiết kế)
- Trong class sẽ có thuộc tính (biến), phương thức (hàm), hằng số (khai báo bằng từ khóa define hoặc const)
- Hiểu thực tế hơn: Class chính là việc đóng gói biến, hàm, hằng số để sử dụng chặt chẽ nó hơn
##### Cú pháp định nghĩa Class
```php
    class Student {
        public $name;
        private $age;
        protected $class;

        const TRUONG = 'Le Quang Chi';
        define('ADDRESS', 'Ha Tinh');

        public function getName() { return $name; }
    }
```
#### ***2. Object (Đối tượng):***
- Là sự thể hiện của Class
- Hiểu đơn giản nếu muốn sử dụng các phương thức, thuộc tính, hằng số trong class thì cần phải khởi tạo một Object
##### Cú pháp khởi tạo Object
```php
    $student1 = new Student();
```
##### Cú pháp gọi thuộc tính, hằng số, phương thức
```php
    $student1->name;//Gọi thuộc tính
    $student1->getName();//Gọi phương thức
    $student1::TRUONG;//Gọi hằng số
    //Hoặc có thể gọi hằng số theo cách này
    Student::ADDRESS;   
```
##### Đối tượng $this trong lập trình hướng đối tượng
```php
    //Phương thức gán giá trị cho thuộc tính
    public function setName($name){
        $this->name = $name;
    }
    //Phương thức lấy giá trị của thuộc tính
    public function getName(){
        return $this->getName();
    }
```
##### Phạm vi truy cập của biến
Trong lập trình hướng đối tượng có 3 phạm vi truy cập cơ bản:
- Public: Cho phép truy cấp ở mọi vị trí (Trong và ngoài Class)
- Protected: Cho phép truy cấp ở trong class và class kế thừa nó
- Private:Chỉ cho phép truy cập ở trong class
##### Phương thức khởi tạo và phương thức hủy
Trong lập trình hướng đối tượng luôn tồn tại 2 phương thức đặc biết: __construct() và __destruct()
- Phương thức __construct() sẽ được chạy đầu tiên khi khởi tạo đối tượng => Gọi là phương thức khởi tạo
- Phương thức __destruct() sẽ chạy sau khi chương trình chạy xong (Đối tượng không được sử dụng nữa) => Gọi là phương thức hủy
```php
    class User {
        public $name;

        public function __construct() {
            $this->name = 30;
        }

        public function __destruct() {
            echo 'Hàm hủy';
        }
    }
```
#### ***3. Kế thừa (Extends):***
Kế thừa class(extends) là một trong những đặc tính nổi bật của lập trình hướng đối tượng
Để kế thừa class, bạn cần dùng từ khóa extends khi định nghĩa class
Khi kế thừa, class con được phép sử dụng các thuộc tính, phương thức từ class cha và ngược lại (Trong trường hợp đối tượng được khởi tạo từ class con)
Lập trình hướng đối tượng cho phép kế thừa đa tầng (Trừ class final)
Ví dụ mẫu:
```php
    
```
#### ***3. Thuộc tính tĩnh và phương thức tĩnh:***
Phương thức tĩnh và thuộc tính tính (static) thì nó có thể truy cập trực tiếp mà không cần phải tạo đối tượng của lớp.
Class là tĩnh nếu tất cả các phương thức và thuộc tính là tĩnh.
##### **Cách khai báo**
```php
    class Person {
        public static $fullName;
        public static function getFullName() {
        }
    }
```
##### **Cách gọi**
```php
    TenClass::$tenThuocTinh;
    TenClass::$tenPhuongThuc();
```
Lưu ý:
- Nếu phương thức không phải là tĩnh => Có thể gọi giống như cách gọi phương thức tĩnh -> Không có trường hợp ngược lại
- Khi truy cập tới phương thức tĩnh và thuộc tính tĩnh trong nội bộ Class nếu muốn truy cập vào thuộc tính tĩnh trong class => Sử dụng cú pháp self::$tenThuocTinh (Áp dụng với cả phương thức tĩnh và phương thức bình thường)
- Nếu muốn truy cập tới phương thức tĩnh trong class => Sử dụng cú pháp: self::$tenPhuongThuc() (Áp dụng với cả phương thức tĩnh và phương thức bình thường)
- Nếu muốn truy cập từ phương thức tĩnh tới thuộc tính bình thường => Cần phải tạo một thuộc tính trung gian (dạng tĩnh), gán thuộc tính trung gian đó có giá trị $this ở trong phương thức khởi tạo __construct() => Khởi tạo object từ class => Sử dụng cách gọi thông qua thuộc tính trung gian theo cú pháp sau: => self::tenTrungGian->tenThuocTinhThuong