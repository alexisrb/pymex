<div>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <input type="date" id="fecha" class="form-control" wire:model="fecha">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 rounded bg-light">
                    <div class="pt-3 px-3 border-bottom border-white">
                        <div class="text-right">
                            <h5 class="text-mb-1 text-primary">{{$fecha}}</h5>
                        </div>
                        <h3 class="text-center text-secondary mb-1">CONTROL DE CAMPAÑAS</h3>
                    </div>
                    <div class="pt-3">
                        <div class="row">
                            <div class="col text-center">
                                <div class="info-box bg-green">
                                    <div class="info-box-content">
                                      
                                      <span class="info-box-text">Total de Compañias</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="info-box bg-withe">
                                    <div class="info-box-content">
                                      
                                      <span class="info-box-text">Compañia Activas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="info-box bg-danger">
                                    <div class="info-box-content">
                                      
                                      <span class="info-box-text">Compañia</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="info-box bg-primary">
                                    <div class="info-box-content">
                                      
                                      <span class="info-box-text">Propuestas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">Compañia</th>
                                <th scope="col">Total de Campañas</th>
                                <th scope="col">Add</th>
                                <th scope="col">Add</th>
                                <th scope="col">Add</th>
                              </tr>
                            </thead>
                            <tbody class="bg-white">
                                
                            </tbody>
                          </table>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
