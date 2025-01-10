Lưu ý code (Đây chỉ là cái khung):

- Hãy khởi chạy geoserver trước

- Tại index.js hãy lựa chọn min vs max tuỳ theo mức độ (hiện tại đang để thông số theo hanoi_ward)

- Tại baseURL.php chỉnh sửa đường dẫn đến thư mục làm việc của mình

- Tại DB_Connection.php chỉnh sửa dbname và password ở câu lệnh dưới tuỳ theo csdl của mình:
  $paPDO = new PDO('pgsql:host=localhost;port=5432;dbname=BTL_test;user=postgres;password=02032711');

Ảnh mô tả
![image](https://github.com/user-attachments/assets/49549241-f3e0-4668-8502-cf118f3e6cf6)
![image](https://github.com/user-attachments/assets/4c9d0b82-5d6d-4c6e-92d4-2f4b50980f0c)
![image](https://github.com/user-attachments/assets/df3ecb0a-1206-40a2-bb59-d8d1868fe85a)
