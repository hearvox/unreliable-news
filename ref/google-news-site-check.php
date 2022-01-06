<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

/**
 * Check if domain name is a Google News source.
 * {URL_PATH_TO}/google-news-site-check.php?site={DOMAIN}
 *
 * Test positive (Check = 10) and negative (Check = 0):
 * /google-news-site-check.php?site=nytimes.com
 * /google-news-site-check.php?site=infowars.com
 *
 */
?><!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <link rel="profile" href="https://gmpg.org/xfn/11">
    </head>
    <body>
<?php
// Requires value in URL for (?site={DOMAIN}).
if ( ! isset( $_GET['site'] ) || $_GET['site'] == '' ) {
    echo '<h1>No site</h1>';
    return false;
}

// Use site value in Google News search, returns XML.
$domain  = strip_tags( $_GET['site'] );
$api_url = 'https://news.google.com/rss/search?hl=en-US&gl=US&ceid=US%3Aen&num=5&q=site%3A';
$xml     = simplexml_load_file( $api_url . $domain );
$checks  = '';
$check   = 0;
$i       = 0;

// Extract URLs from first 10  search results.
if ( count( $xml->channel->item ) > 9 ) {

    foreach ( $xml->channel->item as $item ) {
        $links[] .= $item->link;
        $i++;
        if ( $i === 10 ) {
            break;
        }
    }
}

// Check if domain in search results is the same as the searched-for site.
foreach ( $links as $url ) {
    $host  = parse_url( $url, PHP_URL_HOST );
    if ( $domain === $host || strpos( $host, '.' . $domain ) ) {
        $check++;
    }

    // Print checks.
    $checks .= "$check\t$domain\t$host\n";
}
?>
<h1>Google News results: <?php echo $domain; ?></h1>
<p>Check: <span id="check"><?php echo $check; ?></span> (domain matches)</p>
<pre>
<h2>Checks</h2>
<a href="<?php echo $api_url . $domain; ?>"><?php echo urldecode($api_url . $domain); ?></a><br>
<?php echo $checks ?><br>
<h2>URLs</h2>
<?php print_r( $links ) ?><br>
<!-- h2>XML</h2 -->
<?php // print_r( $xml ) ?>
</pre>
</body>
</html>
