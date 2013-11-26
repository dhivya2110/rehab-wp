<?php
	include 'config.php';
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
				echo "<div id='accordion'>  ";
				foreach($json_array['faqlist'] as $qa)
				{
					echo "<h3>Question</h3><div><p>";
					foreach($qa as $name => $value)
					{
						echo "$name : $value";
					}
					echo "</p></div>";					
				}
				echo "</div>";
			}
			else
			{
				echo ($json_array['message']);
			}
		}
	}
?>