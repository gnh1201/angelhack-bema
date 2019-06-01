<?php
if(!defined("_DEF_RSF_")) set_error_exit("do not allow access");

$action = get_requested_value("action");

$data = array();

if($action == "update") {
   $files = move_uploaded_file_to_storage();
}

$data['files'] = $files;

renderView("view_welcome", $data);
