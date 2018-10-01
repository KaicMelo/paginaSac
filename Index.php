<!DOCTYPE html>
<html>

<head>
    <title>SAC</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!--Referenciando style da p�gina principal-->
    <link rel="stylesheet" type="text/css" href="css/folhaSac.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--Referenciando Valida��o do menu Produtos-->
    <script src="js/validaMenu.js" type="text/javascript"></script>
    <div class="container">
        <form name="form" onsubmit="return validaCampos();" action="SAC" method="POST" enctype="multipart/form-data">

            <h2>Como podemos ajudá-lo(a)?</h2>
            <nav class="col-md-6">

                <h4>Produto</h4>
                <select name="produto" class="dropMenu" style="width: 50%;" id="produto" onchange="minhaFuncao()">
                    <option value="">Selecione</option>
                    <option value="Produto - Quebrado">Quebrado</option>
                    <option value="Produto - Vencido">Vencido</option>
                    <option value="Produto - Aberto">Aberto</option>
                    <option value="Produto - Faltante">Faltante</option>
                    <option value="Produto - Qualidade">Qualidade</option>
                    <option value="Produto - Dúvidas">Dúvidas</option>
                    <option value="Produto - Laudos">Laudos</option>
                    <option value="Produto - Tabela Nutricional">Tabela Nutricional</option>
                    <option value="Produto - Reposição do Estoque">Reposição</option>
                    <option value="Produto - Outros">Outros Assuntos</option>
                </select>

                <h4>Pagamento</h4>
                <select name="pagamento" class="dropMenu" style="width: 50%;" id="pagamento" onchange="minhaFuncao()">
                    <option value="">Selecione</option>
                    <option value="Pagamento - Cancelamento">Cancelamento</option>
                    <option value="Pagamento - Não Identificado">Não identificado</option>
                    <option value="Pagamento - Reembolso">Reembolso</option>
                    <option value="Pagamento - Solicitação de Nota Fiscal">Nota Fiscal</option>
                    <option value="Pagamento - Outros">Outros Assuntos</option>
                </select>
                <h4>Entrega</h4>
                <select id="entrega" name="entrega" style="width: 50%;" class="dropMenu" onchange="minhaFuncao()">
                    <option value="">Selecione</option>
                    <option value="Entrega - Excedida">Prazo excedido</option>
                    <option value="Entrega - Outros">Outros Assuntos</option>

                </select>
                <h4>Site</h4>
                <select id="site" name="site" style="width: 50%;" class="dropMenu" onchange="minhaFuncao()">
                    <option value="">Selecione</option>
                    <option value="Site - Problema">Problema no site</option>
                    <option value="Site - Travando">Site Travando</option>
                    <option value="Site - Lento">Lentidão</option>
                    <option value="Site - Outros">Outros Assuntos</option>
                </select>


            </nav>
            <section class="col-md-6">
                <div class="form-group ">


                    <label for="nome">Nome:</label>
                    <input class="form-control" name="nome" required="required" id="nome" type="text">
                </div>

                <div class="form-group">
                    <label for="pedido">Nº pedido:</label>
                    <input class="form-control" name="pedido" type="text" placeholder="120157639">
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input class="form-control" name="email" required="required" type="email" placeholder="mail@example.com">
                </div>
            </section>
            <section class="col-md-12">
                <div class="form-group">
                    <p></p>
                    <textarea class="form-control" name="descricao" required="required" cols="35" rows="8" placeholder="Descrição" aria-required="true"
                        aria-invalid="false"></textarea><br>
                </div>
            </section>
            <div class="col-md-12">
                <label for="file">Anexo <small>(opcional) Formatos aceitos: gif, jpg, png, txt, videos com até 3 MB </small></label><br>
                <input name="file" id="idAnexo" data-max-size="3000000" type="file" accept=".jpg, .jpeg, .png,.txt,.gif,video/*">

            </div>
            <section class="col-md-4">
                <!--Validando os campos para serem enviados-->
                <input class="btn btn-default" id="Enviar" type="submit" value="Enviar" name="submit">

            </section>
        </form>
    </div>
    <p></p>

    <!---------------------------------------------------------------->
    <!--Zona Cerealista Online-->
    <!--Módulo de SAC-->
    <!--Desenvolvedor: Kaic Melo Santos-->
    <!--Sócio-Diretor: Alex Rodrigo Zago-->
    <!--Última versão 1.5-->
    <!---------------------------------------------------------------->

</body>

</html>