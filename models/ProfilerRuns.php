<?php

namespace li3_xhprof\models;

use lithium\core\Libraries;

class ProfilerRuns extends \lithium\data\Model {

	/**
	 * Schema
	 * @var array
	 */
	protected $_schema = array(
		'_id' => array('type' => 'string'),
		'namespace' => array('type' => 'string'),
		'url' => array('type' => 'string'),
		'normalized' => array('type' => 'string'),
		'timestamp' => array('type' => 'timestamp'),
		'serverName' => array('type' => 'string'),
		'perfdata' => array('type' => 'object'),
		'type' => array('type' => 'integer'),
		'cookie' => array('type' => 'object'),
		'post' => array('type' => 'object'),
		'get' => array('type' => 'object'),
		'pmu' => array('type' => 'object'),
		'wt' => array('type' => 'object'),
		'cpu' => array('type' => 'object'),
		'serverId' => array('type' => 'string', 'default' => 't11'),
		'aggregateCallsInclude' => array('type' => 'string')
	);

	public $indexes = array(
		'url' => array('url'),
		'normalized' => array('normalized'),
		'cpu' => array('cpu'),
		'wt' => array('wt'),
		'pmu' => array('pmu'),
		'timestamp' => array('timestamp')
	);


	/**
	 * Meta
	 */
	protected $_meta = array(
		'key' => '_id',
		'locked' => true
	);


}

?>