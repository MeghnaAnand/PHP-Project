<?php
class template
  {
     private $_templatevar=false;
     public function assign($name,$value) 
     {
           $this->_templatevar[$name]=$value;
     }
     public function display($template) 
     {
           if ($this->_templatevar)
            {
foreach($this->_templatevar as $__key => $__val)
			  { 
			 	$$__key=$__val;
                     // returns PHP-Variable with $.. as Value
              }      
           }
   include($template);
     }
} 
?>
