{if $is_home == 1}
	<div><a href="{$BASE_URL}">&laquo; home</a></div>
{/if}
{if $no_categ != 1}
	{if $keywords}
    以下是与 <strong>{$keywords}</strong>相关的结果:
	{/if}
	{if $jobs}
		{include file="jobs-list.tpl"}
	{else}
		<div id="no-ads">
			{if $CURRENT_PAGE != 'search'}
				{$translations.jobs.no_job_part1} <strong>{$current_category_name}</strong>{$translations.jobs.no_job_part2}.
				{if $smarty.const.ENABLE_NEW_JOBS}
					<br /><a href="{$BASE_URL}post/" title="{$translations.footer.new_job_title}">{$translations.footer.new_job}</a>
				{/if}
			{else}
				{$translations.jobs.no_job_found}<br />
			{/if}
		</div><!-- #no-ads -->
	{/if}
{/if}