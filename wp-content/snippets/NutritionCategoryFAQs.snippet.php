<?php
	require('FAQ.php');
	include(__DIR__ . "/config.php");
	PDForum_getQuestions(nutrition_category, cardilogy_cum_neurology_type);
?>