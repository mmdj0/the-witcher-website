<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="witcher-logo.png">
    <title>The Witcher</title>
    <link rel="stylesheet" href="signin-style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">
</head>
<body>
    <div id="root">
        <header>
            <nav>
            <div id="global-logo-div"><a href="#home-container"><img src="witcher-logo.png"></a><div id="title-logo-div"><div id="typed-out"><h4>The Witcher.</h4></div></div></div>                <div>
                    <ul>
                        <li>
                            <a href="index.html#about-section">About</a>
                        </li>
                        <li>
                            <a href="index.html#services-section">Services</a>
                        </li>
                        <li>
                            <a href="index.html#prices-section">Prices</a>
                        </li>
                        <li id="signin-container">
                            <a href="signin.php" id="signin-link">Sign in</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--background-->
        <div id="eclips1"></div>
        <div id="eclips2"></div>
        <img src="witcher-logo.png" id="logo">
        <div id="button-container">
                <!--<div id="btn"></div>-->
                <button class="button" id="supbutton" onclick="signIn()">Sign up</button>
                <button class="button" id="sin-button" onclick="signIn()">Sign in</button>
        </div>
        <div id="registrationbox">
            
            <form id="signup" class="inputs-container" action="" method="POST">
                <h2>Welcome Among us!</h2>
                <div class="inputs">
                    <input name="valName" type="text" placeholder="Full name" require />
                </div>
                <div class="inputs">
                    
                    <input name="valUsername" type="text" placeholder="Username" require/>
                </div>
                <div class="inputs">
                    
                    <input name="valEmail" type="email" placeholder="Email" require/>
                </div>
                <div class="inputs">
                    
                    <input name="valPassword" type="password" placeholder="Password" require/>
                </div>
                <div id="privacy-agreement">
                    <input type="checkbox" name="privacy-agreement">
                    <p>I agree to the terms of <a href="">The privacy police</a>.</p>
                </div>
                <div id="signup-button">
                    <button >Sign Up</button>
                </div>
            </form>


            <form id="signin" class="inputs-container" action="" method="POST">
                <h2>Welcome Back!</h2>
                
                <div class="inputs">
                    
                    <input name="valUsername" type="text" placeholder="Username or Email" require/>
                </div>
                
                <div class="inputs">
                    
                    <input name="valPassword" type="password" placeholder="Password" require/>
                </div>
                <div id="forget-psw">
                    
                    <a href="forgetpsw.php">Forget password?</a>
                </div>
                <div id="signin-button">
                    <button >Sign In</button>
                </div>
            </form>
        </div>
    </div>

    <script >
        const btn1 = document.getElementById("supbutton");
        const btn2 = document.getElementById("sin-button")
        const card = document.getElementById("registrationbox");
        //const movbtn = document.getElementById("btn");
        //$("#sin-button")[0].hidden = false;
        //$("#supbutton")[0].hidden = true;
        //card.addEventListener("click",flipCard);
        //btn2.addEventListener("click",flipCard())

        function signIn(){
            //$("#ris")[0].innerHTML = '<p class="login100-form-titl">00.00 $</p>';
            //$("#sin-button")[0].style.background = "#06113C"; 
            //btn1.style.backgroundColor="06113C";
            //btn1.style.color="#fffff";
            //movbtn.classList.toggle("movebtn")
            //btn1.classList.toggle("chngcbtn1");
            //btn1.classList.toggle("chngbtn1");
            //const bcbtn1 = btn1.style.backgroundColor;
            if (btn1.style.backgroundColor === 'transparent') {
                btn1.style.backgroundColor = '#0b60c3';
                btn1.style.border = "solid 1px #06113C";
                btn1.style.left = "-60px";
                //console.log("ya")
            } else {
                btn1.style.backgroundColor = 'transparent';
                btn1.style.border = "none";
                btn1.style.left = "20px";
                //console.log("44")

            }

            btn2.classList.toggle("chngc");
            btn1.classList.toggle("chngbtn1");

            //btn2.style.paddingLeft = "0px";
            //btn1.style.backgroundColor = 'transparent';
            //btn2.style.color = "#ffffff";
            card.classList.toggle("flipCardSi");
        }
        /*function signUp(){
            //$("#ris")[0].innerHTML = '<p class="login100-form-titl">00.00 $</p>';
            //$("#sin-button")[0].style.background = "#06113C"; 
            //btn1.style.backgroundColor="06113C";
            //btn1.style.color="#fffff";
            //movbtn.classList.toggle("movebtn")
            btn1.classList.toggle("chngcbtn1");
            btn2.classList.toggle("chngcback");

            card.classList.toggle("flipCardSi");
            /*btn2.classList.toggle("chngc");
            card.classList.toggle("flipCard");
        }*/
    </script>
</body>
</html>