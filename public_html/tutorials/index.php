<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title=".mpl Tutorials Home";
$name = "Tutorials";
include("../assets/includes/header.php");
?>
        <div id="tutorial_bubble" class="bubble">
                <h1>Unix file structure</h1>
                    <ul>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ls.php">List files</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/cd.php">Change directories</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/pwd.php">Show current directory</a></li>
                    </ul>


                <h1>User settings</h1>
                    <ul>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/whoami.php">Show username</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/passwd.php">Change password</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ps.php">List processes</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/kill_PID.php">Terminate process</a></li>
                    </ul>


                <h1>Connecting to a server</h1>
                    <ul>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ssh.php">Connecting using SSH</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ftp.php">Connecting using FTP</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/sftp.php">Connecting using SFTP</a></li>

                    </ul>

                <h1>Creating, moving, copying files</h1>
                    <ul>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/more.php">Displaying part of a file</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/mv.php">Moving files</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/cp.php">Copying files</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/rm.php">Deleting files</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/diff.php">Comparing files</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/wc.php">Word count </a></li>

                    </ul>

                <h1>File permissions</h1>
                    <ul>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/chmod.php">Changing permissions</a></li>
                    </ul>

                <h1>Editing files with vim</h1>
                    <ul>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vim.php">Entering vim</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimCursor.php">Moving the cursor</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimEditing.php">Editing the file</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimCP.php">Copy and paste</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimFind.php">Find and replace</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/vimSave.php">Exiting and saving the file</a></li>
                    </ul>

                <h1>Uploading files</h1>
                    <ul>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/scp.php">Copying a file with SSH</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/get.php">Downloading files with FTP and SFTP</a></li>
                        <li><a class="tutorialLink" href="https://solace.ist.rit.edu/~iste240t08/tutorials/put.php">Uploading files with FTP and SFTP</a></li>
                    </ul>

        </div> 
<?php
include("../assets/includes/footer.php");
?>