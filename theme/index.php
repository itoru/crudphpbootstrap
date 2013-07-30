<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Theme Change</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BAGIAN UNTUK URUS SEO -->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- END OF SEO -->

        <?php
        $theme = $_GET['theme'];

        switch ($theme) {
            case 'amelia':
                echo "<link href='assets/css/bootstrap_amelia.css' rel='stylesheet'	/>";
                break;
            case 'cerulian':
                echo "<link href='assets/css/bootstrap_cerulian.css' rel='stylesheet'	/>";
                break;
            case 'cosmo':
                echo "<link href='assets/css/bootstrap_cosmo.css' rel='stylesheet'	/>";
                break;
            case 'cyborg':
                echo "<link href='assets/css/bootstrap_cyborg.css' rel='stylesheet'	/>";
                break;
            case 'journal':
                echo "<link href='assets/css/bootstrap_journal.css' rel='stylesheet'	/>";
                break;
            case 'orange':
                echo "<link href='assets/css/bootstrap_orange.css' rel='stylesheet'	/>";
                break;
            case 'readable':
                echo "<link href='assets/css/bootstrap_readable.css' rel='stylesheet'	/>";
                break;
            case 'simplex':
                echo "<link href='assets/css/bootstrap_simplex.css' rel='stylesheet'	/>";
                break;
            case 'slate':
                echo "<link href='assets/css/bootstrap_slate.css' rel='stylesheet'	/>";
                break;
            case 'spacelab':
                echo "<link href='assets/css/bootstrap_spacelab.css' rel='stylesheet'	/>";
                break;
            case 'spruce':
                echo "<link href='assets/css/bootstrap_spruce.css' rel='stylesheet'	/>";
                break;
            case 'superhero':
                echo "<link href='assets/css/bootstrap_superhero.css' rel='stylesheet'	/>";
                break;
            default:
                echo "<link href='assets/css/bootstrap.css' rel='stylesheet'	/>";
        }
        ?>
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

        <link href="assets/img/favicon.png" rel="shortcut icon" />


    </head>
    <body>
	<div class="container">
	<legend><h1>Ganti Tema PHP + Bootstrap</h1></legend>
	</div>
	<div class="container">
	<p>Halaman ini adalah contoh bagaimana 1 halaman website memiliki beberapa tema yang bisa diganti <br/>
		Halaman ini menggunakan PHP dan Bootstrap sebagai tema<p>
		</div>
	   <div class="container">
            <div class="btn-group">
                <button class="btn btn-inverse">Choose Theme</button>
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href='index.php'><i class="icon-cog"></i> Basic</a></li>
                    <li><a href='index.php?theme=amelia'><i class="icon-cog"></i> Amelia</a></li>
                    <li><a href='index.php?theme=cerulian'><i class="icon-cog"></i> Cerulian</a></li>
                    <li><a href='index.php?theme=cosmo'><i class="icon-cog"></i> Cosmo</a></li>
                    <li><a href='index.php?theme=cyborg'><i class="icon-cog"></i> Cyborg</a></li>
                    <li><a href='index.php?theme=journal'><i class="icon-cog"></i> Journal</a></li>
                    <li><a href='index.php?theme=orange'><i class="icon-cog"></i> Orange</a></li>
                    <li><a href='index.php?theme=readable'><i class="icon-cog"></i> Readable</a></li>
                    <li><a href='index.php?theme=simplex'><i class="icon-cog"></i> Simplex</a></li>
                    <li><a href='index.php?theme=slate'><i class="icon-cog"></i> Slate</a></li>
                    <li><a href='index.php?theme=spacelab'><i class="icon-cog"></i> Spacelab</a></li>
                    <li><a href='index.php?theme=spruce'><i class="icon-cog"></i> Spruce</a></li>
                    <li><a href='index.php?theme=superhero'><i class="icon-cog"></i> Superhero</a></li>
                </ul>
            </div>   
        </div>
		<div class="container">
		<legend><br/></legend>
		</div>

        <div class='container'>
            <button class='btn btn-primary'>Primary</button>
            <button class='btn btn-success'>Success</button>
            <button class='btn btn-danger'>Danger</button>
            <button class='btn btn-info'>Info</button>
            <button class='btn btn-warning'>Warning</button>
            <button class='btn btn-primary'>Primary</button>
            <button class='btn btn-success'>Success</button>
            <button class='btn btn-danger'>Danger</button>
            <button class='btn btn-info'>Info</button>
            <button class='btn btn-warning'>Warning</button>
            <div>
			<br/>
			<div class='container'>
            <button class='btn btn-primary'>Primary</button>
            <button class='btn btn-success'>Success</button>
            <button class='btn btn-danger'>Danger</button>
            <button class='btn btn-info'>Info</button>
            <button class='btn btn-warning'>Warning</button>
            <button class='btn btn-primary'>Primary</button>
            <button class='btn btn-success'>Success</button>
            <button class='btn btn-danger'>Danger</button>
            <button class='btn btn-info'>Info</button>
            <button class='btn btn-warning'>Warning</button>
            <div>
			<br/>
			<div class='container'>
            <button class='btn btn-primary'>Primary</button>
            <button class='btn btn-success'>Success</button>
            <button class='btn btn-danger'>Danger</button>
            <button class='btn btn-info'>Info</button>
            <button class='btn btn-warning'>Warning</button>
            <button class='btn btn-primary'>Primary</button>
            <button class='btn btn-success'>Success</button>
            <button class='btn btn-danger'>Danger</button>
            <button class='btn btn-info'>Info</button>
            <button class='btn btn-warning'>Warning</button>
            <div>
			<br/>
			
			<div class="container"> 
			<div class="span3">
	<div class="well">
		<h2 class="muted">Silver</h2>
		<p><span class="label">POPULAR</span></p>
		<ul>
			<li>10 users</li>
			<li>Unlimited access</li>
			<li>3TB of space</li>
			<li>E-mail support</li>
		</ul>          
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
		<hr>
		<h3>$15.99 / month</h3>
		<hr>
		<p><a class="btn btn-large" href="#"><i class="icon-ok"></i> Select plan</a></p>
	</div>
</div>
<div class="span3">
	<div class="well">
		<h2 class="text-warning">Bronze</h2>
		<p><span class="label label-success">POPULAR</span></p>
		<ul>
			<li>20 users</li>
			<li>Unlimited access with no limits</li>
			<li>5TB of space</li>
		</ul>          
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
		<hr>
		<h3>$10.99 / month</h3>
		<hr>
		<p><a class="btn btn-success btn-large" href="#"><i class="icon-ok"></i> Select plan</a></p>
	</div>
</div>
<div class="span3">
	<div class="well">
		<h2 class="text-info">Economy</h2>
		<p><span class="label label-info">BUDGET</span></p>
		<ul>
			<li>10 users</li>
			<li>5TB of space</li>
		</ul>          
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
		<hr>
		<h3>$8.99 / month</h3>
		<hr>
      <p><a class="btn btn-large" href="#"><i class="icon-ok"></i> Select plan</a></p>
	</div>
</div>
</div>
                </body>
                </html>