<?php 
include("connection.php");
 ?>
<style>
	body {
        padding: 0px;
        margin: 0;
        background: -webkit-linear-gradient(left, #25c481, #25b7c4);
        background: linear-gradient(to right, #25c481, #25b7c4);
        font-family: Arial, Helvetica, sans-serif;
    }
    
    table {
        width: 100%;
        table-layout: auto;
        
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;

    }
    
    #header {
        background-color: #2986cc;
        color: #000000;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #2986cc;
        color: #000000;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #66ffff;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>
<body>
	<h1> My Dashboard </h1>
<table class="table table-bordered">
			<thead>
				<tr id="header">
				<th>Submit_Date</th>
				<th>Vessel</th>
				<th>Email</th>
				<th>E_vessel</th>
				<th>Evonews</th>
				<th>Outlook</th>
				<th>PMS</th>
				<th>FindaPort</th>
				<th>Hydrus</th>
				<th>Voyager</th>
				<th>Loading-Pc</th>
				<th>Message</th>
			</tr>
			</thead>
<?php 
	$query = mysqli_query($conx, "SELECT * FROM test2");
	while($row = mysqli_fetch_array($query)){

        $Submit_Date = $row['Submit_Date'];
		$Vessel = $row['Vessel'];
		$Email = $row['Email'];
		$e_vessel = $row['e_vessel'];
		$Evonews = $row['Evonews'];
		$Outlook = $row['Outlook'];
		$PMS = $row['PMS'];
		$Findaport = $row['Findaport'];
		$Hydrus = $row['Hydrus'];
		$Voyager = $row['Voyager'];
		$Loading_pc = $row['Loading_pc'];
		$message = $row['message'];
 ?>
			<tbody>
				<tr>
					<td><?php echo $Submit_Date; ?></td>
					<td><?php echo $Vessel; ?></td>
					<td><?php echo $Email; ?></td>
					<td><?php echo $e_vessel; ?></td>
					<td><?php echo $Evonews; ?></td>
					<td><?php echo $Outlook; ?></td>
					<td><?php echo $PMS; ?></td>
					<td><?php echo $Findaport; ?></td>
					<td><?php echo $Hydrus; ?></td>
					<td><?php echo $Voyager; ?></td>
					<td><?php echo $Loading_pc; ?></td>
					<td><?php echo $message; ?></td>
				</tr>
			</tbody>
<?php 	} ?>
		</table>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	</body>