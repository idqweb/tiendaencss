<?php
    header("Content-type: text/css; charset: UTF-8");

	$colorbarra = "#685233"; // marron de la barra
	$colorlinkreposo ="#e69400";
	$colorsobrelink="#ffffff";
  
?>

#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu {
  font-family: Montserrat, sans-serif;
  background: <?php echo $colorbarra; ?>;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-center ul ul {
  text-align: left;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu > ul > li > a {
  padding: 17px;
  font-size: 12px;
  letter-spacing: 1px;
  text-decoration: none;
  color: <?php echo $colorlinkreposo; ?>;
  font-weight: 700;
  text-transform: uppercase;
}
#cssmenu > ul > li:hover > a {
  color: <?php echo $colorsobrelink; ?>;
}
#cssmenu > ul > li.has-sub > a {
  padding-right: 30px;
}
#cssmenu > ul > li.has-sub > a:after {
  position: absolute;
  top: 22px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: <?php echo $colorlinkreposo; ?>;
  content: '';
}
#cssmenu > ul > li.has-sub > a:before {
  position: absolute;
  top: 19px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: <?php echo $colorlinkreposo; ?>;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu > ul > li.has-sub:hover > a:before {
  top: 23px;
  height: 0;
}
#cssmenu ul ul {
  position: absolute;
  left: -9999px;
}
#cssmenu.align-right ul ul {
  text-align: right;
}
#cssmenu ul ul li {
  height: 0;
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu li:hover > ul {
  left: auto;
}
#cssmenu.align-right li:hover > ul {
  left: auto;
  right: 0;
}
#cssmenu li:hover > ul > li {
  height: 35px;
}
#cssmenu ul ul ul {
  margin-left: 100%;
  top: 0;
}
#cssmenu.align-right ul ul ul {
  margin-left: 0;
  margin-right: 100%;
}
#cssmenu ul ul li a {
  border-bottom: 1px solid rgba(150, 150, 150, 0.15);
  padding: 11px 15px;
  width: 170px;
  font-size: 12px;
  text-decoration: none;
  color: <?php echo $colorlinkreposo; ?>;
  font-weight: 400;
  background: #333333;
}
#cssmenu ul ul li:last-child > a,
#cssmenu ul ul li.last-item > a {
  border-bottom: 0;
}
#cssmenu ul ul li:hover > a,
#cssmenu ul ul li a:hover {
  color: <?php echo $colorsobrelink; ?>;
}
#cssmenu ul ul li.has-sub > a:after {
  position: absolute;
  top: 16px;
  right: 11px;
  width: 8px;
  height: 2px;
  display: block;
  background: <?php echo $colorlinkreposo; ?>;
  content: '';
}
#cssmenu.align-right ul ul li.has-sub > a:after {
  right: auto;
  left: 11px;
}
#cssmenu ul ul li.has-sub > a:before {
  position: absolute;
  top: 13px;
  right: 14px;
  display: block;
  width: 2px;
  height: 8px;
  background: <?php echo $colorlinkreposo; ?>;
  content: '';
  -webkit-transition: all .25s ease;
  -moz-transition: all .25s ease;
  -ms-transition: all .25s ease;
  -o-transition: all .25s ease;
  transition: all .25s ease;
}
#cssmenu.align-right ul ul li.has-sub > a:before {
  right: auto;
  left: 14px;
}
#cssmenu ul ul > li.has-sub:hover > a:before {
  top: 17px;
  height: 0;
}
@media all and (max-width: 768px), only screen and (-webkit-min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min--moz-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (-o-min-device-pixel-ratio: 2/1) and (max-width: 1024px), only screen and (min-device-pixel-ratio: 2) and (max-width: 1024px), only screen and (min-resolution: 192dpi) and (max-width: 1024px), only screen and (min-resolution: 2dppx) and (max-width: 1024px) {
  #cssmenu {
    width: 100%;
  }
  #cssmenu ul {
    width: 100%;
    display: none;
  }
  #cssmenu.align-center > ul {
    text-align: left;
  }
  #cssmenu ul li {
    width: 100%;
    border-top: 1px solid rgba(120, 120, 120, 0.2);
  }
  #cssmenu ul ul li,
  #cssmenu li:hover > ul > li {
    height: auto;
  }
  #cssmenu ul li a,
  #cssmenu ul ul li a {
    width: 100%;
    border-bottom: 0;
  }
  #cssmenu > ul > li {
    float: none;
  }
  #cssmenu ul ul li a {
    padding-left: 25px;
  }
  #cssmenu ul ul ul li a {
    padding-left: 35px;
  }
  #cssmenu ul ul li a {
    color: <?php echo $colorlinkreposo; ?>;
    background: none;
  }
  #cssmenu ul ul li:hover > a,
  #cssmenu ul ul li.active > a {
    color: <?php echo $colorsobrelink; ?>;
  }
  #cssmenu ul ul,
  #cssmenu ul ul ul,
  #cssmenu.align-right ul ul {
    position: relative;
    left: 0;
    width: 100%;
    margin: 0;
    text-align: left;
  }
  #cssmenu > ul > li.has-sub > a:after,
  #cssmenu > ul > li.has-sub > a:before,
  #cssmenu ul ul > li.has-sub > a:after,
  #cssmenu ul ul > li.has-sub > a:before {
    display: none;
  }
  #cssmenu #menu-button {
    display: block;
    padding: 17px;
    color: <?php echo $colorlinkreposo; ?>;
    cursor: pointer;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 700;
  }
  #cssmenu #menu-button:after {
    position: absolute;
    top: 22px;
    right: 17px;
    display: block;
    height: 4px;
    width: 20px;
    border-top: 2px solid <?php echo $colorlinkreposo; ?>;
    border-bottom: 2px solid <?php echo $colorlinkreposo; ?>;
    content: '';
  }
  #cssmenu #menu-button:before {
    position: absolute;
    top: 16px;
    right: 17px;
    display: block;
    height: 2px;
    width: 20px;
    background: <?php echo $colorlinkreposo; ?>;
    content: '';
  }
  #cssmenu #menu-button.menu-opened:after {
    top: 23px;
    border: 0;
    height: 2px;
    width: 15px;
    background: <?php echo $colorsobrelink; ?>;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  #cssmenu #menu-button.menu-opened:before {
    top: 23px;
    background: <?php echo $colorsobrelink; ?>;
    width: 15px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }
  #cssmenu .submenu-button {
    position: absolute;
    z-index: 99;
    right: 0;
    top: 0;
    display: block;
    border-left: 1px solid rgba(120, 120, 120, 0.2);
    height: 46px;
    width: 46px;
    cursor: pointer;
  }
  #cssmenu .submenu-button.submenu-opened {
    background: #262626;
  }
  #cssmenu ul ul .submenu-button {
    height: 34px;
    width: 34px;
  }
  #cssmenu .submenu-button:after {
    position: absolute;
    top: 22px;
    right: 19px;
    width: 8px;
    height: 2px;
    display: block;
    background: <?php echo $colorlinkreposo; ?>;
    content: '';
  }
  #cssmenu ul ul .submenu-button:after {
    top: 15px;
    right: 13px;
  }
  #cssmenu .submenu-button.submenu-opened:after {
    background: <?php echo $colorsobrelink; ?>;
  }
  #cssmenu .submenu-button:before {
    position: absolute;
    top: 19px;
    right: 22px;
    display: block;
    width: 2px;
    height: 8px;
    background: <?php echo $colorlinkreposo; ?>;
    content: '';
  }
  #cssmenu ul ul .submenu-button:before {
    top: 12px;
    right: 16px;
  }
  #cssmenu .submenu-button.submenu-opened:before {
    display: none;
  }
}


