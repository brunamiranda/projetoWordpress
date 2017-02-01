<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/assets/css/indexcss.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		
	</head>

	<body>
		<header id="header">
			<nav class="navbar">
            
            <div class="logo">
                <h3>Binary</h3>
            </div>
            
            <div class="botao">

            	<input type="checkbox" id="navicon">
            	<label class="botaoMenu" for="navicon"></label>
                
                <div class="menu">
                    <ol class="opcoes">
                        <a href="./index.html"><li class="linha">Home</li></a>
                        <a href="./news.html"><li class="linha2">News</li></a>
                        <a href="./example.html"><li>Example</li></a>
                    </ol>
                </div>
                
            </div>
            
        </nav>        		
			<div id="head">
				<div class=" titulo">
					<h1>This is Binary, a free and fully responsive
					website template by TEMPLATED</h1>
					<a href="">Continue</a>
				</div>
				
			</div>
		</header>