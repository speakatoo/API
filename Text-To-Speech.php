<!DOCTYPE html>
<html lang="en">
<head>
  <title>Text To Speech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container tts-form-wrapper">
  <h2 class="text-center">Text To Speech</h2>
    <form action="synthesis.php" method="POST" accept-charset="utf-8">
   
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="mb-3 mt-3">
                    <label for="language" class="mb-1">Language</label>
                    <select id="language" name="language" class="form-control" onchange="selectLanguage(this)">
                        <option value="en-IN">English (India)</option>
                        <option value="en-US">English (US)</option>
                        <option value="hi-IN">Hindi (India)</option>
                        <option value="mr-IN">Marathi (India)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="engine" class="mb-1">Engine</label>
                    <input type="text" class="form-control" id="engine" placeholder="" value="neural" name="engine" readonly>
                </div>
                <div class="mb-3">
                    <label for="voice" class="mb-1">Voice</label>
                    <div id="en-IN-voiceList" style="display:none">
                        <input type="radio" value="a1te97lOq89e7e1736eaceff4c2814048ab47ec24RUJNVCjHs" name="resourceIds" checked> Female, Kajal <br>
                        <input type="radio" value="BFUw72Nl589b0c29fbff4cf7c8c97d2d8bd0818afFpy9aNxI1" name="resourceIds"> Female, Neerja <br>
                        <input type="radio" value="BIMYaj6ur3c6f288f85180a9130c4e5e10f39dc7fPvuC3LYXA" name="resourceIds"> Female, Chitra
                    </div>
                    <div id="en-US-voiceList" style="display:none">
                        <input type="radio" value="NBjmnhZ14f5a080950da0c9be0932f26529096a96ZclB3N5DW" name="resourceIds"> Female, Ivy<br>
                        <input type="radio" value="3dMTJsRbHf5a080950da0c9be0932f26529096a9687A02VaTU" name="resourceIds"> Male, Joey<br>
                        <input type="radio" value="vWFX6rRbL89b0c29fbff4cf7c8c97d2d8bd0818af5d8STXU4b" name="resourceIds"> Female, Amber
                    </div>
                    <div id="hi-IN-voiceList" style="display:none">
                        <input type="radio" value="dzONcVBE489b0c29fbff4cf7c8c97d2d8bd0818af5fR39IlGx" name="resourceIds" > Male, मधुर<br>
                        <input type="radio" value="PSeIhyH4o89b0c29fbff4cf7c8c97d2d8bd0818afdVScD0h1G" name="resourceIds"> Female, स्वरा<br>
                        <input type="radio" value="89dZsr3m03c6f288f85180a9130c4e5e10f39dc7f5XV9rtuEC" name="resourceIds"> Male, Niraj
                    </div>
                    <div id="mr-IN-voiceList" style="display:none">
                        <input type="radio" value="gd29am8Mo89b0c29fbff4cf7c8c97d2d8bd0818afiK1NdDCqg" name="resourceIds" > Female, आरोही<br>
                        <input type="radio" value="JODTjXa9v89b0c29fbff4cf7c8c97d2d8bd0818aflFA8MqRg4" name="resourceIds">  Male, मनोहर
                    </div>
                </div>
            </div>   
            <div class="col-lg-6 col-md-6 col-12">
                <div class="mb-3 mt-3">
                    <label for="title" class="mb-1">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                </div>
                <div class="mb-3">
                    <label for="ttsText" class="mb-1">Text</label>
                    <textarea class="form-control" rows="5" id="ttsText" placeholder="Enter your text" name="ttsText"></textarea>
                </div>
            </div> 
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
     </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="js/tts.js"></script>
</body>
</html>