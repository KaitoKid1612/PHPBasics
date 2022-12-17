<?php
    require ('components/header.php');

    $stmt = $conn->prepare("SELECT name, email, body FROM feedback");
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $feedbacks = $stmt->fetchAll();
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Body</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $count = 1;
        foreach($feedbacks as $feedback){
            $name = $feedback['name'] ?? '';
            $email = $feedback['email'] ?? '';
            $body = $feedback['body'] ?? '';
        ?>
        <tr>
            <th scope="row"><?php echo $count++ ?></th>
            <td><?php echo $name?></td>
            <td><?php echo $email?></td>
            <td><?php echo $body?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>


<?php include ('components/footer.php'); ?>