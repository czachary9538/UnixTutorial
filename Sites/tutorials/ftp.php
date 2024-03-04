<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Connecting using FTP";
$name = "Tutorials";

include("../assets/includes/header.php");
?>



        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>File Transfer Protocol (FTP)</h1>    

            <p> FTP stands for "File Transfer Protocol." It is a network protocol and a 
                command-line tool used for transferring files between a local computer 
                and a remote server over a network. FTP is often used for non-secure 
                file transfers, as it does not provide encryption for data transmission.
            </p>

            <h3>Example Syntax</h3>
            <p>
                localuser > ftp example.server.com <br>
                Connected to example.server.com    <br>
                User (example.server.com): <br>
            </p>
            
<!-- 
            <div id="snipit" class="snipit">
                interactive element here
            </div> -->
            

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/sftp.php">Tutorial 10: Connecting using SFTP </a></h3>

        </div>
<?php
include("../assets/includes/footer.php");
?>