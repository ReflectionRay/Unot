<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function lst(){
            $this->display();
       }
    public function add(){
        if(IS_POST){
            $cate=D('cate');
            if($cate->create()){
                if($cate->add()){
                    $this->success('添加栏目成功',U('lst'));
                }else{
                    $this->error('添加栏目失败');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $this->display();
    }
}