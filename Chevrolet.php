<html>
<head>
	<title>Chevrolet</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Stilo.css">
    <link rel="stylesheet" type="text/css" href="Formulario.css">
</head>
<body style="background-color: #8181F7">
	<nav class ="navbar navbar-expand-lg navbar-light margin">
		<div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    	<img src="img/logo.png" width="150" height="120">
    </a>


    <div class = "collapse navbar-collapse">
    	<ul class="navbar-nav">
    		<li class="nav-item">
    			<a class="nav-link" href="#modelos">Modelos Chevrolet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#agendar">Agendar Locação</a>
            </li>
    	</ul>
    </div>
    </nav>

    <section id="modelos">
        <div class = "container-fluid quemsomos text-center margin">
            <h3 class="margin">Veículos Chevrolet</h3>
      
      <center> <div class="card mb-3" style="width: 40rem">
            <img class="card-img-top" src="img/Onix.jfif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Chevrolet Onix 2020</h5>
            <p class="card-text">Chevrolet Onix 1.0 LT manual
                <ul style="text-align: left;">
                    <li> 5 lugares</li>
                    <li> Ar condicionado</li>
                    <li>Central Multimídia de 7 polegadas</li>
                    <li>Flex</li>
                </ul></p>
                <button type="button" class="btn btn-outline-danger">Por apenas R$ 319,90 por semana!!!</button></center>
            
  </div>
        <center>
         <div class="card mb-3" style="width: 40rem">
            <img class="card-img-top" src="img/Prisma.jfif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Chevrolet Prisma 2017</h5>
            <p class="card-text">Chevrolet Prisma 1.4 LT manual.</p>
                <ul style="text-align: left;">
                    <li> Flex </li>
                    <li>5 lugares</li>
                    <li>Flex</li>
                    <li> Ar condicionado</li>
                </ul>
            <button type="button" class="btn btn-outline-danger">Por apenas R$ 349,90 por semana!!!</button></center><br><br>
            
  </div>
             <center><div class="card mb-3" style="width: 40rem" "margin-top: 20px;">
            <img class="card-img-top" src="img/S10.jfif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Chevrolet S10 2019</h5>
            <p class="card-text">Chevrolet S10 LTZ 2.8 turbo automático 
                <ul style="text-align: left;">
                    <li>4x4</li>
                    <li>Diesel</li>
                    <li>200 Cv</li>
                    <li>Direção elétrica</li>
                </ul></p>
            <button type="button" class="btn btn-outline-danger">Por apenas R$ 469,90 por semana!!!</button></center>
  </div>
</div>
</div>  
    </section><hr>

    <section id="agendar" style="background-color: #FAFAD2">
        <div class = "container-fluid quemsomos text-center margin">
            <h3 class="margin">Solicitar Locação</h3></div>
        
        <form method="POST" action="Confirma.php" style="text-align: center;">
            
            <section id="Cliente">
                <div class="campo">
                    <label>NOME</label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div class="campo">
                    <label>CPF</label>
                    <input type="text" name="cpf" required maxlength="11">
                </div>
                
               <div class="campo">
                    <label>TELEFONE</label>
                    <input type="text" size="1" name="ddd" required maxlength="2"> - <input type="text" name="celular" required maxlength="9">
                </div>
            </section>
           
           <section id="Marca">
            <div class="campo">     
                MARCA:
                <select name="marca">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value="Chevrolet">Chevrolet</option>
                   </select>

                   &nbsp&nbsp CÓDIGO MARCA:
                 <select name="cd_Marca">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value=2>2</option>
                   </select>  
            </section>
            </div> 

            <section id="Modelo"> 
                <div class="campo">
                MODELO:
                <select name="modelo">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value ="Onix">Onix</option>
                    <option value="Prisma">Prisma</option>
                    <option value="S10">S10</option>
                    
                </select>

                 &nbsp&nbsp CÓDIGO MODELO:
                <select name="cd_Modelo">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    
                </select>  
            </section>    
            </div>

             <section id="Carro">
                <div class="campo">
                    Placa do veículo: 
                    <select name="placa" required>
                    <option required selected disabled value="">SELECIONE</option>
                    <option value="CBA4321"> Onix - CBA4321</option>
                    <option value="DFF3232"> Prisma - DFF3232</option> 
                    <option value="JKL7877"> S10 - JKL7877</option>  
            </select> 
                           
                    &nbsp&nbsp Ano do Veículo:: 
                    <select name="ano">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value="2020"> Onix - 2020</option>
                    <option value="2017"> Prisma - 2017</option>
                    <option value="2019">S10 - 2019</option>
                </select>
            
                    &nbsp&nbsp Cor do veículo: 
                    <select name="cor">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value="Vermelho"> Onix - Vermelho</option>
                    <option value="Prata"> Prisma - Prata</option>
                    <option value="Prata"> S10 - Prata</option>
                    </select>
                </div>
        </div>
         </section>
       
       <section id="Locacao">
                <div class="campo">
                    Data de locação: <input type="date" name="dtLocacao">
                    &nbsp&nbsp Data de devoluçao: <input type="date" name="dtDevolucao">

                </div>    
            </section>

            <button class="bot" type="submit" name="enviar">ENVIAR</button>
        </form>



    </div>

    </section>
   <footer class=" container-fluid text-center bg-footer margin">
    <p>Desenvolvido por Luiz Amancio</p>
  </footer>
</body>
</html>



