<!-- Team Maple Syrup
ISTE240
12/14/2023 -->

<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Entering vim";
$name = "Tutorials";

include("../assets/includes/header.php");
?>


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>vim <i>filename</i> </h1>    

            <p> vim is a command line text editor that will open the respective file to
                edit it or create the file if it doesn’t exist.
            </p>
            
            <p>The three modes of vim</p>
            <ul>
                <li>Normal: Default mode. Allows you to navigate the file but not edit. 
                    Enter this mode by hitting Esc
                </li>
                <li>Insert: Allows editing and modifying of the content. Enter this mode by hitting i
                    on the Command line
                </li>
                <li>Command line: Allows for the inputting of commands to operate vim. 
                    Enter this mode by hitting Esc then :
                </li>
            </ul>
                

                

            <h3>Example Syntax</h3>
            <p>
                localuser > vim heyy.txt <br>
                file content <br>
                ~ <br>
                ~ <br>
                ~ <br>
                "heyy.txt" 2L, 32C   2,20 All <br>

            </p>
            

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimCursor.php">Tutorial 16: Moving the cursor in vim </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>