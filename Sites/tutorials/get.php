<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $title = ".mpl Tutorial: Get File";
    $name = "Tutorials";
    $page = " 'get' "; /*command name here*/


    include("../assets/includes/header.php");
?>

<style>
    #getAnimation {
        color: #442415;
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #animateMe {
        animation: getAnimate 4s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
    }

    #dfile {
        position: absolute;
        left: 75%;
        top: 55%;
    }

    #animateMe h3 {
        position: absolute;
        left: 74%;
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


    #file1 i{
        position: absolute;
        left: 19%;
        top: 55%
    }

    #file1 h3 {
        position: absolute;
        left: 18%;
        top: 70%;
    }

    #download {
        position: absolute;
        top: 15%;
        left: 45%;
    }

   

    @keyframes getAnimate {
        0% {
            opacity: 0%;
        }
        100% {
            opacity: 100%;
        }
    }



</style>

        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>get <i>filename</i> </h1>    
            <p>This command is used to download the 
                specified file from the remote server to your 
                local machine.
            </p>

            <h1>mget <i>filenames</i> </h1>
            <p> Similar to get, this command allows you to download multiple specified 
                files from the remote server to your local machine.
            </p>


                

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser > get heyy.txt <br>

            </p>


            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Get file1.txt from the server</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <div id="snipit" class="snipit">
                <div id="getAnimation" class="animationbox">
                    <div  id="server" >
                        <i class="fa-solid fa-server fa-6x"></i>
                        <h3>server</h3>
                    </div>
                    <div id="local">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>localDirectory</h3>
                    </div>
                    <div id="file1">
                        <i class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                    </div>
                    <div id="animateMe" >
                        <i id="dfile" class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                        <i id="download" class="fa-solid fa-download fa-4x"></i>
                    </div>
                </div>
            </div>

            
            <?php include("../assets/includes/dbStringCheck.php"); ?>


            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/put.php">Tutorial 23: Uploading files with FTP and SFTP </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>