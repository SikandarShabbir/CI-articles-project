<?php

// $config = [

// 		'add_article_rules' => [
// 										[ 

// 											'field'=>'title',
// 										    'label'=>'Article Title',
// 										    'rules'=>'required|alphadash',

// 										],
// 										[

// 											'field'=>'body',
// 											'label'=>'Article Body',
// 											'rules'=>'required',

// 										]
// 								],
// 			'admin_login' => [
// 										[ 

// 											'field'=>'username',
// 										    'label'=>'User Name',
// 										    'rules'=>'required|min_length[5]|max_length[12]|alpha|trim',

// 										],
// 										[

// 											'field'=>'password',
// 											'label'=>'Password',
// 											'rules'=>'required',

// 										]
// 								]

// ];

$config = array(
                 'add_article_rules' => array(
                                    array(
                                            'field' => 'title',
                                            'label' => 'Article Title',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'body',
                                            'label' => 'Article Body',
                                            'rules' => 'required'
                                         )
                                    // array(
                                    //         'field' => 'passconf',
                                    //         'label' => 'PasswordConfirmation',
                                    //         'rules' => 'required'
                                    //      ),
                                    // array(
                                    //         'field' => 'email',
                                    //         'label' => 'Email',
                                    //         'rules' => 'required'
                                    //      )
                                    ),
                 'admin_login' => array(
                                    array(
                                            'field' => 'username',
                                            'label' => 'User Name',
                                            'rules' => 'required|min_length[8]|max_length[12]|alpha|trim'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                         )
                                    // array(
                                    //         'field' => 'title',
                                    //         'label' => 'Title',
                                    //         'rules' => 'required'
                                    //      ),
                                    // array(
                                    //         'field' => 'message',
                                    //         'label' => 'MessageBody',
                                    //         'rules' => 'required'
                                    //      )
                                    )                          
               );