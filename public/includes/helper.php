<?php
/*
 * *
 *  *  * Copyright (C) Woosu Automative India Private Limited - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <sathish.thi@gmail.com>ManiKandan<smanikandanit@gmail.com >
 *  *
 *
 */

function ads($detect)
{
    $data = '<div style="margin-top: 30px; margin-bottom: 30px;height: 290px">';
    if ($detect->isMobile()) {
        $data .= '<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-2056519449225465" data-ad-slot="6919383878"></ins>';  //'<div class="pg-lazy" data-gpt-parent="simplyearnonline_content_mob_lazy"></div>';
    } else {
        $data .= '<!-- simplyearnonline_Adsense_970x250 -->
<ins class="adsbygoogle" style="display:inline-block;width:970px;height:250px" data-ad-client="ca-pub-2056519449225465" data-ad-slot="8247055215"></ins>';    //'<div class="pg-lazy" data-gpt-parent="simplyearnonline_content_lazy"></div>';
    }
    $data .= '</div>';
    return $data;
}

function leader($detect)
{
    $data = '<div style="margin-top: 30px; margin-bottom: 30px;height: 290px">';
    if ($detect->isMobile()) {
        $data .= '<!-- simplyearnonline_Adsense_300x250 -->
<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-2056519449225465" data-ad-slot="6919383878"></ins>';   //'<div class="pg-lazy" data-gpt-parent="simplyearnonline_header_mob"></div>';
    } else {
        $data .= '<!-- simplyearnonline_Adsense_970x250 -->
<ins class="adsbygoogle" style="display:inline-block;width:970px;height:250px" data-ad-client="ca-pub-2056519449225465" data-ad-slot="8247055215"></ins>';  //'<div class="pg-lazy" data-gpt-parent="simplyearnonline_header"></div>';
    }
    $data .= '</div>';
    return $data;
}

function adsenseAds($detect)
{
    if ($detect->isMobile()) {
        return '<ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-2056519449225465" data-ad-slot="6919383878"></ins>
'; // '<div class="pg-lazy" data-gpt-parent="simplyearnonline_content_mob_lazy"></div>';
    }
    return '<!-- simplyearnonline_Adsense_970x250 -->
<ins class="adsbygoogle" style="display:inline-block;width:250px;height:250px" data-ad-client="ca-pub-2056519449225465" data-ad-slot="8247055215"></ins>';  // "<div class='pg-lazy' data-gpt-parent='simplyearnonline_content_336x280'></div>";
}
