<?php require APPROOT . '/views/inc/header.php'; ?>

<style>
.custom-switch{
  margin-top: 6px;
}
</style>


<div class="container mb-3 ml-1">
<div class="card mt-4" style="width: 18rem;">
  <div class="card-header">
    <div class="row">
    <div class="col">
    <h5 class="card-title text-center"><?php 
    date_default_timezone_set("America/Bahia");
    echo date("d/m/Y"); 
    
    ?></h5>
    </div>
     <div class="col pull-right">
     <h6 class="card-subtitle mt-1 text-muted text-center">Rotinas RPM</h6>
     </div>
    </div>
    </div>
    <div class="m-1">
    <form>
    <div class="row mt-2">
    <div class="col">
    <h6 class="text-center">12/00</h6>
    <div class="custom-control custom-switch">
  <input type="checkbox" class="custom-control-input" id="pob_nok" name="rotinas[]" value="pob_pb">
  <label class="custom-control-label" for="pob_nok">Pob Nok</label>
</div>
   <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitch3" name="rotinas[]" value="previa_pob">
    <label class="custom-control-label" for="customSwitch3">Previa Pob</label>
   </div>
    <div class="custom-control custom-switch">
     <input type="checkbox" class="custom-control-input" id="customSwitch4" name="rotinas[]" value="inf_vesp">
     <label class="custom-control-label" for="customSwitch4">Inf Vespert</label>
    </div>
    <div class="custom-control custom-switch">
     <input type="checkbox" class="custom-control-input" id="customSwitch5" name="rotinas[]" value="mta_voo">
     <label class="custom-control-label" for="customSwitch5">MTA Voo</label>
    </div>
    <div class="custom-control custom-switch">
     <input type="checkbox" class="custom-control-input" id="customSwitch6" name="rotinas[]" value="covid">
     <label class="custom-control-label" for="customSwitch6">Covid</label>
    </div>
    <div class="custom-control custom-switch">
     <input type="checkbox" class="custom-control-input" id="customSwitch7" name="rotinas[]" value="prog_voo">
     <label class="custom-control-label" for="customSwitch7">Prog Voo</label>
    </div>
    <div class="custom-control custom-switch">
     <input type="checkbox" class="custom-control-input" id="customSwitch8" name="rotinas[]" value="voo_refeitorio">
     <label class="custom-control-label" for="customSwitch8">Voo Refeitor</label>
    </div>
    <div class="custom-control custom-switch">
     <input type="checkbox" class="custom-control-input" id="customSwitch9" name="rotinas[]" value="sitop_18">
     <label class="custom-control-label" for="customSwitch9">Sitop 18:00</label>
    </div>
     <h6 class="text-center mt-2">Navegacao</h6>
     <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch21" name="rotinas[]" value="email_navegacao">
      <label class="custom-control-label" for="customSwitch21">E-Navega</label>
    </div>
  </div>
    <div class="col">
    <h6 class="text-center">00/12</h6>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch25" name="rotinas[]" value="bodi">
      <label class="custom-control-label" for="customSwitch25">Bodi</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch10" name="rotinas[]" value="inf_mat">
      <label class="custom-control-label" for="customSwitch10">Inf Matutino</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch11" name="rotinas[]" value="rdo">
      <label class="custom-control-label" for="customSwitch11">Criar RDO</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch12" name="rotinas[]" value="sitop_7">
      <label class="custom-control-label" for="customSwitch12">Sitop 7:00</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch13" name="rotinas[]" value="cartoes_t">
      <label class="custom-control-label" for="customSwitch13">Cartoes T</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch14" name="rotinas[]" value="wt_norskan">
      <label class="custom-control-label" for="customSwitch14">WT Norskan</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch22" name="rotinas[]" value="chaves">
      <label class="custom-control-label" for="customSwitch22">Chave Cabin</label>
    </div>
    <h6 class="text-center mt-2">Rotinas de Voo</h6>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch15" name="rotinas[]" value="boletim">
      <label class="custom-control-label" for="customSwitch15">Boletim Met</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch16" name="rotinas[]" value="checklist_pb">
      <label class="custom-control-label" for="customSwitch16">Checklist PB</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch17" name="rotinas[]" value="ocs_update">
      <label class="custom-control-label" for="customSwitch17">OCS Update</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch18" name="rotinas[]" value="muster_lists">
      <label class="custom-control-label" for="customSwitch18">Muster Lists</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch19" name="rotinas[]" value="t_muster">
      <label class="custom-control-label" for="customSwitch19">T Muster</label>
    </div>
    <div class="custom-control custom-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitch20" name="rotinas[]" value="email_decolagem">
      <label class="custom-control-label" for="customSwitch20">E-Decola</label>
    </div>
    <div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitch2" name="rotinas[]" value="pob_pb">
    <label class="custom-control-label" for="customSwitch2">Pob PB</label>
   </div>
    </div>
    </div>

    </div>
    <div class="card-footer mt-2">
    <button type="submit" class="btn btn-secondary" id="limpador">Limpar</button>
    <!-- <button type="submit" class="btn btn-danger pull-right">Apagar</button>   -->
    </div>
    </form>
</div>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
<script>
var PersistentCheckboxes = function(){
    var genKey, load, save, addListeners, init;

    var PAGE = window.location.href;

    genKey = function(id){
        return 'checkbox:'+ PAGE +':'+ id;
    }

    save = function(event){
        // Only inputs with an id will be saved.
        if(this.id === ""){ return; }
        localStorage.setItem(genKey(this.id), this.checked+"");
    };

    load = function(){
        jQuery('input[type="checkbox"]').each(function(i, elm){
            // Ignore checkboxes with no id.
            var key = genKey(elm.id);
            if(elm.id !== "" && key in localStorage){
                elm.checked = localStorage.getItem(key) === "true";
            }
        });
    };


    addListeners = function(){
        jQuery(document).on('change', 'input[type=checkbox]', save);
    };


    init = function(options){
        // Only supported if localStorage is available.
        if(typeof(Storage) === "undefined"){ return; }
        load();
        addListeners();
    };

    init();

    return this;
};

// Let's get this party started!
var persistentCheckboxes;
jQuery(document).ready(function(){
    persistentCheckboxes = new PersistentCheckboxes();
});

document.querySelector('#limpador').addEventListener('click', limpar);

function limpar(e){
  localStorage.clear();
  location.reload();
  e.preventDefault();
}
</script>