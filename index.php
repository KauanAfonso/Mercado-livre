<?php


require "Cart.php";
require "Product.php";

session_start();


$products = [
    1 => ['product_id' => 1, 'name' => 'Samsung A24', 'price' => 1499, 'quantity' => 1],
    2 => ['product_id' => 2, 'name' => 'Iphone 14', 'price' => 9999, 'quantity' => 1],
    3 => ['product_id' => 3, 'name' => 'Lenovo a15', 'price' => 3499, 'quantity' => 1],
    4 => ['product_id' => 4, 'name' => 'Samsung S22', 'price' => 4499, 'quantity' => 1],
];

if (isset($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    $productInfo = $products[$id] ?? null;

    if ($productInfo) {
        $product = new Product;
        $product->setProductId($productInfo['product_id']);
        $product->setName($productInfo['name']);
        $product->setPrice($productInfo['price']);
        $product->setQuantity($productInfo['quantity']);

        $cart = new Cart;
        $cart->add($product);
    }
}

// var_dump($_SESSION['cart'] ?? []);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Mercado Livre</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script.js"></script>
</head>

<body>

  <header>

    <nav>

      <img class="logo" src="merc.png" alt="imagem do logo">

      <div class="navEsquerda">
        <img src="localizacao.png" alt="" width="30px" height="30px">
        <a href=""> Informe seu <br>Cep</a>
      </div>

      <button id="btn-menu-humburguer" onclick="dispararMenu('menu-humburguer')">☰</button>

      <div id="menu-humburguer">
        <div class="header-menu">
          <img src="https://cdn-icons-png.flaticon.com/512/5987/5987462.png" alt="">
          <div class="texto-menu">
            <p>Kauan Afonso da Silva</p>
            <p>Meu perfil</p>
          </div>
        </div>

        <div class="nav">
          <a href=""><i class="fa fa-home" style="font-size:24px"></i> Categorias</a>
          <a href=""><span style='font-size:24px;'>&#9873;</span>Ofertas</a>
          <a href=""><span style='font-size:24px;'>&#9742;</span> Vender</a>
          <a href="contatos.html"><i class="fa fa-heart" style="font-size: 22px;"></i>Contato</a>
          <a href=""><span style='font-size:24px;'>&#9728;</span>Crie sua conta</a>
          <a href=""><span style='font-size:24px;'>&#9983;</span>Entre</a>
          <a href=""><span style='font-size:24px;'>&#9951;</span> Compras</a>
          <a href="myCart.php"><span style='font-size:24px;'>&#9729;</span> Carrinho</a>
        </div>

        <span style='font-size:100px;'>&#9924;</span>

        <button id="fecharMenu" onclick="dispararMenu('menu-humburguer')">
          &#10006;</button>

      </div>

      <div class="input">
        <input type="search" placeholder="Buscar mais Produtos, marcas ee muito mais">
      </div>



      <div class="meioNav">
        <a href="">Categorias</a>
        <a href="">Ofertas</a>
        <a href="">Vender</a>
        <a href="contatos.html">Contato</a>
      </div>

      <div class="direitaNav">
        <a href="">Crie sua conta</a>
        <a href="">Entre</a>
        <a href="myCart.php">Carrinho</a>
      </div>


    </nav>

  </header>



  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="fotoBa.jpg" class="d-block w-100" alt="..."  style="height: 600px !important;">
      </div>
      <div class="carousel-item">
        <img src="banner1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="banner2.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">

        <div class="card" style="width: 20rem;">
          <img src="https://imgs.casasbahia.com.br/55058628/1g.jpg" class="card-img-top" alt="Produto">
          <div class="card-body">
            <p class="card-text">Samsung A24 </p>
            <p class="desconto">R$ 1899, 00</p>
            <p class="preco">R$ 1499, 00</p>
            <p class="parcela"> em 12X R$120,75</p>
            <p class="frete">Frete Gratis</p>
            <a href="?id=1"><button class="btn btn-success">Adicionar ao Carrinho</button></a>
          </div>
        </div>


      </div>


      <div class="swiper-slide">

        <div class="card" style="width: 20rem;">
          <img
            src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcR3hNUbRzLgxo1k7P1FANR8KgN7wdQ0cCzyUhkFsJPX9amszatQEzOodNKJtDa_NkNNaJBaYo6ZPmCt1OtRcP14M3vZABr9bFyXe2LdwgSw4Wwp-kscA6XB6Q&usqp=CAE"
            class="card-img-top" alt="Produto">
          <div class="card-body">
            <p class="card-text">Iphone 14 </p>
            <p class="desconto">R$ 12000,00</p>
            <p class="preco">R$ 9999,00</p>

            <p class="parcela"> em 12X R$833,25</p>
            <p class="frete">Frete Gratis </p>
            <a href="?id=2"><button class="btn btn-success">Adicionar ao Carrinho</button></a>
          </div>
        </div>

      </div>

      <div class="swiper-slide">

        <div class="card" style="width: 20rem;">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7g034Ju4eCVt2y8m0H3I__CqdHfBuuZ-NEA&usqp=CAU"
            class="card-img-top" alt="Produtos">
          <div class="card-body">
            <p class="card-text">Lenovo A15 </p>
            <p class="desconto">R$ 4000,00</p>
            <p class="preco">R$ 3499,00</p>

            <p class="parcela"> em 12X R$291,58</p>
            <p class="frete">Frete Gratis </p>
            <a href="?id=3"><button class="btn btn-success">Adicionar ao Carrinho</button></a>
          </div>
        </div>

      </div>


      <div class="swiper-slide">

        <div class="card" style="width: 20rem;">
          <img
            src="data:image/jpeg;base64,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"
            class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Samsung S22 </p>
            <p class="desconto">R$ 5000,00</p>
            <p class="preco">R$ 4449,00</p>
            <p class="parcela"> em 12X R$24,52</p>
            <p class="frete">Frete Gratis </p>
            <a href="?id=3"><button class="btn btn-success">Adicionar ao Carrinho</button></a>
          </div>
        </div>

      </div>

    </div>
  </div>
  <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script><br>


  <section>

    <center>
      <h2 class="Pnatalinos"><strong>Promoções de Natal: </strong></h2>
    </center>


  </section>



  <section class="layout">
    <div class="sidebar">
      <h2>Filtrar</h2>

      <div class="filtro">

        <p>Custo de Frete</p>
        <a href="">Gratis</a>

        <p>Localização</p>
        <a href="">São paulo</a><br>
        <a href="">Rio de Janeiro</a><br>
        <a href="">Rio Grande do Sul</a><br>
        <a href="">Segipe</a><br>
        <a href="">Mato Grosso</a><br>

        <p>Marca</p>
        <a href="">Lenovo</a><br>
        <a href="">Apple</a><br>
        <a href="">Puma</a><br>
        <a href="">Nike</a><br>
        <a href="">CK</a><br>
        <a href="">Philco</a><br>
        <a href="">Adidas</a><br>
        <a href="">Jordan</a><br>

        <p>Condição</p>
        <label for="">Novo</label><br>
        <input type="checkbox"><br>
        <label for="">Usado</label><br>
        <input type="checkbox">

      </div>


    </div>
    <div class="section">

      <section class="colunas">
        <div>
          <a href="paginaProdutos.html">
            <div class="card" style="width: 20rem;">
              <img
                src="https://reidoarmarinho.vteximg.com.br/arquivos/ids/169532-500-500/703314_ampliada.jpg?v=637245071917300000"
                class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Arvore de Natal </p>
                <p class="desconto">R$ 456,00</p>
                <p class="preco">R$ 256,00</p>
                <p class="parcela"> em 12X R$24,52</p>
                <p class="frete">Frete Gratis </p>
              </div>
            </div>
          </a>

        </div>
        <div>

          <a href="paginaProdutos2.html">
            <div class="card" style="width: 20rem;">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7A8VSMA7MfAoGycZ3Z4O3xU7rk8jByIdvtQ&usqp=CAU"
                class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Cachicol </p>
                <p class="desconto">R$ 150,00</p>
                <p class="preco">R$ 100,00</p>
                <p class="parcela"> em 12X R$8,03</p>
                <p class="frete">Frete Gratis </p>
              </div>
            </div>
          </a>
        </div>
        <div>


          <a href="paginaProdutos3.html">
            <div class="card" style="width: 20rem;">

              <img
                src="https://p2.trrsf.com/image/fget/cf/940/0/images.terra.com/2017/11/21/natal-5-guirlanda-istock-621378476.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Decoração </p>
                <p class="desconto">R$ 185,00</p>
                <p class="preco">R$ 128,00</p>
                <p class="parcela"> em 12X R$10,60</p>
                <p class="frete">Frete Gratis </p>
              </div>
            </div>
          </a>
        </div>
        <div>

          <a href="paginaProdutos4.html">
            <div class="card" style="width: 20rem;">
              <img src="https://cdn.awsli.com.br/600x1000/761/761999/produto/67118289/1932301840.jpg"
                class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Bolinha </p>
                <p class="desconto">R$ 122,00</p>
                <p class="preco">R$ 52,00</p>
                <p class="parcela"> em 12X R$4,33</p>
                <p class="frete">Frete Gratis </p>
              </div>
            </div>
          </a>
        </div>
        <div>

          <div class="card" style="width: 20rem;">
            <img src="https://cdn.awsli.com.br/1960/1960866/produto/125390796/a12dd9ac46.jpg" class="card-img-top"
              alt="...">
            <div class="card-body">
              <p class="card-text">Camiseta </p>
              <p class="desconto">R$ 100,00</p>
              <p class="preco">R$ 49,99</p>
              <p class="parcela"> em 12X R$4,08</p>
              <p class="frete">Frete Gratis </p>
            </div>
          </div>

        </div>
        <div>

          <div class="card" style="width: 20rem;">
            <img src="https://cdn.awsli.com.br/600x450/1068/1068368/produto/131897505/03b65be0b7.jpg"
              class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Enfeite de Natal </p>
              <p class="desconto">R$ 80,00</p>
              <p class="preco">R$ 55,00</p>
              <p class="parcela"> em 12X R$4,58</p>
              <p class="frete">Frete Gratis </p>
            </div>
          </div>

        </div>
        <div>

          <div class="card" style="width: 20rem;">
            <img
              src="https://images-americanas.b2w.io/produtos/4612098141/imagens/boneco-papai-noel-pelucia-sentado-decoracao-natal-25cm/4612098141_1_large.jpg"
              class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Papai Noel </p>
              <p class="desconto">R$ 250,00</p>
              <p class="preco">R$ 150,00</p>
              <p class="parcela"> em 12X R$12,05</p>
              <p class="frete">Frete Gratis </p>
            </div>
          </div>

        </div>
        <div>

          <div class="card" style="width: 20rem;">
            <img
              src="https://static.yoursurprise.com/galleryimage/f2/f27f4892f5ec67fbf5e4307189f2279d/meia-de-natal-personalizada.png?width=900&crop=1%3A1&bg-color=ffffff&format=jpg"
              class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Meia de Natal </p>
              <p class="desconto">R$ 206,00</p>
              <p class="preco">R$ 80,00</p>
              <p class="parcela"> em 12X R$6,67</p>
              <p class="frete">Frete Gratis </p>
            </div>
          </div>

        </div>
        <div>

          <div class="card" style="width: 20rem;">
            <img src="https://cdn.awsli.com.br/600x1000/180/180275/produto/132430173/988bf759f3.jpg"
              class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Caneca de Natal </p>
              <p class="desconto">R$ 46,00</p>
              <p class="preco">R$ 20,00</p>
              <p class="parcela"> em 12X R$1,67</p>
              <p class="frete">Frete Gratis </p>
            </div>
          </div>

        </div>
      </section>

    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>


  <footer>

    <div>
      <a href="">Trabalhe conosco</a>
      <a href="contatos.html">Contato</a>
      <a href="">Acessibilidade</a>
      <a href="">informações sobre seguro</a>
      <a class="linkParaCel" href="myCard.php">Carrinho</a>
      <a class="linkParaCel" href="">Entre</a>

    </div>

  </footer>
</body>

</html>