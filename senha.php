<!doctype html>
<html>
<head>
<title>Recuperar Senha :: SIGEC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<!--header-->
		<div class="header" id="home">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
					<h1><a class="navbar-brand" href="index.html">SIGEC<br /><span>AN HELP HAND FOR STUDENTS!</span></a></h1>
					</div>
                                        <br>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                                                            <li><a href="index.html"><span data-hover="Home">HOME</span></a></li>
                                                            <li><a href="about.html"><span data-hover="About">ABOUT SIGEC</span></a></li>
                                                            <li><a href="contact.html"><span data-hover="Contact">CONTACTOS</span></a></li>
							</ul>
							<div class="clearfix"> </div>
						</div><!-- /.navbar-collapse -->
				</div>
			</nav>
<!--/script-->
		   <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container">
	<h2>RECUPERAR SENHA</h2>
	</div>
</div>
<!--header-->

    <?php
    
    error_reporting(E_ALL ^ E_DEPRECATED);
        if( !empty($_POST) ){
            // processar o pedido
            mysql_connect('localhost', 'root', '');  // ligar à base de dados
            mysql_select_db('test');  // escolher a base de dados pretendida
 
            $user = mysql_real_escape_string($_POST['email']);
            $q = mysql_query("SELECT * FROM utilizadores WHERE email = '$user'");
 
                if( mysql_num_rows($q) == 1 ){
                    // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail
 
                    // gerar a chave
                    // exemplo adaptado de http://snipplr.com/view/20236/
                    $chave = sha1(uniqid( mt_rand(), true));
 
                    // guardar este par de valores na tabela para confirmar mais tarde
                    $conf = mysql_query("INSERT INTO recuperacao VALUES ('$user', '$chave')");
                        echo "INSERT INTO recuperacao VALUES ('$user', '$chave')";
 
                    if( mysql_affected_rows() == 1 ){
 
                        $link = "http://example.net/recuperar.php?utilizador=$user&confirmacao=$chave";
 
                            if( mail($user, 'Recuperação de password', 'Olá '.$user.', visite este link '.$link) ){
                                echo '<p>Foi enviado um e-mail para o seu endereço, onde poderá encontrar um link único para alterar a sua password</p>';
 
                            } else {
                                echo '<p>Houve um erro ao enviar o email (o servidor suporta a função mail?)</p>';
 
                            }
 
                            // Apenas para testar o link, no caso do e-mail falhar
                            echo '<p>Link: '.$link.' (apresentado apenas para testes; nunca expor a público!)</p>';
 
                        } else {
                            echo '<p>Não foi possível gerar o endereço único</p>';
 
                        }
                    } else {
                        echo '<p>Esse utilizador não existe</p>';
                }
        } else {
                    
            // mostrar formulário de recuperação
             ?>
        
                <form method="post">
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" />
                    <input type="submit" value="Recuperar" />
                </form>
            <?php
        }
    ?>


<!--footer-->
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 footer-right">
                            <h3>NAVIGATION</h3>
                            <div>
				<ul>
					<li><h2><a href="index.html">Home</a></h2></li>
					<li><h2><a href="contact.html">Contact</a></h2></li>
				</ul>
                            </div>
                        </div>
			<div class="col-md-4 footer-middle">
				<h3>Endereço</h3>
				<div class="address">
					<p>Talatona - Angola
						<span>Av. Luanda Sul, Rua Lat Via S10</span>
					</p>
				</div>
				<div class="phone">
					<p>+244935262640</p>
				</div>
			</div>
			<div class="col-md-4 footer-right">
				<h3>System Info</h3><br>
				<p>Sistema de gestão de Conhecimentos,
                                    <span>An Help Hand For Students !</span>
                                </p>
			</div>
			<div class="clearfix"> </div>	  
		</div>
		<!-- //container -->
	</div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left">
			<p>© 2015 Sistema de gestão de Conhecimentos. All rights reserved | Design by <a href="http://www.isptec.co.ao/">Engº Informaticos</a></p>
			</div>
			<div class="copyright-right">
				<ul>
					<li><a href="http://www.twitter.com" class="twitter"> </a></li>
					<li><a href="http://www.facebook.com" class="twitter facebook"> </a></li>
					<li><a href="http://plus.google.com/+Chrome" class="twitter chrome"> </a></li>
					<li><a href="http://www.pinterest.com" class="twitter pinterest"> </a></li>
					<li><a href="http://www.linkedin.com" class="twitter linkedin"> </a></li>
					<li><a href="http://www.dribble.com" class="twitter dribbble"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
		</div>
		<!-- //container -->
		<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
	</div>
<!--/copy-rights-->
	</body>
</html>


