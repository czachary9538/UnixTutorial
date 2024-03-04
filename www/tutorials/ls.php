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
    $page = " 'ls' ";
    
    include("../assets/includes/header.php");
?>
<style>

    #lsAnimation {
        color: #442415; /*child icon elements brown*/
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #animateMe {
        animation: lsAnimate 4s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
        width: 100%;
        margin: 0;
    }

    #abc i {
        position: absolute;
        left: 20%;
        top: 45%;
    }

    #abc h3 {
        position: absolute;
        left: 19%;
        top: 70%;
    }

    #defg i {
        position: absolute;
        top: 45%;
        left: 0;
        right: 0;
        text-align: center;
    }

    #defg h3 {
        position: absolute;
        top: 70%;
        left: 0;
        right: 0;
        text-align: center;
    }

    #hijk i {
        position: absolute;
        right: 20%;
        top: 45%;
    }

    #hijk h3 {
        position: absolute;
        right: 19%;
        top: 70%;
    }

   #root i{
        position: absolute;
        top: 5%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
    }

    #root h3{
        position: absolute;
        top: 28%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
        color:#031F29;
    }

    @keyframes lsAnimate {
        0% {
            opacity: 0%
        }
        100% {
            opacity: 100%;
        }
    }

</style>

        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>ls</h1>    

            <p> Stands for "list." It is a command used to display a list of files and 
                directories in the current directory.
            </p>

            <h1>ls -l</h1>

            <p> ls -l is an extended version of the ls command. It displays files and 
                directories in a detailed, or "long" format, showing additional information 
                like file permissions, owner, group, file size, and 
                modification date/time.
            </p>

            <h1>ls -a</h1>

            <p> ls -a is used to list all files and directories in the current directory, 
                including hidden files and directories. Hidden files in Unix-like systems 
                typically start with a dot (e.g., .config).
            </p>



            <h3 id="reloadLocation">Example Syntax</h3>
            <p>
                localuser ~ > ls <br>
                Music  Downloads  Documents  Desktop  <br>
            </p>

            <form action="#reloadLocation" method="get"> <!--action="ls.php"-->
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Display the files in your current directory.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea> <!--needs to be styled-->
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <div id="snipit" class="snipit">
                <div id="lsAnimation" class="animationbox">
                    <div id="root">
                        <i id="root" class="fa-solid fa-folder fa-6x"></i>
                        <h3>root directory</h3>
                    </div>
                    <div id="animateMe">
                        <div id="abc">
                            <i class="fa-solid fa-folder fa-6x"></i>
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
                    </div>
                </div>
            </div>

            <?php include("../assets/includes/dbStringCheck.php"); ?>
            
            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/cd.php">Tutorial 2: Changing directories </a></h3>

        </div>

<?php
include("../assets/includes/footer.php");
?>