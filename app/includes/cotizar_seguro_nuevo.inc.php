<!-- la clase .boxes__box, tiene 3 estados: .inactive(es default), .active y .completed --- Se agregan como clases
  - active es el que se esta editando
  - completed, cuadno tiene todos los campos de ese form completos
  - inactive, aun no editado
-->

<div class="boxes">
  <div id="datos_generales" class="boxes__box">
    <hgroup class="boxes__box__title">
      <div class="number"><span>1</span></div>
      <h3>
        Datos generales
      </h3>

      <span class="modify">
        Modificar
      </span>
    </hgroup>
    
    <div class="boxes__box__content">
      <form class="needs-validation" novalidate>
        <div class="form-row">

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="nroCotizacionBroker" placeholder="Ingrese número" required/>
            <label for="nroCotizacionBroker">
              Número Cotización Broker
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="broker" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="broker">
              Broker
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="organizador" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="organizador">
              Organizador
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="nombreDelProducto" placeholder="Ingrese nombre" required/>
            <label for="nombreDelProducto">
              Nombre del producto
            </label>
          </div>

        </div>
        <!-- form -->

        <div class="form-row">

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="comisionBroker" placeholder="$" required/>
            <label for="comisionBroker">
              Comisión Broker
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="comisionOrganizador" placeholder="$" required/>
            <label for="comisionOrganizador">
              Comisión Organizador
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="destinoUso" placeholder="Particular" required/>
            <label for="destinoUso">
              Destino Uso
            </label>
          </div>
        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="moneda" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="moneda">
              Moneda
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="duracion" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="duracion">
              Duración
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="duracion" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="duracion">
              Duración
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="cuotas" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="cuotas">
              Cuotas
            </label>
          </div>
        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col--end alignEnd">
            <button class="btn btn-primary" type="submit"><span>Siguiente</span></button>
          </div>
        </div>

      </form> 
    </div>
  </div>
  <!-- box -->

  <div id="item" class="boxes__box">
    <hgroup class="boxes__box__title">
      <div class="number"><span>2</span></div>
      <h3>
        Item
      </h3>

      <span class="modify">
        Modificar
      </span>
    </hgroup>
    
    <div class="boxes__box__content">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="tipoVehiculo" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="tipoVehiculo">
              Tipo de vehiculo
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="marca" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="marca">
              Marca
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="anio" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="anio">
              Año
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="modelo" required>
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
            <input type="text" class="form-control" id="clausulaDeAjuste" placeholder="$" required/>
            <label for="clausulaDeAjuste">
              Cláusula de Ajuste
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="sumaAsegurada" placeholder="$" required/>
            <label for="sumaAsegurada">
              Suma Asegurada
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="factorPLD" placeholder="Ingrese dato" required/>
            <label for="factorPLD">
              Factor PLD
            </label>
          </div>

          <div class="col col-sm-3 colRow checks">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="modeloEspecial" checked />
              <label class="form-check-label" for="modeloEspecial">
                Modelo especial
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="ceroKm" />
              <label class="form-check-label" for="ceroKm">
                0Km
              </label>
            </div>
          </div>

        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col--end alignEnd">
            <button class="btn btn-primary" type="submit"><span>Siguiente</span></button>
          </div>
        </div>

      </form> 

      <div class="boxes__accesories">
        <div class="boxes__accesories__buttonAdd">
          <h3>Accesorios</h3>
          <div class="btn btn-transparent">
            <i class="icon icon-plus"></i>
            <span>Agregar</span>
          </div>
        </div>
        <!-- button Add -->

        <div class="boxes__accesories__added">
          <h3>Accesorios</h3>
          <ul class="boxes__accesories__added__content">
            <li>
              <span>Accesosrios Varios</span>
              <div class="price">$ 500</div>
              <div class="delete"><i class="icon cancel"></i><span>Borrar</span></div>
            </li>
          </ul>
          <div class="boxes__accesories__added__newItem">
            <i class="icon icon-plus"></i>
            <span>Agregar nuevo item</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- box -->

  <div id="cobertura" class="boxes__box">
    <hgroup class="boxes__box__title">
      <div class="number"><span>3</span></div>
      <h3>
        Cobertura
      </h3>

      <span class="modify">
        Modificar
      </span>
    </hgroup>
    
    <div class="boxes__box__content">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="tipoVehiculo" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="tipoVehiculo">
              Tipo de vehiculo
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="marca" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="marca">
              Marca
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="anio" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="anio">
              Año
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="modelo" required>
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
            <input type="text" class="form-control" id="clausulaDeAjuste" placeholder="$" required/>
            <label for="clausulaDeAjuste">
              Cláusula de Ajuste
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="sumaAsegurada" placeholder="$" required/>
            <label for="sumaAsegurada">
              Suma Asegurada
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="factorPLD" placeholder="Ingrese dato" required/>
            <label for="factorPLD">
              Factor PLD
            </label>
          </div>

          <div class="col col-sm-3 colRow checks">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="modeloEspecial" checked />
              <label class="form-check-label" for="modeloEspecial">
                Modelo especial
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="ceroKm" />
              <label class="form-check-label" for="ceroKm">
                0Km
              </label>
            </div>
          </div>

        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col--end alignEnd">
            <button class="btn btn-primary" type="submit"><span>Siguiente</span></button>
          </div>
        </div>

      </form> 
    </div>
  </div>
  <!-- box -->
  
  <div id="datos_solicitante" class="boxes__box">
    <hgroup class="boxes__box__title">
      <div class="number"><span>4</span></div>
      <h3>
        Datos de solicitante
      </h3>

      <span class="modify">
        Modificar
      </span>
    </hgroup>
    
    <div class="boxes__box__content">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="tipoVehiculo" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="tipoVehiculo">
              Tipo de vehiculo
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="marca" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="marca">
              Marca
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="anio" required>
              <option selected disabled>Seleccione...</option>
              <option>1</option>
            </select>
            <label for="anio">
              Año
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control falseSelect" id="modelo" required>
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
            <input type="text" class="form-control" id="clausulaDeAjuste" placeholder="$" required/>
            <label for="clausulaDeAjuste">
              Cláusula de Ajuste
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="sumaAsegurada" placeholder="$" required/>
            <label for="sumaAsegurada">
              Suma Asegurada
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="factorPLD" placeholder="Ingrese dato" required/>
            <label for="factorPLD">
              Factor PLD
            </label>
          </div>

          <div class="col col-sm-3 colRow checks">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="modeloEspecial" checked />
              <label class="form-check-label" for="modeloEspecial">
                Modelo especial
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="ceroKm" />
              <label class="form-check-label" for="ceroKm">
                0Km
              </label>
            </div>
          </div>

        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col--end alignEnd">
            <button class="btn btn-primary" type="submit"><span>Siguiente</span></button>
          </div>
        </div>
        
      </form> 
    </div>
  </div>
  <!-- box -->
</div>