<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <form action="err2.php" method="post">
    <h2 align="center" style="color: red">Đăng Nhập</h2>
    <label for="username">Tên đăng nhập:</label>
    <input type="text" name="username" required minlength="6" placeholder="Mời bạn nhập Tên">

    <label for="password">Mật khẩu:</label>
    <input type="password" name="password" required minlength="6" placeholder="Mời bạn nhập Mật khẩu">


    <button type="submit" value="Đăng ký">Đăng nhập</button>
    <button type="reset" style="background-color: gray;">Reset</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];

    // Kiểm tra điều kiện
    // $errors = [];
  
    if (empty($username) || empty($password) || empty($confirm_password) || empty($email)) {
      $userErr[] = "Tất cả các trường không được để trống.";
    } else if (strlen($username) < 6 || strlen($password) < 6) {
      $errors[] = "Độ dài tên đăng nhập và mật khẩu phải lớn hơn 6 ký tự.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Định dạng email không đúng.";
    } else if ($password != $confirm_password) {
      $errors[] = "Mật khẩu và xác nhận mật khẩu không trùng khớp.";
    }

    // Hiển thị thông báo lỗi hoặc đăng ký thành công
    if (!empty($errors)) {
      foreach ($errors as $error) {
        echo $error . "<br>";
      }
    } else {
      // Xử lý đăng ký ở đây (ví dụ: lưu vào cơ sở dữ liệu)
      echo "Đăng ký thành công!";
    }
  }
  ?>
</body>

</html>