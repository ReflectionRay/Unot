<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function lst(){
            $article=D('article')->select();
            $this->assign('article',$article);
            $this->display();
       }
    public function add(){
        $cates=D('cate')->select();
        $this->assign('cates',$cates);
        if(IS_POST){
            $article=D('article');
            if($article->create()){
                $_POST['art_content']=htmlspecialchars_decode( $_POST['art_content']);
                if($article->add()){
                    $this->success('添加文章成功',U('lst'));
                }else{
                    $this->error('添加文章失败');
                }
            }else{
                $this->error($article->getError());
            }
            return;
        }
        $this->display();
    }
}