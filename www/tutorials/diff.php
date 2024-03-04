<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Comparing Files";
$name = "Tutorials";

include("../assets/includes/header.php");
?>


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>diff <i>filename1 filename2</i> </h1>    

            <p> The diff command is used to compare the contents of two text files and display the 
                differences between them. It highlights the lines that differ between filename1 and 
                filename2, making it useful for comparing and identifying changes in files.

            </p>

            <h3>Example Syntax</h3>
            <p>
                localuser > diff heyy.txt  hey.txt <br>
  
            </p>

            <!-- <div id="snipit" class="snipit">
                interactive element here
            </div>          -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/wc.php">Tutorial 14: Word count </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>