<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List des autorisations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Choose between regular React Bootstrap tables or advanced dynamic ones.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet"></head>
<body>
	
             <?php 



session_start();


include '../start.php';



     ?>
              <div class="app-container app-theme-white body-tabs-shadow">
                    <div class="app-container">
                         <div class="app-page-title">
                        <div class="container fiori-container">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                     Liste des autorisations 
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                               
                                    </div>
                        </div>
                    </div> 
<br><br>
                    <div class="main-card mb-3 card mt-4" style="width: 80%; margin-left: 10%;">
                        <div class="card-body">
                            <table  id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
	                                <th>Nom </th>
	                                <th>Prenom</th>
                                    <th>Specialité</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Sexe</th>
                                    <th>Role</th>
                                    <th>Cin</th>
                                    <th>date1</th>
                                    <th>Telephone</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        include "../crud.php";

                                        $crud=new crud();
                                        $conn=$crud->cnx;

                                        foreach ($crud->afficheUser($conn) as $l) {
                                            //echo "id = ".$l["id"];
                                    ?>
	                                <tr>



                                        <td><?php echo $l["nom"]; ?></td>
                                        <td><?php echo $l["prenom"]; ?></td>
                                        <td><?php echo $l["specialite"]; ?></td>
                                        <td><?php echo $l["email"]; ?></td>
                                        <td><?php echo $l["password"]; ?></td>
                                        <td><?php echo $l["sexe"]; ?></td>
                                        <td><?php echo $l["role"]; ?></td>
                                        <td><?php echo $l["cin"]; ?></td>
                                        <td><?php echo $l["date1"]?></td>
                                         <td><?php echo $l["telephone"]?></td>

                                    <?php } ?>
	                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
           
<script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script>
</body>
</html>