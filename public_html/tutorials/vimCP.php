<!-- Team Maple Syrup
ISTE240
12/14/2023 -->

<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Copy and Paste";
$name = "Tutorials";

include("../assets/includes/header.php");
?>


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>Copy and paste </h1>    
            <ul>
                <li>yy - copy a line </li>
                <li>yw -  copy the characters of the word from the cursor position to the start of the next word</li>
                <li>yiw -  copy word under the cursor</li>
                <li>y$ or Y - copy to end of line</li>
                <li>p - paste the clipboard after the cursor </li>
                <li>P -  paste the clipboard before cursor</li>
                <li>dd -  cut a line</li>
                <li>dw -  cut the characters of the word from the cursor position to the start of the next word</li>
                <li>diw - cut word under the cursor </li>
                <li>:3,5d -  cut lines starting from 3 to 5</li>
                <li>g/{pattern}/d  - cut all lines containing the pattern</li>
                <li> d$ or D - delete (cut) to the end of the line </li>
            </ul>
                

                

            <h3>Example Syntax</h3>
            <p>
                localuser > yy <br>

            </p>

            <!-- We felt that an animation was not needed / feasable for this command -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimFind.php">Tutorial 19: Find and replace in vim </a></h3>
            <!-- This links to the next tutorial -->
        </div>
        
<?php
include("../assets/includes/footer.php");
?>