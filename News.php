<?php

class News{

	private $_id;
	private $_header;
	private $_date;
	private $_author;
	private $_text;

	/*************************************************
	*
	*	use data array ( coming from database) to set News object parameters
	*
	*
	***************************************************/
	public function hydrate(array $data)
	{
	  if (isset($data['id']))
	  {
		$this->_id = $data['id'];
	  }
		 
	  if (isset($data['header']))
	  {
		$this->setHeader($data['header']);
	  }
	  
	  if (isset($data['newsDate']))
	  {
		$this->setDate($data['newsDate']);
	  }
	  
		if (isset($data['author']))
	  {
		$this->setAuthor($data['author']);
	  }
	  
	  if (isset($data['text']))
	  {
		$this->_text = $data['text'];
	  }
	}

	public function getHeader(){
		return $this->_header;
	}
	
	public function getDate(){
		return $this->_date;
	}

	public function getAuthor(){
		return $this->_author;
	}

	public function getText(){
		return $this->_text;
	}

	public function setHeader($header){
		$this->_header = $header;
	}
	
	public function setDate($date){
		$this->_date = $date;
	}

	public function setAuthor($author){
		$this->_author = $author;
	}

	public function setText($text){
		$this->_text = $text;
	}
	
	/*************************************************
	*
	*	return html code to display the news
	*
	************************************************/
	public function getHTML(){
		
		$html = '<tr><td><div id="'.$this->_id.'" class="item" ><H2>'. $this->_header . '</H2>';
		$html .= ' Date :' . $this->_date. '<br/>';
		$html .= ' Author :' . $this->_author . '<br/>';
		$html .= '' . $this->_text .'</div></td></tr>';
		
		return $html;
		
	}

}
