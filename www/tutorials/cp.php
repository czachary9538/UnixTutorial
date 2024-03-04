<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Copying Files";
$name = "Tutorials";
$page = " 'cp' "; /*command name here*/

include("../assets/includes/header.php");
?>

<style>
    #cpAnimation {
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
        animation: cpAnimate 4s;
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

    #file1 {
        position: absolute;
        left: 17%;
        top: 55%
    }

   

    @keyframes cpAnimate {
        0% {
            position: absolute;
            left: 17%;
            top: 55%
        }
        100% {
            position: absolute;
            left: 75%;
            top: 55%
        }
    }
    /*style*/

</style>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>cp <i>filename1 filename2</i> </h1>

            <p> The cp command is used to create a copy of a file. It takes two filenames 
                as arguments, where the first is the source file, and the second is the 
                destination where the copy will be created. This command duplicates the 
                content of filename1 into filename2.
            </p>

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser > cp heyy.txt ../documents/hey.txt </br>
  
            </p>


            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Copy file1.txt in the directory abc to the directory 
                    defg (hint: defg is located 1 level above file1.txt)</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>


            <div id="snipit" class="snipit">
                <div id="cpAnimation" class="animationbox">
                    <div  id="abc" >
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>abc</h3>
                    </div>
                    <div id="defg">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>defg</h3>
                    </div>
                    <div id="file1">
                        <i class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                    </div>
                    <div id="animateMe" >
                        <i class="fa-solid fa-file fa-4x"></i>
                        
                    </div>
                </div>
            </div>
        
        
        
    
            <?php include("../assets/includes/dbStringCheck.php"); ?>


            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/rm.php">Tutorial 14: Deleting files </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>