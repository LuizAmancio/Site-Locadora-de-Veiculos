<!DOCTYPE html>
<html>
<head>
	<title>Ford</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Stilo.css">
    <link rel="stylesheet" type="text/css" href="Formulario.css">
</head>


<body style="background-color: #8181F7">
	
    <nav style="background-color: #FFD700" class ="navbar navbar-expand-lg navbar-light margin">
		<div class="container-fluid">
    <a class="navbar-brand" href="Index.html">
    	<img src="img/logo.png" width="150" height="120">
    </a>


    <div class = "collapse navbar-collapse">
    	<ul class="navbar-nav">
    		<li class="nav-item">
    			<a class="nav-link" href="#modelos">Modelos Ford</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#agendar">Agendar Locação</a>
            </li>
    	</ul>
    </div>
    </nav>

    <section id="modelos">
        <div class = "container-fluid quemsomos text-center margin">
            <h3 class="margin">Veículos Ford</h3>
      
      <center> <div class="card mb-3" style="width: 40rem">
            <img class="card-img-top" src="img/KaS.jfif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Ford Ka Sedan</h5>
            <p class="card-text">Ford Ka Sedan 2019 com motor 1.5 de 3 cilindros e câmbio automático.
                <ul style="text-align: left;">
                    <li> 5 lugares</li>
                    <li> Ar condicionado</li>
                    <li>Direção Hidráulica</li>
                    <li>Flex</li>
                </ul></p>
                <button type="button" class="btn btn-outline-danger">Por apenas R$ 299,90 por semana!!!</button></center>
            
  </div>
        <center>
         <div class="card mb-3" style="width: 40rem">
            <img class="card-img-top" src="img/Eco.jfif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Ford EcoSport</h5>
            <p class="card-text">Ford Ecosport 2018 Freestyler com motor 1.5 e câmbio manual.</p>
                <ul style="text-align: left;">
                    <li> SUV </li>
                    <li>5 lugares</li>
                    <li>Flex</li>
                    <li> Ar condicionado</li>
                </ul>
            <button type="button" class="btn btn-outline-danger">Por apenas R$ 349,90 por semana!!!</button></center><br><br>
            
  </div>
             <center><div class="card mb-3" style="width: 40rem" "margin-top: 20px;">
            <img class="card-img-top" src="img/Fiesta.jfif" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Ford New Fiesta</h5>
            <p class="card-text">Ford New Fiesta 2018 com motor 1.6 e câmbio manual
                <ul style="text-align: left;">
                    <li>5 lugares</li>
                    <li>Flex</li>
                    <li>Ar condicionado</li>
                    <li>Direção elétrica</li>
                </ul></p>
            <button type="button" class="btn btn-outline-danger">Por apenas R$ 269,90 por semana!!!</button></center>
  </div>
</div>
</div>  
    </section><hr>

    <section id="agendar" style="background-color: #F0F8FF">
        <div  class = "container-fluid quemsomos text-center margin">
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
                    <option value="Ford">Ford </option>
                   </select>

                   &nbsp&nbsp CÓDIGO MARCA:
                 <select name="cd_Marca">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value="1">1</option>
                   </select>  
            </section>
            </div> 

            <section id="Modelo"> 
                <div class="campo">
                MODELO:
                <select name="modelo">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value ="KaSedan">Ford Ka Sedan</option>
                    <option value="EcoSport">Ford EcoSport</option>
                    <option value="Fiesta">Ford New Fiesta</option>
                    
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
                    <option value="ABC1234"> KA Sedan - ABC1234</option>
                    <option value="BCD456"> EcoSport - BCD456</option> 
                    <option value="EFG789"> New Fiesta- EFG789</option>  
            </select> 
                           
                    &nbsp&nbsp Ano do Veículo:: 
                    <select name="ano">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value="2019"> KA Sedan - 2019</option>
                    <option value="2018"> EcoSport - 2018</option>
                    <option value="2018">New Fiesta - 2018</option>
                </select>
            
                    &nbsp&nbsp Cor do veículo: 
                    <select name="cor">
                    <option required selected disabled value="">SELECIONE</option>
                    <option value="Prata"> KA Sedan - Prata</option>
                    <option value="Prata"> EcoSport - Prata</option>
                    <option value="Vermelho"> New Fiesta - Vermelho</option>
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


