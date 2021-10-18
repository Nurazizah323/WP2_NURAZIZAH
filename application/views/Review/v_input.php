<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<style>
  fieldset 
  {
    width: 40%;
    margin: 20px auto;
    border-radius: 5px;
  }

  select 
  {
    width: 100%;
  }
</style>

<body>
  <fieldset>
    <legend>Input Transaksi</legend>

    <form method="POST">
      <table>   
        <tr>
          <th>Nama Pembeli</th>
          <td>:</td>
          <td>
            <input type="text" name="nama" id="nama">
          </td>
        </tr>
       
        <tr>
          <th>Nomer HP</th>
          <td>:</td>
          <td>
            <input type="text" name="nhp" id="nhp">
          </td>
        </tr>

        <tr>
          <th>Merk Sepatu</th>
          <td>:</td>
          <td>
            <select name="merk" id="merk">
              <option>-- PILIH --</option>
              <?php foreach ($merk as $m) : ?>
                <option value="<?= $m; ?>"><?= $m; ?></option>
              <?php endforeach; ?>
            </select>
          </td>
        </tr>
      </table>
    </form>
  </fieldset>
</body>

</html>