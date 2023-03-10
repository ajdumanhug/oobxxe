<?php

    libxml_disable_entity_loader(false);
    $xmlfile = file_get_contents('php://input');

    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
    $info = simplexml_import_dom($dom);
    $name = $info->name;
    $email = $info->email;
    $message = $info->message;

    echo "Your message has been sent. We'll get back to you as soon as possible.";

?>
