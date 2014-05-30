<?php 

$post_data = array('item_type_id' => "1",
    'string_key' =>'sdfdsfdsf',
    'string_value' => '3434',
    'string_extra' => 'dfdfd',
    'is_public' => '344444444444',
    'is_public_for_contacts' => 'pub');

//echo $post_data = json_encode(array('item' => $post_data));
//echo $post_data = json_encode(array('item' => $post_data), JSON_FORCE_OBJECT);

/*$info = '{
    "schema": "StepInfo",
    "data": [
        {
            "id": 26,
            "externalId": "4265383",
            "name": null,
            "description": null,
            "createdAt": "2012-12-11T06:45:27.000Z",
            "updatedAt": null,
            "deletedAt": null,
            "nickName": null,
            "status": "Active",
            "email": "wallace@qwerty123.com",
            "phoneNumber": 5555555,
            "serviceAddress": {
                "name": "Test1 pilot2",
                "address1": "2191 Laurelwood Rd",
                "address2": null,
                "address3": "",
                "city": "Santa Clara",
                "region": "CA",
                "postalCode": "95054-1514",
                "country": "US",
                "dma": 807,
                "fips": "06085",
                "latitude": 37.38136,
                "longitude": -121.960289
            },
            "billingAddress": null,
            "creditLimit": 1000,
            "primaryUserId": 787,
            "channelMapId": 1,
            "firstName": "WW",
            "lastName": "CC",
            "showRealName": true,
            "marketingOptIn": false,
            "geoFencing": "Enabled",
            "isGuest": false
        }
      ]
   }';*/


function objectToArray( $object )
  {
      if( !is_object( $object ) && !is_array( $object ) )
      {
          return $object;
      }
      if( is_object( $object ) )
      {
          $object = get_object_vars( $object );
      }
      return array_map( 'objectToArray', $object );
  }
    
$info = '{
    "schema": "InstallationInfo",
    "tableinfo": [
        {
            "Userid": 1,
            "City": "4265383",
            "AvgTime": "10"
        }
      ]
   }';

//echo $info;

$data = json_decode($info);

$table_name = $data->schema;
$info = $data->tableinfo;
$table_info = objectToArray($info[0]);

$table_keys = array_keys($table_info);

 $table_values = array_values($table_info);

$coloumns_count = count($table_keys);

$coloumns = '';
$insert_coloumns = '';
$coloumns_values = '';
for($i=0;$i<$coloumns_count;$i++){
  
  $insert_coloumns .= $table_keys[$i] .",";
  $coloumns .= $table_keys[$i] ." CHAR(100)".",";
  $coloumns_values .= "'".$table_values[$i]."'".",";
}

$coloumns = chop($coloumns,",");
$insert_coloumns = chop($insert_coloumns,",");
$values = chop($coloumns_values,",");

 $con=mysqli_connect("localhost","root","pop@123","Popcorn_Analytics");
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE IF NOT EXISTS ".$table_name."($coloumns)";

// Execute query
if (mysqli_query($con,$sql))
  {
    echo "Table ".$table_name." created successfully";
  }
else
  {
    echo "Error creating table: " . mysqli_error($con);
  }
?>


<?php 
  $sql="INSERT INTO ".$table_name." ($insert_coloumns) VALUES($values)";
  
  if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }
  echo "1 record added";
?>