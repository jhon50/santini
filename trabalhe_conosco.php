<!DOCTYPE html>
<html>

<head>
    <title>Santini Topografia</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- 
    Smoothy Template 
    http://www.templatemo.com/tm-396-smoothy
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">
    <link href="css/toogle.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/templatemo_misc.css">

    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script>
    <script type="text/JavaScript" src="js/toogle.js"></script>
    <script type="text/JavaScript" src="js/prefixfree.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery(this).toggleClass('active');
        jQuery('.toogle-menu ul').toggleClass('active');
 
        e.preventDefault();
    });
});
    </script>
    <!-- inicio script tooltip-->
    <script type="text/javascript">
        $(document).ready(function () {
            // Tooltip only Text
            $('.masterTooltip').hover(function () {
                // Hover over code
                var title = $(this).attr('title');
                $(this).data('tipText', title).removeAttr('title');
                $('<p class="tooltip2"></p>')
                .text(title)
                .appendTo('body')
                .fadeIn('slow');
            }, function () {
                // Hover out code
                $(this).attr('title', $(this).data('tipText'));
                $('.tooltip2').remove();
            }).mousemove(function (e) {
                var mousex = e.pageX + 20; //Get X coordinates
                var mousey = e.pageY + 10; //Get Y coordinates
                $('.tooltip2')
                .css({ top: mousey, left: mousex })
            });
        });
    </script>
    <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        /* Important styles */
        
        #toggle {
            display: block;
            width: 28px;
            height: 30px;
            margin: 30px auto 10px;
        }
        
        #toggle span:after,
        #toggle span:before {
            content: "";
            position: absolute;
            left: 0;
            top: -9px;
        }
        
        #toggle span:after {
            top: 9px;
        }
        
        #toggle span {
            position: relative;
            display: block;
        }
        
        #toggle span,
        #toggle span:after,
        #toggle span:before {
            width: 100%;
            height: 5px;
            background-color: #888;
            transition: all 0.3s;
            backface-visibility: hidden;
            border-radius: 2px;
        }
        /* on activation */
        
        #toggle.on span {
            background-color: transparent;
        }
        
        #toggle.on span:before {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        #toggle.on span:after {
            transform: rotate(-45deg) translate(7px, -8px);
        }
        
        #toggle.on + #menu {
            opacity: 1;
            visibility: visible;
        }
        /* menu appearance*/
        
        #menu {
            position: relative;
            color: #999;
            width: 200px;
            padding: 10px;
            margin: auto;
            font-family: "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", "Trebuchet MS", Verdana, "Verdana Ref", sans-serif;
            text-align: center;
            border-radius: 4px;
            background: white;
            box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05);
            /* just for this demo */
            opacity: 0;
            visibility: hidden;
            transition: opacity .4s;
        }
        
        #menu:after {
            position: absolute;
            top: -15px;
            left: 95px;
            content: "";
            display: block;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 20px solid white;
        }
        
        ul,
        li,
        li a {
            list-style: none;
            display: block;
            margin: 0;
            padding: 0;
        }
        
        li a {
            padding: 5px;
            color: #888;
            text-decoration: none;
            transition: all .2s;
        }
        
        li a:hover,
        li a:focus {
            background: #1ABC9C;
            color: #fff;
        }
        /* demo styles */
    </style>


    <!-- fim script tooltip-->

    <!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->


    <script type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "templatemo_flicker", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })
    </script>
</head>

