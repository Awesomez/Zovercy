<?php

class user extends Controller {

    function auto() {
        $page = new Page('user', '*','userid');

        $data=array(
            'newpage' =>$page->run(),
            'results' => $page->sql()
        );
        View::load('userlists',$data);
    }

    function add(){
        $results=array(
            'username'=>'',
            'nickname'=>'',
            'email'=>'',
        );
        View::load('useredit',array(
            'results'=>$results,
        ));
    }

    function edit() {
        $name=Get::string(0);
        $results=DB::table('user')->where('username=?',array($name))
            ->find('username,nickname,email,roleid');
        $this->setData(array(
            'results'=>$results,
        ));
        View::load('useredit');
    }

    function save() {

    }

    function delete(){

    }

    function show(){}

}
