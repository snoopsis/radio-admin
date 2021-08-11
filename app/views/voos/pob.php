<?php require APPROOT . '/views/inc/header.php'; ?>

<strong><h4 id="paxttinfo" class="text-center" style="text-transform: uppercase; margin: 20px;"></h4></strong>

<div class="embarque">
        <span
          class="badge badge-pill badge-primary"
          style="font-size: 20px;margin: 10px;"
          id="tagEmbarque"
          ></span
        >
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">CABIN</th>
              <th scope="col">RANK</th>
              <th scope="col">NAME</th>
              <th scope="col">CTRY</th>
              <th scope="col">COMPANY</th>
              <th scope="col">SISPAT</th>
            </tr>
          </thead>
          <tbody id="pobembarque">
          
          </tbody>
        </table>
      </div>
      <div class="desembarque">
        <span
          class="badge badge-pill badge-danger"
          style="font-size: 20px;margin: 10px;"
          id="tagDesembarque"
          ></span
        >
        <table class="table table-bordered">
          <thead id="pobDeId">
            <tr>
              <th scope="col">CABIN</th>
              <th scope="col">RANK</th>
              <th scope="col">NAME</th>
              <th scope="col">CTRY</th>
              <th scope="col">COMPANY</th>
              <th scope="col">SISPAT</th>
            </tr>
          </thead>
          <tbody id="pobdesembarque">
         
          </tbody>
        </table>
      </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>