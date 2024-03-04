<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Displaying Part of A File";
$name = "Tutorials";

include("../assets/includes/header.php");
?>


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>more <i>filename</i> </h1>    

            <p> The more command is used to view the contents of a file one screen at 
                a time. It displays the beginning of the file and allows you to scroll 
                through it. You can press the spacebar to view more content, and 'q' to 
                quit. Additionally, you can search for patterns within the file using 
                '/pattern'.
            </p>

            <h3>Example Syntax</h3>
            <p>
                localuser > more hey.txt <br>
                <br>
                This is a sample text file for demonstration purposes.<br>
                It contains multiple lines of text to showcase the 'more' command.<br>
                Line 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                Line 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                Line 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                Line 4: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
                Line 5: Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                <br>--More--(5%)[Press Space for more] <br>
  
            </p>

            <!-- <div id="snipit" class="snipit">
                interactive element here
                We felt that an animation was not needed / feaseable for this command
            </div> -->
            

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/mv.php">Tutorial 12: Moving files </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>