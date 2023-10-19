<?php
//1. start output buffering
ob_start();

//2. render web page
include 'templates/greenwich.html.php';

//3. store content in output buffering then clear it later
$content = ob_get_clean();

//4. render template (layout) page
include 'templates/layout.html.php';
