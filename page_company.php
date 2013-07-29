<?php
	$sanitizer = new Sanitizer();
	
	$sql = 'SELECT DISTINCT company FROM '.DB_PREFIX.'jobs';
	$comps = $db->QueryArray($sql);
	foreach ($comps as $comp)
	{
		if ($sanitizer->sanitize_title_with_dashes($comp['company']) == $id)
		{
			$company = $comp['company'];
			break;
		}
	}
	$smarty->assign('jobs', $job->ApiGetJobsByCompany($company, false, false));
	$smarty->assign('current_company', $company);

	$html_title = '【' . $company . '招聘，求职】' .$company .SITE_NAME;
	$meta_description = '【' . $company . '招聘 ' . $translations['companies']['meta_part1'].', '. $translations['companies']['meta_part2'] .$company.$translations['companies']['meta_part3'];
	$template = 'company.tpl';
?>