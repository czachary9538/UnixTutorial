<!-- Team Maple Syrup
ISTE240
12/14/2023 -->

<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Word Count";
$name = "Tutorials";

include("../assets/includes/header.php");
?>




        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>wc <i>filename</i> </h1>    

            <p> The wc (word count) command is used to count various metrics in a text file, 
                including the number of lines, words, and characters. When used with a 
                filename as an argument, it provides a breakdown of these counts for the 
                specified file.

            </p>

            <h3>Example Syntax</h3>
            <p>
                localuser > wc heyy.txt <br>
                2 5 352 heyy.txt <br>
            </p>

            <!-- <div id="snipit" class="snipit">
                interactive element here
                We felt that an animation was not necessary / feasable for this command
            </div> -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/chmod.php">Tutorial 15: Changing permissions </a></h3>
            <!-- links to next tutorial -->
        </div>
        
<?php
include("../assets/includes/footer.php");
?>