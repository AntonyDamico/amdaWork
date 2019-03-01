<?php

$contacts = $database->selectAll('contacts');

return view('list', compact('contacts'));