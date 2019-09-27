<article class="dateContent">
  <form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col colWrap xCenter">
        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control falseSelect w160" id="desde" placeholder="Desde:" required/>
        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control falseSelect w160" id="hasta" placeholder="Hasta:" required/>
        <label for="fechaDeOperacion">
          Fecha de operación:
        </label>
      </div>
    </div>
    <!-- form -->

    <div class="form-row">
      <div class="col">
        <select class="form-control w225 falseSelect" id="nroOperacion" required>
          <option selected disabled>Ingrese número de operación</option>
          <option>1</option>
          <option>2</option>
        </select>
        <label for="tipoOperación">
        </label>
      </div>

      <div class="col">
        <input type="text" class="form-control falseSelect w245" id="nroOperacion" placeholder="Número de operación" required/>
        <label for="nroOperacion">
        </label>
      </div>

      <div class="col">
        <input type="number" class="form-control w212" id="nroPoliza" placeholder="Ingrese número de Póliza" />
        <label for="nroPoliza">
        </label>
      </div>
    </div>
    <!-- form -->

    <div class="form-row">
      <div class="col">
        <select class="form-control w225 falseSelect" id="estado" placeholder="Estado" required>
          <option disabled selected>Estado</option>
          <option>1</option>
          <option>2</option>
        </select>
        <label for="estado">
        </label>
      </div>

      <div class="col">
        <input type="text" class="form-control w245" id="dni" placeholder="Ingrese DNI de cliente" required/>
        <label for="dni">
        </label>
      </div>

      <div class="col col--end">
        <button class="btn btn-primary" type="submit"><span>Buscar</span></button>
      </div>
    </div>
    <!-- form -->
  </form>


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


    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Fecha Operación <i class="icon icon-download" /></th>
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
          <td><i class="icon icon-more-vertical" /></td>
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
          <td><i class="icon icon-more-vertical" /></td>
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

          <td><i class="icon icon-more-vertical" /></td>
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

          <td><i class="icon icon-more-vertical" /></td>
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
          <td><i class="icon icon-more-vertical" /></td>
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
          <td><i class="icon icon-more-vertical" /></td>
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
          <td><i class="icon icon-more-vertical" /></td>
        </tr>
      </tbody>
    </table>
  </div>
</article>