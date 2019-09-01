<!DOCTYPE html>
<!--
	Source for first background: http://quanno3.deviantart.com/art/Just-outside-of-Ponyville-359651726
	Source for second background: http://quasdar.deviantart.com/art/Equestria-at-Night-263381180
-->
<html>
<head>

    <script type="text/javascript" src="https://www.blackoutcongress.org/detect.js"></script>
    <link rel="stylesheet" href="style/mane.css">
	<link rel="icon" href="img/favicon.png"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
	<title>Black Apple Research Facility</title>
	<script>
	$(document).ready(function (){
		$(".navIcon").click(function (){
			$('html, body').animate({scrollTop: 0}, 600);
		});
		$(".apraButton").click(function (){
			$('html, body').animate({scrollTop: 0}, 600);
		});
		$(".mfrButton").click(function (){
			$('html, body').animate({scrollTop: $("#mfr").offset().top-50}, 600);
		});
		$(".friendsButton").click(function (){
			$('html, body').animate({scrollTop: $("#friends").offset().top-50}, 600);
		});
		$(".projectsButton").click(function (){
			$('html, body').animate({scrollTop: $("#projects").offset().top-50}, 600);
		});
		$(".aboutButton").click(function (){
			$('html, body').animate({scrollTop: $("#about").offset().top-50}, 600);
		});
		$('.navScrollerInner').css('width', 250 + (750*($(window).height()/$("body").height()))+ "px"  );
	});
	
	$(function(){	

			var $window = $(window);
			var scrollTime = .8;
			var scrollDistance = 300;

			$window.on("mousewheel DOMMouseScroll", function(event){

			event.preventDefault();	

			var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
			var scrollTop = $window.scrollTop();
			var finalScroll = scrollTop - parseInt(delta*scrollDistance);

			TweenMax.to($window, scrollTime, {
				scrollTo : { y: finalScroll, autoKill:true },
					ease: Power1.easeOut,
					overwrite: 5							
				});

			});
		});
		
		$(function() {
			$(window).scroll(function(e){
				var scrolled = $(document).scrollTop();
				var height = $("body").height();
				var size = $(window).height();
				var p = 750*(scrolled/height);
				var q = 750*(size/height);
				$('.topDisplayBackground1').css('top',-(scrolled*.1)+50 + "px");
				$('.mfrDisplayBackground1').css('top',-(scrolled*.08)+1350 + "px");
			});
		})
	</script>
