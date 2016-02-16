<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends Application {

	public function index()
	{
          /*  $players = $this->players->all();
            $stocks = $this->stocks->all();

            foreach ($players as $player_record)
                $players_rows[] = (array) $player_record;
            
            foreach ($stocks as $stock_record)
                $stocks_rows[] = (array) $stock_record;
            
            $player_parms['players'] = $players_rows;
            $stock_parms['stocks'] = $stocks_rows;

            
            $this->data['pannel1'] = $this->parser->parse('pannel1',$player_parms, true);
            $this->data['pannel2'] = $this->parser->parse('pannel2',$stock_parms, true);
            
            $this->data['pagebody'] = 'welcome';
            $this->render();
           * 
           */
	}
        
        public function populate_options()
        {
            $players = $this->players->all();
            foreach ($players as $player_record)
                $options[$player_record['Player']] =  $player_record['Player'];

            $js = 'id="select_players" class="form-control" onchange="player_redirect()"'; 
            
            $select = form_dropdown('shirts', $options, $this->data['name'], $js);
            return $select;
        }
        
        
        public function portfolio($player)
        {
            $this->data['pagebody'] = 'player/portfolio';
            $record = $this->players->get($player);
            
            $this->data = array_merge($this->data, $record);
            $this->data['name'] = $record['Player'];
            $this->data['cash'] = $record['Cash'];
            $this->data['image'] = img('data/'.$record['Player'].'.png',false,
                    array('width' => '100', 'height'=> '100', 'class'=>'img-thumbnail'));

            
            $transactions_parms['transactions'] = self::transaction_get_all_by_player($player);
            
            $this->data['transactions'] = $this->parser->parse('transactions',$transactions_parms, true);

            $this->data['select_players'] = self::populate_options();
            
            $this->render();
        }
        
        
        public function transaction_get_all_by_player($player)
        {
           
            $transactions = $this->transactions->get_all_by_player($player);

            if($transactions !== null) {
                foreach ($transactions as $transaction)
                    $transaction_rows[] = (array) $transaction;
                
                return $transaction_rows;
            }
            return null;
             
        

        }
}
