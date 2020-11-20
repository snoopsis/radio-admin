document.querySelector("#enviar").addEventListener("click", function () {
  var nome = document.getElementById("nome").value;
  var email = document.getElementById("email").value;

  function emailIsValid(email) {
    return /\S+@\S+\.\S+/.test(email);
  }

  if (nome !== "" && email !== "" && emailIsValid(email) === true) {
    sendMail(nome, email);
    console.log("Enviado!");
  } else {
    console.log("Erro");
  }
});

function sendMail(nome, email) {
  // Send a POST request
  axios({
    method: "post",
    url: "https://api.migueldias.net/newrpm/sendMessage",
    data: {
      nome: nome,
      email: email,
    },
  });
}
