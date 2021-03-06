<?php
	$title = "{$error['class']}::{$error['method']}()";
	$file = realpath($error['file']);
	$line = intval($error['line']);
	$url = "txmt://open?url=file://{$file}&line={$line}";
?>

<div class="test-exception">
	Exception thrown in
	<a href="<?php echo $url; ?>"><?php echo $title; ?> on line <?php echo $line ?></a>:
	<span class="content"><?php echo $error['message'] ?></span>

	<?php if (isset($error['trace']) && !empty($error['trace'])): ?>
		Trace: <span class="trace"><?php echo $error['trace'] ?></span>
	<?php endif ?>
</div>
