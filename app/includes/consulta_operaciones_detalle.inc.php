<!-- la clase .boxes__box, tiene 3 estados: .inactive(es default), .active y .completed --- Se agregan como clases
  - active es el que se esta editando
  - completed, cuadno tiene todos los campos de ese form completos
  - inactive, aun no editado
-->

<div class="boxes boxes_detalle">

  <div id="datos_generales_consulta" class="boxes__box boxes__box--semiopen" state="completed">
    <hgroup class="boxes__box__title">
      <h3>
        Datos generales
      </h3>

      <span class="modify">
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
      </span>
    </hgroup>

    <div class="boxes__box__content">
      <p class="edit__mode">
        Nombre Cotización: Cotización 000001 AAA<br>
        Número Cotización: 0011<br>
        Broker: Broker 01<br>
        Organizador: Organizador 01<br>
        Comisión Broker: $1.000<br>
      </p>
    </div>
  </div>
  <!-- datos_generales_consulta -->

  <div id="item_coberturas" class="boxes__box boxes__box--semiopen" state="completed">
    <hgroup class="boxes__box__title">
      <h3>
        Items / Coberturas
      </h3>

      <span class="modify">
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
      </span>
    </hgroup>
    <div class="boxes__box__content">
      <div class="cover">

        <div class="cover__box cover__box--grey">
          <div class="cover__title">
            <h4>
              Citroen C3, 2013, Exclusive
            </h4>

            <div class="selectedItem">
              Cobertura 1 - Valor cuota: $1111 - Patente: CCC111
            </div>

            <aside class="coverSelect">
              <a href="#" class="btn btn-withOutHover btn-seleccionar">
                <span>
                  Seleccionar cobertura
                </span>
              </a>
              <a href="#" class="btn btn-withOutHover btn-editar">
                <span>
                  Editar
                </span>
              </a>
              <a href="#" class="btn btn-withOutHover btn-eliminar">
                <span>
                  Eliminar
                </span>
              </a>
            </aside>
          </div>

          <div class="cover__list">
            <?php include("consulta_operaciones_seleccionar-editar.inc.php"); ?> 
          </div>
        </div>
        <!-- box -->

        <div class="cover__box cover__box--grey" state="completed">
          <div class="cover__title">
            <h4>
              Citroen C3, 2013, Exclusive
            </h4>

            <aside class="coverSelect">
              <a href="#" class="btn btn-withOutHover btn-seleccionar">
                <span>
                  Seleccionar cobertura
                </span>
              </a>
              <a href="#" class="btn btn-withOutHover btn-editar">
                <span>
                  Editar
                </span>
              </a>
              <a href="#" class="btn btn-withOutHover btn-eliminar">
                <span>
                  Eliminar
                </span>
              </a>
            </aside>
          </div>

          <div class="cover__list">
            <?php include("consulta_operaciones_seleccionar-editar.inc.php"); ?> 
          </div>
        </div>
        <!-- box -->

        <div class="cover__box cover__box--grey">
          <div class="cover__title">
            <h4>
              Citroen C3, 2013, Exclusive
            </h4>

            <div class="selectedItem">
              Cobertura 1 - Valor cuota: $1111 - Patente: CCC111
            </div>

            <aside class="coverSelect">
              <a href="#" class="btn btn-withOutHover btn-seleccionar">
                <span>
                  Seleccionar cobertura
                </span>
              </a>
              <a href="#" class="btn btn-withOutHover btn-editar">
                <span>
                  Editar
                </span>
              </a>
              <a href="#" class="btn btn-withOutHover btn-eliminar">
                <span>
                  Eliminar
                </span>
              </a>
            </aside>
          </div>

          <div class="cover__list">
            <?php include("consulta_operaciones_seleccionar-editar.inc.php"); ?> 
          </div>
        </div>
        <!-- box -->
      </div>
      <!-- cover -->

      <div class="form-row">
        <div class="col col--end alignEnd">
          <button class="btn btn-primary" type="submit"><span>Siguiente</span></button>
        </div>
      </div>
    </div>
  </div>
  <!-- item_coberturas -->

  <div id="detalle_emision" class="boxes__box boxes__box--cobertura boxes__box--semiopen" state="completed">
    <hgroup class="boxes__box__title">
      <h3>
        Detalle Emisión
      </h3>
      <span class="modify">
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
      </span>
    </hgroup>
    <!-- title -->

    <div class="boxes__box__content">
      detalle de emision
    </div>
  </div>
  <!-- detalle_emision -->

</div>