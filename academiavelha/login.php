<?php
require_once 'head.php';
INCLUDE_once 'conexao.php';
?>

<?php
$dadoslogin = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!empty($dadoslogin["btnlogin"])){
  $buscalogin = "SELECT matricula, nome, email, senha
                 FROM aluno
                 where email =:usuario
                 LIMIT 1";

$resultado = $conn->prepare($buscalogin);
$resultado->bindParam(':usuario', $dadoslogin['usuario'],
PDO::PARAM_STR);
$resultado->execute();

if(($resultado) AND ($resultado->rowCount() !=0)){
  $resposta = $resultado->fetch(PDO::FETCH_ASSOC);
  var_dump($resposta);
   
if(password_verify($dadoslogin['senha'], $resposta 
['senha'])){
  header("location:administrativo.php");

else{
  echo"Usuario ou Senha Invalida!";
}  
Else{
  echo"Usuario ou Senha Invalida!";
}  
}
}
}
?>
     
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center longin-text">
      <h1> Faça Login </h1> 
    </div>
  </div>
     
<div class="container">
  <div class="row">
    <div class="col-md-4"> </div>
  <div class="col-md-4">
 
      
<form id="login-form" class="form" action="" method="post"> 

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Nome do Usuario</label>
    <input type="email"  name="usuario" id="form2Example1" class="form-control"/>
   
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Senha</label>
    <input type="password" name="senha" id="form2Example2" class="form-control"/>
    
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Lembrar-me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Esqueceu a senha?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Não e Membro? <a href="#!">Registrar</a></p>
    
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>

</div>
<div class="col-md-4"> </div>

</div>
</div>


 <!-- 


drop database if exists academia; 

create database academia character set utf8 COLLATE utf8_general_ci;

use academia;

create table endereco(
	cep char(9) primary key,
	rua varchar(60)not null,
	bairro varchar(40)not null,
	cidade varchar(40)not null,
	uf char(2)not null);
	
create table aluno(
	matricula integer primary key auto_increment,
	nome varchar(60)not null,
	telefone varchar(15)not null,
	sexo char(1)not null,
	cpf char(14)not null,
	rg varchar(15)not null,
	datanascimento date not null,
	cep char(9) not null,
	numerocasa smallint not null,
	complemento varchar(30), 
	foto varchar(255),
	email varchar(255)not null,
	senha varchar(255)not null,
	foreign key(cep)references endereco(cep));
	
create table funcionario(
	cpffuncionario char(14)primary key,
	nome varchar(60)not null,
	telefone varchar(15)not null,
	sexo char(1)not null,
	rg varchar(15)not null,
	cep char(9) not null,
	numerocasa smallint not null,
	complemento varchar(30), 
	foto varchar(255),
	email varchar(255)not null,
	senha varchar(255)not null,
	foreign key(cep)references endereco(cep));
	
create table professor(
	idprofessor integer primary key auto_increment,
	disponibilidade varchar(40)not null,
	cpffuncionario char(14)not null,
	foreign key(cpffuncionario)references funcionario(cpffuncionario));


create table atividade(
	idatividade integer primary key auto_increment,
		nomeatividade varchar(60)not null,
		descricao varchar(100)not null);	


		
create table habilitaprofessor(
	idhabilitacao integer primary key auto_increment,
	idatividade integer not null,
	idprofessor integer not null,
	foreign key(idatividade)references atividade(idatividade),
	foreign key(idprofessor)references professor(idprofessor));	
	

create table aula(
	idaula integer primary key auto_increment,
	dataaula date not null,
	horario varchar(30)not null,
	idprofessor integer not null,
	idatividade integer not null,
	foreign key(idprofessor)references professor(idprofessor),
	foreign key(idatividade)references atividade(idatividade));	


create table aulaaluno(
	idaulaaluno integer primary key auto_increment,
	matricula integer not null,
	idaula integer not null,
	foreign key(matricula)references aluno(matricula),
	foreign key(idaula)references aula(idaula));
	
	
create table produto(
	codigoproduto integer primary key auto_increment,
	nome varchar(60)not null,
	cor varchar(30)not null,
	valor double not null,
	tamanho char(2)not null,
	quantidade integer not null);
	

	
create table venda(
	idvenda integer primary key auto_increment,
	data date not null,
	valor double not null,
	quantidade integer not null,
	codigoproduto integer not null,
	cpffuncionario char(14)not null,
	foreign key(codigoproduto)references produto(codigoproduto),
	foreign key(cpffuncionario)references funcionario(cpffuncionario));
	
	

insert into endereco(cep,rua,bairro,cidade,uf)VALUES
('23085-610','Rua Padre Pauwels','Campo Grande','Rio de Janeiro','RJ'),
('26551-090','Travessa Elpidio','Cruzeiro do Sul','Mesquita','RJ');


insert into aluno(nome,telefone,rg,cpf,datanascimento,cep,numerocasa,complemento,foto,sexo)VALUES
('Maria','(21)99886-1055','12555','123456893-10','2001-08-01','23085-610',31,'ap 102','vazio','F'),
('Pedro','(21)99999-1055','00012','123456789-10','1997-10-20','26551-090',100,'fundos','vazio','M');
	
insert into funcionario(cpffuncionario,nome,telefone,rg,cep,numerocasa,complemento,foto,sexo)VALUES
('123','Mário Silva','(21)9999-8888','0001','23085-610',40,'ap 202','vazio','M'),
('456','Gabriel Silva','(21)9999-7777','0002','26551-090',100,'casa','vazio','M'),
('789','Mariana Souza','(21)9999-5555','1234','23085-610',1820,'casa','vazio','F');

insert into professor(disponibilidade,cpffuncionario)VALUES
('segunda e sexta dia todo','123'),
('terca,quarta e quinta dia todo','456');

insert into atividade(nomeatividade,descricao)VALUES
('jumpp','atividade realizada pulando em um trampolim'),
('spinning','atividade realizada em uma bicicleta com subidas');

insert into habilitaprofessor(idatividade,idprofessor)VALUES
(1,1),(2,1),(2,2);

insert into aula(dataaula,horario,idprofessor,idatividade)VALUES
('2022-12-05','de 15:00 às 15:30h',1,1),
('2022-12-09','de 08:00 às 9:00h',1,2),
('2022-12-06','de 07:00 às 08:00h',2,2);

insert into aulaaluno(matricula,idaula)VALUES
(1,1),(1,2),(2,3);

insert into produto(nome,cor,valor,tamanho,quantidade)VALUES
('mochila Paloma','rosa',150,'un',20),
('mochila Raissa','azul',120,'un',30);

insert into venda(data,valor,quantidade,codigoproduto,cpffuncionario)VALUES
('2022-12-05',300,2,1,'789'),
('2022-12-05',120,1,2,'789');
 -->