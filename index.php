<!doctype html>
	<!DOCTYPE html>
	<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
            <title>Facebook - Entre ou Cadastre-se</title>
            <!--Aplicar meta tags-->
            <link rel="stylesheet"  href="Css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

        <body>
            <header>
                <div class="Center">
                        <div class="Logo">
                            <h2>facebook</h2>
                        </div><!--Logo-->
                        
                        <form method="post" class="form-login">
                            <div class="form-element">
                                <p>Email ou telefone</p>
                                <input placeholder="Email ou telefone" type="email"/>
                            </div><!--Form-element-->

                            <div class="form-element">
                                <p>Senha</p>
                                <input placeholder="Senha" type="password" />
                            </div><!--Form-element-->

                            <div class="form-element">
                                <input type="submit" name="acao" value="Entrar"/>
                            </div><!--Form-element-->
                        </form><!--Form-login-->
                        <div class="clear"></div>
                </div><!--Center-->
            </header>

            <section class="main">
                <div class="Center">

                    <div class="texto">
                        <h2>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h2>
                    </div><!--Texto-->
                    <div class="img-pessoas">
                        <img src="imagens/img1.png" \>
                    </div><!--img-pessoas-->

                    <div class="abrir-conta">
                        <h2>Abra sua conta</h2>
                        <h3>É gratuito e sempre será!</h3>

                        <form class="criar-conta">
                            <div class="w50">
                                <input placeholder="Nome" type="text">
                            </div><!--w50-->

                            <div class="w50">
                                <input placeholder="Sobrenome" type="text">
                            </div><!--w50-->

                            <div class="w100">
                                <input placeholder=" Celular ou Email" type="email">
                            </div><!--w50-->

                            <div class="w100">
                                <input placeholder="Senha" type="password">
                            </div><!--w100-->

                            <div class="w100">
                                <h3>Data de Nascimento</h3>
                                <select name="nascimento-dia" class="nascimento">
                                    <?php 
                                        for($i =1; $i <=31; $i++){
                                    ?>
                                    <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
                                    <?php } ?>
                                </select>

                                <select name="nascimento-mes" class="nascimento">
                                    <option value="1">Janeiro</option>
                                    <option value="2">Fevereiro</option>
                                    <option value="3">Março</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Junho</option>
                                    <option value="7">Julho</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                                    <!--Aplicar o PHP dps-->
                                </select>

                                <select name="nascimento-ano" class="nascimento">
                                <?php 
                                        for($i =1920; $i <=2022; $i++){
                                    ?>
                                    <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
                                    <?php } ?>
                                </select>
                            </div><!--w100-->
                                
                            <div class="w100">
                                <div class="input-radio">
                                    <input type="radio" name="sexo" value="Masculino">
                                    <h3>Masculino</h3>
                                </div><!--input-radio-->

                                <div class="input-radio">
                                    <input type="radio" name="sexo" value="Feminino">
                                    <h3>Feminino</h3>
                                </div><!--input-radio-->

                                <div class="input-radio">
                                    <input type="radio" name="sexo" value="Outro">
                                    <h3>Outro</h3>
                                </div><!--input-radio-->
                                <div class="clear"></div>
                            </div><!--w100-->


                            <div class="clear"></div>
                            <div class="w100">
                                <input placeholder="Enviar" type="submit">
                            </div><!--w100-->

                        </form><!--criar-conta-->

                        </div><!--Abrir-conta-->


                        <div class="clear"></div>
                    </div><!--Center-->
             </section><!--Main-->

            <section class="linguas">
        <div class="center">
            <nav>
                <ul>
                    <li><a class="selected" href="">Português (Brasil)</a></li>
                    <li><a href="">Português (Brasil)</a></li>
                    <li><a href="">English (US)</a></li>
                    <li><a href="">Español</a></li>
                    <li><a href="">Français (France)</a></li>
                    <li><a href="">Italiano</a></li>
                    <li><a href="">Deutsch</a></li>
                    <li><a href="">中文(简体)</a></li>

                </ul>
            </nav>
        </div>

        <div class="center">
            <nav>
                <ul>
                    <li><a href="">Cadastre-se</a></li>
                    <li><a href="">Entrar</a></li>
                    <li><a href="">Messenger</a></li>
                </ul>
            </nav>
        </div>
    </section>

        </body>

    </html>
