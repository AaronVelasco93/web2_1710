<?php
include "head.php"
?>
<body>
    <div class="row">
        <form class="col s12" action="form.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" name="txtnombre" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" name="txtedad" class="validate">
              <label for="icon_telephone"  >Telephone</label>
            </div>
          </div>

          <button>Enviar</button>
        </form>
      </div>

</body>
<?php
include "footeer.php";
?>
