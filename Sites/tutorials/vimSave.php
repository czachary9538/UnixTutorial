<!-- Team Maple Syrup
ISTE240
12/14/2023 -->

<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Exiting and Saving";
$name = "Tutorials";

include("../assets/includes/header.php");
?>


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>Exiting and Saving in vim </h1>    
            <ul>
                <li>:w - write (save) the file</li>
                <li>:w new_file_name - save the file under a new name and continue editing original </li>
                <li>:w !sudo tee % - write out the current file using sudo</li>
                <li>:wq or :x or ZZ - write (save) and quit</li>
                <li>:q - quit (fails if there are unsaved changes) </li>
                <li>:q! or ZQ - quit without saving</li>
                <li>:wqa - write (save) and quit on all tabs</li>
    
            </ul>
                

            <h3>Example Syntax</h3>
            <p>
                localuser > :wq <br>

            </p>

            <!-- We felt that an animation was not needed / feasable for this command -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/scp.php">Tutorial 21: Copying a file with SSH </a></h3>
            <!-- links to next tutorial -->

        </div>
        
<?php
include("../assets/includes/footer.php");
?>