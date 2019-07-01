<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;" />
		<title>Los serenos</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <style>
            body {
                background-color: #DDC09B ;
                width: auto;
                min-height: 91vh;
                transition: height 999999s;
                padding: 0px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding-bottom: 30px;
            }
            * {
                color: #2E358E;
                font-family: 'Oswald', sans-serif;
                letter-spacing: 1px;
            }
            h1 {
                font-size: 30px;
                text-transform: uppercase;
                font-weight: 600;
                letter-spacing: 4px;
            }
            p  {
                font-size: 22px;
                letter-spacing: 4px;
                line-height: 40px;
            }
            .splash__button {
                width: 100%;
                margin: 0 auto;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 60px;
                margin-bottom: 40px;
            }
            .splash__button .button {
                color: #2E358E;
                font-size: 23px;
                letter-spacing: 0;
                font-weight: 600;
                position: relative;
                background-color: #FFFFFF;
                border: 2.75px solid #2E358E;
                background-color: white;
                width: 216px;
                height: 55px;
                padding: 0px;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                text-decoration: none;
                font-style: italic;
            }

            .splash__button .button span {
                background-color: #2E358E;
                width: 168px;
                position: absolute;
                height: 13px;
                left: 21px;
                bottom: -15px;
            }

            .splash__button .button:hover {
                color: #BE1E2D ;
                border: 2.75px solid #BE1E2D ;
            }

            .splash__button .button:hover span {
                background-color: #BE1E2D ;
            }
            .logo {
                width: 200px;
                height: auto;
                margin-top: 50px;
            }

            #header_wrapper {
                text-align: center;
            }
            #body_content_inner {
                text-align: center;
                text-transform: uppercase;
                font-weight: 500;
            }
            .body_content {
                font-family: 'Oswald', sans-serif;
                font-weight: 300 ;
                text-transform: none;
                letter-spacing: 1px;
                margin: 0;
            }
            .body_content span {
                font-family: 'Oswald', sans-serif;
                font-weight: 500 ;
                text-transform: capitalize;
                letter-spacing: 3px;
            }
            #credit {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
            }
            .footer__tel {
                display: flex;
                padding-left: 20px;
            }
            .footer__tel a {
                padding-left: 3px;
            }
        </style>
	</head>
	<body marginwidth="0" topmargin="0" marginheight="0" offset="0">
		<div id="wrapper">
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
				<tr>
					<td align="center" valign="top">
                        <div class="logo">
                            <img src="http://localhost:8888/cafe-los-serenos/wp-content/themes/cafe-los-serenos-theme//images/logo.svg" alt="">
                        </div>
						<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container">
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_header">
										<tr>
											<td id="header_wrapper">
												<h1> ¡Gracias tu pedido! </h1>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
										<tr>
											<td valign="top" id="body_content">
												<table border="0" cellpadding="20" cellspacing="0" width="100%">
													<tr>
														<td valign="top">
															<div id="body_content_inner">
                                                                <p>Su orden ha sido recibida y ahora está siendo procesada.
                                                                Los detalles de su orden se muestran a continuación para su referencia: </p>

                                                                <p class="body_content">Tipo de Pedido: <span> Espresso</span> </p>
                                                                <p class="body_content">¿Cuanto cafe?: <span> 1KG</span> </p>
                                                                <p class="body_content">Costo: <span> 400 </span> + costo de envio</p>
                                                                <p class="body_content total">Total a pagar: <span>$435</span> </p>

                                                                <div class="splash__button">
                                                                    <a class="button" href="http://localhost:8888/cafe-los-serenos/haz-tu-pedido" target="_blank">  Ir al sitio<span></span> </a>
                                                                </div>

                                                            </div>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!-- End Body -->
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<!-- Footer -->
									<table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer">
										<tr>
											<td valign="top">
												<table border="0" cellpadding="10" cellspacing="0" width="100%">
													<tr>
														<td colspan="2" valign="middle" id="credit">
															<a href="mailto:info@cafelosserenos.com">info@cafelosserenos.com</a>
                                                            <div class="footer__tel">Whatsapp:
                                                                <a href="tel:5540957548">55 4095 7548</a>
                                                                /
                                                                <a href="tel:5555012017"> 55 5501 2017</a></a>
                                                            </div>

														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!-- End Footer -->
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
