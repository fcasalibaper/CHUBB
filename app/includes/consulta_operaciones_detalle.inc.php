<!-- la clase .boxes__box, tiene 3 estados: .inactive(es default), .active y .completed --- Se agregan como clases
  - active es el que se esta editando
  - completed, cuadno tiene todos los campos de ese form completos
  - inactive, aun no editado
-->

<div class="boxes boxes_detalle" sectionOpen="">

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
      <div class="hideOnCompleted"></div>
      <!-- fin hideOnCompleted -->

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

  <div id="item_coberturas" class="boxes__box boxes__box--semiopen" state="">
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
      <div class="hideOnCompleted">
        <div class="cover">

          <div class="cover__box cover__box--grey">
            <div class="cover__title">
              <h4 class="big">
                Citroen C3 Exclusive - Patente: MMM111 - Suma asegurada: $1.000.000 
              </h4>

              <!-- <div class="selectedItem">
                Cobertura 1 - Valor cuota: $1111 - Patente: CCC111
              </div> -->

              <aside class="coverSelect">
                <?php include("coverSelect.inc.html"); ?>
              </aside>
            </div>

            <div class="cover__list" style="overflow:visible">
              <?php include("listado-coberturas.inc.php"); ?>
            </div>
          </div>
          <!-- box -->

          <div class="cover__box cover__box--grey" state="completed">
            <div class="cover__title">
              <h4 class="big">
                Citroen C3 Exclusive - Patente: MMM111 - Suma asegurada: $1.000.000
              </h4>

              <!-- <div class="selectedItem">
                Cobertura 1 - Valor cuota: $1111 - Patente: CCC111
              </div> -->

              <aside class="coverSelect">
                <?php include("coverSelect.inc.html"); ?>
              </aside>
            </div>

            <div class="cover__list" style="overflow:visible">
              <?php include("listado-coberturas.inc.php"); ?>
            </div>
          </div>
          <!-- box -->

          <div class="cover__box cover__box--grey">
            <div class="cover__title">
              <h4 class="big">
                Citroen C3 Exclusive - Patente: MMM111 - Suma asegurada: $1.000.000
              </h4>

              <!-- <div class="selectedItem">
                Cobertura 1 - Valor cuota: $1111 - Patente: CCC111
              </div> -->

              <aside class="coverSelect">
                <?php include("coverSelect.inc.html"); ?>
              </aside>
            </div>

            <div class="cover__list" style="overflow:visible">
              <?php include("listado-coberturas.inc.php"); ?>
            </div>
          </div>
          <!-- box -->
          
        </div>
        <!-- cover -->

        <div class="boxes__accesories b0 p0 pb15">
          <div class="boxes__accesories__added p0 b0 m0">
            <div class="boxes__accesories__added__newItem add justifyStart m0 bt0" id="addItem">
              <i class="icon icon-plus"></i>
              <span>Agregar nuevo item</span>
            </div>
          </div>
        </div>
        <!-- accesories -->

        <div class="newItem">
          <form class="needs-validation" id="newItem" novalidate>
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
              <div class="col col--end alignEnd alignCenterXs">
                <button class="btn btn-primary justifyCenter" type="submit"><span>Agregar Item</span></button>
              </div>
            </div>
            <!-- form -->

          </form>
        </div>
        <!-- newItem -->

        <div class="form-row" style="margin-top:15px;">
          <div class="col col--end alignEnd alignCenterXs">
            <button class="btn btn-primary justifyCenter hide show--operaciones" type="submit" id="emitir"><span>Emitir</span></button>

            <button class="btn btn-primary hide show--motor show--suma justifyCenter" type="submit"  data-toggle="modal" data-target="#modalExito" ><span>Solicitar</span></button>

          </div>
        </div>
      </div>
      <!-- fin hideOnCompleted -->

      <!-- TEXTO AL CERRARSE EL PASO -->
      <p class="edit__mode">
        <span>- Citroen C3 2013, Exclusive / Suma Asegurada: $1.000.000 / Clausula de Ajuste: $1.000 / Aire Acondicionado, GNC</span>
        <span>- Citroen C3 2013, Exclusive / Suma Asegurada: $1.000.000 / Clausula de Ajuste: $1.000 / Aire Acondicionado, GNC</span>
        <span>- Citroen C3 2013, Exclusive / Suma Asegurada: $1.000.000 / Clausula de Ajuste: $1.000 / Aire Acondicionado, GNC</span>
      </p>
    </div>
  </div>
  <!-- item_coberturas -->

  <div id="detalle_solicitante" class="boxes__box boxes__box--semiopen" state="">
    <hgroup class="boxes__box__title">
      <h3>
        Datos Solicitante
      </h3>
      <span class="modify">
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
      </span>
    </hgroup>
    <!-- title -->

    <div class="boxes__box__content">
      <div class="hideOnCompleted">
        Datos Solicitante
      </div>

      <p class="edit__mode">
        <span>
          Inicio de vigencia: 02/08/2019<br>
          Nombre: Rodrigo,  Apellido: Rodriguez, Tipo de Persona: - , Sexo: Masculino<br>
          Fecha de nacimiento: 19/09/1987, CUIT: 20-11111111-0, Domicilio: Av. Madero 80, CP: 1901,<br>
          Condición IVA: - , Nº Inscripción IVA: 11, Condición IIBB: - , Nº inscripcion IIBB: - ,<br> 
          Nº tarjeta/CBU: 4550 0000 0000 0000 
        </span>
      </p>
      <!-- edit__mode -->

    </div>
  </div>
  <!-- detalle_solicitante -->

  <div id="detalle_emision" class="boxes__box boxes__box--semiopen" state="">
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
      <div class="hideOnCompleted">
      </div>

      <p class="edit__mode">
        <div class="table__content">
          <div class="table table--splited">
            <ul>
              <li>Fecha Emisión</li>
              <li>27/10/2019</li>
              <li>Fecha Vigencia</li>
              <li>27/10/2022</li>
              <li>Moneda</li>
              <li>Pesos Argentinos</li>
              <li>Suma Asegurada</li>
              <li>$ 1.000.000</li>
              <li>IIBB</li>
              <li>11111111</li>
              <li>Sellado</li>
              <li>11111111</li>
              <li>Recargo Financiero</li>
              <li>11111111</li>
            </ul>
          </div>

          <div class="table table--splited">
            <ul>
              <li>Prima</li>
              <li>11111111</li>
              <li>Premio</li>
              <li>11111111</li>
              <li>IVA</li>
              <li>5%</li>
              <li>Otros Impuestos</li>
              <li>11111111</li>
              <li>Productor</li>
              <li>#0001 Fernando</li>
              <li>Porcentaje</li>
              <li>3%</li>
              <li>Importe</li>
              <li>$ 5.000</li>
            </ul>
          </div>
        </div>

        <h4 class="color--primary" style="font-size: 14px; font-weight: 500; color: #01c1d6; margin-top: 10px">
          Listado de Cuotas
        </h4>

        <div class="cover__table">
          <table class="table" style="max-width: 517px">
            <thead>
              <tr>
                <th scope="col">Nº Cuota</th>
                <th scope="col">Monto</th>
                <th scope="col">Fecha Vencimiento</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>$2.500</td>
                <td>01/11/2019</td>
              </tr>
              <tr>
                <td>1</td>
                <td>$2.500</td>
                <td>01/11/2019</td>
              </tr>
              <tr>
                <td>1</td>
                <td>$2.500</td>
                <td>01/11/2019</td>
              </tr>
              <tr>
                <td>1</td>
                <td>$2.500</td>
                <td>01/11/2019</td>
              </tr>
            </tbody>
          </table>
        </div>
      </p>
      <!-- edit__mode -->

    </div>
  </div>
  <!-- detalle_emision -->

</div>