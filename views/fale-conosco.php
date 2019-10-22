
      
 
                
                <hgroup>

                    <h1>Formulário de Contato</h1>
                    
                    <h3 class="direita"></h3>

                </hgroup>
                </header>
                <form action="processa.php" id="tcontato" method="post">

                
                <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="input_text" type="text" data-length="10" name="nome">
            <label for="input_text">Nome</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea" data-length="120" name="mensagem"></textarea>
            <label for="textarea2">Mensagem</label>
          </div>
        </div>
      </form>
    </div>
                  
    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    
    <i class="material-icons right"></i>
  </button>
                    </form>

                    <hr>

                    
                    




        <?php 
            
          
        
            while ($linha = mysqli_fetch_array($consultas)){
				echo $linha['nome'];
				echo $linha['mensagem'];
		
			}
		?>
	
               
           
 