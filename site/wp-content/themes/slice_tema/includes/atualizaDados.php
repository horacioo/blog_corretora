<div class="x formulario " id="formup">


    <div class="panel panel-primary">
        <div class="panel-heading">edição</div>
        <div class="panel-body">
            <div class="col-lg-12">
                <h2>Update</h2>


                <form id="Formulario_Update" method="post" name="form">
                    <input class="form-control" id="hiddenUp"  type="hidden" name="carro_escolhido" value="">
                    <div class="row">
                        <div class="col-lg-6">
                            <p><label>marca</label>
                                <select class="form-control" id="marcaUp" name="marca">
                                    <option value="1">ford</option>
                                    <option value="2">gm</option>
                                    <option value="3">volks</option>
                                    <option value="4">chevrolet</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p><label>ano do carro</label><input class="form-control" type="number" name=" ano" id='anoUp'></p>     
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><label>modelo</label><input class="form-control" id="modeloUp" type="text" name=" modelo" id="nomeCarro"></p>
                        </div>
                        <div class="col-lg-6">
                            <p><label>informações do carro</label></p>
                            <p><textarea id="descricaoUp" name="descricao" class="form-control"></textarea></p>
                        </div>
                    </div>
                    <input class="btn btn-success AtualizaDados" type="submit" value="cadastrar">
                    <div class="mensagem_retorno"></div>
                </form>
            </div>
        </div>

        <div class='repositorio'></div>
    </div>
</div>