<?php

App::uses('AppController', 'Controller');

class InventorySuppliersController extends AppController {

    var $name = "InventorySuppliers";
    var $disabledAction=array(
    );
    var $contain = [
        "City",
        "State",
        "Country"
    ];
    
    function beforeFilter() {
        parent::beforeFilter();
        $this->_setPageInfo("admin_index", "");
        $this->_setPageInfo("admin_add", "");
        $this->_setPageInfo("admin_edit", "");
    }
    
    function beforeRender() {
        $this->_options();
        parent::beforeRender();
    }
    
    function _options() {
        $this->set("countries", ClassRegistry::init("Country")->find("list", ['fields' => ['Country.id', 'Country.name'], 'conditions' => ['Country.id' => 100]]));
        $this->set("states", ClassRegistry::init("State")->find("list", ['fields' => ['State.id', "State.name"]]));
    }
}
