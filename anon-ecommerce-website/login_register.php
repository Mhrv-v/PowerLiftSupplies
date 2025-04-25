<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--favicon-->
    <link rel="icon" href="./assets/images/logo/favicon.ico" type="image/x-icon" />

    <!--custom css link-->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">
    <link rel="stylesheet" href="./assets/css/log-anim.css">

    <!--google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('header.php');?>
    <main>
    <div class="container">
      <div class="auth-wrapper" style="display: flex; justify-content: center; align-items: center; padding: 1.5rem 0; position: relative; overflow: hidden;">
        <div class="form-container login-form active" id="loginForm" style="transition: all 0.5s ease; width: 100%; max-width: 400px;">
          <div style="background-color: #f7f4f4; border-radius: 8px; padding: 2rem; box-shadow: 0 0 10px rgba(0,0,0,0.4); text-align: center;">
            <h4 style="font-weight: 600; margin-bottom: 1.5rem;">Login to your account</h4>
            <form action="#">
              <input type="email" placeholder="Email" required
                style="width: 100%; padding: 0.75rem 1rem; margin-bottom: 1rem; border: 1px solid #ccc; border-radius: 4px;">
              <div style="position: relative;">
                <input type="password" placeholder="Password" required
                  style="width: 100%; padding: 0.75rem 1rem; margin-bottom: 1rem; border: 1px solid #ccc; border-radius: 4px;">
              </div>
              <button type="submit" style="width: 100%; padding: 0.75rem; background-color: hsl(0, 100%, 70%); color: white; border: none; border-radius: 4px; font-weight: bold;">LOGIN</button>
            </form>
            <p style="margin-top: 1rem; font-size: 0.8rem;">Not Registered? <a href="javascript:void(0)" onclick="toggleAuth()" style="color: hsl(0, 100%, 70%); font-weight: bold;">Sign Up</a></p>
          </div>
        </div>
  
        <div class="form-container signup-form" id="signupForm" style="transition: all 0.5s ease; width: 100%; max-width: 400px; display: none;">
          <div style="background-color: #f7f4f4; border-radius: 8px; padding: 2rem; box-shadow: 0 0 10px rgba(0,0,0,0.4); text-align: center;">
            <h4 style="font-weight: 600; margin-bottom: 1.5rem;">Create your account</h4>
            <form action="#">
              <input type="email" placeholder="Email" required
                style="width: 100%; padding: 0.75rem 1rem; margin-bottom: 1rem; border: 1px solid #ccc; border-radius: 4px;">
              <input type="password" placeholder="Password" required
                style="width: 100%; padding: 0.75rem 1rem; margin-bottom: 1rem; border: 1px solid #ccc; border-radius: 4px;">
              <button type="submit" style="width: 100%; padding: 0.75rem; background-color: hsl(0, 100%, 70%); color: white; border: none; border-radius: 4px; font-weight: bold;">REGISTER</button>
            </form>
            <p style="margin-top: 1rem; font-size: 0.8rem;">Already have an account? <a href="javascript:void(0)" onclick="toggleAuth()" style="color: hsl(0, 100%, 70%); font-weight: bold;">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include('footer.php');?>

  <script src="./assets/js/log_reg.js"></script>

    <script src="./assets/js/log_reg.js"></script>
    <!--ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
