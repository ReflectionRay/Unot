<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends Controller {
    public function lst(){
        $cate=D('cate')->select();
        $this->assign('cate',$cate);
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
    public function edit($id){
        $cate=D('cate');
        $cates=$cate->find($id);
        $this->assign('cates',$cates);
        if(IS_POST) {
            if ($cate->create()) {
                if ($cate->save()) {
                    $this->success('修改栏目成功', U('lst'));
                } else {
                    $this->error('修改栏目失败');
                }
            } else {
                $this->error($cate->getError());
            }
            return;
        }
        $this->display();
    }
    public function del($id){
        $cate=D('cate');
        if($cate->delete($id)){
            $this->success('删除成功',U('lst'));
        }else{
            $this->error('删除失败');
        }
    }
}