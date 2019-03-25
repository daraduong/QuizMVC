

<style>

/* Login */
#div_register{
  border: 1px solid gray;
  border-radius: 3px;
  width: 470px;
  height: 270px;
  box-shadow: 0px 2px 2px 0px  gray;
  margin: 0 auto;
}

#div_register h1{
  margin-top: 0px;
  font-weight: normal;
  padding: 10px;
  background-color: grey;
  color: white;
  font-family: sans-serif;
  text-align: center;
}

#div_register div{
  clear: both;
  margin-top: 10px;
  padding: 5px;
}

#div_register .textbox{
  width: 96%;
  padding: 7px;
}

#div_register input[type=submit]{
  padding: 7px;
  width: 100px;
  background-color: blue;
  border: 0px;
  color: white;
}
</style>
<div class="container">
<form method="post" action="index.php?action=getRegister">
        <div id="div_register">
            <h1>Register</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="username" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="psw" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Register" name="register" id="but_submit" />
            </div>
        </div>
    </form>
</div>

