<?php $id = get_the_ID();
$fields = get_fields($id);
?>
<pre>
        <?php
        print_r($fields);
        print_r(get_post_datetime()->setTimezone(new DateTimeZone('America/New_York'))->format('Y-m-d H:i:s'). '<br>');
        print_r(get_the_author());
        ?>
    </pre>