<?php

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
class StockController extends CI_Controller{
    //put your code here
    public function index()
	{
        $stocks = $this->Stocks->all();
        
        foreach($stocks as $stock) 
        {
            $stockarr[] = $this->parser->parse('Stocks/stock_table',(array)stock,true);
        }
        
        $rows = $this->table->make_columns($stockarr[],1);
        $this->data['stocktable'] = $this->table->generate($rows);
        
        $this->data['pagebody'] = 'Stocks/StockView';
//		$this->load->view('welcome_message');
//        $pix = $this->images->all();
//        
//        foreach($pix as $picture) {
//            $cells[] = $this->parser->parse('_cell',(array)$picture, true);
//        }
//        
//        $this->load->library('table');
//        $parms = array(
//            'table_open' => '<table class="gallery">',
//            'cell_start' => '<td class="oneimage">',
//            'cell_alt_start' => '<td class="oneimage">'
//        );
//        $this->table->set_template($parms);
//        
//        $rows = $this->table->make_columns($cells,3);
//        $this->data['thetable'] = $this->table->generate($rows);
//        
//        $this->data['pagebody'] = 'gallery';
//        $this->render();
	}
}
