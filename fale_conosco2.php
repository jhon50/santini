﻿<!DOCTYPE html>
<html>

<head>
    <title>Santini Topografia – Agrimensura e Geodésia</title>
    <meta name="keywords" content="TOPOGRAFIA RJ : Encontre aqui informações completas sobre: Topografia RJ, Levantamentos Topográficos Planialtimétricos Cadastrais, Locação de Obras, Acompanhamento e Fiscalização / Topografia no Rio de Janeiro, Agrimensura, Possuímos Equipamentos Topógrafos e Profissionais altamente qualificados com mais de 10 anos de experiência. Topografia é a ciência que estuda todos os acidentes geográficos definindo a situação e a localização deles numa área qualquer. Tem a importância de determinar analiticamente as medidas de área e perímetro, localização, orientação, variações no relevo, etc e ainda representá-las graficamente em cartas(ou plantas) topográficas. A topografia é também instrumento fundamental para a implantação(chamadas locações) e acompanhamentos de obras como: projeto viário, edificações, urbanizações(loteamentos), movimento de terra(cubagem de terra), etc. O termo só se aplica a áreas relativamente pequenas, sendo utilizado o termo geodésia quando se fala de áreas maiores. Para isso são usadas coordenadas que podem ser duas distâncias e uma elevação, ou uma distância, uma elevação e uma direção." />
    <meta name="description" content="Fundada em novembro de 1999, a SANTINI TOPOGRAFIA tem sua sede no Rio de Janeiro - RJ e escritórios em São Paulo – SP e Uberlândia – MG." />
    <meta name="robots" context="index,follow">
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
    <?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");

//require("lib/PHPMailer/PHPMailerAutoload.php"); 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->IsSMTP(); 
//$mail->Host = 'smtp.mandrillapp.com'; 
//$mail->Port = 587;
//$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
//$mail->Username = 'johnn_lds@hotmail.com'; // Usuário do servidor SMTP (endereço de email)
//$mail->Password = '52X5OayShKOJY-1q_1ssKQ'; // Senha do servidor SMTP (senha do email usado)
//$mail->SMTPSecure = 'tls';
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $_POST['email']; // Seu e-mail
$mail->Sender = $_POST['email']; // Seu e-mail
$mail->FromName = $_POST['nome']; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@magrasspontapora.com.br', 'Santini');

//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Fale Conosco - Site Santini"; // Assunto da mensagem
$a = $_POST['message'];
$b = $_POST['telefone'];
$c = $a.'<br/>'. 'Telefone do cliente: '.$b;
$mail->Body = $c;
//$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano!';
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado

?>



    <div class="templatemo_lightgrey" id="templatemo_contact">
    	<div class="templatemo_paracenter">
    	<h2>Fale Conosco</h2></div>
        <div class="clear"></div>
        <div class="container">
            <div class="clear"></div>
            <div class="container">
        <div class="row">
          
             <form method="post" action="fale_conosco2.php">
              <div class="col-md-3">
              <div class="form-group">
                <input name="nome" type="text" class="form-control" id="nome" placeholder="Seu Nome" maxlength="30">
              </div>
              <div class="form-group">
                <input name="email" type="text" class="form-control" id="email" placeholder="Seu Email" maxlength="30">
              </div>
              <div class="form-group">
                <input name="telefone" type="text" class="form-control bfh-phone" data-format="dd dddd-ddddd" id="telefone" placeholder="Seu Telefone Ex: (  ) 2323-2323" maxlength="30">
              </div>
              </div>
              <!--<div class="form-group">
                <input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assunto" maxlength="40">
              </div>-->

          <div class="col-md-9">
            <div class="txtarea">
              <textarea name="message" rows="10" class="form-control" id="message"></textarea>
            </div>
          </div>
              <div><input type="submit" class="btn btn-primary" value="submit"></div>
                 <?php
            if (!($a === NULL)) {
echo "E-mail enviado com sucesso!";
} else if(isset($body)) {
echo "Não foi possível enviar o e-mail.
 
";
echo "Informações do erro: 
" . $mail->ErrorInfo;
}
        ?>
            </form>
         
          <!--<div class="col-md-9">
            <div class="txtarea">
              <textarea name="message" rows="10" class="form-control" id="message"></textarea>
            </div>
          </div>-->
            
        </div>
      </div>

            <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="templatemo_maps">
              <div class="fluid-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3094.9120620187264!2d-42.62751073587554!3d-22.709968104930695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99d98bbed0cdb5%3A0x7af357a6b72bd9da!2sR.+Get%C3%BAlio+Vargas%2C+42+-+Centro%2C+Rio+Bonito+-+RJ%2C+28800-000!5e0!3m2!1sen!2sbr!4v1459863709163" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
  </div>




