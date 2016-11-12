<?php
	function readContent($dir){
		
		$contentIterator = null;//new FilesystemIterator('../content/' . $dir);
		if(file_exists('../content/' . $dir)){
			$contentIterator = new FilesystemIterator($dir);
			if($contentIterator->valid()){
				//echo(iterator_count($contentIterator)) . '<br/>';
				foreach($contentIterator as $fileInfo){
					if($fileInfo->isFile()){
						
						$title = explode('.',$fileInfo->getFileName());
						$fileExtension = strtolower($title[count($title)-1]);
						switch($fileExtension){
							case "gif":
							case "jpeg":
							case "jpg":
							case "png":
								echo '<img src="' . $dir . '/' . $fileInfo->getFileName() . '" height = "50px" style="float:right;"/>';
								break;
							case "txt":
								echo '<h1>';
								$title = preg_split('/(?=[A-Z])/',$title[0]);
								for($i=0;$i < count($title); $i++){
									echo $title[$i] . ' ';
								}
								echo '</h1>';
								$lines = file($dir . '/' . $fileInfo->getFileName());
								foreach($lines as $line){
									echo $line . '<br/>';
								}
								 
								break;
							default:
								echo 'ERROR: file extension incompatable!';
								break;
						}


						

						
					}else if($fileInfo->isDir()){
						echo '<br>';
						echo '<div class="content">';
						//echo "Found Dir: " . $fileInfo->getFileName() . "<br>";
						readContent($dir . '/' . $fileInfo->getFileName());
						echo '</div>';
					}
				}
			}
		}else{
			echo 'invalid path....';
		}
	}
?>