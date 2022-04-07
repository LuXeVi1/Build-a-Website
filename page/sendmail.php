<section class="about-area">
            <div class="container">
                <!-- <div class="row"> -->
                    <form id="contact-form" action="/page/sendmail.php" method="POST" class="form-contact">
                        <?php if (isset($_SESSION['error'])) { ?>
                          <div class="alert alert-danger" role="alert">
                            <?php
                             echo $_SESSION['error'];
                              unset($_SESSION['error']);
                            ?>
                          -</div>
                        <?php } ?>
                        <?php if (isset($_SESSION['success'])) { ?>
                          <div class="alert alert-success" role="alert">
                            <?php
                              echo $_SESSION [ 'success'];
                              unset($_SESSION['success']);
                            ?>
                         ·</div>
                        <?php } ?>
                    <div class="col-sm-6 py-2 ">
                    <label for="name" class="fg-grey">Name</label>
                    <input type="text" class=" form-control" required id="name" name="name" placeholder="Enter name..">
                    </div>
                    <div class="col-sm-6 py-2">
                    <label for="email" class="fg-grey">Email</label>
                    <input type="text" class="form-control" required id="email" name="email" placeholder="Email address..">
                    </div>
                    <div class="col-12 py-2">
                    <label for="subject" class="fg-grey">Subject</label>
                    <input type="text" class="form-control" required id="subject" name="subject" placeholder="Subject..">
                    </div>
                    <div class="col-12 py-2">
                    <label for="message" class="fg-grey">Message</label>
                    <textarea id="message" rows="8" required class="form-control" name="message" placeholder="Enter message.."></textarea>
                    </div>
                    <div class="col-12 mt-3">
                    <button type="submit" class="btn btn button primary-button px-5 text-center">Submit</button>
                    </div>
                </div>
            </form>
            <script type="text/javascript">
                $(document).ready(function(){
                $( '#contact-form').on('submit',function(e) { //Don't foget to change the id form
                    $.ajax({
                        url:'sendmail.php', //===PHP file name===
                        data: $(this).serialize(),
                        type: 'POST',
                        success:function(data){
                            console.log(data);
                            //Success Message == 'Title', 'Message body', Last one leave as it is
                        Swal ("Success!", "I will contact you back soon.", "success");
                        },
                        error: function(data){
                            //Error Message == 'Title', 'Message body', Last one leave as it is
                        Swa"Error" , "Something went wrong please try again", "error") ;
                        }
                        });
                        this.reset();
                        e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
                    }) ;|
                });
            </script>

<?php
            addslashes ($_POST['name'];
    $email = addslashes($_POST['email']);
    $sj = addslashes($_POST['subject']);
    $msg = addslashes($_POST['message']);
    $name
        
    $to = "arkkhanirut.pandej@buxevi1.online";
     $subject = $sj;
    $message = $msg;
                        $header = "From : "
                         . $email .
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
                                    %D \r\n";
    $retval = mail($to,$subject,$message,$header);
?>