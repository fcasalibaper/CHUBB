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

      <!-- <span class="modify">
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
      </span> -->
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

          <div class="cover__list" style="overflow:visible">
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

          <div class="cover__list" style="overflow:visible">
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

          <div class="cover__list" style="overflow:visible">
            <?php include("consulta_operaciones_seleccionar-editar.inc.php"); ?> 
          </div>
        </div>
        <!-- box -->
        
      </div>
      <!-- cover -->

      <div class="boxes__accesories b0 p0 pb15">
        <div class="boxes__accesories__added b0 p0">
          <div class="boxes__accesories__added__newItem add justifyStart" id="addItem">
            <i class="icon icon-plus"></i>
            <span>Agregar nuevo item</span>
          </div>
        </div>
      </div>
      <!-- accesories -->

      <div class="newItem">
        <form class="needs-validation" id="newItem1" novalidate>
          <div class="form-row">
            <div class="col col-sm-3">
              <select class="form-control falseSelect" id="tipoVehiculo" required>
                <option selected disabled>Seleccione...</option>
                <option>1</option>
              </select>
              <label for="tipoVehiculo">
                Tipo de vehiculo
              </label>
            </div>

            <div class="col col-sm-3">
              <input type="text" class="form-control falseSelect" id="marca" selectItem" data-toggle="modal"
                data-target="#modalSelect" rel="marca" required />
              <label for="marca">
                Marca
              </label>
            </div>

            <div class="col col-sm-3">
              <select class="form-control falseSelect" id="anio" required>
                <option selected disabled>Seleccione...</option>
                <option>1</option>
              </select>
              <label for="anio">
                Año
              </label>
            </div>

            <div class="col col-sm-3">
              <select class="form-control falseSelect" id="modelo" required>
                <option selected disabled>Seleccione...</option>
                <option>1</option>
              </select>
              <label for="modelo">
                Modelo
              </label>
            </div>

          </div>
          <!-- form -->

          <div class="form-row">
            <div class="col col-sm-3">
              <input type="number" class="form-control" id="clausulaDeAjuste" placeholder="$" required />
              <label for="clausulaDeAjuste">
                Cláusula de Ajuste
              </label>
            </div>

            <div class="col col-sm-3">
              <input type="number" class="form-control" id="sumaAsegurada" placeholder="$" required />
              <label for="sumaAsegurada">
                Suma Asegurada
              </label>
            </div>

            <div class="col col-sm-3">
              <input type="text" class="form-control" id="factorPLD" placeholder="Ingrese dato" required />
              <label for="factorPLD">
                Factor PLD
              </label>
            </div>

            <div class="col col-sm-3 colRow checks">
              <div class="form-check">
                <input class="form-check-input oneSelected" type="checkbox" id="modeloEspecial" checked />
                <label class="form-check-label" for="modeloEspecial">
                  Modelo especial
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input oneSelected" type="checkbox" id="ceroKm" />
                <label class="form-check-label" for="ceroKm">
                  0Km
                </label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col col--end alignEnd">
              <button class="btn btn-primary" type="submit"><span>Agregar Item</span></button>
            </div>
          </div>
          <!-- form -->

        </form>
      </div>
      <!-- newItem -->

      <div class="form-row">
        <div class="col col--end alignEnd">
          <button class="btn btn-primary" type="submit"><span>Emitir</span></button>
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