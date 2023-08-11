<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Cadastro de Biografias</title>
</head>
<body>
    <div class="container">
        <header class="blog-header" style="padding-bottom: 1rem;padding-top: 3rem;">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 offset-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Cadastro de Biografias</a>
                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-0">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="#">Página Inicial</a>
                <a class="p-2 link-secondary" href="#">Sobre a página</a>
            </nav>
        </div>
    </div>
    <div class="container">
        <main id="content" class="blog-header py-3">
            <?php include $content; ?>
        </main>
        <footer class="blog-footer">
  <p>Trabalho da disciplina de programação web - Aluno: Erick Lopes <a href="https://github.com/ErickCSHARP">link Github</a>.</p>
  <p>
    <a href="#">Voltar ao topo</a>
  </p>
</footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>