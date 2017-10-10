<?php
   // connect to mongodb
   $m = new MongoClient();
	
   echo "Connection to database successfull.. <br>";
   // select a database
   $db = $m->employees;
	
   echo "Database employees selected.... <br>";

   // create a collection
   $coll = $db->createCollection("sample");

   echo "Collection created sucessfully...... <br>";

   //Inserting a document
   $document = array(
       "eid" => 1,
       "ename" => "Ajay"
   );
   $coll->insert($document);

   echo "Document inserted sucessfully........ <br>";

   //Retrving a document from collection
   $ret = $coll->find();

   foreach ($ret as $doc) {
       echo $doc["ename"];
   }

   //Deleting a collection
   $coll->remove();

   echo "<br> Collection deleted sucessfully.......... <br>";

  
   
?>