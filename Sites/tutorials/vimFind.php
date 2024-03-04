<!-- Team Maple Syrup
ISTE240
12/14/2023 -->

<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Find and Replace";
$name = "Tutorials";

include("../assets/includes/header.php");
?>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>Find and Replace</h1>    
            <ul>
                <li>:/pattern - search for pattern/keyword </li>
                <li>* - jump to next instance of the pattern</li>
                <li>#  - jump to previous instance of pattern</li>
                <li>?pattern - search backward for pattern</li>
                <li>\vpattern - 'very magic' pattern: non-alphanumeric characters are interpreted as special regex symbols (no escaping needed) </li>
                <li>n - repeat search in same direction</li>
                <li>N - repeat search in opposite direction</li>
                <li>:%s/old/new/g - replace all old with new throughout file</li>
                <li>:%s/old/new/gc - replace all old with new throughout file with confirmations</li>
                <li>:noh[lsearch] - remove highlighting of search matches</li>
            </ul>
                

                

            <h3>Example Syntax</h3>
            <p>
                localuser > :/heyy <br>

            </p>

            <!-- We felt that an animation was not needed /feasable for this command -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimSave.php">Tutorial 20: Exiting and saving the file </a></h3>
            <!-- This links to the next tutorial -->

        </div>
        
<?php
include("../assets/includes/footer.php");
?>