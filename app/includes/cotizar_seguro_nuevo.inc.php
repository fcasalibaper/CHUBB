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
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
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
  <!-- datos_generales -->

  <div id="item" class="boxes__box">
    <hgroup class="boxes__box__title">
      <div class="number"><span>2</span></div>
      <h3>
        Item
      </h3>

      <span class="modify">
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
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
        <!-- form -->


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
                <div class="delete"><i class="icon icon-cancel"></i><span>Borrar</span></div>
              </li>
              <li>
                <span>Accesosrios Varios</span>
                <div class="price">$ 500</div>
                <div class="delete"><i class="icon icon-cancel"></i><span>Borrar</span></div>
              </li>
            </ul>

            <div class="boxes__accesories__added__newItem">
              <i class="icon icon-plus"></i>
              <span>Agregar nuevo item</span>
            </div>
          </div>
        </div>
        <!-- accesories -->

        <div class="form-row">
          <div class="col col--end alignEnd">
            <button class="btn btn-primary" type="submit"><span>Cotizar</span></button>
          </div>
        </div>

      </form> 
    </div>
  </div>
  <!-- item -->

  <div id="cobertura" class="boxes__box boxes__box--cobertura">
    
    <hgroup class="boxes__box__title">
      <div class="number"><span>3</span></div>
      <h3>
        Cobertura
      </h3>
      <span class="modify">
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
      </span>
    </hgroup>
    <!-- title -->
    
    <div class="boxes__box__content">
      <div class="cover">

        <div class="cover__box">
          <div class="cover__title">
            <h4>
              Citroen C3, 2013, Exclusive
            </h4>

            <div class="selectedItem">
              Cobertura 1  - Valor cuota: $1111 - Patente: CCC111
            </div>

            <aside class="coverSelect">
              <div class="modifyBox">
                <span>Seleccionar cobertura</span>
                <div class="icon">
                  <i class="icon icon-chevron-left"></i>
                </div>
              </div>

              <span class="edit">Editar</span>
              
            </aside>
          </div>

          <div class="cover__list">
            <div class="cover__list__title">
              <h4>
                Listado de coberturas
              </h4>
            </div>
            <div class="cover__table">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Cód. cobertura</th>
                    <th scope="col">Descripción de cobertura</th>
                    <th scope="col">Prima</th>
                    <th scope="col">Valor cuota</th>
                    <th scope="col">Franquicia</th>
                    <th scope="col">Comisión</th>
                    <th scope="col">Costo final</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                  <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- box -->

        <div class="cover__box" state="completed">
          <div class="cover__title">
            <h4>
              Citroen C3, 2013, Exclusive
            </h4>

            <div class="selectedItem">
              Cobertura 1  - Valor cuota: $1111 - Patente: CCC111
            </div>

            <aside class="coverSelect">
              <div class="modifyBox">
                <span>Seleccionar cobertura</span>
                <div class="icon">
                  <i class="icon icon-chevron-left"></i>
                </div>
              </div>

              <span class="edit">Editar</span>
              
            </aside>
          </div>

          <div class="cover__list">
            <div class="cover__list__title">
              <h4>
                Listado de coberturas
              </h4>
            </div>
            <div class="cover__table">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Cód. cobertura</th>
                    <th scope="col">Descripción de cobertura</th>
                    <th scope="col">Prima</th>
                    <th scope="col">Valor cuota</th>
                    <th scope="col">Franquicia</th>
                    <th scope="col">Comisión</th>
                    <th scope="col">Costo final</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                  <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- box -->

        <div class="cover__box">
          <div class="cover__title">
            <h4>
              Citroen C3, 2013, Exclusive
            </h4>

            <div class="selectedItem">
              Cobertura 1  - Valor cuota: $1111 - Patente: CCC111
            </div>

            <aside class="coverSelect">
              <div class="modifyBox">
                <span>Seleccionar cobertura</span>
                <div class="icon">
                  <i class="icon icon-chevron-left"></i>
                </div>
              </div>

              <span class="edit">Editar</span>
              
            </aside>
          </div>

          <div class="cover__list">
            <div class="cover__list__title">
              <h4>
                Listado de coberturas
              </h4>
            </div>
            <div class="cover__table">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Cód. cobertura</th>
                    <th scope="col">Descripción de cobertura</th>
                    <th scope="col">Prima</th>
                    <th scope="col">Valor cuota</th>
                    <th scope="col">Franquicia</th>
                    <th scope="col">Comisión</th>
                    <th scope="col">Costo final</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                  <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                  <tr>
                    <td>1111111</td>
                    <td>lorem ipsum</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td>$1111</td>
                    <td><div class="btn btn-transparent" data-toggle="modal" data-target="#modalCover">Seleccionar</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
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
  <!-- cobertura -->
  
  <div id="datos_solicitante" class="boxes__box">
    <hgroup class="boxes__box__title">
      <div class="number"><span>4</span></div>
      <h3>
        Datos de solicitante
      </h3>

      <span class="modify">
        <p>Modificar</p>
        <i class="icon icon-chevron-left"></i>
      </span>
    </hgroup>
    
    <div class="boxes__box__content">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col col-sm-3">
            <input type="date" class="form-control" id="vigencia" required />
            <label for="vigencia">
              Inicio de vigencia
            </label>
          </div>
        </div>

        <div class="form-row">

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="nombre" required />
            <label for="nombre">
              Nombre
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="apellido" required />
            <label for="apellido">
              Apellido
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="tipoPersona" required />
            <label for="tipoPersona">
              Tipo Persona
            </label>
          </div>

          <div class="col col-sm-3">
            <select type="text" class="form-control" id="sexo" required>
              <option selected disabled>Seleccione...</option>
              <option>Femenino</option>
              <option>Masculino</option>
            </select>
            <label for="sexo">
              Sexo
            </label>
          </div>

        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col-sm-3">
            <input type="date" class="form-control" id="nacimiento" required />
            <label for="nacimiento">
              Fecha de Nacimiento
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="number" class="form-control" id="inscriptoIva" placeholder="$" required/>
            <label for="inscriptoIva">
              CUIT Cliente
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="domicilio" placeholder="" required/>
            <label for="domicilio">
              Domicilio
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="number" class="form-control" id="codpostal" placeholder="" required/>
            <label for="codpostal">
              Código postal
            </label>
          </div>

        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col-sm-3">
            <input type="text" class="form-control" id="condIva" required />
            <label for="condIva">
              Condición IVA
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="number" class="form-control" id="cuit" placeholder="$" required/>
            <label for="cuit">
              Nº de inscripción IVA
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="text" class="form-control" id="condIIBB" placeholder="" required/>
            <label for="condIIBB">
              Condición IIBB
            </label>
          </div>

          <div class="col col-sm-3">
            <input type="number" class="form-control" id="NrocondIIBB" placeholder="" required/>
            <label for="NrocondIIBB">
              Nº de inscripción IIBB
            </label>
          </div>

        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col-sm-3">
            <input type="number" class="form-control" id="nroCBU" required />
            <label for="nroCBU">
              Número de tarjeta/CBU
            </label>
          </div>
        </div>
        <!-- form -->

        <div class="form-row">
          <div class="col col--end alignEnd">
            <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#modalExito"><span>Siguiente</span></button>
          </div>
        </div>
        
      </form> 
    </div>
  </div>
  <!-- datos_solicitante -->

</div>