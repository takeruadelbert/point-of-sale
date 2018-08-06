<?php

App::uses('AppController', 'Controller');

class InventoryCategoriesController extends AppController {

    var $name = "InventoryCategories";
    var $disabledAction=array(
    );
    
    function beforeFilter() {
        parent::beforeFilter();
        $this->_setPageInfo("admin_index", "");
        $this->_setPageInfo("admin_add", "");
        $this->_setPageInfo("admin_edit", "");
    }
}
