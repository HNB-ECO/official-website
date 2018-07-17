<?php 
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Formatting;

class WebController extends BaseController
{
    
    // 新闻列表
    public function newsList(Request $request, $page) {
        $return_data = [];
        
        $page  = $page ?? '1';
        $result = Db::select("select count(*) as total from `hnb_posts` as p 
            left join hnb_term_relationships as htr on p.ID = htr.object_id
            left join hnb_term_taxonomy as htt on htr.term_taxonomy_id = htt.term_taxonomy_id 
            left join hnb_terms as ht on htt.term_id = ht.term_id
            where htt.taxonomy = ? and p.post_status = ?
                  and p.post_parent= ? and p.Post_type = ? and htt.term_id = ?", 
            ['category', 'publish', 0, 'post', 1]);
        $total_news = 0;
        if (!empty($result[false])) {
            $total_news = $result[false]->total;
        }
        $pagesize = 3;
        $result = [];
        $total_page = 1;
        if (!empty($total_news)) {
            $total_page = ceil($total_news / $pagesize);
            $limit_start = ($page - 1) * $pagesize;
            $result = Db::select("select ID, post_modified, post_content, post_title from `hnb_posts` as p
            left join hnb_term_relationships as htr on p.ID = htr.object_id
            left join hnb_term_taxonomy as htt on htr.term_taxonomy_id = htt.term_taxonomy_id
            left join hnb_terms as ht on htt.term_id = ht.term_id
            where htt.taxonomy = ? and p.post_status = ?
                  and p.post_parent= ? and p.Post_type = ? and htt.term_id = ? order by ID desc limit ?, ?",
                ['category', 'publish', 0, 'post', 1, $limit_start, $pagesize]);
            // 取附件
            if (!empty($result)) {
                $result = json_encode($result);
                $result = json_decode($result, true);
                foreach ($result as $key=>$info) {
                    $post_id = $info['ID'];
                    $result[$key]['attachment'] = '';
                    $attch_result = Db::select("select guid from hnb_posts where post_parent = ? and post_type=? and post_mime_type like 'image%' order by id desc limit ?", [$post_id, 'attachment', 1]);
                    if (!empty($attch_result)) {
                        $attch_result = json_encode($attch_result);
                        $attch_result = json_decode($attch_result, true);
                        $result[$key]['attachment'] = $attch_result[0]['guid'];
                    }
                }
            }
        }
        $return_data['page'] = $page;
        $return_data['total_page'] = $total_page;
        $return_data['result'] = $result;
        return view('news_list', $return_data);
    }
    
    // 新闻详情
    public function aboutNews(Request $request, $id) {
        $return_data = [];
        $id = $id ?? 1;
        $return_data['eq_data'] = $return_data['gt_data'] =  $return_data['lt_data'] = [];
        // Related reading 等于
        $class_id = 0;
        $data = $this->getRelateNews($id, '=', 1, $class_id);
        $text = new Formatting();
        if (!empty($data['result'])) {
            $return_data['eq_data'] = $data['result'][false];
            $class_id = $return_data['eq_data']['term_id'];
        }
        
        // Related reading 大于
        $data = $this->getRelateNews($id, '>', 4, $class_id);
        if (!empty($data['result'])) {
            $return_data['gt_data'] = $data['result'];
        }
        // Related reading 小于
        $data = $this->getRelateNews($id, '<', 3, $class_id);
        if (!empty($data['result'])) {
            $return_data['lt_data'] = $data['result'];
        }
        
        // 测试用
        if ($id == 1) {
            return view('about_news_1', $return_data);
        } else if ($id == 2) {
            return view('about_news_2', $return_data);
        } else if ($id == 3) {
            return view('about_news_3', $return_data);
        }
        // end
        return view('about_news', $return_data);
    }
    
