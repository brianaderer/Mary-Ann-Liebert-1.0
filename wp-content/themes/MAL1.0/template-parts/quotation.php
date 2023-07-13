<div class="hidden duration-700 ease-in-out flex flex-row items-center" data-carousel-item>
<?php $id = get_the_ID();
$fields = get_fields($id);
?>
<div class="absolute block h-full w-full p-20 flex flex-col justify-center items-center">
            <?php if($fields['active']):?>

                    <div class="text-center w-full flex flex-col items-center justify-center">
                        <h3 class="font-roboto font-light text-4xl max-w-[70%]">
                            <?= $fields['quotation']?>
                        </h3>
                        <!-- /.font-roboto -->
                            <br>
                        <p class="font-roboto font-regular text-xl">
                            <?= '-- ' . $fields['author']?>
                        </p>
                        <!-- /.font-roboto font-regular -->
                    </div>
            <?php endif; ?>
        <div class="absolute bottom-10 right-10 p-10 font-roboto font-light">
            <?= 'Posted By: ' . get_the_author() ?><br>
            <?= get_post_datetime()->setTimezone(new DateTimeZone('America/New_York'))->format('M d Y h:i:s A') ?>
        </div>
    <!-- /.absolute bottom-0 right-0 p-10 -->
</div>
    <!-- /.absolute block w-full absolute__translate-x-1/2 absolute__translate-y-1/2 top-1/2 left-1/2 -->
</div>
<!-- /.hidden duration-700 ease-in-out -->