</head>
<body>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="home"></div>
	<div class="navbar">
		<div class="navInner">
			<span class="navIcon">
				<span class="navIconSpacer"></span>
				<span class="navIconIcon">
					<img src="img/favicon.png"/>
				</span>
				<span class="navIconSpacer"></span>
				<span class="navIconTitle">Black Apple Research Facility</span>
			</span>
			<span class="navButton apraButton">All Pony Radio</span>
			<span class="navButton mfrButton">Mane Frame</span>
			<span class="navButton friendsButton">Friends</span>
			<span class="navButton projectsButton">Projects</span>
			<span class="navButton aboutButton">About</span>
			<a href="./updates/">
				<span class="navButton BetaButton">Beta Tester</span>
			</a>
		</div>
	</div>
	
	<div class="container">
		<div>
			<div class="topDisplay">
				<div class="topDisplayBackground1">
				</div>
				<div class="topDisplayBackground2">
				</div>
				<div class="topDisplayTextButton">
					<span class="topDisplayTitle">All Pony Radio</span>
					<br/>
					<br/>
					<span class="topDisplayCaption">All Pony Radio app gives you access to all of Ponyville Lives' radio stations, playing some of the best brony & My Little Pony Friendship is Magic music, and pumped straight to your ears!</span>
					<br/>
					<br/>
					<br/>
					<a href="https://play.google.com/store/apps/details?id=appinventor.ai_ubuntu_achromic.AllPonyRadio">
						<img alt="Get it on Google Play" src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" />
					</a>
				</div>
			</div>
		</div>
		
		<div id="apra">
			<div class="content apra apra1">
				<div class="apraColumn1 apraColumn">
					<a href="http://www.ponyvillelive.com/">
						<img src="img/ponyvillelive.png"/>
					</a>
					<br/>
					<br/>
					All Pony Radio is a third-party Android app for accessing the Ponyville Live! radio streams.
					<br/>
					<br/>
					It gives you access to all of Ponyville Live!'s radio stations, playing some of the best brony music, and pumped straight to your ears!
				</div>
				<div class="divider"></div>
				<div class="apraColumn2 apraColumn">
					<span class="listTitle">App Features</span>
					<br/>
					<br/>
					The app features a clean layout designed for most Android phone screen sizes.
					<br/>
					<br/>
					It also features a large selection of stations with a large logo displayed for the selected station.
					<br/>
					<br/>
					The app is desiged to load fast so you can get to your music faster!
				</div >
				<div class="divider"></div>
				<div class="apraColumn3 apraColumn">
					<span class="listTitle">Stations Include:</span>
					<ul>
						<li>Celestia Radio</li>
						<li>Fillydelphia Radio</li>
						<li>PonyvilleFM</li>
						<li>Alicorn Radio</li>
						<li>Sonic Radioboom</li>
						<li>Bronydom Radio</li>
						<li>Everypony Radio</li>
						<li>Wonderbolt Radio</li>
						<li>Best Pony Radio</li>
						<li>...And many others!</li>
					</ul>
				</div>
			</div>
			<div class="content apra apra2">
				<div class="layout">
					<label for="radio1"><img class="layoutImage layout1" src="img/button_layout/menu.png"/></label>
					<input type="radio" name="radio" id="radio1" class="radio">
					<div class="layoutInfo">
						This is the menu button! From here, you can access the main menu, settings, a list of all stations you can listen to, 
						among many other options!
					</div>
					
					<label for="radio2"><img class="layoutImage layout2" src="img/button_layout/play.png"/></label>
					<input type="radio" name="radio" id="radio2" class="radio">
					<div class="layoutInfo">
						One of our simplest buttons, just press here to play the station in question! It'll change to a pause button if music is 
						already playing, so you can stop listening. Why would you want to, though?
					</div>
					
					<label for="radio3"><img class="layoutImage layout3" src="img/button_layout/request.png"/></label>
					<input type="radio" name="radio" id="radio3" class="radio">
					<div class="layoutInfo">
						Our request button! It works with most of our radio stations. Simply press it and you can request a song on the station 
						you are listening to! Again, not all stations have request functionality.
					</div>
					
					<label for="radio4"><img class="layoutImage layout4" src="img/button_layout/info.png"/></label>
					<input type="radio" name="radio" id="radio4" class="radio">
					<div class="layoutInfo">
						Tap this icon to gather all information about the station you're listening to at that very moment! Included is the song title, 
						artist, previous songs and artists, the genre, station name, and number of listeners!
					</div>
					
					<label for="radio5"><img class="layoutImage layout5" src="img/button_layout/share.png"/></label>
					<input type="radio" name="radio" id="radio5" class="radio">
					<div class="layoutInfo">
						Our newly added share button quickly posts to your favorite social media sites the artist, track, and station you're listening to!
					</div>
					
					<div class="layoutInfoLast">
						Click any of the buttons above for more info!
					</div>
				</div>
			</div>
			<div class="content apra apra3">
				<div class="apraNotes">
					Additional Information
				</div>
				<div class="apraNotesColumns">
					<div class="apraNotesColumn1">
						<label for="notes1">EULA</label>
						<input type="radio" name="notes" id="notes1" class="radio" checked>
						<div class="notesInfo">
							End-User License Agreement for All Pony Radio
							<br/><br/>
							This End-User License Agreement (EULA) is a legal agreement between you (either an individual or a single entity) and the mentioned author (Black Apple Research Facility) of this Software for the software product identified above, which includes computer software and may include associated media, printed materials, and "online" or electronic documentation ("SOFTWARE PRODUCT").
							<br/><br/>

							By installing, copying, or otherwise using the SOFTWARE PRODUCT, you agree to be bounded by the terms of this EULA.
							<br/>
							If you do not agree to the terms of this EULA, do not install or use the SOFTWARE PRODUCT.
							<br/><br/>

							SOFTWARE PRODUCT LICENSE
							<br/>
							a) All Pony Radio Free Version is being distributed as Freeware for personal, commercial use, non-profit organization, educational purpose. It may NOT be included with CD-ROM/DVD-ROM distributions. You are NOT allowed to make a charge for distributing this Software (either for profit or merely to recover your media and distribution costs) whether as a stand-alone product, or as part of a compilation or anthology, nor to use it for supporting your business or customers. It may NOT be distributed freely on any website or through any other distribution mechanism, as long as no part of it is changed in any way.
							<br/><br/>

							1. GRANT OF LICENSE. This EULA grants you the following rights: Installation and Use. You may NOT install and use an unlimited number of copies of the SOFTWARE PRODUCT.
							<br/><br/>

							Reproduction and Distribution. You may NOT reproduce and distribute an unlimited number of copies of the SOFTWARE PRODUCT.
							<br/><br/>

							Copies of the SOFTWARE PRODUCT may NOT be distributed as a standalone product or included with your own product.
							<br/><br/>

							The SOFTWARE PRODUCT may be included in any free or non-profit packages or products.
							<br/><br/>

							2. DESCRIPTION OF OTHER RIGHTS AND LIMITATIONS.
							<br/>
							Limitations on Reverse Engineering, Decompilation, Disassembly and change (add,delete or modify) the resources in the compiled the assembly. You may not reverse engineer, decompile, or disassemble the SOFTWARE PRODUCT, except and only to the extent that such activity is expressly permitted by applicable law notwithstanding this limitation.
							<br/><br/>

							Update and Maintenance
							<br/>
							All Pony Radio upgrades are FREE of charge.
							<br/><br/>

							Separation of Components.
							<br/>
							The SOFTWARE PRODUCT is licensed as a single product. Its component parts may not be separated for use on more than one computer.
							<br/><br/>

							Software Transfer.
							<br/>
							You may permanently transfer all of your rights under this EULA, provided the recipient agrees to the terms of this EULA.
							<br/><br/>

							Termination.
							<br/>
							Without prejudice to any other rights, the Author of this Software may terminate this EULA if you fail to comply with the terms and conditions of this EULA. In such event, you must destroy all copies of the SOFTWARE PRODUCT and all of its component parts.
							<br/><br/>

							3. COPYRIGHT.
							<br/>
							All title and copyrights in and to the SOFTWARE PRODUCT (including but not limited to any images, photographs, clipart, libraries, and examples incorporated into the SOFTWARE PRODUCT), the accompanying printed materials, and any copies of the SOFTWARE PRODUCT are owned by the Author of this Software. The SOFTWARE PRODUCT is protected by copyright laws and international treaty provisions. Therefore, you must treat the SOFTWARE PRODUCT like any other copyrighted material. The licensed users or licensed company can use all functions, example, templates, clipart, libraries and symbols in the SOFTWARE PRODUCT to create new diagrams and distribute the diagrams.
							<br/><br/>

							LIMITED WARRANTY
							<br/><br/>

							NO WARRANTIES.
							<br/>
							The Author of this Software expressly disclaims any warranty for the SOFTWARE PRODUCT. The SOFTWARE PRODUCT and any related documentation is provided "as is" without warranty of any kind, either express or implied, including, without limitation, the implied warranties or merchantability, fitness for a particular purpose, or noninfringement. The entire risk arising out of use or performance of the SOFTWARE PRODUCT remains with you.
							<br/><br/>

							NO LIABILITY FOR DAMAGES.
							<br/>
							In no event shall the author of this Software be liable for any special, consequential, incidental or indirect damages whatsoever (including, without limitation, damages for loss of business profits, business interruption, loss of business information, or any other pecuniary loss) arising out of the use of or inability to use this product, even if the Author of this Software is aware of the possibility of such damages and known defects.
							<br/><br/>
						</div>
						<br/>
						<label for="notes2">Creative Commons</label>
						<input type="radio" name="notes" id="notes2" class="radio">
						<div class="notesInfo">
							All the screenshots here, are licensed to the creator of the software, and the stations shown within them.
							<br/><br/>
							If at ANY point in time, the respective owners of the stations wish for their stations to be removed, they must contact the creator of the software.
							<br/><br/>
							The creator can be contacted at <a href="mailto:celestial_doom@derpymail.org">celestial_doom(at)derpymail(dot)org</a>.
							<br/><br/>
							<a rel="nofollow" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" alt="Creative Commons License" /></a>
							<br/><br/>
							This work is licensed under a <a rel="nofollow" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
						</div>
						<br/>
						<label for="notes3">Privacy Policy</label>
						<input type="radio" name="notes" id="notes3" class="radio">
						<div class="notesInfo">
							<h3>PRIVACY POLICY MODEL FOR MOBILE APPLICATIONS</h3>
							This privacy policy governs your use of the software application 'Any an all applications we create' ("Application") for mobile devices that was created by Black Apple Research Facility.
							<h3>What information does the Application obtain and how is it used?</h3>
							<h3>User Provided Information</h3>
							The Application obtains the information you provide when you download and register the Application. Registration with us is optional. However, please keep in mind that you may not be able to use some of the features offered by the Application unless you register with us.
							<br/><br/>
							When you register with us and use the Application, you generally provide (a) your name, email address, age, user name, password and other registration information; (b) transaction-related information, such as when you make purchases, respond to any offers, or download or use applications from us; (c) information you provide us when you contact us for help; (d) credit card information for purchase and use of the Application, and; (e) information you enter into our system when using the Application, such as contact information and project management information.
							<br/><br/>
							We may also use the information you provided us to contact your from time to time to provide you with important information, required notices and marketing promotions.
							<h3>Automatically Collected Information</h3>
							In addition, the Application may collect certain information automatically, including, but not limited to, the type of mobile device you use, your mobile devices unique device ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browsers you use, and information about the way you use the Application.
							<h3>Does the Application collect precise real time location information of the device?</h3>
							This Application does not collect precise information about the location of your mobile device.
							<h3>Do third parties see and/or have access to information obtained by the Application?</h3>
							Only aggregated, anonymized data is periodically transmitted to external services to help us improve the Application and our service. We will share your information with third parties only in the ways that are described in this privacy statement.
							<br/><br/>
							We may disclose User Provided and Automatically Collected Information:
							<ul>
								<li>
									as required by law, such as to comply with a subpoena, or similar legal process;
								</li>
								<li>
									when we believe in good faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request;
								</li>
								<li>
									with our trusted services providers who work on our behalf, do not have an independent use of the information we disclose to them, and have agreed to adhere to the rules set forth in this privacy statement.
								</li>
								<li>
									if Black Apple Research Facility is involved in a merger, acquisition, or sale of all or a portion of its assets, you will be notified via email and/or a prominent notice on our Web site of any change in ownership or uses of this information, as well as any choices you may have regarding this information.
								</li>
							</ul>
							<h3>What are my opt-out rights?</h3>
							You can stop all collection of information by the Application easily by uninstalling the Application. You may use the standard uninstall processes as may be available as part of your mobile device or via the mobile application marketplace or network. You can also request to opt-out via email, at celestial_doom@derpymail.org.
							<h3>Data Retention Policy, Managing Your Information</h3>
							We will retain User Provided data for as long as you use the Application and for a reasonable time thereafter. We will retain Automatically Collected information for up to 0 Months and thereafter may store it in aggregate. If you'd like us to delete User Provided Data that you have provided via the Application, please contact us at celestial_doom@derpymail.org and we will respond in a reasonable time. Please note that some or all of the User Provided Data may be required in order for the Application to function properly.
							<h3>Children</h3>
							We do not use the Application to knowingly solicit data from or market to children under the age of 13. If a parent or guardian becomes aware that his or her child has provided us with information without their consent, he or she should contact us at celestial_doom@derpymail.org. We will delete such information from our files within a reasonable time.
							<h3>Security</h3>
							We are concerned about safeguarding the confidentiality of your information. We provide physical, electronic, and procedural safeguards to protect information we process and maintain. For example, we limit access to this information to authorized employees and contractors who need to know that information in order to operate, develop or improve our Application. Please be aware that, although we endeavor provide reasonable security for information we process and maintain, no security system can prevent all potential security breaches.
							<h3>Changes</h3>
							This Privacy Policy may be updated from time to time for any reason. We will notify you of any changes to our Privacy Policy by posting the new Privacy Policy <a href="privacy.txt">here</a> and informing you via email or text message. You are advised to consult this Privacy Policy regularly for any changes, as continued use is deemed approval of all changes. You can check the history of this policy by clicking <a href="privacy.txt">here</a>.
							<h3>Your Consent</h3>
							By using the Application, you are consenting to our processing of your information as set forth in this Privacy Policy now and as amended by us. "Processing" means using cookies on a computer/hand held device or using or touching information in any way, including, but not limited to, collecting, storing, deleting, using, combining and disclosing information, all of which activities will take place in the United States. If you reside outside the United States your information will be transferred, processed and stored there under United States privacy standards.
							<h3>Contact us</h3>
							If you have any questions regarding privacy while using the Application, or have questions about our practices, please contact us via email at <a href="mailto:celestial_doom@derpymail.org">celestial_doom(at)derpymail(dot)org</a>.
						</div>
					</div>
					<div class="apraNotesColumn2">
					</div>
				</div>
			</div>
		</div>
		
		<div id="mfr">
			<div class="mfrDisplay">
				<div class="mfrDisplayBackground1">
				</div>
				<div class="mfrDisplayBackground2">
				</div>
				<div class="mfrDisplayTextButton">
					<span class="mfrDisplayTitle">Mane Frame Radio</span>
					<br/>
					<br/>
					<span class="mfrDisplayCaption">The Mane Frame Radio app is a specialized app designed for listening to Mane Frame Radio. </span>
					<br/>
					<br/>
					<br/>
					<a href="https://play.google.com/store/apps/details?id=appinventor.ai_ubuntu_achromic.ManeFrame">
						<img alt="Get it on Google Play" src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" />
					</a>
				</div>
			</div>
			
			<div class="mfr1">
				<div class="mfrColumn mfrColumn1">
					<a href="https://mane-frame.com/"><img src="img/mfrlogo.png"/></a>
					<span>
						<a href="https://mane-frame.com/">Mane Frame Radio</a> is an independent pony broadcasting station dedicated to serving their listeners with only the 
						best pony music around. Plug yourself into the Mane Frame!
					</span>
				</div>
				<div class="divider"></div>
				<div class="mfrColumn mfrColumn2">
					<span class="listTitle">Features</span>
					<ul>
						<li>Displays the current artist, song, album, and listeners!</li>
						<li>A cohesive design that matches the design of the Mane Frame Radio website!</li>
						<li>A simple app - No bloat to worry about!</li>
						<li>Advanced information and statistics for the listeners who want to be just that much more informed!</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="friends" class="sectionDivide">Friends</div>
		
		<div class="friends">
			<!--Ponyville Live!, MFR, iPonyRadio, HoofSounds-->
			<div class="friends1 friendsRow">
				<a href="http://ponyvillelive.com/">
				<div class="friendsCol">
					<div class="friendsTitle">
						Ponyville Live!
					</div>
					<img src="img/ponyvillelive_small.png"/>
				</div>
				</a>
				<a href="https://mane-frame.com/">
				<div class="friendsCol">
					<div class="friendsTitle">
						Mane Frame Radio
					</div>
					<img src="img/mfrlogo_small.png"/>
				</div>
				</a>
				<a href="http://iponyradio.com/">
				<div class="friendsCol">
					<!--<div class="friendsTitle"> 
						iPonyRadio
					</div>
					<img src="img/iponyradio.png"/> -->
				</div>
				</a>
				<a href="https://hoofsounds.little.my/">
				<div class="friendsCol">
					<div class="friendsTitle">
						HoofSounds
					</div>
					<img src="img/hoofsounds_small.png"/>
				</div>
				</a>
			</div>
			<hr/>
			<!--MLP Wiki, Brony Musician Directory, DerpyMail, FiMFiction-->
			<div class="friends2 friendsRow">
				<a href="http://mlp.wikia.com/wiki/My_Little_Pony_Friendship_is_Magic_Wiki">
				<div class="friendsCol">
					<div class="friendsTitle">
						My Little Pony Wiki
					</div>
					<img src="img/wiki_small.png"/>
				</div>
				</a>
				<a href="http://bronymusiciandirectory.blogspot.co.uk/">
				<div class="friendsCol">
					<div class="friendsTitle">
						Brony Musician Directory
					</div>
					<img src="img/bmd_small.png"/>
				</div>
				</a>
				<a href="http://derpymail.org/">
				<div class="friendsCol">
					<div class="friendsTitle">
						DerpyMail
					</div>
					<img src="img/derpymail_small.png"/>
				</div>
				</a>
				<a href="http://www.fimfiction.net/">
				<div class="friendsCol">
					<div class="friendsTitle">
						FiMFiction
					</div>
					<img src="img/fim_small.png"/>
				</div>
				</a>
			</div>
		</div>
		
		<div id="projects" class="sectionDivide">Projects</div>
		
		<div>
			<div class="projectsRow projectsRow1">
				<div class="projectTitle">
					Radio Pandemonium (Working Title)
				</div>
				<div class="projectTitle">
					MLP:FiM Episode Guide
				</div>
				<div class="projectsCol projectsCol1">
					A large project that will be reliant on an online music database. Designed to be a future music streaming app with access to all songs on the database. Will be a similar app to APRA, but different enough.
				</div>
				<div class="projectsCol projectsCol2">
					Using a database of episodes, main characters, and images, this will be a guide dedicated to searching through all episodes for specific characters, searching through screenshots of the episodes, synopses, and more.
				</div>
			</div>
			<div class="projectsRow projectsRow2">
				<div class="projectTitle">
					FiMFiction API (Unofficial)
				</div>
				<div class="projectTitle">
					Project FiM
				</div>
				<span class="projectsCol projectsCol1">
					A project utilizing the current FiMFiction.net API. Still a work in progress, but has a watch list added for ease of access.
				</span>
				<span class="projectsCol projectsCol2">
					Our skunk works project. An audio streamer, but besides that, top secret!
				</span>
			</div>
		</div>
		
		<div id="about" class="sectionDivide">About</div>
		
		<div>
			<div class="aboutBARF">
				Black Apple Research Facility (or Black Apple for short) is a software development studio specializing in the design, production, and release of Android apps dedicated to streaming audio or using APIs.
			</div>
			<div class="sectionDivide">Staff</div>
			<div class="aboutStaff">
				<span>
					<input type="radio" name="aboutRadio" id="aboutRadio1" class="radio" checked>
					<div class="aboutInfo">
						Apra is the second in command and holds the whole organization together. Whilst foiling Black Apple in his attempts at world domination, she also does most of the work. She has just started to practice archery, though she's willing to fire at an apple on Black Apple's head! She's also had a makeover: get ready for the new release of her app!
					</div>
					<label for="aboutRadio1">
						<div class="aboutimg">
							<img src="img/apra.png"/>
						</div>
					</label>
				</span>
				
				<span>
					<input type="radio" name="aboutRadio" id="aboutRadio2" class="radio">
					<div class="aboutInfo">
						Black Apple is the main guy around here that works his hoofs to the bone to try to bring new and interesting ideas to the facility. Helped (at times) by Apra, he's usually mooching around in the basement and threatening small rodents.
					</div>
					<label for="aboutRadio2">
						<div class="aboutimg">
							<img src="img/blackapple.png"/>
						</div>
					</label>
				</span>
				
				<span>
					<input type="radio" name="aboutRadio" id="aboutRadio3" class="radio">
					<div class="aboutInfo">
						Celestial Doom is our resident grump, and the source of all of our problems (we can't get rid of him, he owns the land)! When he's not moping around and trying to make us all feel sorry for him, he's usually busy designing the graphics for the various apps and web sites. And drinking vast quantities of coffee and bourbon, sometimes, drunk separately!
					</div>
					<label for="aboutRadio3">
						<div class="aboutimg aboutC">
							<img src="img/celestialdoom.png"/>
						</div>
					</label>
				</span>
				
				<span>
					<input type="radio" name="aboutRadio" id="aboutRadio4" class="radio">
					<div class="aboutInfo">
						Derpra is Apra's little sister, and is happy to help around the facility by fixing the plumbing and baking some really nice pies. Not as well versed in programming as her sister, but is willing to try anything once!
					</div>
					<label for="aboutRadio4">
						<div class="aboutimg">
							<img src="img/derpra.png"/>
						</div>
					</label>
				</span>
				
				<span>
					<input type="radio" name="aboutRadio" id="aboutRadio5" class="radio">
					<div class="aboutInfo">
						Little Equie is Apra's foal, which surprised everyone! She plays, quite happily, in Black Apple's office, and occasionally re-programs his computer. Apart from that, she just gets in the way.
						<br/>
						<br/>
						But, we love her. (YOU'D BETTER! SHE'S MY DAUGHTER! - Apra)
					</div>
					<label for="aboutRadio5">
						<div class="aboutimg">
							<img src="img/equie.png"/>
						</div>
					</label>
				</span>
			</div>
		</div>
		
	</div>
	
	<div class="footer">
		 AllPonyRadioApp &copy;, 2011-2015. All rights reserved. All multimedia content is property of its respective author(s). AllPonyRadioApp is a Non-profit Applicaiton, any and all ad and donation money is used solely for keeping the applicaion alive.</a>
	</div>
	
	<div class="facebook">
		<div class="fb-header">
			<label for="facebook-checkbox">
				<img src="img/facebook-banner.png"/>
				<span class="fb-header-text">News</span>
			</label>
		</div>
		<input type="checkbox" id="facebook-checkbox" class="radio">
		<div class="fb-like-box" data-href="https://www.facebook.com/AllPonyRadio" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
	</div>
	
</body>
</html>
