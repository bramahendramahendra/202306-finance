<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Templates_l
{
    var $templateData = array();
    function set($name, $value){
        $this->templateData[$name] = $value;
    }

    function load($view = '' , $dataView = array(), $return = FALSE){
        $this->CI =& get_instance();
        $template = 'templates_v';
        $dataViews["dataView"] = $dataView;
        $this->set('contents', $this->CI->load->view($view, $dataViews, TRUE));
        return $this->CI->load->view($template, $this->templateData, $return);
    }
}