<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="mta">
<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
<div class="col text-center">
<h4>DATA <strong id="data-mta"></strong></h4>
</div>
<div class="col text-center">
<h4>ROTEIRO <strong id="roteiro-mta"></strong></h4>
</div>
<div class="col text-center">
<h4>AERONAVE <strong id="prefixo-mta"></strong></h4>
</div>
</div>
<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
<div class="col text-center">
<h4>ATENDIMENTO <strong id="numero-mta"></strong></h4>
</div>
<div class="col text-center">
<h4>HORÁRIO <strong id="horario-mta"></strong></h4>
</div>
<div class="col text-center">
<h4>EMPRESA <strong id="empresa-mta"></strong></h4>
</div>
</div>
   
        <table class="table table-bordered">
          <thead id="mtaDeId">
            <tr>
              <th scope="col">NOME</th>
              <th scope="col">SISPAT</th>
              <th scope="col">ORIG</th>
              <th scope="col">DEST</th>
              <th scope="col">EMPRESA</th>
              <th scope="col">PESO PAX</th>
              <th scope="col">PESO BAG</th>
            </tr>
          </thead>
          <tbody id="pobMta">
          
          </tbody>
        </table>

<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
<div class="col text-center">
<h5>PAX <strong id="total-pax"></strong></h5>
</div>
<div class="col text-center">
<h5>BAG <strong id="total-bag"></strong></h5>
</div>
<div class="col text-center">
<h5>TOTAL <strong id="total"></strong></h5>
</div>
</div>

        <!-- Termina a DIV MTA  -->
      </div>
 

<?php require APPROOT . '/views/inc/footer.php'; ?>