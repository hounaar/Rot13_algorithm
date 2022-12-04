<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Rot 13 Algorithm</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4 title">
            <h3>Rot-13 Encryptor and Decryptor</h3>
        </div>
        <div class="row mt-3">
            <div class="col">
                basic letter replacement figure that replaces a letter with the thirteenth letter after it in the letters in order. ROT13 is an exceptional instance of the Caesar figure which was created in old Rome.

Since there are 26 letters (2×13) in the fundamental Latin letters in order, ROT13 is its own opposite; that is, to fix ROT13, a similar calculation is applied, so a similar activity can be utilized for encoding and translating. The calculation gives essentially no cryptographic security, and is many times refered to as a sanctioned illustration of powerless encryption.

ROT13 is utilized in web-based gatherings for of concealing spoilers, zingers, puzzle arrangements, and hostile materials from the relaxed look. ROT13 has enlivened an assortment of letter and word games on the web, and is regularly referenced in newsgroup discussions.
            </div>
        </div>
        <div class="row mt-3">
            <form class="form-group">
                <textarea name="input" class="form-control" id="" placeholder="Enter here" rows="5"></textarea>
                <button class="btn mt-4 btn-primary">Encrypt / Decrypt</button>
                <div class="col mt-3 code"></div>
                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
