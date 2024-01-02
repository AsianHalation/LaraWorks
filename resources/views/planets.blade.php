<?php

?>
@foreach ($planets as $planet)
    return view(
        <h2>{($planet->name)}</h2>
        <p>{($planet->description)}</p>
    );
@endforeach