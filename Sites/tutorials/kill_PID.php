<!--
Team Maple Syrup
ISTE240
12/14/2023
-->
<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    $title = ".mpl Tutorial: Terminate Processes";
    $page = " 'kill_PID' "; /*command name here*/
    
    include("../assets/includes/header.php") 
?>
<style>
        @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Kameron&display=swap');

        #killPIDAnimation {
        color: #442415;
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #animateMe {
        animation: killPIDAnimate 3s;
        animation-fill-mode: forwards;
        animation-play-state: paused;
    }

    #p2 i{
        position: absolute;
        top: 45%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
    }

    #p2 h3 {
        position: absolute;
        top: 69%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
        color:#031F29;
    }

    #p1 i{
        position: absolute;
        left: 20%;
        top: 45%;
    }

    #p1 h3{
        position: absolute;
        left: 24%;
        top: 69%;
        color:#031F29;
    }

    #animateMe i{
        position: absolute;
        right: 20%;
        top: 45%;
    }

    #animateMe h3{
        position: absolute;
        right: 24%;
        top: 69%;
        color:#031F29;
    }

    #pc i{
        position: absolute;
        top: 5%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
        
    }

    #pc h3{
        position: absolute;
        top: 28%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
        color:#031F29;
    }

    @keyframes killPIDAnimate {
        0% {
            opacity: 100%
        }
        100% {
            opacity: 0%;
        }
    }
</style>

        <div class="bubble"> <!-- will become the bubble element thingy -->
            <h1>kill PID</h1>    

            <p> The kill command is used to terminate or send signals to running processes. 
                By providing the process ID (PID) (e.g., kill 1234), you can stop its execution. 
                The default signal sent by kill is SIGTERM, which allows the process to clean up 
                before exiting. If a process doesn't respond to SIGTERM, you can use kill -9 PID 
                (where 9 is the SIGKILL signal) to forcefully terminate it.
            </p>


            <h3 id="reloadLocation">Example Syntax</h3>
            <p>
                localuser ~ > kill 10562<br>

            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Terminate the process with ID 10999.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <div id="snipit" class="snipit">
                <div id="killPIDAnimation" class="animationbox">
                    <div id="pc">
                        <i id="pc" class="fa-solid fa-laptop fa-6x ani"></i>
                        <h3>your computer</h3>
                    </div>
                    <div id="p1">
                        <i class="fa-solid fa-microchip fa-6x ani"></i>
                        <h3>10837</h3>
                    </div>
                    <div id="p2">
                        <i class="fa-solid fa-microchip fa-6x ani"></i>
                        <h3>10562</h3>
                    </div>
                    <div id="animateMe">
                        <i class="fa-solid fa-microchip fa-6x ani"></i>
                        <h3>10999</h3>
                    </div>
                </div>
            </div>
            
            <?php include("../assets/includes/dbStringCheck.php"); ?>

            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/ssh.php">Tutorial 8: Connecting to a system using SSH</a></h3>

        </div>
<?php
include("../assets/includes/footer.php");
?>