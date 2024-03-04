<!--Team Maple Syrup
ISTE240
12/14/2023-->
<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    $title = ".mpl Tutorial: Changing Your Password";
    
    include("../assets/includes/header.php") 
?>


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>passwd</h1>    

            <p> The passwd command allows a user to change their own password. When you run 
                this command, you will be prompted to enter your current password and then 
                set a new password. It is a crucial command for maintaining account security.
            </p>


            <h3>Example Syntax</h3>
            <p>
                localuser ~ > passwd<br>
                Changing password for user localuser <br>
                Current password: oldpasswd<br>
                New password: newpasswd_<br>
                Passord has ben changed <br>
            </p>

            <!--We felt that an animation was not needed of feasbile for this command-->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ps.php">Tutorial 6: Listing processes</a></h3>

        </div>
<?php
include("../assets/includes/footer.php");
?>