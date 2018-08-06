<?php

class InventorySupplier extends AppModel {

    var $name = 'InventorySupplier';
    var $belongsTo = array(
        "City",
        "State",
        "Country"
    );
    var $hasOne = array(
    );
    var $hasMany = array(
    );
    var $validate = array(
        "name" => [
            "rule" => "notEmpty",
            "message" => "Wajib Diisi"
        ],
        "address" => [
            "rule" => "notEmpty",
            "message" => "Wajib Diisi"
        ]
    );
    var $virtualFields = array(
    );

    function beforeValidate($options = array()) {
        
    }

    function deleteData($id = null) {
        return $this->delete($id);
    }

}

?>
