<!-- Team Maple Syrup
ISTE240
12/14/2023 -->

<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Editing the File";
$name = "Tutorials";

include("../assets/includes/header.php");
?>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>Insert mode and editing </h1>    
            <ul>
                <li>i - insert before the cursor </li>
                <li>I - insert at the beginning of the line </li>
                <li>a - insert after the cursor </li>
                <li>A - insert at the end of the line </li>
                <li>o - create a new line below the current line </li>
                <li>O - create a new line above the current line </li>
                <li>Ctrl + j - add a line break at the cursor position </li>
                <li>Ctrl + t - indent the line one shift width </li>
                <li>Ctrl + d - de-indent the line one shift width </li>
                <li>dd - delete the current line </li>
                <li>u - undo </li>
                <li>U - restore the last change </li>
                <li> Ctrl + r - redo </li>
                <li>Esc or Ctrl + c - exit insert mode </li>
            </ul>
                

                

            <h3>Example Syntax</h3>
            <p>
                localuser > i <br>

            </p>

            <!-- We felt that an animation was not needed / feasable for this command -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimCP.php">Tutorial 18: Copy and paste in vim </a></h3>
            <!-- This links to the next tutorial -->
        </div>
        
<?php
include("../assets/includes/footer.php");
?>