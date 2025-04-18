<?php
header('Content-Type: application/json;');
$posts = [
    [
        'id' => 1,
        'title' => 'First Post',
        'content' => 'This is the content of the first post.',
        'author' => 'John Doe',
        'date' => '2023-10-01'
    ],
    [
        'id' => 2,
        'title' => 'Second Post',
        'content' => 'This is the content of the second post.',
        'author' => 'Jane Smith',
        'date' => '2023-10-02'
    ],
    [
        'id' => 3,
        'title' => 'Third Post',
        'content' => 'This is the content of the third post.',
        'author' => 'Alice Johnson',
        'date' => '2023-10-03'
    ]
];
echo json_encode($posts);
?>