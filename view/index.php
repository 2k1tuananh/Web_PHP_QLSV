<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login page - Thang Long University</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/fonts/iconic/css/material-design-iconic-font.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./view/vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="./view/vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./view/css/util.css" />
    <link rel="stylesheet" type="text/css" href="./view/css/main.css" />
    <!--===============================================================================================-->
    <link href="css-1?family=Roboto" rel="stylesheet" />

    
  </head>
  <body>
    <div class="limiter">
      <div
        class="container-login100"
        style="background-image: url('images/bg-01.jpg')"
      >
        <div class="wrap-login100">
          <form
            method="post"
            action=""
            id="ctl00"
            class="login100-form validate-form"
          >
            <input
              type="hidden"
              name="__VIEWSTATE"
              id="__VIEWSTATE"
              value="Rd81TgcKntXsEQ9ElI0cDao0ji2/prsWSPXPHPYtspgQ9kaGK90xVkMnIsUHlQEIsDkSA+KCKcOPlQ8FMcyb4YRGQBTbaGyCu9JA0DRNwxQroTGNYL2FN7YQ0NYKzdAdBPYi5+sf08PSjYDhKG5lRtQCdEVMig0n2JMETeJBzYU="
            />

            <input
              type="hidden"
              name="__VIEWSTATEGENERATOR"
              id="__VIEWSTATEGENERATOR"
              value="CA0B0334"
            />
            <input
              type="hidden"
              name="__EVENTVALIDATION"
              id="__EVENTVALIDATION"
              value="r8cq7ZurwTyoCjZjrmRyT6BS8Sjn6Wpf93zIy1K4q5grmjKc2qeXZiTVvEIlJGEv9Xg29EbDtJgC3TZiIZ7pVfWICG4+2Da8G9MJXYXzQ5z6cMebwLuBU8owhnXNPQhUEg94o1hbn8GQ2Qstixjk9cOR6znDG+C5YrHNwoN8tWRXL4RN+N2LuLry0mu67FEr"
            />
            <span class="login100-form-logo">
              <img
                id="profile-img"
                class="profile-img-card"
                src="./view/images/logotlu.jpg"
              />
            </span>

            <span class="login100-form-title p-b-34 p-t-27">Đăng nhập </span>

            <div
              class="wrap-input100 validate-input"
              data-validate="Điền tên đăng nhập"
            >
              <input
                name="tk"
                type="text"
                id="tbUserName"
                class="input100"
                placeholder="Tên đăng nhập"
              />
              <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Điền mật khẩu"
            >
              <input
                name="mk"
                type="password"
                id="tbPassword"
                class="input100"
                placeholder="Mật khẩu"
              />
              <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            <div class="contact100-form-checkbox">
              <input
                name="ckb1"
                type="checkbox"
                id="ckb1"
                class="input-checkbox100"
                checked="checked"
              />
              
            </div>

            <div class="container-login100-form-btn">
              <input
                type="submit"
                name="login"
                value="Đăng nhập"
                id="btLogin"
                class="login100-form-btn"
              />
            </div>
            <br />
            <div>
              <a href="?controller=login&action=quenmk" class="text-white"
                >Quên mật khẩu nhấn vào dòng này</a
              >
            </div>
            <br />
           
            <div class="text-center p-t-90">
              <span id="lbResult"></span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
  </body>
</html>
