<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Reverse a Number, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Kyle Matthew" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Reverse a Number, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Reverse a Number, in PHP</span>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/counting-backwards-to-exercises-worksheet-kids-103205379.webp" alt="Reverse a numbers image" />
      </div>

      <div class="page-content">
        <h5>Enter a positive number to reverse:</h5>

        <form action="reverse-answer.php" method="post">
          <!-- Input Number Field -->
          <label for="positive-integer-number-1">Number:</label><br />
          <input type="number" id="positive-integer-number-1" name="positive-integer-number-1" min="1" placeholder="e.g. 123" required />
          <br /><br />

          <!-- Submit Button -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
            SHOW REVERSED
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>
