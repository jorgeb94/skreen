function validateForm() {
  var user = document.forms["loginForm"]["username"].value;
  var password = document.forms["loginForm"]["password"].value;

  if (user == "" || password == "") {
    alert("Please Provide a Username or password");
    return false;
  }

for (var i = 0; i < localStorage.length; i++) {
  if(user == localStorage.key(i) && password == localStorage.getItem(user)){
    return true;
  }
}
alert("Account Does Not Exist");
return false;
}

const inpKey = document.getElementById('inpKey')
const inpValue = document.getElementById('inpValue')
const btnInsert = document.getElementById('btnInsert')

btnInsert.addEventListener('click', function(){
  localStorage.setItem(inpKey.value, inpValue.value)
  console.log(localStorage)
})
