<!DOCTYPE html>
<html>
<head>
<title>forms in html 5 and javascript</title>
<link rel="backround" href="backround.html"> 
<form id="form">
<input type="text" id="username" placeholder="username"required>
<input type="email" id="email" required>
<input type="submit" value="register">
<script type="text/javascript">

function red() {

  document.bgColor="red";

}

function limegreen() {

  document.bgColor="limegreen";

}

function lightblue() {

  document.bgColor="lightblue";

}

 </script>

<div class="container">





<input type="button" class="button" value="red" onclick="red()">



<input type="button" class="button" value="limegreen" onclick="limegreen()">



<input type="button" class="button" value="lightblue" onclick="lightblue()">

<style>

.button {

    cursor: pointer;

}

</style>

</div>
</form>
</body>
</html></title>
</head>
<body>
</body>
<script>
var form = document.getElementById('form')

form.addEventlistener('submit',function(event){
    event.preventdefault() // prevents the form from autosubmitting

    var username = document.getElementById(username).value

    console.log(username)

    var email = document.getElementById('')
})
</script>
</html>