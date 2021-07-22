function passVisibility() {
    let x = document.getElementById("pwd");
    let eye = document.getElementById("checkPwd");
    
    if (x.type == "password") {
      x.type = "text";
      eye.classList.remove("fa-eye");
      eye.classList.add("fa-eye-slash");
    } else {
      x.type = "password";
      eye.classList.add("fa-eye");
      eye.classList.remove("fa-eye-slash");
    }
  } 