<?php
$page_security = 'SA_JOBDESC'; $path_to_root = "../../..";
include_once($path_to_root . "/includes/session.inc");
include_once($path_to_root . "/includes/ui.inc");
include_once($path_to_root . "/modules/FA_JobDescriptions/includes/jobdesc_db.inc");
page(_("Job Descriptions"), false, false, "", "");
$jobs = get_job_descriptions();
start_table(TABLESTYLE);
table_header([_('Title'), _('Department'), _('Action')]);
while ($j = db_fetch($jobs)) { alt_table_row($j); label_cell($j['title']); label_cell($j['department']?:'-'); echo "<td><a href='?view=".$j['id']."'>"._("View")."</a></td>"; }
end_table(1); end_page(true);