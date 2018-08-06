<?php

App::uses('AppController', 'Controller');

class InventoryUnitsController extends AppController {

    var $name = "InventoryUnits";
    var $disabledAction=array(
    );
    
    function beforeFilter() {
        parent::beforeFilter();
        $this->_setPageInfo("admin_index", "");
        $this->_setPageInfo("admin_add", "");
        $this->_setPageInfo("admin_edit", "");
    }
}
