
<?php

if(isset($_POST['submit']))
{


  require('config.php');

$nome = $_POST['nome'];
$estado_civil = $_POST['estado_civil'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero= $_POST['número'];
$compl = $_POST['compl'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$email_rec = $_POST['emailrecuperacao'];
$data_nasc = $_POST['datadenasc'];
$cidade_nasc = $_POST['cidadedenasc'];
$data_emissao_rg = $_POST['datadeemissaorg'];
$nome_usuario = $_POST['nomeusuario'];

$senha = $_POST['senha'];
$profissao = $_POST['profissão'];
$nivel_escolaridade = $_POST['nívelescolaridade'];
$altua = $_POST['altura'];
$senha = sha1($senha = $_POST['senha']);



$result = mysqli_query ($conectando, "INSERT INTO  cadastro( nome , estado civil,cpf,rg,cep,rua,nunero,compl,bairro,cidade,estado,telefone,senha,celular ) values ('$nome','$estado_civil','$cpf','$rg','$cep','$rua','$telefone','$compl','$bairro','$cidade','$estado','$telefone','$senha','$nome_usuario',)");



}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8" />
<title>CADASTRO DE CLIENTES COM BANCO DE DADOS E PHP</title>

<style type="text/css">
  *{margin: 0; padding: 0; font-family: Tahoma; font-size: 9pt;}
  #divCenter{
    background-color: #e1e1e1;
    width: 400px;
    height: 150px;
    left: 50%;
    margin: -130px 0 0 -210px;
    padding: 10px;
    position: absolute;
    top: 50%;
  }
body{
background-color: navajowhite;


}
.style1 {
color: #FF0000;
font-size: x-small;
font-family: font-family: Verdana,Geneva,sans-serif;
}
.style3 {color:#7678ff; font-size: x-small;}

.style4 {
display: flex;
background-color: antiquewhite;
align-items: center;
justify-content: center;
width: 800px;
height: 100%;
}

</style>
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.nome.value=="")
{
alert("O Campo nome é obrigatório!");
return false;
}
else
if(document.cadastro.telefone1.value=="")
{
alert("O Campo telefone1 é obrigatório!");
return false;
}
else
if(document.cadastro.telefone2.value=="")
{
alert("O Campo telefone2 é obrigatório!");
return false;
}
else
if(document.cadastro.email.value=="")
{
alert("O Campo email é obrigatório!");
return false;
}
else
if(document.cadastro.emailrecuperacao.value=="")
{
alert("O Campo email de recuperação é obrigatório!");
return false;
}
else
if(document.cadastro.datanascimento.value=="")
{
alert("O Campo data de nascimento é obrigatório!");
return false;
}
else
if(document.cadastro.bairronascimento.value=="")
{
alert("O Campo bairro de nascimento é obrigatório!");
return false;
}
else
if(document.cadastro.rua.value=="")
{
alert("O Campo rua é obrigatório!");
return false;
}
else
if(document.cadastro.numero.value=="")
{
alert("O Campo número é obrigatório!");
return false;
}
else
if(document.cadastro.complemento.value=="")
{
alert("O Campo complemento é obrigatório!");
return false;
}
else
if(document.cadastro.cidade.value=="")
{
alert("O Campo Cidade é obrigatório!");
return false;
}
else
if(document.cadastro.estado.value=="")
{
alert("O Campo Estado é obrigatório!");
return false;
}
else
if(document.cadastro.bairro.value=="")
{
alert("O Campo Bairro é obrigatório!");
return false;
}
else
if(document.cadastro.pais.value=="")
{
alert("O Campo país é obrigatório!");
return false;
}
else
if(document.cadastro.cep.value=="")
{
alert("O Campo cep é obrigatório!");
return false;
}
else
if(document.cadastro.nomeusuario.value=="")
{
alert("O Campo nome de usuário é obrigatório!");
return false;
}
else
if(document.cadastro.profissao.value=="")
{
alert("O Campo profissão é obrigatório!");
return false;
}
else
if(document.cadastro.nivelescolaridade.value=="")
{
alert("O Campo nível de escolaridade é obrigatório!");
return false;
}
else
if(document.cadastro.estadocivil.value=="")
{
alert("O Campo estado civil é obrigatório!");
return false;
}
else
if(document.cadastro.peso.value=="")
{
alert("O Campo peso é obrigatório!");
return false;
}
else
if(document.cadastro.altura.value=="")
{
alert("O Campo altura é obrigatório!");
return false;
}
else
if(document.cadastro.login.value=="")
{
alert("O Campo Login é obrigatório!");
return false;
}
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

else
if(document.cadastro.senha.value=="")
{
alert("Digite uma senha!");
return false;
}
else
return true;
}

