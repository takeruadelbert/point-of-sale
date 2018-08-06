<?php

class InventoryUnit extends AppModel {

    var $name = 'InventoryUnit';
    var $belongsTo = array(
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
        "uniq" => [
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
