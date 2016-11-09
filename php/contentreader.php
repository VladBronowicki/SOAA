<?php
	function readContent($dir){
		
		$contentIterator = null;//new FilesystemIterator('../content/' . $dir);
		if(file_exists('../content/' . $dir)){
			$contentIterator = new FilesystemIterator($dir);
			if($contentIterator->valid()){
				foreach($contentIterator as $fileInfo){
					if($fileInfo->isFile()){
						echo "Found File: " . $fileInfo->getFileName() . '<br><br>';
						$lines = file($dir . '/' . $fileInfo->getFileName());
						foreach($lines as $line){
							echo $line . '<br/>';
						}
					}else if($fileInfo->isDir()){
						echo "Found Dir: " . $fileInfo->getFileName() . "<br>";
						readContent($dir . '/' . $fileInfo->getFileName());
					}
				}
			}
		}else{
			echo 'invalid path....';
		}
	}
?>