    public function getRelateNews($id, $news_type = '>', $limit = 4, $class_id = 0) {
        $return_data = [];
        if ($class_id != 0) {
            $sql_class = " and ht.term_id = {$class_id}";
        } else {
            $sql_class = "";
        }
        // Related reading
        $relate_result =  Db::select("select ID, post_modified, post_content, post_title,ht.term_id  from `hnb_posts` as p
            left join hnb_term_relationships as htr on p.ID = htr.object_id
            left join hnb_term_taxonomy as htt on htr.term_taxonomy_id = htt.term_taxonomy_id
            left join hnb_terms as ht on htt.term_id = ht.term_id
            where htt.taxonomy = ? and p.post_status = ?
                  and p.post_parent= ? {$sql_class} and p.Post_type = ? and ID {$news_type} ? order by id desc limit ?",
            ['category', 'publish', 0, 'post', $id, $limit]);
        
        $return_data['result'] = [];
        if (!empty($relate_result)) {
            $relate_result = json_encode($relate_result);
            $relate_result = json_decode($relate_result, true);
            foreach ($relate_result as $key=>$info) {
                $relate_result[$key]['attachment'] = '';
                $attch_result = Db::select("select guid from hnb_posts where post_parent = ? and post_type=? and post_mime_type like 'image%' order by id desc limit ?", [$info['ID'], 'attachment', 1]);
                
                if (!empty($attch_result)) {
                    $result[$key]['attachment'] = '';
                    $attch_result = json_encode($attch_result);
                    $attch_result = json_decode($attch_result, true);
                    
                    $relate_result[$key]['attachment'] = $attch_result[0]['guid'];
                }
            }
            $return_data['result'] = $relate_result;
        }
        return $return_data;
    }
    
    // 我们的附件
    public function features(Request $request) {
        $return_data = [];
        $return_data['pdf_result'] = $return_data['news_result'] = [];
        // pdf result
        $result = Db::select("select post_title, guid, post_modified from hnb_posts where post_type='attachment' and post_parent = 0 and post_mime_type like 'application%' order by id desc");
        if (!empty($result)) {
            $result = json_encode($result);
            $result = json_decode($result, true);
            $return_data['pdf_result'] = $result;
        }
        
        // news result
        $result = Db::select("select ID, post_modified, post_content, post_title from `hnb_posts` as p
            left join hnb_term_relationships as htr on p.ID = htr.object_id
            left join hnb_term_taxonomy as htt on htr.term_taxonomy_id = htt.term_taxonomy_id
            left join hnb_terms as ht on htt.term_id = ht.term_id
            where htt.taxonomy = ? and p.post_status = ?
                  and p.post_parent= ? and p.Post_type = ? and htt.term_id = ? order by ID desc limit 1",
            ['category', 'publish', 0, 'post', 2]);
        if (!empty($result)) {
            $result = json_encode($result);
            $result = json_decode($result, true);
            
            foreach ($result as $key=>$info) {
                $post_id = $info['ID'];
                $result[$key]['attachment'] = '';
                $attch_result = Db::select("select guid from hnb_posts where post_parent = ? and post_type=? and post_mime_type like 'image%' order by id desc limit ?", [$post_id, 'attachment', 1]);
                if (!empty($attch_result)) {
                    $attch_result = json_encode($attch_result);
                    $attch_result = json_decode($attch_result, true);
                    $result[$key]['attachment'] = $attch_result[0]['guid'];
                }
            }
            
            $return_data['news_result'] = $result;
        }
        return view('features', $return_data);
    }
    
    public function pdfList(Request $request) {
        $return_data = [];
        $return_data['pdf_result'] = $return_data['news_result'] = [];
        // pdf result
        $result = Db::select("select post_title, guid, post_modified from hnb_posts where post_type='attachment' and post_parent = 0 and post_mime_type like 'application%' order by id desc");
        if (!empty($result)) {
            $result = json_encode($result);
            $result = json_decode($result, true);
            $return_data['pdf_result'] = $result;
        }
        return view('pdf_list', $return_data);
    }
}



