<?
class PageShow{
	
	var $allcount;
	var $shownum;
	var $shownum_page;
	var $nowpage;
	var $url;
	var $totalpage;
	
	
	function PageShow($_allcount,$_shownum,$_nowpage,$_url){

		$this->allcount   	  = $_allcount;
		$this->shownum        = $_shownum;
		$this->nowpage 		  = $_nowpage;
		$this->url  		  = $_url;
		
		$this->shownum_page   = 10;
		$this->totalpage	  = 10;
		
	}
	
	function PageList($type='')
	{
		if($type == "ORIG")
			return $this->OriginalPage();
		elseif($type == "MORE")
			return $this->MorePage();
		elseif($type == "MORE_MOVE")
			return $this->MorePage_listmove();
	}
	
	function Shownum_Page($_shownum_page){

		$this->shownum_page = $_shownum_page;

	}
	
	function TotalPage($_totalpage){

		$this->totalpage = $_totalpage;

	}
	
	function OriginalPage(){

		if( strpos($url, "?") !== false )
			$pageurl = $this->url."&pageno=";
		else
			$pageurl = $this->url."?pageno=";

		$pagesum = ceil($this->allcount/$this->shownum);
		
		$pagestr = "<ul>";
		
		if( $this->nowpage <= 0 ){

			$pagestr .= "<li><a href=\"#\">< 上一頁 </a></li>";

		}else{
			
			$pagestr .= "<li><a href=\"".$pageurl.($this->nowpage-1)."\"> < 上一頁</a></li>";

		}

		if( $pagesum < $this->shownum_page ){

			for($i = 0; $i < $pagesum; $i++){

				if( $i == $this->nowpage ){
					$pagestr .= "<li><a class=\"here\">".($i+1)."</a></li>";
				}else{
					$pagestr .= "<li><a href=\"".$pageurl.$i."\">".($i+1)."</a></li> ";
				}

			}
	
		}elseif( $this->nowpage <= ceil($this->shownum_page / 2) ){
	
			for($i = 0; $i < $this->shownum_page - 1; $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<li><a class=\"here\">".($i+1)."</a></li> ";
				}else{
					$pagestr .= "<li><a href=\"".$pageurl.$i."\">".($i+1)."</a></li> ";
				}
	
			}
	
		//	$pagestr .= "<li> ... ";
	
			$pagestr .= "<li><a href=\"$pageurl".($pagesum-1)."\"> ... ".$pagesum."</a></li> ";
	
		}elseif( $this->nowpage >= ($pagesum - ceil($this->shownum_page / 2)) ){
	
			$pagestr .= "<li><a href=\"".$pageurl."0\">1 ... </a></li> ";
	
	//		$pagestr .= " ... </li>";
	
			for($i = ($pagesum - $this->shownum_page + 1); $i < $pagesum; $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<li><a class=\"here\">".($i+1)."</a></li> ";
				}else{
					$pagestr .= "<li><a href=\"".$pageurl.$i."\">".($i+1)."</a></li> ";
				}
	
			}
	
		}else{
	
			$pagestr .= "<li><a href=\"".$pageurl."0\">1 ...</a></li> ";
	
		//	$pagestr .= " ... </li>";
			
			for($i = ($this->nowpage - ceil($this->shownum_page / 2) + 1); $i < ($this->nowpage - ceil($this->shownum_page / 2) + $this->shownum_page - 1); $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<li><a class=\"here\">".($i+1)."</a></li> ";
				}else{
					$pagestr .= "<li><a href=\"".$pageurl.$i."\">".($i+1)."</a></li> ";
				}
	
			}
	
		//	$pagestr .= "<li> ... ";
	
			$pagestr .= "<li><a href=\"".$pageurl.($pagesum-1)."\"> ... ".$pagesum."</a></li> ";
	
		}

		if( $this->nowpage >= ($pagesum - 1) ){

			$pagestr .= "<li><a href=\"#\">下一頁 > </a></li> ";

		}else{

			$pagestr .= "<li><a href=\"".$pageurl.($this->nowpage+1)."\">下一頁 > </a></li> ";

		}
		
		$pagestr .= "</ul>";

		return $pagestr;
	
	}
	
	function MorePage_listmove(){

		if( strpos($url, "?") !== false )
			$pageurl = $this->url."&pageno=";
		else
			$pageurl = $this->url."?pageno=";

		$pagesum = ceil($this->allcount/$this->shownum);
		
		$pagestr = "<ul>";
	
		if( $this->nowpage <= 0 ){

			$pagestr .= "<li><a href=\"#\">< 上一頁 </a></li>";

		}else{
			if( $this->nowpage >= $this->totalpage){			
				$pagestr .= "<li><a href=\"".$pageurl.($this->nowpage-1)."\"> < 上一頁</a></li> <li><a href=\"".$pageurl.(($this->nowpage)-($this->totalpage))."\"> 上".$this->totalpage."頁 </a></li> ";
			}else
				$pagestr .= "<li><a href=\"".$pageurl.($this->nowpage-1)."\"> < 上一頁</a></li> ";
		}

		if( $pagesum < $this->shownum_page ){

			for($i = 0; $i < $pagesum; $i++){

				if( $i == $this->nowpage ){
					$pagestr .= "<li><a class=\"here\">".($i+1)."</a></li>";
				}else{
					$pagestr .= "<li><a href=\"".$pageurl.$i."\">".($i+1)."</a></li> ";
				}

			}
	
		}elseif( $this->nowpage <= ceil($this->shownum_page / 2) ){			
			for($i = 0; $i < $this->shownum_page ; $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<li><a class=\"here\">".($i+1)."</a></li> ";
				}else{
					$pagestr .= "<li><a href=\"".$pageurl.$i."\">".($i+1)."</a></li>";
				}
	
			}

		}elseif( $this->nowpage >= ($pagesum - ceil($this->shownum_page / 2)) ){

			for($i = ($pagesum - $this->shownum_page + 1); $i < $pagesum; $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<li><a class=\"here\">".($i+1)."</a></li>";
				}else{
					$pagestr .= "<li><a href=\"".$pageurl.$i."\">".($i+1)."</a></li>";
				}
	
			}
	
		}else{
			
			for($i = ($this->nowpage - ceil($this->shownum_page / 2) ); $i < ($this->nowpage - ceil($this->shownum_page / 2) + $this->shownum_page ); $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<li><a class=\"here\">".($i+1)."</a></li> ";
				}else{
					$pagestr .= "<li><a href=\"".$pageurl.$i."\">".($i+1)."</a></li> ";
				}
	
			}
		}

		if( $this->nowpage >= ($pagesum - 1) ){

			$pagestr .= "<li><a href=\"#\">下一頁 > </a></li> ";

		}else{
			if( $pagesum > ($this->totalpage) && (($this->nowpage)+($this->totalpage)) < $pagesum )
				$pagestr .= "<li><a href=\"".$pageurl.(($this->nowpage)+($this->totalpage))."\"> 下".$this->totalpage."頁 </a></li> <li><a href=\"".$pageurl.($this->nowpage+1)."\">下一頁 > </a></li> ";
			else
				$pagestr .= "<li><a href=\"".$pageurl.($this->nowpage+1)."\">下一頁 > </a></li> ";
		}
		
		$pagestr .= "</ul>";
		
		$pagestr .= "<p class=\"pages_quick\">共 ".$this->allcount."項商品： <input type='text' name='go_page' value='".($this->nowpage+1)."' size='3' id='go_search_page'> / ".$pagesum."頁";
		if($pagesum != 1)
			$pagestr .= "<a class='pages_check' href=\"javascript:viod(0)\">GO</a> ";
		
		$pagestr .= "		</p>";
		$pagestr .= "		<script type=\"text/javascript\">";
		$pagestr .= "			$('#page_search').click(function(){";
		$pagestr .= "				var go_search_page = $('#go_search_page').val();";
		$pagestr .= "				var search_page = (go_search_page-1);";
		$pagestr .= "				location.replace('".$pageurl."'+search_page);";
		$pagestr .= "			});";
		$pagestr .= "		</script>";

		return $pagestr;
	
	}


	function MorePage(){

		if( strpos($this->url, "?") !== false )
			$pageurl = $this->url."&pageno=";
		else
			$pageurl = $this->url."?pageno=";

		$pagesum = ceil($this->allcount/$this->shownum);
		
		$pagestr = "<p>";
		
		if( $pagesum >= 2 ){
			if( $this->nowpage <= 0 ){

				$pagestr .= "<a href=\"#\">< 上一頁 </a>";

			}else{
				if( $this->nowpage >= $this->totalpage){
					$top_page = (floor($this->nowpage / $this->totalpage)-1);
					$pagestr .= "<a href=\"".$pageurl.($this->nowpage-1)."\"> <上一頁 </a><a href=\"".$pageurl.( $top_page* 10 )."\"> 上".$this->totalpage."頁 </a> ";
				}else
					$pagestr .= "<a href=\"".$pageurl.($this->nowpage-1)."\"> < 上一頁</a>";
			}
		}
		

		if( $pagesum < $this->shownum_page ){

			for($i = 0; $i < $pagesum; $i++){

				if( $i == $this->nowpage ){
					$pagestr .= "<a class=\"here\">".($i+1)."</a> ";
				}else{
					$pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
				}

			}
	
		}elseif( $this->nowpage < $this->shownum_page && $pagesum > $this->shownum_page ){			
			for($i = 0; $i < $this->shownum_page ; $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<a class=\"here\">".($i+1)."</a>";
				}else{
					$pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a>";
				}
	
			}

		}elseif( floor($this->nowpage / $this->totalpage) == floor($pagesum / $this->totalpage)){
			$startpage = floor($this->nowpage / $this->totalpage) ;
			for($i = ($startpage * 10); $i < $pagesum; $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<a class=\"here\">".($i+1)."</a> ";
				}else{
					$pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
				}
	
			}
	
		}else{
			$startpage = floor($this->nowpage / $this->totalpage) ;
			$endpage = ( floor($this->nowpage / $this->totalpage) +1 ) ;
			
			for($i = ( $startpage * 10 ); $i < ( $endpage * 10 ); $i++){
	
				if( $i == $this->nowpage ){
					$pagestr .= "<a class=\"here\">".($i+1)."</a> ";
				}else{
					$pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
				}
	
			}
		}
		
		if( $pagesum >= 2 ){
			if( $this->nowpage >= ($pagesum - 1) ){

				$pagestr .= "<a href=\"#\">下一頁 > </a> ";

			}else{
				if( $pagesum > ($this->totalpage) && (floor($this->nowpage / $this->totalpage)) < (floor($pagesum / $this->totalpage)) )
					$pagestr .= "<a href=\"".$pageurl.((floor($this->nowpage / $this->totalpage)+1) *10 )."\"> 下".$this->totalpage."頁 </a><a href=\"".$pageurl.($this->nowpage+1)."\"> 下一頁 > </a> ";
				else
					$pagestr .= "<a href=\"".$pageurl.($this->nowpage+1)."\">下一頁 > </a> ";
			}
		}

			
		$pagestr .= "</p>";
		
		$pagestr .= "<p class=\"pages_quick\">共 ".$this->allcount."項商品： <input type='text' name='go_page' value='".($this->nowpage+1)."' size='3' id='go_search_page'> / ".$pagesum."頁";
		if($pagesum != 1)
			$pagestr .= "<a class='pages_check' href=\"javascript:viod(0)\">GO</a> ";
		
		$pagestr .= "		</p>";
		$pagestr .= "		<script type=\"text/javascript\">";
		$pagestr .= "			$('#page_search').click(function(){";
		$pagestr .= "				var go_search_page = $('#go_search_page').val();";
		$pagestr .= "				var search_page = (go_search_page-1);";
		$pagestr .= "				location.replace('".$pageurl."'+search_page);";
		$pagestr .= "			});";
		$pagestr .= "		</script>";
		
		return $pagestr;
	
	}

}


?>