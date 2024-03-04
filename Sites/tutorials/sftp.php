<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Connecting using SFTP";
$name = "Tutorials";

include("../assets/includes/header.php");
?>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>Secure File Transfer Protocol (SFTP)</h1>    

            <p> SFTP stands for "Secure File Transfer Protocol." It is an extension of 
                SSH that provides secure file transfer capabilities. SFTP encrypts both 
                the authentication and data transfer processes, making it a secure and 
                preferred choice for transferring files over SSH connections.
            </p>

            <h3>Example Syntax</h3>
            <p>
                localuser > sftp (user)@example.server.com <br>
                Password: <br>
                Connected to (user)@example.server.com    <br>
                User (example.server.com): <br>
                sftp> <br>
            </p>

            <!-- <div id="snipit" class="snipit">
                interactive element here
            </div>     -->

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/more.php">Tutorial 11: Displaying part of a file </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>