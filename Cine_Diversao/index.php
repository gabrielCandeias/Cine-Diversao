<?php
session_start();
require_once("header.php") ?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="margin: 0">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Imagens/logo.png" class="d-block w-100 imagem_carousel" alt="..."style="height: 100vh;height: 850;object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Compre agora seus ingressos</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="Imagens/Homem-Aranha-cartaz.jpg" class="d-block w-100 imagem_carousel" alt="..." style="height: 100vh;height: 850;object-fit: cover;object-position: 0 20%;">
      
    </div>
    <div class="carousel-item">
      <img src="Imagens/avatar-Cartaz.jpg" class="d-block w-100 imagem_carousel" alt="..." style="height: 100vh;height: 850;object-fit: cover;object-position: 0 30%;">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>
<br><br><br>

<div class="container text-center">
  <div class="container mt-4 mb-4">
    <h1>Filmes em cartaz</h1>
    <h5>Ingressos Disponiveis!!!</h5>
    <p>Exclusivo e com o melhor valor possivel</p>
  </div>
  <br><br>

  <div class="container mb-5">
    <div class="row">

      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/minions2-cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">Minions</h5>
            <p class="card-text">Está é a continuação das aventuras dos Minions, sempre em busca de um líder tirânico. E desta vez, ele é conhecido.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Estreia: 10/04/2022</li>
            <li class="list-group-item">Idade: 16 Anos</li>
            <li class="list-group-item">Pré-Compra disponivel</li>
          </ul>

        </div>
      </div>
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/morbius-cartaz.jpeg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
              <h5 class="card-title">Morbius</h5>
            <p class="card-text">Morbius é um futuro filme norte-americano de super-herói de 2022, baseado no personagem homônimo da Marvel Comics.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Estreia: 2022</li>
            <li class="list-group-item">Idade: 16 Anos</li>
            <li class="list-group-item">Pré-Compra indisponivel</li>
          </ul>

        </div>
      </div>
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/Doutor estranho-Cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">Doutor Estranho 2</h5>
            <p class="card-text">Doutor estranho enfrentará uma nova aventura com novos inimigos e novos conhecimentos, mas agora, ele estará acompanhado.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Em breve</li>
            <li class="list-group-item">Idade: 13 Anos</li>
            <li class="list-group-item">Pré-Compra disponivel</li>
          </ul>

        </div>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/avatar-Cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">Avatar 2</h5>
            <p class="card-text">Após o sucesso do primeiro filme, sendo um dois maiores filmes de bilheteria, avatar está de volta com novas aventuras e desafios</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Em breve</li>
            <li class="list-group-item">Idade: 13 Anos</li>
            <li class="list-group-item">Compra disponivel</li>
          </ul>

        </div>
      </div>
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/Homem-Aranha-cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">Homem-Aranha: Sem Volta para Casa</h5>
            <p class="card-text">O Homem-Aranha precisa lidar com as consequências da sua verdadeira identidade ter sido descoberta.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Estreia: 17/12</li>
            <li class="list-group-item">Idade: 10 Anos</li>
            <li class="list-group-item">Pré-Compra disponivel</li>
          </ul>

        </div>
      </div>
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/red-cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">Red: Crescer é uma Fera</h5>
            <p class="card-text">Turning Red é um futuro filme de amadurecimento e de comédia animado produzido pela Disney e Pixar .<p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Estreia: 2022</li>
            <li class="list-group-item">Idade: Livre</li>
            <li class="list-group-item">Pré Compra disponivel</li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br>



</div>


<?php
require_once("Rodape.php");
?>

</body>

</html>