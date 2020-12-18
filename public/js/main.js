function saidaDeVoo() {
  fetch("https://api.migueldias.net/buzios/voos")
    .then(function(response) {
      if (response.status !== 200) {
        console.log(
          "Looks like there was a problem. Status Code: " + response.status
        );
        return;
      }

      // Examine the text in the response
      response.json().then(function(data) {
        const hoje = data.filter(voo => voo.data === "17/12/2020");

        var output = "";

        // for (var x = 0; x < hoje.length; x++) {
        //   output += "<h1>" + hoje[x].saida_aero + "</h1>";
        // }

        if (hoje[0].saida_aero.length > 0) {
          output += `<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Aeronave ${hoje[0].prefixo} decolou as <strong>${hoje[0].saida_aero}</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>`;
        }

        if (hoje[1].saida_aero.length > 0) {
          output += `<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Aeronave ${hoje[1].prefixo} decolou as <strong>${hoje[1].saida_aero}</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>`;
        }

        if (hoje[2].saida_aero.length > 0) {
          output += `<div class="alert alert-danger alert-dismissible fade show" role="alert">
          Aeronave ${hoje[2].prefixo} decolou as <strong>${hoje[2].saida_aero}</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>`;
        }

        document.getElementById("users").innerHTML = output;
      });
    })
    .catch(function(err) {
      console.log("Fetch Error :-S", err);
    });
}

fetch("https://api.migueldias.net/buzios/voos")
  .then(function(response) {
    if (response.status !== 200) {
      console.log(
        "Looks like there was a problem. Status Code: " + response.status
      );
      return;
    }

    // Examine the text in the response
    response.json().then(function(data) {
      const hoje = data.filter(voo => voo.data === "17/12/2020");
      // tem voos hoje?
      if (hoje.length > 0) {
        if (hoje[0].saida_aero === "" || hoje[1].saida_aero === "") {
          // Procura a cada 7 segundos hora de saida
          setInterval(() => {
            saidaDeVoo();
          }, 7000);
        } else {
          console.log("existe horario de saida");
        }
      } else {
        console.log("Hoje nao tem voos!");
      }
    });
  })
  .catch(function(err) {
    console.log("Fetch Error :-S", err);
  });
