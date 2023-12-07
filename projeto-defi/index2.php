<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    
    
    <title>Telecall</title>
</head>
<body>
    <div>
        
        <header id="header">
            <a href="index.php"><img id="logo-img" src="./img/logo-telecall.png" alt="logo"></a>

            <nav id="nav">
             <!-- <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
                <span id="hamburger"></span>
              </button> -->
              <ul id="menu" role="menu">    
                
                <li><a href="https://telecall.com/internet/" target="_blank">Internet</a></li>
                <li><a href="https://telecall.com/telefonia/" target="_blank">Telefonia</a></li>
                <li><a href="https://telecall.com/rede-e-infraestrutura/" target="_blank">Rede e Infraestrutura</a></li>
                <li><a href="https://telecall.com/mobilidade/" target="_blank">Mobilidade</a></li>
                <li><a href="https://telecall.com/eventos/" target="_blank">Eventos</a></li>
                <li><a href="https://telecall.com/outras-solucoes/" target="_blank">Outras</a></li>
              
                
            
          
                
              </ul>
            </nav>
          </header>
         
            
    </div>
    <div class="button">
        <div class="ball"></div>
    </div>
   
    <script>
        document.querySelector('.ball').addEventListener('click', (e)=>{
            e.target.classList.toggle('ball-move');
            document.body.classList.toggle('dark');
        });
    </script>
    <a href="./links/Apresentação.pdf" target="_blank">
        <div class="img">
            <img id="img-div" src="./img/img-main.png"/>
        </div>
    </a>
    
    <main>
        <div class="produtos">
            <div class="segurança">
                
                <a class="links-produtos" href="./2fa/2fa.html" target="_blank">
                    <div class="vermelho">
                        <h4>Para Sua Segurança</h4>
                    </div>
                    <div class="branco">
                        <p>Segurança em dobro para você e seus clientes</p>
                        <div id="fa-div">
                            <img id="fa" src="./img/2fa-em-png.png" alt="2fa">
                        </div>
                        <p>Quem usa?</p>
                        <div class="qu-div">
                            <img id="qu" src="./img/quem-usa-2fa.png" alt="quem usa">
                        </div>
                    </div>
                </a>
               
            </div>

            <div class="links-produtos" id="privacidade">
                <a href="./sms/sms.html" target="_blank">
                    <div class="vermelho">
                        <h4>Para Sua Facilidade</h4>
                    </div>
                    <div class="branco">
                        <p>SMS é a forma mais rápida, eficiente e de baixo custo para se comunicar com seus clientes</p>
                        <img id="verified" src="./img/verified-img.png" alt="verified">
                    </div>
                </a>         
            </div>
        </div>
        <div class="produtos2">
            <a class="links-produtos" href="./Número Máscara/numero.html" target="_blank">
                <div class="conexao">
                    <div class="vermelho">
                        <h4>Para Sua Facilidade</h4>
                    </div>
                    <div class="branco">
                        <p>Chamadas verificadas e livres de spam.</p>
                        <p> Oferece uma experiência mais segura e profissional</p>
                        <div class="qu-div">
                            <img id="faci" src="./img/mascara-img-m.png" alt="">
                        </div>
                    </div>
                </div>
            </a>
            <div id="facilidade">
                
                <a class="links-produtos" href="./verified/verified.html" target="_blank">
                    <div class="vermelho">
                        <h4>Para Sua Empresa</h4>
                    </div>
                    
                    <div class="branco">
                        <p>Proteja identidades profissionais</p>
                        <p>Desde 2017, as chamadas telefônicas de
                        spam no Brasil aumentaram 141%.</p>
                        <div class="qu-div">
                            <img id="calls" src="./img/calls.png" alt="calls">
                        </div>
                    
                    </div>
                </a>       
            </div>
        </div>
    </main>
    <div class="img">
        <img id="mapa" src="./img/mapa.png" alt="">
    </div>
    <footer>
        <div class="footer-left">
            <img id="footer-logo" src="./img/favicon.png" alt="logo">
            <div id="footer-r">
                <ul id="res">
                    <li>Link Dedicado</li>
                    <li>Banda Larga</li>
                    <li>Wi-Fi</li>
                    <li>Serviços para Eventos</li>
                    <li>Eventos Telecall</li>
                    <li>PABX IP Virtual</li>
                    <li>SIP TRUNK</li>
                </ul>

            </div> 

        </div>
        <div class="footer-inicio">
            <div>
                <img id="logo-footer" src="./img/favicon.png" alt="">
            </div>  
                   
            <div id="internet">
                <h2>Internet</h2>
                <p>Link Dedicado</p>
                <p>Banda Larga</p>
                <p>Wi-Fi</p>  
            </div>
            
            <div id="telefonia">
                <h2>Telefonia</h2>
                <p>PABX IP Virtual</p>
                <p>E1</p>
                <p>SIP TRUNK</p>
                <p>Números 0800 e 40XX</p>    
            </div>
            <div id="rede">
                <h2>Rede e Infraestrutura</h2>
                <p>Ponto-a-Ponto</p>
                <p>MPLS</p>
                <p>Fibra Apagada e Dutos/p>
                <p>Co-location</p>                    
            </div>           
        </div>
    </footer>
</body>
</html>