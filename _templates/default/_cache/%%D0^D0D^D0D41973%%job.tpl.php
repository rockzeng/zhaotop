<?php /* Smarty version 2.6.26, created on 2013-07-28 20:18:46
         compiled from job.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "job-details.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php if ($this->_tpl_vars['CURRENT_PAGE'] == $this->_tpl_vars['URL_JOB']): ?>
			<div id="job-bottom">
				<div id="job-post-utils">
					<a href="<?php echo $this->_tpl_vars['back_link']; ?>
" title="category home">&laquo; <?php echo $this->_tpl_vars['translations']['notfound']['back']; ?>
</a><br />
					<?php echo $this->_tpl_vars['translations']['jobs']['report_fake']; ?>
 <a href="#" onclick="Jobber.ReportSpam('<?php echo $this->_tpl_vars['BASE_URL']; ?>
report-spam/', <?php echo $this->_tpl_vars['job']['id']; ?>
); return false;" title="<?php echo $this->_tpl_vars['translations']['jobs']['report_fake']; ?>
"><?php echo $this->_tpl_vars['translations']['jobs']['report_it']; ?>
</a>
					&nbsp;&nbsp;<span id="report-spam-response"></span><br />
					<a href="#" onclick="Jobber.SendToFriend.showHide(); return false;" title="<?php echo $this->_tpl_vars['translations']['recommend']['title']; ?>
"><?php echo $this->_tpl_vars['translations']['recommend']['title']; ?>
</a>
                    <span style="margin-left: 20px;"><?php echo $this->_tpl_vars['translations']['share']['transform']; ?>
:
                        <a href="#" onclick="Jobber.ShareToSina('<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOB']; ?>
/<?php echo $this->_tpl_vars['job']['id']; ?>
/<?php echo $this->_tpl_vars['job']['url_title']; ?>
/','<?php echo $this->_tpl_vars['translations']['share']['recommend_prefix']; ?>
 <?php echo $this->_tpl_vars['job']['title']; ?>
—<?php echo $this->_tpl_vars['job']['location']; ?>
 <?php echo $this->_tpl_vars['translations']['share']['recommend_suffix']; ?>
','http://v.t.sina.com.cn/share/share.php?c=zhaotop&url=[URL]&title=[TITLE]&source=zhaotop&sourceUrl=http://www.zhaotop.com/&content=utf8'); return false;" title="<?php echo $this->_tpl_vars['translations']['share']['title']; ?>
">
                            <img src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/img/icon-share.gif" alt="<?php echo $this->_tpl_vars['translations']['share']['title']; ?>
" />
                        </a>
                    </span>
				</div><!-- #job-post-utils -->
				<div id="number-views">
					<?php echo $this->_tpl_vars['translator']->translate("jobs.published_at","<strong>".($this->_tpl_vars['job']['created_on'])."</strong>"); ?>

					<br />
					<?php echo $this->_tpl_vars['translator']->translate("jobs.viewed","<strong>".($this->_tpl_vars['job']['views_count'])."</strong>"); ?>

				</div><!-- #number-views -->
				<div class="clear"></div>
			</div><!-- #job-bottom -->
			<div id="send-to-friend" style="display: none;">
				<form id="frm-send-to-friend" method="post" action="<?php echo $this->_tpl_vars['BASE_URL']; ?>
send-to-friend/">
					<table>
						<tr>
							<td class="send-to-friend-address-label"><label for="friend_email"><?php echo $this->_tpl_vars['translations']['recommend']['friend_email_label']; ?>
:</label></td>
							<td><input type="text" name="friend_email" id="friend_email" maxlength="50" size="30" /></td>
						</tr>
						<tr>
							<td><label for="my_email"><?php echo $this->_tpl_vars['translations']['recommend']['your_email_label']; ?>
:</label></td>
							<td><input type="text" name="my_email" id="my_email" maxlength="50" size="30" /></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="submit" id="submit" value="<?php echo $this->_tpl_vars['translations']['recommend']['submit']; ?>
" />
								&nbsp;&nbsp;<span id="send-to-friend-response"></span>
							</td>
						</tr>
					</table>
				</form>
			</div><!-- #send-to-friend -->
			<?php echo '
			<script type="text/javascript">
				$(document).ready(function()
				{
					Jobber.SendToFriend.init();
				});
			</script>
			'; ?>

			<?php endif; ?>
		</div><!-- /content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>