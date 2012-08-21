<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      functions.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/

 /* Active menu class for Twitter Bootstrap*/
function get_bootstrap_navigation($currentpage) {

    $menu = '';

    global $pagesArray;
    
    $pagesSorted = subval_sort($pagesArray,'menuOrder');
    if (count($pagesSorted) != 0) { 
        foreach ($pagesSorted as $page) {
            $sel = ''; $classes = '';
            $url_nav = $page['url'];
            
            if ($page['menuStatus'] == 'Y') { 
                if ("$currentpage" == "$url_nav") { $classes = " active ". $page['parent'] ." ". $url_nav; } else { $classes = trim($page['parent'] ." ". $url_nav); }
                if ($page['menu'] == '') { $page['menu'] = $page['title']; }
                if ($page['title'] == '') { $page['title'] = $page['menu']; }
                $menu .= '<li class="'. $classes .'"><a href="'. find_url($page['url'],$page['parent']) . '" title="'. encode_quotes(cl($page['title'])) .'">'.strip_decode($page['menu']).'</a></li>'."\n";
            }
        }
        
    }
    
    echo exec_filter('menuitems',$menu);
}

?>