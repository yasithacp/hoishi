<p>Following message received from {{ $name . ' [' . $email . ']' }}</p>

<p>{{ $body }}</p>

<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<?php if(!empty($phone)) { ?>
    <p>Phone: {{ $phone }}</p>
<?php } ?>