<form action="#" role="form" class="panel-filter">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h6 class="panel-title">Filter Data</h6>
            <div class="panel-icons-group"> <a href="#" data-panel="collapse" class="btn btn-link btn-icon"><i class="icon-arrow-up9"></i></a></div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label><?= __("Nama") ?></label>
                        <?= $this->Form->input(null, array("default" => isset($this->request->query['InventorySupplier_name']) ? $this->request->query['InventorySupplier_name'] : '', "name" => "InventorySupplier.name", "div" => false, "label" => false, "class" => "form-control tip")) ?>
                    </div>
                    <div class="col-md-6">
                        <label><?= __("Provinsi") ?></label>
                        <?= $this->Form->input(null, array("default" => isset($this->request->query['State_name']) ? $this->request->query['State_name'] : '', "name" => "State.name", "div" => false, "label" => false, "class" => "form-control tip")) ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label><?= __("Kota") ?></label>
                        <?= $this->Form->input(null,['default' => isset($this->request->query['City_name']) ? $this->request->query['City_name'] : "", "name" => "City.name", 'div' => false, 'label' => false, 'class' => 'form-control tip']) ?>
                    </div>
                </div>
            </div>
            <div class="form-actions text-center">
                <input type="button" value="<?= __("Reset") ?>" class="btn btn-danger btn-filter-reset">
                <input type="button" value="<?= __("Cari") ?>" class="btn btn-info btn-filter">
            </div>
        </div>
    </div>
</form>
<script>
    filterReload();
</script>
