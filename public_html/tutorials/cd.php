<!-- 
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    $title = ".mpl Tutorial: Changing Directories";
    $page = " 'cd' "; /*command name here*/
    
    include("../assets/includes/header.php");
?>

<style>
    #cdAnimation {
        color: #442415; /*child icon elements brown*/
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    /*id of animateMe denotes the object/objects to animate*/
    #animateMe {
        color: #F5F5F3;
        position: absolute;
        animation: cdAnimate 4s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
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

    @keyframes cdAnimate {
        0% {
            top: 11%;
            left: 47%;
        }
        100% {
            top: 38%;
            left: 19%;
        }
    }
</style>

        <div class="bubble">
            
            <h1>cd</h1>    

            <p> cd stands for "change directory." It is used to navigate the file system 
                by changing the current working directory. You can use it to move into a 
                specific directory by providing its name (e.g., cd my_directory) or move 
                up one level with cd ../ Typing cd without arguments takes you back to your 
                home directory, which is where you start when you open a terminal.
            </p>


            <!-- on check runs PHP to confirm correct answer & reloads here -->
            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser ~/a/b/c > cd ../../</br>
                localuser ~/a >  </br>
            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Navigate to "defg", a subdirectory of "abc", from "abc".</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <!--animation stuff-->
            <!--NOTE: the thing actually being animated needs to have an id of "animateMe"-->
            <div id="snipit" class="snipit">
                <div id="cdAnimation" class="animationbox">
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
                    <i id="animateMe" class="fa-solid fa-user fa-3x"></i>    
                </div>
            </div>

            <!--does DB call using page name & checks against preset answer string-->
            <?php include("../assets/includes/dbStringCheck.php"); ?>
            
            <!--Next tutorial-->
            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/pwd.php">Tutorial 3: Showing your current directory</a></h3>
        </div>
<?php
include("../assets/includes/footer.php");
?>