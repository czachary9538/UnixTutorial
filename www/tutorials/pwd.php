<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    $title = ".mpl Tutorial: Listing Files";
    $page = " 'pwd' "; /*command name here*/
    
    include("../assets/includes/header.php");
?>
<style>

    #pwdAnimation {
        color: #442415; /*child icon elements brown*/
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #abc i{
        position: absolute;
        top: 3%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
    }

    #abc h3 {
        position: absolute;
        top: 25%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
    }

    #defg i{
        position: absolute;
        left: 15%;
        top: 30%;
    }

    #defg h3{
        position: absolute;
        left: 20%;
        top: 52%;
    }

    #hijk i{
        position: absolute;
        right: 15%;
        top: 30%;
    }

    #hijk h3{
        position: absolute;
        right: 20%;
        top: 52%;
    }

    #file {
        position: absolute;
        left: 19%;
        top: 70%;
    }

    #user {
        color: #F5F5F3;
        position: absolute;
        top: 38%;
        left: 19%;
    }

    #animateMe {
        font-weight: bold;
        position: absolute;
        bottom: 5%;
        right: 10%;
        animation: pwdAnimate 3s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
    }

    @keyframes pwdAnimate {
        0% {
            opacity: 0%
        }
        100% {
            opacity: 100%;
        }
    }

</style>

        <div class="bubble">
            <h1>pwd</h1>    
            <p> pwd stands for "print working directory." It displays the full path of 
                the current working directory, allowing you to see where you are located 
                within the file system.
            </p>

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser ~/a/b/c > pwd<br>
                /home/localuser/a/b/c
            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Display the path of the current directory.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <div id="snipit" class="snipit">
                <div id="pwdAnimation" class="animationbox">
                    <div id="abc">
                        <i id="abc" class="fa-solid fa-folder fa-6x"></i>
                        <h3>abc</h3>
                    </div>
                    <div id="defg">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>defg</h3>
                    </div>
                    <div id="hijk">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>hijk</h3>
                    </div>
            
                    <i id="file" class="fa-solid fa-file fa-4x"></i>
                    <i id="user" class="fa-solid fa-user fa-3x"></i>
                    <p id="animateMe">/c/Users/yourUsername/abc/defg</p>
                </div>
            </div>

            <?php include("../assets/includes/dbStringCheck.php"); ?>
            
            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/whoami.php">Tutorial 4: Showing your username></a></h3>

<?php
include("../assets/includes/footer.php");
?>