<!--     <div class="templatemo_portfolio" id="templatemo_portfolio">
    <form method="post" action="fale_conosco2.php">
    <label> Nome: </label>
    <input name="nome" id="nome" type="text" />
    <br />
    <label>Email: </label>
    <input type="text" name="email" id="email" />
    <br />
    <label> Mensagem: </label>
    <br />
    <textarea name="message" id="message" rows="15" cols="40"></textarea><br />
    <br />
    <br />
    <input type="submit" value="Enviar" />
        <?php
            if ($enviado) {
echo "E-mail enviado com sucesso!";
} else if(isset($body)) {
echo "Não foi possível enviar o e-mail.
 
";
echo "Informações do erro: 
" . $mail->ErrorInfo;
}
        ?>
    </form>
         </div>-->
    <!--Our Portfolio End-->
    <div class="clear"></div>
    <!--Our Blog Start-->

    <!--Our Blog End-->
    <!--Our Partner Start-->

    <!--Our Partner End-->
    <!--Our Client Start-->
    <div class="templatemo_reasonbg">
        <h2>Clientes</h2>
        <div class="container">
            <div class="col-xs-11 templatemo_col12 templatemo_clientwrapper">
                <div class="templatemo_clientimage">
                    <img class="masterTooltip" title="•	Metro de Ipanema Lote 2 – Abr/04 à Jul/11
•	Substituição Gerador Vapor Usina Angra 1 – Mar/08 e Fev/09.
•	Reabilitação da Praia de Sepetiba – Mar/10 à Abr/12
•	Adutora do Comperj – Itaboraí – RJ – Mar/10 à Ago/11.
•	Edificio residencial Murano em Niterói/RJ – Jul/11 à Jun/12.
•	Estação Multimodal Maracanã – Mar/14 à jun/14
•	Arco Metálico – Jul/13 à Set/14.
•	Arco Metropolitano – Jul/13 à Ago/14.
•	Expansão da Estação do metrô Gal. Osório – Jul/11 à presente data.
•	Estaleiro e Base Naval – Dez/11 à presente data.
•	Projeto Fábrica de escolas – Set/14 à presente data.
•	Aeroporto Galeão – Jun/14 à presente data.
•	Duplicação do Túnel do Joá Jun/14 à Jul/15.
•	Porto Atlântico – Mai/14 à presente data.
•	Usina Termoelétrica Norte Fluminense – Ago/01 à Jan/04
•	Terraplenagem do Comperj (Petrobrás) – Abr/08 à Dez/08"
                        src="images/client/1.jpg" alt="client image 1" />
                    <div class="clear"></div>
                </div>
                <!--<div class="templatemo_clientimage">
                    <img src="images/client/2.jpg" alt="client image 2" />
                    <div class="clear"></div>
                </div>-->
              <!--  <div class="templatemo_clientimage">
                    <img src="images/client/3.jpg" alt="client image 3" />
                    <div class="clear"></div>
                </div>-->
                <div class="templatemo_clientimage next templatemo_marginleft50">
                    <img class="masterTooltip" title="•	Metro de Copacabana – Nov/99 à Ago/04
•	Usina Termoelétrica Macaé Marchant  Macaé RJ – Mai/01 à Fev/02
•	Usina Termelétrica de Tubarão – Vitória ES – Dez/04 à Jan/07
•	Alto Forno 03 da CST – Vitória ES – Dez/04 à jan/07
•	Usina Nuclear Angra 3 – Dez/05 à Fev/08
•	Ampliação  CENPES Ilha  Fundão (Petrobrás) – Dez/06 à Fev/08
•	Tunel   Gasduc III 4,0 km (Petrobrás)  – Mai/08 à Out/09
•	Drenagem São João de Meriti – Mai/11 à Out/12
•	Transcarioca – Dez/11 à Jun/12
•	Pier do Cais Libra – Out/12 à Out/13.
•	Usina Termoelétrica Norte Fluminense – Ago/01 à Jan/04"
                        src="images/client/4.jpg" alt="client image 4" />
                    <div class="clear"></div>

                </div>

             <!--   <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/5.jpg" title="•	Metro Zona Sul linha 4 – Abr/12 à presente data.
                        •	Metro Ipanema Barra – Barra da Tijuca – Abr/10 à presente data." alt="client image 5" />
                    <div class="clear"></div>
                </div>-->

                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/7.jpg" title="•	Implantação do Porto da CSA – Itaguai – Jun/07 à Fev/09
•	Cidade da Música – Barra RJ – Jun/07 à Dez/08
•	Metro Linha 1A – São Cristovão – Dez/08 à Mai/10
•	Arco Metropolitano – Nova Iguaçu/RJ – Fev/10 à presente data.
•	Gasoduto Plangás – Duque de Caxias/RJ – Nov/09 à Jun/11
•	Duplicação da Estrada do Mato Alto – Set/10 à Ago/12.
•	Cidade da Polícia – Ago/12 à Nov/12.
•	FGV – Jun/12 à Jun/13.
•	UHOS Comperj – Jan/14 à presente data.
"
                        alt="client image 5" />
                    <div class="clear"></div>
                </div>

                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/8.jpg" title="•	Duplicação da Rodovia Fernão Dias – Jan/00 à Dez/01
