<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store 3D</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--inicio do css-->
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
    <header>
        <div class="section-header">
            <section class="logo">
                <img src="Imagem/nike.png" alt="Store">
            </section>
            <nav id="nav-bar">
                <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="hamburger"></span>
                </button>
              
               <ul id="menu" role="menu">    
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="crud/read.php">Gerenciar Cadastros</a></li>
               </ul>
               
              </nav>
               
            <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                <input placeholder="Search" type="search" class="input">
              </div>
        </div>
    </header>
    <main>
        <section class="section-top">
            <div class="section-top-product">
                <img src="Imagem/pngwing.com (4).png" alt="shoes">
            </div>

            <div class="section-top-description">
                <h1>Air Jordan 4</h1>
               <p style="font-size:25px">Desde o seu lançamento em 1989, o Air Jordan 4 vem conquistando os corações dos amantes de tênis em todo o mundo. Projetado pelo lendário designer de calçados Tinker Hatfield, esse modelo icônico redefiniu o conceito de estilo e desempenho.</p>
               <button> compre agora!
                </button> 
            </div>
        </section>
    </main>

</body>
</html>