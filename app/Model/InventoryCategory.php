<?php

class InventoryCategory extends AppModel {

    var $name = 'InventoryCategory';
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