•	Depósito tubos – Gasene (Petrobrás)– Fev/07 à Jul/07
•	Manguinhos fase II – Dez/10 à presente data.
•	Reabilitação de Canais de Itaipava - Jun/12 à Mar/14
•	BRT Avenida das Américas – Jul/14 à presente data.
"
                        alt="client image 5" />
                    <div class="clear"></div>
                </div>

                <!--<div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/9.jpg" title="•	Fiscalização do Shopping Jardim Guadalupe no Rio de Janeiro/RJ – Mai/10 à Nov/11.
•	Novartis Biociências – Fev/12 à Fev/15.
"
                        alt="client image 5" />
                    <div class="clear"></div>
                </div>-->

<!--                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/10.jpg" title="•	Ampliação CENPES Ilha Fundão (Petrobrás) – Fev/08 à Set/10." alt="client image 5" />
                    <div class="clear"></div>
                </div>

                <div class="templatemo_clientimage next">
                    <img src="images/client/11.jpg" alt="client image 5" />
                    <div class="clear"></div>
                </div>-->

                <!--<div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/12.jpg" title="•	Shopping Metropolitano no Rio de Janeiro/RJ – Abr/12 à Dez/13." alt="client image 5" />
                    <div class="clear"></div>
                </div>-->

              <!--  <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/13.jpg" title="•	Ampliação CENPES Ilha Fundão (Petrobrás) – Fev/08 à Set/10.
                        •	Terraplenagem do Comperj (Petrobrás) – Abr/08 à Dez/08" alt="client image 5" />
                    <div class="clear"></div>
                </div>-->

                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/14.jpg" title="•	Hospital das Américas – Jul/11 à fev/15.
•	Construção dos prédios residenciais Capri, Duo, Seasons e Metropolitan em Salvador/BA – Fev/12 à Mai/14
" alt="client image 5" />
                    <div class="clear"></div>
                </div>

                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/15.jpg" title="•	Fiscalização e Implantação das  obras Implantação do anel viário, incluindo elaboração de projeto executivo – Abr/07 à Fev/10" alt="client image 5" />
                    <div class="clear"></div>
                </div>

                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/16.jpg" title="•	Pontal Oceânico – Jul/14 à presente data." alt="client image 5" />
                    <div class="clear"></div>
                </div>

                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/17.jpg" title="•	Confidere II no Rio de Janeiro/RJ - Jun/12 à Dez/13.
•	Infoglobo – Jan/13 à presente data
•	REC Sapucaí – Out/13 à jun/14.
•	Barão de Tefé – Nov/13 à presente data.
•	1° de Março – Set/14 à presente data.
•	Pátio da Marítima – Out/15 à presente data.
" alt="client image 5" />
                    <div class="clear"></div>                                                                                                           
                </div>

                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/18.jpg" title="•	Duplicação Túnel Ferrovia do Aço – Jeceaba/MG – Fev/10 à Set/11." alt="client image 5" />
                    <div class="clear"></div>
                </div>

                <!--<div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/19.jpg" title="•	Implantação do Coqueria da CSA  – Itaguai – Fev/08 à Mar/09" alt="client image 5" />
                    <div class="clear"></div>
                </div>-->

                <!--<div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/20.jpg" title="•	Usina Termoelétrica Norte Fluminense – Ago/01 à Jan/04" alt="client image 5" />
                    <div class="clear"></div>
                </div>-->

                 <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/21.jpg" title="•	Fiscalização e acompanhamento das  obras de melhoria das rodovias do lote 20 com extensão total de 510 km, incluindo processamento em escritório dos dados levantados em campo, medições dos serviços, projetos de recuperação de taludes, acompanhamento da implantação de trevos e retornos na SP 280 (Castelo Branco) Jan/02 à Abr/08 " alt="client image 5" />
                    <div class="clear"></div>
                </div>

                 <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/22.jpg" title="•	Fiscalização da montagem da cobertura metálica – Abr/12 à abr/13." alt="client image 5" />
                    <div class="clear"></div>
                </div>

                 <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/23.jpg" title="•	Museu da Imagem e do Som – Set/12 à presente data." alt="client image 5" />
                    <div class="clear"></div>
                </div>
                  <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/24.jpg" title="•  Fiscalização das obras de melhoria e implantação das praças de Pedágio da Rodovia Tamoios SP-99.
Jan/16 à presente data." alt="client image 5" />
                    <div class="clear"></div>
                </div>
                
                <div class="templatemo_clientimage next">
                    <img class="masterTooltip" src="images/client/25.jpg" title="•	Fiscalização e acompanhamento das obras de arte especiais, duplicações e melhorias na Rodovia BR-050 - Trecho Delta/MG - Cristalina/GO.
Jul/15 à presente data." alt="client image 5" />
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

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
                <span class="left col-xs-1 fa fa-map-marker"></span>
                <span class="right col-xs-11">Escritório de Apoio: Rua Cotoxó, 303 Sala 102 Vila Pompéia São Paulo - SP</span>
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
