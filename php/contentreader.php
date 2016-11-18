<?php
	

	function getDirectoryNames($dir){
		if(file_exists($dir)){
			$contentIterator = new FilesystemIterator($dir);
			$directoryNames = array();
			if($contentIterator->valid()){
				foreach($contentIterator as $fileInfo){
					array_push($directoryNames, $fileInfo->getFileName());
				}//foreach
			}//valid iterator
			return $directoryNames;
		}else{
			return null;
		}
	}
	function getFileNames($dir){
		
	}
	
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
								echo '<span class="picture"><img src="' . $dir . '/' . $fileInfo->getFileName() . '" height = "50px" style="float:right;"/></span>';
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
								echo 'ERROR: incompatable file extension!<br/>Please Contact a System Administrator...';
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