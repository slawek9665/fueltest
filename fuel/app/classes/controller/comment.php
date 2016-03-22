<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller_Comment
 *
 * @author slawek
 */
class Controller_Comment extends Controller {

    public function action_index() {
        
        $comments = Model_Comment::query()->get();
        
        return Response::forge(View::forge('comment/index', array('comments' => $comments)));
    }
    
    public function action_create() {
        $params = Input::post();    
        	
        $comment = Model_Comment::forge()->set(array(
            'name' => $params["name"],
            'email' => $params["email"],
            'comment' => $params["comment"]
        ));

        $comment->save();
        
        return $this->action_index();
        
    }

}
