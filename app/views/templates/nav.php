<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="contacts">Contacts</a></li>
        <li><a href="/contacts/add">Add Contact</a></li>
        <?php if (!isset($_SESSION['userId'])): ?>
            <li><a href="/login">Log In</a></li>
            <li><a href="/register">Register</a></li>
        <?php else: ?>
            <li><a href="">Log Out</a></li>
        <?php endif ?>
    </ul>
</nav>