<?php
                $server="localhost";
                $user="root";
                $pass="";
                $db="robipos";
                $connection=mysqli_connect($server,$user,$pass,$db);





                //UserID4 
                $resultuserid4=mysqli_query($connection,"SELECT sum(total) as totalcount4 from sales where userid='4'");
               $datauid4=mysqli_fetch_assoc($resultuserid4);
               $uid4=$datauid4['totalcount4'];

               //UserID5 
                $resultuserid5=mysqli_query($connection,"SELECT sum(total) as totalcount5 from sales where userid='5'");
               $datauid5=mysqli_fetch_assoc($resultuserid5);
               $uid5=$datauid5['totalcount5'];
               

                //UserID6 Count
                $resultuserid6=mysqli_query($connection,"SELECT sum(total) as totalcount3 from sales where userid='6'");
               $datauid6=mysqli_fetch_assoc($resultuserid6);
               $uid6=$datauid6['totalcount3'];

                //UserID1 Count
                $result=mysqli_query($connection,"SELECT sum(total) as totalcount1 from sales where userid='4'");
               $data=mysqli_fetch_assoc($result);
               $testa=$data['totalcount1'];
              //UserID2 Count
               $resultclothings=mysqli_query($connection,"SELECT sum(total) as totalcount2 from sales where userid='5'");
               $dataclothings=mysqli_fetch_assoc($resultclothings);
               $clothings=$dataclothings['totalcount2'];
               
               
               


/*

                $resultbooks=mysqli_query($connection,"SELECT count(*) as bookscount from allproductsforsale where productcategory='books'");
                $databooks=mysqli_fetch_assoc($resultbooks);
                $books=$databooks['bookscount'];
               //others
               $resultothers=mysqli_query($connection,"SELECT count(*) as otherscount from allproductsforsale where productcategory='others'");
               $dataothers=mysqli_fetch_assoc($resultothers);
               $others=$dataothers['otherscount'];
               
*/
?>

<!DOCTYPE HTML>
<html>
<head>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

 //var php_var = "<?php echo $testa; ?>";
 //var test1=<?php echo json_encode($testa, JSON_NUMERIC_CHECK); ?>;
// var clothings=<?php echo json_encode($clothings, JSON_NUMERIC_CHECK); ?>;
  var guid6=<?php echo json_encode($uid6, JSON_NUMERIC_CHECK); ?>;
  var guid5=<?php echo json_encode($uid5, JSON_NUMERIC_CHECK); ?>;
   var guid4=<?php echo json_encode($uid4, JSON_NUMERIC_CHECK); ?>;


window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Graphical Summary of Sales"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "pie",
			dataPoints: [
				//{ label: "Userid-4",  y:test1 },
				//{ label: "Userid-5", y: clothings  },
				{ label: "Okoth", y: guid4 },
				{ label: "Barasa",  y: guid5 },
				{ label: "Lisa",  y:guid6  }

			]
		}
		]
	});
	chart.render();
}

</script>

</head>
<body>
<div id="chartContainer" style="height: 500px; width: 100%;"></div>

</body>
</html>
