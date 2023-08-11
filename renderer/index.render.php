
            <div class="row p-4 p-md-5 mb-4 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">Lista de biografias</h1>
                    <p class="lead my-3">Em cada cadastro, você encontrará informações como o nome do autor, idade, profissão e um breve resumo bibliográfico, além de uma ilustração representativa..</p>
                    <!-- <p class="lead mb-0 "><a href="cadastro.php" class="btn btn-outline-dark text-white fw-bold">+ Clique aqui para incluir nova biografia ...</a></p> -->
                    <p class="lead mb-0 "><a href="cadastro.php" class="btn btn-outline-light fw-bold">+ Clique aqui para incluir nova biografia ...</a></p>
                </div>
                
                <div class="col-md-6 px-0 align-self-end">
               
                    <figure class="text-end">
                        <blockquote class="blockquote">
                            <p class="lh-base">Análise e Desenvolvimento de Sistemas</p><br>
                        </blockquote>
                        <p class="lh-base">Disciplina - Programação WEB<br>
                        <a href="https://github.com/ErickCSHARP/ADS-ProgamacaoWeb-ATV2" class="link-secondary">Repósitório Github</a>
                        </p>
                        <figcaption class="blockquote-footer">
                            Aluno <cite title="Source Title">Erick Lopes</cite>
                        </figcaption>
                    </figure>
                </div>
                
            </div>
            <div class="row mb-2">

                <?php
                        include './db/conexao.php';

                        if ($conexaoOk)
                        {
                            // Consultar os registros no banco de dados
                            $sql = "SELECT * FROM biografias";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) 
                            {
                                while ($row = $result->fetch_assoc()) 
                                {
                ?>

                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <div class="nav d-flex justify-content-between">
                                <div class="col-11">
                                    <strong class="d-inline-block mb-2 text-primary">Biografia <?php echo $row["id"]; ?></strong>
                                </div>
                                <div class="col-1">
                                    <a href="/atv2web/cadastro.delete.php?id=<?php echo $row["id"] ?>" ><i width="13" data-feather="trash-2" ></i></a> 
                                </div>
                            </div>
                            <!-- <strong class="d-inline-block mb-2 text-primary">Biografia <?php echo $row["id"]; ?></strong> -->
                            <h3 class="mb-0"><?php echo $row["nome"]; ?></h3>
                            <p class="fw-light lh-0 py-0" style="font-size: 13px;">
                                Profissão:<?php echo $row["profissao"]; ?><br>
                                <?php echo $row["idade"]; ?> anos</p>
                            </p>
                            <div class="mb-0 text-muted "></div>
                                <p class="card-text mb-auto" style="font-size: 13px; height: 6rem; overflow: auto;"><i>Resumo:</i><?php echo ' '.$row["resumo"]; ?></p>
                                <!-- <a href="cadastro.delete.php?id=<?php echo $row["id"] ?>" ><i width="13" data-feather="trash-2" ></i></a>  -->
                            </div>
                            <div class="col-auto d-none d-lg-block p-0" style="background-color:darkgray;">
                            <a href='<?php echo $row["foto"]; ?>' target='_blank'><img src='<?php echo $row["foto"]; ?>' alt='Foto' width="200" height="240"></a>
                        </div>
                    </div>
                </div>

                <?php
                                }
                            } 
                            else 
                            {
                                echo "<tr><td colspan='5'>Nenhum registro encontrado</td></tr>";
                            }

                            $conn->close();
                        }
                ?>

            </div>
       