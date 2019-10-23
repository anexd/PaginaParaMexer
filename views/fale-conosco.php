<div class="row"></div>
<div class="row container">     
  <section class="form col s12 m12 ">
                
    <hgroup>

      <h5 class=" form start float-text">Deixe um comentário  </h5>
                    
      

    </hgroup>
    <fieldset>            
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="input_text" type="text" data-length="10">
            <label for="input_text">Nome : </label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Textarea</label>
          </div>
        </div>
      </form>
    </div>      
         
    </form>
</fieldset>
    <br>
    <div class="button">            
    <button class="btn indigo" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
</div>
  </button>
  </form>

  </section>                 
</div>                  
                   
                   
                   
                   
                   
                   
                   
<hr>

                    
                    




        <?php 
            
          
        
            while ($linha = mysqli_fetch_array($consultas)){
				echo $linha['nome'];
				echo $linha['mensagem'];
		
			}
		?>
	
               
           
 