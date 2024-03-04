<!-- Team Maple Syrup
ISTE240
12/14/2023 -->

<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Removing Files";
$name = "Tutorials";
$page = " 'rm' "; /*command name here*/


include("../assets/includes/header.php");
?>

<style>
    /* Houses the styles for the animation */
    #rmAnimation {
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

    #user {
        color: #F5F5F3;
        position: absolute;
        top: 38%;
        left: 19%;
    }

    #animateMe {
        animation: rmAnimate 3s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
    }

    #animateMe i {
        position: absolute;
        left: 19%;
        top: 70%;
    }

    #animateMe h3{
        position: absolute;
        left: 18%;
        top: 85%;
    }

    @keyframes rmAnimate {
        0% {
            opacity: 100%
        }
        100% {
            opacity: 0%;
        }
    }

</style>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>rm <i>filename</i> </h1>    

            <p> The rm command is used to delete files. When followed by a filename, it 
                permanently removes the specified file. Be cautious when using rm, as 
                deleted files are usually not recoverable. To prompt for confirmation 
                before deletion, you can use the 'rm -i' option.

            </p>

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser > rm heyy.txt <br>
  
            </p>
            <!-- redirects the page here upon form refresh -->

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Remove file1.txt.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>


            <div id="snipit" class="snipit">
                <div id="rmAnimation" class="animationbox">
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
                    <div id="animateMe">
                        <i class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                    </div>
                    <i id="user" class="fa-solid fa-user fa-3x"></i>
                </div>
                <!-- contains elements for animation. one with id of animateMe is one actually being animated -->
            </div>
            

            <?php include("../assets/includes/dbStringCheck.php"); ?>

            <h3><a href="https://solace.ist.rit.edu/~iste240t08/tutorials/diff.php">Tutorial 14: Comparing files </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>