if (window.location.pathname === "/crews") {
  // Make a request for a user with a given ID
  axios
    .get("https://api.migueldias.net/buzios/crewnames")
    .then(function(response) {
      // handle success
      const autoCompleteJS = new autoComplete({
        placeHolder: "Nome...",
        data: {
          src: response.data,
          cache: true
        },
        resultItem: {
          highlight: true
        },
        events: {
          input: {
            selection: event => {
              const selection = event.detail.selection.value;
              autoCompleteJS.input.value = selection;
            }
          }
        }
      });
    })
    .catch(function(error) {
      // handle error
      console.log(error);
    });
}

if (
  window.location.pathname === "/contatos" ||
  window.location.pathname === "/contatos/busca"
) {
  // Make a request for a user with a given ID
  axios
    .get("https://api.migueldias.net/buzios/getunidades")
    .then(function(response) {
      // handle success
      const autoCompleteJS = new autoComplete({
        placeHolder: "Nome...",
        data: {
          src: response.data,
          cache: true
        },
        resultItem: {
          highlight: true
        },
        events: {
          input: {
            selection: event => {
              const selection = event.detail.selection.value;
              autoCompleteJS.input.value = selection;
            }
          }
        }
      });
    })
    .catch(function(error) {
      // handle error
      console.log(error);
    });
}
