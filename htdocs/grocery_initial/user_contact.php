<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin/connect.php'); ?>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
        <?php
        include ('navbarfixed.php');
        ?>
        <div id="page">
            <?php include ('nav_sidebar2.php');?>
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
                      

                    </div>
                    <div id="body">
                        <h3>Contact Us</h3>
						<h4>  Lane-8 Bapujinagar</h4>
						<a href="tel:+919439364623"><img src="images/callnow.gif"  width="80" height="67" alt="AOne  9439364623"></a>
						<h4>Call  <a href="tel:+919439364623"  </a>   +91-9439364623
						    <a href="tel:+917008553050"  </a> +91-7008553050 </h4>
                        <hr>
                        <form method = "POST">
                            <label for="name"><span>name</span>
                                <input type="text" name="name" id="name">
                            </label>
                            <label for="email2"><span>email</span>
                                <input type="text" name="Email" id="email2">
                            </label>
                            <label for="message"><span>message</span>
                                <textarea id="message" name = "message" cols="30" rows="10"></textarea>
                            </label>
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                            <button   class="btn btn-success" name = "submit" ><i class="icon-envelope icon-large"></i>&nbsp;Submit</button>
							
                        </form>
						
						<?php include ('admin/connect.php');
						
						if (isset ($_POST ['submit']))
						
						{
							$name = $_POST['name'];	
							$Email = $_POST['Email'];
							$message = $_POST['message'];
						
						
										mysqli_query($conn, "insert into messages(name,Email,message) VALUES('$name','$Email','$message')");
									
									echo "<script>
										alert('Your Messages Successfully Sent');
										header ('location :../index.php');
									</script>";
									 }


									 ?>		
                    </div>
                    <div id="footer">
                        <?php include('footer_user.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer_bottom.php'); ?>
</body>
</html>