<?php

// @file licensing/admin.php

require_once __DIR__ . '/../bootstrap.php';

// Define the MODULE base directory, ending with `/`.
define('BASE_DIR', __DIR__ . '/');

$pageTitle=_('Administration');
include 'templates/header.php';

//set referring page
$_SESSION['ref_script']=$currentPage;

if ($user->isAdmin()){

?>


<table class="headerTable">
<tr><td>


<span class="headerText"><?php echo _("Users");?></span>&nbsp;&nbsp;<span id='span_User_response' class='redText'></span><span id='span_newUser' class='adminAddInput'><?php echo "<a href='ajax_forms.php?action=getAdminUserUpdateForm&height=202&width=288&modal=true' class='thickbox' id='expression'><img id='addUser class='AdminAddIcon' src='images/plus.gif' title='"._("add User")."' /></a>";?></span>

<br /><br />
<div id='div_User'>
<img src = "images/circle.gif"><?php echo _("Loading...");?>
</div>
</td></tr>
</table>




<br />
<br />

<table class="headerTable">
<tr><td>
<span class="headerText"><?php echo _("Document Types");?></span>&nbsp;&nbsp;<span id='span_DocumentType_response'></span><span id='span_newDocumentType' class='adminAddInput'><a href='javascript:showAdd("DocumentType");'><?php echo "<img id='addDocument' class='AdminAddIcon' src='images/plus.gif' title='"._("add document type")."' />";?></a></span>
<br /><br />
<div id='div_DocumentType'>
<img src = "images/circle.gif"><?php echo _("Loading...");?>
</div>
</td></tr>
</table>

<br />
<br />

<table class="headerTable">
<tr><td>
<span class="headerText"><?php echo _("Expression Types");?></span>&nbsp;&nbsp;<span id='span_ExpressionType_response'></span><span id='span_newExpressionType' class='adminAddInput'><a href='ajax_forms.php?action=getExpressionTypeForm&height=148&width=265&modal=true' class='thickbox' id='expressionType'><?php echo "<img id='addExpressionType' src='images/plus.gif' title='"._("add expression type")."' />";?></a></span>

<br /><br />
<div id='div_ExpressionType'>
<img src = "images/circle.gif"><?php echo _("Loading...");?>
</div>
</td></tr>
</table>

<br />
<br />
<table class="headerTable">
<tr><td>
<span class="headerText"><?php echo _("Qualifiers");?></span>&nbsp;&nbsp;<span id='span_Qualifier_response'></span><span id='span_newQualifier' class='adminAddInput'><a href='ajax_forms.php?action=getQualifierForm&height=148&width=295&modal=true' class='thickbox'><?php echo "<img id='addQualifier' src='images/plus.gif' title='"._("add qualifier")."' />";?></a></span>

<br /><br />
<div id='div_Qualifier'>
<img src = "images/circle.gif"><?php echo _("Loading...");?>
</div>
</td></tr>
</table>

<br />
<br />

<table class="headerTable">
<tr><td>
<span class="headerText"><?php echo _("Signature Types");?></span>&nbsp;&nbsp;<span id='span_SignatureType_response'></span><span id='span_newSignatureType' class='adminAddInput'><a href='javascript:showAdd("SignatureType");'><?php echo "<img id='addSignature' src='images/plus.gif' title='"._("add signature")."' />";?></a></span>
<br /><br />
<div id='div_SignatureType'>
<img src = "images/circle.gif"><?php echo _("Loading...");?>
</div>
</td></tr>
</table>

<br />
<br />


<table class="headerTable">
<tr><td>
<span class="headerText"><?php echo _("License Statuses");?></span>&nbsp;&nbsp;<span id='span_Status_response'></span><span id='span_newStatus' class='adminAddInput'><a href='javascript:showAdd("Status");'><?php echo "<img id='addLicenseStatuses' src='images/plus.gif' title='"._("add License statuses")."' />";?></a></span>
<br /><br />
<div id='div_Status'>
<img src = "images/circle.gif"><?php echo _("Loading...");?>
</div>
</td></tr>
</table>

<?php

$config = new Configuration;

//if the Resources module is not installed, do not display calendar options
if (($config->settings->resourcesModule == 'Y') && (strlen($config->settings->resourcesDatabaseName) > 0)) { ?>

<br />
<br />

<table class="headerTable">
<tr><td>
<span class="headerText"><?php echo _("Calendar Settings");?></span>&nbsp;&nbsp;<span id='span_CalendarSettings_response'></span>
<br /><br />
<div id='div_CalendarSettings'>
<img src = "images/circle.gif"><?php echo _("Loading...");?>
</div>
</td></tr>
</table>

<?php
}

//if the org module is not installed, display provider list for updates
if ($config->settings->organizationsModule != 'Y'){ ?>


	<br />
	<br />

	<table class="headerTable">
	<tr><td>
	<span class="headerText"><?php echo _("Consortia");?></span>&nbsp;&nbsp;<span id='span_Consortium_response'></span>
	<br /><span id='span_newConsortium' class='adminAddInput'><a href='javascript:showAdd("Consortium");'><?php echo _("add consortium");?></a></span>
	<br /><br />
	<div id='div_Consortium'>
	<img src = "images/circle.gif"><?php echo _("Loading...");?>
	</div>
	</td></tr>
	</table>

	<br />
	<br />

	<table class="headerTable">
	<tr><td>
	<span class="headerText"><?php echo _("Providers");?></span>&nbsp;&nbsp;<span id='span_Organization_response'></span>
	<br /><span id='span_newOrganization' class='adminAddInput'><a href='javascript:showAdd("Organization");'><?php echo _("add provider");?></a></span>
	<br /><br />
	<div id='div_Organization'>
	<img src = "images/circle.gif"><?php echo _("Loading...");?>
	</div>
	</td></tr>
	</table>

<?php } ?>

<br />

<script type="text/javascript" src="js/admin.js"></script>

<?php
}else{
	echo _("You don't have permission to access this page");
}

include 'templates/footer.php';
?>
