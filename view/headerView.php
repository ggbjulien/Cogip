<header>
    <form action="" method="get">
        <button type='submit' value='home' name='value'>home</button>
        <button type='submit' value='invoices' name='value'>invoices</button>
        <button type='submit' value='companies' name='value'>companies</button>
        <button type='submit' value='contacts' name='value'>contacts</button>
        <?php if ($_SESSION['right'] == 3){
                echo "<button type='submit' value='connexion' name='value'>connexion</button>";
            } else {
                echo "<button type='submit' value='login' name='value'>Admin</button>";
            }
            ?>


    </form>



    <form action="" method="GET">
        <button type='submit' value='invoice' name='option_create'>create_invoice</button>

        <button type='submit' value='contact' name='option_create'>create_contact</button>

        <button type='submit' value='company' name='option_create'>create_company</button>
    </form>

</header>