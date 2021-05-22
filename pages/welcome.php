<?php 
    include('check.php');
?>
<!--Body Starts Here-->
        <div class="main">
            <div class="content">
                <div class="welcome">
                    <?php 
                        if(isset($_SESSION['login']))
                        {
                            echo $_SESSION['login'];
                            unset($_SESSION['login']);
                        }
                        //Setting Time Limit Here
                        if(!isset($_SESSION['start_time']))
                        {
                            //$_SESSION['start_time']=
                        }
                    ?>
                    Hello <span class="heavy"><?php echo $_SESSION['student']; ?></span>. Welcome to Test Portal.<br />
                    
                    <div class="success">
                        <p style="text-align: left;">
                            Here are some of the rules and regulations of this app.<br />
                            1. Select one of the Exam shown below. You can not give both the exams.<br />
                            2. This test is automated and you won't be able to return to previous question.<br />
                            3. Once you successfully login, you can't log back in unless the permission of system administrator.<br />
                            4. After you click on "Take a Test", the timer will start and it can't be paused or stopped.<br />
                            ALL THE BEST!
                        </p>
                    </div>
                    
                    <a href="<?php echo SITEURL;?>index.php?page=question&test=1">
                        <button type="button" class="btn-go">GMAT</button>
                        
                    </a>
                    <a href="<?php echo SITEURL;?>index.php?page=question&test=2">
                        <button type="button" class="btn-go">GRE</button>
                        
                    </a>
                </div>
            </div>
        </div>
        <!--Body Ends Here-->