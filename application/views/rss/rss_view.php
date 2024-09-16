<?php
// Generate XML content with PHP
ob_start(); // Start output buffering to capture XML content
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";?>
<rss xmlns:atom="http://www.w3.org/2005/Atom" xmlns:media="http://search.yahoo.com/mrss/" version="2.0">
    <channel>
        <atom:link href="https://www.kotaklife.com/insurance-guide/current-affairs/rss.xml" rel="self" type="application/rss+xml" />
        <title>Our initiative to keep you updated about the latest news in the BFSI sector | Kotak Life Insurance</title>
        <link>https://www.kotaklife.com/insurance-guide/current-affairs</link>
        <description><![CDATA[ <p>Our initiative to keep you updated about the latest news in the BFSI sector</p> ]]></description>
        <category>insurance-guide/current-affairs</category>
        <ttl>60</ttl>
        <?php 
        $timestamp = $articlesInfo[0]->posted_date; // Replace with your timestamp

$date = new DateTime();
$date->setTimestamp($timestamp);
$date->setTimezone(new DateTimeZone('+0530')); // Set timezone if needed

// Format the date
$formattedDate = $date->format('D, d M Y H:i:s O');
?>
        <lastBuildDate><?=$formattedDate?></lastBuildDate>
        <copyright>© 2024 Kotak Mahindra Group. All rights reserved.</copyright>
        <language>en-IN</language>
        <docs>https://www.kotaklife.com</docs>
        <image>
            <title>Our initiative to keep you updated about the latest news in the BFSI sector | Kotak Life Insurance</title>
            <link>https://www.kotaklife.com/insurance-guide/current-affairs</link>
            <url>https://www.kotaklife.com/</url>
        </image>

        <?php $i=0;foreach ($articlesInfo as $article) {
            $i++;
            $title = htmlspecialchars($article->article_title);
            $url_title = htmlspecialchars($article->url_title);
            $topic_url_title = htmlspecialchars($article->topic_url_title);
            $readMoreUrl = base_url() . 'insurance-guide/' . $topic_url_title . '/' . $url_title;
            $readMoreUrlcategory = base_url() . 'insurance-guide/' . $topic_url_title;
            $timestamp = $article->posted_date; // Replace with your timestamp

            $date = new DateTime();
            $date->setTimestamp($timestamp);
            $date->setTimezone(new DateTimeZone('+0530')); // Set timezone if needed

            // Format the date
            $formattedDate = $date->format('D, d M Y H:i:s O');
            $article_image = str_replace('{filedir_12}', 'assets/images/uploads/insurance-guides/articles/', $article->article_image);
        ?>
            <item>
                <title><![CDATA[ <?= $title ?> ]]></title>
                <description><![CDATA[ <?= htmlspecialchars($article->short_description) ?> ]]></description>
                <link><![CDATA[ <?= $readMoreUrl ?> ]]></link>
                <guid><![CDATA[ <?= $readMoreUrl ?> ]]></guid>
                <category><![CDATA[ <?= $readMoreUrlcategory ?> ]]></category>
                <pubDate><![CDATA[ <?= $formattedDate ?> ]]></pubDate>
                <media:content height="900" medium="image" url="<?=base_url().$article_image ?>" width="1600" />
            </item>
        <?php } ?>
    </channel>
</rss>
<?php
// Get the buffered content
$xml_content = ob_get_clean();

// Load CodeIgniter output library to set content type and output
$this->output->set_content_type('text/xml');
$this->output->set_output($xml_content);
?>
