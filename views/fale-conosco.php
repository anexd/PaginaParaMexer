
      
 
                
                <hgroup>

                    <h1>Formulário de Contato</h1>
                    
                    <h3 class="direita"></h3>

                </hgroup>
                </header>
                <form action="processa.php" id="tcontato" method="post">

                
                    <fieldset id="tusuario">
                        <legend>Identificação do Usuário</legend>
                        <p><label for="cnome"> 
                        Nome:</label> <input type="text" name="nome" id="cnome" size="20" maxlength="250" placeholder="Nome Completo" required></p>
                        </fieldset>
                    <br>
                    <fieldset id="tmensagem">
                        <legend>Mensagem do Usuário</legend>

                        <p><label for="cmensagem"> Mensagem:</label>
                            <textarea name="mensagem" id="cmensagem" cols="35" rows="5" placeholder="Deixe sua mensagem" required></textarea>
                        </p>
                    </fieldset>
                    <br>
                  
                    <input type="image" name="tEnviar" src="_imagens/botao-enviar.png">

                    <br>
                    </form>

                    <hr>

                    
                    




        <?php 
            
          
        
			while ($linha = mysqli_fetch_array($consultas)){
				echo $linha['nome'];
				echo $linha['mensagem'];
		
			}
		?>
	
               
           
 