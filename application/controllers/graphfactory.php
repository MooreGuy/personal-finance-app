<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH . 'core/account.php');

class GraphFactory extends Account {
	function __construct()
	{
		parent::__construct();

		$this->load->model('expenses');
		$this->load->model('user');
		$this->load->model('graph');
	}

	/**
	 * Get any available graphs for a user.
	 *
	 * @param $limit is the max number of graphs to get.
	 */
	function get_available_user_graphs($limit = 4)
	{
		$graphs = array();
		$totals = $this->graph->expenseTypeTotals($this->user_id, $limit);

		foreach($totals as $title => $total) {
			$graph['title']['text'] = 'Total spending on ' . $title;
			$graph['tooltip']['content'] = '{label}: ${y}';
			$graph['data'][0] = new stdClass();
			$graph['data'][0]->type = 'column';
			$graph['data'][0]->dataPoints[] = array(
				'label'=>$title,
				'y'=>$total['average']
			);
			$graph['data'][0]->dataPoints[] = array(
				'label'=>'Your Total',
				'y'=>$total['users']
			);

			$graphs[] = $graph;
		}


		$JSON = json_encode($graphs);

		echo $JSON;
	}
}
