<?php
	$type_id = get_type_id_by_varname($id);
	
	$jobCount =  $job->GetJobsCountForCity(0, $type_id);
	
	$paginatorLink = BASE_URL . "jobs-in-other-cities";
	
	if (isset($extra))
		$paginatorLink .= "/$extra";
		
	$paginator = new Paginator($jobCount, JOBS_PER_PAGE, @$_REQUEST['p']);
	$paginator->setLink($paginatorLink);
	$paginator->paginate();
	
	$firstLimit = $paginator->getFirstLimit();
	$lastLimit = $paginator->getLastLimit();
	
	$the_jobs = array();
	$the_jobs = $job->GetPaginatedJobsForOtherCities($type_id, $firstLimit, JOBS_PER_PAGE);
	$smarty->assign("pages", $paginator->pages_link);

	$smarty->assign('jobs', $the_jobs);
	$smarty->assign('types', get_types());

	$smarty->assign('seo_title', '其他城市职位 -' . SITE_NAME);
	$smarty->assign('seo_desc', '');
	$smarty->assign('seo_keys', '城市 职位 人才');
	
	$template = 'other-cities-jobs-header.tpl';
?>