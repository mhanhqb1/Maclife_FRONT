<?php
use App\Lib\Api;
use Cake\Core\Configure;

$data = array();
$params = $this->request->data();
$params['limit'] = 5;
$sortBy = 'created-desc';
$created = 0;

if (!empty($params['action']) && $params['action'] == 'wpt_widget_content') {
    if (strpos($params['tab'], 'popular') > -1) {
        $sortBy = 'total_view-desc';
        if ($params['tab'] == 'popular') {
            $created = time() - 7*24*60*60;
        }
        if ($params['tab'] == 'popular-3') {
            $created = time() - 30*24*60*60;
        }
    }
    if ($params['tab'] == 'comments-9') {
        $sortBy = 'total_like-desc';
    }
    $params['sort'] = $sortBy;
    $params['created'] = $created;
    $data = Api::call(Configure::read('API.url_posts_all'), $params);
} else {
    echo '<pre>';
    print_r($params);
    die();
}
$this->set('data', $data);
?>
