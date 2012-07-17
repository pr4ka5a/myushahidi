<?php header("Cache-Control: public, max-age=86400"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title><?php echo $site_name; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $header_block; ?>
	<?php
	// Action::header_scripts - Additional Inline Scripts from Plugins
	Event::run('ushahidi_action.header_scripts');
	?>
	
</head>

<?php 
  // Add a class to the body tag according to the page URI
  
  // we're on the home page
  if (count($uri_segments) == 0) 
  {
    $body_class = "page-main";
  }
  // 1st tier pages
  elseif (count($uri_segments) == 1) 
  {
    $body_class = "page-".$uri_segments[0];
  }
  // 2nd tier pages... ie "/reports/submit"
  elseif (count($uri_segments) >= 2) 
  {
    $body_class = "page-".$uri_segments[0]."-".$uri_segments[1];
  };
    
  echo '<body id="page" class="'.$body_class.'" />';
  
?>
	<!-- wrapper -->
	<div class="rapidxwpr floatholder">

		<!-- header -->
		<div id="header">


			
			<!-- logo -->
			<?php if($banner == NULL){ ?>
			<div id="logo">
				<h1><a href="<?php echo url::site();?>"><?php echo $site_name; ?></a></h1>
				<span><?php echo $site_tagline; ?></span>
			</div>
			<?php }else{ ?>
			<a href="<?php echo url::site();?>"><img src="<?php echo $banner; ?>" alt="<?php echo $site_name; ?>" /></a>
			<?php } ?>
			<!-- / logo -->
					<!-- searchform -->
					<?php echo $search; ?>
					
				
					<!-- / searchform -->			
			<!-- submit incident -->
			<?php //echo $submit_btn; ?>
			<!-- / submit incident -->
				<!-- mainmenu -->
				<div id="mainmenu" class="clearingfix">
						<?php //if($site_message != '') { ?>
							
								<?php //echo $site_message; ?>
							
						<?php //} ?>
					<ul id="topmenu">
						<li><a href="http://pru13.info/ushahidi">UTAMA</a></li>	
						<li><a href="http://www.pru13.info/ushahidi/page/index/1">PENGUMUMAN</a></li>	
						<li><a href="http://www.pru13.info/ushahidi/page/index/2">CARA MEMBUAT ADUAN</a></li>	
						<li><a href="http://www.pru13.info/ushahidi/page/index/3">PUSAT SUMBER</a></li>	
						<li><a href="http://www.pru13.info/ushahidi/page/index/4">PAUTAN</a></li>
						<li><a href="http://www.pru13.info/ushahidi/contact">HUBUNGI KAMI</a></li>
						<li><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8ZJ8TC7JV8H4G">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</li>
					</ul>	
					<!--tombol aduan-->
			<div id="tomat">
				<a href="ushahidi/reports/"><?php echo Incident_Model::get_total_reports(TRUE)." Aduan"; ?></a>
			</div><!--tomat-->
			<!--tombol relawan-->
			<div id="rela">
				<a href="#">Daftar Pemantau</a>
			</div><!--rela-->
			<div id="lapor">
				<a href="#">Hantar Aduan</a>
			</div><!--lapor-->
						<div id="sitemsg">
						Sebarang aduan berkenaan pilihanraya boleh dibuat melalui salah satu cara berikut:
						</div>
					<ul>

						<?php //nav::main_tabs($this_page); ?>
						<li>Sms aduan <span>013-7711071</span></li>
						<li>Talian aduan <span>03-22824105</span></li>
						<li>E-mail aduan <span>jompantau@komas.org</span></li>
						<li style="width:171px;">Hantar tweet <span>#jom_pantau</span></li>
						<!--<li>Isi borang aduan <span><a href="http://www.pru13.info/ushahidi/reports/submit" class="iba">Klik sini</a></span></li>-->
						<!--<li>Kempen kad kuning <span><a href="http://www.pru13.info/ushahidi/page/index/5" class="kkk">Klik sini</a></span></li>-->
					</ul>
	

					
				</div>
				<!-- / mainmenu -->			
		</div>
		<!-- / header -->

		<!-- main body -->
		<div id="middle">
			<div class="background layoutleft">


