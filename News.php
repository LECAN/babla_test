<?php

class News{

	private $_id;
	private $_header;
	private $_author;
	private $_text;

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

	public function getAuthor(){
		return $this->_author;
	}

	public function getText(){
		return $this->_text;
	}

	public function setHeader($header){
		$this->_header = $header;
	}

	public function setAuthor($author){
		$this->_author = $author;
	}

	public function setText($text){
		$this->_text = $text;
	}
	
	public function getHTML(){
		
		$html = '<tr><td> Header : '. $this->_header . '</td>';
		$html .= '<td> Author :' . $this->_author . '</td>';
		$html .= '<td>' . $this->_text .'</td></tr>';
		
		return $html;
		
	}

}
