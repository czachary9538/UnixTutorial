<!-- /*Team Maple Syrup
ISTE240
12/14/2023*/ -->


<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    $title = ".mpl Tutorial: Showing your Username";
    $page = " 'whoami' "; /*command name here*/
    
    include("../assets/includes/header.php");
?>
<style>
    /* This houses the styles for the animations */
    #whoamiAnimation {
        color: #442415; /*child icon elements brown*/
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #animateMe {
        animation: whoamiAnimate 4s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
        width: 100%;
        margin: 0;
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

    @keyframes whoamiAnimate {
        0% {
            opacity: 0%
        }
        100% {
            opacity: 100%;
        }
    }
    /*style*/

</style>

        <div class="bubble">
            
            <h1>whoami</h1>    

            <p> The whoami command is used to identify the currently logged-in user on a 
                Unix-like system. It prints the username associated with the active user 
                session.
            </p>



            <h3 id="reloadLocation">Example Syntax</h3>
             <!--This brings the page back to the text box upon form submission  -->
            <p>
                localuser ~ > whoami<br>
                localuser
            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Display your username.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>
            <!-- contains the terminal  -->

            <div id="snipit" class="snipit">
                <!--animation stuff-->
                <!--NOTE: the thing actually being animated needs to have an id of "animateMe"-->
                <div id="whoamiAnimation" class="animationbox">
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
                    <div id="animateMe">
                        <p>yourUsername</p>
                    </div>

                    <!-- The elements for the animation. The id of animate me is the one that is actually being moved -->
                </div>
            </div>

            <?php include("../assets/includes/dbStringCheck.php"); ?>
            
            <!-- includes the string checker for user input to see if they entered the correct command -->


            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/passwd.php">Tutorial 5: Changing your password</a></h3>
            <!-- Links to next tutorial -->

        </div>
<?php
include("../assets/includes/footer.php");
?>