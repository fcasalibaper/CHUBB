<!-- OJO CON CAMBIAR EL NOMBRE DE ESTE PHP, PQ LO LEVANTA POR AJAX, COM EL MISMO -->

<div class="cover__list__item" id="seleccionar">
  <div class="cover__list__title">
    <h4>
      Listado de coberturas
    </h4>
  </div>
  <div class="cover__table">
    <table class="table">
      <thead>
        <tr>
          <th class="visible-mobile" scope="col">Acciones</th>
          <th scope="col">Cód. cobertura</th>
          <th scope="col">Descripción de cobertura</th>
          <th scope="col">Prima</th>
          <th scope="col">Valor cuota</th>
          <th scope="col">Franquicia</th>
          <th scope="col">Comisión</th>
          <th scope="col">Costo final</th>
          <th class="hidden-mobile" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="visible-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
          <td>1111111</td>
          <td>lorem ipsum</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td class="hidden-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
        </tr>
        <tr>
          <td class="visible-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
          <td>1111111</td>
          <td>lorem ipsum</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td class="hidden-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
        </tr>
        <tr>
          <td class="visible-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
          <td>1111111</td>
          <td>lorem ipsum</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td class="hidden-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
        </tr>
        <tr>
          <td class="visible-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
          <td>1111111</td>
          <td>lorem ipsum</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td class="hidden-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
        </tr>
        <tr>
          <td class="visible-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
          <td>1111111</td>
          <td>lorem ipsum</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td class="hidden-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
        </tr>
        <tr>
          <td class="visible-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
          <td>1111111</td>
          <td>lorem ipsum</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td class="hidden-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
        </tr>
        <tr>
          <td class="visible-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
          <td>1111111</td>
          <td>lorem ipsum</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td>$1111</td>
          <td class="hidden-mobile" data-toggle="modal" data-target="#modalCover">
            <div class="btn btn-transparent">Seleccionar</div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="cover__list__item" id="editar">
  <form class="needs-validation" novalidate>
    <div class="form-row">
      <div class="col col-sm-3">
        <input type="number" class="form-control" id="nombreCotizacion" placeholder="$ 1.000.000" required />
        <label for="nombreCotizacion">
          Cláusula de Ajuste
        </label>
      </div>

      <div class="col col-sm-3">
        <input type="number" class="form-control" id="nombreCotizacion" placeholder="$ 1.000.000" required />
        <label for="nombreCotizacion">
          Suma Asegurada
        </label>
      </div>

      <div class="col col-sm-3">
        <input type="text" class="form-control" id="nombreCotizacion" placeholder="1AA" required />
        <label for="nombreCotizacion">
          Factor PLD
        </label>
      </div>

      <div class="col col-sm-3">
        <div class="btn btn-transparent selectItem" data-toggle="modal" data-target="#modalSelect" rel="accesorios" style="background-color: white; align-self: flex-start">
          <i class="icon icon-plus"></i>
          <span>Agregar</span>
        </div>
        <label for="nombreCotizacion">
          Accesorios
        </label>
      </div>
    </div>
    <!-- form -->

    <div class="boxes__accesories p0 b0">
      <div class="boxes__accesories__added pb0">
        <h3>Accesorios</h3>
        <ul class="boxes__accesories__added__content">
        </ul>
      </div>
    </div>
    <!-- accesories -->
  </form>
</div>