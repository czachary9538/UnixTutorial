<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Moving Files";
$name = "Tutorials";
$page = " 'mv' "; /*command name here*/


include("../assets/includes/header.php");
?>
<style>
    #mvAnimation {
        color: #442415;
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #animateMe {
        position: absolute;
        top: 30%;
        right: 45%;
        animation: mvAnimate 4s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
    }

    #abc i{
        position: absolute;
        left: 15%;
        top: 15%;
    }

    #abc h3 {
        position: absolute;
        left: 20%;
        top: 38%
    }

    #defg i{
        position: absolute;
        right: 15%;
        top: 15%;
    }

    #defg h3 {
        position: absolute;
        right: 20%;
        top: 38%
    }

    #file2 {
        position: absolute;
        right: 10%;
        top: 55%
    }

   

    @keyframes mvAnimate {
        0% {
            position: absolute;
            left: 15%;
            top: 55%
        }
        100% {
            position: absolute;
            left: 69%;
            top: 55%
        }
    }
    /*style*/

</style>

        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>mv <i>filename1 filename2</i> </h1>    

            <p> The mv command is used to either move a file from one location to 
                another or rename a file. When provided two filenames, it will move the file 
                specified by the first file name to the location specified by the second filename. 
                If the second filename is in a different directory, it effectively 
                moves the file to that directory. If the second location is in the same directory 
                as the first but different from its current path, it renames the file.
            </p>

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser > mv hi.txt hello.txt <br>
                localuser > mv hi.txt ../documents <br>
  
            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Move file1.txt up one directory to defg.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <div id="snipit" class="snipit">
                <div id="mvAnimation" class="animationbox">
                    <div  id="abc" >
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>abc</h3>
                    </div>
                    <div id="defg">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>defg</h3>
                    </div>
                    <div id="animateMe">
                        <i class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                    </div>
                    <div id="file2" >
                        <i class="fa-solid fa-file fa-4x"></i>
                        <h3>file2.txt</h3>
                    </div>
                </div>
            </div>

            
            <?php include("../assets/includes/dbStringCheck.php"); ?>

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/cp.php">Tutorial 13: Copying files </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>