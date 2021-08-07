// Pega o dia de hoje
const today = moment().format("DD/MM/YYYY");

const uid = document.getElementById("uid").textContent;

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
          voo => voo.data === today && voo.user_id === parseInt(uid)
        );

        var output = `<div class="container">`;

        // Faz a repeticao para o numero de voos existente
        for (var x = 0; x < hoje.length; x++) {
          // Se existir horario de voo enviar alerta
          if (hoje[x].saida_aero !== "") {
            output += `<div class="col"><div class="alert alert-danger alert-dismissible fade show" role="alert">
            Aeronave ${hoje[x].prefixo} decolou as <strong>${hoje[x].saida_aero}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div></div>`;
          }
        }
        output += "</div>";

        document.getElementById("users").innerHTML = output;
      });
    })
    .catch(function(err) {
      console.log("Fetch Error :-S", err);
    });
}

// Chama API de voos e verifica se nao existe nenhum problema
// fetch("https://api.migueldias.net/buzios/voos/decolagem")
//   .then(function(response) {
//     if (response.status !== 200) {
//       console.log(
//         "Looks like there was a problem. Status Code: " + response.status
//       );
//       return;
//     }

//     // Procura Voos de Hoje mediante resposta da API
//     response.json().then(function(data) {
//       const hoje = data.filter(
//         voo => voo.data === today && voo.user_id === parseInt(uid)
//       );

//       // Loop que verifica se tem voos hoje?
//       for (var x = 0; x < hoje.length; x++) {
//         // Procura a cada 7 segundos hora de saida
//         // Caso existam Voos
//         setInterval(() => {
//           saidaDeVoo();
//         }, 7000);
//       }
//     });
//   })
//   .catch(function(err) {
//     console.log("Fetch Error :-S", err);
//   });

if (window.location.pathname.match("/voos/editar/")) {
  function mudarHorarioPouso() {
    var pouso = document.getElementById("pouso");
    pouso.value = `${moment().format("HH")}:${moment().format("mm")}`;
  }

  function pouso() {
    var el = document.getElementById("hora-pouso");

    el.addEventListener("click", mudarHorarioPouso);
  }

  pouso();

  function mudarHorarioDecolagem() {
    var decolagem = document.getElementById("decolagem");
    decolagem.value = `${moment().format("HH")}:${moment().format("mm")}`;
  }

  function decolagem() {
    var el = document.getElementById("hora-decolagem");

    el.addEventListener("click", mudarHorarioDecolagem);
  }

  decolagem();
}

const filtra = async () => {
  const hoje = moment().format("DD/MM/YYYY");
  const ontem = moment()
    .add(-1, "Days")
    .format("DD/MM/YYYY");
  const anteOntem = moment()
    .add(-2, "Days")
    .format("DD/MM/YYYY");
  const amanha = moment()
    .add(+1, "Days")
    .format("DD/MM/YYYY");
  const doisDias = moment()
    .add(+2, "Days")
    .format("DD/MM/YYYY");
  const tresDias = moment()
    .add(+2, "Days")
    .format("DD/MM/YYYY");
  const quatroDias = moment()
    .add(+2, "Days")
    .format("DD/MM/YYYY");

  const response = await axios("https://api.migueldias.net/buzios/voos");
  var listaVoos = [];

  if (document.getElementById("datepicker").value.length !== 0) {
    listaVoos = await response.data.filter(
      i => i.data === `${document.getElementById("datepicker").value}`
    );
  }
  if (document.getElementById("datepicker").value.length === 0) {
    listaVoos = await response.data.filter(
      i =>
        i.data === hoje ||
        i.data === ontem ||
        i.data === anteOntem ||
        i.data === amanha ||
        i.data === doisDias ||
        i.data === tresDias ||
        i.data === quatroDias
    );
  }

  var html = "";
  var voo = document.getElementById("tabela");
  voo.innerHTML = "";

  for (x = 0; x < listaVoos.length; x++) {
    html += `<tr>`;
    html += `<td>${listaVoos[x].data}</td>`;
    html += `<td>${listaVoos[x].horario}</td>`;
    html += `<td>${listaVoos[x].procedencia}</td>`;
    html += `<td>${listaVoos[x].prefixo}</td>`;
    html += `<td><a href=https://radio.migueldias.net/voos/editar/${listaVoos[x].id}  target="_blank"><i class="fa fa-edit fa-2x"></i></a></td>`;
    html += `</tr>`;
  }

  if (voo) {
    voo.innerHTML = html;
  }
};

filtra();
