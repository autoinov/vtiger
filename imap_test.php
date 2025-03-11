<?php
$hostname = '{mail.dimenzija-futura.hr/imap/ssl/novalidate-cert}INBOX';
$username = 'crm@dimenzija-futura.hr';
$password = 'sLW2dd3o[*7Z0D';

$inbox = imap_open($hostname, $username, $password);

if (!$inbox) {
    die('IMAP connection failed: ' . imap_last_error());
} else {
    echo "IMAP connected successfully!";
}
?>