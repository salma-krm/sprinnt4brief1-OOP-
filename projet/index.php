<?php

include_once 'Contact.php';


$contact = new Contact($connection);


$contacts = $contact->getAllContacts();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="./style.css?v=1.2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
    <nav class=" w-100 navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>

    <div class="container mt-5">
       
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>EMAIL</th>
                    <th>TELEPHONE</th>
                    <th>ACTION</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                    <td><?= $contact["id"]?></td>
                       <td><?= $contact["nom"]?></td>
                      <td><?= $contact["prenom"]?></td>
                        <td><?= $contact["email"]?></td>
                      <td><?= $contact["telephone"]?></td>
                        <td>
                            <form action="edit.php" method="POST" style="display:inline;">
                                <button type="submit" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                            </form>
                            <form action="delete.php" method="POST" style="display:inline;">
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<div class=" d-flex flex-column justify-content-center align-items-center bg-secondary-subtle w-75 p-4 rounded form-contact">
    <h1>Add contact</h1>
 <form method ='post' action='./ajouter.php'>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nom</label>
    <input type="text" name='name'class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">prenom</label>
    <input type="text"name='prenom' class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">telephone</label>
    <input type="text" name='mobile' class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" name='submit'class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
