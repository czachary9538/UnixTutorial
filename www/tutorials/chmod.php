<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Changing File Permissions";
$name = "Tutorials";

include("../assets/includes/header.php");
?>

        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>chmod <i>options filename</i> </h1>    

            <p> The chmod command is used to change the permissions (access rights) of a 
                file or directory. It allows the user to control who can read, write, and 
                execute a file. The command is followed by various options and a filename. 
                Options Specifies the permissions to be modified. These options typically 
                include:
            </p>
                <ul>
                
                    <li>u (user): Refers to the owner of the file.<li>
                    <li>g (group): Refers to the group associated with the file.</li>
                    <li>o (others): Refers to users who are not the owner or in the group.</li>
                    <li>a (all): Refers to all users, including the owner, group, and others.</li>
                    <li>+ (add): Adds the specified permissions.</li>
                    <li>- (remove): Removes the specified permissions.</li>
                    <li>= (set): Sets the specified permissions and removes all others.</li>
                </ul>
                
            <p> Filename specifies the file or directory for which you want to change permissions. </p>

            <p> Permission options include: </ul>
            <ul>
                <li>r (read): Allows reading or viewing the file.</li>
                <li>w (write): Allows editing or modifying the file.</li>
                <li>x (execute): Allows executing the file if it's a program or script.
            </ul>
                

            <h3>Example Syntax</h3>
            <p>
                localuser > chmod g+w heyy.txt <br>
            </p>

            <!-- <div id="snipit" class="snipit">
                interactive element here
            </div> -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vim.php">Tutorial 15: Entering vim </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>