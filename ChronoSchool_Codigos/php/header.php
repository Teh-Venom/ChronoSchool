<?php
	$stringBotaoHtml = "<div class='divBotaoLogin'>
							<a href='login.php'> 
								<input type='button' class='botaoLoginHeader' value='Login' />
							</a>
						</div>";
	session_start();
	if(isset($_SESSION)){
		$stringBotaoHtml = "<div class='divBotaoLogin'>
								<a href='login.php'> 
									<input type='button' class='botaoLoginHeader' value='Menu' />
								</a>
							</div>";
	}
?>
<div class='divLogoHeader'>
	<img class='logo' src='images/logo.png' title='ChronoSchool'/>			
		<div class='divBotaoLogin'>
			<?= $stringBotaoHtml?>
		</div>
</div>