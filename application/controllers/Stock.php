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
            $movements = $this->Movement->newest();
            $stocks = $this->Stocks->newest();
        } else
        {
            $code = $urls[1];
            $movements = $this->Movement->selected($code);
            $stocks = $this->Stocks->selected($code);
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
        
        $this->data['pagebody'] = 'Stocks/StockView';
        $this->render();
    }
        
    function populate_options()
    {
            $stocks = $this->Stocks->all();
            foreach ($stocks as $stock_record)
                $options[$stock_record['Code']] =  $stock_record['Code'];
            $js = 'id="select_stocks" class="form-control" onchange="stock_redirect()"'; 
            
            $select = form_dropdown('shirts', $options, $this->data['name'], $js);
            return $select;
    }
}
