<!--Team Maple Syrup
ISTE240
12/14/2023-->
<?php 
    $path = "../";
    $logo = "../assets/images/logo_with_text.png";
    $name = "Tutorials";
    $title = ".mpl Tutorial: Listing Your Processes";
    $page = " 'ps' ";
    
    include("../assets/includes/header.php");
?>
<style>

    #psAnimation {
        color: #442415;
        border: #031F29 solid 1px;
        width: 80%;
        height: 80%;
        position: relative;
    }

    #animateMe {
        animation: psAnimate 4s;
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
        left: 22%;
        top: 69%;
        color:#031F29;
    }

    #p3 i{
        position: absolute;
        right: 20%;
        top: 45%;
    }

    #p3 h3{
        position: absolute;
        right: 22%;
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

    @keyframes psAnimate {
        0% {
            opacity: 0%
        }
        100% {
            opacity: 100%;
        }
    }


</style>

        <div class="bubble">
            
            <h1>ps -u username</h1>    

            <p> The ps command is used to list running processes on the system. When used with t
                he -u flag followed by a username (e.g., ps -u yourusername), it displays a 
                list of processes associated with that specific username. The list includes
                information such as the process ID (PID), CPU and memory usage, and more.
            </p>

            <h3 id="reloadLocation">Example Syntax</h3> 
            <p>
                localuser ~ > ps -u localuser<br>
                PID     TTY     TIME     CMD <br>
                2373    ?       00:00:00 systemd <br>
                2377    ?       00:00:00 (sd-pam) <br>
            </p>

            <form action="#reloadLocation" method="get">
            <div class="terminalWrapper">
                <label class="terminalLabel" for="terminal">Try it yourself! Display the processes currently running on your computer.</label>
                <br>
                <textarea class="terminal" id="terminal" name="terminal" rows=5 cols=33>></textarea>
                <br>
                <input type="submit"  name="check"  value="Check"/>
            </div>
            </form>

            <div id="snipit" class="snipit">
                <div id="psAnimation" class="animationbox">
                    <div id="pc">
                        <i id="pc" class="fa-solid fa-laptop fa-6x ani"></i>
                        <h3>your computer</h3>
                    </div>
                    <div id="animateMe">
                        <div id="p1">
                            <i class="fa-solid fa-microchip fa-6x ani"></i>
                            <h3>10837</h3>
                        </div>
                        <div id="p2">
                            <i class="fa-solid fa-microchip fa-6x ani"></i>
                            <h3>10562</h3>
                        </div>
                        <div id="p3">
                            <i class="fa-solid fa-microchip fa-6x ani"></i>
                            <h3>10999</h3>
                        </div>
                    </div>
                </div>
            </div>

            <?php include("../assets/includes/dbStringCheck.php"); ?>
            
            <h3><a class="hoverState" href="https://solace.ist.rit.edu/~iste240t08/tutorials/kill_PID.php">Tutorial 7: Terminating processes></a></h3>

        </div>

<?php
include("../assets/includes/footer.php");
?>