<!-- /. modal  -->
<div id="modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">none</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      </div>
    </div>
  </div>
</div>


<div id="modalCover" class="modal modal-small" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Cargue datos del vehículo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <form action="">
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" id="patente" placeholder="Ingrese patente" required/>
                <label for="patente">Patente</label>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" id="motor" placeholder="Ingrese número de motor" required/>
                <label for="motor">Motor</label>
              </div>
            </div>

            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" id="chasis" placeholder="Ingrese número de chasis" required/>
                <label for="chasis">Chasis</label>
              </div>
            </div>
            <div class="form-row">
              <div class="col col--end">
                <button class="btn btn-primary" type="submit" style="width: 100%; max-width: 100%;"><span>Buscar</span></button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

<div id="modalExito" class="modal modal-small" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">SOLICITUD CON ÉXITO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <hgroup>
          <h4>
            <small>Número de solicitud</small><br />
            #000123
          </h4>
        </hgroup>

        <div class="print">
          <i class="icon icon-print"></i>
          <span>Imprimir solicitud</span>
        </div>

        <div class="btn btn-primary">
          CONTINUAR
        </div>
      </div>
    </div>
  </div>
</div>
