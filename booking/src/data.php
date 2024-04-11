<?
$tours=[
['name'    => 'Paris',
'image'    => 'https://img.freepik.com/free-photo/eiffel-tower-in-paris-with-gorgeous-colors-in-autumn_268835-828.jpg?size=626&ext=jpg&ga=GA1.1.1908636980.1710460800&semt=ais',
'airport' => 'Chisinau',
'price'    => [
       'amount'   => '100',
       'currency' => 'USD',
]
],

['name'    => 'Venice',
'image'    => 'https://cdn.britannica.com/62/153462-050-3D4F41AF/Grand-Canal-Venice.jpg',
'airport' => 'Chisinau',
'price'    => [
       'amount'   => '500',
       'currency' => 'USD',
]
],
['name'    => 'New-York',
'image'    => 'https://cdn.britannica.com/61/93061-050-99147DCE/Statue-of-Liberty-Island-New-York-Bay.jpg',
'airport' => 'Munnih',
'price'    => [
       'amount'   => '1000',
       'currency' => 'USD',
]
]

];

save($tours,'tour');
?>
