<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>BELAJAR CRUD</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
				background: url('../assets/img/wall.png') repeat;
			}
			.atas {
				padding-top: 9px;
			}
			label.error {
				color: red;
			}
		</style>
		
		<?php
        $theme = $_GET['theme'];
        switch ($theme) {
            case 'amelia':
                echo "<link href='../assets/css/bootstrap_amelia.css' rel='stylesheet'	/>";
                break;
            case 'cerulian':
                echo "<link href='../assets/css/bootstrap_cerulian.css' rel='stylesheet'	/>";
                break;
            case 'cosmo':
                echo "<link href='../assets/css/bootstrap_cosmo.css' rel='stylesheet'	/>";
                break;
            case 'cyborg':
                echo "<link href='../assets/css/bootstrap_cyborg.css' rel='stylesheet'	/>";
                break;
            case 'journal':
                echo "<link href='../assets/css/bootstrap_journal.css' rel='stylesheet'	/>";
                break;
            case 'orange':
                echo "<link href='../assets/css/bootstrap_orange.css' rel='stylesheet'	/>";
                break;
            case 'readable':
                echo "<link href='../assets/css/bootstrap_readable.css' rel='stylesheet'	/>";
                break;
            case 'simplex':
                echo "<link href='../assets/css/bootstrap_simplex.css' rel='stylesheet'	/>";
                break;
            case 'slate':
                echo "<link href='../assets/css/bootstrap_slate.css' rel='stylesheet'	/>";
                break;
            case 'spacelab':
                echo "<link href='../assets/css/bootstrap_spacelab.css' rel='stylesheet'	/>";
                break;
            case 'spruce':
                echo "<link href='../assets/css/bootstrap_spruce.css' rel='stylesheet'	/>";
                break;
            case 'superhero':
                echo "<link href='../assets/css/bootstrap_superhero.css' rel='stylesheet'	/>";
                break;
            default:
                echo "<link href='../assets/css/bootstrap.css' rel='stylesheet'	/>";
        }
        ?>

		<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="../assets/css/docs.css" rel="stylesheet">

		<script type="text/javascript" src="../assets/js/jquery.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

		<!-- <link href="../assets/img/favicon.png" rel="shortcut icon" /> -->

		<!-- MENAMBAHKAN NIVO SLIDER -->
		<link rel="stylesheet" href="../assets/css/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../assets/css/nivo-slider.css" type="text/css" media="screen" />
		<script src="../assets/js/nivo.slider.js" type="text/javascript"></script>
		
		<script type="text/javascript" src="../assets/js/jquery.validate.js"></script>
		<script type="text/javascript" src="../assets/js/messages_id.js"></script>
		
		
		<!-- AKHIR NIVO SLIDER -->
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
			
          	<div class="nav-collapse collapse">
              <div class="pull-right">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Theme<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href='http://officialitoru.id1945.com/user/user_form_view.php'><i class="icon-cog"></i> Basic</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=amelia'><i class="icon-cog"></i> Amelia</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=cerulian'><i class="icon-cog"></i> Cerulian</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=cosmo'><i class="icon-cog"></i> Cosmo</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=cyborg'><i class="icon-cog"></i> Cyborg</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=journal'><i class="icon-cog"></i> Journal</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=orange'><i class="icon-cog"></i> Orange</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=readable'><i class="icon-cog"></i> Readable</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=simplex'><i class="icon-cog"></i> Simplex</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=slate'><i class="icon-cog"></i> Slate</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=spacelab'><i class="icon-cog"></i> Spacelab</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=spruce'><i class="icon-cog"></i> Spruce</a></li>
                    <li><a href='http://officialitoru.id1945.com/user/user_form_view.php?theme=superhero'><i class="icon-cog"></i> Superhero</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</div>