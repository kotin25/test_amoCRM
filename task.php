<?php

$task['request']['task']['add'] = array();

	foreach($lead_id as $id) {
		array_push($task['request']['task']['add'], array(
								'elem_id' => $id,
								'elem_type' => 2,
								'task_type' => 1,
								'text' => 'Сделка без задач',
								'till' => strtotime('02.06.2021')
							)
		);
	
	}

