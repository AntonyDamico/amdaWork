<?php

$contacts = $database->selectAll('contacts');

return view('index', compact('contacts'));