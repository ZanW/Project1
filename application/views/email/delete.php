<head>
    <title>Member Update</title>
</head>

<h2><?php echo $title; ?></h2>

<?php echo form_open('email/delete'); ?>
<?php foreach ($email as $email_item): ?>

    ID:
    <input type="input" name="id" value="<?php echo $id;?>" readonly /><br>

    Sender Email:
    <input type="input" name="sender_email" value="<?php echo $email_item['sender_email'];?>" readonly/><br>

    Receiver Email:
    <input type="input" name="receiver_email" value="<?php echo $email_item['receiver_email'];?>" readonly /><br>

    Date & Time Sent:
    <input type="input" name="dts" value="<?php echo $email_item['dts'];?>" readonly /><br>

    Subject:
    <input type="input" name="subject" value="<?php echo $email_item['subject'];?>" readonly /><br>

    Message:
    <input type="input" name="email_content" value="<?php echo $email_item['email_content'];?>" readonly /><br>

<?php endforeach; ?>

<input type="submit" name="submit" value="Confirm Delele" />

</form>
