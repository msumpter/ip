<?php
header('Content-Type:text/plain;');
echo json_encode($_SERVER, JSON_PRETTY_PRINT);
