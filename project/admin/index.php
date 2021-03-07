<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
	}

?>
<html>

<head>
    <?php
			include("includes/head.inc.php");
		?>
</head>

<body>
    <!-- start header -->
    <div id="header">
        <div id="menu">
            <?php
			include("includes/menu.inc.php");
		?>
        </div>
    </div>
    <div id="logo-wrap">
        <center><div id="logo">
            <img style='max-width:100%; max-height:100%;' src='../images/finnal.gif'>
        </div></center>
    </div>
    <!-- end header -->
    <!-- start page -->

    <div id="page">
        <!-- start content -->
        <div id="content">
            <div class="post"><br>
                <h1 class="title">Dobrodošao admine </h1>
                <div class="entry">
                </div>

            </div>

        </div>
        <!-- end content -->
        <!-- start sidebar -->

        <!-- end sidebar -->
        <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end page -->
    <!-- start footer -->
    <div id="footer">
        <?php
				include("includes/footer.inc.php");
			?>
    </div>
    <!-- end footer -->
</body>

</html>
