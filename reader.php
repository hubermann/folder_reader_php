<?php  
#Gabriel Hubermann
#hubermann@gmail.com | Hubermann.com
#2011

$myfolder = './images';	
$images= array();
//verirify directory | open folder and read content
if (is_dir($myfolder)) {
	if ($read = opendir($myfolder)) {
	
		while ($myfile = readdir($read)) {
			
			//verify filetypes before of show (only images jpg gif, and png)
			if ((strpos($myfile, ".jpg") > 1) || (strpos($myfile, ".png" ) > 1) || (strpos($myfile, ".gif" ) > 1) ) {
			
			
			
			array_push($images, $myfile);
			}
			
		
		
			}

	}

}//end is_dir


//close folder
closedir($read);


###
###example show
###

if($images){

	foreach ($images as $value) {
		echo '<img src="images/'.$value.'" alt="" width="120"/>';
	}
	
}

?>
