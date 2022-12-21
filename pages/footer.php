<section <?php if(isset($pagina404) && $pagina404 == true); ?> class="links" id="links">
        <div class="container">
        <div class="title">
            <h2>Links Úteis<h2></h2>
        </div><!--title-->
            <div class="links-wrapper">
                <div class="links-left">
                    <a href="<?php echo INCLUDE_PATH; ?>">Início</a>
                    <a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a>
                    <a href="<?php echo INCLUDE_PATH; ?>produtos">Produtos</a>
                    <a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a>
                    <a href="https://huxleydavi.github.io/HSCorp/" target="_blank">HS Corporation</a>
                    <a href="https://huxleydavi.github.io/HxLinkTree/" target="_blank">Hx Info</a>
                    <a href="https://huxleydavi.github.io/HyrmsPublicidade/" target="_blank">Hyrms Publicidade</a>
                </div><!--links-left-->
                <div class="links-rigth">
                    <a href="https://api.whatsapp.com/send/?phone=5533998023970&text=Olá%2C+poderia+me+ajudar%3F&type=phone_number&app_absent=0" target="_blank">Whatsapp</a>
                    <a href="https://instagram.com/hxinfo/" target="_blank">Instagram</a>
                    <a href="https://github.com/huxleydavi/" target="_blank">Git Hub</a>
                    <a href="https://twitter.com/huxk__" target="_blank">Twitter</a>
                    <a href="https://linkdin.com/huxleydavi/" target="_blank">Linkdin</a>
                </div><!--links-rigth-->
                <div class="links-logo">
                    <img src="images/logo.png">
                </div>
            </div><!--links-wrapper-->

            <footer>
                <div class="footer-wrapper">
                    <div class="footer-dados">
                    <a href="https://api.whatsapp.com/send/?phone=5533998023970&text=Olá%2C+poderia+me+ajudar%3F&type=phone_number&app_absent=0" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i><z>+55 (33) 99802-3970</z></a>
                    <a href="https://instagram.com/hxinfo/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i><z>@hxinfo</z></a>
                    <a href="https://github.com/huxleydavi/" target="_blank"><i class="fab fa-github" aria-hidden="true"></i><z>huxleydavi</z></a>
                    </div><!--footer-dados-->
                </div><!--footer-wrapper-->
            </footer>

        </div><!--container-->
    </section><!--links-->

    <div class="copyrigth">
        <p>Hx Info &copy; | Todos os diretos reservados</p>
    </div>


    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <!--<script>
            $document().ready(function(){
                $('#name').on('change', function(){
                    $("#" + $(this).vall()).fadeIn(700);
                }).change();
            });
        </script>-->
    <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/show-hide.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/mask.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>

</body>
</html>