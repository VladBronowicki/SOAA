<?php
	function readContent($dir){
		
		$contentIterator = null;//new FilesystemIterator('../content/' . $dir);
		if(file_exists('../content/' . $dir)){
			$contentIterator = new FilesystemIterator('../content/' . $dir);
			if($contentIterator->valid()){
				foreach($contentIterator as $fileInfo){
					if($fileInfo->isFile()){
						echo "Found File: " . $fileInfo->getFileName();
					}else if($fileInfo->isDir()){
						echo "Found Dir: " . $fileInfo->getFileName();
					}
				}
			}
		}else{
			echo 'invalid path....';
		}
	}
?>