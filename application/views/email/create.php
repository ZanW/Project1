<head>
    <title>Compose Email</title>
</head>

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php $attributes = array('id' => 'create');
echo form_open('email/create', $attributes ); ?>
From:
<input type="input" name="sender_email" /><br>

To:
<input type="input" name="receiver_email" /><br>

Subject:
<input type="input" name="subject" /><br><br>

<textarea rows="10" cols="50" name="email_content" form="create"></textarea>
<br><br>

<input type="submit" name="submit" value="Send" />

</form>


