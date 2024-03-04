<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title = ".mpl Tutorial: Secure Copy";
$name = "Tutorials";
$page = " 'scp' "; /*command name here*/


include("../assets/includes/header.php");
?>

<style>
   #scpAnimation {
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
        animation: scpAnimate 4s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
    }

    #server i{
        position: absolute;
        left: 15%;
        top: 15%;
    }

    #server h3 {
        position: absolute;
        left: 20%;
        top: 38%
    }

    #local i{
        position: absolute;
        right: 15%;
        top: 15%;
    }

    #local h3 {
        position: absolute;
        right: 15%;
        top: 38%
    }

    #file2 {
        position: absolute;
        right: 10%;
        top: 55%
    }

    #file1 {
        position: absolute;
        left: 17%;
        top: 55%
    }

   

    @keyframes scpAnimate {
        0% {
            position: absolute;
            left: 17%;
            top: 55%
        }
        100% {
            position: absolute;
            left: 75%;
            top: 55%
        }
    }
    /*style*/

</style>


        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>Secure copy (scp)</h1>    
            <p>SCP (Secure Copy) is a command-line tool and protocol for securely
                 copying files between local and remote systems using SSH for 
                 authentication and data transfer. It allows you to copy files securely 
                 between your local machine and a remote server.
            </p>

            <h1>scp (local_filepath) user@hostname (filepath)</h1>
            <p> This command copies a file from your local machine to a remote server. 
                You specify the local file path, your username (user), the server's 
                hostname (hostname), and the destination file path on the server.
            </p>

            <h1>scp user@server_host:(filepath) (local_path)</h1>
            <p> This command copies a file from a remote server to your local machine. 
                You specify the remote user, the server's hostname (server_host), the 
                source file path on the server, and the local destination path.
            </p>
                

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser > scp /home/heyy.txt user@example.server.com /home/desktop <br>
                localuser > scp user@example.sever.com /home/desktop/heyy.txt /home/downloads <br>

            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Securely copy file1.txt, located in the
                    home directory of the server with the address 'yourUsername@example.server.com', 
                    to your home directory. </label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>


            <div id="snipit" class="snipit">
                <div id="scpAnimation" class="animationbox">
                    <div  id="server" >
                        <i class="fa-solid fa-server fa-6x"></i>
                        <h3>server</h3>
                    </div>
                    <div id="local">
                        <i class="fa-solid fa-folder fa-6x"></i>
                        <h3>home</h3>
                    </div>
                    <div id="file1">
                        <i class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                    </div>
                    <div id="animateMe" >
                        <i class="fa-solid fa-file fa-4x"></i>
                        <h3>file1.txt</h3>
                        
                    </div>
                </div>
            </div>
            

            <?php include("../assets/includes/dbStringCheck.php"); ?>

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/get.php">Tutorial 22: Downloading files with FTP and SFTP </a></h3>

        </div>
        
<?php
include("../assets/includes/footer.php");
?>