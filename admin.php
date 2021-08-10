<?php require_once 'konfiguracija.php';
if (isset($_SESSION['autoriziran'])) {
  header('location:' . $putanjaAplikacije . './dodavanjeKlijenata/first.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="hr">

<head>
<?php include './include/admin/head.php';?>
</head>

<body>
<?php include './include/admin/nav.php';?>
  <section class="signup-form">
    <form action="<?php echo $putanjaAplikacije; ?>autorizacija.php" method="post">

      <div class="field2">
        <label>Šifra</label>
        <input type="password" name="lozinka" id="lozinka">
      </div>

      <div class="field3">
        <h3>Prijava</h3>
        <label>Email</label>
        <input type="email" name="email" id="email">
      </div>

      <div class="btn">
        <button name="submit" type="submit" class="button radius success" value="Prijavi se">Prijavi se</button>
        <p>sifre</p>
        <p>rade@901.hr=r</p>
        <p>ivana@901.hr=i</p>
      </div>
    </form>
  </section>
  <?php include './include/admin/script.php';?>
</body>

</html>