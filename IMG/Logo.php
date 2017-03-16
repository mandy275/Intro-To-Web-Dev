 <?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >
	<head>
      <meta name="viewport" content="width=device-width, maximum-scale=1.0" />   

    
          
    <link rel="apple-touch-icon" sizes="76x76" href="/templates/lb/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" href="/templates/lb/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/templates/lb/images/favicon-16x16.png" sizes="16x16" />
    <link rel="manifest" href="/templates/lb/images/manifest.json" />
    <link rel="mask-icon" href="/templates/lb/images/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="/templates/lb/images/favicon.ico" />
    <meta name="msapplication-config" content="/templates/lb/images/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />



		<link rel="stylesheet" href="/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="/templates/system/css/general.css" type="text/css" />

    <!-- css links -->
<link rel="stylesheet" href="/templates/lb/css/lb_global.css" type="text/css" media="screen, projection" />

<link rel="stylesheet" href="/templates/lb/css/jquery-ui-1.8.21.custom.2.css" type="text/css" media="screen, projection" />			
    
		<!-- // Javascript  -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js" type="text/javascript"></script>    

<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='/templates/lb/js/jquery-1.7.2.min.js' type='text/javascript'%3E%3C/script%3E"));
    };

    if (typeof $().validate == 'undefined') {
        document.write(unescape("%3Cscript src='/templates/lb/js/jquery.validate.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
</script>


		<script type="text/javascript" src="/templates/lb/js/jquery-ui-1.8.21.custom.min.js"></script>
    
        
  <base href="http://www.laurieberkner.com/index.php" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>The Laurie Berkner Band - Home</title>
  <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="/media/system/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="/modules/mod_rokajaxsearch/css/rokajaxsearch.css" type="text/css" />
  <link rel="stylesheet" href="/modules/mod_rokajaxsearch/themes/blue/rokajaxsearch-theme.css" type="text/css" />
  <script src="/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/media/system/js/core.js" type="text/javascript"></script>
  <script src="/media/system/js/caption.js" type="text/javascript"></script>
  <script src="/media/system/js/modal.js" type="text/javascript"></script>
  <script src="/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script src="/modules/mod_rokajaxsearch/js/rokajaxsearch.js" type="text/javascript"></script>
  <script type="text/javascript">
window.addEvent('load', function() {
				new JCaption('img.caption');
			});
		window.addEvent('domready', function() {

			SqueezeBox.initialize({});
			SqueezeBox.assign($$('a.modal'), {
				parse: 'rel'
			});
		});window.addEvent((window.webkit) ? 'load' : 'domready', function() {
				window.rokajaxsearch = new RokAjaxSearch({
					'results': 'Results',
					'close': '',
					'websearch': 0,
					'blogsearch': 0,
					'imagesearch': 0,
					'videosearch': 0,
					'imagesize': 'MEDIUM',
					'safesearch': 'STRICT',
					'search': 'Search...',
					'readmore': 'Read more...',
					'noresults': 'No results',
					'advsearch': 'Advanced search',
					'page': 'Page',
					'page_of': 'of',
					'searchlink': 'http://www.laurieberkner.com/index.php?option=com_search&amp;view=search&amp;tmpl=component',
					'advsearchlink': 'http://www.laurieberkner.com/index.php?option=com_search&amp;view=search',
					'uribase': 'http://www.laurieberkner.com/',
					'limit': '50',
					'perpage': '5',
					'ordering': 'newest',
					'phrase': 'exact',
					'hidedivs': '',
					'includelink': 1,
					'viewall': 'View all results',
					'estimated': 'estimated',
					'showestimated': 1,
					'showpagination': 1,
					'showcategory': 1,
					'showreadmore': 1,
					'showdescription': 1
				});
			});
  </script>

    
	
		

		<script type="text/javascript">

			$(function($){

				// accordion
				$("#leftnav .moduletable_menu div").not("div.bottom").accordion({ 
					active: false,
					autoHeight: false,
					clearStyle: true,
					collapsible: true,
					disabled: false,
//					header: "h3",
					navigation: true,
					icons: { "header": "ui-icon-plus-lb", "headerSelected": "ui-icon-minus-lb" }
				});	
			
				// make links clickable while toggling accordion collapse/expand behaviour
				$("#leftnav .moduletable_menu h3 a").on("click",function(){
					window.location.href = $(this).attr("href"); // loads a new page
				});
				
				// remove toggle icons from items without submenus and make the unclickable 
				$("#leftnav .moduletable_menu div:empty").prev("h3").unbind("click").children(".ui-icon").hide();
				
				// add corners for IE 7, 8
				if ($.browser.msie && $.browser.version.substr(0,1)<9){
					$("#leftnav h3, ul.topnav li").prepend("<div class='top_left'></div>").prepend("<div class='top_right'></div>").prepend("<div class='bottom_left'></div>").prepend("<div class='bottom_right'></div>");			
				}				
    
        
        
				// assign selected page       
				var selected_page = $("#leftnav .item-101");
        var selected_id = "#leftnav_101"
        $(selected_page).attr("id", selected_id).addClass("selected");
//				$(selected_page).addClass("selected");

				// this has a "bounce" effect
				$("#footer #media a, #footer a.flower").hover(function(){
					$(this).animate({paddingTop:'+=10px'}).animate({paddingTop:'-=10px'});
				});
					
				// feedback and mailing list tabs      

//old:
//				$("a#tab_feedback_tablet, a#tab_mailing_list_tablet").bind("click", function(){

/*
				$("a#tab_feedback, a#tab_feedback_tablet, a#tab_mailing_list, a#tab_mailing_list_tablet").bind("click", function(){        
					var feedback = $("#feedback").html() 
					$("body").append("<div id='feedback_overlay'>"+feedback+"</div>");
					$("#feedback_overlay").html(feedback).jOverlay();
				});
*/       
        
				// 2012.08.01
/*
				$("#feedback .tabinnerfeedback").bind("mouseenter", function(){
					$("#feedback").unbind("click");
					$("#feedback .tabinnerfeedback").on("mouseleave", function(){
						$("#wrapouter, #footer, #feedback").on("click", function(){
							$("#feedback .tabinnerfeedback").slideUp();
						});				
					});
				});
				$("a#tab_feedback, a#tab_mailing_list").bind("click", function(){
					$("#feedback .tabinnerfeedback").slideDown();
				});
*/        
 
    
        
      
				// display top and left nav
				$(window).load(function() {
					$("#leftnav, .topnav").fadeIn();		
//					$(selected_page).click().parents("div").prev("h3").click();
					$(selected_id).click().parents("div").prev("h3").click();
				});
        
       
			});
    	</script>

    <link type="text/css" rel="stylesheet" href="/templates/lb/css/lb_global_frontpage.css" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35232530-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>    
    
	<script type="text/javascript" src="http://use.typekit.com/rqm2vzj.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>		

  
   
</head> 
 <body> 
    <div id="wrapouter">
      <div id="header">
        <div id="headerinner"> <!--sample header and Joomla generated search code below -->
          <a id="logo_01" href="/index.php"><img src="/templates/lb/images/blank.gif" /></a>
            <form id="search_form">		<div class="moduletable">
					<form name="rokajaxsearch" id="rokajaxsearch" class="blue" action="http://www.laurieberkner.com/" method="get">
<div class="rokajaxsearch ">
	<div class="roksearch-wrapper">
		<input id="roksearch_search_str" name="searchword" type="text" class="inputbox" maxlength="20" value="Search..." />
	</div>
	<input type="hidden" name="searchphrase" value="exact"/>
	<input type="hidden" name="limit" value="20" />
	<input type="hidden" name="ordering" value="newest" />
	<input type="hidden" name="view" value="search" />
	<input type="hidden" name="option" value="com_search" />

	
	<div id="roksearch_results"></div>
</div>
<div id="rokajaxsearch_tmp" style="visibility:hidden;display:none;"></div>
</form>		</div>
	
				</form>
            <a id="logo_02"><img src="/templates/lb/images/blank.gif" /></a>
        </div><!-- end #headerinner -->

				<div class="moduletable_menu">
					
<ul class="topnav">
<li class="item-103 parent"><a href="/about.html" >About</a></li><li class="item-111 parent"><a href="/concerts/concert-calendar.html" >Concerts</a></li><li class="item-125 parent"><a href="/music.html" >Music</a></li><li class="item-114"><a href="/photos.html" >Photos</a></li><li class="item-115 parent"><a href="/videos.html" >Videos</a></li><li class="item-118 parent"><a href="/family.html" >Family</a></li><li class="item-116 parent"><a href="/fun-stuff.html" >fun stuff</a></li><li class="item-124"><a href="/blog.html" title="The Laurie Berkner Band Blog" >Blog</a></li><li class="item-126"><a href="http://laurieberkner.merchnow.com" title="The Shop" >Shop</a></li></ul>
		</div>
	
		<!-- end ul #topnav, html template override and modules override-->		
	 </div> <!--end header -->

	  <div id="breadcrumbs">
					<div class="moduletable">
					
<div class="breadcrumbs">
</div>
		</div>
		
	  </div>

	  <div id="wrapinner">	
		<div id="wrapinnerinner">   
			<div id="main"> 
		  
			  <div id="spotlights">
				<div class="inner">
				  <div></div>
				  <div></div>
				</div><!-- end .inner -->
			  </div><!-- end #spotlights -->	
			  
			  <div id="mainbox">
                                <div id="content_frontpageimage">
                       
				  <div id="content">

						<div class="item-page">

<!--new markup here - see mod_concerts_listing/board.php -->


        
      <div id="leftnavfront_wrapper">
        <div class="leftnavfront_top"></div> 
        <div id="whatsnew" > 
          <div id="whatsnew_top" title="What's New">
            <a href="javascript:void(0);"></a>
          </div><!-- end #concerts_top -->   
          <div id="whatsnew_list">
          
                          
<span class="whn">

<p href="http://bit.ly/Sv77O8"><div class="whn_section first"><h4><a href="/videos/videos-by-album/superhero.html"><strong>WATCH: Superhero Music Videos</strong></a></h4><div><a href="/videos/videos-by-album/superhero.html"><img src="/images/contentimages/home_whatsnew_superherovideos150.jpg" alt="home whatsnew superherovideos150" width="150" height="150" /></a></div></div><h4><a href="/videos/videos-by-title/i-ve-got-so-much-to-give.html"><strong><strong>WATCH: New Music Video</strong></strong></a></h4><div>I've Got So Much To Give<a href="/videos/videos-by-title/i-ve-got-so-much-to-give.html"><img alt="home whatsnew new video igsmtg150" src="/images/contentimages/home_whatsnew_new_video_igsmtg150.jpg" width="150" height="150" /></a></div><h4><strong><a href="http://www.themusicinme.com/">The Music in Me</a>:</strong></h4><div>Music classes for kids ages 1-4 and their caregivers, featuring Laurie Berkner's music and philosophy!<a href="http://www.themusicinme.com/"><img alt="home whatsnew tmim diana" src="/images/contentimages/home_whatsnew_tmim_diana.jpg" width="150" height="107" /></a></div>
</span>
             

          </div>
          <div id="whatsnew_bottom">
          </div><!-- end #whatsnew_bottom -->									
          <div class="leftnavfront_below_whatsnew">
            <div id="leftnavfront_watch_top" title="Watch">
              <a href="javascript:void(0);"></a>
            </div><!-- end #concerts_top -->             
          
            <div id="leftnavfront_watch_middle">          


                            

<a class="modal" id="fp_video_shot" rel="{size: {x: 700, y: 500}, handler:'iframe'}"  href="http://www.youtube.com/embed/videoseries?list=PL83783B4A7F9C9CDB&amp;autoplay=1" ></a>
   
                

            </div> <!-- end middle -->
            <div id="leftnavfront_watch_bottom"></div><!-- end #leftnavfront_watch_bottom -->									

          </div><!-- end .leftnavfront_below_whatsnew -->
        </div><!-- end #whatsnew -->
      </div> <!-- end #leftnavfront_wrapper -->		
      
      
      <div id="banner_wrapper">
        <div id="banner_wrapper_chain">
          <div class="banner_top"></div>
         </div> <!-- banner_wrapper_chain -->
        <div id="banner" >       
      
                          <div class="bannergroup">

	<div class="banneritem">
																																																															<a
							href="/component/banners/click/1.html" target="_blank"
							title="Laurie Berkner News">
							<img
								src="http://www.laurieberkner.com/images/home_banner_we are the dinosaurs book preorder.jpg"
								alt="Preorder the NEW "We Are The Dinosaurs" picture book from Simon and Schuster now!"
								width ="500"															/>
						</a>
																<div class="clr"></div>
	</div>

</div>
         
      
          <div id="banner_bottom">
          </div><!-- end #banner_bottom -->					
        </div> <!-- banner -->
      </div> <!-- banner_wrapper -->
      
      
    
    
                          									<div id="rightnav_wrapper">
                    <div class="rightnav_top"></div><!-- end .rightnav_top -->  
                    

                    
                                            
                    
										<div id="concerts"> 
											<div id="concerts_top"  title="Concerts">
												<a href="javascript:void(0);"></a>
											</div><!-- end #concerts_top -->
<div id="concerts_list">
                          <span class="clb"><span class="clb_date"><a href="/concerts/concert-calendar.html#concerts_188">Sat 3.4.17, 11:00AM</a></span><span class="clb_title">The Laurie Berkner Band LIVE! The Greatest Hits Tour</span><span class="clb_city">Greensburg, PA</span><span class="clb_date"><a href="/concerts/concert-calendar.html#concerts_189">Sat 4.8.17, 11:00AM</a></span><span class="clb_title">Laurie Berkner LIVE! The Greatest Hits Solo Tour</span><span class="clb_city">Peekskill, NY</span><span class="clb_date"><a href="/concerts/concert-calendar.html#concerts_187">Sat 4.29.17, 3:00PM</a></span><span class="clb_title">The Laurie Berkner Band LIVE! The Greatest Hits Tour</span><span class="clb_city">Princeton, NJ</span><span class="clb_date"><a href="/concerts/concert-calendar.html#concerts_190">Fri 7.28.17, 1:30PM</a></span><span class="clb_title">Laurie Berkner LIVE! The Greatest Hits Solo Tour</span><span class="clb_city">Whitehouse Station, NJ</span></span>
                          </div> <!-- end concerts list -->                                           
                      
											<div id="concerts_bottom">
<a class="moar" href="/concerts/concert-calendar.html" title="Full Concert Listing"></a>                      
          </div><!-- end #concerts_bottom -->									
          <div class="rightnav_below_concerts">
                      
             <!--SoundCloud-->
            <div id="rightnavfront_listen_top" title="Listen">
              <a href="javascript:void(0);"></a>
            </div><!-- end #concerts_top -->             
          
            <div id="rightnavfront_listen_middle">                                



    <iframe width="100%" height="166" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/238183270&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>


                                      
            </div> <!-- end middle -->
            <div id="rightnavfront_listen_bottom">
            </div><!-- end #rightnavfront_listen_bottom -->					                      
            <!--end SoundCloud -->
            
            
          </div><!-- end rightnav below concerts-->									
          
           
          
          <div class="rightnav_below_concerts">
                      
             <!--Mission-->
            <div id="rightnavfront_mission_top" title="Listen">
              <a href="javascript:void(0);"></a>
            </div><!-- end #concerts_top -->             
          
            <div id="rightnavfront_mission_middle">



    To use our creativity to make things we are proud of that help people connect more to themselves, their feelings, and others!

                                      
            </div> <!-- end middle -->
            <div id="rightnavfront_mission_bottom">
            </div><!-- end #rightnavfront_listen_bottom -->					                      
            <!--end Mission -->            
            
            
          </div><!-- end .rightnav_below_concerts -->
          
        </div><!-- end #concerts -->
      </div> <!-- end #rightnav_wrapper -->		
                  
   






                             







<p>&nbsp; &nbsp;</p> 
	
</div>

            
				   </div> <!-- end content -->
				
 
<!-- leftnavtitle -->  
        
				<div class="clear"></div><!-- 2012.07.17 -->
			
			  </div><!-- end #mainbox -->
        
                                </div> <!-- end content_frontpageimage -->
                                   
        
			</div> <!-- end main -->
        </div><!-- end #wrapinnerinner -->
      </div><!-- end #wrapinner -->
    </div><!-- end #wrapouter -->
	
	<!--continue on to footer -->
	
	
   <div id="footer">
    <div id="fake_bottom">
    </div><!-- end #fake_bottom --> 
    
    
    <div id="theband"></div>
    
    <div id="more">
    </div><!-- end #more --> 
    	<div id="media">
      	<a id="media_fb" href="http://www.facebook.com/LaurieBerknerBand?ref=ts" title="Facebook" target="_blank"><span></span></a>
      	<a id="media_itunes" href="http://itunes.apple.com/us/artist/the-laurie-berkner-band/id285792395" title="iTunes"target="_blank"><span></span></a>
      	<a id="media_instagram" href="https://www.instagram.com/laurieberknerband" title="Instagram" target="_blank"><span></span></a>
      	<a id="media_sirius" href="http://www.siriusxm.com/kidsplacelive" title="Sirius Radio" target="_blank"><span></span></a>
      	<a id="media_pinterest" href="https://www.pinterest.com/laurieberkner" title="Pinterest" target="_blank"><span></span></a>
      	<a id="media_twitter" href="http://twitter.com/#!/LaurieBerkner" title="Twitter" target="_blank"><span></span></a>
      	<a id="media_youtube" href="http://www.youtube.com/user/TheLaurieBerknerBand" title="Youtube" target="_blank"><span></span></a>
        <!-- right hand side -->
        <a id="media_player" href="javascript:void(0);"></a>
      </div>
			<div id="tree">

          		<div class="moduletable">
					



    <div class="section"><h4><a href="http://www.themusicinme.com">"The Music in Me" &nbsp; Program</a></h4>
<div>Laurie's new music program for children 0-4! Teachers trained by Laurie Berkner in her "Whole Child" approach.</div></div>
<div class="section"><h4><a href="https://itunes.apple.com/us/app/laurie-berkner-band/id406261258?mt=8">Our FREE Mobile App!</a></h4>
<div>Bring the LBB wherever you go - FREE! Songs, videos, photos, tix, &amp; more. Search for "Laurie Berkner" in your device's app store Check it out <a href="https://itunes.apple.com/us/app/laurie-berkner-band/id406261258?mt=8">here</a>.</div></div>
<div class="section"><h4><a href="https://www.youtube.com/user/TheLaurieBerknerBand">YouTube Channel</a></h4>
<div>Brand new music videos released the first Friday of every month!</div></div>

		</div>
	      
      
      </div><!-- end #tree -->
      
      <!-- flowers -->
      <a class="flower" id="flower1" href="/"></a>
      <a class="flower" id="bee" href="/"></a>
      <a class="flower" id="flower2" href="/"></a>
      <a class="flower" id="flower3" href="/"></a>
      <a class="flower" id="flower4" href="/"></a>
      <a class="flower" id="flower5" href="/"></a>
      <a class="flower" id="flower6" href="/"></a>
      <!-- end flowers -->
      
      <div class="menu">
      
                
      
        <div id="copyright">
        	<div>&copy; 2017 Two Tomatoes Records, LLC</div>
          <div class="wtf">Art Direction by Corinne Barlow</div>
          <div>Website by Step 2 Ideas</div>
           <iframe width="0" height="0" name="Trade Desk Tracking - LBB retargeting pixel" frameborder="0" scrolling="no" src="http://insight.adsrvr.org/tags/ukjekyb/mx8rm4j/iframe"></iframe>
				</div><!-- end #copyright -->
			</div><!-- end .moduletable-menu -->
		</div><!-- end #footer -->

	<!-- tabs -->
	


    <a id="tab_feedback" class="modal" href="http://www.laurieberkner.com/index.php?option=com_s2imailcon&view=form&layout=mailchimp&tpl=mailchimp&format=raw" rel="{handler:'iframe', size: {x: 350, y: 550}}" ></a>
    <a id="tab_feedback_tablet" class="modal" href="http://www.laurieberkner.com/index.php?option=com_s2imailcon&view=form&layout=mailchimp&tpl=mailchimp&format=raw" rel="{handler:'iframe', size: {x: 350, y: 550}}" ></a>
    <a id="tab_mailing_list" class="modal" href="http://www.laurieberkner.com/index.php?option=com_s2imailcon&view=form&layout=mailchimp&tpl=mailchimp&format=raw" rel="{handler:'iframe', size: {x: 350, y: 550}}" ></a>
    <a id="tab_mailing_list_tablet" class="modal" href="http://www.laurieberkner.com/index.php?option=com_s2imailcon&view=form&layout=mailchimp&tpl=mailchimp&format=raw" rel="{handler:'iframe', size: {x: 350, y: 550}}" ></a>  
	
	<!-- form -->	
      <div class="tab" id="feedback">
        <div class="tabinnerfeedback">
             <!-- <h2></h2> -->

        </div><!-- end .tabinnerfeedback -->
      </div><!-- end #feedback -->
		<!-- end form -->


		<div id="hidden_form">
    </div><!-- end #hidden_form -->
    
    
   
    
  </body>
</html>