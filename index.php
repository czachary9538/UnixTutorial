<?php
$path = "./";
$logo = "assets/images/logo_with_text.png";
$title = ".mpl";
$name = "Home";

include("assets/includes/header.php"); 
?>



        <div class="options">
            
            <div id="newToUnix" class="bubble"> 
                <div class="innerBubble">
                    <h1>New to Unix</h1> <!--Font type Inter-->
                    <a href="https://solace.ist.rit.edu/~iste240t08/tutorials/index.php"> Start Learning!</a> <!--Font type Kamron-->
                </div>
            </div>

            <div id="advancedUsers" class="bubble">
                <div class="innerBubble">
                    <h1>Advanced Users</h1> <!--Font type Inter-->
                    <a href="https://solace.ist.rit.edu/~iste240t08/qr/index.php">Quick Reference!</a> <!--Font type Kamron-->
                </div>
            </div>

        </div>

        <div id="rec" class="bubble">
            <h1>Recommended Tutorials</h1> <!--Font type Kameron-->
            
            <div class="aRec">
                <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ls.php">UNIX file structure</a></h3> <!--Font type Inter-->
                <p>Start your UNIX journey by learning how to view the directory structure, then how to traverse it in our first tutorial series.</p>
            </div>

            <div class="aRec">
                <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ssh.php">Connecting to a server</a></h3> <!--Font type Inter-->
                <p>Learn how to establish a connection with another device using several common tools, including SSH, FTP, and SFTP.</p>
            </div>

            <div class="aRec">
                <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/whoami.php">User settings and control</a></h3> <!--Font type Inter-->
                <p>Learn how to access and alter information about the active user, and to control system processes.</p>
            </div>


        </div>
<?php
include("assets/includes/footer.php");
?>