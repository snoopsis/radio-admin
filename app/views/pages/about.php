<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['title']; ?></h1>
<p><?php echo $data['description']; ?></p>

<div id="users"></div>

<p>Version: <strong><?php echo APPVERSION; ?></strong></p>

<script>

function saidaDeVoo(){
  fetch('https://api.migueldias.net/buzios/voos')
  .then(
    function(response) {
      if (response.status !== 200) {
        console.log('Looks like there was a problem. Status Code: ' +
          response.status);
        return;
      }

      // Examine the text in the response
      response.json().then(function(data) {
      
        const hoje = data.filter(voo => voo.data === ('17/12/2020'));

        var output = '';
        
        for(var x=0; x < hoje.length; x++){
          output += '<h1>'+ hoje[x].saida_aero + '</h1>';
        }

        document.getElementById('users').innerHTML = output;
      });
    }
  )
  .catch(function(err) {
    console.log('Fetch Error :-S', err);
  });
}

fetch('https://api.migueldias.net/buzios/voos')
  .then(
    function(response) {
      if (response.status !== 200) {
        console.log('Looks like there was a problem. Status Code: ' +
          response.status);
        return;
      }

      // Examine the text in the response
      response.json().then(function(data) {
      
        const hoje = data.filter(voo => voo.data === ('17/12/2020'));
        // tem voos hoje?
        if(hoje.length > 0){
          if(hoje[0].saida_aero === '' || hoje[1].saida_aero === ''){
            // Procura a cada 7 segundos hora de saida
            setInterval(() => {
              saidaDeVoo()  
            }, 7000);
          } else {
            console.log('existe horario de saida')
          }
        } else {
          console.log('Hoje nao tem voos!');
        }
       
      });
    }
  )
  .catch(function(err) {
    console.log('Fetch Error :-S', err);
  });


          

</script>
<?php require APPROOT . '/views/inc/footer.php'; ?>