<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <script src="index.js" defer></script>

    <style>
body{
    background-color: black;
}
.section1{
    display: flex;
    flex-direction: row;
}
.form1{
    width: 400px;
    height: 450px;
    background-color: black;
    border-radius: 5px;
    margin-left: 420px;
    margin-top: 100px;
    border-style: inset;
    display: flex;
    flex-direction: column;
    border: 3px solid white;
}
.inputs{
    margin-top: 30px;
}
h1{
   color: white;
    font-weight: bold;
    margin-left: 150px;
    font-size: 40px;
}
label{
    font-weight: bold;
    padding-left: 50px;
    margin-bottom: 10px;
    font-size: 25px;
    color: white;
}
input{
    border-radius: 5px;
    border: none;
    height: 25px;
    width: 300px;
    margin-left: 50px;
    margin-bottom: 10px;
    margin-top: 10px;
}
input:hover{
    border: 2px solid yellowgreen;
}
.buttons{
    display: flex;
    margin-top: 50px;
    padding-left: 80px;
    justify-content: space-between;
}
.button1{
    background-color: blue;
    border: none;
    width: 70px;
    height: 25px;
    margin-left: 30px;
    border-radius: 5px;
    color: white;
}
.button2{
    background-color: red;
    border: none;
    width: 70px;
    height: 25px;
    margin-right: 120px;
    border-radius: 5px;
    color: white;
}
a{
    color: blue;
    text-align: center;
    margin-top: 30px;
}
.form2{
    width: 700px;
    height: 450px;
    background-color: black;
    border-radius: 5px;
    margin-left: 50px;
    margin-top: 100px;
    border-style: inset;
    display: flex;
    flex-direction: column;
    border: 3px solid white;
}
.inputs1{
    display: flex;
    flex-direction: row;
}
.div1 input{
    width: 120px;
    height: 20px;
    margin-left:10px;
}
.div1 label{
    font-size: 15px;
    padding-left: 10px;
}
.div2{
    display: flex;
    gap: 120px;
    color: white;
    margin-left: 20px;
    margin-top: 20px;
}
.div3{
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.buttonss{
    margin-top: 50px;
}
    </style>
</head>

<body>

<section class="section1">

    <!-- LOGIN FORM -->
    <form action="login.php" method="POST">
        <div class="form1">
            <h1>Login</h1>

            <div class="inputs">
                <label>UserName:</label>
                <input type="text" name="username">

                <label>Password:</label>
                <input type="password" name="passsword">
            </div>

            <div class="buttons">
                <button type="submit" class="button1">Login</button>
                <button type="reset" class="button2">Clear</button>
            </div>

            <a href="">Create New Account</a>
        </div>
    </form>


    <!-- REGISTRATION FORM -->
    <form action="insert.php" method="POST">

    <div class="form22 form2">

        <h1>Registration Form</h1>

        <div class="inputs1">

            <div class="div1">
                <label>full Name:</label>
                <input type="text" name="fullname">
            </div>

            <div class="div1">
                <label>username:</label>
                <input type="text" name="username">
            </div>

            <div class="div1">
                <label>password:</label>
                <input type="password" name="passsword">
            </div>

            <div class="div1">
                <label>Department:</label>
                <select name="department">
                    <option value="CSE">CSE</option>
                    <option value="SE">SE</option>
                    <option value="ECE">ECE</option>
                    <option value="EPCE">EPCE</option>
                </select>
            </div>

        </div>

        <div class="div2">

            <div class="div3">
                <label>Gender:</label>
                <label><input type="radio" name="gender" value="male"> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
                <label><input type="radio" name="gender" value="other"> Other</label>
            </div>

            <div class="div3">
                <label>Hobbies:</label>
                <label><input type="checkbox" name="hobbies[]" value="reading"> Reading</label>
                <label><input type="checkbox" name="hobbies[]" value="sports"> Sports</label>
                <label><input type="checkbox" name="hobbies[]" value="music"> Music</label>
                <label><input type="checkbox" name="hobbies[]" value="travel"> Travel</label>
            </div>

            <div class="div3">
                <label>Others:</label>
                <textarea name="others"></textarea>
            </div>

        </div>

        <div class="buttonss">
            <button type="submit" class="button1">Register</button>
            <button type="reset" class="button2">Clear</button>
        </div>

    </div>

    </form>

</section>

</body>
</html>