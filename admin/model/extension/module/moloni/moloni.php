<?php/* Moloni - * To change this license header, choose License Headers in Project Properties. * To change this template file, choose Tools | Templates * and open the template in the editor. */class ModelExtensionModuleMoloniMoloni extends Model{    public $teste = "10";    private $libraries = array(        "settings" => "settings.class.php2"    );    public $settings;    public $customer;    public function __construct()    {    }    public function loadLibrary()    {        // $this->loadLibrary();        require_once("library/settings.class.php");        require_once("library/customers.class.php");        $this->customer = new moloni\customer($this);        $this->customer->getValue();        echo "Aqui";    }}