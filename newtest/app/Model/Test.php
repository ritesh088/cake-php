<?php
class Test extends AppModel 
{
   public $validate = array(
                           'testname'=>array(
						                    'rule'=>'|^[A-Za-z]*$|',
											'message'=>'please enter alphabets only.'
						                   )
								);
}
?>