<?php

function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $breadcrumbs = Array("<a href=\"$base\">$home</a>");
    $last = end(array_keys($path));

    // Build the breadcrumbs
    foreach ($path AS $x => $crumb) {
        $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));
        if ($x != $last)
            $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
        else
            $breadcrumbs[] = $title;
    }
    return implode($separator, $breadcrumbs);
} ?>

<div class="breadcrumb">
    <p><?= breadcrumbs(' <span class="breadcrumb-spacing">></span> ') ?></p>
</div>

<!-- Schema.org Breadcrumb -->
<script>
    var el = document.createElement('script');
    el.type = 'application/ld+json';
    var position = 0;
    var breadcrumb = {
        position:0,
        name:"",
        item:""
    }
    var listArray = []
    var items = document.querySelectorAll('.breadcrumb-item');
    for(var i = 0; i < items.length; i++) {
        var newItem = Object.create(breadcrumb);
        var curItem = items[i];

        newItem["@type"] = "ListItem";
        position++;
        newItem.position = position;
        newItem.name = curItem.text;
        newItem.item = curItem.getAttribute('href');
        listArray.push(newItem);
    }
    var breadcrumbSchema = {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": listArray
    };
    var finalSchema = JSON.stringify(breadcrumbSchema);
    el.text = finalSchema;
    var head = document.head || document.getElementsByTagName("head")[0];
    head.appendChild(el);
</script>
