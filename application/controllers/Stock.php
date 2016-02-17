<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StockController
 *
 * @author a7823
 */
class Stock extends Application{
    //put your code here
    public function index()
    {
        $this->load->helper('url');
        
        $urls = explode("/",uri_string());
        
        if(sizeof($urls) < 2) 
        {
            $movements = $this->movement->newest();
            $stocks = $this->stocks->newest();
        } else
        {
            $code = $urls[1];
            $movements = $this->movement->selected($code);
            $stocks = $this->stocks->selected($code);
        }
        
        foreach($stocks as $stock) 
        {
            $stockarr[] = $this->parser->parse('Stocks/stock_table',(array)$stock,true);
        }
        
        $parms = array(
            'table_open' => '<table class="stocks">'
        );
        $this->table->set_template($parms);
        
        $rows = $this->table->make_columns($stockarr,1);
        $this->data['stocktable'] = $this->table->generate($rows);
        
        foreach($movements as $moves)
        {
            $movementarr[] = $this->parser->parse('Stocks/movement_table',(array)$moves,true);
        }
        
        $parm = array (
            'table_open' => '<table class ="movements">'
        );
        
        $this->table->set_template($parm);
            
        $rows_movement = $this->table->make_columns($movementarr,1);
        $this->data['movementtable'] = $this->table->generate($rows_movement);
        
        $this->data['pageselect'] = Self::populate_options();
        $this->data['pagebody'] = 'Stocks/stockview';
        $this->render();    
    }
        
    function populate_options()
    {
            $this->load->helper('form');
            $entries = $this->stocks->codes();
            $js = 'id="stocklist" onChange="stock_onclick();"';
            $newArr = array();
            $newArr[""] = "Please Select";
            foreach($entries as $loopArr)
            {
                $temp = $loopArr['Code'];
                $newArr[$temp] = $loopArr['Code'] ;
            }
            return form_dropdown('stock', $newArr,null,$js);
    }
}
