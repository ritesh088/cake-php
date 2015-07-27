<?php $this->Html->script('contact', array('block' => 'scriptBottom')); ?>
<h2>Contact</h2>
<?php
debug($cont);
?>
<?php 
echo $this->Form->create('Contact');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('telephone');
echo $this->Form->input('message');
echo $this->Form->end('Submit');
?>
<?php
if($cont)
{
	?>
    <table>
    <tr>
        <td>S.No</td>
        <td>Name</td>
        <td>Email</td>
        <td>Telephone</td>
    </tr>
    <?php
}
?>