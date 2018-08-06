<?php echo $this->Form->create("InventorySupplier", array("class" => "form-horizontal form-separate", "action" => "add", "id" => "formSubmit", "inputDefaults" => array("error" => array("attributes" => array("wrap" => "label", "class" => "error"))))) ?>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="block-inner text-danger">
                    <h6 class="heading-hr"><?= __("Tambah Supplier") ?>
                    </h6>
                </div>
                <div class="table-responsive">
                    <table width="100%" class="table">
                        <div class="panel-heading" style="background:#2179cc">
                            <h6 class="panel-title" style=" color:#fff"><i class="icon-menu2"></i><?= __("Data Supplier") ?></h6>
                        </div>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.name", __("Nama"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.name", array("div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "form-control"));
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.address", __("Alamat"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.address", array("div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "form-control"));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.postal_code", __("Kode Pos"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.postal_code", array("div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "form-control"));
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.country_id", __("Negara"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.country_id", array("div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "select-full"));
                                            ?>
                                        </div>                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.state_id", __("Provinsi"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.state_id", array("data-autolist-emptylabel"=>"-Pilih Kota-","data-autolist-target"=>"#InventorySupplierCityId","data-autolist-url"=>Router::url("/admin/cities/list_by_state/",true),"empty" => "- Pilih Provinsi -", "div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "select-full autolist"));
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.city_id", __("Kota"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.city_id", array("div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "select-full", "empty" => "- Pilih Kota -"));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.phone_number", __("Nomor Telepon"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.phone_number", array("div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "form-control"));
                                            ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.email", __("Email"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.email", array("div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "form-control"));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php
                                            echo $this->Form->label("InventorySupplier.website", __("Website"), array("class" => "col-sm-3 col-md-4 control-label"));
                                            echo $this->Form->input("InventorySupplier.website", array("div" => array("class" => "col-sm-9 col-md-8"), "label" => false, "class" => "form-control"));
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-actions text-right">
                                    <input name="Button" type="button" onclick="history.go(-1);" class="btn btn-success" value="<?= __("Kembali") ?>">
                                    <input type="reset" value="Reset" class="btn btn-info">
                                    <input type="submit" value="<?= __("Simpan") ?>" class="btn btn-danger">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->Form->end() ?>