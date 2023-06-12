const token = sessionStorage.getItem("tokenPillBox");

if (token) {
    window.alert("You are already signed in!");
    window.location = '../index.php';
}

function validateform(form) {
    var userid = form.userid.value;
    var password1 = form.password1.value;
    var password2 = form.password2.value;
    var name = form.name.value;
    var country = form.country.value;
    var email = form.email.value;
    var sex = form.sex.value;
    var english = form.english.checked;
    var nonenglish = form['non-english'].checked;
  
    if (userid === "" || password1 === "" || password2 === "" || name === "" || country === "none" || email === "" || sex === "" || (!english && !nonenglish)) {
      alert("Please fill in all required fields.");
      return false;
    }
  
    if (userid.length < 5 || userid.length > 12) {
      alert("User ID must be between 5 and 12 characters long.");
      return false;
    }
  
    if (password1.length < 7 || password1.length > 12) {
      alert("Password must be between 7 and 12 characters long.");
      return false;
    }
  
    if (password1 !== password2) {
      alert("Passwords do not match.");
      return false;
    }
  
    if (!/^[a-zA-Z]+$/.test(name)) {
      alert("Name must contain alphabets only.");
      return false;
    }
  
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    return true;
}
  