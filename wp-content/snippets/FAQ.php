<?php
	include_once ('libs/h2o/h2o.php');
	function PDForum_getQuestions($category, $type=3)
	{
		$url = "http://localhost/patient-doctor-forum/APIs/FetchFAQ.php?type=$type&category=$category";
		$resp = wp_remote_get($url);
		
		if ( 200 == $resp['response']['code'] ) 
		{
			$body = $resp['body'];
			$json_array = json_decode($body, true);
			
			if($json_array['success'] == 'true')
			{
				$h2o = new h2o(__DIR__ . "/templates/FAQTemplate.php");
				$message = $h2o->render(array("QAs" => $json_array['faqlist']));
				echo $message;
			}
			else
			{
				echo ($json_array['message']);
			}
		}
	}
?>