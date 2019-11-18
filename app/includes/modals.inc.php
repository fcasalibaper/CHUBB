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
          <form id="step3" class="needs-validation" novalidate>
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

<div id="modalSuma" class="modal modal-small" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form id="sumaAseguradaForm" class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" id="sumaAsegurada" placeholder="Ingrese suma asegurada" required/>
              <label for="patente">Ingrese suma asgurada</label>
            </div>
          </div>

          <div class="form-row">
            <div class="col col--end xCenter">
              <button class="btn btn-primary" type="submit"><span>Continuar</span></button>
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
        <i class="icon icon-receipt-ok"></i>
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

        <div class="btn btn-primary" data-dismiss="modal" aria-label="Close">
          CONTINUAR
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /. modal marca -->
<div id="modalSelect" class="modal in" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Búsqueda de accesorios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form class="search">
          <input type="text" class="search-input" placeholder="Buscar accesorios" />
        </form>

        <!-- accesorios show -->
        <div class="module module__accesorios">
          <div class="listWrapper">
            <ul class="list list-head list-3">
              <li class="notSelected">
                <div class="code">Cód. accesorio</div>
                <div class="name">Nombre de Accesorio</div>
                <div class="price">Suma Asegurada</div>
              </li>
            <ul>
            <div class="listWrapperSelected">
              <ul class="list list-text list-3">
                <li>
                  <div class="code">01</div>
                  <div class="name">name01</div>
                  <div class="price">$ 10001</div>
                </li>
                <li>
                  <div class="code">02</div>
                  <div class="name">name02</div>
                  <div class="price">$ 10002</div>
                </li>
                <li>
                  <div class="code">03</div>
                  <div class="name">name03</div>
                  <div class="price">$ 10003</div>
                </li>
                <li>
                  <div class="code">04</div>
                  <div class="name">name04</div>
                  <div class="price">$ 10004</div>
                </li>
                <li>
                  <div class="code">05</div>
                  <div class="name">name05</div>
                  <div class="price">$ 10005</div>
                </li>
                <li>
                  <div class="code">06</div>
                  <div class="name">name06</div>
                  <div class="price">$ 10006</div>
                </li>
                <li>
                  <div class="code">07</div>
                  <div class="name">name07</div>
                  <div class="price">$ 10007</div>
                </li>
                <li>
                  <div class="code">08</div>
                  <div class="name">name08</div>
                  <div class="price">$ 10008</div>
                </li>
                <li>
                  <div class="code">09</div>
                  <div class="name">name09</div>
                  <div class="price">$ 10009</div>
                </li>
                <li>
                  <div class="code">10</div>
                  <div class="name">name10</div>
                  <div class="price">$ 10010</div>
                </li>
                <li>
                  <div class="code">11</div>
                  <div class="name">name11</div>
                  <div class="price">$ 10011</div>
                </li>
                <li>
                  <div class="code">12</div>
                  <div class="name">name12</div>
                  <div class="price">$ 10012</div>
                </li>
                <li>
                  <div class="code">13</div>
                  <div class="name">name13</div>
                  <div class="price">$ 10013</div>
                </li>
                <li>
                  <div class="code">14</div>
                  <div class="name">name14</div>
                  <div class="price">$ 10014</div>
                </li>
                <li>
                  <div class="code">15</div>
                  <div class="name">name15</div>
                  <div class="price">$ 10015</div>
                </li>
                <li>
                  <div class="code">16</div>
                  <div class="name">name16</div>
                  <div class="price">$ 10016</div>
                </li>
                <li>
                  <div class="code">17</div>
                  <div class="name">name17</div>
                  <div class="price">$ 10017</div>
                </li>
                <li>
                  <div class="code">18</div>
                  <div class="name">name18</div>
                  <div class="price">$ 10018</div>
                </li>
                <li>
                  <div class="code">19</div>
                  <div class="name">name19</div>
                  <div class="price">$ 10019</div>
                </li>
                <li>
                  <div class="code">20</div>
                  <div class="name">name20</div>
                  <div class="price">$ 10020</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- accesorios -->

        <div class="module module__broker">
          <div class="listWrapper">
            <ul class="list list-head list-2">
              <li class="notSelected">
                <div class="code">Código</div>
                <div class="name">Nombre de broker</div>
              </li>
            <ul>
            <div class="listWrapperSelected">
              <ul class="list list-text list-2">
                <li>
                  <div class="code">01</div>
                  <div class="name">name01</div>
                </li>
                <li>
                  <div class="code">02</div>
                  <div class="name">name02</div>
                </li>
                <li>
                  <div class="code">03</div>
                  <div class="name">name03</div>
                </li>
                <li>
                  <div class="code">04</div>
                  <div class="name">name04</div>
                </li>
                <li>
                  <div class="code">05</div>
                  <div class="name">name05</div>
                </li>
                <li>
                  <div class="code">06</div>
                  <div class="name">name06</div>
                </li>
                <li>
                  <div class="code">07</div>
                  <div class="name">name07</div>
                </li>
                <li>
                  <div class="code">08</div>
                  <div class="name">name08</div>
                </li>
                <li>
                  <div class="code">09</div>
                  <div class="name">name09</div>
                </li>
                <li>
                  <div class="code">10</div>
                  <div class="name">name10</div>
                </li>
                <li>
                  <div class="code">11</div>
                  <div class="name">name11</div>
                </li>
                <li>
                  <div class="code">12</div>
                  <div class="name">name12</div>
                </li>
                <li>
                  <div class="code">13</div>
                  <div class="name">name13</div>
                </li>
                <li>
                  <div class="code">14</div>
                  <div class="name">name14</div>
                </li>
                <li>
                  <div class="code">15</div>
                  <div class="name">name15</div>
                </li>
                <li>
                  <div class="code">16</div>
                  <div class="name">name16</div>
                </li>
                <li>
                  <div class="code">17</div>
                  <div class="name">name17</div>
                </li>
                <li>
                  <div class="code">18</div>
                  <div class="name">name18</div>
                </li>
                <li>
                  <div class="code">19</div>
                  <div class="name">name19</div>
                </li>
                <li>
                  <div class="code">20</div>
                  <div class="name">name20</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- broker -->

        <div class="module module__marca">
          <div class="listWrapper">
            <ul class="list list-head list-1">
              <li class="notSelected">
                <div class="name">Nombre de modelo</div>
              </li>
            <ul>
            <div class="listWrapperSelected">
              <ul class="list list-text list-1">
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">Renault</div>
                </li>
                <li>
                  <div class="name">VW</div>
                </li>
                <li>
                  <div class="name">VW</div>
                </li>
                <li>
                  <div class="name">VW</div>
                </li>
                <li>
                  <div class="name">VW</div>
                </li>
                <li>
                  <div class="name">VW</div>
                </li>
                <li>
                  <div class="name">VW</div>
                </li>
                <li>
                  <div class="name">Peugeot</div>
                </li>
                <li>
                  <div class="name">Peugeot</div>
                </li>
                <li>
                  <div class="name">Peugeot</div>
                </li>
                <li>
                  <div class="name">Peugeot</div>
                </li>
                <li>
                  <div class="name">Citroën</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- marca -->
    </div>
  </div>
</div>


