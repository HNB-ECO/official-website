<!DOCTYPE html>
<html>
<head>
    <title>HNB-The HNB Foundation is endorsed by an international network, compiled of a wealth of experience in IT, entrepreneurship, business processes, trading, property and asset development, international management and academia</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    @if (isset($up_css) && $up_css != '')
    <link rel="stylesheet" href="/css/{{ $up_css }}.css?v=3.3.4">
    @endif
    <!-- font-awesome-icons -->
    <link href="/css/font-awesome.css?v=3.2.3" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link rel="stylesheet" href="/css/style.css?v=3.42.3">
    <link rel="stylesheet" href="/css/navbar.css?v=3.5.5">
    <link rel="stylesheet" href="/css/footer.css?v=3.88.7">
    @if (!empty($css_link_name))
    <link rel="stylesheet" href="/css/{{ $css_link_name }}.css?v=6.13.8">
    @endif
    @if (isset($other_css) && $other_css != '')
    <link rel="stylesheet" href="/css/{{ $other_css }}.css?v=4.14.7">
    @endif
</head>