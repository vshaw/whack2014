<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dcm3jsrdb6tfv9 host=ec2-54-204-43-138.compute-1.amazonaws.com port=54
32 user=usxfrhbbogxcra password=LdapB749U7QIfJkQgPW20CpvEh sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error."
    exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
echo "<h2>worked";
?>