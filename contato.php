<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="perfil.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">

    <title>Contato - Hx Info</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" /></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="projetos.php">Projetos</a></li>
                <li class="selected"><a href="projetos.php">Contato</a></li>
                <li><a href="parceiros.php">Parceiros</a></li>
            </ul>
        </div>
        <div class="botaomenu">
            <a href="https://api.whatsapp.com/send/?phone=15058000945&text=Olá%2C+poderia+me+ajudar%3F&type=phone_number&app_absent=0" target="_blank">Iniciar projeto.</a>
        </div>
    </header>

    <section class="scontato">
        <div class="container">

            <div class="title">
                <h2><x>Entre em</x> <z>contato.</z></h2>
                <p>Vamos fechar negócio?</p>
            </div>

            <div class="scontato-wrapper">

            <h2>Contato</h2>

                <div class="scontato-single">
                    <span>Nome/Empresa. <y>*</y></span>
                    <input type="text" name="nome" />
                </div>

                <div class="scontato-single">
                    <span>Email. <y>*</y></span>
                    <input type="email" name="email" />
                </div>

                <div class="scontato-single">
                    <span>Fale sobre seu projeto.</span>
                    <textarea></textarea>
                </div>
                <input type="submit" value="Enviar" name="button" />
                
            </div>

            <div class="scontato-img">
                <img src="images/bg.jpg"/>
            </div>

            <div class="clear"></div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer1">
                <h2>Hx Info</h2>
                <div class="footermenu">
                    <ul>
                        <li><a href="projetos.php">Projetos</a></li>
                        <li class="selected"><a href="projetos.php">Contato</a></li>
                        <li><a href="parceiros.php">Parceiros</a></li>
                    </ul>
                </div>
                <a href=""><i class="fa fa-arrow-up">Voltar ao topo</i></a>
            </div>
            <div class="footer2">
                <h2>Copyright © 2023 - Todos os direitos reservados. Hx Info | "A excelência não é um ato, mas sim um hábito."</h2>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>