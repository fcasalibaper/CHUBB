<article class="dateContent">
  <div class="seeMoreTarget">
    <form class="needs-validation" novalidate>
      <div class="form-row">
        <div class="col colWrap xCenter">
          <input
            type="date"
            class="form-control falseSelect w160 mt20mobile w49mobile mr1mobile datepicker"
            id="Desde"
            onfocus="(this.type='date')"
            onblur="(this.type='text')"
            placeholder="Desde:"
            data-date-format="dd-M-yy"
            required
          />
          <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control falseSelect w160 mt20mobile w49mobile ml1mobile" id="hasta" placeholder="Hasta:" required/>
          <label for="fechaDeOperacion" class="w100mobile">
            Fecha de operación:
          </label>
        </div>
      </div>
      <!-- form -->

      <div class="form-row">

        <div class="col">
          <select name="tipoOperacion" id="tipoOperacion" class="form-control w225 falseSelect" required>
            <option selected disabled>Tipo de operación</option>
            <option>1</option>
            <option>2</option>
          </select>
          <label for="tipoOperacion"></label>
        </div>

        <div class="col">
          <input type="text" class="form-control w225" id="nroOperacion" placeholder="Ingrese número de operación" required/>
          <label for="nroOperacion">
          </label>
        </div>

        <div class="col">
          <input type="text" class="form-control w225" id="nroPoliza" placeholder="Ingrese número de Poliza" required/>
          <label for="nroPoliza">
          </label>
        </div>

        <div class="col">
          <input type="text" class="form-control w225" id="DNIcliente" placeholder="Ingrese DNI de cliente" required/>
          <label for="DNIcliente">
          </label>
        </div>
      </div>
      <!-- form -->

      <div class="form-row">
        <div class="col">
          <input class="form-control w225 falseSelect" id="broker" placeholder="broker" rel="broker" data-toggle="modal" data-target="#modalSelect" required />
          <label for="broker">
          </label>
        </div>

        <div class="col">
          <select class="form-control w225 falseSelect" id="organizador" placeholder="organizador" required>
            <option disabled selected>Organizador</option>
            <option>1</option>
            <option>2</option>
          </select>
          <label for="organizador">
          </label>
        </div>

        <div class="col col--end">
          <select class="form-control w225 falseSelect" id="estado" placeholder="Estado" required>
            <option disabled selected>Estado</option>
            <option>Vigente</option>
            <option>No vigente</option>
          </select>
          <label for="estado">
          </label>
        </div>

        <div class="col col--end">
          <button class="btn btn-primary" type="submit"><span>Buscar</span></button>
        </div>
      </div>
      <!-- form -->
    </form>
  </div>

  <span class="seeMore">
    Ver menos
  </span>
  
  <div class="consultas">
    <hgroup class="subt xCenter spaceBetween">
      <h3 class="subtitle">Listado de consultas</h3>
      <div class="downloadBox">
        <a href="#" class="btn btn-secondary">
          <span>
            Descargar detalle
          </span>
          <i class="icon icon-download"></i>
        </a>
        <a href="#" class="btn btn-secondary">
          <span>
            Descargar
          </span>
          <i class="icon icon-download"></i>
        </a>
      </div>
    </hgroup>
    
    <div class="table">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Fecha Operación <i class="icon icon-down-1" /></th>
            <th scope="col">Tipo Operación</th>
            <th scope="col">Nº de Operación</th>
            <th scope="col">Cód Broker</th>
            <th scope="col">Nº de Póliza</th>
            <th scope="col">Estado</th>
            <th scope="col">Riesgo</th>
            <th scope="col">Cliente</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>01/08/2019</td>
            <td>Cotizar Renovación</td>
            <td>0000000001</td>
            <td>Vigente</td>
            <td>00001</td>
            <td>Vigente</td>
            <td>Todo Riesgo</td>
            <td>José Rodriguez</td>
            <td class="view">
              <i class="icon icon-more-vertical"></i>
              <div class="popUp">
                <ul>
                  <li rel="#consultar">
                    <span>Consultar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="#solicitar">
                    <span>Solicitar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="detalleEmision">
                    <span>Detalle emisión</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td>02/08/2019</td>
            <td>Cotizar Seguro Nuevo</td>
            <td>0000000002</td>
            <td>Vigente</td>
            <td>00002</td>
            <td>Vigente</td>
            <td>Todo Riesgo</td>
            <td>José Rodriguez</td>
            <td class="view">
              <i class="icon icon-more-vertical"></i>
              <div class="popUp">
                <ul>
                  <li rel="#consultar">
                    <span>Consultar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="#solicitar">
                    <span>Solicitar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="detalleEmision">
                    <span>Detalle emisión</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td>01/08/2019</td>
            <td>Cotizar Renovación</td>
            <td>0000000003</td>
            <td>Pendiente</td>
            <td>00003</td>
            <td>Vigente</td>
            <td>Tercero Completo</td>
            <td>José Rodriguez</td>

            <td class="view">
              <i class="icon icon-more-vertical"></i>
              <div class="popUp">
                <ul>
                  <li rel="#consultar">
                    <span>Consultar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="#solicitar">
                    <span>Solicitar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="detalleEmision">
                    <span>Detalle emisión</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td>03/08/2019</td>
            <td>Cotizar Seguro Nuevo</td>
            <td>0000000004</td>
            <td>Vigente</td>
            <td>00004</td>
            <td>Vigente</td>
            <td>Todo Riesgo</td>
            <td>José Rodriguez</td>

            <td class="view">
              <i class="icon icon-more-vertical"></i>
              <div class="popUp">
                <ul>
                  <li rel="#consultar">
                    <span>Consultar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="#solicitar">
                    <span>Solicitar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="detalleEmision">
                    <span>Detalle emisión</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td>04/08/2019</td>
            <td>Cotizar Seguro Nuevo</td>
            <td>0000000005</td>
            <td>Pendiente</td>
            <td>00005</td>
            <td>Pendiente</td>
            <td>Todo Riesgo</td>
            <td>José Rodriguez</td>
            <td class="view">
              <i class="icon icon-more-vertical"></i>
              <div class="popUp">
                <ul>
                  <li rel="#consultar">
                    <span>Consultar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="#solicitar">
                    <span>Solicitar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="detalleEmision">
                    <span>Detalle emisión</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td>05/08/2019</td>
            <td>Cotizar Seguro Nuevo</td>
            <td>0000000006</td>
            <td>Vigente</td>
            <td>00006</td>
            <td>Vigente</td>
            <td>Todo Riesgo</td>
            <td>José Rodriguez</td>
            <td class="view">
              <i class="icon icon-more-vertical"></i>
              <div class="popUp">
                <ul>
                  <li rel="#consultar">
                    <span>Consultar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="#solicitar">
                    <span>Solicitar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="detalleEmision">
                    <span>Detalle emisión</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
          <tr>
            <td>05/08/2019</td>
            <td>Cotizar Seguro Nuevo</td>
            <td>0000000005</td>
            <td>Vigente</td>
            <td>00007</td>
            <td>Vigente</td>
            <td>Todo Riesgo</td>
            <td>José Rodriguez</td>
            <td class="view">
              <i class="icon icon-more-vertical"></i>
              <div class="popUp">
                <ul>
                  <li rel="#consultar">
                    <span>Consultar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="#solicitar">
                    <span>Solicitar</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                  <li rel="detalleEmision">
                    <span>Detalle emisión</span>
                    <i class="icon icon-chevron-left"></i>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</article>