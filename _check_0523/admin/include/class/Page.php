<?php

	function PageList($allcount, $shownum, $shownum_page, $nowpage, $url){

		if( strpos($url, "?") !== false )
			$pageurl = $url."&pageno=";
		else
			$pageurl = $url."?pageno=";

		$pagesum = ceil($allcount/$shownum);
		
		if( $nowpage <= 0 ){

			$pagestr = "<span class=\"disabled\"> < </span> ";

		}else{

			$pagestr = "<a href=\"".$pageurl.($nowpage-1)."\"> < </a> ";

		}

		if( $pagesum < $shownum_page ){

			for($i = 0; $i < $pagesum; $i++){

				if( $i == $nowpage ){
					$pagestr .= "<span class=\"current\">".($i+1)."</span> ";
				}else{
					$pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
				}

			}
	
		}elseif( $nowpage <= ceil($shownum_page / 2) ){
	
			for($i = 0; $i < $shownum_page - 1; $i++){
	
				if( $i == $nowpage ){
					$pagestr .= "<span class=\"current\">".($i+1)."</span> ";
				}else{
					$pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
				}
	
			}
	
			$pagestr .= " ... ";
	
			$pagestr .= "<a href=\"$pageurl".($pagesum-1)."\">".$pagesum."</a> ";
	
		}elseif( $nowpage >= ($pagesum - ceil($shownum_page / 2)) ){
	
			$pagestr .= "<a href=\"".$pageurl."0\">1</a> ";
	
			$pagestr .= " ... ";
	
			for($i = ($pagesum - $shownum_page + 1); $i < $pagesum; $i++){
	
				if( $i == $nowpage ){
					$pagestr .= "<span class=\"current\">".($i+1)."</span> ";
				}else{
					$pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
				}
	
			}
	
		}else{
	
			$pagestr .= "<a href=\"".$pageurl."0\">1</a> ";
	
			$pagestr .= " ... ";
			
			for($i = ($nowpage - ceil($shownum_page / 2) + 1); $i < ($nowpage - ceil($shownum_page / 2) + $shownum_page - 1); $i++){
	
				if( $i == $nowpage ){
					$pagestr .= "<span class=\"current\">".($i+1)."</span> ";
				}else{
					$pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
				}
	
			}
	
			$pagestr .= " ... ";
	
			$pagestr .= "<a href=\"".$pageurl.($pagesum-1)."\">".$pagesum."</a> ";
	
		}

		if( $nowpage >= ($pagesum - 1) ){

			$pagestr .= "<span class=\"disabled\"> > </span> ";

		}else{

			$pagestr .= "<a href=\"".$pageurl.($nowpage+1)."\"> > </a> ";

		}

		return $pagestr;
	
	}

?>