<?php

$type = $_REQUEST['type'];

if($type  == 'state')
{
$state = $_REQUEST['state'];

 $district = array(
        'tamilnadu'      => array('Chennai'=> array('a','b'), 'Tiruvallur', 'Kanchipuram', 'Tutricorn'),
        'delhi'   => array('New Delhi', 'North Delhi', 'East Delhi','Central Delhi'),
        'kerala'       => array('Alappuzha', 'Ernakulam', 'Palakkad'),
        'rajasthan' => array('Alwar', 'Bharatpur', 'Bikaner', 'Dholpur'),
        'gujarat' => array('Ahmedabad', 'Amreli', 'Chhota Udaipur', 'Gandhinagar'),
        'andhrapradesh' => array('Anantapur', 'Chittoor', 'Visakhapatnam', 'Krishna'),
      
    );
   
    echo json_encode($district[$state]);exit; 
	
	

}
else if($type == 'district')
{
$district = $_REQUEST['district'];

$val = (explode(",",$district));
$state= $val['1'];
$dis=$val['0'];
$college = array(
        'tamilnadu' => array('chennai'=> array('cc1', 'cc2', 'cc3', 'cc4'),
							'tiruvallur'=>array('ti1','ti2','ti3','ti4'),
							'kanchipuram'=>array('Sri Krishna Engineering college','Rasi Engineering college','Dhanish ahmed ngineering college','dhanalakshmi Engineering college'),
							'tutricorn'=>array('tut1','tut2','tut3','tut3')
							),
		 'kerala' => array('alappuzha'=> array('cc1', 'cc2', 'cc3', 'cc4'),
							'ernakulam'=>array('ti1','ti2','ti3','ti4'),
							'palakkad'=>array('k1','k2','k3','k3'),
							),
							
		  'gujarat' => array('ahmedabad'=> array('cc1', 'cc2', 'cc3', 'cc4'),
							'udaipur'=>array('ti1','ti2','ti3','ti4'),
							'chhota'=>array('k1','k2','k3','k3'),
							'gandhinagar'=>array('tut1','tut2','tut3','tut3')
							),
		'delhi' => array('newdelhi'=> array('cc1', 'cc2', 'cc3', 'cc4'),
							'northdelhi'=>array('ti1','ti2','ti3','ti4'),
							'eastdelhi'=>array('k1','k2','k3','k3'),
							'centraldelhi'=>array('tut1','tut2','tut3','tut3')
							),
		 'andhrapradesh' => array('anantapur'=> array('cc1', 'cc2', 'cc3', 'cc4'),
							'amreli'=>array('ti1','ti2','ti3','ti4'),
							'chhota'=>array('k1','k2','k3','k3'),
							'krishna'=>array('tut1','tut2','tut3','tut3')
							),
		 'rajasthan' => array('alwar'=> array('cc1', 'cc2', 'cc3', 'cc4'),
							'bharatpur'=>array('ti1','ti2','ti3','ti4'),
							'bikaner'=>array('k1','k2','k3','k3'),
							'dholpur'=>array('tut1','tut2','tut3','tut3')
							)
							
        
        
        
        );
       
       
echo json_encode($college[$state][$dis]);exit; 






	
}
