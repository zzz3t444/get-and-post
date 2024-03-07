<?php
// cek tombol submitnya bree
if (isset($_POST["submit"])) {
  // cek username&password lol
  if (
    ($_POST["username"] == "acham" && $_POST["password"] == "9722") ||
    ($_POST["username"] == "zeeta" && $_POST["password"] == "0080")
  ) {
    // nek bener, lanjut halaman
    header("location: admin.php");
    exit;
  } else {
    // nek salah, tampilkan salah
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login Page</title>
</head>

<body>
  <main class="Poppins border mt-44 p-10 shadow-xl rounded-3xl mx-auto max-w-[450px]">
    <div class="ClassName">
      <div class="ClassName">
        <img src="../PHP-Login/src/assets/games.jpeg" class="w-14 mx-auto rounded-full" alt="" />
      </div>
      <div class="flex justify-between items-end">
        <h1 class="text-6xl tracking-tighter font-semibold">Login</h1>
        <div class="flex items-center hover:scale-95 duration-300 gap-1">
          <p class="tracking-tight text-[12px] text-gray-400 font-semibold">Login with</p>
          <div class="forsvg">
            <svg width="35px" height="35px" viewBox="0 0 48 48" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <path d="M48 0L48 0L48 48L0 48L0 0L48 0Z" id="path_1" />
                <clipPath id="clip_1">
                  <use xlink:href="#path_1" clip-rule="evenodd" fill-rule="evenodd" />
                </clipPath>
              </defs>
              <g id="Google">
                <path d="M48 0L48 0L48 48L0 48L0 0L48 0Z" id="Google" fill="none" stroke="none" />
                <path d="M43.611 20.083L42 20.083L42 20L24 20L24 28L35.303 28C33.654 32.657 29.223 36 24 36C17.373 36 12 30.627 12 24C12 17.373 17.373 12 24 12C27.059 12 29.842 13.154 31.961 15.039L37.618 9.382C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24C4 35.045 12.955 44 24 44C35.045 44 44 35.045 44 24C44 22.659 43.862 21.35 43.611 20.083L43.611 20.083Z" id="Shape" fill="#FBC02D" stroke="none" clip-path="url(#clip_1)" />
                <path d="M6.306 14.691L12.877 19.51C14.655 15.108 18.961 12 24 12C27.059 12 29.842 13.154 31.961 15.039L37.618 9.382C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691L6.306 14.691Z" id="Shape" fill="#E53935" stroke="none" clip-path="url(#clip_1)" />
                <path d="M24 44C29.166 44 33.86 42.023 37.409 38.808L31.219 33.57C29.211 35.091 26.715 36 24 36C18.798 36 14.381 32.683 12.717 28.054L6.195 33.079C9.505 39.556 16.227 44 24 44L24 44Z" id="Shape" fill="#4CAF50" stroke="none" clip-path="url(#clip_1)" />
                <path d="M43.611 20.083L43.595 20L42 20L24 20L24 28L35.303 28C34.511 30.237 33.072 32.166 31.216 33.571C31.217 33.57 31.218 33.57 31.219 33.569L37.409 38.807C36.971 39.205 44 34 44 24C44 22.659 43.862 21.35 43.611 20.083L43.611 20.083Z" id="Shape" fill="#1565C0" stroke="none" clip-path="url(#clip_1)" />
              </g>
            </svg>
          </div>
        </div>
      </div>
      <div class="ClassName"></div>
    </div>
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic">
        username / password lu salah pea!
      </p>
    <?php endif; ?>
    <ul class="mt-12">
      <form action="" method="post">
        <li class="ClassLabel grid">
          <label class="text-md text-gray-500" for="username font-semibold">Username / your name</label>
          <input class="p-6 mt-2 border text-sm rounded-2xl" type="text" name="username" placeholder="Username" id="username" />
        </li>
        <li class="ClassLabel mt-7 grid">
          <div class="flex justify-between">
            <label class="text-md text-gray-500" for="password font-semibold">Password </label>
            <a class="text-blue-400 hover:scale-95 duration-300 text-[12px]" href="#">Forget password?</a>
          </div>
          <input class="p-6 mt-2 border text-sm rounded-2xl" type="password" name="password" placeholder="Password" id="password" />
        </li>
        <li class="mt-12 text-center bg-[#4d46ff] w-32 p-5 hover:scale-95 duration-200 rounded-2xl">
          <button class="font-semibold text-gray-100" type="submit" name="submit">
            Login
          </button>
        </li>
        <div class="attention flex justify-center mt-10">
          <p class="text-sm text-gray-400">Don't have account? <span><a class="font-semibold hover:scale-95 duration-300 text-black" href="#">Sign up</a></span></p>
        </div>
      </form>
    </ul>
  </main>
</body>

</html>

<style>
  .Poppins {
    font-family: "Poppins", sans-serif;
  }
</style>