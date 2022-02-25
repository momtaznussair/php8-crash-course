<?php

class Conversation {}
class Comment {}
class Reply {}

$obj = new Conversation;

// switch ( get_class($obj) ) {
//     case 'Conversation':
//         $type = 'Conversation started';
//         break;
//     case 'Comment':
//         $type = 'Commenting';
//         break;
//     case 'Reply':
//         $type = 'Replying';
//         break;
//     default:
//     $type = 'Uknown';
//     break;
// }

$type = match (get_class($obj)) {
    'Converstion'  => 'Conversation started',
    'Comment'      => 'Commenting',
    'Reply'        => 'Replying',
    default        => 'Uknown'
};

echo $type;
