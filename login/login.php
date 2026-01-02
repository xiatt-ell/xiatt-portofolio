<?php
session_start();

// Database simulation (in a real app, use MySQL/MariaDB)
$users = [
      'admin' => [
         'password' => password_hash('admin123', PASSWORD_DEFAULT),
         'name' => 'Administrator'
      ],
      'user' => [
         'password' => password_hash('user123', PASSWORD_DEFAULT),
         'name' => 'Regular User'
      ],
   ];

$error = '';
$success = '';

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = trim($_POST['username'] ?? '');
      $password = trim($_POST['password'] ?? '');
      
      if (empty($username) || empty($password)) {
         $error = 'Username dan password harus diisi!';
      } elseif (!array_key_exists($username, $users)) {
         $error = 'Username tidak ditemukan!';
      } elseif (!password_verify($password, $users[$username]['password'])) {
         $error = 'Password salah!';
      } else {
         // Authentication successful
         $_SESSION['user'] = [
               'username' => $username,
               'name' => $users[$username]['name'],
               'logged_in' => true
         ];
         
         $success = 'Login berhasil! Mengalihkan...';
         header('Refresh: 2; URL=../intro.html');
      }
   }

   // Check if user is already logged in
   if (isset($_SESSION['user']['logged_in']) && $_SESSION['user']['logged_in'] === true) {
      header('Location: ../intro.html');
      exit;
   }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/logo_elra.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>XIATT | LOGIN</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: url('img/bg-hitam.png') no-repeat center center/cover;
      position: relative;
    }

    /* Blur overlay */
    body::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.4);
      backdrop-filter: blur(6px);
      z-index: 0;
    }

    /* Container utama kiri-kanan */
    .container {
      position: relative;
      z-index: 1;
      width: 80%;
      max-width: 1000px;
      height: 500px;
      display: flex;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 12px 30px rgba(0,0,0,0.35);
      background: rgba(56, 56, 56, 0.05);
    }

    /* Bagian kiri: logo/icon */
    .left {
      flex: 1;
      /* background: rgba(0, 6, 97, 0.3); */
      background: #3e424b;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      color: white;
      text-align: center;
      padding: 20px;
    }

    .left img {
      width: 120px;
      margin-bottom: 20px;
      filter: drop-shadow(2px 2px 8px rgba(0,0,0,0.7));
    }

    .left h1 {
      font-size: 36px;
      font-weight: bold;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.8);
    }

    /* Bagian kanan: form login */
    .right {
      flex: 1;
      background: rgba(92, 92, 95, 0.5);
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .right h2 {
      opacity: 90%;
      text-align: center;
      margin-bottom: 25px;
      /* color: #333; */
      color: rgba(255, 255, 255, 1);
      text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
      
    }

    .right label {
      opacity: 90%;
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      /* color: #444; */
      color: #ffffffff;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
    }

    .right input {
      opacity: 80%;
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .right input:focus {
      border-color: #0077ff;
      outline: none;
      box-shadow: 0 0 8px rgba(0, 119, 255, 0.3);
    }

    .right button {
      opacity: 90%;
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(135deg, #0077ff, #005fcc);
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .right button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0, 119, 255, 0.4);
    }

    .error {
      /* color: red; */
      opacity: 100%;
      background-color: #f8d7da;
      color: #681019ff;
      border: 1px solid #a06e73ff;
      text-align: center;
      margin-bottom: 10 px;
      font-size: 20px;
    }

    @media(max-width: 768px) {
      .container {
        flex-direction: column;
        height: auto;
      }
      .left, .right {
        flex: unset;
        width: 100%;
      }
    }
      /* Registerrr / Daftar Akun */
      .signup-text {
      text-align: center;   /* biar rapi di tengah */
      font-size: 14px;
      margin-top: 10px;
      }

      .signup-text span {
      /* color: #555;          warna teks biasa */
      color: rgba(255, 255, 255, 1);
      margin-right: 5px;    /* kasih jarak dikit */
      }

      .signup-text a {
      color: #0077ff;       /* warna link biru */
      font-weight: bold;
      text-decoration: none;
      }

      .signup a:hover {
      text-decoration: underline;
      }
      

      /* Remember Me & Forgot Password */
      .remember-text {
      /* text-align: center;   biar rapi di tengah */
      font-size: 14px;
      margin-top: 10px;
      }

      .remember-text span {
      color: rgba(255, 255, 255, 1);          /* warna teks biasa */
      margin-right: 220px;    /* kasih jarak dikit */
      }

      .remember-text a {
      color: #0077ff;       /* warna link biru */
      font-weight: bold;
      text-decoration: none;
      }

      .remember a:hover {
      text-decoration: underline;
      }

  </style>
</head>
<body>
  <div class="container">
    <!-- Bagian kiri: logo + nama perusahaan -->
    <div class="left">
      <img src="img/nishimiya.jpg" alt="Logo Elora">
      <h1>Xiatt Portofolio</h1>
    </div>

    <!-- Bagian kanan: form login -->
    <div class="right">
      <h2>Please Login</h2>
      <?php if (!empty($error)): ?>
        <p class="error"><?= $error ?></p>
      <?php endif; ?>
      <form action="" method="POST">
        <label for="username"><i class="fa-solid fa-user"></i> Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan Username" required>

        <label for="password"><i class="fa-solid fa-lock"></i> Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
        <div class="remember-text">
          <span>Remember me </span>
             <a href="#">Forgot password?</a>
        </div>
        <button type="submit">Login</button>
        <div class="signup-text">
          <span>Don't have an account yet?</span>
             <a href="#">Sign up now</a>
        </div>

      </form>
    </div>
  </div>
</body>
</html>
