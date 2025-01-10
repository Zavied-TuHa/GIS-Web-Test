Lưu ý code:

- Hãy khởi chạy geoserver trước

- Tại index.js hãy lựa chọn min vs max tuỳ theo mức độ (hiện tại đang để thông số theo hanoi_ward)

- Tại baseURL.php chỉnh sửa đường dẫn đến thư mục làm việc của mình

- Tại DB_Connection.php chỉnh sửa dbname và password ở câu lệnh dưới tuỳ theo csdl của mình:
  $paPDO = new PDO('pgsql:host=localhost;port=5432;dbname=BTL_test;user=postgres;password=02032711');
