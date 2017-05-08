<?php

function guest_author_name( $name ) {
global $post;
$author = get_post_meta( $post->ID, 'author', true );
if ( $author )
$name = $author;
return $name;
}

