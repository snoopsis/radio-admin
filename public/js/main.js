// Pega o dia de hoje
const today = moment().format("DD/MM/YYYY");

const uid = document.getElementById("uid").textContent;
console.log(uid);

// Funcao para horario de voo como alerta
function saidaDeVoo() {
  // Chama API de voos e verifica se nao existe nenhum problema
  fetch("https://api.migueldias.net/buzios/voos/decolagem")
    .then(function(response) {
      if (response.status !== 200) {
        console.log(
          "Looks like there was a problem. Status Code: " + response.status
        );
        return;
      }

      // Usa a resposta da API para analisar se existem resultados
      // Caso existam Voos na data de hoje lanca um alerta
      response.json().then(function(data) {
        const hoje = data.filter(
          voo => voo.data === today && voos.user_id === uid
        );

        var output = "";

        // Faz a repeticao para o numero de voos existente
        for (var x = 0; x < hoje.length; x++) {
          // Se existir horario de voo enviar alerta
          if (hoje[x].saida_aero !== "") {
            output += `<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Aeronave ${hoje[x].prefixo} decolou as <strong>${hoje[x].saida_aero}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>`;
          }
        }

        document.getElementById("users").innerHTML = output;
      });
    })
    .catch(function(err) {
      console.log("Fetch Error :-S", err);
    });
}

// Chama API de voos e verifica se nao existe nenhum problema
fetch("https://api.migueldias.net/buzios/voos/decolagem")
  .then(function(response) {
    if (response.status !== 200) {
      console.log(
        "Looks like there was a problem. Status Code: " + response.status
      );
      return;
    }

    // Procura Voos de Hoje mediante resposta da API
    response.json().then(function(data) {
      const hoje = data.filter(
        voo => voo.data === today && voos.user_id === uid
      );
      // Loop que verifica se tem voos hoje?
      for (var x = 0; x < hoje.length; x++) {
        // Procura a cada 7 segundos hora de saida
        // Caso existam Voos
        setInterval(() => {
          saidaDeVoo();
        }, 7000);
      }
    });
  })
  .catch(function(err) {
    console.log("Fetch Error :-S", err);
  });
