<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Chegada - Skandi Buzios</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-light">
    <div class="container">
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="https://lh3.googleusercontent.com/proxy/KQYweF-QC4xM4G3o2Ezofnv_pmNhuvOq__3wNdyGAkbngVKwmfQoBGQYyF3vfZiKYXLwSivWNp71XjJ_BfF77jtvIzYz4A3JNV3cWXJ38YBppG5rI4D6sRrCf23SAPm5btxE" alt="" width="120" height="72">
          <h2>Skandi Buzios</h2>
          <p class="lead">Formulario de Chegada / Arrival Form</p>
        </div>
      
        <div class="row">
         
          <div class="col-md-12 order-md-1">
            <form method="post">
              <div class="row">
                <div class="col-sm-12 mb-3">
                  <label for="firstName">Nome / Name</label>
                  <input type="text" class="form-control" id="nome">
                </div>
              </div>

              <div class="row">
              <div class="col-sm-12 mb-3">
                <label for="firstName">Empresa / Company</label>
                <input type="text" class="form-control" id="empresa">
              </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mb-3">
                  <label for="firstName">Nacionalidade / Country</label>
                  <input type="text" class="form-control" id="nacionalidade">
                </div>
              </div>
             
            <div class="row">
              <div class="col-sm-12 mb-3">
                <label for="firstName">Local Nascimento / Place of Birth</label>
                <input type="text" class="form-control" id="local_nasc">
              </div>
            </div>

              <div class="row">
                <div class="col-sm-12 mb-3">
                  <label for="firstName">CPF / Passport</label>
                  <input type="text" class="form-control" id="cpf">
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 mb-3">
                  <label for="firstName">Nascimento / Date of Birth</label>
                  <input type="text" class="form-control" id="nascimento">
                </div>
              </div>

              <div class="row">
              <div class="col-sm-12 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
              </div>
              </div>

              <div class="row">
              <div class="col-sm-12 mb-3">
                <label for="address">Celular / Cellphone</label>
                <input type="text" class="form-control" id="celular">
              </div>
            </div>
      
             <div class="row">
              <div class="col-sm-12 mb-3">
                <label for="address2">Funcao / Rank</label>
                <input type="text" class="form-control" id="funcao">
              </div>
              </div>
      
              <div class="row">
                <div class="col-sm-12 mb-3">
                  <label for="country">Genero / Gender</label>
                  <select class="custom-select d-block w-100" id="genero">
                    <option value="">Escolha / Choose...</option>
                    <option value="Masculino">Masculino / Male</option>
                    <option value="Feminino">Feminino / Female</option>
                  </select>
                </div>
              </div>

              <h6>Contato de Emergencia / Next of Kin</h6>

              <div class="row">
                <div class="col-sm-12 mb-3">
                  <label for="address2">Nome / Name</label>
                  <input type="text" class="form-control" id="nok_nome">
                </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                      <label for="address2">Celular / Cellphone</label>
                      <input type="text" class="form-control" id="nok_celular">
                    </div>
                    </div>

              <hr class="mb-4">
      
              <button class="btn btn-primary btn-lg btn-block" id="enviar" type="submit">Enviar / Send</button>
            </form>
          </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2016-2020 Skandi Buzios</p>
          </footer>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script>
    
    document.querySelector('#enviar').addEventListener('click', function(e){
  e.preventDefault();
  
  var nome = document.getElementById('nome').value;
  var empresa = document.getElementById('empresa').value;
  var nacio = document.getElementById('nacionalidade').value;
  var local_nasc = document.getElementById('local_nasc').value;
  var cpf = document.getElementById('cpf').value;
  var nascimento = document.getElementById('nascimento').value;
  var email = document.getElementById('email').value;
  var celular = document.getElementById('celular').value;
  var funcao = document.getElementById('funcao').value;
  var genero = document.getElementById('genero').value;
  var nok_nome = document.getElementById('nok_nome').value;
  var nok_celular = document.getElementById('nok_celular').value;

  var nacionalidade = nacio + ' nascido em ' + local_nasc;


  if(nome && empresa && nacio && local_nasc && cpf && nascimento && email && celular && funcao && genero && nok_nome && nok_celular !== null){
    sendMail(nome, empresa, nacionalidade, cpf, nascimento, email, celular, funcao, genero, nok_nome, nok_celular);
    document.getElementById('enviar').style.display = 'none';
    swal("Parabens / Congrats", "Mensagem Enviada, Obrigado! / Messa Sent, Thanks!", "success");
    setTimeout(() => location.href = 'https://buzios.migueldias.net', 3000);
  } else {
    swal("Erro / Error", "Todos os campos obrigatorios / All fields mandatory", "error");
  }
  
})

function sendMail(nome, empresa, nacionalidade, cpf, nascimento, email, celular, funcao, genero, nok_nome, nok_celular){
    // Send a POST request
    axios({
    method: 'post',
    url: 'http://157.230.177.222:6010/novoMembro',
    data: {
      nome: nome,
      empresa: empresa,
      funcao: funcao,
      nacionalidade: nacionalidade,
      cpf: cpf,
      nascimento: nascimento,
      email: email,
      genero: genero,
      celular: celular,
      nok_nome: nok_nome,
      nok_cel: nok_celular
    }
});

}

    </script>
  </body>
</html>