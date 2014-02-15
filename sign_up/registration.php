<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title> Source </title>
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet" href="css/tags.css" >
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/sign_up.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="header grad">
                <br>
                <label> Sign up </label>
            </div>
            <div class="section">
                <form>
                    <table border="0" class="table form-signup">
                      
                        <tr>
                            <td> 
                                <input type="text" placeholder="Username" class="inputField uname" id="uname" maxlength="12"/>
                                <input type="password" placeholder="Password" class="inputField pword" id="pword" maxlength="12"/>
                                <br><div class="errMsg actor-uname"></div>
                            </td>
                        </tr>
                          <tr>
                            <td> <input type="text" placeholder="Fullname" class="inputField fullname" id="fullname"  maxlength="30"/> 
                                <br> <div class="errMsg actor-name"></div>
                            </td>    
                        </tr>
                         <tr>
                            <td> 
                                <select class="inputField gender" id="gender">
                                    <option value="male"> MALE </option>
                                    <option value="female"> FEMALE</option>
                                </select>
                                <input type="email" placeholder="Email" class="inputField email" id="email" maxlength="88">
                                <br><div class="errMsg actor-email"></div>
                            </td>
                        </tr>
                       <tr>
                            <td><input type="submit" value="Create" class="btn create grad"/> </td> 
                       </tr>
                    </table>
                  
                </form>
                 <div class="errMsg" id="emptyField"></div> 
            </div>
        </div>
    </body>
    
</html>
