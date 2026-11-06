<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

	<p>
		<label for="name">Name <sup>*</sup>:</label>
		<input type="text" id="name" placeholder="Enter your first and last name." name="name" required/>
	</p>
	<p>
		<label for="email">Email <sup>*</sup>:</label>
		<input type="email"	id="email" placeholder="Provide a valid email address." name="email" required/>
	</p>
	<p>
		<label for="message">Message:</label>
		<textarea id="message" placeholder="Tell me about your design needs." name="message"></textarea>
	</p>
	<p class="button">
		<button type="submit">Submit</button>
	</p>
</body>
</html>
