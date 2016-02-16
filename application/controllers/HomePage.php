<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller 
{
    
    var $data = array();
    
	public function index()
	{
            
            
            $players = $this->Players->all();
            $stocks = $this->Stocks->all();
            
            foreach ($players as $player_record)
            {
                $players_rows[] = (array) $player_record;
            }
            
            foreach ($stocks as $stock_record)
            {
                $stocks_rows[] = (array) $stock_record;
            }
            
            
//            $stockrows = $this->table->make_columns($players, 1);
//            $this->data['stocktable'] = $this->table->generate($stockrows);
//        
//            $playerrows = $this->table->make_columns($stocks, 1);
//            $this->data['playertable'] = $this->table->generate($playerrows);
//               
            
            $parms['stocktable'] = $stocks_rows;
            $parms['playerstable'] = $players_rows;
            
            $this->parser->parse('Homepage/_stockTemp',$parms);
            $this->parser->parse('Homepage/_playerTemp',$parms);
            
            $this->load->view('Homepage/_stockTemp');
	}
}


	