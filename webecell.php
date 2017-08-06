<!DOCTYPE html>

<html>
<head>
<style>
form {
    width: 80%;
    margin: 0 auto;
}

label, input {
    /* in order to define widths */
    display: inline-block;
}

label {
    width: 30%;
    /* positions the label text beside the input */
    text-align: right;
label + input {
    width: 30%;
    /* large margin-right to force the next element to the new-line
       and margin-left to create a gutter between the label and input */
    margin: 0 30% 0 4%;
}

/* only the submit button is matched by this selector,
select {
    width: 25%;
 float:center;
}
</style>
</head>

<body>
<form action="mysql1.php" method="POST">
<label>NAME : </label>
<input  id="text1" type="text" placeholder="Enter your name" name="name"><br><br>
<label>PHONE : </label>
<input id="phn" type="tel" placeholder="Enter your phone number" name="phone"><br><br>
<label>Email : </label>
<input id="email" type="email" placeholder="Enter the Email" name="email"><br><br>
<label>DEPARTMENT : </label>
<select id="dept" name="depart">
  <option value="cse">CSE</option>
  <option value="eee">EEE</option>
  <option value="ece">ECE</option>
  <option value="prod">PROD</option>
  <option value="meta">META</option>
  <option value="ice">ICE</option>
  <option value="chem">CHEMICAL</option>
  <option value="civil">CIVIL</option>
</select><br><br>
<label>YEAR : </label>
<select id="year" name="year">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select><br><br>

<button type="submit">SUBMIT</button>
</form>
</body>
</html>



