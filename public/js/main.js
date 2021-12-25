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

if (window.location.pathname === "/voos") {
  filtra();
}

// ### INICIO EMBARQUE E DESEMBARQUE ###

var pessoalDoVoo = [];
var nomesPessoal = [];

const chamaNomes = async () => {
  const response = await axios("https://api.migueldias.net/buzios/crewnames");
  nomesPessoal.push(response.data);

  const embarqueJS = new autoComplete({
    selector: "#embarqueAutoComplete",
    placeHolder: "Nome...",
    data: {
      src: response.data.map(i => i.name),
      cache: true
    },
    resultItem: {
      highlight: true
    },
    events: {
      input: {
        selection: event => {
          const selection = event.detail.selection.value;
          embarqueJS.input.value = selection;
        }
      }
    }
  });

  const desembarqueJS = new autoComplete({
    selector: "#desembarqueAutoComplete",
    placeHolder: "Nome...",
    data: {
      src: response.data.map(i => i.name),
      cache: true
    },
    resultItem: {
      highlight: true
    },
    events: {
      input: {
        selection: event => {
          const selection = event.detail.selection.value;
          desembarqueJS.input.value = selection;
        }
      }
    }
  });
};

chamaNomes();

// Chama os nomes do pessoal que esta embarcando
const embarca = async () => {
  const nome = document.getElementById("embarqueAutoComplete").value;

  const tripulante = await nomesPessoal[0].filter(i => i.name === nome);

  const res = await axios.post("https://api.migueldias.net/buzios/embarque", {
    voo_id: window.location.pathname.match(/([1-9][0-9]*)/)[0],
    crew_id: tripulante[0].id
  });

  var html = "";
  var lista = document.getElementById("listaEmbarque");
  lista.innerHTML = "";

  pessoalDoVoo.push({ nome: nome, id: res.data.insertId });

  for (x = 0; x < pessoalDoVoo.length; x++) {
    html += `<tr>`;
    html += `<td>${pessoalDoVoo[x].nome}</td>`;
    html += `<td style="color: red;"><i onclick="remVooOn(${pessoalDoVoo[x].id})" class="fa fa-window-close fa-lg" aria-hidden="true"></i></td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

// Chama os nomes do pessoal que esta desembarcando
const desembarca = async () => {
  const nome = document.getElementById("desembarqueAutoComplete").value;

  const tripulante = await nomesPessoal[0].filter(i => i.name === nome);

  const res = await axios.post(
    "https://api.migueldias.net/buzios/desembarque",
    {
      voo_id: window.location.pathname.match(/([1-9][0-9]*)/)[0],
      crew_id: tripulante[0].id
    }
  );

  pessoalDoVoo.push({ nome: nome, id: res.data.insertId });

  var html = "";
  var lista = document.getElementById("listaDesembarque");
  lista.innerHTML = "";

  for (x = 0; x < pessoalDoVoo.length; x++) {
    html += `<tr>`;
    html += `<td>${pessoalDoVoo[x].nome}</td>`;
    html += `<td style="color: red;"><i onclick="remVooOff(${pessoalDoVoo[x].id})" class="fa fa-window-close fa-lg" aria-hidden="true"></i></td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

// Trabalha com a lista de pessoal embarcando
const chamaVooEmbarque = async () => {
  const res = await axios.post(
    "https://api.migueldias.net/buzios/vooembarque",
    {
      voo_id: window.location.pathname.match(/([1-9][0-9]*)/)[0]
    }
  );

  // Compara as 2 propriedades do objeto
  function compare(a, b) {
    let comparison = 0;
    var comparaA = a.nome;
    var comparaB = b.nome;
    // Converte para um numero inteiro
    if (comparaA < comparaB) {
      // Se existir decolagem pela tarde muda a ordem do array
      comparison = -1;
    } else if (comparaA > comparaB) {
      // Se nao existir decolagens pela tarde mantem ordem inicial do array
      comparison = 1;
    }
    return comparison;
  }

  for (i = 0; i < res.data.length; i++) {
    pessoalDoVoo
      .sort(compare)
      .push({ nome: res.data[i].name, id: res.data[i].id });
  }

  var html = "";
  var lista = document.getElementById("listaEmbarque");
  lista.innerHTML = "";

  for (x = 0; x < pessoalDoVoo.length; x++) {
    html += `<tr>`;
    html += `<td>${pessoalDoVoo[x].nome}</td>`;
    html += `<td style="color: red;"><i onclick="remVooOn(${pessoalDoVoo[x].id})"class="fa fa-window-close fa-lg" aria-hidden="true"></i></td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

// Trabalha com a lista de pessoal desembarcando
const chamaVooDesembarque = async () => {
  const res = await axios.post(
    "https://api.migueldias.net/buzios/voodesembarque",
    {
      voo_id: window.location.pathname.match(/([1-9][0-9]*)/)[0]
    }
  );

  // Compara as 2 propriedades do objeto
  function compare(a, b) {
    let comparison = 0;
    var comparaA = a.nome;
    var comparaB = b.nome;
    // Converte para um numero inteiro
    if (comparaA < comparaB) {
      // Se existir decolagem pela tarde muda a ordem do array
      comparison = -1;
    } else if (comparaA > comparaB) {
      // Se nao existir decolagens pela tarde mantem ordem inicial do array
      comparison = 1;
    }
    return comparison;
  }

  for (i = 0; i < res.data.length; i++) {
    pessoalDoVoo
      .sort(compare)
      .push({ nome: res.data[i].name, id: res.data[i].id });
  }

  var html = "";
  var lista = document.getElementById("listaDesembarque");
  lista.innerHTML = "";

  for (x = 0; x < pessoalDoVoo.length; x++) {
    html += `<tr>`;
    html += `<td>${pessoalDoVoo[x].nome}</td>`;
    html += `<td style="color: red;"><i onclick="remVooOff(${pessoalDoVoo[x].id})" class="fa fa-window-close fa-lg" aria-hidden="true"></i></td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

function limparPessoal() {
  pessoalDoVoo = [];
}

// ### FIM EMBARQUE E DESEMBARQUE ###

// ### INICIO CREW AUTOCOMPLETE

const crewNomes = () => {
  // Make a request for a user with a given ID
  axios
    .get("https://api.migueldias.net/buzios/crewnames")
    .then(function(crew) {
      // handle success
      const crewJS = new autoComplete({
        selector: "#crewNames",
        placeHolder: "Nome...",
        data: {
          src: crew.data.map(i => i.name),
          cache: true
        },
        resultItem: {
          highlight: true
        },
        events: {
          input: {
            selection: event => {
              const selection = event.detail.selection.value;
              crewJS.input.value = selection;
            }
          }
        }
      });
    })
    .catch(function(error) {
      // handle error
      console.log(error);
    });
};

if (
  window.location.pathname === "/crews" ||
  window.location.pathname === "/crews/busca"
) {
  crewNomes();
}

// FIM CREW AUTOCOMPLETE ###

// ### INICIO CONTATOS AUTOCOMPLETE

const telefonesNames = () => {
  // Make a request for a user with a given ID
  axios
    .get("https://api.migueldias.net/buzios/getunidades")
    .then(function(unidades) {
      // handle success
      const unidadesJS = new autoComplete({
        selector: "#contatosNames",
        placeHolder: "Nome...",
        data: {
          src: unidades.data,
          cache: true
        },
        resultItem: {
          highlight: true
        },
        events: {
          input: {
            selection: event => {
              const selection = event.detail.selection.value;
              unidadesJS.input.value = selection;
            }
          }
        }
      });
    })
    .catch(function(error) {
      // handle error
      console.log(error);
    });
};

if (
  window.location.pathname === "/contatos" ||
  window.location.pathname === "/contatos/busca"
) {
  telefonesNames();
}

// FIM CONTATOS AUTOCOMPLETE ###

// ### Funcao para remover tripulante desembarcando no voo

const remVooOff = id => {
  axios.post("https://api.migueldias.net/buzios/vooremoveoff", {
    id: id
  });
  const res = pessoalDoVoo.filter(function(value, index, arr) {
    return value.id !== id;
  });

  pessoalDoVoo = [];

  pessoalDoVoo = res;

  var html = "";
  var lista = document.getElementById("listaDesembarque");
  lista.innerHTML = "";

  for (x = 0; x < pessoalDoVoo.length; x++) {
    html += `<tr>`;
    html += `<td>${pessoalDoVoo[x].nome}</td>`;
    html += `<td style="color: red;"><i onclick="remVooOff(${pessoalDoVoo[x].id})"class="fa fa-window-close fa-lg" aria-hidden="true"></i></td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

// Funcao para remover tripulante embarcando no voo ###

// ### Funcao para remover tripulante desembarcando no voo

const remVooOn = id => {
  axios.post("https://api.migueldias.net/buzios/vooremoveon", {
    id: id
  });

  const res = pessoalDoVoo.filter(function(value, index, arr) {
    return value.id !== id;
  });

  pessoalDoVoo = [];

  pessoalDoVoo = res;

  var html = "";
  var lista = document.getElementById("listaEmbarque");
  lista.innerHTML = "";

  for (x = 0; x < pessoalDoVoo.length; x++) {
    html += `<tr>`;
    html += `<td>${pessoalDoVoo[x].nome}</td>`;
    html += `<td style="color: red;"><i onclick="remVooOn(${pessoalDoVoo[x].id})"class="fa fa-window-close fa-lg" aria-hidden="true"></i></td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

// Funcao para remover tripulante embarcando no voo ###

// ## Funcao para pegar Embarque e Desembarque

const paxOnOff = async voo_id => {
  const embarques = await axios.post(
    "https://api.migueldias.net/buzios/vooembarque",
    {
      voo_id: voo_id
    }
  );

  const desembarques = await axios.post(
    "https://api.migueldias.net/buzios/voodesembarque",
    {
      voo_id: voo_id
    }
  );

  const empOnOff = empresa => {
    const empresaEmbarque = embarques.data.filter(
      crew => crew.company === empresa
    );
    const empresaDesembarque = desembarques.data.filter(
      crew => crew.company === empresa
    );

    if (empresaEmbarque.length !== 0 && empresaDesembarque.length !== 0) {
      return (
        ` ${empresa}:` +
        empresaEmbarque.length +
        `x` +
        empresaDesembarque.length
      );
    }

    if (empresaEmbarque.length !== 0 && empresaDesembarque.length === 0) {
      return (
        ` ${empresa}:` +
        empresaEmbarque.length +
        `x` +
        empresaDesembarque.length
      );
    }

    if (empresaEmbarque.length === 0 && empresaDesembarque.length !== 0) {
      return (
        ` ${empresa}:` +
        empresaEmbarque.length +
        `x` +
        empresaDesembarque.length
      );
    }

    if (empresaEmbarque.length === 0 && empresaDesembarque.length === 0) {
      return "";
    }
  };

  var paxonoff = document.getElementById("paxonoff");
  paxonoff.value =
    "Troca de Turma: " +
    embarques.data.length +
    "x" +
    desembarques.data.length +
    " (" +
    empOnOff("Ext Company") +
    empOnOff("TechnipFMC") +
    empOnOff("UNIFLEX") +
    empOnOff("EQSB") +
    empOnOff("Petrobras") +
    empOnOff("DOF") +
    " )";
};

// ### Chama os paxs

var paxClick = document.getElementById("chamadaPax");
if (paxClick !== null) {
  paxClick.addEventListener("click", () => {
    paxOnOff(window.location.pathname.match(/([1-9][0-9]*)/)[0]);
  });
}

// Chama os paxs ###

// Variaveis Globais:
var pessoalEmbarcando = [];
var pessoalDesembarcando = [];

// Trabalha com a lista de pessoal embarcando
const pobDeEmbarque = async () => {
  const res = await axios.post(
    "https://api.migueldias.net/buzios/vooembarque",
    {
      voo_id: window.location.pathname.match(/([1-9][0-9]*)/)[0]
    }
  );

  // Compara as 2 propriedades do objeto
  function compare(a, b) {
    let comparison = 0;
    var comparaA = a.nome;
    var comparaB = b.nome;
    // Converte para um numero inteiro
    if (comparaA < comparaB) {
      // Se existir decolagem pela tarde muda a ordem do array
      comparison = -1;
    } else if (comparaA > comparaB) {
      // Se nao existir decolagens pela tarde mantem ordem inicial do array
      comparison = 1;
    }
    return comparison;
  }

  for (i = 0; i < res.data.length; i++) {
    pessoalEmbarcando.sort(compare).push({
      nome: res.data[i].name,
      cabin: res.data[i].cabin,
      funcao: res.data[i].funcao,
      country: res.data[i].country,
      company: res.data[i].company,
      sispat: res.data[i].sispat,
      data: res.data[i].data,
      troca_pax: res.data[i].troca_pax
    });
  }

  var html = "";
  var lista = document.getElementById("pobembarque");
  document.getElementById("tagEmbarque").textContent =
    "EMBARQUE " + pessoalEmbarcando[0].data;
  var lista = document.getElementById("pobembarque");
  document.getElementById("paxttinfo").textContent =
    pessoalEmbarcando[0].troca_pax;
  lista.innerHTML = "";

  for (x = 0; x < pessoalEmbarcando.length; x++) {
    html += `<tr>`;
    html += `<th scope="row">${pessoalEmbarcando[x].cabin}</th>`;
    html += `<td>${pessoalEmbarcando[x].funcao}</td>`;
    html += `<td>${pessoalEmbarcando[x].nome}</td>`;
    html += `<td>${pessoalEmbarcando[x].country}</td>`;
    html += `<td>${pessoalEmbarcando[x].company}</td>`;
    html += `<td>${pessoalEmbarcando[x].sispat}</td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

if (document.getElementById("pobDeId") !== null) {
  pobDeEmbarque();
}

// Trabalha com a lista de pessoal desembarcando
const pobDeDesembarque = async () => {
  const res = await axios.post(
    "https://api.migueldias.net/buzios/voodesembarque",
    {
      voo_id: window.location.pathname.match(/([1-9][0-9]*)/)[0]
    }
  );

  // Compara as 2 propriedades do objeto
  function compare(a, b) {
    let comparison = 0;
    var comparaA = a.nome;
    var comparaB = b.nome;
    // Converte para um numero inteiro
    if (comparaA < comparaB) {
      // Se existir decolagem pela tarde muda a ordem do array
      comparison = -1;
    } else if (comparaA > comparaB) {
      // Se nao existir decolagens pela tarde mantem ordem inicial do array
      comparison = 1;
    }
    return comparison;
  }

  for (i = 0; i < res.data.length; i++) {
    pessoalDesembarcando.sort(compare).push({
      nome: res.data[i].name,
      cabin: res.data[i].cabin,
      funcao: res.data[i].funcao,
      country: res.data[i].country,
      company: res.data[i].company,
      sispat: res.data[i].sispat,
      data: res.data[i].data
    });
  }

  var html = "";
  var lista = document.getElementById("pobdesembarque");
  document.getElementById("tagDesembarque").textContent =
    "DESEMBARQUE " + pessoalEmbarcando[0].data;
  lista.innerHTML = "";

  for (x = 0; x < pessoalDesembarcando.length; x++) {
    html += `<tr>`;
    html += `<th scope="row">${pessoalDesembarcando[x].cabin}</th>`;
    html += `<td>${pessoalDesembarcando[x].funcao}</td>`;
    html += `<td>${pessoalDesembarcando[x].nome}</td>`;
    html += `<td>${pessoalDesembarcando[x].country}</td>`;
    html += `<td>${pessoalDesembarcando[x].company}</td>`;
    html += `<td>${pessoalDesembarcando[x].sispat}</td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

if (document.getElementById("pobDeId") !== null) {
  pobDeDesembarque();
}

const abrePobVoo = id => {
  window.open(`https://radio.migueldias.net/voos/pob/${id}`);
};

// Trabalha com a lista MTA de pessoal desembarcando
const mtaDeDesembarque = async () => {
  const res = await axios.post(
    "https://api.migueldias.net/buzios/voodesembarque",
    {
      voo_id: window.location.pathname.match(/([1-9][0-9]*)/)[0]
    }
  );

  for (i = 0; i < res.data.length; i++) {
    pessoalDesembarcando.push({
      nome: res.data[i].name,
      company: res.data[i].company,
      sispat: res.data[i].sispat,
      data: res.data[i].data,
      email: res.data[i].email,
      id: res.data[i].id,
      horario: res.data[i].horario,
      procedencia: res.data[i].procedencia,
      peso_pax: res.data[i].peso_pax,
      peso_bag: res.data[i].peso_bag,
      prefixo: res.data[i].prefixo,
      numero: res.data[i].numero,
      empresa: res.data[i].companhiaAerea
    });
  }

  var html = "";
  var lista = document.getElementById("pobMta");
  document.getElementById("data-mta").textContent =
    pessoalDesembarcando[0].data;
  document.getElementById("roteiro-mta").textContent =
    pessoalDesembarcando[0].procedencia;
  document.getElementById("prefixo-mta").textContent =
    pessoalDesembarcando[0].prefixo;
  document.getElementById("numero-mta").textContent =
    pessoalDesembarcando[0].numero;
  document.getElementById("empresa-mta").textContent =
    pessoalDesembarcando[0].empresa;
  document.getElementById("horario-mta").textContent =
    pessoalDesembarcando[0].horario;

  const pesoMalas = res.data.map(i => i.peso_bag);
  const resPesoMalas = pesoMalas.reduce((a, b) => a + b, 0);
  document.getElementById("total-bag").textContent = resPesoMalas + " KG";

  const pesoPassageiro = res.data.map(i => i.peso_pax);
  const resPesoPassageiro = pesoPassageiro.reduce((a, b) => a + b, 0);
  document.getElementById("total-pax").textContent = resPesoPassageiro + " KG";

  const pesoTotal = resPesoMalas + resPesoPassageiro;
  document.getElementById("total").textContent = pesoTotal + " KG";

  const dest = pessoalDesembarcando[0].procedencia.slice(0, 11);

  const orig = pessoalDesembarcando[0].procedencia.slice(14, 18);

  lista.innerHTML = "";

  for (x = 0; x < pessoalDesembarcando.length; x++) {
    html += `<tr>`;
    html += `<th scope="row">${pessoalDesembarcando[x].nome}</th>`;
    html += `<td>${pessoalDesembarcando[x].sispat}</td>`;
    html += `<td>${orig}</td>`;
    html += `<td>${dest}</td>`;
    html += `<td>${pessoalDesembarcando[x].company}</td>`;
    html +=
      pessoalDesembarcando[x].peso_pax !== null
        ? `<td>${pessoalDesembarcando[x].peso_pax}</td>`
        : `<td><button onclick='chamadaEmail("${pessoalDesembarcando[x].nome}", "${pessoalDesembarcando[x].email}", ${pessoalDesembarcando[x].id}, "${pessoalDesembarcando[x].data}", "${pessoalDesembarcando[x].horario}", "${pessoalDesembarcando[x].procedencia}")'>PESO</button></td>`;
    html +=
      pessoalDesembarcando[x].peso_bag !== null
        ? `<td>${pessoalDesembarcando[x].peso_bag}</td>`
        : `<td><button onclick='chamadaEmail("${pessoalDesembarcando[x].nome}", "${pessoalDesembarcando[x].email}", ${pessoalDesembarcando[x].id}, "${pessoalDesembarcando[x].data}", "${pessoalDesembarcando[x].horario}", "${pessoalDesembarcando[x].procedencia}")'>PESO</button></td>`;
    html += `</tr>`;
  }

  if (lista) {
    lista.innerHTML = html;
  }
};

if (document.getElementById("mtaDeId") !== null) {
  pessoalDesembarcando = [];
  mtaDeDesembarque();
}

const abreMtaVoo = id => {
  pessoalDesembarcando = [];
  window.open(`https://radio.migueldias.net/voos/mta/${id}`);
};

const chamadaEmail = async (nome, email, id, data, horario, procedencia) => {
  const res = await axios.post(
    "https://api.migueldias.net/buzios/emailpesopax",
    {
      nome: nome,
      email: email,
      id: id,
      data: data,
      horario: horario,
      voo: procedencia
    }
  );
  if (res.status === 200) {
    alert("Email enviado com sucesso!");
  } else {
    alert("O email falhou.");
  }
};
