<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Put File";
$name = "Tutorials";
$page = " 'put' "; /*command name here*/


include("../assets/includes/header.php");
?>

<style>
    /* houses styles for animations  */
    #putAnimation {
        color: #442415;
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #animateMe {
        animation: putAnimate 4s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
    }

    #file1 {
        position: absolute;
        left: 19%;
        top: 55%;
    }

    #animateMe h3 {
        position: absolute;
        left: 18%;
        top: 70%;
    }

    #dfile i {
        position: absolute;
        right: 19%;
        top: 55%;
    }

    #dfile h3 {
        position: absolute;
        right: 18%;
        top: 70%;
    }

    #server i{
        position: absolute;
        left: 15%;
        top: 15%;
    }

    #server h3 {
        position: absolute;
        left: 20%;
        top: 38%
    }

    #local i{
        position: absolute;
        right: 15%;
        top: 15%;
    }

    #local h3 {
        position: absolute;
        right: 15%;
        top: 38%
    }

    #upload {
        position: absolute;
        top: 15%;
        left: 45%;
    }

    @keyframes putAnimate {
        0% {
            opacity: 0%;
        }
        100% {
            opacity: 100%;
        }
    }

    /*style*/

</style>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>put <i>filename</i> </h1>
            <p>This command is used to upload the specified file from your local machine to 
                the remote server.
            </p>

            <h1>mput <i>filenames</i> </h1>
            <p> Similar to put, this command allows you to upload multiple specified 
                files from your local machine to the remote server.

            </p>


                

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser > put heyy.txt <br>

            </p>

            
            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Upload file1.txt to the server.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>


            <div id="snipit" class="snipit">
                <div id="putAnimation" class="animationbox">
                    <div  id="server" >
                        <i class="fa-solid fa-server fa-6x"></i>
                        <h3>server</h3>
                    </div>
                    <div id="local">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>localDirectory</h3>
                    </div>
                    <div id="dfile">
                        <i class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                    </div>
                    <div id="animateMe" >
                        <i id="file1" class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                        <i id="upload" class="fa-solid fa-upload fa-4x"></i>
                    </div>
                </div>
            </div>


            <p> Congratulations, you've finished all the tutorials! </p>
            

            <?php include("../assets/includes/dbStringCheck.php"); ?>


            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/index.php">Tutorial Hub </a></h3>
            <!-- This brings you back to the tutorials home page -->

        </div>
        
<?php
include("../assets/includes/footer.php");
?>