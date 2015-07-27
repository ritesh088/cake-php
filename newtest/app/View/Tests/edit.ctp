<h1>Edit Test</h1>
<div>
<?php
$arrCategory=array(1=>"Upwork",2=>"Elance",3=>"Guru",4=>"Freelancer",5=>"Other");
echo $this->Form->create('Test');
echo $this->Form->input('testname',array('label'=>'Enter Test Name'));
//echo $this->Form->Select('platform',array('label'=>'Select Plateform'));
echo $this->Form->Select('platform',array('lable'=>'select plateform',array($arrCategory)));


echo $this->Form->end('Update Test');
?>