/* Fim do JavaScript que validará os campos obrigatórios! */
</script>
</head>

<body>

  <h1>Cadastro</h1>
  <style>
  h1{
    font-family:verdana;
    font-size:60px;
    text-align:center;
    color:white;
    background-color:darkblue;
  }

  </style>
<center>

      <div class="style4">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>    
    <form method="post" action="index.php" onsubmit="return validaCampo(); return false;">
      <table width="625" style = "border: 0px">
    <tr>
      <td width="69">Nome: </td> 
      <td width="546"><input name="nome" type="text" id="nome" size="60" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input name="email" type="text" id="email" size="60" maxlength="60" />
      <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Email Recuperação:</td>
      <td><input name="emailrecuperacao" type="text" id="emailrecuperacao" size="60" maxlength="60" />
      <span class="style1">*</span></td>
    </tr>
    <tr>
       <td>Data de nascimento:</td>
      <td><input id="datadenasc" name="datadenasc" type="text" placeholder="01-06-2023">
        <span class="style1">*</span></td>
    </tr>
    <tr>
     <td>Cidade de nascimento:</td>
      <td><select name="cidadedenasc" id="cidadedenasc"> 
        <option>Selecione...</option>
        <option value="Maricá">Maricá</option>
        <option value="Niteroi">Niteroi</option>
        <option value="Rio de Janeiro">Rio de Janeiro</option>
        <option value="São Gonçalo">São Gonçalo</option>
        <span class="style1">*</span></td>
    </tr>
    <tr>
       <td>Bairro de nascimento:</td>
      <td><select name="bairrodenascimento" id="bairrodenascimento"> 
        <option>Selecione...</option>
        <option value="Inhaúma">Inhaúma</option>
        <option value="Del Castilho">Del Castilho</option>
        <option value="Engenho de Dentro">Engenho de Dentro</option>
        <option value="Copacabana">Copacabana</option>
        <option value="Leblon">Leblon</option>
        <span class="style1">*</span></td>
    </tr>
    <tr>
     <td>CPF:</td>
      <td><input name="cpf" type="number">
      <span class="style1">*</span></td>
        </tr>
    <tr>
      <td>RG:</td>
      <td><input name="rg" type="number">
      <span class="style1">*</span></td>
      </tr>

      <td>Data de emissao do rg:</td>
      <td><input id="datadeemissaorg" name="datadeemissaorg" type="datadeemissaorg" value="01-06-2023">
        <span class="style1">*</span></td>

    </tr>
    <tr>
    <tr>
      <td>Sexo:</td>
      <td><input name="sexo" type="radio" value="Masculino" checked="checked" />
        Masculino
        <input name="sexo" type="radio" value="Feminino" />
        Feminino <span class="style1">*</span> </td>
    </tr>
    <tr>

    <td>Telefone:</td>
      <td><input name="telefone" type="number">
      <span class="style1">*</span></td>
        </tr>

    <td>Celular:</td>
      <td><input name="celular" type="number">
      <span class="style1">*</span></td>
        </tr>

    <tr>
      <td>Rua:</td>
      <td><input name="rua" type="text" id="rua" size="60" maxlength="70" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Número:</td>
      <td><input name="número" type="number">
      <span class="style1">*</span></td>
      </tr>
    </tr>
    <tr>
      <td>Complemento:</td>
      <td><input name="compl" type="text" id="compl" size="60" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
          <td>Bairro:</td>
      <td><select name="bairro" id="bairro"> 
        <option>Selecione...</option>
        <option value="Inhaúma">Inhaúma</option>
        <option value="Del Castilho">Del Castilho</option>
        <option value="Engenho de Dentro">Engenho de Dentro</option>
        <option value="Copacabana">Copacabana</option>
        <option value="Leblon">Leblon</option>
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Cidade:</td>
      <td><select name="cidade" id="cidade"> 
        <option>Selecione...</option>
        <option value="Maricá">Maricá</option>
        <option value="Niteroi">Niteroi</option>
        <option value="Rio de Janeiro">Rio de Janeiro</option>
        <option value="São Gonçalo">São Gonçalo</option>
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>CEP:</td>
      <td>
        <input type="number" name="cep" id="cep">
        <span class="style1">*</span>
    </td>
        </tr>
    </tr>
    <tr>
      <td>Estado:</td>
      <td><select name="estado" id="estado"> 
        <option>Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
        <span class="style1">*      </span></td>
    </tr>
    <tr>
    <td>Estado_Civil:</td>
      <td>
        <select name="estado_civil" id="estado_civil">
        <option>Selecione...</option>
        <option value="Solteiro">Solteiro(a)</option>
        <option value="Casado">Casado(a)</option>
        <option value="Separado">Separado(a)</option>
          </select>
        <span class="style1">*      </span></td>
    </tr>
    <tr>
      <td>País:</td>
      <td><select name="país" id="país"> 
        <option>Selecione...</option>
        <option value="Brasil">Brasil</option>
        <option value="Estados Unidos">Estados Unidos</option>
        <option value="Portugal">Portugal</option>
        <option value="Canadá">Canadá</option>
        <span class="style1">*</span></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td>Nome Usuário:</td>
      <td><input name="nomeusuario" type="text" id="nomeusuario" size="60" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td><input name="senha" type="password" id="senha" maxlength="12" />
          <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Profissão:</td>
      <td><input name="profissão" type="text" id="profissão" size="60" maxlength="60" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td>Nível Escolaridade:</td>
      <td><select name="nívelescolaridade" id="nívelescolaridade"> 
        <option>Selecione...</option>
        <option value="Ensino Médio">Ensino Médio</option>
        <option value="Ensino Técnico">Ensino Técnico</option>
        <option value="Ensino Superior">Ensino Superior</option>
        <span class="style1">*</span></td>
    </tr>

    <tr>
       <td>Altura:</td>
      <td><select name="altura" id="altura"> 
        <option>Selecione...</option>
        <option value="1,20 a 1,30">1,20 a 1,30</option>
        <option value="1,31 a 1,40">1,31 a 1,40</option>
        <option value="1,41 a 1,50">1,41 a 1,50</option>
        <option value="1,51 a 1,60">1,51 a 1,60</option>
        <option value="1,61 a 1,70">1,61 a 1,70</option>
        <option value="1,71 a 1,80">1,71 a 1,80</option>
        <option value="1,81 a 1,90">1,81 a 1,90</option>
        <option value="1,91 a 2,00">1,91 a 2,00</option>
        <option value="2,00 a 2,10">2,00 a 2,10</option>
        
        <span class="style1">*</span></td>
    </tr> 
    <tr>
   
   
      <td>Peso</td>
      <td><select name="peso" id="peso">
        <option>Selecione...</option>
        <option value="Abaixo">até 18,5</option>
        <option value="Peso Saudavel">18,5 a 24,9</option>
        <option value="Sobrepeso">25 a 29,9</option>
        <option value="Obeso">30 a 39,9</option>
        <option value="Muito Obeso">+ de 40</option>
          </select> 
      <td colspan="2"><input name="news" type="checkbox" id="news" value="ATIVO" checked="checked" />
Desejo receber novidades e informações sobre o conteúdo deste site. </td>
    </tr>
    <tr>
      <td colspan="2"><p>
        <input type="submit" name="submit" id="cadastrar" value="Concluir meu Cadastro!" />


          <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />


          <span class="style1">* Campos com * são obrigatórios!          </span></p>
      <p>  </p></td>
    </tr>
  </table>
</form>
    </div> 
  </center>
</body>
</html>