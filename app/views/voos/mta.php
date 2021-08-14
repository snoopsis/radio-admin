<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="mta">
<div class="row">
<div class="col text-left">
<img src="https://lh3.googleusercontent.com/proxy/w5FjZnGWu14_pSYVj_Bba63bs_7hZ4Zp-q8WdkCvDjq7jvrXTZVMtDeNGQBbFoRWvAzRmJoB9DaiU_h9OIhXPH1Uy5z4jX1hcCixYg_lYrWe" alt="dof logo" style="width: 170px;margin-top:20px;">
</div>
<div class="col text-center" style="margin-top: 30px;">
<h1>MTA</h1>
<p>Manifesto do Transporte Aéreo</p>
</div>

<div class="col text-right">
<img src="https://logotyp.us/files/png/technipfmc.png" alt="dof logo" style="width: 250px;">
</div>
</div>
<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
<div class="col text-left">
<h4>DATA: <strong id="data-mta" style="font-weight: 400;"></strong></h4>
</div>
<div class="col text-center">
<h4>ROTEIRO: <strong id="roteiro-mta" style="font-weight: 400;"></strong></h4>
</div>
<div class="col text-right">
<h4>AERONAVE: <strong id="prefixo-mta" style="font-weight: 400;"></strong></h4>
</div>
</div>
<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
<div class="col text-left">
<h4>ATENDIMENTO: <strong id="numero-mta" style="font-weight: 400;"></strong></h4>
</div>
<div class="col text-center">
<h4>HORÁRIO: <strong id="horario-mta" style="font-weight: 400;"></strong></h4>
</div>
<div class="col text-right">
<h4>EMPRESA: <strong id="empresa-mta" style="font-weight: 400;"></strong></h4>
</div>
</div>
   <div class="row">
   <div class="col">
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
        </div>
        </div>
<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
<div class="col text-left">
<h5>PAX: <strong id="total-pax" style="font-weight: 400;"></strong></h5>
</div>
<div class="col text-left">
<h5>BAG: <strong id="total-bag" style="font-weight: 400;"></strong></h5>
</div>
<div class="col text-right">
<h5>TOTAL: <strong id="total" style="font-weight: 400;"></strong></h5>
</div>
</div>

        <!-- Termina a DIV MTA  -->
      </div>
 

<?php require APPROOT . '/views/inc/footer.php'; ?>