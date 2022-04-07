# Escaping From HTML: Everything outside of a pair of opening and closing tags is ignored by the PHP parser which allows PHP files to have mixed content.
<hr>

<p>This is going to be ignored by PHP and displayed by the browser </p>
<?php echo 'While this is going to be parse.'; ?>

<p>This will also be ignored by PHP and displayed by the browser </p>

<?php $expression = true; ?>
<?php if($expression == true): ?>
	This will show if the expression is true.
	<?php else: ?>
		Otherwise this will show.
	<?php endif; ?>
	<hr>

	# Example_02: PHP opening and closing tags
	<hr>

	1. <?php echo 'if you want to serve PHP code in XHTML or XML documents, use these tags <br>' ?>

	2. You can use the short echo tag to <?= 'print this string' ?>.
	It's always enabled in PHP 5.4.0 and later and is equivalent to 
	<?php echo 'print this string <br>' ?>

	3. <? echo 'This code is within short tags, but will only work '. 'if short_open_tag is enabled <br>'; ?>

	4. <script language="php">
		echo 'some editors (like FrontPage) don\'t
		like processing instructions within these tags';
	</script>
	This syntax is removed in PHP 7.0.0
	<br>

	5. <% echo 'You may optinally use ASP-style tags' %>
	Code within these tags <%= $variable; %> is a shortcut for this code <% echo $variable; %>
	<br>
	Both of these syntaxes are removed in PHP 7.0.0

