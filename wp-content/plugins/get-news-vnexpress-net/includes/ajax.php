<?php 
add_action('wp_ajax_Link_action', 'Link_action');
add_action('wp_ajax_nopriv_Link_action', 'Link_action');
function Link_action() {
	$dataUrl = $_POST['data'];
	if($dataUrl){
		require_once(HK_VNEXPRESS_PLUGIN_RIR . 'includes/simple_html_dom.php');
		$html = file_get_html($dataUrl);
		$data = [];
	    foreach ($html->find('.item-news-common .thumb-art a') as $value) {
	        $data[] = $value->href;
	    }
	    echo json_encode($data);
	    exit;
	}
}