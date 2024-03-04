<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    $title = ".mpl Tutorial: Listing Your Processes";
    $page = " 'ssh' "; /*command name here*/
    
    include("../assets/includes/header.php");
?>
<style>

    #sshAnimation {
        color: #442415;
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #animateMe {
        position: absolute;
        top: 30%;
        right: 45%;
        animation: sshAnimate 4s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
    }

    #laptop {
        position: absolute;
        left: 15%;
        top: 30%;
    }

    #server {
        position: absolute;
        right: 15%;
        top: 30%;
    }

    @keyframes sshAnimate {
        0% {
            opacity: 0%
        }
        100% {
            opacity: 100%
        }
    }

</style>

        <div class="bubble">
            
            <h1>Secure Shell (SSH)</h1>    

                <p> SSH stands for "Secure Shell," and it is a network protocol and 
                    command-line tool used for secure remote access and secure data communication 
                    between two systems over an unsecured network. SSH provides strong encryption and 
                    authentication mechanisms, making it a secure way to access and manage remote servers 
                    and devices. You use the ssh command followed by the username (user) and the 
                    IP address or server address to establish a secure shell session with a 
                    remote server. After entering the command, you'll be prompted to enter the 
                    password.
                </p>

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser > ssh (user)@example.server.com <br>
                localuser > Password:    <br>
                [user@example.server.com ~]$
            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Use 'yourUsername@example.server.com' to connect to the server. 
                    While not in this example, keep in mind that you will be promted to enter your password when logging
                    in via SSH.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <div id="snipit" class="snipit">
                <div id="sshAnimation" class="animationbox">
                    <i id="laptop" class="fa-solid fa-laptop fa-6x"></i>
                    <i id="animateMe" class="fa-solid fa-arrow-right fa-6x"></i>
                    <i id="server" class="fa-solid fa-server fa-6x"></i>
                </div>
            </div>

            <?php include("../assets/includes/dbStringCheck.php"); ?>
            
            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ftp.php">Tutorial 9: Connecting using FTP </a></h3>

        </div>

<?php
include("../assets/includes/footer.php");
?>