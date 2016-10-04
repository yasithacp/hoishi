<h2>{{ $email }} contacted you through hoishi.com</h2>

<p>Requester's Name: {{ $name }}</p>
<p>Requester's Email: {{ $email }}</p>
<?php if(!empty($phone)) { ?>
    <p>Requester's Phone: {{ $phone }}</p>
<?php } ?>
<p>Requester's Message: {{ $body }}</p>