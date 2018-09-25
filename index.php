
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>


      <form action="submit.php" method="post">
        <label for="spz">SPZ</label>
          <input id="spz" type="text" name="spz" placeholder="AAA AAAA">
        <label for="spz">Rok</label>
          <input id="rok" type="number" min="1960" max="2018" name="rok" placeholder="1111">
    <br />
         <label for="auta">Auto</label>
            <select id="auta"  name="auta" >
                  <option value="Ford">Ford</option>
                  <option value="Škoda">Škoda</option>
                  <option value="Jeep">Jeep</option>
                  <option value="Gaz">Gaz</option>
                  <option value="Uaz">Uaz</option>
                  <option value="Fiat">Fiat</option>
                </select>
      <br />
            <input type="submit" name="submit" value="Odeslat">
      </form>
    </body>
  </html>
