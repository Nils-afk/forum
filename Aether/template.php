<?php
/*
 *	Made by Coldfire - https://coldfiredzn.com/
 *  NamelessMC version 2.0.0-pr7
 *
 *  Aether Template
 */
require_once(ROOT_PATH . '/modules/Aether/pages/getvariables.php');
class Aether_Template extends TemplateBase {
	private $_language, $_user, $_pages;
	public function __construct($smarty, $language, $user, $pages){
		$this->_language = $language;
		$this->_user = $user;
		$this->_pages = $pages;
		parent::__construct(
			'Aether',
			'2.1.4',
			'2.0.0-pr7',
			'<a href="https://coldfiredzn.com/" target="_blank" rel="nofollow noopener">Coldfire</a>'
		);
		$this->addCSSFiles(array(
		    	'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css' => array(),
			(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/css/custom.css' => array(),
			(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/toastr/toastr.min.css' => array(),
			(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/custom/templates/Aether/css/new-aether.css?v=2' => array(),
			'https://use.fontawesome.com/releases/v5.14.0/css/all.css' => array()
		));
		$this->addJSFiles(array(
			'https://code.jquery.com/jquery-2.1.4.min.js' => array(),
			'https://unpkg.com/@popperjs/core@2' => array(),
			(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/custom/templates/Aether/js/tether.min.js' => array(),
			'https://stackpath.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js' => array(),
			(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/plugins/toastr/toastr.min.js' => array(),
			(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/js/jquery.cookie.js' => array()
		));
		define('CHATBOX_SCRIPT', '/custom/templates/Aether/js/chatbox.js?v=1');
		$this->addJSScript(
			'	var siteURL = "' . URL::build('/') .'";
			   $(".pop").popover({ trigger: "manual" , html: true, animation:false, placement: "top" })
			    .on("mouseenter", function () {
			        var _this = this;
			        $(this).popover("show");
			        $(".popover").on("mouseleave", function () {
			            $(_this).popover(\'hide\');
			        });
			    }).on("mouseleave", function () {
			        var _this = this;
			        setTimeout(function () {
			            if (!$(".popover:hover").length) {
			                $(_this).popover(\'hide\');
			            }
			        }, 300);
			   });
			   $(function () {
			      $(\'[data-toggle="tooltip"]\').tooltip()
			      });
			      $(function () {
			      $(\'[rel="tooltip"]\').tooltip()
			      });
			
			      $(\'[data-toggle="popover"]\').popover({ trigger: "manual" , html: true, animation:false}).on("mouseenter", function () {
			      var _this = this;
			      $(this).popover("show");
			      $(".popover").on("mouseleave", function () {
			        $(_this).popover(\'hide\');
			      });
			      }).on("mouseleave", function () {
			      var _this = this;
			      setTimeout(function () {
			        if (!$(".popover:hover").length) {
			          $(_this).popover("hide");
			        }
			      }, 300);
				});
				
				$(document).ready(function(){
					var cachedUsers = {};
					var timeoutId;

				   $(\'*[data-poload]\').mouseenter(function (){
				   	var elem = this;
				   	if(!timeoutId){
				        timeoutId = window.setTimeout(function() {
				            timeoutId = null;
				            if(!($(elem).data(\'poload\') in cachedUsers)){
							    $(elem).popover({trigger:"manual",animation:false,content:"Loading..."}).popover("show");
						        $.get($(elem).data(\'poload\'), function(d) {
						            ' . ((defined('DEBUGGING') && DEBUGGING == 1) ? 'console.log(d);' : '') . '
						            var data = JSON.parse(d);
							        cachedUsers[$(elem).data(\'poload\')] = data;
									$(elem).popover("dispose").popover({trigger:"manual",animation:false,content:data.html}).popover("show");
									$(\'.popover\').mouseleave(function (){
								        if(!$(".popover:hover").length){
								          $(this).popover("hide");
								        }
									});
							    });
				            } else {
							    var data = cachedUsers[$(elem).data(\'poload\')];
							    $(elem).popover({trigger:"manual",animation:false,content:data.html}).popover("show");
							    $(\'.popover\').mouseleave(function (){
							        if(!$(".popover:hover").length){
							          $(this).popover("hide");
							        }
							    });
				            }
				       }, 1000);
				    }
				   }).mouseleave(function (){
					   var elem = this;
					   if(timeoutId){
					        window.clearTimeout(timeoutId);
					        timeoutId = null;
					   } else {
					      setTimeout(function () {
					        if(!$(".popover:hover").length){
					          $(elem).popover("hide");
					        }
					      }, 200);
					   }
				   });
				});
				//window.onscroll = function() {myFunction()};
				
			    function copyToClipboard(element) {
			      var $temp = $("<input>");
			      $("body").append($temp);
			      $temp.val($(element).text()).select();
			      document.execCommand("copy");
			      $temp.remove();

			      toastr.options.onclick = function () {};
			      toastr.options.progressBar = true;
			      toastr.options.closeButton = true;
			      toastr.options.positionClass = \'toast-bottom-left\'
			      toastr.success("' . $this->_language->get('general', 'copied') . '");
			    }
			'
			
		);
		
		// Check to see if the user is logged in, and if so, add any JS/CSS
		if($this->_user->isLoggedIn()){
			$this->addJSScript(
				'
				    <!-- Alerts -->
				    $(document).ready(function() {
				      // Request permission for browser notifications
				      if(Notification){
				        if (Notification.permission !== "granted")
				        Notification.requestPermission();
				      }
				
				      toastr.options.closeButton = true;
				      toastr.options.positionClass = \'toast-bottom-left\';
				
				      // Get alerts and messages, and then set them to refresh every 20 seconds
				      $.getJSON(\'' . URL::build('/queries/pms') . '\', function(data) {
				        var pm_dropdown = document.getElementById(\'pm_dropdown\');
				
				        if(data.value > 0){
				          $("#pms").html(\' <i class="fa fa-exclamation-circle custom-nav-exclaim"></i>\');
				
				          if(pm_dropdown.innerHTML == \'' . $this->_language->get('general', 'loading') . '\'){
				
				            var new_pm_dropdown = \'\';
				
				            for(i in data.pms){
				              new_pm_dropdown += \'<a class="dropdown-item" href="' . URL::build('/user/messaging/', 'action=view&amp;message=') . '\' + data.pms[i].id + \'">\' + data.pms[i].title + \'</a>\';
				            }
				
				            pm_dropdown.innerHTML = new_pm_dropdown;
				          }
				
				        } else {
				          pm_dropdown.innerHTML = \'<a class="dropdown-item">' . $this->_language->get('user', 'no_messages') . '</a>\';
				        }
				      });
				      $.getJSON(\'' . URL::build('/queries/alerts'). '\', function(data) {
				        var alert_dropdown = document.getElementById(\'alert_dropdown\');
				
				        if(data.value > 0){
				          $("#alerts").html(\' <i class="fa fa-exclamation-circle custom-nav-exclaim"></i>\');
				
				          if(alert_dropdown.innerHTML == \'' . $this->_language->get('general', 'loading') . '\'){
				
				            var new_alert_dropdown = \'\';
				
				            for(i in data.alerts){
				              new_alert_dropdown += \'<a class="dropdown-item" href="' . URL::build('/user/alerts/', 'view=') . '\' + data.alerts[i].id + \'">\' + data.alerts[i].content_short + \'</a>\';
				            }
				
				            alert_dropdown.innerHTML = new_alert_dropdown;
				          }
				
				        } else {
				          alert_dropdown.innerHTML = \'<a class="dropdown-item">' . $this->_language->get('user', 'no_alerts') . '</a>\';
				        }
				      });
				
				      window.setInterval(function(){
				        $.getJSON(\'' . URL::build('/queries/pms') . '\', function(data) {
				        if(data.value > 0 && $(\'#pms\').is(\':empty\')){
				          $("#pms").html(\' <i class="fa fa-exclamation-circle custom-nav-exclaim"></i>\');
				          toastr.options.onclick = function () {
				            window.location.href = "' . URL::build('/user/messaging') . '";
				          };
				
				          if(data.value == 1){
				            toastr.info(\'' . $this->_language->get('user', '1_new_message') . '\');
				          } else {
				            var x_messages = \'' . $this->_language->get('user', 'x_new_messages') . '\';
				            toastr.info(x_messages.replace("{x}", data.value));
				          }
				
				          // Update navbar dropdown
				          var pm_dropdown = document.getElementById(\'pm_dropdown\');
				
				          $("#pms").html(\' <i class="fa fa-exclamation-circle custom-nav-exclaim"></i>\');
				
				          var new_pm_dropdown = \'\';
				
				          for(i in data.pms){
				            new_pm_dropdown += \'<a class="dropdown-item" href="' . URL::build('/user/messaging/', 'action=view&amp;message=') . '\' + data.pms[i].id + \'">\' + data.pms[i].title + \'</a>\';
				          }
				
				          pm_dropdown.innerHTML = new_pm_dropdown;
				
				          // Desktop notification
				          if (Notification.permission !== "granted")
				            Notification.requestPermission();
				          else {
				            if(data.value == 1){
				              var notification = new Notification(\'' . SITE_NAME . '\', {
				                body: \'' . $this->_language->get('user', '1_new_message') . '\',
				              });
				            } else {
				              var notification = new Notification(\'' . SITE_NAME . '\', {
				                body: x_messages.replace("{x}", data.value),
				              });
				            }
				
				            notification.onclick = function () {
				              window.open("' . Output::getClean(rtrim(Util::getSelfURL(), '/')) . URL::build('/user/messaging') . '");
				            };
				
				          }
				        }
				        });
				        $.getJSON(\'' . URL::build('/queries/alerts') . '\', function(data) {
				        if(data.value > 0 && $(\'#alerts\').is(\':empty\')){
				          $("#alerts").html(\' <i class="fa fa-exclamation-circle custom-nav-exclaim"></i>\');
				          toastr.options.onclick = function () {
				            window.location.href = "' . URL::build('/user/alerts') . '";
				          };
				
				          if(data.value == 1){
				            toastr.info(\'' . $this->_language->get('user', '1_new_alert') . '\');
				          } else {
				            var x_alerts = \'' . $this->_language->get('user', 'x_new_alerts') . '\';
				            toastr.info(x_alerts.replace("{x}", data.value));
				          }
				
				          // Update navbar dropdown
				          var alert_dropdown = document.getElementById(\'alert_dropdown\');
				
				          $("#alerts").html(\' <i class="fa fa-exclamation-circle custom-nav-exclaim"></i>\');
				
				          var new_alert_dropdown = \'\';
				
				          for(i in data.alerts){
				            new_alert_dropdown += \'<a class="dropdown-item" href="' . URL::build('/user/alerts/', 'view=') . '\' + data.alerts[i].id + \'">\' + data.alerts[i].content_short + \'</a>\';
				          }
				
				          alert_dropdown.innerHTML = new_alert_dropdown;
				
				          // Desktop notification
				          if (Notification.permission !== "granted")
				            Notification.requestPermission();
				          else {
				            if(data.value == 1){
				              var notification = new Notification(\'' . SITE_NAME . '\', {
				                body: \'' . $this->_language->get('user', '1_new_alert') . '\',
				              });
				            } else {
				              var notification = new Notification(\'' . SITE_NAME . '\', {
				                body: x_alerts.replace("{x}", data.value),
				              });
				            }
				
				            notification.onclick = function () {
				              window.open("' . Output::getClean(rtrim(Util::getSelfURL(), '/')) . URL::build('/user/alerts') . '");
				            };
				
				          }
				        }
				        });
				      }, 20000);
				    });
				
				      $(\'.alert-dropdown, .pm-dropdown\').hover(
				          function() {
				              $(this).find(\'.dropdown-menu\').stop(true, true).delay(25).fadeIn();
				          },
				          function() {
				              $(this).find(\'.dropdown-menu\').stop(true, true).delay(25).fadeOut();
				          }
				      );
				
				      $(\'.alert-dropdown-menu, .pm-dropdown-menu\').hover(
				          function() {
				              $(this).stop(true, true);
				          },
				          function() {
				              $(this).stop(true, true).delay(25).fadeOut();
				          }
				      );
				      
				      // Warnings
				      if($(\'div.show-punishment\').length){
				        $(\'.show-punishment\').modal(\'show\');
				      }
				'
			);
		} else {
			// User is not logged in - display cookie notice
			if(defined('COOKIE_NOTICE')){
				$this->addJSScript(
					'
					toastr.options.timeOut = 0;
		            toastr.options.extendedTimeOut = 0;
		            toastr.options.closeButton = true;

		            toastr.options.onclick = function() { $(\'.toast .toast-close-button\').focus(); }
		            toastr.options.onHidden = function() { $.cookie(\'accept\', \'accepted\', { path: \'/\' }); }

		            toastr.options.positionClass = \'toast-bottom-left\';

		            toastr.info(\'' . $this->_language->get('general', 'cookie_notice') . '\');
					'
				);
			}
		}

		define('TEMPLATE_EDITOR_STYLE', 'moono-lisa');
	}

	// Add any CSS/JS as the page is about to be loaded - here we can get the page name that we are on
	public function onPageLoad(){
		if(defined('PAGE_LOADING') && PAGE_LOADING == 1){
			$this->addJSScript(
				'
				  	var timer = \'' . PAGE_LOAD_TIME . '\';
  	                $(\'#page_load_tooltip\').attr(\'title\', timer).tooltip();
				'
			);
		}

		if(defined('FRONT_END')){
			require(ROOT_PATH . '/modules/Aether/pages/getvariables.php');
		    $this->addCSSStyle('.aether-headtop {background: url(\'' . $theme_bg . '\') no-repeat center top;}');
			$this->addCSSStyle('.navbar-theme, .header-theme, .card-inverse .header-theme, .btn-theme {border-bottom: 5px solid '. $theme_s_color .' !important;}');
			$this->addCSSStyle('.navbar-theme, .header-bottom-theme, .footer-theme, .footer-card-theme, .header-theme, .card-footer-theme, .btn-theme, .profile-theme .nav-link, .user-theme .nav-link, .card-inverse .header-theme {background-color: '. $theme_p_color .' !important;}');
			$this->addCSSStyle(' .btn-theme:hover, .bg-dark, .nav-link-active, .profile-theme .nav-link-active, .user-theme .nav-link-active {background-color: '. $theme_s_color .' !important;}');
			$this->addCSSStyle('.box {background-color: '. $theme_box_bg .' !important;}');
			$this->addCSSStyle('.btn-news-theme {background-color: '. $theme_btn_bg .' !important;}');
			$this->addCSSStyle('@media (min-width: 1101px) {.box {margin-top: '. $theme_box_margin .' !important;}}');
			$this->addCSSStyle('.footer-theme, .header-bottom-theme, .footer-card-theme, .card-footer-theme {border-top: 5px solid '. $theme_s_color .' !important;}');
			$this->addCSSStyle('.panel-theme {border-color: '. $theme_p_color .';}');
			$this->addCSSStyle('.panel-theme .panel-heading {background-color: '. $theme_p_color .'; border-bottom: 5px solid '. $theme_s_color .';}');
			$this->addCSSStyle('.color-overlay {background-color: '. $theme_p_color .'}');
			$this->addCSSStyle('body {background-color: '. $theme_bg_color .'}');
			$this->addCSSStyle('@media (min-width: 801px) {.logo {height: '. $theme_logo_size .'; margin: '. $theme_logo_margin .' 0}}');
			$this->addCSSStyle('@media (max-width: 800px) {.logo {height: '. $theme_logo_size_m .'; margin: '. $theme_logo_margin_m .' 0}}');
		}

		if(defined('PAGE')){
			if(PAGE == 'cc_messaging'){
				$this->addCSSFiles(array(
					(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/custom/templates/Default/css/bootstrap-tokenfield.min.css' => array(),
					(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/css/jquery-ui.min.css' => array()
				));

				$this->addJSFiles(array(
					(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/custom/templates/Default/js/bootstrap-tokenfield.min.js' => array(),
					(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/js/jquery-ui.min.js' => array()
				));

				$this->addJSScript(
					'
					 	$(\'#InputTo\').tokenfield({
					      autocomplete: {
					        source: allUsers,
					        delay: 100,
					        minLength: 3
					      },
					      showAutocompleteOnFocus: true
					    });
					'
				);
			} else if(PAGE == 'login' || PAGE == 'register' || PAGE == 'complete_signup'){
				$this->addJSScript(
					'
					  	$(function () {
					        $(\'.button-checkbox\').each(function () {
					            // Settings
					            var $widget = $(this),
					                $button = $widget.find(\'button\'),
					                $checkbox = $widget.find(\'input:checkbox\'),
					                color = $button.data(\'color\'),
					                settings = {
					                    on: {
					                        icon: \'fas fa-check-square\'
					                    },
					                    off: {
					                        icon: \'far fa-square\'
					                    }
					                };
					            // Event Handlers
					            $button.on(\'click\', function () {
					                $checkbox.prop(\'checked\', !$checkbox.is(\':checked\'));
					                $checkbox.triggerHandler(\'change\');
					                updateDisplay();
					            });
					            $checkbox.on(\'change\', function () {
					                updateDisplay();
					            });
					            // Actions
					            function updateDisplay() {
					                var isChecked = $checkbox.is(\':checked\');
					                // Set the button\'s state
					                $button.data(\'state\', (isChecked) ? "on" : "off");
					                // Set the button\'s icon
					                $button.find(\'.state-icon\')
					                    .removeClass()
					                    .addClass(\'state-icon \' + settings[$button.data(\'state\')].icon);
					                // Update the button\'s colour
					                if (isChecked) {
					                    $button
					                        .removeClass(\'btn-secondary\')
					                        .addClass(\'btn-\' + color + \' active\');
					                }
					                else {
					                    $button
					                        .removeClass(\'btn-\' + color + \' active\')
					                        .addClass(\'btn-secondary\');
					                }
					            }
					            // Initialisation
					            function init() {
					                updateDisplay();
					                // Inject the icon if applicable
					                if ($button.find(\'.state-icon\').length == 0) {
					                    $button.prepend(\'<i class="state-icon \' + settings[$button.data(\'state\')].icon + \'"></i>\');
					                }
					            }
					            init();
					        });
					    });
					'
				);
			} else if(PAGE == 'status'){
				$this->addJSScript(
					'
					  	$(document).ready(function(){
					        $(".server").each(function(){
					            let serverId = $(this).data("id");
					            let serverBungee = $(this).data("bungee");
					            let serverPlayerList = $(this).data("players");
					            $.getJSON("' . URL::build('/queries/server/', 'id=') . '" + serverId, function(data){
									var html = "";
									if(data.status_value == 1){
										$("#header" + serverId).addClass("bg-success text-white");
										html = "<p>" + data.player_count + "/" + data.player_count_max + "</p>";
										if(serverBungee == 1){
									        html += "<p>' . $this->_language->get('general', 'bungee_instance') . '</p>";
										} else {
										    if(serverPlayerList == 1){
										        if(data.player_list.length > 0){
										            html += "<p>";
										            let avatarSource = "' . Util::getAvatarSource() . '";
										            for(var i = 0; i < data.player_list.length; i++){
										                html += "<a href=\"' . URL::build('/profile/') . '" + data.player_list[i].name + "\"><img style=\"margin-bottom:3px;max-width:32px;max-height:32px;\" data-toggle=\"tooltip\" title=\"" + data.player_list[i].name + "\" src=\"" + avatarSource.replace("{x}", data.player_list[i].name).replace("{y}", 64) + "\" class=\"img-rounded\" alt=\"" + data.player_list[i].name + "\"></a> ";
										            }
										            html += "</p>";
										            
										            if(data.player_list.length < data.player_count){
										                let andXMore = "' . $this->_language->get('general', 'and_x_more') . '";
										                html += "<p><span class=\"badge badge-secondary\">" + andXMore.replace("{x}", (data.player_count - data.player_list.length)) + "</span></p>";
										            }
										        } else {
										            html += "<p>' . $this->_language->get('general', 'no_players_online') . '</p>";
										        }
										    }
										}
									} else {
										$("#header" + serverId).addClass("bg-danger text-white");
										html = "<p>0/0</p><p>' . $this->_language->get('general', 'offline') . '</p>";
									}
									
									$("#content" + serverId).html(html);
									$(\'[data-toggle="tooltip"]\').tooltip();
								});
					        });
					    });
					'
				);
			} else if(PAGE == 'profile'){
				$this->addJSScript('
				  $(\'#imageModal\').on(\'show.bs.modal\', function (e) {
					$("select").imagepicker();
				  });
				');

				if($this->_user->isLoggedIn()){
					$this->addJSScript('
					    function deletePost(post) {
				            if(confirm("' . $this->_language->get('user', 'confirm_delete') . '")){
				                document.getElementById("delete" + post).submit();
				            }
				        }
				        function deleteReply(post) {
				            if(confirm("' . $this->_language->get('user', 'confirm_delete') . '")){
				                document.getElementById("deleteReply" + post).submit();
				            }
				        }
					');
				}
			}
		}

		// View topic highlight
		if(isset($_GET['route']))
			$route = rtrim($_GET['route'], '/');
		else
			$route = '/';

		if(strpos($route, '/forum/topic/') !== false){
			$this->addJSFiles(array(
				(defined('CONFIG_PATH') ? CONFIG_PATH : '') . '/core/assets/js/jquery-ui.min.js' => array()
			));

			$this->addJSScript(
				'
				  $(document).ready(function(){
					var hash = window.location.hash.substring(1);
					$("#" + hash).effect("highlight", {}, 2000);
					(function() {
					    if (document.location.hash) {
					        setTimeout(function() {
					            window.scrollTo(window.scrollX, window.scrollY - 110);
					        }, 10);
					    }
					})();
			      });
				'
			);
		}

		// Any AJAX scripts to load?
		if(count($this->_pages->getAjaxScripts())){
			$js = '';
			foreach($this->_pages->getAjaxScripts() as $ajax_script){
				$js .= '$.getJSON(\'' . $ajax_script . '\', function(data) {});';
			}
			$this->addJSScript($js);
		}
	}
}


$cache->setCache('social_media');

if(!$cache->isCached('discord_count')){
  $Discord_Server_ID = $cache->retrieve('discord');

  $discord_api = file_get_contents('https://discord.com/api/guilds/'.$Discord_Server_ID.'/widget.json');
  $discord_api_decode = json_decode($discord_api, true);
  $discord_api_online = $discord_api_decode["presence_count"];

  $cache->store('discord_count', $discord_api_online, 300);

} else {
  $discord_api_online = $cache->retrieve('discord_count');
}

$smarty->assign('DISCORD_API_COUNT', $discord_api_online);


$template = new Aether_Template($smarty, $language, $user, $pages);