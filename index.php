<?php require 'topPage.php';?>

    <div id="logInForm">
        <h4>
    <!-- this is start page -->
    <p>WITAJ, JEŚLI OTWIERASZ STRONĘ PO RAZ PIERWSZY I NIE MASZ STWORZONEJ BAZY DANYCH DLA NOTATEK, KLIKNIJ TU
    <form action="check.php">
            <input type="hidden" name="id">
            <button class="about">X</button>
            </form>
</p>
    <p>JEŚLI BAZA DANYCH JUŻ ISTNIEJE, KLIKNIJ TU ABY SIĘ ZALOGOWAĆ</p>

            <form action="login.php">
            <button class="about">X</button>
            </form>

<h4>
</div>

<?php require 'bottomPage.php';?>