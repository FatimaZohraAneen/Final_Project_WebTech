function validateEmail() {
    var email = document.getElementById('email').value;
    if(email == null || email == undefined || email == '') {
      alert('Email is required');
      return;
    }
  
  }
  
  function validatePassword() {
      var password = document.getElementById('password').value;
      if(password == null || password == undefined || password == '') {
        alert('Password is required');
        return;
      }
    
      if(password.length < 12) {
        alert('Password should be at least 4 characters long');
        return;
      }
    }