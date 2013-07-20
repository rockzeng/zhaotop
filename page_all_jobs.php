<?php
	$type_var_name = '';
	$type_id = 0;
	
	if ($id)
	{
		$type_var_name = $id;
	}
	
	if ($type_var_name != '')
	{
		$type_id = get_type_id_by_varname($type_var_name);
	}
	
	if ($type_id)
	{
		$jobsCount =  $job->CountJobsOfType($type_id);
	}
	else
	{
		$jobsCount =  $job->CountJobs();
	}
	
	$smarty->assign('jobs_count', $jobsCount);
	
	$paginatorLink = BASE_URL . URL_JOBS ;
	
	if (!empty($type_var_name))
		$paginatorLink .= "/$type_var_name";
		
	$paginator = new Paginator($jobsCount, JOBS_PER_PAGE, @$_REQUEST['p']);
	$paginator->setLink($paginatorLink);
	$paginator->paginate();
	
	$firstLimit = $paginator->getFirstLimit();
	$lastLimit = $paginator->getLastLimit();
	
	$the_jobs = $job->GetPaginatedJobs($firstLimit, JOBS_PER_PAGE, $type_id);
	$smarty->assign("pages", $paginator->pages_link);

	$smarty->assign('jobs', $the_jobs);
	$smarty->assign('types', get_types());

	$smarty->assign('seo_title', '全部职位 - zhaotop.com');
	$smarty->assign('seo_desc', '全部职位 - zhaotop.com');
	$smarty->assign('seo_keys', 'zhaotop.com - 招聘 工作 找工作 职位搜索 空缺 高薪 知名企业 外企 招聘 招聘网站 应聘 跳槽 简历 人才 兼职 猎头 求职指导 计算机 研发 工程师 IT工作 经理 总监 牛人 大牛 高手 达人 高并发 大数据');
	
	$template = 'all-jobs-header.tpl';
?>