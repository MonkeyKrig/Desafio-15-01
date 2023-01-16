<title>Cadastro realizado com sucesso!</title>
</head>
<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$nome= $_POST ["nome"];//atribuição do campo "nome" vindo do formulário para variavel
$email= $_POST ["email"];//atribuição do campo "email" vindo do formulário para variavel
$cpf= $_POST ["cpf"];//atribuição do campo "cpf" vindo do formulário para variavel
$rg= $_POST ["rg"];//atribuição do campo "rg" vindo do formulário para variavel
$tel= $_POST ["telefone"];//atribuição do campo "telefone" vindo do formulário para variavel
$endereco= $_POST ["endereco"];//atribuição do campo "endereco" vindo do formulário para variavel
$cidade= $_POST ["cidade"];//atribuição do campo "cidade" vindo do formulário para variavel
$estado= $_POST ["estado"];//atribuição do campo "estado" vindo do formulário para variavel
$bairro = $_POST ["bairro"];//atribuição do campo "bairro" vindo do formulário para variavel
$pais= $_POST ["pais"];//atribuição do campo "pais" vindo do formulário para variavel
$senha= $_POST ["senha"];//atribuição do campo "senha" vindo do formulário para variavel
$news= $_POST ["news"];//atribuição do campo "news" vindo do formulário para variavel
$sexo= $_POST ["sexo"];//atribuição do campo "sexo" vindo do formulário para variavel

//Gravando no banco de dados ! conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root"); //localhost é onde esta o banco de dados.
if (!$conexao)
die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes",$conexao); //nome da tabela que deseja que seja inserida os dados cadastrais
if (!$banco)
die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());


//Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
$query = "INSERT INTO `clientes` ( `nome` , `email` ,`cpf`,`rg`,`sexo`,`telefone` , `endereço` , `cidade` , `estado` , `bairro` , `país` , `senha` , `news` , `id` ) 
VALUES ('$nome', '$email','$cpf','$rg','$sexo','$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais','$senha', '$news', '')";
mysql_query($query,$conexao);
########## • Explicação da query • ##########
#$query = nome da variavel que decidi#
#utilizar para realizar a operação.#
#############################################
#clientes = nome da tabela que será salvo#
#os dados do cadastro do cliente#
#############################################
#nome, email,cpf,rg, sexo, telefone,#
#endereço, cidade, estado, bairro, país,#
#senha, news, id.#
##
#São apenas os nomes dos campos que #
#constam na tabela clientes.#
#############################
#VALUES = indica que serão inseridos os#
#seguintes valores.#
#############################################
#$nome, $email,$cpf,$rg,$sexo,$telefone,#
#$endereço, $cidade, $estado, $bairro, #
#$país,$senha, $news, $id.#
#############################
#São apenas as variaveis a qual eu#
#atribui os valores digitados no formulá-#
#rio.#
#############################################
echo "Seu cadastro foi realizado com sucesso!Agradecemos a atenção.";
//mensagem que é escrita quando os dados são inseridos normalmente.
mysqli_close($conexao,$query);
?> 
</body>
</html>