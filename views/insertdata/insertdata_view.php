<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lisa uus tellimus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="insertdata" method="post">
                <div class="modal-body row">
                    <div class="col mb-3">
                        <div class="col col-sm-10">
                            <div class="input-group mb-2">
                                <label class="col-sm-2 control-label">Klient</label>
                                <div class="col-sm-10">
                                    <input name="client" class="form-control" id="focusedInput" type="text">
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <label class="col-sm-2 control-label">Töögrupp</label>
                                <div class="col-sm-10">
                                    <input name="workgroup" class="form-control" id="focusedInput" type="text">
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <label class="col-sm-2 control-label">Töö tüüp</label>
                                <div class="col-sm-10">
                                    <input name="worktype" class="form-control" id="focusedInput" type="text">
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <label class="col-sm-2 control-label">Prioriteet</label>
                                <div class="col-sm-10">
                                    <input name="priority" class="form-control" id="focusedInput" type="text">
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <label class="col-sm-2 control-label">Asukoht</label>
                                <div class="col-sm-10">
                                    <input name="location" class="form-control" id="focusedInput" type="text">
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <label class="col-sm-2 control-label">Kuupäev</label>
                                <div class="col-sm-10">
                                    <input name="date" class="form-control" id="focusedInput" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="input-group mb-2">
                            <label class="col-sm-2 control-label">Kirjeldus</label>
                            <div class="col-sm-10">
                                <textarea name="description" class="form-control" id="focusedInput"
                                          type="text"></textarea>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <label class="col-sm-2 control-label">Materjali valik</label>
                            <div class="col-sm-10">
                                <input name="materials" class="form-control" id="focusedInput" type="text">
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <label class="col-sm-2 control-label">Failid</label>
                            <div class="col-sm-10">
                                <input name="files" class="form-control" id="focusedInput" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sulge</button>
                    <button type="submit" name="insertdata" class="btn btn-primary">Salvesta</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-md-12">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Uus
            tellimus
        </button>
    </div>
    <div class="col col-md-12">
        <table class="table table-sm  table-striped table-bordered mt-4">
            <thead>
            <tr>
                <th>Tellimus</th>
                <?php foreach ($orders as $order): ?>
                    <td><?= $order['id'] ?></td>
                <?php endforeach; ?>
                <th>Asukoht</th>
                <th>Sisestuse aeg</th>
                <th>Sisestaja</th>
                <?php foreach ($orders as $order): ?>
                    <td><?= $order['client'] ?></td>
                <?php endforeach; ?>
                <th>Töö sisu</th>
                <th>Töö liik</th>
                <th>Prioriteet</th>
                <th>Hind</th>
                <th>Hind KM</th>
                <th>Staatus</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
