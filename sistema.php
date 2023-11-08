
<?php
session_start();

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All for one</title>
    <!-- Link To Css -->
    <link rel="stylesheet" href="sistemastyle.css" type="text/css" />
    <!-- Box Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body>
    <!-- Navabar -->
    <header>
      <div class="bx bx-menu" id="menu-icon"></div>
      <ul class="navbar">
        <li><a href="#inicio" class="scroll-smooth">Início</a></li>
        <li><a href="#sobre" class="scroll-smooth">Sobre</a></li>
        <li><a href="#como-ajudar" class="scroll-smooth">Como ajudar?</a></li>
        <li><a href="#Contato" class="scroll-smooth">Contato</a></li>
        <li><a href="sair.php">Sair</a></li>
      </ul>
    </header>
    <!-- inicio -->
    <section class="inicio" id="inicio">
      <div class="inicio-text">
        <span>Bem vindo ao</span>
        <h1>All for one (greater good)</h1>
        <h2>Onde tudo é possível</h2>
        <a href="index.php" class="btn">Join Now</a>
      </div>
      <div class="inicio-img">
        <img src="maos.png" alt="" />
      </div>
    </section>
    <!-- sobre -->
    <section class="sobre" id="sobre">
      <div class="heading">
        <h1>Sobre</h1>
      </div>
      <h1>Bem-vindo ao Nosso Mundo de Parcerias para o Bem Comum!</h1>
      <p>Neste espaço, exploramos a poderosa colaboração entre Organizações Não Governamentais (ONGs) do governo e ONGs pequenas, unindo esforços para tornar o mundo um lugar melhor.</p>
      <br>
      <h2>Quem somos:</h2>
      <p>Somos defensores apaixonados de iniciativas comunitárias e projetos de base. Acreditamos que, juntos, podemos criar um impacto mais significativo e duradouro. Nosso site é uma celebração da cooperação entre ONGs do governo e ONGs pequenas que se unem em prol de causas humanitárias, sociais e ambientais.</p>
      <br>
      <h2>Explorando Parcerias de Impacto:</h2>
      <p>Nossos artigos e recursos fornecem insights detalhados sobre como essas parcerias funcionam, destacando histórias inspiradoras e estudos de caso que demonstram como ONGs pequenas estão sendo apoiadas por ONGs do governo.</p>
      <br>
      <h2>Recursos para o Sucesso:</h2>
      <p>Descubra as ferramentas, financiamentos e programas de treinamento disponíveis para fortalecer o trabalho de ONGs pequenas. Compartilhamos informações valiosas sobre como as ONGs do governo podem desempenhar um papel fundamental no crescimento e capacitação de ONGs menores.</p>
      <br>
      <h2>Construindo um Futuro Sustentável:</h2>
      <p>Nossa visão é construir uma sociedade mais justa, igualitária e sustentável. Acreditamos que parcerias colaborativas entre ONGs de todos os tamanhos são essenciais para alcançar esse objetivo.</p>
      <p>Junte-se a nós nessa jornada de parcerias para o bem comum. Explore nosso conteúdo, inspire-se e compartilhe a mensagem de que, juntos, podemos fazer a diferença.</p>
      <hr> 
      <br>
      <h2 id= "obrigado">Obrigado por visitar nosso site e fazer parte dessa comunidade dedicada à mudança positiva!</h2>
    </section>
  <section>
   
    <ul>
        <h2>Lista de Ongs</h2>
        <table id="ongTable">
          <input id="searchbar" type="text" name="searchbar" placeholder="Pesquisar Ongs..." onkeyup="searchTable()">     
          <tr>
              <th>ONGS</th> 
              <th>CONTATO</th>
              <th>LOCALIDADE</th>      
          </tr>
          <tr>
              <td>ONG TAMANDARÉ</td>
              <td>(81) 98759-2116</td>
              <td>Rua Amaro Jaime S/N - PE</td>
          </tr>
          <tr>
              <td>SOS AMAZÔNIA</td>
              <td>(68) 3223-1036</td>
              <td>Rua Pará, 61 Bairro: Habitasa - AC</td>
          </tr>
          <tr>
              <td>NOVO SERTÃO</td>
              <td>(86) 99498-6598</td>
              <td>Rua Eugenio Costa, 286 - PI</td>
          </tr>
          <tr>
              <td>SIVIS</td>
              <td>(21) 98372-7282</td>
              <td>R. Maurício Caillet, 47 - PR</td>
          </tr>
          <tr>
              <td>AMIGOS DO BEM</td>
              <td>(11) 3019-0107</td>
              <td>Rua Dr. Gabriel de Resende, 122 - SP</td>
          </tr>
          <tr>
              <td>AVOSOS</td>
              <td>(79) 3212-4700</td>
              <td>Rua Leonel Curvelo, 55 - SE</td>
          </tr>
          <tr>
              <td>PLAN INTERNACIONAL</td>
              <td>(11) 4420-8081</td>
              <td>Rua Enxovia, 472 - SP</td>
          </tr>
          <tr>
              <td>INSTITUTO MOINHO CULTURAL</td>
              <td>(67) 3231-8436</td>
              <td>Rua Comendador Domingos Sahib, 300 - MS</td>
          </tr>
          <tr>
              <td>CASA AZUL</td>
              <td>(61) 3359-2095</td>
              <td>QN 315 Conjunto F Lotes 1/4 Samambaia - DF</td>
          </tr>   
          <tr>
              <td>GACC BAHIA</td>
              <td>(71) 3399-2000</td>
              <td>AV. Oceano Pacífico, 210 - BA</td>
          </tr>
          <tr>
              <td>AAMARTE</td>
              <td>(85) 2664-1476</td>
              <td>Rua Francisco das Chagas Pinheiro, 2211 - CE</td>
          </tr>
          <tr>
              <td>ABRACCIA</td>
              <td>(17) 2269-7200</td>
              <td>Rua Visconde de Inhaúma, 1279 - SP</td>
          </tr>
          <tr>
              <td>aBRAÇO</td>
              <td>(75) 2518-8466</td>
              <td>Rua Góes Calmon, 10 - Salvador - BA</td>
          </tr>
          <tr>
              <td>ACACCI</td>
              <td>(28) 2685-5846</td>
              <td>Rua Domingos Póvoa Lemos, 297 - ES</td>
          </tr>
          <tr>
              <td>AFASO</td>
              <td>(51) 3346-7730</td>
              <td>Rua A, 377 - Vila Nossa Senhora de Fátima - RS</td>
          </tr>
          <tr>
              <td>ADEVIC</td>
              <td>(51) 3346-7730</td>
              <td>Rua Rio de Janeiro 360 - RS</td>
          </tr>
          <tr>
              <td>AMALO</td>
              <td>(17) 2585-4381</td>
              <td>Rua Antonio Biscuola, 44 - Louveira - SP</td>
          </tr>
          <tr>
              <td>AMIC</td>
              <td>(35) 2681-8858</td>
              <td>Avenida Francisco Candido Xavier - MG</td>
          </tr>
          <tr>
              <td>AMICATS</td>
              <td>(42) 3569-3513</td>
              <td>Travessa Antônio Lopes Lins - PR</td>
          </tr>
          <tr>
              <td>APAA</td>
              <td>(61) 3597-5415</td>
              <td>Rua Dragões da Independência - DF</td>
          </tr>
          <tr>
              <td>AÇÃO MORADIA</td>
              <td>(35) 2753-0673</td>
              <td>Rua Canoas 181, Bairro Morumbi - MG</td>
          </tr>
          <tr>
              <td>CAMP PINHEIROS</td>
              <td>(18) 2731-9734</td>
              <td>Rua Doutor Virgílio de Carvalho Pinto 588 - SP </td>
          </tr>
                
        </table>
        </ul>
  </section>
    
  <!-- como ajudar -->
    
    <section class="como-ajudar" id="como-ajudar">
      
          <div class="mp-button-container">
            <script src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
              data-preference-id="478848621-5bbd3d2c-0ec5-4267-9bd5-c3521a1df718" 
              data-source="button"
              data-button-label="Apoie com 2R$">
              
            </script>
          </div>

          <div class="mp-button-container">
            <script src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
              data-preference-id="478848621-ace4a607-92d3-4cf8-ae9a-5998956b0dee"
              data-source="button"
              data-button-label="Apoie com 5R$">
              
            </script>
          </div>

          <div class="mp-button-container">
            <script src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
              data-preference-id="478848621-d81d399f-b9a8-4638-921a-4b192d8d1673"
              data-source="button"
              data-button-label="Apoie com 10R$">
              
            </script>
          </div>

          <div class="mp-button-container">
            <script src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
              data-preference-id="478848621-56b9f3c8-ab60-44cd-80e4-09a4825782f1" 
              data-source="button"
              data-button-label="Apoie com 20R$">

            </script>
          </div>  
      </section>

    <!-- Contato -->
   
    <section class="Contato" id="Contato">
      <div class="social">
        <h1>allforone@gmail.com</h1>
        <a href="#"><i class="bx bxl-facebook"></i></a>
        <a href="#"><i class="bx bxl-twitter"></i></a>
        <a href="#"><i class="bx bxl-instagram"></i></a>
        <a href="#"><i class="bx bxl-youtube"></i></a>
      </div>
      <div class="links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms Of Use</a>
        <a href="#">Our Company</a>
      </div>
    </section>

    <!-- Link Js -->
    <script src="script.js"></script>
  </body>
</html>
