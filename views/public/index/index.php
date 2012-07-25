<?php 
 	$x = 3;
    $items = get_items(array('featured' => true), $x); 
    set_items_for_loop($items);
	$y =0;
 echo '
 	{"feature":[	
 		';
    
 while(loop_items())
	{
		$y++;
         echo '{
         	"title": "'. cleanEncoding(strip_tags(item('Dublin Core', 'Title'))).'",
         	"linkurl": "'. WEB_ROOT . betweenSecondQuotes(link_to_item()).'",
         	"description": "'.cleanEncoding(strip_tags(item('Dublin Core', 'Description'))).'",
         	"thumburl": "';
			if(item_square_thumbnail()) {
				$breaker	=	item_square_thumbnail();
				echo betweenSecondQuotes($breaker);
			}
         	echo '"
	}';
	if($x != $y){echo ',';}
	}
echo ']}'
?>

