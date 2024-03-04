<!--
    Team Maple Syrup
ISTE240
12/14/2023
-->
<?php
$path = "../";
$logo = "../assets/images/logo_with_text.png";
$title =".mpl Quick Refrence";
$name = "Quick Reference";
include("../assets/includes/header.php");
?>
            <div class="bubbleQR" >
                <!-- Categories Section -->
                    <h2>Categories</h2>
                    <p>Select a category</p>
                        <ul>
                            <li><a class="tutorialLink" href="#ufs">Unix file structure</a></li>
                            <li><a class="tutorialLink" href="#userSettings">User settings</a></li>
                            <li><a class="tutorialLink" href="#connecting">Connecting to a server</a></li>
                            <li><a class="tutorialLink" href="#fileOps">Creating, moving, copying files</a></li>
                            <li><a class="tutorialLink" href="#filePermissions">File permissions</a></li>
                            <li><a class="tutorialLink" href="#vim">Editing files with vim</a></li>
                            <li><a class="tutorialLink" href="#fileUpDown">Downloading and Uploading files</a></li>
                        </ul>
            </div>

            <br/>

            <div class="bubble">
                <!-- Command Reference Section -->
                <h1 class="home">Command Reference</h1>
                    <h2 id="ufs">Unix File Structure</h2>
                        <h3>>ls</h3>
                            <p>Lists your files<br><br>Ex. Snippet</p>
                        <div class="snipitQR">
                            <p> > ls<br>
                                abc  defg  hijk
                            </p>
                        </div>

                        <h3 class="quickStart">ls-l</h3>
                            <p> Lists your files in 'long format', providing detailed
                            information such as file size, owner, permissions, and
                            modification date<br><br>Ex. Snippet</p>
                        <div class="snipitQR">
                            <p> > ls-l<br>
                            drwxr-xr-x 2 root    root      4096 Mar  9 11:49 modprobe.d<br>
                            -rw-r--r-- 1 root    root         0 Jan 11  2009 motd<br>
                            drwxr-xr-x 2 root    root      4096 Feb 23 17:17 mplayer</p>
                        </div>

                        <h3 class="quickStart">ls-a</h3>
                            <p>Lists all files, including hidden files with names starting
                            with a dot.<br><br>Ex. Snippet
                            </p>
                        <div class="snipitQR">
                            <p> > ls-a<br> drwxr-x--- 10 linuxize  linuxize  4096 Feb 12 16:28 .<br>
                            drwxr-xr-x 18 linuxize  linuxize  4096 Dec 26 09:21 ..<br>
                            -rw-------  1 mpl  mpl  1630 Nov 18  2017 .bash_history<br>
                            drwxr-xr-x  2 mpl  mpl  4096 Jul 20  2018  bin<br>
                            drwxr-xr-x  2 mpl  mpl  4096 Jul 20  2018  Desktop</p>
                        </div>

                        <h3 class="quickStart">cd filename</h3>
                            <p>Change to a directory that is within/a child of the current working directory. Typing cd without arguments takes you back to your home directory, which is where you start when you open a terminal.<br><br>Ex. Snippet</p>
                        <div class="snipitQR">
                            <p> > cd ../../defg </p>
                        </div>

                        <h3 class="quickStart">pwd</h3>
                            <p>Shows the current directory you are working in.<br><br>Ex. Snippet</p>
                        <div class="snipitQR">
                            <p> > pwd<br>/home/avi/htm</p>
                        </div>
                    </div>

                    <div class="bubble">
                        <h2 id="userSettings">User settings</h2>
                            <h3 class="quickStart">whoami</h3>
                                <p>Retrieves and displays your username.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > whoami<br> user</p>
                            </div>

                            <h3 class="quickStart">passwd</h3>
                                <p>Provides a means to modify your password.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > passwd<br> Changing password for christopher.<br>(current) UNIX password:<br>Enter new UNIX password: <br>Retype new UNIX password: <br>passwd: password updated successfully </p>
                            </div>

                            <h3 class="quickStart">ps -u yourusername</h3>
                             <p>Lists your processes, including process IDs.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > ps -u yourusername<br> .PID TTY TIME CMD<br> 1234 ?        00:00:05 bash<br> 5678 pts/1    00:00:02 vim<br> 6789 ?        00:00:01 firefox</p>
                            </div>

                            <h3 class="quickStart">kill PID</h3>
                                <p>Ceases the execution of a process by specifying its unique Process ID (PID).<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > kill 1234 </p>
                            </div>
                        </div>
                <div class="bubble">
                        <h2 id="connecting">Connecting to a server</h2>
                            <h3 class="quickStart">SSH (Secure Shell)</h3>
                                <p>connect to a remote server using SSH<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > ssh username@192.168.1.100<br>The authenticity of host '192.168.1.100 (192.168.1.100)' can't be established.<br>ECDSA key fingerprint is SHA256:abcdefghijklmnopqrstuvwxyz1234567890.<br>Are you sure you want to continue connecting (yes/no)? yes<br>Warning: Permanently added '192.168.1.100' (ECDSA) to the list of known hosts.<br>username@192.168.1.100's password:
                            </div>

                            <h3 class="quickStart">FTP (File Transfer Protocol)</h3>
                                <p>connect to remote server using FTP<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > ftp example.com<br>Connected to example.com.<br>220---------- Welcome to Example FTP Server ----------<br>220-This is a private system - No anonymous login<br>220-IPv6 connections are also welcome on this server.<br>220 You will be disconnected after 15 minutes of inactivity.<br>Name (example.com:user): your_username<br>331 User your_username OK. Password required<br>Password: </p>
                            </div>

                            <h3 class="quickStart">SFTP (Secure File Transfer Protocol)</h3>
                             <p>connect to a remote server using SFTP<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > sftp username@192.168.1.100<br>Connecting to 192.168.1.100...<br>username@192.168.1.100's password: </p>
                            </div>
                        </div>
                <div class="bubble">
                        <h2 id="fileOps">Creating, moving, copying files</h2>
                            <h3 class="quickStart">more filename</h3>
                                <p>Displays the first part of a file on the screen. Press spacebar to view more and 'q' to quit. You can search for patterns using '/pattern'.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > more sample.txt<br>This is a sample text file for demonstration purposes.<br>It contains multiple lines of text to showcase the 'more' command.<br>Line 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Line 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Line 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>Line 4: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>Line 5: Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>--More--(Next file: sample.txt)  [Press Enter for more] </p>
                            </div>

                            <h3 class="quickStart">mv filename1 filename2</h3>
                                <p>Moves a file or renames it.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > mv file.txt newfile.txt<br>> mv file.txt /path/to/destination/ </p>
                            </div>

                            <h3 class="quickStart">cp filename1 filename2</h3>
                                <p>Copies a file.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > cp example.txt backup.txt </p>
                            </div>

                            <h3 class="quickStart">rm filename</h3>
                                <p>Removes (deletes) a file. Use 'rm -i' to prompt for confirmation before deletion.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > rm -i filename<br>rm: remove regular file 'filename'? y </p>
                            </div>
                            <h3 class="quickStart">diff filename1 filename2</h3>
                                <p>Compares two files and shows the differences.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > diff file1.txt file2.txt<br> 1c1<br> > This is the content of file1.<br>---<br>> This is the content of file2.<br>3c3<br>> Some lines may be different in file2.<br> ---<br>> Some lines may be different in file1.</p>
                            </div>
                            <h3 class="quickStart">wc filename</h3>
                                <p>Counts the number of lines, words, and characters in a file.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > wc sample.txt<br>  20  100  500 sample.txt</p>
                            </div>
                                <p>It's essential to use chmod carefully, as changing permissions can affect the security and functionality of files and directories. Properly managing file permissions is important for maintaining system security and access control.</p>
                        </div>
                <div class="bubble">
                        <h2 id="filePermissions">File permissions</h2>
                            <h3 class="quickStart">chmod options filename</h3>
                                <p>Changes file permissions to read (r), write (w), and execute (x) for different users. For example, 'chmod o+r' makes the file readable for others.<br><br>Ex. Snippet</p>
                            <div class="snipitQR">
                                <p> > chmod -rwx file.txt<br>This command removes read, write, and execute permissions from the file file.txt. </p>
                            </div>
                            <p>It's essential to use chmod carefully, as changing permissions can affect the security and functionality of files and directories. Properly managing file permissions is important for maintaining system security and access control.</p>
                        </div>
                <div class="bubble">
                        <h2 id="vim">Editing files with vim</h2>
                            <h3 class="quickStart">Cursor movement</h3>
                                <p>Basic movement</p>
                            <div class="snipitQR">
                                <p> > h - move cursor left<br>j - move cursor down<br>k - move cursor up<br>l - move cursor right<br>Up arrow - move cursor up<br>Down arrow - move cursor down<br>Left arrow - move cursor left<br>Right arrow - move cursor right </p>
                            </div>
                                <p>Advanced movement</p>
                            <div class="snipitQR">
                                <p> gj - move cursor down (multi-line text)<br>gk - move cursor up (multi-line text)<br>H - move to top of screen<br>M - move to middle of screen<br>L - move to bottom of screen<br>w - jump forwards to the start of a word<br>W - jump forwards to the start of a word (words can contain<br>punctuation)<br>e - jump forwards to the end of a word<br>E - jump forwards to the end of a word (words can contain punctuation)<br>b - jump backwards to the start of a word<br>B - jump backwards to the start of a word (words can contain punctuation)<br>ge - jump backwards to the end of a word<br>gE - jump backwards to the end of a word (words can contain punctuation)<br>% - move cursor to matching character (default supported<br>pairs: '()', '{}', '[]'<br>0 - jump to the start of the line<br>^ - jump to the first non-blank character of the line<br>$ - jump to the end of the line <br>g_ - jump to the last non-blank character of the line<br>gg or [[- go to the first line of the document/beginning of file<br>G or ]] - go to the last line of the document/end of file<br>5gg or 5G - go to line 5<br>fx - jump to next occurrence of character x<br>tx - jump to before the next occurrence of character x<br>Fx - jump to the previous occurrence of character x<br>Tx - jump to after the previous occurrence of character x<br>; - repeat previous f, t, F or T movement<br>, - repeat previous f, t, F or T movement, backward<br>} - jump to next paragraph (or function/block, when editing code)<br>{ - jump to previous paragraph (or function/block, when editing code)<br>zz - center cursor on screen<br>zt - position cursor on top of the screen<br>zb - position cursor on bottom of the screen<br>Ctrl + e - move screen down one line (without moving cursor)<br>Ctrl + y - move screen up one line (without moving cursor)<br>Ctrl + b - move screen up one page (cursor to last line)<br>Ctrl + f - move screen down one page (cursor to first line)<br>Ctrl + d - move cursor and screen down 1/2 page<br>Ctrl + u - move cursor and screen up 1/2 page</p>
                            </div>

                            <h3 class="quickStart">Insert mode and editing</h3>
                              <p><br></p>
                            <div class="snipitQR">
                                <p> i - insert before the cursor<br>I - insert at the beginning of the line<br>a - insert after the cursor<br>A - insert at the end of the line<br>o - create a new line below the current line<br>O - create a new line above the current line<br>ea - insert at the end of the word<br>Ctrl + h - delete the character before the cursor during insert mode<br>Ctrl + w - delete word before the cursor during insert mode<br>Ctrl + j - add a line break at the cursor position during insert mode<br>Ctrl + t - indent (move right) line one shift width during insert mode<br>Ctrl + d - de-indent (move left) line one shift width during insert mode<br>Ctrl + rx - insert the contents of register x<br>Esc or Ctrl + c - exit insert mode<br>dd- delete current line<br>r - replace a single character.<br>R - replace more than one character, until ESC is pressed.<br>J - join line below to the current one with one space in between<br>gJ - join line below to the current one without space in between<br>cc - change/replace entire line<br>c$ or C - change/replace to the end of the line <br>ciw - change/replace entire word<br>cw or ce - change/replace/ to the end of the word<br>s - delete character and substitute text<br>S - delete line and substitute text (same as cc)<br>xp - transpose two letters (delete and paste)<br>u - undo<br>U - restore/undo last changed line<br>Ctrl + r - redo<br>. - repeat last command </p>
                            </div>

                            <h3 class="quickStart">Copy and Paste</h3>
                             <p><br></p>
                            <div class="snipitQR">
                                <p> yy - copy a line<br>2yy - copy 2 lines<br>yw - copy the characters of the word from the cursor position to the start of the next word<br>yiw - copy word under the cursor<br>yaw - copy word under the cursor and the space after or before it<br>y$ or Y - copy to end of line<br>p - paste the clipboard after cursor<br>P - paste the clipboard before cursor<br>gp - paste the clipboard after cursor and leave cursor after the new text<br>gP - paste before cursor and leave cursor after the new text<br>dd - cut a line<br>2dd - cut 2 lines<br>dw - cut the characters of the word from the cursor position to the start of the next word<br>diw - cut word under the cursor<br>daw - cut word under the cursor and the space after or before it<br>:3,5d - delete lines starting from 3 to 5<br>:g/{pattern}/d - delete all lines containing pattern<br>:g!/{pattern}/d - delete all lines not containing pattern<br>d$ or D - delete (cut) to the end of the line<br>x - delete a character </p>
                            </div>

                            <h3 class="quickStart">Exiting and Saving</h3>
                                <p><br></p>
                            <div class="snipitQR">
                                <p> :w - write (save) the file<br>:w new_file_name - save the file under a new name and continue editing original<br>:w !sudo tee % - write out the current file using sudo<br>:wq or :x or ZZ - write (save) and quit<br>:q - quit (fails if there are unsaved changes)<br>:q! or ZQ - quit without saving<br>:wqa - write (save) and quit on all tabs </p>
                            </div>
                            <h3 class="quickStart">Find and Replace</h3>
                                <p><br></p>
                            <div class="snipitQR">
                                <p> :/pattern - search for pattern/keyword<br>* - jump to next instance of the pattern<br># - jump to previous instance of pattern<br>?pattern - search backward for pattern<br>\vpattern - 'very magic' pattern: non-alphanumeric characters are interpreted as special regex symbols (no escaping needed)<br>n - repeat search in same direction<br>N - repeat search in opposite direction<br>:%s/old/new/g - replace all old with new throughout file<br>:%s/old/new/gc - replace all old with new throughout file with confirmations<br>:noh[lsearch] - remove highlighting of search matches </p>
                            </div>
                        </div>
                <div class="bubble">
                        <h2 id="fileUpDown">Downloading and Uploading</h2>
                            <h3 class="quickStart">SSH</h3>
                                <p>SCP (Secure Copy) is a command-line tool and protocol for securely copying files between local and remote systems using SSH for authentication and data transfer.</p>
                            <div class="snipitQR">
                                <p>scp (local_filepath) user@hostname:(filepath): copy file from your machine to server <br><br>scp user@server_host:(local_filepath) (local_path): copy file from server to your machine</p>
                            </div>

                            <h3 class="quickStart">FTP/SFTP (File Transfer Protocol/ Secure File Transfer Protocol)</h3>
                                <p>FTP is a standard network protocol used for transferring files between a client and a server on a computer network. SFTP, on the other hand, is an extension of SSH that provides secure file transfer capabilities over an SSH connection.</p>
                            <div class="snipitQR">
                                <p> get filename: download the specified file<br><br>mget filenames: download multiple specified files<br><br>put filename: upload the specified file<br><br>mput filenames: upload the specified files </p>
                            </div>

                </div>
    <!-- Back to Top Button -->
    <button class="backToTopBtn" onclick="scrollToTop()">Back to Top</button>

    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
        
<?php
include("../assets/includes/footer.php");
?>