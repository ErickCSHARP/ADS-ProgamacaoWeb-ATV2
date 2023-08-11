
     <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <p class="lead mb-0 ">Preencha o formulário de cadastro</p>
                </div>
            </div>
     <form action="/atv2web/cadastro.create.php" method="post" enctype="multipart/form-data" class="row g-3 row ">
          <div class="col-md-6 offset-md-3">
               <label for="nome" class="form-label">Nome</label>
               <input type="text" class="form-control" name="nome" required>
          </div>
          <div class="col-md-2 offset-md-3">
               <label for="idade" class="form-label">Idade</label>
               <input type="number" class="form-control" name="idade" required>
          </div>

          <div class="col-md-4  ">
               <label for="profissao" class="form-label">Profissão:</label>
               <select name="profissao" class="form-select" required>
                    <option value="">Selecione uma profissão</option>
                    <option value="Ator">Ator</option>
                    <option value="Engenheiro">Engenheiro</option>
                    <option value="Médico">Médico</option>
                    <option value="Advogado">Advogado</option>
                    <option value="Programador">Programador</option>
                    <option value="Artista">Artista</option>
                    <option value="Músico">Músico</option>
               </select>
          </div>

          <div class="col-md-6 offset-md-3">
               <label for="resumo" class="form-label">Resumo</label>
               <textarea class="form-control" name="resumo" rows="3" required></textarea>
          </div>

          <!--<label for="nome">Nome:</label>
         <input type="text" name="nome" required><br>

         <label for="idade">Idade:</label>
         <input type="number" name="idade" required><br>

        
          <select name="profissao" required>
          <option value="">Selecione uma profissão</option>
          <option value="Ator">Ator</option>
          <option value="Engenheiro">Engenheiro</option>
          <option value="Médico">Médico</option>
          <option value="Advogado">Advogado</option>
          <option value="Programador">Programador</option>
          <option value="Artista">Artista</option>
          <option value="Músico">Músico</option>
          </select><br>

         <label for="resumo">Resumo:</label>
         <textarea name="resumo" rows="4" required></textarea><br> -->


         <div class="col-md-6  offset-md-3 justify-content-center">
             <label for="foto" class="form-label">Foto</label>
             
             <input type="file" name="foto" class="form-control" accept="image/*" required/>
         </div>
         
         <!-- <input type="file" name="foto" accept="image/*" required><br> -->

         <div class="col-md-2  offset-md-6 justify-content-center">
             <button type="submit" class="btn btn-success ">Cadastrar</button>
         </div>
         <!-- <input type="submit" value="Cadastrar"> -->
    </form>
  