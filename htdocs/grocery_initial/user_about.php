<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include 'admin/connect.php'; ?>
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








                        <h3>About US :Happy Shopping</h3>
                        <div class="hero-unit-table">

                            	<div id="accordion">
										<h3>About The Company</h3>
										<div>We also offer a diverse selection of high powered solutions for commercial and industrial led lighting needs. From fixtures designed for tough environments featuring explosion-proof construction to vapor tight lights for added protection, we have a range of options to meet your exact need with ease and affordability.   </div>
										<h3>Mission</h3>
										<div>When it comes to proper illumination, you need the right lighting solutions. Whether in need of lighting for your home, commercial space, or industrial setting, we have you covered! Here at A One Electronics, we are your source for a wide range of selections tailored to the specific needs of the location. As your lighting store, we are confident you will find the right product at the right price to help you achieve all your illumination goals regardless of setting.</div>
										<h3>Vision</h3>
										<div>Regardless of what area you are buying for or your needs, we are confident you will find the right solution. With a focus on affordable prices coupled with a diverse range of manufacturers and types, finding the right style of lights and fixtures has never been easier. If you have any questions while shopping with us, please reach out to one of our friendly and knowledgeable lighting specialists for assistance. We are always happy to help in any way!</div>
										<h3>About the Developer</h3>
										<div>Established in the year 2014, Project Point in Bapuji Nagar, Bhubaneshwar is a top player in the category Engineering Project Consultants in the Bhubaneshwar. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Bhubaneshwar.</div>
							</div>
                        </div>
                    </div>
                    <div id="footer">
                        <?php include('footer_user.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer_bottom.php'); ?>
		<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>
	
	
	
</body>
</html>