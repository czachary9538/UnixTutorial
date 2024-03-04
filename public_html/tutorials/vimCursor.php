<!-- Team Maple Syrup
ISTE240
12/14/2023 -->

<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Moving the Cursor";
$name = "Tutorials";

include("../assets/includes/header.php");
?>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>Basic cursor movement </h1>    
            <ul>
                <li>up arrow - move cursor up a line </li>
                <li>down arrow - move cursor down a line </li>
                <li>left arrow - move cursor left </li>
                <li>right arrow - move cursor right </li>
            </ul>

            <h1>Advanced cursor movement </h1>    
            <ul>
                <li>H - move the cursor to top of the screen </li>
                <li>M - move the cursor to the middle of the screen </li>
                <li>L - move the cursor to the bottom of the screen </li>
                <li>w - move the cursor to the start of a word </li>
                <li>O - move the cursor to the start of the line </li>
                <li>$ - move the cursor to the end of the line </li>
                <li>fx - move the cursor to the next occurance of character x </li>
                <li>Fx - move the cursor to the previous occurance of character x </li>
            </ul>
                

                

            <h3>Example Syntax</h3>
            <p>
                localuser > H <br>

            </p>

            <!-- We felt that an animation was not needed / feasable for this command -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimEditing.php">Tutorial 17: Editing the file in vim </a></h3>
            <!-- This links to the next tutorial -->
        </div>
        
<?php
include("../assets/includes/footer.php");
?>