<body>
    <header>
        <!-- start menu -->
        <div id="templatemo_home">
            <div class="templatemo_top" style="box-shadow: -2px -2px 7px #000000">
                <div class="container templatemo_container">
                    <div class="row">
                        <div class="right" style="position:relative;bottom:-5px;">
                            <span class="left fa fa-phone" style="position: relative; right: 10px; top: 5px;color: #FFF;"></span>
                            <span class="right" style="font-size:20px;color: #FFF;font-family:arial;">(21) 2275-2131</span>
                            <div class="clear height10"></div>
                            <div class="right">
                                <a href="#">
                                    <div class="fa fa-google-plus soc"></div>
                                </a>
                                <a href="#">
                                    <div class="fa fa-linkedin soc"></div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-9 col-md-9">
                            <div class="col-sm-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="images/logo.jpg" style="width:100%;position:relative;top:10px;left:-10px;box-shadow: 1px 1px 2px #000000" alt=""></a>
                                </div>
                                <div class="tog" style="position:absolute;left:-10%;">
                                    <a href="#menu" id="toggle"><span></span></a>
                                    <div id="menu">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">Sobre Nós</a></li>
                                            <li><a href="escolha_projetos.html">Obras Realizadas</a></li>
                                            <li><a href="trabalhe_conosco.php">Trabalhe Conosco</a></li>
                                            <li><a href="fale_conosco2.php">Contato</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="top-menu">
                                <nav class="mainMenu responsive-menu">
                                    <ul class="nav">
                                        <li><a class="" style="color:#ffffff;font-size:12px;height:100px;top:-0.5px;text-shadow: 2px 2px 3px rgba(0, 0, 0, 1);"
                                            href="index.html">Home</a></li>
                                        <li><a class="" style="color:#ffffff;font-size:12px;height:100px;top:-0.5px;text-shadow: 2px 2px 3px rgba(0, 0, 0, 1);"
                                            href="about.html">Sobre Nós</a></li>
                                        <!--<li><a class="menu" href="#templatemo_portfolio">Portfolio</a></li>-->
                                        <li><a class="menu" style="color:#ffffff;font-size:12px;height:100px;top:-0.5px;text-shadow: 2px 2px 3px rgba(0, 0, 0, 1);"
                                            href="escolha_projetos.html">Obras Realizadas</a>
                                            <ul class="sub-menu">
                                                <li><a style="color:#ffffff;font-size:12px" href="obras_pesadas.html">Construções Pesadas</a></li>
                                                <li><a style="color:#ffffff;font-size:12px" href="edificacoes.html">Edificações</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menu" style="color:#ffffff;font-size:12px;height:100px;top:-0.5px;text-shadow: 2px 2px 3px rgba(0, 0, 0, 1);"
                                            href="trabalhe_conosco.php">Trabalhe Conosco</a></li>
                                        <li><a class="menu" style="color:#ffffff;font-size:12px;height:100px;top:-0.5px;text-shadow: 2px 2px 3px rgba(0, 0, 0, 1);"
                                            href="fale_conosco2.php">Contato</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <script src="js/index.js"></script>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!-- end menu -->
       </header>
    <div class="clear"></div>
  
    <div class="clear"></div>
    <!--Our Portfolio Start-->
   
    <!--Our Portfolio End-->
    <div class="clear"></div>
    <!--Our Blog Start-->

    <!--Our Blog End-->
    <!--Our Partner Start-->

    <!--Our Partner End-->
    <!--Our Client Start-->
    <div class="templatemo_lightgrey">
    <div class="container">
        <h2>Trabalhe Conosco!</h2>
        <br/>
        <p>Envie agora mesmo seu currículo.</p>
        <br/>
        <br/>
       <div>
    </div>
    <div class="col-md-4" style="position:relative;right:-34%;">
    <form action="trabalhe_conosco.php" method="POST" enctype="multipart/form-data">
                <input style="overflow:hidden;" type="file" name="file">
                <br/>          
                <input class="form-control" placeholder="Seu Nome" type="text" name="nome" id="nome">
                <br/>
                <br/>
                <input class="form-control" placeholder="Sua Função" type="text" name="job" id="job">
                <br/>
                <br/>
                <input class="btn btn-primary" type="submit" value="Enviar">
                <?php echo $msg; ?>
            </form>
    </div>        
    </div>
    </div>
    <div class="templatemo_reasonbg_rh">
    
    </div>
    <div class="clear"></div>
    <!--Our Client End-->
    <!--Contact Start -->
    <!-- <div class="templatemo_lightgrey" id="templatemo_contact">
        <div class="templatemo_paracenter">
            <h2>Contact us</h2>
        </div>
        <div class="clear"></div>
        <div class="container">
            <div class="templatemo_paracenter">
                Pellentesque aliquam in risus eu ultrices. Suspendisse id interdum nibh. Etiam vel mattis augue, a vestibulum arcu. Nam rutrum diam dolor, eu vehicula nisl tincidunt non. Fusce tincidunt id justo eu tempor. Phasellus sit amet ante lobortis, mattis sapien id, dictum ipsum.
            </div>
            <div class="clear"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="templatemo_maps">
                            <div class="fluid-wrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12084.143170610365!2d-73.96770330299584!3d40.783227259584116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral+Park!5e0!3m2!1sen!2s!4v1391601567888"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <form role="form">
                                    <div class="form-group">
                                        <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name" maxlength="30">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" maxlength="30">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject" maxlength="40">
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-primary">Send Message</button></div>
                                </form>
                            </div>
                            <div class="col-md-9">
                                <div class="txtarea">
                                    <textarea name="message" rows="10" class="form-control" id="message"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!--Contact End-->
    <!--Footer Start-->
    <div class="templatemo_footer">
        <div class="container">
           <!-- <div class="col-xs-6 col-sm-6 col-md-2 templatemo_col12">
                <h2>Sobre a Santini</h2>
                <p>Informações sobre a empresa</p>
            </div>-->
            
            <div class="col-xs-6 col-sm-6 col-md-4 templatemo_col12">
                <h2>Contato</h2>
                <div id="templatemo_flicker">
                    <div class="clear height10"></div>
                    <span class="left col-xs-1 fa fa-phone"></span>
                    <span class="right col-xs-11">(21) 2275-2131</span>
                    <div class="clear height10"></div>
                    <span class="left col-xs-1 fa fa-globe"></span>
                    <span class="right col-xs-11">www.santinitopografia.com.br</span>
                    <div class="clear height10"></div>
                    <span class="left col-xs-1 fa fa-envelope"></span>
                    <span class="right col-xs-11">contato@santinitopografia.com.br</span>
                    <br style="clear: left" />
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 templatemo_col12">
                <h2>Localização</h2>
                <span class="left col-xs-1 fa fa-map-marker"></span>
                <span class="right col-xs-11">Sede: Rua Getúlio Vargas, 42 - Sala 201 - Centro - Rio Bonito - RJ</span>
                <div class="clear height10"></div>
                <span class="left col-xs-1 fa fa-map-marker"></span>
                <span class="right col-xs-11">Escritório de Apoio: Av, Nossa Senhora de Copacabna, 195 - Sala 908 - Copacabana - Rio de Janeiro - RJ</span>
                <div class="clear height10"></div>
                <div class="clear"></div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 templatemo_col12">
                <h2 class="text-hide">Localização</h2>
                <h2 class="text-hide">Localização</h2>
                <span class="left col-xs-1 fa fa-map-marker"></span>
                <span class="right col-xs-11">Escritório de Apoio: Rua Professora Maria Alves Castilho, 1592 - Santa Mônica - Uberlândia - MG   CEP: 38408-260 </span>
                <div class="clear height10"></div>
                <!--<span class="left col-xs-1 fa fa-map-marker"></span>-->
                <!--<span class="right col-xs-11">Escritório de Apoio: Av. Nossa Senhora de Copacabna, 195 - Sala 908 - Copacabana - Rio de Janeiro - RJ</span>-->
                <div class="clear height10"></div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--Footer End-->
    <!-- Bottom Start -->
    <div class="templatemo_bottom">
        <div class="container">
            <div class="row">
                <div class="left">
                    <span>Copyright © 2015 <a href="#">Santini Topografia</a></span>
                </div>
                <div class="right">
                    <a href="#">
                        <div class="fa fa-google-plus soc"></div>
                    </a>
                    <a href="#">
                        <div class="fa fa-linkedin soc"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script type="text/javascript">
        $(function () {
            var default_view = 'grid';
            if ($.cookie('view') !== 'undefined') {
                $.cookie('view', default_view, { expires: 7, path: '/' });
            }
            function get_grid() {
                $('.list').removeClass('list-active');
                $('.grid').addClass('grid-active');
                $('.prod-cnt').animate({ opacity: 0 }, function () {
                    $('.prod-cnt').removeClass('dbox-list');
                    $('.prod-cnt').addClass('dbox');
                    $('.prod-cnt').stop().animate({ opacity: 1 });
                });
            }
            function get_list() {
                $('.grid').removeClass('grid-active');
                $('.list').addClass('list-active');
                $('.prod-cnt').animate({ opacity: 0 }, function () {
                    $('.prod-cnt').removeClass('dbox');
                    $('.prod-cnt').addClass('dbox-list');
                    $('.prod-cnt').stop().animate({ opacity: 1 });
                });
            }
            if ($.cookie('view') == 'list') {
                $('.grid').removeClass('grid-active');
                $('.list').addClass('list-active');
                $('.prod-cnt').animate({ opacity: 0 });
                $('.prod-cnt').removeClass('dbox');
                $('.prod-cnt').addClass('dbox-list');
                $('.prod-cnt').stop().animate({ opacity: 1 });
            }

            if ($.cookie('view') == 'grid') {
                $('.list').removeClass('list-active');
                $('.grid').addClass('grid-active');
                $('.prod-cnt').animate({ opacity: 0 });
                $('.prod-cnt').removeClass('dboxlist');
                $('.prod-cnt').addClass('dbox');
                $('.prod-cnt').stop().animate({ opacity: 1 });
            }

            $('#list').click(function () {
                $.cookie('view', 'list');
                get_list()
            });

            $('#grid').click(function () {
                $.cookie('view', 'grid');
                get_grid();
            });

            /* filter */
            $('.menuSwitch ul li').click(function () {
                var CategoryID = $(this).attr('category');
                $('.menuSwitch ul li').removeClass('cat-active');
                $(this).addClass('cat-active');

                $('.prod-cnt').each(function () {
                    if (($(this).hasClass(CategoryID)) == false) {
                        $(this).css({ 'display': 'none' });
                    };
                });
                $('.' + CategoryID).fadeIn();

            });
        });
    </script>
    <script src="js/jquery.singlePageNav.js"></script>

    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider({
                prevText: '',
                nextText: '',
                controlNav: false,
            });
        });
    </script>
    <script>
        $(document).ready(function () {

            // hide #back-top first
            $("#back-top").hide();

            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('#back-top').fadeIn();
                    } else {
                        $('#back-top').fadeOut();
                    }
                });

                // scroll body to 0px on click
                $('#back-top a').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });

        });
    </script>
    <script type="text/javascript">
      <!--
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block') {
            e.style.display = 'none';
            $('#togg').text('show footer');
        }
        else {
            e.style.display = 'block';
            $('#togg').text('hide footer');
        }
    }
    //-->
    </script>
    <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <script type="text/javascript">
        $(function () {
            $('a[href*=#]:not([href=#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    <script src="js/stickUp.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        //initiating jQuery
        jQuery(function ($) {
            $(document).ready(function () {
                //enabling stickUp on the '.navbar-wrapper' class
                $('.mWrapper').stickUp();
            });
        });
    </script>
    <script>
        $('a.menu').click(function () {
            $('a.menu').removeClass("active");
            $(this).addClass("active");
        });
    </script>

    <script> <!-- scroll to specific id when click on menu -->
    // Cache selectors
    var lastId,
        topMenu = $("#top-menu"),
        topMenuHeight = topMenu.outerHeight() + 15,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function (e) {
        var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
        $('html, body').stop().animate({
            scrollTop: offsetTop
        }, 300);
        e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function () {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";

        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
              .parent().removeClass("active")
              .end().filter("[href=#" + id + "]").parent().addClass("active");
        }
    });
    </script>
    <!-- templatemo 396 smoothy -->
    <!-- 
    Free Template by templatemo
    http://www.templatemo.com
-->
</body>
</html>
