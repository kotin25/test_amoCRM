<?php

$lead_id = array();

if(isset($lead_li['lead'])) {
	
	foreach($lead_li['lead'] as $lead) {
		if(is_array($lead) && isset($lead['id'])) {
			if ($lead['close_task'] == 0) {
				array_push($lead_id, $lead['id']);
			}
		} else {
			die('Невозможно получить поле "ID сделки"');
		} 
	}

} else {
	die('Невозможно получить "Список сделок"');
}

