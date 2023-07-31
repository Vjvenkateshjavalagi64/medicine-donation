<?php


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM ngologin JOIN ngosignin ON ngologin.Name = ngosignin.NGOName WHERE CONCAT(Name,ReceiveGoods,Contact,Email,) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM  ngologin JOIN ngosignin ON ngologin.Name = ngosignin.NGOName";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect =mysqli_connect("localhost", "root", "", "ipfinal");
    $filter_Result = mysqli_query($connect, $query);
    if (!$filter_Result) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
    return $filter_Result;
}

?>
<html>
<head>
    <meta charset="utf-8">
  <title>Data Entry Report</title>

  <style>

.body {margin:0;}

@page { size: auto;}

.icon-bar {
  width: 100%;
  margin-top:-52px;
  overflow: auto;
}

.icon-bar a {
  float: right;
  width: 5%;
  text-align: center;
  padding: 6px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
  margin-top: 4px;
}
.iconbar-right a{
  float: left;
  width: 5%;
  text-align: center;
  padding: 6px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #8C0100;
}
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>

  </head>

    
  
   
  
    <table border="1">
        <h2>Available Medicines</h2>
  
        <tr>
        <th>   SL NO</th>
            <th>Medicines Name</th>
            
        
        </tr>
        <tr>
        <td>1</td>
            <td>Dolo</td>
            
            
        </tr>
        <tr>
        <td>2</td>
            <td>citrazine</td>

           
           
        </tr>

        <tr>
        <td>3</td>
            <td>vicks</td>
    </table>
           </tbody>
    </table>
        </form>
        </div>
  
    </body>
</html>