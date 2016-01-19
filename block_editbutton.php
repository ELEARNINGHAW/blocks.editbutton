<?php 
class block_editbutton  extends block_base 
{
    function init() 
    {
      $this->title = "Edit";
    }

    function instance_allow_multiple()
    {
        return false;
    }

    function has_config() 
    {
        return false;
    }	

    function applicable_formats() 
    {
      return array
      (
        'all' => true, 
        'site-index' => true,
       );
    }
    function get_content() 
    {
         global $PAGE;    
         $contentA = $PAGE->button;
            
         if ($this->content !== NULL) 
         {        
            return $this->content;    
         }
         $this->content = new stdClass;    
         $this->content->text = $contentA;    
       
         return $this->content;	
    }	
    
    function hide_header() 	
    {	
        return false;	
    }
}?>
