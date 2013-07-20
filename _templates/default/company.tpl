{include file="header.tpl"}
		
		<div id="content">
			<div id="job-listings">
				<h2>
                【{$current_company}】{$translations.companies.jobs_at}
				</h2>
				{include file="posts-loop.tpl"}
			</div><!-- #job-listings -->
		</div><!-- #content -->

{include file="footer.tpl"}