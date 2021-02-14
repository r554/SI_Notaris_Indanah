<?php

if (!$this->session->userdata('nama')) {
    redirect(base_url("Admin"));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Notaris | Indanah</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/admin/dist/assets/images/favicon.ico">

    <link href="<?= base_url() ?>assets/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/morris/morris.css">

    <link href="<?= base_url() ?>assets/admin/dist/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/admin/dist/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/admin/dist/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/admin/dist/assets/css/style.css" rel="stylesheet" type="text/css">

</head>