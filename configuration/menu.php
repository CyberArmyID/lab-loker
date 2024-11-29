<?php
$menuAuth = $host.'/auth';
$menuProfile = $host.'/member';
$menuProfileEdit = $menuProfile.'/profile/edit.php';
$menuProfileEditBio = $menuProfile.'/bio/edit.php';
$menuProfileAddSkill = $menuProfile.'/skill/add.php';
$menuProfileEditSkill = $menuProfile.'/skill/edit.php';
$menuProfileDeleteSkill = $menuProfile.'/skill/delete.php';

$menuJob = $host.'/member/job';
$menuDetailJob = $host.'/member/job/detail.php';

$menuHistory = $host.'/member/history';


$functionAuth = $host.'/functions/auth';
$functionMember = $host.'/functions/member';
$functionUpdateProfile = $host.'/functions/member/profile/update.php';
$functionUpdateBio = $host.'/functions/member/bio/update.php';
$functionAddSkill = $host.'/functions/member/skill/insert.php';
$functionUpdateSkill = $host.'/functions/member/skill/update.php';
$functionDeleteSkill = $host.'/functions/member/skill/delete.php';
$functionUpdateCV = $host.'/functions/member/cv/update.php';
$functionGetCV = $host.'/functions/member/cv/getFile.php';
$functionApplyJob = $host.'/functions/job/apply.php';


//Admin
$menuAdmin = $host.'/admin';
$menuAdminApplicant = $host.'/admin/applicant';
$menuAdminDetailApplicant = $menuAdminApplicant.'/detail.php';


$functionAdminLogin = $menuAdmin.'/functions/auth/login.php';
?>


